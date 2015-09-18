<?php
// Usage: php baiduSMSV3-KR.php < seedwordFile > log
error_reporting(E_ALL ^ E_NOTICE);

require_once 'inc/sms_v3_KRService.php';

$service = new sms_v3_KRService();

$seedFilter = new SeedFilter();
$seedFilter->setHotMonth(true);
$seedFilter->setMaxNum(500);

$request = new GetKRFileIdbySeedWordRequest();
$request->setSeedFilter($seedFilter);
$request->setDevice(0);

$pathRequest = new GetKRFilePathRequest();
$stateRequest = new GetKRFileStateRequest();

$fileIdArr=array();
$filePathArr=array();

$crawllist=array_filter(array_map('trim', file("php://stdin")),'seedWordLenFilter');
$crawllist=array_keys(array_flip($crawllist));

function seedWordLenFilter($item)
{
	if(strlen($item)<=64 && !empty($item)) return $item;
}

while (!empty($crawllist)) {
	$seedWordArr=array();
	if (count($crawllist)>100) {
		for ($i=0; $i < 100; $i++) { 
			$seedWordArr[]=array_pop($crawllist);
		}
	} else {
		$seedWordArr=$crawllist;
		unset($crawllist);
	}

	$request->setSeedWords($seedWordArr);

	$errTimes=0;
	do {
		$start = microtime(true);
		$krFileId = $service->getKRFileIdbySeedWord($request)->krFileId;
		$stop = microtime(true);
		sleep(round(3-$stop+$start));

		$errTimes++;
		if($errTimes>=10) break;
	} while (empty($krFileId));

	if (!empty($krFileId)) $fileIdArr[]= $krFileId;
}

$file=fopen("fileIds.txt","w");
fwrite($file,implode("\n", array_filter($fileIdArr)));
fclose($file);

while (!empty($fileIdArr)) {

	reset($fileIdArr);
	$key=key($fileIdArr);
	$val=current($fileIdArr);
	unset($fileIdArr[$key]);

	$pathRequest->setKrFileId($val);
	$stateRequest->setKrFileId($val);

	$start = microtime(true);
	$filePath=$service->getKRFilePath($pathRequest)->filePath;
	$stop = microtime(true);
	sleep(round(3-$stop+$start));

	if (!empty($filePath)) {
		$filePathArr[]=$filePath;
		echo $filePath."\n";
	} else {

		$start = microtime(true);
		$state=$service->getKRFileState($stateRequest)->isGenerated;
		$stop = microtime(true);
		sleep(round(3-$stop+$start));
		
		echo $val."\t".$state."\n";
		if ($state != 4) array_push($fileIdArr, $val);
	}
}

unset($fileIdArr);
$file=fopen("filePaths.txt","w");
fwrite($file,implode("\n", array_filter($filePathArr)));
fclose($file);

$dir=dirname(__FILE__).'/csvSrc/';
foreach ($filePathArr as $url) {
	preg_match('/reportid=([\w\d]+)/i', $url, $matches);
	$filename=$matches[1].".csv";
	$timestamp=time()+360000;
	$url=preg_replace('/timestamp=([\w\d]+)/i', "timestamp=".$timestamp, $url);

	$downFile=fopen($dir.$filename, 'w');
	$ch=curl_init($url);
	curl_setopt($ch, CURLOPT_FILE, $downFile);
	curl_exec($ch);
	curl_close($ch);
}
