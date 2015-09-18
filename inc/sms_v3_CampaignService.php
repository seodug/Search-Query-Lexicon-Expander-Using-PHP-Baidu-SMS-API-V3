<?php
require_once 'CommonService.php';

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class CampaignType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //CampaignType Attributes
  public $campaignId;
  public $campaignName;
  public $budget;
  public $regionTarget;
  public $excludeIp;
  public $negativeWords;
  public $exactNegativeWords;
  public $schedule;
  public $budgetOfflineTime;
  public $showProb;
  public $device;
  public $priceRatio;
  public $pause;
  public $status;
  public $isDynamicCreative;

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

  public function setCampaignName($aCampaignName)
  {
    $wasSet = false;
    $this->campaignName = $aCampaignName;
    $wasSet = true;
    return $wasSet;
  }

  public function setBudget($aBudget)
  {
    $wasSet = false;
    $this->budget = $aBudget;
    $wasSet = true;
    return $wasSet;
  }
   public function setRegionTarget($aregionTarget) {
       $this->regionTarget = $aregionTarget;
   }

  public function addRegionTarget($aRegionTarget)
  {
    $wasAdded = false;
    $this->regionTarget[] = $aRegionTarget;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeRegionTarget($aRegionTarget)
  {
    $wasRemoved = false;
    unset($this->regionTarget[$this->indexOfRegionTarget($aRegionTarget)]);
    $this->regionTarget = array_values($this->regionTarget);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setExcludeIp($aexcludeIp) {
       $this->excludeIp = $aexcludeIp;
   }

  public function addExcludeIp($aExcludeIp)
  {
    $wasAdded = false;
    $this->excludeIp[] = $aExcludeIp;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeExcludeIp($aExcludeIp)
  {
    $wasRemoved = false;
    unset($this->excludeIp[$this->indexOfExcludeIp($aExcludeIp)]);
    $this->excludeIp = array_values($this->excludeIp);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setNegativeWords($anegativeWords) {
       $this->negativeWords = $anegativeWords;
   }

  public function addNegativeWord($aNegativeWord)
  {
    $wasAdded = false;
    $this->negativeWords[] = $aNegativeWord;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeNegativeWord($aNegativeWord)
  {
    $wasRemoved = false;
    unset($this->negativeWords[$this->indexOfNegativeWord($aNegativeWord)]);
    $this->negativeWords = array_values($this->negativeWords);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setExactNegativeWords($aexactNegativeWords) {
       $this->exactNegativeWords = $aexactNegativeWords;
   }

  public function addExactNegativeWord($aExactNegativeWord)
  {
    $wasAdded = false;
    $this->exactNegativeWords[] = $aExactNegativeWord;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeExactNegativeWord($aExactNegativeWord)
  {
    $wasRemoved = false;
    unset($this->exactNegativeWords[$this->indexOfExactNegativeWord($aExactNegativeWord)]);
    $this->exactNegativeWords = array_values($this->exactNegativeWords);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setSchedule($aschedule) {
       $this->schedule = $aschedule;
   }

  public function addSchedule($aSchedule)
  {
    $wasAdded = false;
    $this->schedule[] = $aSchedule;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeSchedule($aSchedule)
  {
    $wasRemoved = false;
    unset($this->schedule[$this->indexOfSchedule($aSchedule)]);
    $this->schedule = array_values($this->schedule);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setBudgetOfflineTime($abudgetOfflineTime) {
       $this->budgetOfflineTime = $abudgetOfflineTime;
   }

  public function addBudgetOfflineTime($aBudgetOfflineTime)
  {
    $wasAdded = false;
    $this->budgetOfflineTime[] = $aBudgetOfflineTime;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeBudgetOfflineTime($aBudgetOfflineTime)
  {
    $wasRemoved = false;
    unset($this->budgetOfflineTime[$this->indexOfBudgetOfflineTime($aBudgetOfflineTime)]);
    $this->budgetOfflineTime = array_values($this->budgetOfflineTime);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setShowProb($aShowProb)
  {
    $wasSet = false;
    $this->showProb = $aShowProb;
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

  public function setPriceRatio($aPriceRatio)
  {
    $wasSet = false;
    $this->priceRatio = $aPriceRatio;
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

  public function setIsDynamicCreative($aIsDynamicCreative)
  {
    $wasSet = false;
    $this->isDynamicCreative = $aIsDynamicCreative;
    $wasSet = true;
    return $wasSet;
  }

  public function getCampaignId()
  {
    return $this->campaignId;
  }

  public function getCampaignName()
  {
    return $this->campaignName;
  }

  public function getBudget()
  {
    return $this->budget;
  }


  public function getRegionTarget()
  {
    $newRegionTarget = $this->regionTarget;
    return $newRegionTarget;
  }

  public function numberOfRegionTarget()
  {
    $number = count($this->regionTarget);
    return $number;
  }

  public function indexOfRegionTarget($aRegionTarget)
  {
    $rawAnswer = array_search($aRegionTarget,$this->regionTarget);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getExcludeIp()
  {
    $newExcludeIp = $this->excludeIp;
    return $newExcludeIp;
  }

  public function numberOfExcludeIp()
  {
    $number = count($this->excludeIp);
    return $number;
  }

  public function indexOfExcludeIp($aExcludeIp)
  {
    $rawAnswer = array_search($aExcludeIp,$this->excludeIp);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getNegativeWords()
  {
    $newNegativeWords = $this->negativeWords;
    return $newNegativeWords;
  }

  public function numberOfNegativeWords()
  {
    $number = count($this->negativeWords);
    return $number;
  }

  public function indexOfNegativeWord($aNegativeWord)
  {
    $rawAnswer = array_search($aNegativeWord,$this->negativeWords);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getExactNegativeWords()
  {
    $newExactNegativeWords = $this->exactNegativeWords;
    return $newExactNegativeWords;
  }

  public function numberOfExactNegativeWords()
  {
    $number = count($this->exactNegativeWords);
    return $number;
  }

  public function indexOfExactNegativeWord($aExactNegativeWord)
  {
    $rawAnswer = array_search($aExactNegativeWord,$this->exactNegativeWords);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getSchedule()
  {
    $newSchedule = $this->schedule;
    return $newSchedule;
  }

  public function numberOfSchedule()
  {
    $number = count($this->schedule);
    return $number;
  }

  public function indexOfSchedule($aSchedule)
  {
    $rawAnswer = array_search($aSchedule,$this->schedule);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getBudgetOfflineTime()
  {
    $newBudgetOfflineTime = $this->budgetOfflineTime;
    return $newBudgetOfflineTime;
  }

  public function numberOfBudgetOfflineTime()
  {
    $number = count($this->budgetOfflineTime);
    return $number;
  }

  public function indexOfBudgetOfflineTime($aBudgetOfflineTime)
  {
    $rawAnswer = array_search($aBudgetOfflineTime,$this->budgetOfflineTime);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getShowProb()
  {
    return $this->showProb;
  }

  public function getDevice()
  {
    return $this->device;
  }

  public function getPriceRatio()
  {
    return $this->priceRatio;
  }

  public function getPause()
  {
    return $this->pause;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function getIsDynamicCreative()
  {
    return $this->isDynamicCreative;
  }

  public function isPause()
  {
    return $this->pause;
  }

  public function isIsDynamicCreative()
  {
    return $this->isDynamicCreative;
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

class ScheduleType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //ScheduleType Attributes
  public $weekDay;
  public $startHour;
  public $endHour;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setWeekDay($aWeekDay)
  {
    $wasSet = false;
    $this->weekDay = $aWeekDay;
    $wasSet = true;
    return $wasSet;
  }

  public function setStartHour($aStartHour)
  {
    $wasSet = false;
    $this->startHour = $aStartHour;
    $wasSet = true;
    return $wasSet;
  }

  public function setEndHour($aEndHour)
  {
    $wasSet = false;
    $this->endHour = $aEndHour;
    $wasSet = true;
    return $wasSet;
  }

  public function getWeekDay()
  {
    return $this->weekDay;
  }

  public function getStartHour()
  {
    return $this->startHour;
  }

  public function getEndHour()
  {
    return $this->endHour;
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

class OfflineTimeType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //OfflineTimeType Attributes
  public $flag;
  public $time;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setFlag($aFlag)
  {
    $wasSet = false;
    $this->flag = $aFlag;
    $wasSet = true;
    return $wasSet;
  }

  public function setTime($aTime)
  {
    $wasSet = false;
    $this->time = $aTime;
    $wasSet = true;
    return $wasSet;
  }

  public function getFlag()
  {
    return $this->flag;
  }

  public function getTime()
  {
    return $this->time;
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

class GetAllCampaignIdRequest
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

class GetAllCampaignIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAllCampaignIdResponse Attributes
  public $campaignIds;

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

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetCampaignByCampaignIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetCampaignByCampaignIdRequest Attributes
  public $campaignIds;
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

class GetCampaignByCampaignIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetCampaignByCampaignIdResponse Attributes
  public $campaignTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCampaignTypes($acampaignTypes) {
       $this->campaignTypes = $acampaignTypes;
   }

  public function addCampaignType($aCampaignType)
  {
    $wasAdded = false;
    $this->campaignTypes[] = $aCampaignType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCampaignType($aCampaignType)
  {
    $wasRemoved = false;
    unset($this->campaignTypes[$this->indexOfCampaignType($aCampaignType)]);
    $this->campaignTypes = array_values($this->campaignTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getCampaignTypes()
  {
    $newCampaignTypes = $this->campaignTypes;
    return $newCampaignTypes;
  }

  public function numberOfCampaignTypes()
  {
    $number = count($this->campaignTypes);
    return $number;
  }

  public function indexOfCampaignType($aCampaignType)
  {
    $rawAnswer = array_search($aCampaignType,$this->campaignTypes);
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

class GetAllCampaignRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAllCampaignRequest Attributes
  public $extended;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setExtended($aExtended)
  {
    $wasSet = false;
    $this->extended = $aExtended;
    $wasSet = true;
    return $wasSet;
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

class GetAllCampaignResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAllCampaignResponse Attributes
  public $campaignTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCampaignTypes($acampaignTypes) {
       $this->campaignTypes = $acampaignTypes;
   }

  public function addCampaignType($aCampaignType)
  {
    $wasAdded = false;
    $this->campaignTypes[] = $aCampaignType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCampaignType($aCampaignType)
  {
    $wasRemoved = false;
    unset($this->campaignTypes[$this->indexOfCampaignType($aCampaignType)]);
    $this->campaignTypes = array_values($this->campaignTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getCampaignTypes()
  {
    $newCampaignTypes = $this->campaignTypes;
    return $newCampaignTypes;
  }

  public function numberOfCampaignTypes()
  {
    $number = count($this->campaignTypes);
    return $number;
  }

  public function indexOfCampaignType($aCampaignType)
  {
    $rawAnswer = array_search($aCampaignType,$this->campaignTypes);
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

class AddCampaignRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AddCampaignRequest Attributes
  public $campaignTypes;
  public $extended;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCampaignTypes($acampaignTypes) {
       $this->campaignTypes = $acampaignTypes;
   }

  public function addCampaignType($aCampaignType)
  {
    $wasAdded = false;
    $this->campaignTypes[] = $aCampaignType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCampaignType($aCampaignType)
  {
    $wasRemoved = false;
    unset($this->campaignTypes[$this->indexOfCampaignType($aCampaignType)]);
    $this->campaignTypes = array_values($this->campaignTypes);
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


  public function getCampaignTypes()
  {
    $newCampaignTypes = $this->campaignTypes;
    return $newCampaignTypes;
  }

  public function numberOfCampaignTypes()
  {
    $number = count($this->campaignTypes);
    return $number;
  }

  public function indexOfCampaignType($aCampaignType)
  {
    $rawAnswer = array_search($aCampaignType,$this->campaignTypes);
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

class AddCampaignResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AddCampaignResponse Attributes
  public $campaignTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCampaignTypes($acampaignTypes) {
       $this->campaignTypes = $acampaignTypes;
   }

  public function addCampaignType($aCampaignType)
  {
    $wasAdded = false;
    $this->campaignTypes[] = $aCampaignType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCampaignType($aCampaignType)
  {
    $wasRemoved = false;
    unset($this->campaignTypes[$this->indexOfCampaignType($aCampaignType)]);
    $this->campaignTypes = array_values($this->campaignTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getCampaignTypes()
  {
    $newCampaignTypes = $this->campaignTypes;
    return $newCampaignTypes;
  }

  public function numberOfCampaignTypes()
  {
    $number = count($this->campaignTypes);
    return $number;
  }

  public function indexOfCampaignType($aCampaignType)
  {
    $rawAnswer = array_search($aCampaignType,$this->campaignTypes);
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

class UpdateCampaignRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UpdateCampaignRequest Attributes
  public $campaignTypes;
  public $extended;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCampaignTypes($acampaignTypes) {
       $this->campaignTypes = $acampaignTypes;
   }

  public function addCampaignType($aCampaignType)
  {
    $wasAdded = false;
    $this->campaignTypes[] = $aCampaignType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCampaignType($aCampaignType)
  {
    $wasRemoved = false;
    unset($this->campaignTypes[$this->indexOfCampaignType($aCampaignType)]);
    $this->campaignTypes = array_values($this->campaignTypes);
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


  public function getCampaignTypes()
  {
    $newCampaignTypes = $this->campaignTypes;
    return $newCampaignTypes;
  }

  public function numberOfCampaignTypes()
  {
    $number = count($this->campaignTypes);
    return $number;
  }

  public function indexOfCampaignType($aCampaignType)
  {
    $rawAnswer = array_search($aCampaignType,$this->campaignTypes);
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

class UpdateCampaignResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UpdateCampaignResponse Attributes
  public $campaignTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCampaignTypes($acampaignTypes) {
       $this->campaignTypes = $acampaignTypes;
   }

  public function addCampaignType($aCampaignType)
  {
    $wasAdded = false;
    $this->campaignTypes[] = $aCampaignType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCampaignType($aCampaignType)
  {
    $wasRemoved = false;
    unset($this->campaignTypes[$this->indexOfCampaignType($aCampaignType)]);
    $this->campaignTypes = array_values($this->campaignTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getCampaignTypes()
  {
    $newCampaignTypes = $this->campaignTypes;
    return $newCampaignTypes;
  }

  public function numberOfCampaignTypes()
  {
    $number = count($this->campaignTypes);
    return $number;
  }

  public function indexOfCampaignType($aCampaignType)
  {
    $rawAnswer = array_search($aCampaignType,$this->campaignTypes);
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

class DeleteCampaignRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //DeleteCampaignRequest Attributes
  public $campaignIds;

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

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class DeleteCampaignResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //DeleteCampaignResponse Attributes
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

class sms_v3_CampaignService extends CommonService 
{    public function __construct() {
        parent::__construct ( 'sms', 'v3', 'CampaignService' );
    }

  // ABSTRACT METHODS 

 public function getAllCampaignId ($GetAllCampaignIdRequest){
 return $this->execute ( 'getAllCampaignId', $GetAllCampaignIdRequest );
}
 public function getCampaignByCampaignId ($GetCampaignByCampaignIdRequest){
 return $this->execute ( 'getCampaignByCampaignId', $GetCampaignByCampaignIdRequest );
}
 public function getAllCampaign ($GetAllCampaignRequest){
 return $this->execute ( 'getAllCampaign', $GetAllCampaignRequest );
}
 public function addCampaign ($AddCampaignRequest){
 return $this->execute ( 'addCampaign', $AddCampaignRequest );
}
 public function updateCampaign ($UpdateCampaignRequest){
 return $this->execute ( 'updateCampaign', $UpdateCampaignRequest );
}
 public function deleteCampaign ($DeleteCampaignRequest){
 return $this->execute ( 'deleteCampaign', $DeleteCampaignRequest );
}
  
}


?>