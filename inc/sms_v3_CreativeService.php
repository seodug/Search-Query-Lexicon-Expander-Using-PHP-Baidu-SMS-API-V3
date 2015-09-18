<?php
require_once 'CommonService.php';

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class CreativeType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //CreativeType Attributes
  public $creativeId;
  public $adgroupId;
  public $title;
  public $description1;
  public $description2;
  public $pcDestinationUrl;
  public $pcDisplayUrl;
  public $mobileDestinationUrl;
  public $mobileDisplayUrl;
  public $pause;
  public $status;
  public $devicePreference;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setCreativeId($aCreativeId)
  {
    $wasSet = false;
    $this->creativeId = $aCreativeId;
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

  public function setTitle($aTitle)
  {
    $wasSet = false;
    $this->title = $aTitle;
    $wasSet = true;
    return $wasSet;
  }

  public function setDescription1($aDescription1)
  {
    $wasSet = false;
    $this->description1 = $aDescription1;
    $wasSet = true;
    return $wasSet;
  }

  public function setDescription2($aDescription2)
  {
    $wasSet = false;
    $this->description2 = $aDescription2;
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

  public function setPcDisplayUrl($aPcDisplayUrl)
  {
    $wasSet = false;
    $this->pcDisplayUrl = $aPcDisplayUrl;
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

  public function setMobileDisplayUrl($aMobileDisplayUrl)
  {
    $wasSet = false;
    $this->mobileDisplayUrl = $aMobileDisplayUrl;
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

  public function setDevicePreference($aDevicePreference)
  {
    $wasSet = false;
    $this->devicePreference = $aDevicePreference;
    $wasSet = true;
    return $wasSet;
  }

  public function getCreativeId()
  {
    return $this->creativeId;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getDescription1()
  {
    return $this->description1;
  }

  public function getDescription2()
  {
    return $this->description2;
  }

  public function getPcDestinationUrl()
  {
    return $this->pcDestinationUrl;
  }

  public function getPcDisplayUrl()
  {
    return $this->pcDisplayUrl;
  }

  public function getMobileDestinationUrl()
  {
    return $this->mobileDestinationUrl;
  }

  public function getMobileDisplayUrl()
  {
    return $this->mobileDisplayUrl;
  }

  public function getPause()
  {
    return $this->pause;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function getDevicePreference()
  {
    return $this->devicePreference;
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

class GroupCreative
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GroupCreative Attributes
  public $adgroupId;
  public $creativeTypes;

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
   public function setCreativeTypes($acreativeTypes) {
       $this->creativeTypes = $acreativeTypes;
   }

  public function addCreativeType($aCreativeType)
  {
    $wasAdded = false;
    $this->creativeTypes[] = $aCreativeType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCreativeType($aCreativeType)
  {
    $wasRemoved = false;
    unset($this->creativeTypes[$this->indexOfCreativeType($aCreativeType)]);
    $this->creativeTypes = array_values($this->creativeTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }


  public function getCreativeTypes()
  {
    $newCreativeTypes = $this->creativeTypes;
    return $newCreativeTypes;
  }

  public function numberOfCreativeTypes()
  {
    $number = count($this->creativeTypes);
    return $number;
  }

  public function indexOfCreativeType($aCreativeType)
  {
    $rawAnswer = array_search($aCreativeType,$this->creativeTypes);
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

class GroupCreativeId
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GroupCreativeId Attributes
  public $adgroupId;
  public $creativeIds;

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
   public function setCreativeIds($acreativeIds) {
       $this->creativeIds = $acreativeIds;
   }

  public function addCreativeId($aCreativeId)
  {
    $wasAdded = false;
    $this->creativeIds[] = $aCreativeId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCreativeId($aCreativeId)
  {
    $wasRemoved = false;
    unset($this->creativeIds[$this->indexOfCreativeId($aCreativeId)]);
    $this->creativeIds = array_values($this->creativeIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }


  public function getCreativeIds()
  {
    $newCreativeIds = $this->creativeIds;
    return $newCreativeIds;
  }

  public function numberOfCreativeIds()
  {
    $number = count($this->creativeIds);
    return $number;
  }

  public function indexOfCreativeId($aCreativeId)
  {
    $rawAnswer = array_search($aCreativeId,$this->creativeIds);
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

class AddCreativeRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AddCreativeRequest Attributes
  public $creativeTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCreativeTypes($acreativeTypes) {
       $this->creativeTypes = $acreativeTypes;
   }

  public function addCreativeType($aCreativeType)
  {
    $wasAdded = false;
    $this->creativeTypes[] = $aCreativeType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCreativeType($aCreativeType)
  {
    $wasRemoved = false;
    unset($this->creativeTypes[$this->indexOfCreativeType($aCreativeType)]);
    $this->creativeTypes = array_values($this->creativeTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getCreativeTypes()
  {
    $newCreativeTypes = $this->creativeTypes;
    return $newCreativeTypes;
  }

  public function numberOfCreativeTypes()
  {
    $number = count($this->creativeTypes);
    return $number;
  }

  public function indexOfCreativeType($aCreativeType)
  {
    $rawAnswer = array_search($aCreativeType,$this->creativeTypes);
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

class AddCreativeResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AddCreativeResponse Attributes
  public $creativeTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCreativeTypes($acreativeTypes) {
       $this->creativeTypes = $acreativeTypes;
   }

  public function addCreativeType($aCreativeType)
  {
    $wasAdded = false;
    $this->creativeTypes[] = $aCreativeType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCreativeType($aCreativeType)
  {
    $wasRemoved = false;
    unset($this->creativeTypes[$this->indexOfCreativeType($aCreativeType)]);
    $this->creativeTypes = array_values($this->creativeTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getCreativeTypes()
  {
    $newCreativeTypes = $this->creativeTypes;
    return $newCreativeTypes;
  }

  public function numberOfCreativeTypes()
  {
    $number = count($this->creativeTypes);
    return $number;
  }

  public function indexOfCreativeType($aCreativeType)
  {
    $rawAnswer = array_search($aCreativeType,$this->creativeTypes);
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

class UpdateCreativeRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UpdateCreativeRequest Attributes
  public $creativeTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCreativeTypes($acreativeTypes) {
       $this->creativeTypes = $acreativeTypes;
   }

  public function addCreativeType($aCreativeType)
  {
    $wasAdded = false;
    $this->creativeTypes[] = $aCreativeType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCreativeType($aCreativeType)
  {
    $wasRemoved = false;
    unset($this->creativeTypes[$this->indexOfCreativeType($aCreativeType)]);
    $this->creativeTypes = array_values($this->creativeTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getCreativeTypes()
  {
    $newCreativeTypes = $this->creativeTypes;
    return $newCreativeTypes;
  }

  public function numberOfCreativeTypes()
  {
    $number = count($this->creativeTypes);
    return $number;
  }

  public function indexOfCreativeType($aCreativeType)
  {
    $rawAnswer = array_search($aCreativeType,$this->creativeTypes);
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

class UpdateCreativeResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UpdateCreativeResponse Attributes
  public $creativeTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCreativeTypes($acreativeTypes) {
       $this->creativeTypes = $acreativeTypes;
   }

  public function addCreativeType($aCreativeType)
  {
    $wasAdded = false;
    $this->creativeTypes[] = $aCreativeType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCreativeType($aCreativeType)
  {
    $wasRemoved = false;
    unset($this->creativeTypes[$this->indexOfCreativeType($aCreativeType)]);
    $this->creativeTypes = array_values($this->creativeTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getCreativeTypes()
  {
    $newCreativeTypes = $this->creativeTypes;
    return $newCreativeTypes;
  }

  public function numberOfCreativeTypes()
  {
    $number = count($this->creativeTypes);
    return $number;
  }

  public function indexOfCreativeType($aCreativeType)
  {
    $rawAnswer = array_search($aCreativeType,$this->creativeTypes);
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

class ActivateCreativeRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //ActivateCreativeRequest Attributes
  public $creativeIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCreativeIds($acreativeIds) {
       $this->creativeIds = $acreativeIds;
   }

  public function addCreativeId($aCreativeId)
  {
    $wasAdded = false;
    $this->creativeIds[] = $aCreativeId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCreativeId($aCreativeId)
  {
    $wasRemoved = false;
    unset($this->creativeIds[$this->indexOfCreativeId($aCreativeId)]);
    $this->creativeIds = array_values($this->creativeIds);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getCreativeIds()
  {
    $newCreativeIds = $this->creativeIds;
    return $newCreativeIds;
  }

  public function numberOfCreativeIds()
  {
    $number = count($this->creativeIds);
    return $number;
  }

  public function indexOfCreativeId($aCreativeId)
  {
    $rawAnswer = array_search($aCreativeId,$this->creativeIds);
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

class ActivateCreativeResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //ActivateCreativeResponse Attributes
  public $creativeTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCreativeTypes($acreativeTypes) {
       $this->creativeTypes = $acreativeTypes;
   }

  public function addCreativeType($aCreativeType)
  {
    $wasAdded = false;
    $this->creativeTypes[] = $aCreativeType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCreativeType($aCreativeType)
  {
    $wasRemoved = false;
    unset($this->creativeTypes[$this->indexOfCreativeType($aCreativeType)]);
    $this->creativeTypes = array_values($this->creativeTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getCreativeTypes()
  {
    $newCreativeTypes = $this->creativeTypes;
    return $newCreativeTypes;
  }

  public function numberOfCreativeTypes()
  {
    $number = count($this->creativeTypes);
    return $number;
  }

  public function indexOfCreativeType($aCreativeType)
  {
    $rawAnswer = array_search($aCreativeType,$this->creativeTypes);
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

class DeleteCreativeRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //DeleteCreativeRequest Attributes
  public $creativeIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCreativeIds($acreativeIds) {
       $this->creativeIds = $acreativeIds;
   }

  public function addCreativeId($aCreativeId)
  {
    $wasAdded = false;
    $this->creativeIds[] = $aCreativeId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCreativeId($aCreativeId)
  {
    $wasRemoved = false;
    unset($this->creativeIds[$this->indexOfCreativeId($aCreativeId)]);
    $this->creativeIds = array_values($this->creativeIds);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getCreativeIds()
  {
    $newCreativeIds = $this->creativeIds;
    return $newCreativeIds;
  }

  public function numberOfCreativeIds()
  {
    $number = count($this->creativeIds);
    return $number;
  }

  public function indexOfCreativeId($aCreativeId)
  {
    $rawAnswer = array_search($aCreativeId,$this->creativeIds);
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

class DeleteCreativeResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //DeleteCreativeResponse Attributes
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

class GetCreativeIdByAdgroupIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetCreativeIdByAdgroupIdRequest Attributes
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

class GetCreativeIdByAdgroupIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetCreativeIdByAdgroupIdResponse Attributes
  public $groupCreativeIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setGroupCreativeIds($agroupCreativeIds) {
       $this->groupCreativeIds = $agroupCreativeIds;
   }

  public function addGroupCreativeId($aGroupCreativeId)
  {
    $wasAdded = false;
    $this->groupCreativeIds[] = $aGroupCreativeId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeGroupCreativeId($aGroupCreativeId)
  {
    $wasRemoved = false;
    unset($this->groupCreativeIds[$this->indexOfGroupCreativeId($aGroupCreativeId)]);
    $this->groupCreativeIds = array_values($this->groupCreativeIds);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getGroupCreativeIds()
  {
    $newGroupCreativeIds = $this->groupCreativeIds;
    return $newGroupCreativeIds;
  }

  public function numberOfGroupCreativeIds()
  {
    $number = count($this->groupCreativeIds);
    return $number;
  }

  public function indexOfGroupCreativeId($aGroupCreativeId)
  {
    $rawAnswer = array_search($aGroupCreativeId,$this->groupCreativeIds);
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

class GetCreativeByAdgroupIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetCreativeByAdgroupIdRequest Attributes
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

class GetCreativeByAdgroupIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetCreativeByAdgroupIdResponse Attributes
  public $groupCreatives;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setGroupCreatives($agroupCreatives) {
       $this->groupCreatives = $agroupCreatives;
   }

  public function addGroupCreative($aGroupCreative)
  {
    $wasAdded = false;
    $this->groupCreatives[] = $aGroupCreative;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeGroupCreative($aGroupCreative)
  {
    $wasRemoved = false;
    unset($this->groupCreatives[$this->indexOfGroupCreative($aGroupCreative)]);
    $this->groupCreatives = array_values($this->groupCreatives);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getGroupCreatives()
  {
    $newGroupCreatives = $this->groupCreatives;
    return $newGroupCreatives;
  }

  public function numberOfGroupCreatives()
  {
    $number = count($this->groupCreatives);
    return $number;
  }

  public function indexOfGroupCreative($aGroupCreative)
  {
    $rawAnswer = array_search($aGroupCreative,$this->groupCreatives);
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

class GetCreativeByCreativeIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetCreativeByCreativeIdRequest Attributes
  public $creativeIds;
  public $getTemp;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCreativeIds($acreativeIds) {
       $this->creativeIds = $acreativeIds;
   }

  public function addCreativeId($aCreativeId)
  {
    $wasAdded = false;
    $this->creativeIds[] = $aCreativeId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCreativeId($aCreativeId)
  {
    $wasRemoved = false;
    unset($this->creativeIds[$this->indexOfCreativeId($aCreativeId)]);
    $this->creativeIds = array_values($this->creativeIds);
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


  public function getCreativeIds()
  {
    $newCreativeIds = $this->creativeIds;
    return $newCreativeIds;
  }

  public function numberOfCreativeIds()
  {
    $number = count($this->creativeIds);
    return $number;
  }

  public function indexOfCreativeId($aCreativeId)
  {
    $rawAnswer = array_search($aCreativeId,$this->creativeIds);
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

class GetCreativeByCreativeIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetCreativeByCreativeIdResponse Attributes
  public $creativeTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCreativeTypes($acreativeTypes) {
       $this->creativeTypes = $acreativeTypes;
   }

  public function addCreativeType($aCreativeType)
  {
    $wasAdded = false;
    $this->creativeTypes[] = $aCreativeType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCreativeType($aCreativeType)
  {
    $wasRemoved = false;
    unset($this->creativeTypes[$this->indexOfCreativeType($aCreativeType)]);
    $this->creativeTypes = array_values($this->creativeTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getCreativeTypes()
  {
    $newCreativeTypes = $this->creativeTypes;
    return $newCreativeTypes;
  }

  public function numberOfCreativeTypes()
  {
    $number = count($this->creativeTypes);
    return $number;
  }

  public function indexOfCreativeType($aCreativeType)
  {
    $rawAnswer = array_search($aCreativeType,$this->creativeTypes);
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

class GetCreativeStatusRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetCreativeStatusRequest Attributes
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

class GetCreativeStatusResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetCreativeStatusResponse Attributes
  public $creativeStatus;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCreativeStatus($acreativeStatus) {
       $this->creativeStatus = $acreativeStatus;
   }

  public function addCreativeStatus($aCreativeStatus)
  {
    $wasAdded = false;
    $this->creativeStatus[] = $aCreativeStatus;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCreativeStatus($aCreativeStatus)
  {
    $wasRemoved = false;
    unset($this->creativeStatus[$this->indexOfCreativeStatus($aCreativeStatus)]);
    $this->creativeStatus = array_values($this->creativeStatus);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getCreativeStatus()
  {
    $newCreativeStatus = $this->creativeStatus;
    return $newCreativeStatus;
  }

  public function numberOfCreativeStatus()
  {
    $number = count($this->creativeStatus);
    return $number;
  }

  public function indexOfCreativeStatus($aCreativeStatus)
  {
    $rawAnswer = array_search($aCreativeStatus,$this->creativeStatus);
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

class GetCreativeStatusZipRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetCreativeStatusZipRequest Attributes
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

class GetCreativeStatusZipResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetCreativeStatusZipResponse Attributes
  public $creativeStatus;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setCreativeStatus($aCreativeStatus)
  {
    $wasSet = false;
    $this->creativeStatus = $aCreativeStatus;
    $wasSet = true;
    return $wasSet;
  }

  public function getCreativeStatus()
  {
    return $this->creativeStatus;
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

class sms_v3_CreativeService extends CommonService 
{    public function __construct() {
        parent::__construct ( 'sms', 'v3', 'CreativeService' );
    }

  // ABSTRACT METHODS 

 public function addCreative ($AddCreativeRequest){
 return $this->execute ( 'addCreative', $AddCreativeRequest );
}
 public function updateCreative ($UpdateCreativeRequest){
 return $this->execute ( 'updateCreative', $UpdateCreativeRequest );
}
 public function activateCreative ($ActivateCreativeRequest){
 return $this->execute ( 'activateCreative', $ActivateCreativeRequest );
}
 public function deleteCreative ($DeleteCreativeRequest){
 return $this->execute ( 'deleteCreative', $DeleteCreativeRequest );
}
 public function getCreativeIdByAdgroupId ($GetCreativeIdByAdgroupIdRequest){
 return $this->execute ( 'getCreativeIdByAdgroupId', $GetCreativeIdByAdgroupIdRequest );
}
 public function getCreativeByAdgroupId ($GetCreativeByAdgroupIdRequest){
 return $this->execute ( 'getCreativeByAdgroupId', $GetCreativeByAdgroupIdRequest );
}
 public function getCreativeByCreativeId ($GetCreativeByCreativeIdRequest){
 return $this->execute ( 'getCreativeByCreativeId', $GetCreativeByCreativeIdRequest );
}
 public function getCreativeStatus ($GetCreativeStatusRequest){
 return $this->execute ( 'getCreativeStatus', $GetCreativeStatusRequest );
}
 public function getCreativeStatusZip ($GetCreativeStatusZipRequest){
 return $this->execute ( 'getCreativeStatusZip', $GetCreativeStatusZipRequest );
}
  
}


?>