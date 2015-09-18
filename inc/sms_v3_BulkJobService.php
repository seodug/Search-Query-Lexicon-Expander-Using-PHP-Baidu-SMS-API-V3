<?php
require_once 'CommonService.php';

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class ChangedItemType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //ChangedItemType Attributes
  public $id;
  public $adgroupId;
  public $campaignId;
  public $operator;

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

  public function setOperator($aOperator)
  {
    $wasSet = false;
    $this->operator = $aOperator;
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

  public function getOperator()
  {
    return $this->operator;
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

class FilePathType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //FilePathType Attributes
  public $accountFilePath;
  public $campaignFilePath;
  public $adgroupFilePath;
  public $keywordFilePath;
  public $creativeFilePath;
  public $newCreativeFilePaths;
  public $accountFileMd5;
  public $campaignFileMd5;
  public $adgroupFileMd5;
  public $keywordFileMd5;
  public $creativeFileMd5;
  public $newCreativeFileMd5s;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setAccountFilePath($aAccountFilePath)
  {
    $wasSet = false;
    $this->accountFilePath = $aAccountFilePath;
    $wasSet = true;
    return $wasSet;
  }

  public function setCampaignFilePath($aCampaignFilePath)
  {
    $wasSet = false;
    $this->campaignFilePath = $aCampaignFilePath;
    $wasSet = true;
    return $wasSet;
  }

  public function setAdgroupFilePath($aAdgroupFilePath)
  {
    $wasSet = false;
    $this->adgroupFilePath = $aAdgroupFilePath;
    $wasSet = true;
    return $wasSet;
  }

  public function setKeywordFilePath($aKeywordFilePath)
  {
    $wasSet = false;
    $this->keywordFilePath = $aKeywordFilePath;
    $wasSet = true;
    return $wasSet;
  }

  public function setCreativeFilePath($aCreativeFilePath)
  {
    $wasSet = false;
    $this->creativeFilePath = $aCreativeFilePath;
    $wasSet = true;
    return $wasSet;
  }
   public function setNewCreativeFilePaths($anewCreativeFilePaths) {
       $this->newCreativeFilePaths = $anewCreativeFilePaths;
   }

  public function addNewCreativeFilePath($aNewCreativeFilePath)
  {
    $wasAdded = false;
    $this->newCreativeFilePaths[] = $aNewCreativeFilePath;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeNewCreativeFilePath($aNewCreativeFilePath)
  {
    $wasRemoved = false;
    unset($this->newCreativeFilePaths[$this->indexOfNewCreativeFilePath($aNewCreativeFilePath)]);
    $this->newCreativeFilePaths = array_values($this->newCreativeFilePaths);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setAccountFileMd5($aAccountFileMd5)
  {
    $wasSet = false;
    $this->accountFileMd5 = $aAccountFileMd5;
    $wasSet = true;
    return $wasSet;
  }

  public function setCampaignFileMd5($aCampaignFileMd5)
  {
    $wasSet = false;
    $this->campaignFileMd5 = $aCampaignFileMd5;
    $wasSet = true;
    return $wasSet;
  }

  public function setAdgroupFileMd5($aAdgroupFileMd5)
  {
    $wasSet = false;
    $this->adgroupFileMd5 = $aAdgroupFileMd5;
    $wasSet = true;
    return $wasSet;
  }

  public function setKeywordFileMd5($aKeywordFileMd5)
  {
    $wasSet = false;
    $this->keywordFileMd5 = $aKeywordFileMd5;
    $wasSet = true;
    return $wasSet;
  }

  public function setCreativeFileMd5($aCreativeFileMd5)
  {
    $wasSet = false;
    $this->creativeFileMd5 = $aCreativeFileMd5;
    $wasSet = true;
    return $wasSet;
  }
   public function setNewCreativeFileMd5s($anewCreativeFileMd5s) {
       $this->newCreativeFileMd5s = $anewCreativeFileMd5s;
   }

  public function addNewCreativeFileMd5($aNewCreativeFileMd5)
  {
    $wasAdded = false;
    $this->newCreativeFileMd5s[] = $aNewCreativeFileMd5;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeNewCreativeFileMd5($aNewCreativeFileMd5)
  {
    $wasRemoved = false;
    unset($this->newCreativeFileMd5s[$this->indexOfNewCreativeFileMd5($aNewCreativeFileMd5)]);
    $this->newCreativeFileMd5s = array_values($this->newCreativeFileMd5s);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getAccountFilePath()
  {
    return $this->accountFilePath;
  }

  public function getCampaignFilePath()
  {
    return $this->campaignFilePath;
  }

  public function getAdgroupFilePath()
  {
    return $this->adgroupFilePath;
  }

  public function getKeywordFilePath()
  {
    return $this->keywordFilePath;
  }

  public function getCreativeFilePath()
  {
    return $this->creativeFilePath;
  }


  public function getNewCreativeFilePaths()
  {
    $newNewCreativeFilePaths = $this->newCreativeFilePaths;
    return $newNewCreativeFilePaths;
  }

  public function numberOfNewCreativeFilePaths()
  {
    $number = count($this->newCreativeFilePaths);
    return $number;
  }

  public function indexOfNewCreativeFilePath($aNewCreativeFilePath)
  {
    $rawAnswer = array_search($aNewCreativeFilePath,$this->newCreativeFilePaths);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getAccountFileMd5()
  {
    return $this->accountFileMd5;
  }

  public function getCampaignFileMd5()
  {
    return $this->campaignFileMd5;
  }

  public function getAdgroupFileMd5()
  {
    return $this->adgroupFileMd5;
  }

  public function getKeywordFileMd5()
  {
    return $this->keywordFileMd5;
  }

  public function getCreativeFileMd5()
  {
    return $this->creativeFileMd5;
  }


  public function getNewCreativeFileMd5s()
  {
    $newNewCreativeFileMd5s = $this->newCreativeFileMd5s;
    return $newNewCreativeFileMd5s;
  }

  public function numberOfNewCreativeFileMd5s()
  {
    $number = count($this->newCreativeFileMd5s);
    return $number;
  }

  public function indexOfNewCreativeFileMd5($aNewCreativeFileMd5)
  {
    $rawAnswer = array_search($aNewCreativeFileMd5,$this->newCreativeFileMd5s);
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

class ChangedCampaignIdType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //ChangedCampaignIdType Attributes
  public $campaignId;
  public $operator;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setCampaignId($aCampaignId)
  {
    $wasSet = false;
    $this->campaignId = $aCampaignId;
    $wasSet = true;
    return $wasSet;
  }

  public function setOperator($aOperator)
  {
    $wasSet = false;
    $this->operator = $aOperator;
    $wasSet = true;
    return $wasSet;
  }

  public function getCampaignId()
  {
    return $this->campaignId;
  }

  public function getOperator()
  {
    return $this->operator;
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

class ChangedAdgroupIdType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //ChangedAdgroupIdType Attributes
  public $operator;
  public $campaignId;
  public $adgroupId;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setOperator($aOperator)
  {
    $wasSet = false;
    $this->operator = $aOperator;
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

  public function setAdgroupId($aAdgroupId)
  {
    $wasSet = false;
    $this->adgroupId = $aAdgroupId;
    $wasSet = true;
    return $wasSet;
  }

  public function getOperator()
  {
    return $this->operator;
  }

  public function getCampaignId()
  {
    return $this->campaignId;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
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

class ChangedItemIdType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //ChangedItemIdType Attributes
  public $operator;
  public $itemId;
  public $campaignId;
  public $adgroupId;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setOperator($aOperator)
  {
    $wasSet = false;
    $this->operator = $aOperator;
    $wasSet = true;
    return $wasSet;
  }

  public function setItemId($aItemId)
  {
    $wasSet = false;
    $this->itemId = $aItemId;
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

  public function setAdgroupId($aAdgroupId)
  {
    $wasSet = false;
    $this->adgroupId = $aAdgroupId;
    $wasSet = true;
    return $wasSet;
  }

  public function getOperator()
  {
    return $this->operator;
  }

  public function getItemId()
  {
    return $this->itemId;
  }

  public function getCampaignId()
  {
    return $this->campaignId;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
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

class ChangedNewCreativeType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //ChangedNewCreativeType Attributes
  public $operator;
  public $id;
  public $adgroupId;
  public $campaignId;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setOperator($aOperator)
  {
    $wasSet = false;
    $this->operator = $aOperator;
    $wasSet = true;
    return $wasSet;
  }

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

  public function getOperator()
  {
    return $this->operator;
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

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class ChangedNewCreativeScaleType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //ChangedNewCreativeScaleType Attributes
  public $changedNewCreativeScale;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setChangedNewCreativeScale($achangedNewCreativeScale) {
       $this->changedNewCreativeScale = $achangedNewCreativeScale;
   }

  public function addChangedNewCreativeScale($aChangedNewCreativeScale)
  {
    $wasAdded = false;
    $this->changedNewCreativeScale[] = $aChangedNewCreativeScale;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeChangedNewCreativeScale($aChangedNewCreativeScale)
  {
    $wasRemoved = false;
    unset($this->changedNewCreativeScale[$this->indexOfChangedNewCreativeScale($aChangedNewCreativeScale)]);
    $this->changedNewCreativeScale = array_values($this->changedNewCreativeScale);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getChangedNewCreativeScale()
  {
    $newChangedNewCreativeScale = $this->changedNewCreativeScale;
    return $newChangedNewCreativeScale;
  }

  public function numberOfChangedNewCreativeScale()
  {
    $number = count($this->changedNewCreativeScale);
    return $number;
  }

  public function indexOfChangedNewCreativeScale($aChangedNewCreativeScale)
  {
    $rawAnswer = array_search($aChangedNewCreativeScale,$this->changedNewCreativeScale);
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

class VariableColumn
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //VariableColumn Attributes
  public $key;
  public $value;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setKey($aKey)
  {
    $wasSet = false;
    $this->key = $aKey;
    $wasSet = true;
    return $wasSet;
  }

  public function setValue($aValue)
  {
    $wasSet = false;
    $this->value = $aValue;
    $wasSet = true;
    return $wasSet;
  }

  public function getKey()
  {
    return $this->key;
  }

  public function getValue()
  {
    return $this->value;
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

class GetAllChangedObjectsRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAllChangedObjectsRequest Attributes
  public $campaignIds;
  public $changedAdgroupFile;
  public $changedCampaignFile;
  public $changedCreativeFile;
  public $changedKeywordFile;
  public $changedNewCreativeFiles;
  public $format;
  public $includeTemp;
  public $includeTempChangedNewCreatives;
  public $startTime;
  public $includePhraseType;
  public $extended;

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

  public function setChangedAdgroupFile($aChangedAdgroupFile)
  {
    $wasSet = false;
    $this->changedAdgroupFile = $aChangedAdgroupFile;
    $wasSet = true;
    return $wasSet;
  }

  public function setChangedCampaignFile($aChangedCampaignFile)
  {
    $wasSet = false;
    $this->changedCampaignFile = $aChangedCampaignFile;
    $wasSet = true;
    return $wasSet;
  }

  public function setChangedCreativeFile($aChangedCreativeFile)
  {
    $wasSet = false;
    $this->changedCreativeFile = $aChangedCreativeFile;
    $wasSet = true;
    return $wasSet;
  }

  public function setChangedKeywordFile($aChangedKeywordFile)
  {
    $wasSet = false;
    $this->changedKeywordFile = $aChangedKeywordFile;
    $wasSet = true;
    return $wasSet;
  }

  public function setChangedNewCreativeFiles($aChangedNewCreativeFiles)
  {
    $wasSet = false;
    $this->changedNewCreativeFiles = $aChangedNewCreativeFiles;
    $wasSet = true;
    return $wasSet;
  }

  public function setFormat($aFormat)
  {
    $wasSet = false;
    $this->format = $aFormat;
    $wasSet = true;
    return $wasSet;
  }

  public function setIncludeTemp($aIncludeTemp)
  {
    $wasSet = false;
    $this->includeTemp = $aIncludeTemp;
    $wasSet = true;
    return $wasSet;
  }

  public function setIncludeTempChangedNewCreatives($aIncludeTempChangedNewCreatives)
  {
    $wasSet = false;
    $this->includeTempChangedNewCreatives = $aIncludeTempChangedNewCreatives;
    $wasSet = true;
    return $wasSet;
  }

  public function setStartTime($aStartTime)
  {
    $wasSet = false;
    $this->startTime = $aStartTime;
    $wasSet = true;
    return $wasSet;
  }

  public function setIncludePhraseType($aIncludePhraseType)
  {
    $wasSet = false;
    $this->includePhraseType = $aIncludePhraseType;
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

  public function getChangedAdgroupFile()
  {
    return $this->changedAdgroupFile;
  }

  public function getChangedCampaignFile()
  {
    return $this->changedCampaignFile;
  }

  public function getChangedCreativeFile()
  {
    return $this->changedCreativeFile;
  }

  public function getChangedKeywordFile()
  {
    return $this->changedKeywordFile;
  }

  public function getChangedNewCreativeFiles()
  {
    return $this->changedNewCreativeFiles;
  }

  public function getFormat()
  {
    return $this->format;
  }

  public function getIncludeTemp()
  {
    return $this->includeTemp;
  }

  public function getIncludeTempChangedNewCreatives()
  {
    return $this->includeTempChangedNewCreatives;
  }

  public function getStartTime()
  {
    return $this->startTime;
  }

  public function getIncludePhraseType()
  {
    return $this->includePhraseType;
  }

  public function getExtended()
  {
    return $this->extended;
  }

  public function isChangedAdgroupFile()
  {
    return $this->changedAdgroupFile;
  }

  public function isChangedCampaignFile()
  {
    return $this->changedCampaignFile;
  }

  public function isChangedCreativeFile()
  {
    return $this->changedCreativeFile;
  }

  public function isChangedKeywordFile()
  {
    return $this->changedKeywordFile;
  }

  public function isIncludeTemp()
  {
    return $this->includeTemp;
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

class GetAllChangedObjectsResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAllChangedObjectsResponse Attributes
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

class GetChangedItemIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetChangedItemIdRequest Attributes
  public $startTime;
  public $type;
  public $ids;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setStartTime($aStartTime)
  {
    $wasSet = false;
    $this->startTime = $aStartTime;
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

  public function getStartTime()
  {
    return $this->startTime;
  }

  public function getType()
  {
    return $this->type;
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

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetChangedItemIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetChangedItemIdResponse Attributes
  public $endTime;
  public $changedKeywordIds;
  public $changedCreativeIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setEndTime($aEndTime)
  {
    $wasSet = false;
    $this->endTime = $aEndTime;
    $wasSet = true;
    return $wasSet;
  }
   public function setChangedKeywordIds($achangedKeywordIds) {
       $this->changedKeywordIds = $achangedKeywordIds;
   }

  public function addChangedKeywordId($aChangedKeywordId)
  {
    $wasAdded = false;
    $this->changedKeywordIds[] = $aChangedKeywordId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeChangedKeywordId($aChangedKeywordId)
  {
    $wasRemoved = false;
    unset($this->changedKeywordIds[$this->indexOfChangedKeywordId($aChangedKeywordId)]);
    $this->changedKeywordIds = array_values($this->changedKeywordIds);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setChangedCreativeIds($achangedCreativeIds) {
       $this->changedCreativeIds = $achangedCreativeIds;
   }

  public function addChangedCreativeId($aChangedCreativeId)
  {
    $wasAdded = false;
    $this->changedCreativeIds[] = $aChangedCreativeId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeChangedCreativeId($aChangedCreativeId)
  {
    $wasRemoved = false;
    unset($this->changedCreativeIds[$this->indexOfChangedCreativeId($aChangedCreativeId)]);
    $this->changedCreativeIds = array_values($this->changedCreativeIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getEndTime()
  {
    return $this->endTime;
  }


  public function getChangedKeywordIds()
  {
    $newChangedKeywordIds = $this->changedKeywordIds;
    return $newChangedKeywordIds;
  }

  public function numberOfChangedKeywordIds()
  {
    $number = count($this->changedKeywordIds);
    return $number;
  }

  public function indexOfChangedKeywordId($aChangedKeywordId)
  {
    $rawAnswer = array_search($aChangedKeywordId,$this->changedKeywordIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getChangedCreativeIds()
  {
    $newChangedCreativeIds = $this->changedCreativeIds;
    return $newChangedCreativeIds;
  }

  public function numberOfChangedCreativeIds()
  {
    $number = count($this->changedCreativeIds);
    return $number;
  }

  public function indexOfChangedCreativeId($aChangedCreativeId)
  {
    $rawAnswer = array_search($aChangedCreativeId,$this->changedCreativeIds);
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

class GetFilePathRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetFilePathRequest Attributes
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

class GetFilePathResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetFilePathResponse Attributes
  public $filePaths;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setFilePaths($aFilePaths)
  {
    $wasSet = false;
    $this->filePaths = $aFilePaths;
    $wasSet = true;
    return $wasSet;
  }

  public function getFilePaths()
  {
    return $this->filePaths;
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

class GetChangedCampaignIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetChangedCampaignIdRequest Attributes
  public $startTime;
  public $campaignLevel;
  public $adgroupLevel;
  public $itemLevel;
  public $newCreativeLevel;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setStartTime($aStartTime)
  {
    $wasSet = false;
    $this->startTime = $aStartTime;
    $wasSet = true;
    return $wasSet;
  }

  public function setCampaignLevel($aCampaignLevel)
  {
    $wasSet = false;
    $this->campaignLevel = $aCampaignLevel;
    $wasSet = true;
    return $wasSet;
  }

  public function setAdgroupLevel($aAdgroupLevel)
  {
    $wasSet = false;
    $this->adgroupLevel = $aAdgroupLevel;
    $wasSet = true;
    return $wasSet;
  }

  public function setItemLevel($aItemLevel)
  {
    $wasSet = false;
    $this->itemLevel = $aItemLevel;
    $wasSet = true;
    return $wasSet;
  }

  public function setNewCreativeLevel($aNewCreativeLevel)
  {
    $wasSet = false;
    $this->newCreativeLevel = $aNewCreativeLevel;
    $wasSet = true;
    return $wasSet;
  }

  public function getStartTime()
  {
    return $this->startTime;
  }

  public function getCampaignLevel()
  {
    return $this->campaignLevel;
  }

  public function getAdgroupLevel()
  {
    return $this->adgroupLevel;
  }

  public function getItemLevel()
  {
    return $this->itemLevel;
  }

  public function getNewCreativeLevel()
  {
    return $this->newCreativeLevel;
  }

  public function isCampaignLevel()
  {
    return $this->campaignLevel;
  }

  public function isAdgroupLevel()
  {
    return $this->adgroupLevel;
  }

  public function isItemLevel()
  {
    return $this->itemLevel;
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

class GetChangedCampaignIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetChangedCampaignIdResponse Attributes
  public $changedCampaignIds;
  public $endTime;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setChangedCampaignIds($achangedCampaignIds) {
       $this->changedCampaignIds = $achangedCampaignIds;
   }

  public function addChangedCampaignId($aChangedCampaignId)
  {
    $wasAdded = false;
    $this->changedCampaignIds[] = $aChangedCampaignId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeChangedCampaignId($aChangedCampaignId)
  {
    $wasRemoved = false;
    unset($this->changedCampaignIds[$this->indexOfChangedCampaignId($aChangedCampaignId)]);
    $this->changedCampaignIds = array_values($this->changedCampaignIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setEndTime($aEndTime)
  {
    $wasSet = false;
    $this->endTime = $aEndTime;
    $wasSet = true;
    return $wasSet;
  }


  public function getChangedCampaignIds()
  {
    $newChangedCampaignIds = $this->changedCampaignIds;
    return $newChangedCampaignIds;
  }

  public function numberOfChangedCampaignIds()
  {
    $number = count($this->changedCampaignIds);
    return $number;
  }

  public function indexOfChangedCampaignId($aChangedCampaignId)
  {
    $rawAnswer = array_search($aChangedCampaignId,$this->changedCampaignIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getEndTime()
  {
    return $this->endTime;
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

class GetChangedIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetChangedIdRequest Attributes
  public $startTime;
  public $extended;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setStartTime($aStartTime)
  {
    $wasSet = false;
    $this->startTime = $aStartTime;
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

  public function getStartTime()
  {
    return $this->startTime;
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

class GetChangedIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetChangedIdResponse Attributes
  public $endTime;
  public $changedCampaignIds;
  public $changedAdgroupIds;
  public $changedKeywordIds;
  public $changedCreativeIds;
  public $changedNewCreativeIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setEndTime($aEndTime)
  {
    $wasSet = false;
    $this->endTime = $aEndTime;
    $wasSet = true;
    return $wasSet;
  }
   public function setChangedCampaignIds($achangedCampaignIds) {
       $this->changedCampaignIds = $achangedCampaignIds;
   }

  public function addChangedCampaignId($aChangedCampaignId)
  {
    $wasAdded = false;
    $this->changedCampaignIds[] = $aChangedCampaignId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeChangedCampaignId($aChangedCampaignId)
  {
    $wasRemoved = false;
    unset($this->changedCampaignIds[$this->indexOfChangedCampaignId($aChangedCampaignId)]);
    $this->changedCampaignIds = array_values($this->changedCampaignIds);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setChangedAdgroupIds($achangedAdgroupIds) {
       $this->changedAdgroupIds = $achangedAdgroupIds;
   }

  public function addChangedAdgroupId($aChangedAdgroupId)
  {
    $wasAdded = false;
    $this->changedAdgroupIds[] = $aChangedAdgroupId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeChangedAdgroupId($aChangedAdgroupId)
  {
    $wasRemoved = false;
    unset($this->changedAdgroupIds[$this->indexOfChangedAdgroupId($aChangedAdgroupId)]);
    $this->changedAdgroupIds = array_values($this->changedAdgroupIds);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setChangedKeywordIds($achangedKeywordIds) {
       $this->changedKeywordIds = $achangedKeywordIds;
   }

  public function addChangedKeywordId($aChangedKeywordId)
  {
    $wasAdded = false;
    $this->changedKeywordIds[] = $aChangedKeywordId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeChangedKeywordId($aChangedKeywordId)
  {
    $wasRemoved = false;
    unset($this->changedKeywordIds[$this->indexOfChangedKeywordId($aChangedKeywordId)]);
    $this->changedKeywordIds = array_values($this->changedKeywordIds);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setChangedCreativeIds($achangedCreativeIds) {
       $this->changedCreativeIds = $achangedCreativeIds;
   }

  public function addChangedCreativeId($aChangedCreativeId)
  {
    $wasAdded = false;
    $this->changedCreativeIds[] = $aChangedCreativeId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeChangedCreativeId($aChangedCreativeId)
  {
    $wasRemoved = false;
    unset($this->changedCreativeIds[$this->indexOfChangedCreativeId($aChangedCreativeId)]);
    $this->changedCreativeIds = array_values($this->changedCreativeIds);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setChangedNewCreativeIds($achangedNewCreativeIds) {
       $this->changedNewCreativeIds = $achangedNewCreativeIds;
   }

  public function addChangedNewCreativeId($aChangedNewCreativeId)
  {
    $wasAdded = false;
    $this->changedNewCreativeIds[] = $aChangedNewCreativeId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeChangedNewCreativeId($aChangedNewCreativeId)
  {
    $wasRemoved = false;
    unset($this->changedNewCreativeIds[$this->indexOfChangedNewCreativeId($aChangedNewCreativeId)]);
    $this->changedNewCreativeIds = array_values($this->changedNewCreativeIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getEndTime()
  {
    return $this->endTime;
  }


  public function getChangedCampaignIds()
  {
    $newChangedCampaignIds = $this->changedCampaignIds;
    return $newChangedCampaignIds;
  }

  public function numberOfChangedCampaignIds()
  {
    $number = count($this->changedCampaignIds);
    return $number;
  }

  public function indexOfChangedCampaignId($aChangedCampaignId)
  {
    $rawAnswer = array_search($aChangedCampaignId,$this->changedCampaignIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getChangedAdgroupIds()
  {
    $newChangedAdgroupIds = $this->changedAdgroupIds;
    return $newChangedAdgroupIds;
  }

  public function numberOfChangedAdgroupIds()
  {
    $number = count($this->changedAdgroupIds);
    return $number;
  }

  public function indexOfChangedAdgroupId($aChangedAdgroupId)
  {
    $rawAnswer = array_search($aChangedAdgroupId,$this->changedAdgroupIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getChangedKeywordIds()
  {
    $newChangedKeywordIds = $this->changedKeywordIds;
    return $newChangedKeywordIds;
  }

  public function numberOfChangedKeywordIds()
  {
    $number = count($this->changedKeywordIds);
    return $number;
  }

  public function indexOfChangedKeywordId($aChangedKeywordId)
  {
    $rawAnswer = array_search($aChangedKeywordId,$this->changedKeywordIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getChangedCreativeIds()
  {
    $newChangedCreativeIds = $this->changedCreativeIds;
    return $newChangedCreativeIds;
  }

  public function numberOfChangedCreativeIds()
  {
    $number = count($this->changedCreativeIds);
    return $number;
  }

  public function indexOfChangedCreativeId($aChangedCreativeId)
  {
    $rawAnswer = array_search($aChangedCreativeId,$this->changedCreativeIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getChangedNewCreativeIds()
  {
    $newChangedNewCreativeIds = $this->changedNewCreativeIds;
    return $newChangedNewCreativeIds;
  }

  public function numberOfChangedNewCreativeIds()
  {
    $number = count($this->changedNewCreativeIds);
    return $number;
  }

  public function indexOfChangedNewCreativeId($aChangedNewCreativeId)
  {
    $rawAnswer = array_search($aChangedNewCreativeId,$this->changedNewCreativeIds);
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

class GetChangedNewCreativeIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetChangedNewCreativeIdRequest Attributes
  public $startTime;
  public $type;
  public $ids;
  public $newCreativeType;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setStartTime($aStartTime)
  {
    $wasSet = false;
    $this->startTime = $aStartTime;
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

  public function setNewCreativeType($aNewCreativeType)
  {
    $wasSet = false;
    $this->newCreativeType = $aNewCreativeType;
    $wasSet = true;
    return $wasSet;
  }

  public function getStartTime()
  {
    return $this->startTime;
  }

  public function getType()
  {
    return $this->type;
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

  public function getNewCreativeType()
  {
    return $this->newCreativeType;
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

class GetChangedNewCreativeIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetChangedNewCreativeIdResponse Attributes
  public $endTime;
  public $changedNewCreativeIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setEndTime($aEndTime)
  {
    $wasSet = false;
    $this->endTime = $aEndTime;
    $wasSet = true;
    return $wasSet;
  }
   public function setChangedNewCreativeIds($achangedNewCreativeIds) {
       $this->changedNewCreativeIds = $achangedNewCreativeIds;
   }

  public function addChangedNewCreativeId($aChangedNewCreativeId)
  {
    $wasAdded = false;
    $this->changedNewCreativeIds[] = $aChangedNewCreativeId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeChangedNewCreativeId($aChangedNewCreativeId)
  {
    $wasRemoved = false;
    unset($this->changedNewCreativeIds[$this->indexOfChangedNewCreativeId($aChangedNewCreativeId)]);
    $this->changedNewCreativeIds = array_values($this->changedNewCreativeIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getEndTime()
  {
    return $this->endTime;
  }


  public function getChangedNewCreativeIds()
  {
    $newChangedNewCreativeIds = $this->changedNewCreativeIds;
    return $newChangedNewCreativeIds;
  }

  public function numberOfChangedNewCreativeIds()
  {
    $number = count($this->changedNewCreativeIds);
    return $number;
  }

  public function indexOfChangedNewCreativeId($aChangedNewCreativeId)
  {
    $rawAnswer = array_search($aChangedNewCreativeId,$this->changedNewCreativeIds);
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

class GetChangedScaleRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetChangedScaleRequest Attributes
  public $startTime;
  public $campaignIds;
  public $changedCampaignScale;
  public $changedAdgroupScale;
  public $changedKeywordScale;
  public $changedCreativeScale;
  public $changedNewCreativeScales;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setStartTime($aStartTime)
  {
    $wasSet = false;
    $this->startTime = $aStartTime;
    $wasSet = true;
    return $wasSet;
  }
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

  public function setChangedCampaignScale($aChangedCampaignScale)
  {
    $wasSet = false;
    $this->changedCampaignScale = $aChangedCampaignScale;
    $wasSet = true;
    return $wasSet;
  }

  public function setChangedAdgroupScale($aChangedAdgroupScale)
  {
    $wasSet = false;
    $this->changedAdgroupScale = $aChangedAdgroupScale;
    $wasSet = true;
    return $wasSet;
  }

  public function setChangedKeywordScale($aChangedKeywordScale)
  {
    $wasSet = false;
    $this->changedKeywordScale = $aChangedKeywordScale;
    $wasSet = true;
    return $wasSet;
  }

  public function setChangedCreativeScale($aChangedCreativeScale)
  {
    $wasSet = false;
    $this->changedCreativeScale = $aChangedCreativeScale;
    $wasSet = true;
    return $wasSet;
  }

  public function setChangedNewCreativeScales($aChangedNewCreativeScales)
  {
    $wasSet = false;
    $this->changedNewCreativeScales = $aChangedNewCreativeScales;
    $wasSet = true;
    return $wasSet;
  }

  public function getStartTime()
  {
    return $this->startTime;
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

  public function getChangedCampaignScale()
  {
    return $this->changedCampaignScale;
  }

  public function getChangedAdgroupScale()
  {
    return $this->changedAdgroupScale;
  }

  public function getChangedKeywordScale()
  {
    return $this->changedKeywordScale;
  }

  public function getChangedCreativeScale()
  {
    return $this->changedCreativeScale;
  }

  public function getChangedNewCreativeScales()
  {
    return $this->changedNewCreativeScales;
  }

  public function isChangedCampaignScale()
  {
    return $this->changedCampaignScale;
  }

  public function isChangedAdgroupScale()
  {
    return $this->changedAdgroupScale;
  }

  public function isChangedKeywordScale()
  {
    return $this->changedKeywordScale;
  }

  public function isChangedCreativeScale()
  {
    return $this->changedCreativeScale;
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

class GetChangedScaleResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetChangedScaleResponse Attributes
  public $changedCampaignScale;
  public $changedAdgroupScale;
  public $changedKeywordScale;
  public $changedCreativeScale;
  public $changedNewCreativeScales;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setChangedCampaignScale($achangedCampaignScale) {
       $this->changedCampaignScale = $achangedCampaignScale;
   }

  public function addChangedCampaignScale($aChangedCampaignScale)
  {
    $wasAdded = false;
    $this->changedCampaignScale[] = $aChangedCampaignScale;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeChangedCampaignScale($aChangedCampaignScale)
  {
    $wasRemoved = false;
    unset($this->changedCampaignScale[$this->indexOfChangedCampaignScale($aChangedCampaignScale)]);
    $this->changedCampaignScale = array_values($this->changedCampaignScale);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setChangedAdgroupScale($achangedAdgroupScale) {
       $this->changedAdgroupScale = $achangedAdgroupScale;
   }

  public function addChangedAdgroupScale($aChangedAdgroupScale)
  {
    $wasAdded = false;
    $this->changedAdgroupScale[] = $aChangedAdgroupScale;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeChangedAdgroupScale($aChangedAdgroupScale)
  {
    $wasRemoved = false;
    unset($this->changedAdgroupScale[$this->indexOfChangedAdgroupScale($aChangedAdgroupScale)]);
    $this->changedAdgroupScale = array_values($this->changedAdgroupScale);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setChangedKeywordScale($achangedKeywordScale) {
       $this->changedKeywordScale = $achangedKeywordScale;
   }

  public function addChangedKeywordScale($aChangedKeywordScale)
  {
    $wasAdded = false;
    $this->changedKeywordScale[] = $aChangedKeywordScale;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeChangedKeywordScale($aChangedKeywordScale)
  {
    $wasRemoved = false;
    unset($this->changedKeywordScale[$this->indexOfChangedKeywordScale($aChangedKeywordScale)]);
    $this->changedKeywordScale = array_values($this->changedKeywordScale);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setChangedCreativeScale($achangedCreativeScale) {
       $this->changedCreativeScale = $achangedCreativeScale;
   }

  public function addChangedCreativeScale($aChangedCreativeScale)
  {
    $wasAdded = false;
    $this->changedCreativeScale[] = $aChangedCreativeScale;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeChangedCreativeScale($aChangedCreativeScale)
  {
    $wasRemoved = false;
    unset($this->changedCreativeScale[$this->indexOfChangedCreativeScale($aChangedCreativeScale)]);
    $this->changedCreativeScale = array_values($this->changedCreativeScale);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setChangedNewCreativeScales($achangedNewCreativeScales) {
       $this->changedNewCreativeScales = $achangedNewCreativeScales;
   }

  public function addChangedNewCreativeScale($aChangedNewCreativeScale)
  {
    $wasAdded = false;
    $this->changedNewCreativeScales[] = $aChangedNewCreativeScale;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeChangedNewCreativeScale($aChangedNewCreativeScale)
  {
    $wasRemoved = false;
    unset($this->changedNewCreativeScales[$this->indexOfChangedNewCreativeScale($aChangedNewCreativeScale)]);
    $this->changedNewCreativeScales = array_values($this->changedNewCreativeScales);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getChangedCampaignScale()
  {
    $newChangedCampaignScale = $this->changedCampaignScale;
    return $newChangedCampaignScale;
  }

  public function numberOfChangedCampaignScale()
  {
    $number = count($this->changedCampaignScale);
    return $number;
  }

  public function indexOfChangedCampaignScale($aChangedCampaignScale)
  {
    $rawAnswer = array_search($aChangedCampaignScale,$this->changedCampaignScale);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getChangedAdgroupScale()
  {
    $newChangedAdgroupScale = $this->changedAdgroupScale;
    return $newChangedAdgroupScale;
  }

  public function numberOfChangedAdgroupScale()
  {
    $number = count($this->changedAdgroupScale);
    return $number;
  }

  public function indexOfChangedAdgroupScale($aChangedAdgroupScale)
  {
    $rawAnswer = array_search($aChangedAdgroupScale,$this->changedAdgroupScale);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getChangedKeywordScale()
  {
    $newChangedKeywordScale = $this->changedKeywordScale;
    return $newChangedKeywordScale;
  }

  public function numberOfChangedKeywordScale()
  {
    $number = count($this->changedKeywordScale);
    return $number;
  }

  public function indexOfChangedKeywordScale($aChangedKeywordScale)
  {
    $rawAnswer = array_search($aChangedKeywordScale,$this->changedKeywordScale);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getChangedCreativeScale()
  {
    $newChangedCreativeScale = $this->changedCreativeScale;
    return $newChangedCreativeScale;
  }

  public function numberOfChangedCreativeScale()
  {
    $number = count($this->changedCreativeScale);
    return $number;
  }

  public function indexOfChangedCreativeScale($aChangedCreativeScale)
  {
    $rawAnswer = array_search($aChangedCreativeScale,$this->changedCreativeScale);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getChangedNewCreativeScales()
  {
    $newChangedNewCreativeScales = $this->changedNewCreativeScales;
    return $newChangedNewCreativeScales;
  }

  public function numberOfChangedNewCreativeScales()
  {
    $number = count($this->changedNewCreativeScales);
    return $number;
  }

  public function indexOfChangedNewCreativeScale($aChangedNewCreativeScale)
  {
    $rawAnswer = array_search($aChangedNewCreativeScale,$this->changedNewCreativeScales);
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

class GetAllObjectsRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAllObjectsRequest Attributes
  public $campaignIds;
  public $includeQuality;
  public $includeTemp;
  public $format;
  public $variableColumns;
  public $newCreativeFiles;
  public $includeTempNewCreatives;
  public $includePhraseType;
  public $extended;

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

  public function setIncludeQuality($aIncludeQuality)
  {
    $wasSet = false;
    $this->includeQuality = $aIncludeQuality;
    $wasSet = true;
    return $wasSet;
  }

  public function setIncludeTemp($aIncludeTemp)
  {
    $wasSet = false;
    $this->includeTemp = $aIncludeTemp;
    $wasSet = true;
    return $wasSet;
  }

  public function setFormat($aFormat)
  {
    $wasSet = false;
    $this->format = $aFormat;
    $wasSet = true;
    return $wasSet;
  }
   public function setVariableColumns($avariableColumns) {
       $this->variableColumns = $avariableColumns;
   }

  public function addVariableColumn($aVariableColumn)
  {
    $wasAdded = false;
    $this->variableColumns[] = $aVariableColumn;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeVariableColumn($aVariableColumn)
  {
    $wasRemoved = false;
    unset($this->variableColumns[$this->indexOfVariableColumn($aVariableColumn)]);
    $this->variableColumns = array_values($this->variableColumns);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setNewCreativeFiles($aNewCreativeFiles)
  {
    $wasSet = false;
    $this->newCreativeFiles = $aNewCreativeFiles;
    $wasSet = true;
    return $wasSet;
  }

  public function setIncludeTempNewCreatives($aIncludeTempNewCreatives)
  {
    $wasSet = false;
    $this->includeTempNewCreatives = $aIncludeTempNewCreatives;
    $wasSet = true;
    return $wasSet;
  }

  public function setIncludePhraseType($aIncludePhraseType)
  {
    $wasSet = false;
    $this->includePhraseType = $aIncludePhraseType;
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

  public function getIncludeQuality()
  {
    return $this->includeQuality;
  }

  public function getIncludeTemp()
  {
    return $this->includeTemp;
  }

  public function getFormat()
  {
    return $this->format;
  }


  public function getVariableColumns()
  {
    $newVariableColumns = $this->variableColumns;
    return $newVariableColumns;
  }

  public function numberOfVariableColumns()
  {
    $number = count($this->variableColumns);
    return $number;
  }

  public function indexOfVariableColumn($aVariableColumn)
  {
    $rawAnswer = array_search($aVariableColumn,$this->variableColumns);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getNewCreativeFiles()
  {
    return $this->newCreativeFiles;
  }

  public function getIncludeTempNewCreatives()
  {
    return $this->includeTempNewCreatives;
  }

  public function getIncludePhraseType()
  {
    return $this->includePhraseType;
  }

  public function getExtended()
  {
    return $this->extended;
  }

  public function isIncludeQuality()
  {
    return $this->includeQuality;
  }

  public function isIncludeTemp()
  {
    return $this->includeTemp;
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

class GetAllObjectsResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAllObjectsResponse Attributes
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

class GetChangedAdgroupIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetChangedAdgroupIdRequest Attributes
  public $startTime;
  public $campaignIds;
  public $adgroupLevel;
  public $itemLevel;
  public $newCreativeLevel;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setStartTime($aStartTime)
  {
    $wasSet = false;
    $this->startTime = $aStartTime;
    $wasSet = true;
    return $wasSet;
  }
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

  public function setAdgroupLevel($aAdgroupLevel)
  {
    $wasSet = false;
    $this->adgroupLevel = $aAdgroupLevel;
    $wasSet = true;
    return $wasSet;
  }

  public function setItemLevel($aItemLevel)
  {
    $wasSet = false;
    $this->itemLevel = $aItemLevel;
    $wasSet = true;
    return $wasSet;
  }

  public function setNewCreativeLevel($aNewCreativeLevel)
  {
    $wasSet = false;
    $this->newCreativeLevel = $aNewCreativeLevel;
    $wasSet = true;
    return $wasSet;
  }

  public function getStartTime()
  {
    return $this->startTime;
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

  public function getAdgroupLevel()
  {
    return $this->adgroupLevel;
  }

  public function getItemLevel()
  {
    return $this->itemLevel;
  }

  public function getNewCreativeLevel()
  {
    return $this->newCreativeLevel;
  }

  public function isAdgroupLevel()
  {
    return $this->adgroupLevel;
  }

  public function isItemLevel()
  {
    return $this->itemLevel;
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

class GetChangedAdgroupIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetChangedAdgroupIdResponse Attributes
  public $endTime;
  public $changedAdgroupIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setEndTime($aEndTime)
  {
    $wasSet = false;
    $this->endTime = $aEndTime;
    $wasSet = true;
    return $wasSet;
  }
   public function setChangedAdgroupIds($achangedAdgroupIds) {
       $this->changedAdgroupIds = $achangedAdgroupIds;
   }

  public function addChangedAdgroupId($aChangedAdgroupId)
  {
    $wasAdded = false;
    $this->changedAdgroupIds[] = $aChangedAdgroupId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeChangedAdgroupId($aChangedAdgroupId)
  {
    $wasRemoved = false;
    unset($this->changedAdgroupIds[$this->indexOfChangedAdgroupId($aChangedAdgroupId)]);
    $this->changedAdgroupIds = array_values($this->changedAdgroupIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getEndTime()
  {
    return $this->endTime;
  }


  public function getChangedAdgroupIds()
  {
    $newChangedAdgroupIds = $this->changedAdgroupIds;
    return $newChangedAdgroupIds;
  }

  public function numberOfChangedAdgroupIds()
  {
    $number = count($this->changedAdgroupIds);
    return $number;
  }

  public function indexOfChangedAdgroupId($aChangedAdgroupId)
  {
    $rawAnswer = array_search($aChangedAdgroupId,$this->changedAdgroupIds);
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

class GetSelectedObjectsRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetSelectedObjectsRequest Attributes
  public $campaignIds;
  public $campaignSelectedColumn;
  public $adgroupSelectedColumn;
  public $keywordSelectedColumn;
  public $creativeSelectedColumn;
  public $newCreativeSelectedColumn;
  public $selectedRow;
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
   public function setCampaignSelectedColumn($acampaignSelectedColumn) {
       $this->campaignSelectedColumn = $acampaignSelectedColumn;
   }

  public function addCampaignSelectedColumn($aCampaignSelectedColumn)
  {
    $wasAdded = false;
    $this->campaignSelectedColumn[] = $aCampaignSelectedColumn;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCampaignSelectedColumn($aCampaignSelectedColumn)
  {
    $wasRemoved = false;
    unset($this->campaignSelectedColumn[$this->indexOfCampaignSelectedColumn($aCampaignSelectedColumn)]);
    $this->campaignSelectedColumn = array_values($this->campaignSelectedColumn);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setAdgroupSelectedColumn($aadgroupSelectedColumn) {
       $this->adgroupSelectedColumn = $aadgroupSelectedColumn;
   }

  public function addAdgroupSelectedColumn($aAdgroupSelectedColumn)
  {
    $wasAdded = false;
    $this->adgroupSelectedColumn[] = $aAdgroupSelectedColumn;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeAdgroupSelectedColumn($aAdgroupSelectedColumn)
  {
    $wasRemoved = false;
    unset($this->adgroupSelectedColumn[$this->indexOfAdgroupSelectedColumn($aAdgroupSelectedColumn)]);
    $this->adgroupSelectedColumn = array_values($this->adgroupSelectedColumn);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setKeywordSelectedColumn($akeywordSelectedColumn) {
       $this->keywordSelectedColumn = $akeywordSelectedColumn;
   }

  public function addKeywordSelectedColumn($aKeywordSelectedColumn)
  {
    $wasAdded = false;
    $this->keywordSelectedColumn[] = $aKeywordSelectedColumn;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKeywordSelectedColumn($aKeywordSelectedColumn)
  {
    $wasRemoved = false;
    unset($this->keywordSelectedColumn[$this->indexOfKeywordSelectedColumn($aKeywordSelectedColumn)]);
    $this->keywordSelectedColumn = array_values($this->keywordSelectedColumn);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setCreativeSelectedColumn($acreativeSelectedColumn) {
       $this->creativeSelectedColumn = $acreativeSelectedColumn;
   }

  public function addCreativeSelectedColumn($aCreativeSelectedColumn)
  {
    $wasAdded = false;
    $this->creativeSelectedColumn[] = $aCreativeSelectedColumn;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCreativeSelectedColumn($aCreativeSelectedColumn)
  {
    $wasRemoved = false;
    unset($this->creativeSelectedColumn[$this->indexOfCreativeSelectedColumn($aCreativeSelectedColumn)]);
    $this->creativeSelectedColumn = array_values($this->creativeSelectedColumn);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setNewCreativeSelectedColumn($anewCreativeSelectedColumn) {
       $this->newCreativeSelectedColumn = $anewCreativeSelectedColumn;
   }

  public function addNewCreativeSelectedColumn($aNewCreativeSelectedColumn)
  {
    $wasAdded = false;
    $this->newCreativeSelectedColumn[] = $aNewCreativeSelectedColumn;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeNewCreativeSelectedColumn($aNewCreativeSelectedColumn)
  {
    $wasRemoved = false;
    unset($this->newCreativeSelectedColumn[$this->indexOfNewCreativeSelectedColumn($aNewCreativeSelectedColumn)]);
    $this->newCreativeSelectedColumn = array_values($this->newCreativeSelectedColumn);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setSelectedRow($aselectedRow) {
       $this->selectedRow = $aselectedRow;
   }

  public function addSelectedRow($aSelectedRow)
  {
    $wasAdded = false;
    $this->selectedRow[] = $aSelectedRow;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeSelectedRow($aSelectedRow)
  {
    $wasRemoved = false;
    unset($this->selectedRow[$this->indexOfSelectedRow($aSelectedRow)]);
    $this->selectedRow = array_values($this->selectedRow);
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


  public function getCampaignSelectedColumn()
  {
    $newCampaignSelectedColumn = $this->campaignSelectedColumn;
    return $newCampaignSelectedColumn;
  }

  public function numberOfCampaignSelectedColumn()
  {
    $number = count($this->campaignSelectedColumn);
    return $number;
  }

  public function indexOfCampaignSelectedColumn($aCampaignSelectedColumn)
  {
    $rawAnswer = array_search($aCampaignSelectedColumn,$this->campaignSelectedColumn);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getAdgroupSelectedColumn()
  {
    $newAdgroupSelectedColumn = $this->adgroupSelectedColumn;
    return $newAdgroupSelectedColumn;
  }

  public function numberOfAdgroupSelectedColumn()
  {
    $number = count($this->adgroupSelectedColumn);
    return $number;
  }

  public function indexOfAdgroupSelectedColumn($aAdgroupSelectedColumn)
  {
    $rawAnswer = array_search($aAdgroupSelectedColumn,$this->adgroupSelectedColumn);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getKeywordSelectedColumn()
  {
    $newKeywordSelectedColumn = $this->keywordSelectedColumn;
    return $newKeywordSelectedColumn;
  }

  public function numberOfKeywordSelectedColumn()
  {
    $number = count($this->keywordSelectedColumn);
    return $number;
  }

  public function indexOfKeywordSelectedColumn($aKeywordSelectedColumn)
  {
    $rawAnswer = array_search($aKeywordSelectedColumn,$this->keywordSelectedColumn);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getCreativeSelectedColumn()
  {
    $newCreativeSelectedColumn = $this->creativeSelectedColumn;
    return $newCreativeSelectedColumn;
  }

  public function numberOfCreativeSelectedColumn()
  {
    $number = count($this->creativeSelectedColumn);
    return $number;
  }

  public function indexOfCreativeSelectedColumn($aCreativeSelectedColumn)
  {
    $rawAnswer = array_search($aCreativeSelectedColumn,$this->creativeSelectedColumn);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getNewCreativeSelectedColumn()
  {
    $newNewCreativeSelectedColumn = $this->newCreativeSelectedColumn;
    return $newNewCreativeSelectedColumn;
  }

  public function numberOfNewCreativeSelectedColumn()
  {
    $number = count($this->newCreativeSelectedColumn);
    return $number;
  }

  public function indexOfNewCreativeSelectedColumn($aNewCreativeSelectedColumn)
  {
    $rawAnswer = array_search($aNewCreativeSelectedColumn,$this->newCreativeSelectedColumn);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getSelectedRow()
  {
    $newSelectedRow = $this->selectedRow;
    return $newSelectedRow;
  }

  public function numberOfSelectedRow()
  {
    $number = count($this->selectedRow);
    return $number;
  }

  public function indexOfSelectedRow($aSelectedRow)
  {
    $rawAnswer = array_search($aSelectedRow,$this->selectedRow);
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

class GetSelectedObjectsResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetSelectedObjectsResponse Attributes
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

class CancelDownloadRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //CancelDownloadRequest Attributes
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

class CancelDownloadResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //CancelDownloadResponse Attributes
  public $isCanceled;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setIsCanceled($aIsCanceled)
  {
    $wasSet = false;
    $this->isCanceled = $aIsCanceled;
    $wasSet = true;
    return $wasSet;
  }

  public function getIsCanceled()
  {
    return $this->isCanceled;
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

class sms_v3_BulkJobService extends CommonService 
{    public function __construct() {
        parent::__construct ( 'sms', 'v3', 'BulkJobService' );
    }

  // ABSTRACT METHODS 

 public function getFileState ($GetFileStateRequest){
 return $this->execute ( 'getFileState', $GetFileStateRequest );
}
 public function getAllChangedObjects ($GetAllChangedObjectsRequest){
 return $this->execute ( 'getAllChangedObjects', $GetAllChangedObjectsRequest );
}
 public function getChangedItemId ($GetChangedItemIdRequest){
 return $this->execute ( 'getChangedItemId', $GetChangedItemIdRequest );
}
 public function getFilePath ($GetFilePathRequest){
 return $this->execute ( 'getFilePath', $GetFilePathRequest );
}
 public function getChangedCampaignId ($GetChangedCampaignIdRequest){
 return $this->execute ( 'getChangedCampaignId', $GetChangedCampaignIdRequest );
}
 public function getChangedId ($GetChangedIdRequest){
 return $this->execute ( 'getChangedId', $GetChangedIdRequest );
}
 public function getChangedNewCreativeId ($GetChangedNewCreativeIdRequest){
 return $this->execute ( 'getChangedNewCreativeId', $GetChangedNewCreativeIdRequest );
}
 public function getChangedScale ($GetChangedScaleRequest){
 return $this->execute ( 'getChangedScale', $GetChangedScaleRequest );
}
 public function getAllObjects ($GetAllObjectsRequest){
 return $this->execute ( 'getAllObjects', $GetAllObjectsRequest );
}
 public function getChangedAdgroupId ($GetChangedAdgroupIdRequest){
 return $this->execute ( 'getChangedAdgroupId', $GetChangedAdgroupIdRequest );
}
 public function getSelectedObjects ($GetSelectedObjectsRequest){
 return $this->execute ( 'getSelectedObjects', $GetSelectedObjectsRequest );
}
 public function cancelDownload ($CancelDownloadRequest){
 return $this->execute ( 'cancelDownload', $CancelDownloadRequest );
}
  
}


?>