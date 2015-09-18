<?php
require_once 'CommonService.php';

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class WordAttribute
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //WordAttribute Attributes
  public $searchWord;
  public $attributes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setSearchWord($aSearchWord)
  {
    $wasSet = false;
    $this->searchWord = $aSearchWord;
    $wasSet = true;
    return $wasSet;
  }
   public function setAttributes($aattributes) {
       $this->attributes = $aattributes;
   }

  public function addAttribute($aAttribute)
  {
    $wasAdded = false;
    $this->attributes[] = $aAttribute;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeAttribute($aAttribute)
  {
    $wasRemoved = false;
    unset($this->attributes[$this->indexOfAttribute($aAttribute)]);
    $this->attributes = array_values($this->attributes);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getSearchWord()
  {
    return $this->searchWord;
  }


  public function getAttributes()
  {
    $newAttributes = $this->attributes;
    return $newAttributes;
  }

  public function numberOfAttributes()
  {
    $number = count($this->attributes);
    return $number;
  }

  public function indexOfAttribute($aAttribute)
  {
    $rawAnswer = array_search($aAttribute,$this->attributes);
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

class GetAllKeywordsRankRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAllKeywordsRankRequest Attributes
  public $campaignIds;
  public $format;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCampaignIds($acampaignIds) {
       $this->campaignIds = $acampaignIds;
   }

  public function addCampaignId($aCampaignId)
  {
    $wasAdded = false;
    $this->campaignIds[] = $aCampaignId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCampaignId($aCampaignId)
  {
    $wasRemoved = false;
    unset($this->campaignIds[$this->indexOfCampaignId($aCampaignId)]);
    $this->campaignIds = array_values($this->campaignIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setFormat($aFormat)
  {
    $wasSet = false;
    $this->format = $aFormat;
    $wasSet = true;
    return $wasSet;
  }


  public function getCampaignIds()
  {
    $newCampaignIds = $this->campaignIds;
    return $newCampaignIds;
  }

  public function numberOfCampaignIds()
  {
    $number = count($this->campaignIds);
    return $number;
  }

  public function indexOfCampaignId($aCampaignId)
  {
    $rawAnswer = array_search($aCampaignId,$this->campaignIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getFormat()
  {
    return $this->format;
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

class GetAllKeywordsRankResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAllKeywordsRankResponse Attributes
  public $fileId;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setFileId($aFileId)
  {
    $wasSet = false;
    $this->fileId = $aFileId;
    $wasSet = true;
    return $wasSet;
  }

  public function getFileId()
  {
    return $this->fileId;
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

class GetAllKeywordsRankPathRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAllKeywordsRankPathRequest Attributes
  public $fileId;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setFileId($aFileId)
  {
    $wasSet = false;
    $this->fileId = $aFileId;
    $wasSet = true;
    return $wasSet;
  }

  public function getFileId()
  {
    return $this->fileId;
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

class GetAllKeywordsRankPathResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAllKeywordsRankPathResponse Attributes
  public $keywordsRankFilePath;
  public $keywordsRankFileMd5;
  public $date;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setKeywordsRankFilePath($aKeywordsRankFilePath)
  {
    $wasSet = false;
    $this->keywordsRankFilePath = $aKeywordsRankFilePath;
    $wasSet = true;
    return $wasSet;
  }

  public function setKeywordsRankFileMd5($aKeywordsRankFileMd5)
  {
    $wasSet = false;
    $this->keywordsRankFileMd5 = $aKeywordsRankFileMd5;
    $wasSet = true;
    return $wasSet;
  }

  public function setDate($aDate)
  {
    $wasSet = false;
    $this->date = $aDate;
    $wasSet = true;
    return $wasSet;
  }

  public function getKeywordsRankFilePath()
  {
    return $this->keywordsRankFilePath;
  }

  public function getKeywordsRankFileMd5()
  {
    return $this->keywordsRankFileMd5;
  }

  public function getDate()
  {
    return $this->date;
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

class GetAttributeByWordRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAttributeByWordRequest Attributes
  public $searchWords;
  public $attributeType;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setSearchWords($asearchWords) {
       $this->searchWords = $asearchWords;
   }

  public function addSearchWord($aSearchWord)
  {
    $wasAdded = false;
    $this->searchWords[] = $aSearchWord;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeSearchWord($aSearchWord)
  {
    $wasRemoved = false;
    unset($this->searchWords[$this->indexOfSearchWord($aSearchWord)]);
    $this->searchWords = array_values($this->searchWords);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setAttributeType($aAttributeType)
  {
    $wasSet = false;
    $this->attributeType = $aAttributeType;
    $wasSet = true;
    return $wasSet;
  }


  public function getSearchWords()
  {
    $newSearchWords = $this->searchWords;
    return $newSearchWords;
  }

  public function numberOfSearchWords()
  {
    $number = count($this->searchWords);
    return $number;
  }

  public function indexOfSearchWord($aSearchWord)
  {
    $rawAnswer = array_search($aSearchWord,$this->searchWords);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getAttributeType()
  {
    return $this->attributeType;
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

class GetAttributeByWordResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAttributeByWordResponse Attributes
  public $wordAttributes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setWordAttributes($awordAttributes) {
       $this->wordAttributes = $awordAttributes;
   }

  public function addWordAttribute($aWordAttribute)
  {
    $wasAdded = false;
    $this->wordAttributes[] = $aWordAttribute;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeWordAttribute($aWordAttribute)
  {
    $wasRemoved = false;
    unset($this->wordAttributes[$this->indexOfWordAttribute($aWordAttribute)]);
    $this->wordAttributes = array_values($this->wordAttributes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getWordAttributes()
  {
    $newWordAttributes = $this->wordAttributes;
    return $newWordAttributes;
  }

  public function numberOfWordAttributes()
  {
    $number = count($this->wordAttributes);
    return $number;
  }

  public function indexOfWordAttribute($aWordAttribute)
  {
    $rawAnswer = array_search($aWordAttribute,$this->wordAttributes);
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

class GetFileStateRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetFileStateRequest Attributes
  public $fileId;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setFileId($aFileId)
  {
    $wasSet = false;
    $this->fileId = $aFileId;
    $wasSet = true;
    return $wasSet;
  }

  public function getFileId()
  {
    return $this->fileId;
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

class GetFileStateResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetFileStateResponse Attributes
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

class GetKeywordRankRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeywordRankRequest Attributes
  public $winfoids;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setWinfoids($awinfoids) {
       $this->winfoids = $awinfoids;
   }

  public function addWinfoid($aWinfoid)
  {
    $wasAdded = false;
    $this->winfoids[] = $aWinfoid;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeWinfoid($aWinfoid)
  {
    $wasRemoved = false;
    unset($this->winfoids[$this->indexOfWinfoid($aWinfoid)]);
    $this->winfoids = array_values($this->winfoids);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getWinfoids()
  {
    $newWinfoids = $this->winfoids;
    return $newWinfoids;
  }

  public function numberOfWinfoids()
  {
    $number = count($this->winfoids);
    return $number;
  }

  public function indexOfWinfoid($aWinfoid)
  {
    $rawAnswer = array_search($aWinfoid,$this->winfoids);
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

class GetKeywordRankResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeywordRankResponse Attributes
  public $wordsRanks;
  public $date;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setWordsRanks($awordsRanks) {
       $this->wordsRanks = $awordsRanks;
   }

  public function addWordsRank($aWordsRank)
  {
    $wasAdded = false;
    $this->wordsRanks[] = $aWordsRank;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeWordsRank($aWordsRank)
  {
    $wasRemoved = false;
    unset($this->wordsRanks[$this->indexOfWordsRank($aWordsRank)]);
    $this->wordsRanks = array_values($this->wordsRanks);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setDate($aDate)
  {
    $wasSet = false;
    $this->date = $aDate;
    $wasSet = true;
    return $wasSet;
  }


  public function getWordsRanks()
  {
    $newWordsRanks = $this->wordsRanks;
    return $newWordsRanks;
  }

  public function numberOfWordsRanks()
  {
    $number = count($this->wordsRanks);
    return $number;
  }

  public function indexOfWordsRank($aWordsRank)
  {
    $rawAnswer = array_search($aWordsRank,$this->wordsRanks);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getDate()
  {
    return $this->date;
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

class GetkeywordRankResponseMetaData
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetkeywordRankResponseMetaData Attributes
  public $winfoid;
  public $adgroupId;
  public $leftpercent;
  public $leftRank;
  public $rightRank;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setWinfoid($aWinfoid)
  {
    $wasSet = false;
    $this->winfoid = $aWinfoid;
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

  public function setLeftpercent($aLeftpercent)
  {
    $wasSet = false;
    $this->leftpercent = $aLeftpercent;
    $wasSet = true;
    return $wasSet;
  }

  public function setLeftRank($aLeftRank)
  {
    $wasSet = false;
    $this->leftRank = $aLeftRank;
    $wasSet = true;
    return $wasSet;
  }

  public function setRightRank($aRightRank)
  {
    $wasSet = false;
    $this->rightRank = $aRightRank;
    $wasSet = true;
    return $wasSet;
  }

  public function getWinfoid()
  {
    return $this->winfoid;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }

  public function getLeftpercent()
  {
    return $this->leftpercent;
  }

  public function getLeftRank()
  {
    return $this->leftRank;
  }

  public function getRightRank()
  {
    return $this->rightRank;
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

class sms_v3_CompetitionService extends CommonService 
{    public function __construct() {
        parent::__construct ( 'sms', 'v3', 'CompetitionService' );
    }

  // ABSTRACT METHODS 

 public function getAllKeywordsRank ($GetAllKeywordsRankRequest){
 return $this->execute ( 'getAllKeywordsRank', $GetAllKeywordsRankRequest );
}
 public function getAllKeywordsRankPath ($GetAllKeywordsRankPathRequest){
 return $this->execute ( 'getAllKeywordsRankPath', $GetAllKeywordsRankPathRequest );
}
 public function getAttributeByWord ($GetAttributeByWordRequest){
 return $this->execute ( 'getAttributeByWord', $GetAttributeByWordRequest );
}
 public function getFileState ($GetFileStateRequest){
 return $this->execute ( 'getFileState', $GetFileStateRequest );
}
 public function getKeywordRank ($GetKeywordRankRequest){
 return $this->execute ( 'getKeywordRank', $GetKeywordRankRequest );
}
  
}


?>