<?php
require_once 'CommonService.php';

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

class AccountInfoType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AccountInfoType Attributes
  public $userid;
  public $balance;
  public $cost;
  public $payment;
  public $budgetType;
  public $budget;
  public $regionTarget;
  public $excludeIp;
  public $openDomains;
  public $regDomain;
  public $budgetOfflineTime;
  public $weeklyBudget;
  public $userStat;
  public $isDynamicCreative;
  public $dynamicCreativeParam;
  public $opt;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setUserid($aUserid)
  {
    $wasSet = false;
    $this->userid = $aUserid;
    $wasSet = true;
    return $wasSet;
  }

  public function setBalance($aBalance)
  {
    $wasSet = false;
    $this->balance = $aBalance;
    $wasSet = true;
    return $wasSet;
  }

  public function setCost($aCost)
  {
    $wasSet = false;
    $this->cost = $aCost;
    $wasSet = true;
    return $wasSet;
  }

  public function setPayment($aPayment)
  {
    $wasSet = false;
    $this->payment = $aPayment;
    $wasSet = true;
    return $wasSet;
  }

  public function setBudgetType($aBudgetType)
  {
    $wasSet = false;
    $this->budgetType = $aBudgetType;
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
   public function setOpenDomains($aopenDomains) {
       $this->openDomains = $aopenDomains;
   }

  public function addOpenDomain($aOpenDomain)
  {
    $wasAdded = false;
    $this->openDomains[] = $aOpenDomain;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeOpenDomain($aOpenDomain)
  {
    $wasRemoved = false;
    unset($this->openDomains[$this->indexOfOpenDomain($aOpenDomain)]);
    $this->openDomains = array_values($this->openDomains);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setRegDomain($aRegDomain)
  {
    $wasSet = false;
    $this->regDomain = $aRegDomain;
    $wasSet = true;
    return $wasSet;
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
   public function setWeeklyBudget($aweeklyBudget) {
       $this->weeklyBudget = $aweeklyBudget;
   }

  public function addWeeklyBudget($aWeeklyBudget)
  {
    $wasAdded = false;
    $this->weeklyBudget[] = $aWeeklyBudget;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeWeeklyBudget($aWeeklyBudget)
  {
    $wasRemoved = false;
    unset($this->weeklyBudget[$this->indexOfWeeklyBudget($aWeeklyBudget)]);
    $this->weeklyBudget = array_values($this->weeklyBudget);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setUserStat($aUserStat)
  {
    $wasSet = false;
    $this->userStat = $aUserStat;
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

  public function setDynamicCreativeParam($aDynamicCreativeParam)
  {
    $wasSet = false;
    $this->dynamicCreativeParam = $aDynamicCreativeParam;
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

  public function getUserid()
  {
    return $this->userid;
  }

  public function getBalance()
  {
    return $this->balance;
  }

  public function getCost()
  {
    return $this->cost;
  }

  public function getPayment()
  {
    return $this->payment;
  }

  public function getBudgetType()
  {
    return $this->budgetType;
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


  public function getOpenDomains()
  {
    $newOpenDomains = $this->openDomains;
    return $newOpenDomains;
  }

  public function numberOfOpenDomains()
  {
    $number = count($this->openDomains);
    return $number;
  }

  public function indexOfOpenDomain($aOpenDomain)
  {
    $rawAnswer = array_search($aOpenDomain,$this->openDomains);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getRegDomain()
  {
    return $this->regDomain;
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


  public function getWeeklyBudget()
  {
    $newWeeklyBudget = $this->weeklyBudget;
    return $newWeeklyBudget;
  }

  public function numberOfWeeklyBudget()
  {
    $number = count($this->weeklyBudget);
    return $number;
  }

  public function indexOfWeeklyBudget($aWeeklyBudget)
  {
    $rawAnswer = array_search($aWeeklyBudget,$this->weeklyBudget);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getUserStat()
  {
    return $this->userStat;
  }

  public function getIsDynamicCreative()
  {
    return $this->isDynamicCreative;
  }

  public function getDynamicCreativeParam()
  {
    return $this->dynamicCreativeParam;
  }

  public function getOpt()
  {
    return $this->opt;
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

class GetAccountInfoRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAccountInfoRequest Attributes
  public $requestData;
  public $extended;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setRequestData($arequestData) {
       $this->requestData = $arequestData;
   }

  public function addRequestData($aRequestData)
  {
    $wasAdded = false;
    $this->requestData[] = $aRequestData;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeRequestData($aRequestData)
  {
    $wasRemoved = false;
    unset($this->requestData[$this->indexOfRequestData($aRequestData)]);
    $this->requestData = array_values($this->requestData);
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


  public function getRequestData()
  {
    $newRequestData = $this->requestData;
    return $newRequestData;
  }

  public function numberOfRequestData()
  {
    $number = count($this->requestData);
    return $number;
  }

  public function indexOfRequestData($aRequestData)
  {
    $rawAnswer = array_search($aRequestData,$this->requestData);
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

class GetAccountInfoResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAccountInfoResponse Attributes
  public $accountInfoType;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setAccountInfoType($aAccountInfoType)
  {
    $wasSet = false;
    $this->accountInfoType = $aAccountInfoType;
    $wasSet = true;
    return $wasSet;
  }

  public function getAccountInfoType()
  {
    return $this->accountInfoType;
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

class UpdateAccountInfoRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UpdateAccountInfoRequest Attributes
  public $accountInfoType;
  public $extended;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setAccountInfoType($aAccountInfoType)
  {
    $wasSet = false;
    $this->accountInfoType = $aAccountInfoType;
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

  public function getAccountInfoType()
  {
    return $this->accountInfoType;
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

class UpdateAccountInfoResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UpdateAccountInfoResponse Attributes
  public $accountInfoType;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setAccountInfoType($aAccountInfoType)
  {
    $wasSet = false;
    $this->accountInfoType = $aAccountInfoType;
    $wasSet = true;
    return $wasSet;
  }

  public function getAccountInfoType()
  {
    return $this->accountInfoType;
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

class sms_v3_AccountService extends CommonService 
{    public function __construct() {
        parent::__construct ( 'sms', 'v3', 'AccountService' );
    }

  // ABSTRACT METHODS 

 public function getAccountInfo ($GetAccountInfoRequest){
 return $this->execute ( 'getAccountInfo', $GetAccountInfoRequest );
}
 public function updateAccountInfo ($UpdateAccountInfoRequest){
 return $this->execute ( 'updateAccountInfo', $UpdateAccountInfoRequest );
}
  
}


?>