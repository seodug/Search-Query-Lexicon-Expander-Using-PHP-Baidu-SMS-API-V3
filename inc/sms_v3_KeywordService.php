<?php
require_once 'CommonService.php';

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class KeywordType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //KeywordType Attributes
  public $keywordId;
  public $adgroupId;
  public $keyword;
  public $price;
  public $pcDestinationUrl;
  public $mobileDestinationUrl;
  public $matchType;
  public $pause;
  public $status;
  public $phraseType;
  public $wmatchprefer;
  public $owmatch;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setKeywordId($aKeywordId)
  {
    $wasSet = false;
    $this->keywordId = $aKeywordId;
    $wasSet = true;
    return $wasSet;
  }

  public function setAdgroupId($aAdgroupId)
  {
    $wasSet = false;
    $this->adgroupId = $aAdgroupId;
    $wasSet = true;
    return $wasSet;
  }

  public function setKeyword($aKeyword)
  {
    $wasSet = false;
    $this->keyword = $aKeyword;
    $wasSet = true;
    return $wasSet;
  }

  public function setPrice($aPrice)
  {
    $wasSet = false;
    $this->price = $aPrice;
    $wasSet = true;
    return $wasSet;
  }

  public function setPcDestinationUrl($aPcDestinationUrl)
  {
    $wasSet = false;
    $this->pcDestinationUrl = $aPcDestinationUrl;
    $wasSet = true;
    return $wasSet;
  }

  public function setMobileDestinationUrl($aMobileDestinationUrl)
  {
    $wasSet = false;
    $this->mobileDestinationUrl = $aMobileDestinationUrl;
    $wasSet = true;
    return $wasSet;
  }

  public function setMatchType($aMatchType)
  {
    $wasSet = false;
    $this->matchType = $aMatchType;
    $wasSet = true;
    return $wasSet;
  }

  public function setPause($aPause)
  {
    $wasSet = false;
    $this->pause = $aPause;
    $wasSet = true;
    return $wasSet;
  }

  public function setStatus($aStatus)
  {
    $wasSet = false;
    $this->status = $aStatus;
    $wasSet = true;
    return $wasSet;
  }

  public function setPhraseType($aPhraseType)
  {
    $wasSet = false;
    $this->phraseType = $aPhraseType;
    $wasSet = true;
    return $wasSet;
  }

  public function setWmatchprefer($aWmatchprefer)
  {
    $wasSet = false;
    $this->wmatchprefer = $aWmatchprefer;
    $wasSet = true;
    return $wasSet;
  }

  public function setOwmatch($aOwmatch)
  {
    $wasSet = false;
    $this->owmatch = $aOwmatch;
    $wasSet = true;
    return $wasSet;
  }

  public function getKeywordId()
  {
    return $this->keywordId;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }

  public function getKeyword()
  {
    return $this->keyword;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function getPcDestinationUrl()
  {
    return $this->pcDestinationUrl;
  }

  public function getMobileDestinationUrl()
  {
    return $this->mobileDestinationUrl;
  }

  public function getMatchType()
  {
    return $this->matchType;
  }

  public function getPause()
  {
    return $this->pause;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function getPhraseType()
  {
    return $this->phraseType;
  }

  public function getWmatchprefer()
  {
    return $this->wmatchprefer;
  }

  public function getOwmatch()
  {
    return $this->owmatch;
  }

  public function isPause()
  {
    return $this->pause;
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

class GroupKeywordId
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GroupKeywordId Attributes
  public $adgroupId;
  public $keywordIds;

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
   public function setKeywordIds($akeywordIds) {
       $this->keywordIds = $akeywordIds;
   }

  public function addKeywordId($aKeywordId)
  {
    $wasAdded = false;
    $this->keywordIds[] = $aKeywordId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKeywordId($aKeywordId)
  {
    $wasRemoved = false;
    unset($this->keywordIds[$this->indexOfKeywordId($aKeywordId)]);
    $this->keywordIds = array_values($this->keywordIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }


  public function getKeywordIds()
  {
    $newKeywordIds = $this->keywordIds;
    return $newKeywordIds;
  }

  public function numberOfKeywordIds()
  {
    $number = count($this->keywordIds);
    return $number;
  }

  public function indexOfKeywordId($aKeywordId)
  {
    $rawAnswer = array_search($aKeywordId,$this->keywordIds);
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

class GroupKeyword
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GroupKeyword Attributes
  public $adgroupId;
  public $keywordTypes;

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
   public function setKeywordTypes($akeywordTypes) {
       $this->keywordTypes = $akeywordTypes;
   }

  public function addKeywordType($aKeywordType)
  {
    $wasAdded = false;
    $this->keywordTypes[] = $aKeywordType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKeywordType($aKeywordType)
  {
    $wasRemoved = false;
    unset($this->keywordTypes[$this->indexOfKeywordType($aKeywordType)]);
    $this->keywordTypes = array_values($this->keywordTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }


  public function getKeywordTypes()
  {
    $newKeywordTypes = $this->keywordTypes;
    return $newKeywordTypes;
  }

  public function numberOfKeywordTypes()
  {
    $number = count($this->keywordTypes);
    return $number;
  }

  public function indexOfKeywordType($aKeywordType)
  {
    $rawAnswer = array_search($aKeywordType,$this->keywordTypes);
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

class StatusType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //StatusType Attributes
  public $id;
  public $adgroupId;
  public $campaignId;
  public $status;

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

  public function setAdgroupId($aAdgroupId)
  {
    $wasSet = false;
    $this->adgroupId = $aAdgroupId;
    $wasSet = true;
    return $wasSet;
  }

  public function setCampaignId($aCampaignId)
  {
    $wasSet = false;
    $this->campaignId = $aCampaignId;
    $wasSet = true;
    return $wasSet;
  }

  public function setStatus($aStatus)
  {
    $wasSet = false;
    $this->status = $aStatus;
    $wasSet = true;
    return $wasSet;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }

  public function getCampaignId()
  {
    return $this->campaignId;
  }

  public function getStatus()
  {
    return $this->status;
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

class QualityType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //QualityType Attributes
  public $id;
  public $adgroupId;
  public $campaignId;
  public $quality;
  public $mobileQuality;

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

  public function setAdgroupId($aAdgroupId)
  {
    $wasSet = false;
    $this->adgroupId = $aAdgroupId;
    $wasSet = true;
    return $wasSet;
  }

  public function setCampaignId($aCampaignId)
  {
    $wasSet = false;
    $this->campaignId = $aCampaignId;
    $wasSet = true;
    return $wasSet;
  }

  public function setQuality($aQuality)
  {
    $wasSet = false;
    $this->quality = $aQuality;
    $wasSet = true;
    return $wasSet;
  }

  public function setMobileQuality($aMobileQuality)
  {
    $wasSet = false;
    $this->mobileQuality = $aMobileQuality;
    $wasSet = true;
    return $wasSet;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }

  public function getCampaignId()
  {
    return $this->campaignId;
  }

  public function getQuality()
  {
    return $this->quality;
  }

  public function getMobileQuality()
  {
    return $this->mobileQuality;
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

class AddKeywordRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AddKeywordRequest Attributes
  public $keywordTypes;
  public $extended;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setKeywordTypes($akeywordTypes) {
       $this->keywordTypes = $akeywordTypes;
   }

  public function addKeywordType($aKeywordType)
  {
    $wasAdded = false;
    $this->keywordTypes[] = $aKeywordType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKeywordType($aKeywordType)
  {
    $wasRemoved = false;
    unset($this->keywordTypes[$this->indexOfKeywordType($aKeywordType)]);
    $this->keywordTypes = array_values($this->keywordTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setExtended($aExtended)
  {
    $wasSet = false;
    $this->extended = $aExtended;
    $wasSet = true;
    return $wasSet;
  }


  public function getKeywordTypes()
  {
    $newKeywordTypes = $this->keywordTypes;
    return $newKeywordTypes;
  }

  public function numberOfKeywordTypes()
  {
    $number = count($this->keywordTypes);
    return $number;
  }

  public function indexOfKeywordType($aKeywordType)
  {
    $rawAnswer = array_search($aKeywordType,$this->keywordTypes);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getExtended()
  {
    return $this->extended;
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

class AddKeywordResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AddKeywordResponse Attributes
  public $keywordTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setKeywordTypes($akeywordTypes) {
       $this->keywordTypes = $akeywordTypes;
   }

  public function addKeywordType($aKeywordType)
  {
    $wasAdded = false;
    $this->keywordTypes[] = $aKeywordType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKeywordType($aKeywordType)
  {
    $wasRemoved = false;
    unset($this->keywordTypes[$this->indexOfKeywordType($aKeywordType)]);
    $this->keywordTypes = array_values($this->keywordTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getKeywordTypes()
  {
    $newKeywordTypes = $this->keywordTypes;
    return $newKeywordTypes;
  }

  public function numberOfKeywordTypes()
  {
    $number = count($this->keywordTypes);
    return $number;
  }

  public function indexOfKeywordType($aKeywordType)
  {
    $rawAnswer = array_search($aKeywordType,$this->keywordTypes);
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

class UpdateKeywordRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UpdateKeywordRequest Attributes
  public $keywordTypes;
  public $extended;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setKeywordTypes($akeywordTypes) {
       $this->keywordTypes = $akeywordTypes;
   }

  public function addKeywordType($aKeywordType)
  {
    $wasAdded = false;
    $this->keywordTypes[] = $aKeywordType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKeywordType($aKeywordType)
  {
    $wasRemoved = false;
    unset($this->keywordTypes[$this->indexOfKeywordType($aKeywordType)]);
    $this->keywordTypes = array_values($this->keywordTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setExtended($aExtended)
  {
    $wasSet = false;
    $this->extended = $aExtended;
    $wasSet = true;
    return $wasSet;
  }


  public function getKeywordTypes()
  {
    $newKeywordTypes = $this->keywordTypes;
    return $newKeywordTypes;
  }

  public function numberOfKeywordTypes()
  {
    $number = count($this->keywordTypes);
    return $number;
  }

  public function indexOfKeywordType($aKeywordType)
  {
    $rawAnswer = array_search($aKeywordType,$this->keywordTypes);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getExtended()
  {
    return $this->extended;
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

class UpdateKeywordResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UpdateKeywordResponse Attributes
  public $keywordTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setKeywordTypes($akeywordTypes) {
       $this->keywordTypes = $akeywordTypes;
   }

  public function addKeywordType($aKeywordType)
  {
    $wasAdded = false;
    $this->keywordTypes[] = $aKeywordType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKeywordType($aKeywordType)
  {
    $wasRemoved = false;
    unset($this->keywordTypes[$this->indexOfKeywordType($aKeywordType)]);
    $this->keywordTypes = array_values($this->keywordTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getKeywordTypes()
  {
    $newKeywordTypes = $this->keywordTypes;
    return $newKeywordTypes;
  }

  public function numberOfKeywordTypes()
  {
    $number = count($this->keywordTypes);
    return $number;
  }

  public function indexOfKeywordType($aKeywordType)
  {
    $rawAnswer = array_search($aKeywordType,$this->keywordTypes);
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

class DeleteKeywordRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //DeleteKeywordRequest Attributes
  public $keywordIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setKeywordIds($akeywordIds) {
       $this->keywordIds = $akeywordIds;
   }

  public function addKeywordId($aKeywordId)
  {
    $wasAdded = false;
    $this->keywordIds[] = $aKeywordId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKeywordId($aKeywordId)
  {
    $wasRemoved = false;
    unset($this->keywordIds[$this->indexOfKeywordId($aKeywordId)]);
    $this->keywordIds = array_values($this->keywordIds);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getKeywordIds()
  {
    $newKeywordIds = $this->keywordIds;
    return $newKeywordIds;
  }

  public function numberOfKeywordIds()
  {
    $number = count($this->keywordIds);
    return $number;
  }

  public function indexOfKeywordId($aKeywordId)
  {
    $rawAnswer = array_search($aKeywordId,$this->keywordIds);
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

class DeleteKeywordResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //DeleteKeywordResponse Attributes
  public $result;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setResult($aResult)
  {
    $wasSet = false;
    $this->result = $aResult;
    $wasSet = true;
    return $wasSet;
  }

  public function getResult()
  {
    return $this->result;
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

class ActivateKeywordRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //ActivateKeywordRequest Attributes
  public $keywordIds;
  public $extended;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setKeywordIds($akeywordIds) {
       $this->keywordIds = $akeywordIds;
   }

  public function addKeywordId($aKeywordId)
  {
    $wasAdded = false;
    $this->keywordIds[] = $aKeywordId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKeywordId($aKeywordId)
  {
    $wasRemoved = false;
    unset($this->keywordIds[$this->indexOfKeywordId($aKeywordId)]);
    $this->keywordIds = array_values($this->keywordIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setExtended($aExtended)
  {
    $wasSet = false;
    $this->extended = $aExtended;
    $wasSet = true;
    return $wasSet;
  }


  public function getKeywordIds()
  {
    $newKeywordIds = $this->keywordIds;
    return $newKeywordIds;
  }

  public function numberOfKeywordIds()
  {
    $number = count($this->keywordIds);
    return $number;
  }

  public function indexOfKeywordId($aKeywordId)
  {
    $rawAnswer = array_search($aKeywordId,$this->keywordIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getExtended()
  {
    return $this->extended;
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

class ActivateKeywordResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //ActivateKeywordResponse Attributes
  public $keywordTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setKeywordTypes($akeywordTypes) {
       $this->keywordTypes = $akeywordTypes;
   }

  public function addKeywordType($aKeywordType)
  {
    $wasAdded = false;
    $this->keywordTypes[] = $aKeywordType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKeywordType($aKeywordType)
  {
    $wasRemoved = false;
    unset($this->keywordTypes[$this->indexOfKeywordType($aKeywordType)]);
    $this->keywordTypes = array_values($this->keywordTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getKeywordTypes()
  {
    $newKeywordTypes = $this->keywordTypes;
    return $newKeywordTypes;
  }

  public function numberOfKeywordTypes()
  {
    $number = count($this->keywordTypes);
    return $number;
  }

  public function indexOfKeywordType($aKeywordType)
  {
    $rawAnswer = array_search($aKeywordType,$this->keywordTypes);
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

class GetKeywordIdByAdgroupIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeywordIdByAdgroupIdRequest Attributes
  public $adgroupIds;
  public $getTemp;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setAdgroupIds($aadgroupIds) {
       $this->adgroupIds = $aadgroupIds;
   }

  public function addAdgroupId($aAdgroupId)
  {
    $wasAdded = false;
    $this->adgroupIds[] = $aAdgroupId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeAdgroupId($aAdgroupId)
  {
    $wasRemoved = false;
    unset($this->adgroupIds[$this->indexOfAdgroupId($aAdgroupId)]);
    $this->adgroupIds = array_values($this->adgroupIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setGetTemp($aGetTemp)
  {
    $wasSet = false;
    $this->getTemp = $aGetTemp;
    $wasSet = true;
    return $wasSet;
  }


  public function getAdgroupIds()
  {
    $newAdgroupIds = $this->adgroupIds;
    return $newAdgroupIds;
  }

  public function numberOfAdgroupIds()
  {
    $number = count($this->adgroupIds);
    return $number;
  }

  public function indexOfAdgroupId($aAdgroupId)
  {
    $rawAnswer = array_search($aAdgroupId,$this->adgroupIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getGetTemp()
  {
    return $this->getTemp;
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

class GetKeywordIdByAdgroupIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeywordIdByAdgroupIdResponse Attributes
  public $groupKeywordIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setGroupKeywordIds($agroupKeywordIds) {
       $this->groupKeywordIds = $agroupKeywordIds;
   }

  public function addGroupKeywordId($aGroupKeywordId)
  {
    $wasAdded = false;
    $this->groupKeywordIds[] = $aGroupKeywordId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeGroupKeywordId($aGroupKeywordId)
  {
    $wasRemoved = false;
    unset($this->groupKeywordIds[$this->indexOfGroupKeywordId($aGroupKeywordId)]);
    $this->groupKeywordIds = array_values($this->groupKeywordIds);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getGroupKeywordIds()
  {
    $newGroupKeywordIds = $this->groupKeywordIds;
    return $newGroupKeywordIds;
  }

  public function numberOfGroupKeywordIds()
  {
    $number = count($this->groupKeywordIds);
    return $number;
  }

  public function indexOfGroupKeywordId($aGroupKeywordId)
  {
    $rawAnswer = array_search($aGroupKeywordId,$this->groupKeywordIds);
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

class GetKeywordByAdgroupIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeywordByAdgroupIdRequest Attributes
  public $adgroupIds;
  public $getTemp;
  public $extended;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setAdgroupIds($aadgroupIds) {
       $this->adgroupIds = $aadgroupIds;
   }

  public function addAdgroupId($aAdgroupId)
  {
    $wasAdded = false;
    $this->adgroupIds[] = $aAdgroupId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeAdgroupId($aAdgroupId)
  {
    $wasRemoved = false;
    unset($this->adgroupIds[$this->indexOfAdgroupId($aAdgroupId)]);
    $this->adgroupIds = array_values($this->adgroupIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setGetTemp($aGetTemp)
  {
    $wasSet = false;
    $this->getTemp = $aGetTemp;
    $wasSet = true;
    return $wasSet;
  }

  public function setExtended($aExtended)
  {
    $wasSet = false;
    $this->extended = $aExtended;
    $wasSet = true;
    return $wasSet;
  }


  public function getAdgroupIds()
  {
    $newAdgroupIds = $this->adgroupIds;
    return $newAdgroupIds;
  }

  public function numberOfAdgroupIds()
  {
    $number = count($this->adgroupIds);
    return $number;
  }

  public function indexOfAdgroupId($aAdgroupId)
  {
    $rawAnswer = array_search($aAdgroupId,$this->adgroupIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getGetTemp()
  {
    return $this->getTemp;
  }

  public function getExtended()
  {
    return $this->extended;
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

class GetKeywordByAdgroupIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeywordByAdgroupIdResponse Attributes
  public $groupKeywords;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setGroupKeywords($agroupKeywords) {
       $this->groupKeywords = $agroupKeywords;
   }

  public function addGroupKeyword($aGroupKeyword)
  {
    $wasAdded = false;
    $this->groupKeywords[] = $aGroupKeyword;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeGroupKeyword($aGroupKeyword)
  {
    $wasRemoved = false;
    unset($this->groupKeywords[$this->indexOfGroupKeyword($aGroupKeyword)]);
    $this->groupKeywords = array_values($this->groupKeywords);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getGroupKeywords()
  {
    $newGroupKeywords = $this->groupKeywords;
    return $newGroupKeywords;
  }

  public function numberOfGroupKeywords()
  {
    $number = count($this->groupKeywords);
    return $number;
  }

  public function indexOfGroupKeyword($aGroupKeyword)
  {
    $rawAnswer = array_search($aGroupKeyword,$this->groupKeywords);
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

class GetKeywordByKeywordIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeywordByKeywordIdRequest Attributes
  public $keywordIds;
  public $getTemp;
  public $extended;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setKeywordIds($akeywordIds) {
       $this->keywordIds = $akeywordIds;
   }

  public function addKeywordId($aKeywordId)
  {
    $wasAdded = false;
    $this->keywordIds[] = $aKeywordId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKeywordId($aKeywordId)
  {
    $wasRemoved = false;
    unset($this->keywordIds[$this->indexOfKeywordId($aKeywordId)]);
    $this->keywordIds = array_values($this->keywordIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setGetTemp($aGetTemp)
  {
    $wasSet = false;
    $this->getTemp = $aGetTemp;
    $wasSet = true;
    return $wasSet;
  }

  public function setExtended($aExtended)
  {
    $wasSet = false;
    $this->extended = $aExtended;
    $wasSet = true;
    return $wasSet;
  }


  public function getKeywordIds()
  {
    $newKeywordIds = $this->keywordIds;
    return $newKeywordIds;
  }

  public function numberOfKeywordIds()
  {
    $number = count($this->keywordIds);
    return $number;
  }

  public function indexOfKeywordId($aKeywordId)
  {
    $rawAnswer = array_search($aKeywordId,$this->keywordIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getGetTemp()
  {
    return $this->getTemp;
  }

  public function getExtended()
  {
    return $this->extended;
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

class GetKeywordByKeywordIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeywordByKeywordIdResponse Attributes
  public $keywordTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setKeywordTypes($akeywordTypes) {
       $this->keywordTypes = $akeywordTypes;
   }

  public function addKeywordType($aKeywordType)
  {
    $wasAdded = false;
    $this->keywordTypes[] = $aKeywordType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKeywordType($aKeywordType)
  {
    $wasRemoved = false;
    unset($this->keywordTypes[$this->indexOfKeywordType($aKeywordType)]);
    $this->keywordTypes = array_values($this->keywordTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getKeywordTypes()
  {
    $newKeywordTypes = $this->keywordTypes;
    return $newKeywordTypes;
  }

  public function numberOfKeywordTypes()
  {
    $number = count($this->keywordTypes);
    return $number;
  }

  public function indexOfKeywordType($aKeywordType)
  {
    $rawAnswer = array_search($aKeywordType,$this->keywordTypes);
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

class GetKeywordStatusRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeywordStatusRequest Attributes
  public $ids;
  public $type;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setIds($aids) {
       $this->ids = $aids;
   }

  public function addId($aId)
  {
    $wasAdded = false;
    $this->ids[] = $aId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeId($aId)
  {
    $wasRemoved = false;
    unset($this->ids[$this->indexOfId($aId)]);
    $this->ids = array_values($this->ids);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setType($aType)
  {
    $wasSet = false;
    $this->type = $aType;
    $wasSet = true;
    return $wasSet;
  }


  public function getIds()
  {
    $newIds = $this->ids;
    return $newIds;
  }

  public function numberOfIds()
  {
    $number = count($this->ids);
    return $number;
  }

  public function indexOfId($aId)
  {
    $rawAnswer = array_search($aId,$this->ids);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getType()
  {
    return $this->type;
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

class GetKeywordStatusResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeywordStatusResponse Attributes
  public $keywordStatus;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setKeywordStatus($akeywordStatus) {
       $this->keywordStatus = $akeywordStatus;
   }

  public function addKeywordStatus($aKeywordStatus)
  {
    $wasAdded = false;
    $this->keywordStatus[] = $aKeywordStatus;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKeywordStatus($aKeywordStatus)
  {
    $wasRemoved = false;
    unset($this->keywordStatus[$this->indexOfKeywordStatus($aKeywordStatus)]);
    $this->keywordStatus = array_values($this->keywordStatus);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getKeywordStatus()
  {
    $newKeywordStatus = $this->keywordStatus;
    return $newKeywordStatus;
  }

  public function numberOfKeywordStatus()
  {
    $number = count($this->keywordStatus);
    return $number;
  }

  public function indexOfKeywordStatus($aKeywordStatus)
  {
    $rawAnswer = array_search($aKeywordStatus,$this->keywordStatus);
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

class GetKeywordStatusZipRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeywordStatusZipRequest Attributes
  public $ids;
  public $type;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setIds($aids) {
       $this->ids = $aids;
   }

  public function addId($aId)
  {
    $wasAdded = false;
    $this->ids[] = $aId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeId($aId)
  {
    $wasRemoved = false;
    unset($this->ids[$this->indexOfId($aId)]);
    $this->ids = array_values($this->ids);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setType($aType)
  {
    $wasSet = false;
    $this->type = $aType;
    $wasSet = true;
    return $wasSet;
  }


  public function getIds()
  {
    $newIds = $this->ids;
    return $newIds;
  }

  public function numberOfIds()
  {
    $number = count($this->ids);
    return $number;
  }

  public function indexOfId($aId)
  {
    $rawAnswer = array_search($aId,$this->ids);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getType()
  {
    return $this->type;
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

class GetKeywordStatusZipResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeywordStatusZipResponse Attributes
  public $keywordStatus;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setKeywordStatus($aKeywordStatus)
  {
    $wasSet = false;
    $this->keywordStatus = $aKeywordStatus;
    $wasSet = true;
    return $wasSet;
  }

  public function getKeywordStatus()
  {
    return $this->keywordStatus;
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

class GetKeywordQualityRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeywordQualityRequest Attributes
  public $ids;
  public $type;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setIds($aids) {
       $this->ids = $aids;
   }

  public function addId($aId)
  {
    $wasAdded = false;
    $this->ids[] = $aId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeId($aId)
  {
    $wasRemoved = false;
    unset($this->ids[$this->indexOfId($aId)]);
    $this->ids = array_values($this->ids);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setType($aType)
  {
    $wasSet = false;
    $this->type = $aType;
    $wasSet = true;
    return $wasSet;
  }


  public function getIds()
  {
    $newIds = $this->ids;
    return $newIds;
  }

  public function numberOfIds()
  {
    $number = count($this->ids);
    return $number;
  }

  public function indexOfId($aId)
  {
    $rawAnswer = array_search($aId,$this->ids);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getType()
  {
    return $this->type;
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

class GetKeywordQualityResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeywordQualityResponse Attributes
  public $qualities;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setQualities($aqualities) {
       $this->qualities = $aqualities;
   }

  public function addQuality($aQuality)
  {
    $wasAdded = false;
    $this->qualities[] = $aQuality;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeQuality($aQuality)
  {
    $wasRemoved = false;
    unset($this->qualities[$this->indexOfQuality($aQuality)]);
    $this->qualities = array_values($this->qualities);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getQualities()
  {
    $newQualities = $this->qualities;
    return $newQualities;
  }

  public function numberOfQualities()
  {
    $number = count($this->qualities);
    return $number;
  }

  public function indexOfQuality($aQuality)
  {
    $rawAnswer = array_search($aQuality,$this->qualities);
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

class GetKeywordQualityZipRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeywordQualityZipRequest Attributes
  public $ids;
  public $type;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setIds($aids) {
       $this->ids = $aids;
   }

  public function addId($aId)
  {
    $wasAdded = false;
    $this->ids[] = $aId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeId($aId)
  {
    $wasRemoved = false;
    unset($this->ids[$this->indexOfId($aId)]);
    $this->ids = array_values($this->ids);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setType($aType)
  {
    $wasSet = false;
    $this->type = $aType;
    $wasSet = true;
    return $wasSet;
  }


  public function getIds()
  {
    $newIds = $this->ids;
    return $newIds;
  }

  public function numberOfIds()
  {
    $number = count($this->ids);
    return $number;
  }

  public function indexOfId($aId)
  {
    $rawAnswer = array_search($aId,$this->ids);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getType()
  {
    return $this->type;
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

class GetKeywordQualityZipResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeywordQualityZipResponse Attributes
  public $qualities;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setQualities($aQualities)
  {
    $wasSet = false;
    $this->qualities = $aQualities;
    $wasSet = true;
    return $wasSet;
  }

  public function getQualities()
  {
    return $this->qualities;
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

class GetKeyword10QualityRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeyword10QualityRequest Attributes
  public $ids;
  public $type;
  public $device;
  public $hasScale;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setIds($aids) {
       $this->ids = $aids;
   }

  public function addId($aId)
  {
    $wasAdded = false;
    $this->ids[] = $aId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeId($aId)
  {
    $wasRemoved = false;
    unset($this->ids[$this->indexOfId($aId)]);
    $this->ids = array_values($this->ids);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setType($aType)
  {
    $wasSet = false;
    $this->type = $aType;
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

  public function setHasScale($aHasScale)
  {
    $wasSet = false;
    $this->hasScale = $aHasScale;
    $wasSet = true;
    return $wasSet;
  }


  public function getIds()
  {
    $newIds = $this->ids;
    return $newIds;
  }

  public function numberOfIds()
  {
    $number = count($this->ids);
    return $number;
  }

  public function indexOfId($aId)
  {
    $rawAnswer = array_search($aId,$this->ids);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getType()
  {
    return $this->type;
  }

  public function getDevice()
  {
    return $this->device;
  }

  public function getHasScale()
  {
    return $this->hasScale;
  }

  public function isHasScale()
  {
    return $this->hasScale;
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

class GetKeyword10QualityResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeyword10QualityResponse Attributes
  public $keyword10Quality;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setKeyword10Quality($akeyword10Quality) {
       $this->keyword10Quality = $akeyword10Quality;
   }

  public function addKeyword10Quality($aKeyword10Quality)
  {
    $wasAdded = false;
    $this->keyword10Quality[] = $aKeyword10Quality;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKeyword10Quality($aKeyword10Quality)
  {
    $wasRemoved = false;
    unset($this->keyword10Quality[$this->indexOfKeyword10Quality($aKeyword10Quality)]);
    $this->keyword10Quality = array_values($this->keyword10Quality);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getKeyword10Quality()
  {
    $newKeyword10Quality = $this->keyword10Quality;
    return $newKeyword10Quality;
  }

  public function numberOfKeyword10Quality()
  {
    $number = count($this->keyword10Quality);
    return $number;
  }

  public function indexOfKeyword10Quality($aKeyword10Quality)
  {
    $rawAnswer = array_search($aKeyword10Quality,$this->keyword10Quality);
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

class Quality10Type
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Quality10Type Attributes
  public $id;
  public $adgroupId;
  public $campaignId;
  public $pcQuality;
  public $pcReliable;
  public $pcReason;
  public $pcScale;
  public $mobileQuality;
  public $mobileReliable;
  public $mobileReason;
  public $mobileScale;

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

  public function setAdgroupId($aAdgroupId)
  {
    $wasSet = false;
    $this->adgroupId = $aAdgroupId;
    $wasSet = true;
    return $wasSet;
  }

  public function setCampaignId($aCampaignId)
  {
    $wasSet = false;
    $this->campaignId = $aCampaignId;
    $wasSet = true;
    return $wasSet;
  }

  public function setPcQuality($aPcQuality)
  {
    $wasSet = false;
    $this->pcQuality = $aPcQuality;
    $wasSet = true;
    return $wasSet;
  }

  public function setPcReliable($aPcReliable)
  {
    $wasSet = false;
    $this->pcReliable = $aPcReliable;
    $wasSet = true;
    return $wasSet;
  }

  public function setPcReason($aPcReason)
  {
    $wasSet = false;
    $this->pcReason = $aPcReason;
    $wasSet = true;
    return $wasSet;
  }
   public function setPcScale($apcScale) {
       $this->pcScale = $apcScale;
   }

  public function addPcScale($aPcScale)
  {
    $wasAdded = false;
    $this->pcScale[] = $aPcScale;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removePcScale($aPcScale)
  {
    $wasRemoved = false;
    unset($this->pcScale[$this->indexOfPcScale($aPcScale)]);
    $this->pcScale = array_values($this->pcScale);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setMobileQuality($aMobileQuality)
  {
    $wasSet = false;
    $this->mobileQuality = $aMobileQuality;
    $wasSet = true;
    return $wasSet;
  }

  public function setMobileReliable($aMobileReliable)
  {
    $wasSet = false;
    $this->mobileReliable = $aMobileReliable;
    $wasSet = true;
    return $wasSet;
  }

  public function setMobileReason($aMobileReason)
  {
    $wasSet = false;
    $this->mobileReason = $aMobileReason;
    $wasSet = true;
    return $wasSet;
  }
   public function setMobileScale($amobileScale) {
       $this->mobileScale = $amobileScale;
   }

  public function addMobileScale($aMobileScale)
  {
    $wasAdded = false;
    $this->mobileScale[] = $aMobileScale;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeMobileScale($aMobileScale)
  {
    $wasRemoved = false;
    unset($this->mobileScale[$this->indexOfMobileScale($aMobileScale)]);
    $this->mobileScale = array_values($this->mobileScale);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }

  public function getCampaignId()
  {
    return $this->campaignId;
  }

  public function getPcQuality()
  {
    return $this->pcQuality;
  }

  public function getPcReliable()
  {
    return $this->pcReliable;
  }

  public function getPcReason()
  {
    return $this->pcReason;
  }


  public function getPcScale()
  {
    $newPcScale = $this->pcScale;
    return $newPcScale;
  }

  public function numberOfPcScale()
  {
    $number = count($this->pcScale);
    return $number;
  }

  public function indexOfPcScale($aPcScale)
  {
    $rawAnswer = array_search($aPcScale,$this->pcScale);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getMobileQuality()
  {
    return $this->mobileQuality;
  }

  public function getMobileReliable()
  {
    return $this->mobileReliable;
  }

  public function getMobileReason()
  {
    return $this->mobileReason;
  }


  public function getMobileScale()
  {
    $newMobileScale = $this->mobileScale;
    return $newMobileScale;
  }

  public function numberOfMobileScale()
  {
    $number = count($this->mobileScale);
    return $number;
  }

  public function indexOfMobileScale($aMobileScale)
  {
    $rawAnswer = array_search($aMobileScale,$this->mobileScale);
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

class sms_v3_KeywordService extends CommonService 
{    public function __construct() {
        parent::__construct ( 'sms', 'v3', 'KeywordService' );
    }

  // ABSTRACT METHODS 

 public function addKeyword ($AddKeywordRequest){
 return $this->execute ( 'addKeyword', $AddKeywordRequest );
}
 public function updateKeyword ($UpdateKeywordRequest){
 return $this->execute ( 'updateKeyword', $UpdateKeywordRequest );
}
 public function deleteKeyword ($DeleteKeywordRequest){
 return $this->execute ( 'deleteKeyword', $DeleteKeywordRequest );
}
 public function activateKeyword ($ActivateKeywordRequest){
 return $this->execute ( 'activateKeyword', $ActivateKeywordRequest );
}
 public function getKeywordIdByAdgroupId ($GetKeywordIdByAdgroupIdRequest){
 return $this->execute ( 'getKeywordIdByAdgroupId', $GetKeywordIdByAdgroupIdRequest );
}
 public function getKeywordByAdgroupId ($GetKeywordByAdgroupIdRequest){
 return $this->execute ( 'getKeywordByAdgroupId', $GetKeywordByAdgroupIdRequest );
}
 public function getKeywordByKeywordId ($GetKeywordByKeywordIdRequest){
 return $this->execute ( 'getKeywordByKeywordId', $GetKeywordByKeywordIdRequest );
}
 public function getKeywordStatus ($GetKeywordStatusRequest){
 return $this->execute ( 'getKeywordStatus', $GetKeywordStatusRequest );
}
 public function getKeywordStatusZip ($GetKeywordStatusZipRequest){
 return $this->execute ( 'getKeywordStatusZip', $GetKeywordStatusZipRequest );
}
 public function getKeywordQuality ($GetKeywordQualityRequest){
 return $this->execute ( 'getKeywordQuality', $GetKeywordQualityRequest );
}
 public function getKeywordQualityZip ($GetKeywordQualityZipRequest){
 return $this->execute ( 'getKeywordQualityZip', $GetKeywordQualityZipRequest );
}
 public function getKeyword10Quality ($GetKeyword10QualityRequest){
 return $this->execute ( 'getKeyword10Quality', $GetKeyword10QualityRequest );
}
  
}


?>