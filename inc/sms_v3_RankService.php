<?php
require_once 'CommonService.php';

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetPreviewRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetPreviewRequest Attributes
  public $keyWords;
  public $device;
  public $region;
  public $page;
  public $display;
  public $enableSeo;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setKeyWords($akeyWords) {
       $this->keyWords = $akeyWords;
   }

  public function addKeyWord($aKeyWord)
  {
    $wasAdded = false;
    $this->keyWords[] = $aKeyWord;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKeyWord($aKeyWord)
  {
    $wasRemoved = false;
    unset($this->keyWords[$this->indexOfKeyWord($aKeyWord)]);
    $this->keyWords = array_values($this->keyWords);
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

  public function setRegion($aRegion)
  {
    $wasSet = false;
    $this->region = $aRegion;
    $wasSet = true;
    return $wasSet;
  }

  public function setPage($aPage)
  {
    $wasSet = false;
    $this->page = $aPage;
    $wasSet = true;
    return $wasSet;
  }

  public function setDisplay($aDisplay)
  {
    $wasSet = false;
    $this->display = $aDisplay;
    $wasSet = true;
    return $wasSet;
  }

  public function setEnableSeo($aEnableSeo)
  {
    $wasSet = false;
    $this->enableSeo = $aEnableSeo;
    $wasSet = true;
    return $wasSet;
  }


  public function getKeyWords()
  {
    $newKeyWords = $this->keyWords;
    return $newKeyWords;
  }

  public function numberOfKeyWords()
  {
    $number = count($this->keyWords);
    return $number;
  }

  public function indexOfKeyWord($aKeyWord)
  {
    $rawAnswer = array_search($aKeyWord,$this->keyWords);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getDevice()
  {
    return $this->device;
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function getPage()
  {
    return $this->page;
  }

  public function getDisplay()
  {
    return $this->display;
  }

  public function getEnableSeo()
  {
    return $this->enableSeo;
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

class GetPreviewResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetPreviewResponse Attributes
  public $previewInfos;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setPreviewInfos($apreviewInfos) {
       $this->previewInfos = $apreviewInfos;
   }

  public function addPreviewInfo($aPreviewInfo)
  {
    $wasAdded = false;
    $this->previewInfos[] = $aPreviewInfo;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removePreviewInfo($aPreviewInfo)
  {
    $wasRemoved = false;
    unset($this->previewInfos[$this->indexOfPreviewInfo($aPreviewInfo)]);
    $this->previewInfos = array_values($this->previewInfos);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getPreviewInfos()
  {
    $newPreviewInfos = $this->previewInfos;
    return $newPreviewInfos;
  }

  public function numberOfPreviewInfos()
  {
    $number = count($this->previewInfos);
    return $number;
  }

  public function indexOfPreviewInfo($aPreviewInfo)
  {
    $rawAnswer = array_search($aPreviewInfo,$this->previewInfos);
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

class PreviewInfo
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //PreviewInfo Attributes
  public $keyword;
  public $data;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setKeyword($aKeyword)
  {
    $wasSet = false;
    $this->keyword = $aKeyword;
    $wasSet = true;
    return $wasSet;
  }

  public function setData($aData)
  {
    $wasSet = false;
    $this->data = $aData;
    $wasSet = true;
    return $wasSet;
  }

  public function getKeyword()
  {
    return $this->keyword;
  }

  public function getData()
  {
    return $this->data;
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

class sms_v3_RankService extends CommonService 
{    public function __construct() {
        parent::__construct ( 'sms', 'v3', 'RankService' );
    }

  // ABSTRACT METHODS 

 public function getPreview ($GetPreviewRequest){
 return $this->execute ( 'getPreview', $GetPreviewRequest );
}
  
}


?>