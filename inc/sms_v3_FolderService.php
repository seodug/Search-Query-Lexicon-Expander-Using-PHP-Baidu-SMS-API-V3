<?php
require_once 'CommonService.php';

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class Folder
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Folder Attributes
  public $folderId;
  public $folderName;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setFolderId($aFolderId)
  {
    $wasSet = false;
    $this->folderId = $aFolderId;
    $wasSet = true;
    return $wasSet;
  }

  public function setFolderName($aFolderName)
  {
    $wasSet = false;
    $this->folderName = $aFolderName;
    $wasSet = true;
    return $wasSet;
  }

  public function getFolderId()
  {
    return $this->folderId;
  }

  public function getFolderName()
  {
    return $this->folderName;
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

class Monitor
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Monitor Attributes
  public $monitorId;
  public $folderId;
  public $id;
  public $adgroupId;
  public $campaignId;
  public $type;
  public $opt;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setMonitorId($aMonitorId)
  {
    $wasSet = false;
    $this->monitorId = $aMonitorId;
    $wasSet = true;
    return $wasSet;
  }

  public function setFolderId($aFolderId)
  {
    $wasSet = false;
    $this->folderId = $aFolderId;
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

  public function setType($aType)
  {
    $wasSet = false;
    $this->type = $aType;
    $wasSet = true;
    return $wasSet;
  }

  public function setOpt($aOpt)
  {
    $wasSet = false;
    $this->opt = $aOpt;
    $wasSet = true;
    return $wasSet;
  }

  public function getMonitorId()
  {
    return $this->monitorId;
  }

  public function getFolderId()
  {
    return $this->folderId;
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

  public function getType()
  {
    return $this->type;
  }

  public function getOpt()
  {
    return $this->opt;
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

class FolderMonitor
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //FolderMonitor Attributes
  public $folderId;
  public $monitors;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setFolderId($aFolderId)
  {
    $wasSet = false;
    $this->folderId = $aFolderId;
    $wasSet = true;
    return $wasSet;
  }
   public function setMonitors($amonitors) {
       $this->monitors = $amonitors;
   }

  public function addMonitor($aMonitor)
  {
    $wasAdded = false;
    $this->monitors[] = $aMonitor;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeMonitor($aMonitor)
  {
    $wasRemoved = false;
    unset($this->monitors[$this->indexOfMonitor($aMonitor)]);
    $this->monitors = array_values($this->monitors);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getFolderId()
  {
    return $this->folderId;
  }


  public function getMonitors()
  {
    $newMonitors = $this->monitors;
    return $newMonitors;
  }

  public function numberOfMonitors()
  {
    $number = count($this->monitors);
    return $number;
  }

  public function indexOfMonitor($aMonitor)
  {
    $rawAnswer = array_search($aMonitor,$this->monitors);
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

class KeywordMonitor
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //KeywordMonitor Attributes
  public $keywordId;
  public $monitors;

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
   public function setMonitors($amonitors) {
       $this->monitors = $amonitors;
   }

  public function addMonitor($aMonitor)
  {
    $wasAdded = false;
    $this->monitors[] = $aMonitor;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeMonitor($aMonitor)
  {
    $wasRemoved = false;
    unset($this->monitors[$this->indexOfMonitor($aMonitor)]);
    $this->monitors = array_values($this->monitors);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getKeywordId()
  {
    return $this->keywordId;
  }


  public function getMonitors()
  {
    $newMonitors = $this->monitors;
    return $newMonitors;
  }

  public function numberOfMonitors()
  {
    $number = count($this->monitors);
    return $number;
  }

  public function indexOfMonitor($aMonitor)
  {
    $rawAnswer = array_search($aMonitor,$this->monitors);
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

class GetFolderRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetFolderRequest Attributes
  public $folderIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setFolderIds($afolderIds) {
       $this->folderIds = $afolderIds;
   }

  public function addFolderId($aFolderId)
  {
    $wasAdded = false;
    $this->folderIds[] = $aFolderId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeFolderId($aFolderId)
  {
    $wasRemoved = false;
    unset($this->folderIds[$this->indexOfFolderId($aFolderId)]);
    $this->folderIds = array_values($this->folderIds);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getFolderIds()
  {
    $newFolderIds = $this->folderIds;
    return $newFolderIds;
  }

  public function numberOfFolderIds()
  {
    $number = count($this->folderIds);
    return $number;
  }

  public function indexOfFolderId($aFolderId)
  {
    $rawAnswer = array_search($aFolderId,$this->folderIds);
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

class GetFolderResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetFolderResponse Attributes
  public $folders;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setFolders($afolders) {
       $this->folders = $afolders;
   }

  public function addFolder($aFolder)
  {
    $wasAdded = false;
    $this->folders[] = $aFolder;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeFolder($aFolder)
  {
    $wasRemoved = false;
    unset($this->folders[$this->indexOfFolder($aFolder)]);
    $this->folders = array_values($this->folders);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getFolders()
  {
    $newFolders = $this->folders;
    return $newFolders;
  }

  public function numberOfFolders()
  {
    $number = count($this->folders);
    return $number;
  }

  public function indexOfFolder($aFolder)
  {
    $rawAnswer = array_search($aFolder,$this->folders);
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

class GetMonitorWordByMonitorIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetMonitorWordByMonitorIdRequest Attributes
  public $monitorIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setMonitorIds($amonitorIds) {
       $this->monitorIds = $amonitorIds;
   }

  public function addMonitorId($aMonitorId)
  {
    $wasAdded = false;
    $this->monitorIds[] = $aMonitorId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeMonitorId($aMonitorId)
  {
    $wasRemoved = false;
    unset($this->monitorIds[$this->indexOfMonitorId($aMonitorId)]);
    $this->monitorIds = array_values($this->monitorIds);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getMonitorIds()
  {
    $newMonitorIds = $this->monitorIds;
    return $newMonitorIds;
  }

  public function numberOfMonitorIds()
  {
    $number = count($this->monitorIds);
    return $number;
  }

  public function indexOfMonitorId($aMonitorId)
  {
    $rawAnswer = array_search($aMonitorId,$this->monitorIds);
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

class GetMonitorWordByMonitorIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetMonitorWordByMonitorIdResponse Attributes
  public $monitors;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setMonitors($amonitors) {
       $this->monitors = $amonitors;
   }

  public function addMonitor($aMonitor)
  {
    $wasAdded = false;
    $this->monitors[] = $aMonitor;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeMonitor($aMonitor)
  {
    $wasRemoved = false;
    unset($this->monitors[$this->indexOfMonitor($aMonitor)]);
    $this->monitors = array_values($this->monitors);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getMonitors()
  {
    $newMonitors = $this->monitors;
    return $newMonitors;
  }

  public function numberOfMonitors()
  {
    $number = count($this->monitors);
    return $number;
  }

  public function indexOfMonitor($aMonitor)
  {
    $rawAnswer = array_search($aMonitor,$this->monitors);
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

class GetMonitorWordByFolderIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetMonitorWordByFolderIdRequest Attributes
  public $folderIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setFolderIds($afolderIds) {
       $this->folderIds = $afolderIds;
   }

  public function addFolderId($aFolderId)
  {
    $wasAdded = false;
    $this->folderIds[] = $aFolderId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeFolderId($aFolderId)
  {
    $wasRemoved = false;
    unset($this->folderIds[$this->indexOfFolderId($aFolderId)]);
    $this->folderIds = array_values($this->folderIds);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getFolderIds()
  {
    $newFolderIds = $this->folderIds;
    return $newFolderIds;
  }

  public function numberOfFolderIds()
  {
    $number = count($this->folderIds);
    return $number;
  }

  public function indexOfFolderId($aFolderId)
  {
    $rawAnswer = array_search($aFolderId,$this->folderIds);
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

class GetMonitorWordByFolderIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetMonitorWordByFolderIdResponse Attributes
  public $folderMonitors;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setFolderMonitors($afolderMonitors) {
       $this->folderMonitors = $afolderMonitors;
   }

  public function addFolderMonitor($aFolderMonitor)
  {
    $wasAdded = false;
    $this->folderMonitors[] = $aFolderMonitor;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeFolderMonitor($aFolderMonitor)
  {
    $wasRemoved = false;
    unset($this->folderMonitors[$this->indexOfFolderMonitor($aFolderMonitor)]);
    $this->folderMonitors = array_values($this->folderMonitors);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getFolderMonitors()
  {
    $newFolderMonitors = $this->folderMonitors;
    return $newFolderMonitors;
  }

  public function numberOfFolderMonitors()
  {
    $number = count($this->folderMonitors);
    return $number;
  }

  public function indexOfFolderMonitor($aFolderMonitor)
  {
    $rawAnswer = array_search($aFolderMonitor,$this->folderMonitors);
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

class GetMonitorWordByKeywordIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetMonitorWordByKeywordIdRequest Attributes
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

class GetMonitorWordByKeywordIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetMonitorWordByKeywordIdResponse Attributes
  public $keywordMonitors;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setKeywordMonitors($akeywordMonitors) {
       $this->keywordMonitors = $akeywordMonitors;
   }

  public function addKeywordMonitor($aKeywordMonitor)
  {
    $wasAdded = false;
    $this->keywordMonitors[] = $aKeywordMonitor;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKeywordMonitor($aKeywordMonitor)
  {
    $wasRemoved = false;
    unset($this->keywordMonitors[$this->indexOfKeywordMonitor($aKeywordMonitor)]);
    $this->keywordMonitors = array_values($this->keywordMonitors);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getKeywordMonitors()
  {
    $newKeywordMonitors = $this->keywordMonitors;
    return $newKeywordMonitors;
  }

  public function numberOfKeywordMonitors()
  {
    $number = count($this->keywordMonitors);
    return $number;
  }

  public function indexOfKeywordMonitor($aKeywordMonitor)
  {
    $rawAnswer = array_search($aKeywordMonitor,$this->keywordMonitors);
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

class AddFolderRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AddFolderRequest Attributes
  public $folders;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setFolders($afolders) {
       $this->folders = $afolders;
   }

  public function addFolder($aFolder)
  {
    $wasAdded = false;
    $this->folders[] = $aFolder;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeFolder($aFolder)
  {
    $wasRemoved = false;
    unset($this->folders[$this->indexOfFolder($aFolder)]);
    $this->folders = array_values($this->folders);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getFolders()
  {
    $newFolders = $this->folders;
    return $newFolders;
  }

  public function numberOfFolders()
  {
    $number = count($this->folders);
    return $number;
  }

  public function indexOfFolder($aFolder)
  {
    $rawAnswer = array_search($aFolder,$this->folders);
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

class AddFolderResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AddFolderResponse Attributes
  public $folders;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setFolders($afolders) {
       $this->folders = $afolders;
   }

  public function addFolder($aFolder)
  {
    $wasAdded = false;
    $this->folders[] = $aFolder;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeFolder($aFolder)
  {
    $wasRemoved = false;
    unset($this->folders[$this->indexOfFolder($aFolder)]);
    $this->folders = array_values($this->folders);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getFolders()
  {
    $newFolders = $this->folders;
    return $newFolders;
  }

  public function numberOfFolders()
  {
    $number = count($this->folders);
    return $number;
  }

  public function indexOfFolder($aFolder)
  {
    $rawAnswer = array_search($aFolder,$this->folders);
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

class UpdateFolderRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UpdateFolderRequest Attributes
  public $folders;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setFolders($afolders) {
       $this->folders = $afolders;
   }

  public function addFolder($aFolder)
  {
    $wasAdded = false;
    $this->folders[] = $aFolder;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeFolder($aFolder)
  {
    $wasRemoved = false;
    unset($this->folders[$this->indexOfFolder($aFolder)]);
    $this->folders = array_values($this->folders);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getFolders()
  {
    $newFolders = $this->folders;
    return $newFolders;
  }

  public function numberOfFolders()
  {
    $number = count($this->folders);
    return $number;
  }

  public function indexOfFolder($aFolder)
  {
    $rawAnswer = array_search($aFolder,$this->folders);
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

class UpdateFolderResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UpdateFolderResponse Attributes
  public $folders;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setFolders($afolders) {
       $this->folders = $afolders;
   }

  public function addFolder($aFolder)
  {
    $wasAdded = false;
    $this->folders[] = $aFolder;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeFolder($aFolder)
  {
    $wasRemoved = false;
    unset($this->folders[$this->indexOfFolder($aFolder)]);
    $this->folders = array_values($this->folders);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getFolders()
  {
    $newFolders = $this->folders;
    return $newFolders;
  }

  public function numberOfFolders()
  {
    $number = count($this->folders);
    return $number;
  }

  public function indexOfFolder($aFolder)
  {
    $rawAnswer = array_search($aFolder,$this->folders);
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

class DeleteFolderRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //DeleteFolderRequest Attributes
  public $folderIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setFolderIds($afolderIds) {
       $this->folderIds = $afolderIds;
   }

  public function addFolderId($aFolderId)
  {
    $wasAdded = false;
    $this->folderIds[] = $aFolderId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeFolderId($aFolderId)
  {
    $wasRemoved = false;
    unset($this->folderIds[$this->indexOfFolderId($aFolderId)]);
    $this->folderIds = array_values($this->folderIds);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getFolderIds()
  {
    $newFolderIds = $this->folderIds;
    return $newFolderIds;
  }

  public function numberOfFolderIds()
  {
    $number = count($this->folderIds);
    return $number;
  }

  public function indexOfFolderId($aFolderId)
  {
    $rawAnswer = array_search($aFolderId,$this->folderIds);
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

class DeleteFolderResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //DeleteFolderResponse Attributes
  public $response;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setResponse($aResponse)
  {
    $wasSet = false;
    $this->response = $aResponse;
    $wasSet = true;
    return $wasSet;
  }

  public function getResponse()
  {
    return $this->response;
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

class AddMonitorWordRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AddMonitorWordRequest Attributes
  public $monitors;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setMonitors($amonitors) {
       $this->monitors = $amonitors;
   }

  public function addMonitor($aMonitor)
  {
    $wasAdded = false;
    $this->monitors[] = $aMonitor;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeMonitor($aMonitor)
  {
    $wasRemoved = false;
    unset($this->monitors[$this->indexOfMonitor($aMonitor)]);
    $this->monitors = array_values($this->monitors);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getMonitors()
  {
    $newMonitors = $this->monitors;
    return $newMonitors;
  }

  public function numberOfMonitors()
  {
    $number = count($this->monitors);
    return $number;
  }

  public function indexOfMonitor($aMonitor)
  {
    $rawAnswer = array_search($aMonitor,$this->monitors);
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

class AddMonitorWordResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AddMonitorWordResponse Attributes
  public $monitors;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setMonitors($amonitors) {
       $this->monitors = $amonitors;
   }

  public function addMonitor($aMonitor)
  {
    $wasAdded = false;
    $this->monitors[] = $aMonitor;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeMonitor($aMonitor)
  {
    $wasRemoved = false;
    unset($this->monitors[$this->indexOfMonitor($aMonitor)]);
    $this->monitors = array_values($this->monitors);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getMonitors()
  {
    $newMonitors = $this->monitors;
    return $newMonitors;
  }

  public function numberOfMonitors()
  {
    $number = count($this->monitors);
    return $number;
  }

  public function indexOfMonitor($aMonitor)
  {
    $rawAnswer = array_search($aMonitor,$this->monitors);
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

class DeleteMonitorWordRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //DeleteMonitorWordRequest Attributes
  public $monitorIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setMonitorIds($amonitorIds) {
       $this->monitorIds = $amonitorIds;
   }

  public function addMonitorId($aMonitorId)
  {
    $wasAdded = false;
    $this->monitorIds[] = $aMonitorId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeMonitorId($aMonitorId)
  {
    $wasRemoved = false;
    unset($this->monitorIds[$this->indexOfMonitorId($aMonitorId)]);
    $this->monitorIds = array_values($this->monitorIds);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getMonitorIds()
  {
    $newMonitorIds = $this->monitorIds;
    return $newMonitorIds;
  }

  public function numberOfMonitorIds()
  {
    $number = count($this->monitorIds);
    return $number;
  }

  public function indexOfMonitorId($aMonitorId)
  {
    $rawAnswer = array_search($aMonitorId,$this->monitorIds);
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

class DeleteMonitorWordResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //DeleteMonitorWordResponse Attributes
  public $response;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setResponse($aResponse)
  {
    $wasSet = false;
    $this->response = $aResponse;
    $wasSet = true;
    return $wasSet;
  }

  public function getResponse()
  {
    return $this->response;
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

class sms_v3_FolderService extends CommonService 
{    public function __construct() {
        parent::__construct ( 'sms', 'v3', 'FolderService' );
    }

  // ABSTRACT METHODS 

 public function getFolder ($GetFolderRequest){
 return $this->execute ( 'getFolder', $GetFolderRequest );
}
 public function getMonitorWordByMonitorId ($GetMonitorWordByMonitorIdRequest){
 return $this->execute ( 'getMonitorWordByMonitorId', $GetMonitorWordByMonitorIdRequest );
}
 public function getMonitorWordByFolderId ($GetMonitorWordByFolderIdRequest){
 return $this->execute ( 'getMonitorWordByFolderId', $GetMonitorWordByFolderIdRequest );
}
 public function getMonitorWordByKeywordId ($GetMonitorWordByKeywordIdRequest){
 return $this->execute ( 'getMonitorWordByKeywordId', $GetMonitorWordByKeywordIdRequest );
}
 public function addFolder ($AddFolderRequest){
 return $this->execute ( 'addFolder', $AddFolderRequest );
}
 public function updateFolder ($UpdateFolderRequest){
 return $this->execute ( 'updateFolder', $UpdateFolderRequest );
}
 public function deleteFolder ($DeleteFolderRequest){
 return $this->execute ( 'deleteFolder', $DeleteFolderRequest );
}
 public function addMonitorWord ($AddMonitorWordRequest){
 return $this->execute ( 'addMonitorWord', $AddMonitorWordRequest );
}
 public function deleteMonitorWord ($DeleteMonitorWordRequest){
 return $this->execute ( 'deleteMonitorWord', $DeleteMonitorWordRequest );
}
  
}


?>