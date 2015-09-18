<?php
require_once 'CommonService.php';

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class AutoAdGroupResult
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AutoAdGroupResult Attributes
  public $adgroupId;
  public $adgroupName;
  public $isNewAdgroup;
  public $keywords;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setAdgroupId($aAdgroupId)
  {
    $wasSet = false;
    $this->adgroupId = $aAdgroupId;
    $wasSet = true;
    return $wasSet;
  }

  public function setAdgroupName($aAdgroupName)
  {
    $wasSet = false;
    $this->adgroupName = $aAdgroupName;
    $wasSet = true;
    return $wasSet;
  }

  public function setIsNewAdgroup($aIsNewAdgroup)
  {
    $wasSet = false;
    $this->isNewAdgroup = $aIsNewAdgroup;
    $wasSet = true;
    return $wasSet;
  }
   public function setKeywords($akeywords) {
       $this->keywords = $akeywords;
   }

  public function addKeyword($aKeyword)
  {
    $wasAdded = false;
    $this->keywords[] = $aKeyword;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKeyword($aKeyword)
  {
    $wasRemoved = false;
    unset($this->keywords[$this->indexOfKeyword($aKeyword)]);
    $this->keywords = array_values($this->keywords);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }

  public function getAdgroupName()
  {
    return $this->adgroupName;
  }

  public function getIsNewAdgroup()
  {
    return $this->isNewAdgroup;
  }


  public function getKeywords()
  {
    $newKeywords = $this->keywords;
    return $newKeywords;
  }

  public function numberOfKeywords()
  {
    $number = count($this->keywords);
    return $number;
  }

  public function indexOfKeyword($aKeyword)
  {
    $rawAnswer = array_search($aKeyword,$this->keywords);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function isIsNewAdgroup()
  {
    return $this->isNewAdgroup;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetAdGroupBySeedWordsRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAdGroupBySeedWordsRequest Attributes
  public $adGroupIds;
  public $seedWords;
  public $device;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setAdGroupIds($aadGroupIds) {
       $this->adGroupIds = $aadGroupIds;
   }

  public function addAdGroupId($aAdGroupId)
  {
    $wasAdded = false;
    $this->adGroupIds[] = $aAdGroupId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeAdGroupId($aAdGroupId)
  {
    $wasRemoved = false;
    unset($this->adGroupIds[$this->indexOfAdGroupId($aAdGroupId)]);
    $this->adGroupIds = array_values($this->adGroupIds);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setSeedWords($aseedWords) {
       $this->seedWords = $aseedWords;
   }

  public function addSeedWord($aSeedWord)
  {
    $wasAdded = false;
    $this->seedWords[] = $aSeedWord;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeSeedWord($aSeedWord)
  {
    $wasRemoved = false;
    unset($this->seedWords[$this->indexOfSeedWord($aSeedWord)]);
    $this->seedWords = array_values($this->seedWords);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setDevice($aDevice)
  {
    $wasSet = false;
    $this->device = $aDevice;
    $wasSet = true;
    return $wasSet;
  }


  public function getAdGroupIds()
  {
    $newAdGroupIds = $this->adGroupIds;
    return $newAdGroupIds;
  }

  public function numberOfAdGroupIds()
  {
    $number = count($this->adGroupIds);
    return $number;
  }

  public function indexOfAdGroupId($aAdGroupId)
  {
    $rawAnswer = array_search($aAdGroupId,$this->adGroupIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getSeedWords()
  {
    $newSeedWords = $this->seedWords;
    return $newSeedWords;
  }

  public function numberOfSeedWords()
  {
    $number = count($this->seedWords);
    return $number;
  }

  public function indexOfSeedWord($aSeedWord)
  {
    $rawAnswer = array_search($aSeedWord,$this->seedWords);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getDevice()
  {
    return $this->device;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetAdGroupBySeedWordsResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAdGroupBySeedWordsResponse Attributes
  public $autoAdGroupResults;
  public $sessionid;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setAutoAdGroupResults($aautoAdGroupResults) {
       $this->autoAdGroupResults = $aautoAdGroupResults;
   }

  public function addAutoAdGroupResult($aAutoAdGroupResult)
  {
    $wasAdded = false;
    $this->autoAdGroupResults[] = $aAutoAdGroupResult;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeAutoAdGroupResult($aAutoAdGroupResult)
  {
    $wasRemoved = false;
    unset($this->autoAdGroupResults[$this->indexOfAutoAdGroupResult($aAutoAdGroupResult)]);
    $this->autoAdGroupResults = array_values($this->autoAdGroupResults);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setSessionid($aSessionid)
  {
    $wasSet = false;
    $this->sessionid = $aSessionid;
    $wasSet = true;
    return $wasSet;
  }


  public function getAutoAdGroupResults()
  {
    $newAutoAdGroupResults = $this->autoAdGroupResults;
    return $newAutoAdGroupResults;
  }

  public function numberOfAutoAdGroupResults()
  {
    $number = count($this->autoAdGroupResults);
    return $number;
  }

  public function indexOfAutoAdGroupResult($aAutoAdGroupResult)
  {
    $rawAnswer = array_search($aAutoAdGroupResult,$this->autoAdGroupResults);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getSessionid()
  {
    return $this->sessionid;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class SeedFilter
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //SeedFilter Attributes
  public $matchType;
  public $negativeWord;
  public $pvLow;
  public $pvHigh;
  public $competeLow;
  public $competeHigh;
  public $searchRegion;
  public $regionExtend;
  public $maxNum;
  public $hotMonth;
  public $monthFilter;
  public $removeDuplicate;
  public $duplicateUIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setMatchType($aMatchType)
  {
    $wasSet = false;
    $this->matchType = $aMatchType;
    $wasSet = true;
    return $wasSet;
  }
   public function setNegativeWord($anegativeWord) {
       $this->negativeWord = $anegativeWord;
   }

  public function addNegativeWord($aNegativeWord)
  {
    $wasAdded = false;
    $this->negativeWord[] = $aNegativeWord;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeNegativeWord($aNegativeWord)
  {
    $wasRemoved = false;
    unset($this->negativeWord[$this->indexOfNegativeWord($aNegativeWord)]);
    $this->negativeWord = array_values($this->negativeWord);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setPvLow($aPvLow)
  {
    $wasSet = false;
    $this->pvLow = $aPvLow;
    $wasSet = true;
    return $wasSet;
  }

  public function setPvHigh($aPvHigh)
  {
    $wasSet = false;
    $this->pvHigh = $aPvHigh;
    $wasSet = true;
    return $wasSet;
  }

  public function setCompeteLow($aCompeteLow)
  {
    $wasSet = false;
    $this->competeLow = $aCompeteLow;
    $wasSet = true;
    return $wasSet;
  }

  public function setCompeteHigh($aCompeteHigh)
  {
    $wasSet = false;
    $this->competeHigh = $aCompeteHigh;
    $wasSet = true;
    return $wasSet;
  }
   public function setSearchRegion($asearchRegion) {
       $this->searchRegion = $asearchRegion;
   }

  public function addSearchRegion($aSearchRegion)
  {
    $wasAdded = false;
    $this->searchRegion[] = $aSearchRegion;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeSearchRegion($aSearchRegion)
  {
    $wasRemoved = false;
    unset($this->searchRegion[$this->indexOfSearchRegion($aSearchRegion)]);
    $this->searchRegion = array_values($this->searchRegion);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setRegionExtend($aRegionExtend)
  {
    $wasSet = false;
    $this->regionExtend = $aRegionExtend;
    $wasSet = true;
    return $wasSet;
  }

  public function setMaxNum($aMaxNum)
  {
    $wasSet = false;
    $this->maxNum = $aMaxNum;
    $wasSet = true;
    return $wasSet;
  }

  public function setHotMonth($aHotMonth)
  {
    $wasSet = false;
    $this->hotMonth = $aHotMonth;
    $wasSet = true;
    return $wasSet;
  }

  public function setMonthFilter($aMonthFilter)
  {
    $wasSet = false;
    $this->monthFilter = $aMonthFilter;
    $wasSet = true;
    return $wasSet;
  }

  public function setRemoveDuplicate($aRemoveDuplicate)
  {
    $wasSet = false;
    $this->removeDuplicate = $aRemoveDuplicate;
    $wasSet = true;
    return $wasSet;
  }
   public function setDuplicateUIds($aduplicateUIds) {
       $this->duplicateUIds = $aduplicateUIds;
   }

  public function addDuplicateUId($aDuplicateUId)
  {
    $wasAdded = false;
    $this->duplicateUIds[] = $aDuplicateUId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeDuplicateUId($aDuplicateUId)
  {
    $wasRemoved = false;
    unset($this->duplicateUIds[$this->indexOfDuplicateUId($aDuplicateUId)]);
    $this->duplicateUIds = array_values($this->duplicateUIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getMatchType()
  {
    return $this->matchType;
  }


  public function getNegativeWord()
  {
    $newNegativeWord = $this->negativeWord;
    return $newNegativeWord;
  }

  public function numberOfNegativeWord()
  {
    $number = count($this->negativeWord);
    return $number;
  }

  public function indexOfNegativeWord($aNegativeWord)
  {
    $rawAnswer = array_search($aNegativeWord,$this->negativeWord);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getPvLow()
  {
    return $this->pvLow;
  }

  public function getPvHigh()
  {
    return $this->pvHigh;
  }

  public function getCompeteLow()
  {
    return $this->competeLow;
  }

  public function getCompeteHigh()
  {
    return $this->competeHigh;
  }


  public function getSearchRegion()
  {
    $newSearchRegion = $this->searchRegion;
    return $newSearchRegion;
  }

  public function numberOfSearchRegion()
  {
    $number = count($this->searchRegion);
    return $number;
  }

  public function indexOfSearchRegion($aSearchRegion)
  {
    $rawAnswer = array_search($aSearchRegion,$this->searchRegion);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getRegionExtend()
  {
    return $this->regionExtend;
  }

  public function getMaxNum()
  {
    return $this->maxNum;
  }

  public function getHotMonth()
  {
    return $this->hotMonth;
  }

  public function getMonthFilter()
  {
    return $this->monthFilter;
  }

  public function getRemoveDuplicate()
  {
    return $this->removeDuplicate;
  }


  public function getDuplicateUIds()
  {
    $newDuplicateUIds = $this->duplicateUIds;
    return $newDuplicateUIds;
  }

  public function numberOfDuplicateUIds()
  {
    $number = count($this->duplicateUIds);
    return $number;
  }

  public function indexOfDuplicateUId($aDuplicateUId)
  {
    $rawAnswer = array_search($aDuplicateUId,$this->duplicateUIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function isRegionExtend()
  {
    return $this->regionExtend;
  }

  public function isHotMonth()
  {
    return $this->hotMonth;
  }

  public function isRemoveDuplicate()
  {
    return $this->removeDuplicate;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class KRResult
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //KRResult Attributes
  public $word;
  public $exactPV;
  public $phrasePV;
  public $broadPV;
  public $competition;
  public $hotMonth;
  public $hotMonthPV;
  public $group;
  public $flag1;
  public $flag2;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setWord($aWord)
  {
    $wasSet = false;
    $this->word = $aWord;
    $wasSet = true;
    return $wasSet;
  }

  public function setExactPV($aExactPV)
  {
    $wasSet = false;
    $this->exactPV = $aExactPV;
    $wasSet = true;
    return $wasSet;
  }

  public function setPhrasePV($aPhrasePV)
  {
    $wasSet = false;
    $this->phrasePV = $aPhrasePV;
    $wasSet = true;
    return $wasSet;
  }

  public function setBroadPV($aBroadPV)
  {
    $wasSet = false;
    $this->broadPV = $aBroadPV;
    $wasSet = true;
    return $wasSet;
  }

  public function setCompetition($aCompetition)
  {
    $wasSet = false;
    $this->competition = $aCompetition;
    $wasSet = true;
    return $wasSet;
  }

  public function setHotMonth($aHotMonth)
  {
    $wasSet = false;
    $this->hotMonth = $aHotMonth;
    $wasSet = true;
    return $wasSet;
  }

  public function setHotMonthPV($aHotMonthPV)
  {
    $wasSet = false;
    $this->hotMonthPV = $aHotMonthPV;
    $wasSet = true;
    return $wasSet;
  }

  public function setGroup($aGroup)
  {
    $wasSet = false;
    $this->group = $aGroup;
    $wasSet = true;
    return $wasSet;
  }

  public function setFlag1($aFlag1)
  {
    $wasSet = false;
    $this->flag1 = $aFlag1;
    $wasSet = true;
    return $wasSet;
  }

  public function setFlag2($aFlag2)
  {
    $wasSet = false;
    $this->flag2 = $aFlag2;
    $wasSet = true;
    return $wasSet;
  }

  public function getWord()
  {
    return $this->word;
  }

  public function getExactPV()
  {
    return $this->exactPV;
  }

  public function getPhrasePV()
  {
    return $this->phrasePV;
  }

  public function getBroadPV()
  {
    return $this->broadPV;
  }

  public function getCompetition()
  {
    return $this->competition;
  }

  public function getHotMonth()
  {
    return $this->hotMonth;
  }

  public function getHotMonthPV()
  {
    return $this->hotMonthPV;
  }

  public function getGroup()
  {
    return $this->group;
  }

  public function getFlag1()
  {
    return $this->flag1;
  }

  public function getFlag2()
  {
    return $this->flag2;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class SeedUrl
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //SeedUrl Attributes
  public $url;
  public $urlTag;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setUrl($aUrl)
  {
    $wasSet = false;
    $this->url = $aUrl;
    $wasSet = true;
    return $wasSet;
  }
   public function setUrlTag($aurlTag) {
       $this->urlTag = $aurlTag;
   }

  public function addUrlTag($aUrlTag)
  {
    $wasAdded = false;
    $this->urlTag[] = $aUrlTag;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeUrlTag($aUrlTag)
  {
    $wasRemoved = false;
    unset($this->urlTag[$this->indexOfUrlTag($aUrlTag)]);
    $this->urlTag = array_values($this->urlTag);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getUrl()
  {
    return $this->url;
  }


  public function getUrlTag()
  {
    $newUrlTag = $this->urlTag;
    return $newUrlTag;
  }

  public function numberOfUrlTag()
  {
    $number = count($this->urlTag);
    return $number;
  }

  public function indexOfUrlTag($aUrlTag)
  {
    $rawAnswer = array_search($aUrlTag,$this->urlTag);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetKRbySeedWordRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKRbySeedWordRequest Attributes
  public $seedWord;
  public $seedFilter;
  public $device;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setSeedWord($aSeedWord)
  {
    $wasSet = false;
    $this->seedWord = $aSeedWord;
    $wasSet = true;
    return $wasSet;
  }

  public function setSeedFilter($aSeedFilter)
  {
    $wasSet = false;
    $this->seedFilter = $aSeedFilter;
    $wasSet = true;
    return $wasSet;
  }

  public function setDevice($aDevice)
  {
    $wasSet = false;
    $this->device = $aDevice;
    $wasSet = true;
    return $wasSet;
  }

  public function getSeedWord()
  {
    return $this->seedWord;
  }

  public function getSeedFilter()
  {
    return $this->seedFilter;
  }

  public function getDevice()
  {
    return $this->device;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetKRbySeedWordResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKRbySeedWordResponse Attributes
  public $krResult;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setKrResult($akrResult) {
       $this->krResult = $akrResult;
   }

  public function addKrResult($aKrResult)
  {
    $wasAdded = false;
    $this->krResult[] = $aKrResult;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKrResult($aKrResult)
  {
    $wasRemoved = false;
    unset($this->krResult[$this->indexOfKrResult($aKrResult)]);
    $this->krResult = array_values($this->krResult);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getKrResult()
  {
    $newKrResult = $this->krResult;
    return $newKrResult;
  }

  public function numberOfKrResult()
  {
    $number = count($this->krResult);
    return $number;
  }

  public function indexOfKrResult($aKrResult)
  {
    $rawAnswer = array_search($aKrResult,$this->krResult);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetKRFileIdbySeedWordRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKRFileIdbySeedWordRequest Attributes
  public $seedWords;
  public $seedFilter;
  public $device;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setSeedWords($aseedWords) {
       $this->seedWords = $aseedWords;
   }

  public function addSeedWord($aSeedWord)
  {
    $wasAdded = false;
    $this->seedWords[] = $aSeedWord;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeSeedWord($aSeedWord)
  {
    $wasRemoved = false;
    unset($this->seedWords[$this->indexOfSeedWord($aSeedWord)]);
    $this->seedWords = array_values($this->seedWords);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setSeedFilter($aSeedFilter)
  {
    $wasSet = false;
    $this->seedFilter = $aSeedFilter;
    $wasSet = true;
    return $wasSet;
  }

  public function setDevice($aDevice)
  {
    $wasSet = false;
    $this->device = $aDevice;
    $wasSet = true;
    return $wasSet;
  }


  public function getSeedWords()
  {
    $newSeedWords = $this->seedWords;
    return $newSeedWords;
  }

  public function numberOfSeedWords()
  {
    $number = count($this->seedWords);
    return $number;
  }

  public function indexOfSeedWord($aSeedWord)
  {
    $rawAnswer = array_search($aSeedWord,$this->seedWords);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getSeedFilter()
  {
    return $this->seedFilter;
  }

  public function getDevice()
  {
    return $this->device;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetKRFileIdbySeedWordResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKRFileIdbySeedWordResponse Attributes
  public $krFileId;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setKrFileId($aKrFileId)
  {
    $wasSet = false;
    $this->krFileId = $aKrFileId;
    $wasSet = true;
    return $wasSet;
  }

  public function getKrFileId()
  {
    return $this->krFileId;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetKRFileStateRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKRFileStateRequest Attributes
  public $krFileId;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setKrFileId($aKrFileId)
  {
    $wasSet = false;
    $this->krFileId = $aKrFileId;
    $wasSet = true;
    return $wasSet;
  }

  public function getKrFileId()
  {
    return $this->krFileId;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetKRFileStateResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKRFileStateResponse Attributes
  public $isGenerated;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setIsGenerated($aIsGenerated)
  {
    $wasSet = false;
    $this->isGenerated = $aIsGenerated;
    $wasSet = true;
    return $wasSet;
  }

  public function getIsGenerated()
  {
    return $this->isGenerated;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetKRFilePathRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKRFilePathRequest Attributes
  public $krFileId;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setKrFileId($aKrFileId)
  {
    $wasSet = false;
    $this->krFileId = $aKrFileId;
    $wasSet = true;
    return $wasSet;
  }

  public function getKrFileId()
  {
    return $this->krFileId;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetKRFilePathResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKRFilePathResponse Attributes
  public $filePath;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setFilePath($aFilePath)
  {
    $wasSet = false;
    $this->filePath = $aFilePath;
    $wasSet = true;
    return $wasSet;
  }

  public function getFilePath()
  {
    return $this->filePath;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetKRQuotaRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetKRQuotaResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKRQuotaResponse Attributes
  public $total;
  public $remain;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setTotal($aTotal)
  {
    $wasSet = false;
    $this->total = $aTotal;
    $wasSet = true;
    return $wasSet;
  }

  public function setRemain($aRemain)
  {
    $wasSet = false;
    $this->remain = $aRemain;
    $wasSet = true;
    return $wasSet;
  }

  public function getTotal()
  {
    return $this->total;
  }

  public function getRemain()
  {
    return $this->remain;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetKRbySeedUrlRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKRbySeedUrlRequest Attributes
  public $url;
  public $seedFilter;
  public $device;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setUrl($aUrl)
  {
    $wasSet = false;
    $this->url = $aUrl;
    $wasSet = true;
    return $wasSet;
  }

  public function setSeedFilter($aSeedFilter)
  {
    $wasSet = false;
    $this->seedFilter = $aSeedFilter;
    $wasSet = true;
    return $wasSet;
  }

  public function setDevice($aDevice)
  {
    $wasSet = false;
    $this->device = $aDevice;
    $wasSet = true;
    return $wasSet;
  }

  public function getUrl()
  {
    return $this->url;
  }

  public function getSeedFilter()
  {
    return $this->seedFilter;
  }

  public function getDevice()
  {
    return $this->device;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetKRbySeedUrlResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKRbySeedUrlResponse Attributes
  public $krResult;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setKrResult($akrResult) {
       $this->krResult = $akrResult;
   }

  public function addKrResult($aKrResult)
  {
    $wasAdded = false;
    $this->krResult[] = $aKrResult;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKrResult($aKrResult)
  {
    $wasRemoved = false;
    unset($this->krResult[$this->indexOfKrResult($aKrResult)]);
    $this->krResult = array_values($this->krResult);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getKrResult()
  {
    $newKrResult = $this->krResult;
    return $newKrResult;
  }

  public function numberOfKrResult()
  {
    $number = count($this->krResult);
    return $number;
  }

  public function indexOfKrResult($aKrResult)
  {
    $rawAnswer = array_search($aKrResult,$this->krResult);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetSeedWordRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetSeedWordRequest Attributes
  public $id;
  public $type;
  public $seedFilter;
  public $device;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setId($aId)
  {
    $wasSet = false;
    $this->id = $aId;
    $wasSet = true;
    return $wasSet;
  }

  public function setType($aType)
  {
    $wasSet = false;
    $this->type = $aType;
    $wasSet = true;
    return $wasSet;
  }

  public function setSeedFilter($aSeedFilter)
  {
    $wasSet = false;
    $this->seedFilter = $aSeedFilter;
    $wasSet = true;
    return $wasSet;
  }

  public function setDevice($aDevice)
  {
    $wasSet = false;
    $this->device = $aDevice;
    $wasSet = true;
    return $wasSet;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getType()
  {
    return $this->type;
  }

  public function getSeedFilter()
  {
    return $this->seedFilter;
  }

  public function getDevice()
  {
    return $this->device;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetSeedWordResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetSeedWordResponse Attributes
  public $seedWords;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setSeedWords($aseedWords) {
       $this->seedWords = $aseedWords;
   }

  public function addSeedWord($aSeedWord)
  {
    $wasAdded = false;
    $this->seedWords[] = $aSeedWord;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeSeedWord($aSeedWord)
  {
    $wasRemoved = false;
    unset($this->seedWords[$this->indexOfSeedWord($aSeedWord)]);
    $this->seedWords = array_values($this->seedWords);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getSeedWords()
  {
    $newSeedWords = $this->seedWords;
    return $newSeedWords;
  }

  public function numberOfSeedWords()
  {
    $number = count($this->seedWords);
    return $number;
  }

  public function indexOfSeedWord($aSeedWord)
  {
    $rawAnswer = array_search($aSeedWord,$this->seedWords);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetSeedUrlRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetSeedUrlRequest Attributes
  public $id;
  public $type;
  public $seedFilter;
  public $device;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setId($aId)
  {
    $wasSet = false;
    $this->id = $aId;
    $wasSet = true;
    return $wasSet;
  }

  public function setType($aType)
  {
    $wasSet = false;
    $this->type = $aType;
    $wasSet = true;
    return $wasSet;
  }

  public function setSeedFilter($aSeedFilter)
  {
    $wasSet = false;
    $this->seedFilter = $aSeedFilter;
    $wasSet = true;
    return $wasSet;
  }

  public function setDevice($aDevice)
  {
    $wasSet = false;
    $this->device = $aDevice;
    $wasSet = true;
    return $wasSet;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getType()
  {
    return $this->type;
  }

  public function getSeedFilter()
  {
    return $this->seedFilter;
  }

  public function getDevice()
  {
    return $this->device;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetSeedUrlResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetSeedUrlResponse Attributes
  public $seedUrls;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setSeedUrls($aseedUrls) {
       $this->seedUrls = $aseedUrls;
   }

  public function addSeedUrl($aSeedUrl)
  {
    $wasAdded = false;
    $this->seedUrls[] = $aSeedUrl;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeSeedUrl($aSeedUrl)
  {
    $wasRemoved = false;
    unset($this->seedUrls[$this->indexOfSeedUrl($aSeedUrl)]);
    $this->seedUrls = array_values($this->seedUrls);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getSeedUrls()
  {
    $newSeedUrls = $this->seedUrls;
    return $newSeedUrls;
  }

  public function numberOfSeedUrls()
  {
    $number = count($this->seedUrls);
    return $number;
  }

  public function indexOfSeedUrl($aSeedUrl)
  {
    $rawAnswer = array_search($aSeedUrl,$this->seedUrls);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetKRCustomRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKRCustomRequest Attributes
  public $id;
  public $type;
  public $seedFilter;
  public $device;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setId($aId)
  {
    $wasSet = false;
    $this->id = $aId;
    $wasSet = true;
    return $wasSet;
  }

  public function setType($aType)
  {
    $wasSet = false;
    $this->type = $aType;
    $wasSet = true;
    return $wasSet;
  }

  public function setSeedFilter($aSeedFilter)
  {
    $wasSet = false;
    $this->seedFilter = $aSeedFilter;
    $wasSet = true;
    return $wasSet;
  }

  public function setDevice($aDevice)
  {
    $wasSet = false;
    $this->device = $aDevice;
    $wasSet = true;
    return $wasSet;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getType()
  {
    return $this->type;
  }

  public function getSeedFilter()
  {
    return $this->seedFilter;
  }

  public function getDevice()
  {
    return $this->device;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetKRCustomResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKRCustomResponse Attributes
  public $krResult;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setKrResult($akrResult) {
       $this->krResult = $akrResult;
   }

  public function addKrResult($aKrResult)
  {
    $wasAdded = false;
    $this->krResult[] = $aKrResult;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKrResult($aKrResult)
  {
    $wasRemoved = false;
    unset($this->krResult[$this->indexOfKrResult($aKrResult)]);
    $this->krResult = array_values($this->krResult);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getKrResult()
  {
    $newKrResult = $this->krResult;
    return $newKrResult;
  }

  public function numberOfKrResult()
  {
    $number = count($this->krResult);
    return $number;
  }

  public function indexOfKrResult($aKrResult)
  {
    $rawAnswer = array_search($aKrResult,$this->krResult);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetKRByMultiSeedWordRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKRByMultiSeedWordRequest Attributes
  public $seedWords;
  public $seedFilter;
  public $device;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setSeedWords($aseedWords) {
       $this->seedWords = $aseedWords;
   }

  public function addSeedWord($aSeedWord)
  {
    $wasAdded = false;
    $this->seedWords[] = $aSeedWord;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeSeedWord($aSeedWord)
  {
    $wasRemoved = false;
    unset($this->seedWords[$this->indexOfSeedWord($aSeedWord)]);
    $this->seedWords = array_values($this->seedWords);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setSeedFilter($aSeedFilter)
  {
    $wasSet = false;
    $this->seedFilter = $aSeedFilter;
    $wasSet = true;
    return $wasSet;
  }

  public function setDevice($aDevice)
  {
    $wasSet = false;
    $this->device = $aDevice;
    $wasSet = true;
    return $wasSet;
  }


  public function getSeedWords()
  {
    $newSeedWords = $this->seedWords;
    return $newSeedWords;
  }

  public function numberOfSeedWords()
  {
    $number = count($this->seedWords);
    return $number;
  }

  public function indexOfSeedWord($aSeedWord)
  {
    $rawAnswer = array_search($aSeedWord,$this->seedWords);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getSeedFilter()
  {
    return $this->seedFilter;
  }

  public function getDevice()
  {
    return $this->device;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetKRByMultiSeedWordResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKRByMultiSeedWordResponse Attributes
  public $krResult;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setKrResult($akrResult) {
       $this->krResult = $akrResult;
   }

  public function addKrResult($aKrResult)
  {
    $wasAdded = false;
    $this->krResult[] = $aKrResult;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKrResult($aKrResult)
  {
    $wasRemoved = false;
    unset($this->krResult[$this->indexOfKrResult($aKrResult)]);
    $this->krResult = array_values($this->krResult);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getKrResult()
  {
    $newKrResult = $this->krResult;
    return $newKrResult;
  }

  public function numberOfKrResult()
  {
    $number = count($this->krResult);
    return $number;
  }

  public function indexOfKrResult($aKrResult)
  {
    $rawAnswer = array_search($aKrResult,$this->krResult);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class sms_v3_KRService extends CommonService 
{    public function __construct() {
        parent::__construct ( 'sms', 'v3', 'KRService' );
    }

  // ABSTRACT METHODS 

 public function getAdGroupBySeedWords ($GetAdGroupBySeedWordsRequest){
 return $this->execute ( 'getAdGroupBySeedWords', $GetAdGroupBySeedWordsRequest );
}
 public function getKRbySeedWord ($GetKRbySeedWordRequest){
 return $this->execute ( 'getKRbySeedWord', $GetKRbySeedWordRequest );
}
 public function getKRFileIdbySeedWord ($GetKRFileIdbySeedWordRequest){
 return $this->execute ( 'getKRFileIdbySeedWord', $GetKRFileIdbySeedWordRequest );
}
 public function getKRFileState ($GetKRFileStateRequest){
 return $this->execute ( 'getKRFileState', $GetKRFileStateRequest );
}
 public function getKRFilePath ($GetKRFilePathRequest){
 return $this->execute ( 'getKRFilePath', $GetKRFilePathRequest );
}
 public function getKRQuota ($GetKRQuotaRequest){
 return $this->execute ( 'getKRQuota', $GetKRQuotaRequest );
}
 public function getKRbySeedUrl ($GetKRbySeedUrlRequest){
 return $this->execute ( 'getKRbySeedUrl', $GetKRbySeedUrlRequest );
}
 public function getSeedWord ($GetSeedWordRequest){
 return $this->execute ( 'getSeedWord', $GetSeedWordRequest );
}
 public function getSeedUrl ($GetSeedUrlRequest){
 return $this->execute ( 'getSeedUrl', $GetSeedUrlRequest );
}
 public function getKRCustom ($GetKRCustomRequest){
 return $this->execute ( 'getKRCustom', $GetKRCustomRequest );
}
 public function getKRByMultiSeedWord ($GetKRByMultiSeedWordRequest){
 return $this->execute ( 'getKRByMultiSeedWord', $GetKRByMultiSeedWordRequest );
}
  
}


?>