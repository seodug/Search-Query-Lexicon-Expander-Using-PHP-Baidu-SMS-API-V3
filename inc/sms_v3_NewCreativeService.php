<?php
require_once 'CommonService.php';

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetSublinkIdByAdgroupIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetSublinkIdByAdgroupIdRequest Attributes
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

class GroupSublinkId
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GroupSublinkId Attributes
  public $adgroupId;
  public $sublinkIds;

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
   public function setSublinkIds($asublinkIds) {
       $this->sublinkIds = $asublinkIds;
   }

  public function addSublinkId($aSublinkId)
  {
    $wasAdded = false;
    $this->sublinkIds[] = $aSublinkId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeSublinkId($aSublinkId)
  {
    $wasRemoved = false;
    unset($this->sublinkIds[$this->indexOfSublinkId($aSublinkId)]);
    $this->sublinkIds = array_values($this->sublinkIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }


  public function getSublinkIds()
  {
    $newSublinkIds = $this->sublinkIds;
    return $newSublinkIds;
  }

  public function numberOfSublinkIds()
  {
    $number = count($this->sublinkIds);
    return $number;
  }

  public function indexOfSublinkId($aSublinkId)
  {
    $rawAnswer = array_search($aSublinkId,$this->sublinkIds);
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

class GetSublinkIdByAdgroupIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetSublinkIdByAdgroupIdResponse Attributes
  public $groupSublinkIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setGroupSublinkIds($agroupSublinkIds) {
       $this->groupSublinkIds = $agroupSublinkIds;
   }

  public function addGroupSublinkId($aGroupSublinkId)
  {
    $wasAdded = false;
    $this->groupSublinkIds[] = $aGroupSublinkId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeGroupSublinkId($aGroupSublinkId)
  {
    $wasRemoved = false;
    unset($this->groupSublinkIds[$this->indexOfGroupSublinkId($aGroupSublinkId)]);
    $this->groupSublinkIds = array_values($this->groupSublinkIds);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getGroupSublinkIds()
  {
    $newGroupSublinkIds = $this->groupSublinkIds;
    return $newGroupSublinkIds;
  }

  public function numberOfGroupSublinkIds()
  {
    $number = count($this->groupSublinkIds);
    return $number;
  }

  public function indexOfGroupSublinkId($aGroupSublinkId)
  {
    $rawAnswer = array_search($aGroupSublinkId,$this->groupSublinkIds);
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

class GetSublinkBySublinkIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetSublinkBySublinkIdRequest Attributes
  public $sublinkIds;
  public $getTemp;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setSublinkIds($asublinkIds) {
       $this->sublinkIds = $asublinkIds;
   }

  public function addSublinkId($aSublinkId)
  {
    $wasAdded = false;
    $this->sublinkIds[] = $aSublinkId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeSublinkId($aSublinkId)
  {
    $wasRemoved = false;
    unset($this->sublinkIds[$this->indexOfSublinkId($aSublinkId)]);
    $this->sublinkIds = array_values($this->sublinkIds);
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


  public function getSublinkIds()
  {
    $newSublinkIds = $this->sublinkIds;
    return $newSublinkIds;
  }

  public function numberOfSublinkIds()
  {
    $number = count($this->sublinkIds);
    return $number;
  }

  public function indexOfSublinkId($aSublinkId)
  {
    $rawAnswer = array_search($aSublinkId,$this->sublinkIds);
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

class SublinkInfo
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //SublinkInfo Attributes
  public $description;
  public $destinationUrl;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setDescription($aDescription)
  {
    $wasSet = false;
    $this->description = $aDescription;
    $wasSet = true;
    return $wasSet;
  }

  public function setDestinationUrl($aDestinationUrl)
  {
    $wasSet = false;
    $this->destinationUrl = $aDestinationUrl;
    $wasSet = true;
    return $wasSet;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function getDestinationUrl()
  {
    return $this->destinationUrl;
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

class SublinkType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //SublinkType Attributes
  public $sublinkId;
  public $sublinkInfos;
  public $adgroupId;
  public $pause;
  public $status;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setSublinkId($aSublinkId)
  {
    $wasSet = false;
    $this->sublinkId = $aSublinkId;
    $wasSet = true;
    return $wasSet;
  }
   public function setSublinkInfos($asublinkInfos) {
       $this->sublinkInfos = $asublinkInfos;
   }

  public function addSublinkInfo($aSublinkInfo)
  {
    $wasAdded = false;
    $this->sublinkInfos[] = $aSublinkInfo;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeSublinkInfo($aSublinkInfo)
  {
    $wasRemoved = false;
    unset($this->sublinkInfos[$this->indexOfSublinkInfo($aSublinkInfo)]);
    $this->sublinkInfos = array_values($this->sublinkInfos);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setAdgroupId($aAdgroupId)
  {
    $wasSet = false;
    $this->adgroupId = $aAdgroupId;
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

  public function getSublinkId()
  {
    return $this->sublinkId;
  }


  public function getSublinkInfos()
  {
    $newSublinkInfos = $this->sublinkInfos;
    return $newSublinkInfos;
  }

  public function numberOfSublinkInfos()
  {
    $number = count($this->sublinkInfos);
    return $number;
  }

  public function indexOfSublinkInfo($aSublinkInfo)
  {
    $rawAnswer = array_search($aSublinkInfo,$this->sublinkInfos);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }

  public function getPause()
  {
    return $this->pause;
  }

  public function getStatus()
  {
    return $this->status;
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

class GetSublinkBySublinkIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetSublinkBySublinkIdResponse Attributes
  public $sublinkTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setSublinkTypes($asublinkTypes) {
       $this->sublinkTypes = $asublinkTypes;
   }

  public function addSublinkType($aSublinkType)
  {
    $wasAdded = false;
    $this->sublinkTypes[] = $aSublinkType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeSublinkType($aSublinkType)
  {
    $wasRemoved = false;
    unset($this->sublinkTypes[$this->indexOfSublinkType($aSublinkType)]);
    $this->sublinkTypes = array_values($this->sublinkTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getSublinkTypes()
  {
    $newSublinkTypes = $this->sublinkTypes;
    return $newSublinkTypes;
  }

  public function numberOfSublinkTypes()
  {
    $number = count($this->sublinkTypes);
    return $number;
  }

  public function indexOfSublinkType($aSublinkType)
  {
    $rawAnswer = array_search($aSublinkType,$this->sublinkTypes);
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

class AddSublinkRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AddSublinkRequest Attributes
  public $sublinkTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setSublinkTypes($asublinkTypes) {
       $this->sublinkTypes = $asublinkTypes;
   }

  public function addSublinkType($aSublinkType)
  {
    $wasAdded = false;
    $this->sublinkTypes[] = $aSublinkType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeSublinkType($aSublinkType)
  {
    $wasRemoved = false;
    unset($this->sublinkTypes[$this->indexOfSublinkType($aSublinkType)]);
    $this->sublinkTypes = array_values($this->sublinkTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getSublinkTypes()
  {
    $newSublinkTypes = $this->sublinkTypes;
    return $newSublinkTypes;
  }

  public function numberOfSublinkTypes()
  {
    $number = count($this->sublinkTypes);
    return $number;
  }

  public function indexOfSublinkType($aSublinkType)
  {
    $rawAnswer = array_search($aSublinkType,$this->sublinkTypes);
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

class AddSublinkResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AddSublinkResponse Attributes
  public $sublinkTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setSublinkTypes($asublinkTypes) {
       $this->sublinkTypes = $asublinkTypes;
   }

  public function addSublinkType($aSublinkType)
  {
    $wasAdded = false;
    $this->sublinkTypes[] = $aSublinkType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeSublinkType($aSublinkType)
  {
    $wasRemoved = false;
    unset($this->sublinkTypes[$this->indexOfSublinkType($aSublinkType)]);
    $this->sublinkTypes = array_values($this->sublinkTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getSublinkTypes()
  {
    $newSublinkTypes = $this->sublinkTypes;
    return $newSublinkTypes;
  }

  public function numberOfSublinkTypes()
  {
    $number = count($this->sublinkTypes);
    return $number;
  }

  public function indexOfSublinkType($aSublinkType)
  {
    $rawAnswer = array_search($aSublinkType,$this->sublinkTypes);
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

class UpdateSublinkRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UpdateSublinkRequest Attributes
  public $sublinkTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setSublinkTypes($asublinkTypes) {
       $this->sublinkTypes = $asublinkTypes;
   }

  public function addSublinkType($aSublinkType)
  {
    $wasAdded = false;
    $this->sublinkTypes[] = $aSublinkType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeSublinkType($aSublinkType)
  {
    $wasRemoved = false;
    unset($this->sublinkTypes[$this->indexOfSublinkType($aSublinkType)]);
    $this->sublinkTypes = array_values($this->sublinkTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getSublinkTypes()
  {
    $newSublinkTypes = $this->sublinkTypes;
    return $newSublinkTypes;
  }

  public function numberOfSublinkTypes()
  {
    $number = count($this->sublinkTypes);
    return $number;
  }

  public function indexOfSublinkType($aSublinkType)
  {
    $rawAnswer = array_search($aSublinkType,$this->sublinkTypes);
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

class UpdateSublinkResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UpdateSublinkResponse Attributes
  public $sublinkTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setSublinkTypes($asublinkTypes) {
       $this->sublinkTypes = $asublinkTypes;
   }

  public function addSublinkType($aSublinkType)
  {
    $wasAdded = false;
    $this->sublinkTypes[] = $aSublinkType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeSublinkType($aSublinkType)
  {
    $wasRemoved = false;
    unset($this->sublinkTypes[$this->indexOfSublinkType($aSublinkType)]);
    $this->sublinkTypes = array_values($this->sublinkTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getSublinkTypes()
  {
    $newSublinkTypes = $this->sublinkTypes;
    return $newSublinkTypes;
  }

  public function numberOfSublinkTypes()
  {
    $number = count($this->sublinkTypes);
    return $number;
  }

  public function indexOfSublinkType($aSublinkType)
  {
    $rawAnswer = array_search($aSublinkType,$this->sublinkTypes);
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

class DeleteSublinkRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //DeleteSublinkRequest Attributes
  public $sublinkIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setSublinkIds($asublinkIds) {
       $this->sublinkIds = $asublinkIds;
   }

  public function addSublinkId($aSublinkId)
  {
    $wasAdded = false;
    $this->sublinkIds[] = $aSublinkId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeSublinkId($aSublinkId)
  {
    $wasRemoved = false;
    unset($this->sublinkIds[$this->indexOfSublinkId($aSublinkId)]);
    $this->sublinkIds = array_values($this->sublinkIds);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getSublinkIds()
  {
    $newSublinkIds = $this->sublinkIds;
    return $newSublinkIds;
  }

  public function numberOfSublinkIds()
  {
    $number = count($this->sublinkIds);
    return $number;
  }

  public function indexOfSublinkId($aSublinkId)
  {
    $rawAnswer = array_search($aSublinkId,$this->sublinkIds);
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

class DeleteSublinkResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //DeleteSublinkResponse Attributes
  public $optResult;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setOptResult($aOptResult)
  {
    $wasSet = false;
    $this->optResult = $aOptResult;
    $wasSet = true;
    return $wasSet;
  }

  public function getOptResult()
  {
    return $this->optResult;
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

class MobileSublinkInfo
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //MobileSublinkInfo Attributes
  public $description;
  public $destinationUrl;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setDescription($aDescription)
  {
    $wasSet = false;
    $this->description = $aDescription;
    $wasSet = true;
    return $wasSet;
  }

  public function setDestinationUrl($aDestinationUrl)
  {
    $wasSet = false;
    $this->destinationUrl = $aDestinationUrl;
    $wasSet = true;
    return $wasSet;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function getDestinationUrl()
  {
    return $this->destinationUrl;
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

class MobileSublinkType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //MobileSublinkType Attributes
  public $mobileSublinkId;
  public $mobileSublinkInfos;
  public $adgroupId;
  public $pause;
  public $status;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setMobileSublinkId($aMobileSublinkId)
  {
    $wasSet = false;
    $this->mobileSublinkId = $aMobileSublinkId;
    $wasSet = true;
    return $wasSet;
  }
   public function setMobileSublinkInfos($amobileSublinkInfos) {
       $this->mobileSublinkInfos = $amobileSublinkInfos;
   }

  public function addMobileSublinkInfo($aMobileSublinkInfo)
  {
    $wasAdded = false;
    $this->mobileSublinkInfos[] = $aMobileSublinkInfo;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeMobileSublinkInfo($aMobileSublinkInfo)
  {
    $wasRemoved = false;
    unset($this->mobileSublinkInfos[$this->indexOfMobileSublinkInfo($aMobileSublinkInfo)]);
    $this->mobileSublinkInfos = array_values($this->mobileSublinkInfos);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setAdgroupId($aAdgroupId)
  {
    $wasSet = false;
    $this->adgroupId = $aAdgroupId;
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

  public function getMobileSublinkId()
  {
    return $this->mobileSublinkId;
  }


  public function getMobileSublinkInfos()
  {
    $newMobileSublinkInfos = $this->mobileSublinkInfos;
    return $newMobileSublinkInfos;
  }

  public function numberOfMobileSublinkInfos()
  {
    $number = count($this->mobileSublinkInfos);
    return $number;
  }

  public function indexOfMobileSublinkInfo($aMobileSublinkInfo)
  {
    $rawAnswer = array_search($aMobileSublinkInfo,$this->mobileSublinkInfos);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }

  public function getPause()
  {
    return $this->pause;
  }

  public function getStatus()
  {
    return $this->status;
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

class AddMobileSublinkRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AddMobileSublinkRequest Attributes
  public $mobileSublinkTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setMobileSublinkTypes($amobileSublinkTypes) {
       $this->mobileSublinkTypes = $amobileSublinkTypes;
   }

  public function addMobileSublinkType($aMobileSublinkType)
  {
    $wasAdded = false;
    $this->mobileSublinkTypes[] = $aMobileSublinkType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeMobileSublinkType($aMobileSublinkType)
  {
    $wasRemoved = false;
    unset($this->mobileSublinkTypes[$this->indexOfMobileSublinkType($aMobileSublinkType)]);
    $this->mobileSublinkTypes = array_values($this->mobileSublinkTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getMobileSublinkTypes()
  {
    $newMobileSublinkTypes = $this->mobileSublinkTypes;
    return $newMobileSublinkTypes;
  }

  public function numberOfMobileSublinkTypes()
  {
    $number = count($this->mobileSublinkTypes);
    return $number;
  }

  public function indexOfMobileSublinkType($aMobileSublinkType)
  {
    $rawAnswer = array_search($aMobileSublinkType,$this->mobileSublinkTypes);
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

class AddMobileSublinkResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AddMobileSublinkResponse Attributes
  public $mobileSublinkTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setMobileSublinkTypes($amobileSublinkTypes) {
       $this->mobileSublinkTypes = $amobileSublinkTypes;
   }

  public function addMobileSublinkType($aMobileSublinkType)
  {
    $wasAdded = false;
    $this->mobileSublinkTypes[] = $aMobileSublinkType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeMobileSublinkType($aMobileSublinkType)
  {
    $wasRemoved = false;
    unset($this->mobileSublinkTypes[$this->indexOfMobileSublinkType($aMobileSublinkType)]);
    $this->mobileSublinkTypes = array_values($this->mobileSublinkTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getMobileSublinkTypes()
  {
    $newMobileSublinkTypes = $this->mobileSublinkTypes;
    return $newMobileSublinkTypes;
  }

  public function numberOfMobileSublinkTypes()
  {
    $number = count($this->mobileSublinkTypes);
    return $number;
  }

  public function indexOfMobileSublinkType($aMobileSublinkType)
  {
    $rawAnswer = array_search($aMobileSublinkType,$this->mobileSublinkTypes);
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

class UpdateMobileSublinkRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UpdateMobileSublinkRequest Attributes
  public $mobileSublinkTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setMobileSublinkTypes($amobileSublinkTypes) {
       $this->mobileSublinkTypes = $amobileSublinkTypes;
   }

  public function addMobileSublinkType($aMobileSublinkType)
  {
    $wasAdded = false;
    $this->mobileSublinkTypes[] = $aMobileSublinkType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeMobileSublinkType($aMobileSublinkType)
  {
    $wasRemoved = false;
    unset($this->mobileSublinkTypes[$this->indexOfMobileSublinkType($aMobileSublinkType)]);
    $this->mobileSublinkTypes = array_values($this->mobileSublinkTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getMobileSublinkTypes()
  {
    $newMobileSublinkTypes = $this->mobileSublinkTypes;
    return $newMobileSublinkTypes;
  }

  public function numberOfMobileSublinkTypes()
  {
    $number = count($this->mobileSublinkTypes);
    return $number;
  }

  public function indexOfMobileSublinkType($aMobileSublinkType)
  {
    $rawAnswer = array_search($aMobileSublinkType,$this->mobileSublinkTypes);
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

class UpdateMobileSublinkResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UpdateMobileSublinkResponse Attributes
  public $mobileSublinkTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setMobileSublinkTypes($amobileSublinkTypes) {
       $this->mobileSublinkTypes = $amobileSublinkTypes;
   }

  public function addMobileSublinkType($aMobileSublinkType)
  {
    $wasAdded = false;
    $this->mobileSublinkTypes[] = $aMobileSublinkType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeMobileSublinkType($aMobileSublinkType)
  {
    $wasRemoved = false;
    unset($this->mobileSublinkTypes[$this->indexOfMobileSublinkType($aMobileSublinkType)]);
    $this->mobileSublinkTypes = array_values($this->mobileSublinkTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getMobileSublinkTypes()
  {
    $newMobileSublinkTypes = $this->mobileSublinkTypes;
    return $newMobileSublinkTypes;
  }

  public function numberOfMobileSublinkTypes()
  {
    $number = count($this->mobileSublinkTypes);
    return $number;
  }

  public function indexOfMobileSublinkType($aMobileSublinkType)
  {
    $rawAnswer = array_search($aMobileSublinkType,$this->mobileSublinkTypes);
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

class GroupMobileSublinkId
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GroupMobileSublinkId Attributes
  public $adgroupId;
  public $mobileSublinkIds;

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
   public function setMobileSublinkIds($amobileSublinkIds) {
       $this->mobileSublinkIds = $amobileSublinkIds;
   }

  public function addMobileSublinkId($aMobileSublinkId)
  {
    $wasAdded = false;
    $this->mobileSublinkIds[] = $aMobileSublinkId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeMobileSublinkId($aMobileSublinkId)
  {
    $wasRemoved = false;
    unset($this->mobileSublinkIds[$this->indexOfMobileSublinkId($aMobileSublinkId)]);
    $this->mobileSublinkIds = array_values($this->mobileSublinkIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }


  public function getMobileSublinkIds()
  {
    $newMobileSublinkIds = $this->mobileSublinkIds;
    return $newMobileSublinkIds;
  }

  public function numberOfMobileSublinkIds()
  {
    $number = count($this->mobileSublinkIds);
    return $number;
  }

  public function indexOfMobileSublinkId($aMobileSublinkId)
  {
    $rawAnswer = array_search($aMobileSublinkId,$this->mobileSublinkIds);
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

class GetMobileSublinkIdByAdgroupIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetMobileSublinkIdByAdgroupIdRequest Attributes
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

class GetMobileSublinkIdByAdgroupIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetMobileSublinkIdByAdgroupIdResponse Attributes
  public $groupMobileSublinkIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setGroupMobileSublinkIds($agroupMobileSublinkIds) {
       $this->groupMobileSublinkIds = $agroupMobileSublinkIds;
   }

  public function addGroupMobileSublinkId($aGroupMobileSublinkId)
  {
    $wasAdded = false;
    $this->groupMobileSublinkIds[] = $aGroupMobileSublinkId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeGroupMobileSublinkId($aGroupMobileSublinkId)
  {
    $wasRemoved = false;
    unset($this->groupMobileSublinkIds[$this->indexOfGroupMobileSublinkId($aGroupMobileSublinkId)]);
    $this->groupMobileSublinkIds = array_values($this->groupMobileSublinkIds);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getGroupMobileSublinkIds()
  {
    $newGroupMobileSublinkIds = $this->groupMobileSublinkIds;
    return $newGroupMobileSublinkIds;
  }

  public function numberOfGroupMobileSublinkIds()
  {
    $number = count($this->groupMobileSublinkIds);
    return $number;
  }

  public function indexOfGroupMobileSublinkId($aGroupMobileSublinkId)
  {
    $rawAnswer = array_search($aGroupMobileSublinkId,$this->groupMobileSublinkIds);
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

class GetMobileSublinkBySublinkIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetMobileSublinkBySublinkIdRequest Attributes
  public $mobileSublinkIds;
  public $getTemp;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setMobileSublinkIds($amobileSublinkIds) {
       $this->mobileSublinkIds = $amobileSublinkIds;
   }

  public function addMobileSublinkId($aMobileSublinkId)
  {
    $wasAdded = false;
    $this->mobileSublinkIds[] = $aMobileSublinkId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeMobileSublinkId($aMobileSublinkId)
  {
    $wasRemoved = false;
    unset($this->mobileSublinkIds[$this->indexOfMobileSublinkId($aMobileSublinkId)]);
    $this->mobileSublinkIds = array_values($this->mobileSublinkIds);
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


  public function getMobileSublinkIds()
  {
    $newMobileSublinkIds = $this->mobileSublinkIds;
    return $newMobileSublinkIds;
  }

  public function numberOfMobileSublinkIds()
  {
    $number = count($this->mobileSublinkIds);
    return $number;
  }

  public function indexOfMobileSublinkId($aMobileSublinkId)
  {
    $rawAnswer = array_search($aMobileSublinkId,$this->mobileSublinkIds);
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

class GetMobileSublinkBySublinkIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetMobileSublinkBySublinkIdResponse Attributes
  public $mobileSublinkTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setMobileSublinkTypes($amobileSublinkTypes) {
       $this->mobileSublinkTypes = $amobileSublinkTypes;
   }

  public function addMobileSublinkType($aMobileSublinkType)
  {
    $wasAdded = false;
    $this->mobileSublinkTypes[] = $aMobileSublinkType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeMobileSublinkType($aMobileSublinkType)
  {
    $wasRemoved = false;
    unset($this->mobileSublinkTypes[$this->indexOfMobileSublinkType($aMobileSublinkType)]);
    $this->mobileSublinkTypes = array_values($this->mobileSublinkTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getMobileSublinkTypes()
  {
    $newMobileSublinkTypes = $this->mobileSublinkTypes;
    return $newMobileSublinkTypes;
  }

  public function numberOfMobileSublinkTypes()
  {
    $number = count($this->mobileSublinkTypes);
    return $number;
  }

  public function indexOfMobileSublinkType($aMobileSublinkType)
  {
    $rawAnswer = array_search($aMobileSublinkType,$this->mobileSublinkTypes);
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

class PhoneType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //PhoneType Attributes
  public $phoneId;
  public $phoneNum;
  public $adgroupId;
  public $pause;
  public $status;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setPhoneId($aPhoneId)
  {
    $wasSet = false;
    $this->phoneId = $aPhoneId;
    $wasSet = true;
    return $wasSet;
  }

  public function setPhoneNum($aPhoneNum)
  {
    $wasSet = false;
    $this->phoneNum = $aPhoneNum;
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

  public function getPhoneId()
  {
    return $this->phoneId;
  }

  public function getPhoneNum()
  {
    return $this->phoneNum;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }

  public function getPause()
  {
    return $this->pause;
  }

  public function getStatus()
  {
    return $this->status;
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

class AddPhoneRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AddPhoneRequest Attributes
  public $phoneTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setPhoneTypes($aphoneTypes) {
       $this->phoneTypes = $aphoneTypes;
   }

  public function addPhoneType($aPhoneType)
  {
    $wasAdded = false;
    $this->phoneTypes[] = $aPhoneType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removePhoneType($aPhoneType)
  {
    $wasRemoved = false;
    unset($this->phoneTypes[$this->indexOfPhoneType($aPhoneType)]);
    $this->phoneTypes = array_values($this->phoneTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getPhoneTypes()
  {
    $newPhoneTypes = $this->phoneTypes;
    return $newPhoneTypes;
  }

  public function numberOfPhoneTypes()
  {
    $number = count($this->phoneTypes);
    return $number;
  }

  public function indexOfPhoneType($aPhoneType)
  {
    $rawAnswer = array_search($aPhoneType,$this->phoneTypes);
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

class AddPhoneResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AddPhoneResponse Attributes
  public $phoneTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setPhoneTypes($aphoneTypes) {
       $this->phoneTypes = $aphoneTypes;
   }

  public function addPhoneType($aPhoneType)
  {
    $wasAdded = false;
    $this->phoneTypes[] = $aPhoneType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removePhoneType($aPhoneType)
  {
    $wasRemoved = false;
    unset($this->phoneTypes[$this->indexOfPhoneType($aPhoneType)]);
    $this->phoneTypes = array_values($this->phoneTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getPhoneTypes()
  {
    $newPhoneTypes = $this->phoneTypes;
    return $newPhoneTypes;
  }

  public function numberOfPhoneTypes()
  {
    $number = count($this->phoneTypes);
    return $number;
  }

  public function indexOfPhoneType($aPhoneType)
  {
    $rawAnswer = array_search($aPhoneType,$this->phoneTypes);
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

class UpdatePhoneRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UpdatePhoneRequest Attributes
  public $phoneTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setPhoneTypes($aphoneTypes) {
       $this->phoneTypes = $aphoneTypes;
   }

  public function addPhoneType($aPhoneType)
  {
    $wasAdded = false;
    $this->phoneTypes[] = $aPhoneType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removePhoneType($aPhoneType)
  {
    $wasRemoved = false;
    unset($this->phoneTypes[$this->indexOfPhoneType($aPhoneType)]);
    $this->phoneTypes = array_values($this->phoneTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getPhoneTypes()
  {
    $newPhoneTypes = $this->phoneTypes;
    return $newPhoneTypes;
  }

  public function numberOfPhoneTypes()
  {
    $number = count($this->phoneTypes);
    return $number;
  }

  public function indexOfPhoneType($aPhoneType)
  {
    $rawAnswer = array_search($aPhoneType,$this->phoneTypes);
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

class UpdatePhoneResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UpdatePhoneResponse Attributes
  public $phoneTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setPhoneTypes($aphoneTypes) {
       $this->phoneTypes = $aphoneTypes;
   }

  public function addPhoneType($aPhoneType)
  {
    $wasAdded = false;
    $this->phoneTypes[] = $aPhoneType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removePhoneType($aPhoneType)
  {
    $wasRemoved = false;
    unset($this->phoneTypes[$this->indexOfPhoneType($aPhoneType)]);
    $this->phoneTypes = array_values($this->phoneTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getPhoneTypes()
  {
    $newPhoneTypes = $this->phoneTypes;
    return $newPhoneTypes;
  }

  public function numberOfPhoneTypes()
  {
    $number = count($this->phoneTypes);
    return $number;
  }

  public function indexOfPhoneType($aPhoneType)
  {
    $rawAnswer = array_search($aPhoneType,$this->phoneTypes);
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

class GroupPhoneId
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GroupPhoneId Attributes
  public $adgroupId;
  public $phoneIds;

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
   public function setPhoneIds($aphoneIds) {
       $this->phoneIds = $aphoneIds;
   }

  public function addPhoneId($aPhoneId)
  {
    $wasAdded = false;
    $this->phoneIds[] = $aPhoneId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removePhoneId($aPhoneId)
  {
    $wasRemoved = false;
    unset($this->phoneIds[$this->indexOfPhoneId($aPhoneId)]);
    $this->phoneIds = array_values($this->phoneIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }


  public function getPhoneIds()
  {
    $newPhoneIds = $this->phoneIds;
    return $newPhoneIds;
  }

  public function numberOfPhoneIds()
  {
    $number = count($this->phoneIds);
    return $number;
  }

  public function indexOfPhoneId($aPhoneId)
  {
    $rawAnswer = array_search($aPhoneId,$this->phoneIds);
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

class GetPhoneIdByAdgroupIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetPhoneIdByAdgroupIdRequest Attributes
  public $adgroupIds;

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

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetPhoneIdByAdgroupIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetPhoneIdByAdgroupIdResponse Attributes
  public $groupPhoneIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setGroupPhoneIds($agroupPhoneIds) {
       $this->groupPhoneIds = $agroupPhoneIds;
   }

  public function addGroupPhoneId($aGroupPhoneId)
  {
    $wasAdded = false;
    $this->groupPhoneIds[] = $aGroupPhoneId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeGroupPhoneId($aGroupPhoneId)
  {
    $wasRemoved = false;
    unset($this->groupPhoneIds[$this->indexOfGroupPhoneId($aGroupPhoneId)]);
    $this->groupPhoneIds = array_values($this->groupPhoneIds);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getGroupPhoneIds()
  {
    $newGroupPhoneIds = $this->groupPhoneIds;
    return $newGroupPhoneIds;
  }

  public function numberOfGroupPhoneIds()
  {
    $number = count($this->groupPhoneIds);
    return $number;
  }

  public function indexOfGroupPhoneId($aGroupPhoneId)
  {
    $rawAnswer = array_search($aGroupPhoneId,$this->groupPhoneIds);
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

class GetPhoneByPhoneIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetPhoneByPhoneIdRequest Attributes
  public $phoneIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setPhoneIds($aphoneIds) {
       $this->phoneIds = $aphoneIds;
   }

  public function addPhoneId($aPhoneId)
  {
    $wasAdded = false;
    $this->phoneIds[] = $aPhoneId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removePhoneId($aPhoneId)
  {
    $wasRemoved = false;
    unset($this->phoneIds[$this->indexOfPhoneId($aPhoneId)]);
    $this->phoneIds = array_values($this->phoneIds);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getPhoneIds()
  {
    $newPhoneIds = $this->phoneIds;
    return $newPhoneIds;
  }

  public function numberOfPhoneIds()
  {
    $number = count($this->phoneIds);
    return $number;
  }

  public function indexOfPhoneId($aPhoneId)
  {
    $rawAnswer = array_search($aPhoneId,$this->phoneIds);
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

class GetPhoneByPhoneIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetPhoneByPhoneIdResponse Attributes
  public $phoneTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setPhoneTypes($aphoneTypes) {
       $this->phoneTypes = $aphoneTypes;
   }

  public function addPhoneType($aPhoneType)
  {
    $wasAdded = false;
    $this->phoneTypes[] = $aPhoneType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removePhoneType($aPhoneType)
  {
    $wasRemoved = false;
    unset($this->phoneTypes[$this->indexOfPhoneType($aPhoneType)]);
    $this->phoneTypes = array_values($this->phoneTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getPhoneTypes()
  {
    $newPhoneTypes = $this->phoneTypes;
    return $newPhoneTypes;
  }

  public function numberOfPhoneTypes()
  {
    $number = count($this->phoneTypes);
    return $number;
  }

  public function indexOfPhoneType($aPhoneType)
  {
    $rawAnswer = array_search($aPhoneType,$this->phoneTypes);
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

class BridgeType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //BridgeType Attributes
  public $bridgeId;
  public $adgroupId;
  public $pause;
  public $status;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setBridgeId($aBridgeId)
  {
    $wasSet = false;
    $this->bridgeId = $aBridgeId;
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

  public function getBridgeId()
  {
    return $this->bridgeId;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }

  public function getPause()
  {
    return $this->pause;
  }

  public function getStatus()
  {
    return $this->status;
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

class AddBridgeRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AddBridgeRequest Attributes
  public $bridgeTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setBridgeTypes($abridgeTypes) {
       $this->bridgeTypes = $abridgeTypes;
   }

  public function addBridgeType($aBridgeType)
  {
    $wasAdded = false;
    $this->bridgeTypes[] = $aBridgeType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeBridgeType($aBridgeType)
  {
    $wasRemoved = false;
    unset($this->bridgeTypes[$this->indexOfBridgeType($aBridgeType)]);
    $this->bridgeTypes = array_values($this->bridgeTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getBridgeTypes()
  {
    $newBridgeTypes = $this->bridgeTypes;
    return $newBridgeTypes;
  }

  public function numberOfBridgeTypes()
  {
    $number = count($this->bridgeTypes);
    return $number;
  }

  public function indexOfBridgeType($aBridgeType)
  {
    $rawAnswer = array_search($aBridgeType,$this->bridgeTypes);
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

class AddBridgeResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AddBridgeResponse Attributes
  public $bridgeTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setBridgeTypes($abridgeTypes) {
       $this->bridgeTypes = $abridgeTypes;
   }

  public function addBridgeType($aBridgeType)
  {
    $wasAdded = false;
    $this->bridgeTypes[] = $aBridgeType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeBridgeType($aBridgeType)
  {
    $wasRemoved = false;
    unset($this->bridgeTypes[$this->indexOfBridgeType($aBridgeType)]);
    $this->bridgeTypes = array_values($this->bridgeTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getBridgeTypes()
  {
    $newBridgeTypes = $this->bridgeTypes;
    return $newBridgeTypes;
  }

  public function numberOfBridgeTypes()
  {
    $number = count($this->bridgeTypes);
    return $number;
  }

  public function indexOfBridgeType($aBridgeType)
  {
    $rawAnswer = array_search($aBridgeType,$this->bridgeTypes);
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

class UpdateBridgeRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UpdateBridgeRequest Attributes
  public $bridgeTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setBridgeTypes($abridgeTypes) {
       $this->bridgeTypes = $abridgeTypes;
   }

  public function addBridgeType($aBridgeType)
  {
    $wasAdded = false;
    $this->bridgeTypes[] = $aBridgeType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeBridgeType($aBridgeType)
  {
    $wasRemoved = false;
    unset($this->bridgeTypes[$this->indexOfBridgeType($aBridgeType)]);
    $this->bridgeTypes = array_values($this->bridgeTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getBridgeTypes()
  {
    $newBridgeTypes = $this->bridgeTypes;
    return $newBridgeTypes;
  }

  public function numberOfBridgeTypes()
  {
    $number = count($this->bridgeTypes);
    return $number;
  }

  public function indexOfBridgeType($aBridgeType)
  {
    $rawAnswer = array_search($aBridgeType,$this->bridgeTypes);
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

class UpdateBridgeResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UpdateBridgeResponse Attributes
  public $bridgeTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setBridgeTypes($abridgeTypes) {
       $this->bridgeTypes = $abridgeTypes;
   }

  public function addBridgeType($aBridgeType)
  {
    $wasAdded = false;
    $this->bridgeTypes[] = $aBridgeType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeBridgeType($aBridgeType)
  {
    $wasRemoved = false;
    unset($this->bridgeTypes[$this->indexOfBridgeType($aBridgeType)]);
    $this->bridgeTypes = array_values($this->bridgeTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getBridgeTypes()
  {
    $newBridgeTypes = $this->bridgeTypes;
    return $newBridgeTypes;
  }

  public function numberOfBridgeTypes()
  {
    $number = count($this->bridgeTypes);
    return $number;
  }

  public function indexOfBridgeType($aBridgeType)
  {
    $rawAnswer = array_search($aBridgeType,$this->bridgeTypes);
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

class GroupBridgeId
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GroupBridgeId Attributes
  public $adgroupId;
  public $bridgeIds;

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
   public function setBridgeIds($abridgeIds) {
       $this->bridgeIds = $abridgeIds;
   }

  public function addBridgeId($aBridgeId)
  {
    $wasAdded = false;
    $this->bridgeIds[] = $aBridgeId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeBridgeId($aBridgeId)
  {
    $wasRemoved = false;
    unset($this->bridgeIds[$this->indexOfBridgeId($aBridgeId)]);
    $this->bridgeIds = array_values($this->bridgeIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }


  public function getBridgeIds()
  {
    $newBridgeIds = $this->bridgeIds;
    return $newBridgeIds;
  }

  public function numberOfBridgeIds()
  {
    $number = count($this->bridgeIds);
    return $number;
  }

  public function indexOfBridgeId($aBridgeId)
  {
    $rawAnswer = array_search($aBridgeId,$this->bridgeIds);
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

class GetBridgeIdByAdgroupIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetBridgeIdByAdgroupIdRequest Attributes
  public $adgroupIds;

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

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetBridgeIdByAdgroupIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetBridgeIdByAdgroupIdResponse Attributes
  public $groupBridgeIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setGroupBridgeIds($agroupBridgeIds) {
       $this->groupBridgeIds = $agroupBridgeIds;
   }

  public function addGroupBridgeId($aGroupBridgeId)
  {
    $wasAdded = false;
    $this->groupBridgeIds[] = $aGroupBridgeId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeGroupBridgeId($aGroupBridgeId)
  {
    $wasRemoved = false;
    unset($this->groupBridgeIds[$this->indexOfGroupBridgeId($aGroupBridgeId)]);
    $this->groupBridgeIds = array_values($this->groupBridgeIds);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getGroupBridgeIds()
  {
    $newGroupBridgeIds = $this->groupBridgeIds;
    return $newGroupBridgeIds;
  }

  public function numberOfGroupBridgeIds()
  {
    $number = count($this->groupBridgeIds);
    return $number;
  }

  public function indexOfGroupBridgeId($aGroupBridgeId)
  {
    $rawAnswer = array_search($aGroupBridgeId,$this->groupBridgeIds);
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

class GetBridgeByBridgeIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetBridgeByBridgeIdRequest Attributes
  public $bridgeIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setBridgeIds($abridgeIds) {
       $this->bridgeIds = $abridgeIds;
   }

  public function addBridgeId($aBridgeId)
  {
    $wasAdded = false;
    $this->bridgeIds[] = $aBridgeId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeBridgeId($aBridgeId)
  {
    $wasRemoved = false;
    unset($this->bridgeIds[$this->indexOfBridgeId($aBridgeId)]);
    $this->bridgeIds = array_values($this->bridgeIds);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getBridgeIds()
  {
    $newBridgeIds = $this->bridgeIds;
    return $newBridgeIds;
  }

  public function numberOfBridgeIds()
  {
    $number = count($this->bridgeIds);
    return $number;
  }

  public function indexOfBridgeId($aBridgeId)
  {
    $rawAnswer = array_search($aBridgeId,$this->bridgeIds);
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

class GetBridgeByBridgeIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetBridgeByBridgeIdResponse Attributes
  public $bridgeTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setBridgeTypes($abridgeTypes) {
       $this->bridgeTypes = $abridgeTypes;
   }

  public function addBridgeType($aBridgeType)
  {
    $wasAdded = false;
    $this->bridgeTypes[] = $aBridgeType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeBridgeType($aBridgeType)
  {
    $wasRemoved = false;
    unset($this->bridgeTypes[$this->indexOfBridgeType($aBridgeType)]);
    $this->bridgeTypes = array_values($this->bridgeTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getBridgeTypes()
  {
    $newBridgeTypes = $this->bridgeTypes;
    return $newBridgeTypes;
  }

  public function numberOfBridgeTypes()
  {
    $number = count($this->bridgeTypes);
    return $number;
  }

  public function indexOfBridgeType($aBridgeType)
  {
    $rawAnswer = array_search($aBridgeType,$this->bridgeTypes);
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

class sms_v3_NewCreativeService extends CommonService 
{    public function __construct() {
        parent::__construct ( 'sms', 'v3', 'NewCreativeService' );
    }

  // ABSTRACT METHODS 

 public function getSublinkIdByAdgroupId ($GetSublinkIdByAdgroupIdRequest){
 return $this->execute ( 'getSublinkIdByAdgroupId', $GetSublinkIdByAdgroupIdRequest );
}
 public function getSublinkBySublinkId ($GetSublinkBySublinkIdRequest){
 return $this->execute ( 'getSublinkBySublinkId', $GetSublinkBySublinkIdRequest );
}
 public function addSublink ($AddSublinkRequest){
 return $this->execute ( 'addSublink', $AddSublinkRequest );
}
 public function updateSublink ($UpdateSublinkRequest){
 return $this->execute ( 'updateSublink', $UpdateSublinkRequest );
}
 public function deleteSublink ($DeleteSublinkRequest){
 return $this->execute ( 'deleteSublink', $DeleteSublinkRequest );
}
 public function addMobileSublink ($AddMobileSublinkRequest){
 return $this->execute ( 'addMobileSublink', $AddMobileSublinkRequest );
}
 public function updateMobileSublink ($UpdateMobileSublinkRequest){
 return $this->execute ( 'updateMobileSublink', $UpdateMobileSublinkRequest );
}
 public function getMobileSublinkIdByAdgroupId ($GetMobileSublinkIdByAdgroupIdRequest){
 return $this->execute ( 'getMobileSublinkIdByAdgroupId', $GetMobileSublinkIdByAdgroupIdRequest );
}
 public function getMobileSublinkBySublinkId ($GetMobileSublinkBySublinkIdRequest){
 return $this->execute ( 'getMobileSublinkBySublinkId', $GetMobileSublinkBySublinkIdRequest );
}
 public function addPhone ($AddPhoneRequest){
 return $this->execute ( 'addPhone', $AddPhoneRequest );
}
 public function updatePhone ($UpdatePhoneRequest){
 return $this->execute ( 'updatePhone', $UpdatePhoneRequest );
}
 public function getPhoneIdByAdgroupId ($GetPhoneIdByAdgroupIdRequest){
 return $this->execute ( 'getPhoneIdByAdgroupId', $GetPhoneIdByAdgroupIdRequest );
}
 public function getPhoneByPhoneId ($GetPhoneByPhoneIdRequest){
 return $this->execute ( 'getPhoneByPhoneId', $GetPhoneByPhoneIdRequest );
}
 public function addBridge ($AddBridgeRequest){
 return $this->execute ( 'addBridge', $AddBridgeRequest );
}
 public function updateBridge ($UpdateBridgeRequest){
 return $this->execute ( 'updateBridge', $UpdateBridgeRequest );
}
 public function getBridgeIdByAdgroupId ($GetBridgeIdByAdgroupIdRequest){
 return $this->execute ( 'getBridgeIdByAdgroupId', $GetBridgeIdByAdgroupIdRequest );
}
 public function getBridgeByBridgeId ($GetBridgeByBridgeIdRequest){
 return $this->execute ( 'getBridgeByBridgeId', $GetBridgeByBridgeIdRequest );
}
  
}


?>