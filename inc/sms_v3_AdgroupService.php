<?php
require_once 'CommonService.php';

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class AdgroupType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AdgroupType Attributes
  public $adgroupId;
  public $campaignId;
  public $adgroupName;
  public $maxPrice;
  public $negativeWords;
  public $exactNegativeWords;
  public $reserved;
  public $pause;
  public $status;
  public $accuPriceFactor;
  public $wordPriceFactor;
  public $widePriceFactor;
  public $matchPriceStatus;
  public $opt;

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

  public function setCampaignId($aCampaignId)
  {
    $wasSet = false;
    $this->campaignId = $aCampaignId;
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

  public function setMaxPrice($aMaxPrice)
  {
    $wasSet = false;
    $this->maxPrice = $aMaxPrice;
    $wasSet = true;
    return $wasSet;
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

  public function setReserved($aReserved)
  {
    $wasSet = false;
    $this->reserved = $aReserved;
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

  public function setAccuPriceFactor($aAccuPriceFactor)
  {
    $wasSet = false;
    $this->accuPriceFactor = $aAccuPriceFactor;
    $wasSet = true;
    return $wasSet;
  }

  public function setWordPriceFactor($aWordPriceFactor)
  {
    $wasSet = false;
    $this->wordPriceFactor = $aWordPriceFactor;
    $wasSet = true;
    return $wasSet;
  }

  public function setWidePriceFactor($aWidePriceFactor)
  {
    $wasSet = false;
    $this->widePriceFactor = $aWidePriceFactor;
    $wasSet = true;
    return $wasSet;
  }

  public function setMatchPriceStatus($aMatchPriceStatus)
  {
    $wasSet = false;
    $this->matchPriceStatus = $aMatchPriceStatus;
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

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }

  public function getCampaignId()
  {
    return $this->campaignId;
  }

  public function getAdgroupName()
  {
    return $this->adgroupName;
  }

  public function getMaxPrice()
  {
    return $this->maxPrice;
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

  public function getReserved()
  {
    return $this->reserved;
  }

  public function getPause()
  {
    return $this->pause;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function getAccuPriceFactor()
  {
    return $this->accuPriceFactor;
  }

  public function getWordPriceFactor()
  {
    return $this->wordPriceFactor;
  }

  public function getWidePriceFactor()
  {
    return $this->widePriceFactor;
  }

  public function getMatchPriceStatus()
  {
    return $this->matchPriceStatus;
  }

  public function getOpt()
  {
    return $this->opt;
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

class CampaignAdgroupId
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //CampaignAdgroupId Attributes
  public $campaignId;
  public $adgroupIds;

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

  public function getCampaignId()
  {
    return $this->campaignId;
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

class CampaignAdgroup
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //CampaignAdgroup Attributes
  public $campaignId;
  public $adgroupTypes;

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
   public function setAdgroupTypes($aadgroupTypes) {
       $this->adgroupTypes = $aadgroupTypes;
   }

  public function addAdgroupType($aAdgroupType)
  {
    $wasAdded = false;
    $this->adgroupTypes[] = $aAdgroupType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeAdgroupType($aAdgroupType)
  {
    $wasRemoved = false;
    unset($this->adgroupTypes[$this->indexOfAdgroupType($aAdgroupType)]);
    $this->adgroupTypes = array_values($this->adgroupTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getCampaignId()
  {
    return $this->campaignId;
  }


  public function getAdgroupTypes()
  {
    $newAdgroupTypes = $this->adgroupTypes;
    return $newAdgroupTypes;
  }

  public function numberOfAdgroupTypes()
  {
    $number = count($this->adgroupTypes);
    return $number;
  }

  public function indexOfAdgroupType($aAdgroupType)
  {
    $rawAnswer = array_search($aAdgroupType,$this->adgroupTypes);
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

class GetAdgroupIdByCampaignIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAdgroupIdByCampaignIdRequest Attributes
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

class GetAdgroupIdByCampaignIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAdgroupIdByCampaignIdResponse Attributes
  public $campaignAdgroupIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCampaignAdgroupIds($acampaignAdgroupIds) {
       $this->campaignAdgroupIds = $acampaignAdgroupIds;
   }

  public function addCampaignAdgroupId($aCampaignAdgroupId)
  {
    $wasAdded = false;
    $this->campaignAdgroupIds[] = $aCampaignAdgroupId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCampaignAdgroupId($aCampaignAdgroupId)
  {
    $wasRemoved = false;
    unset($this->campaignAdgroupIds[$this->indexOfCampaignAdgroupId($aCampaignAdgroupId)]);
    $this->campaignAdgroupIds = array_values($this->campaignAdgroupIds);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getCampaignAdgroupIds()
  {
    $newCampaignAdgroupIds = $this->campaignAdgroupIds;
    return $newCampaignAdgroupIds;
  }

  public function numberOfCampaignAdgroupIds()
  {
    $number = count($this->campaignAdgroupIds);
    return $number;
  }

  public function indexOfCampaignAdgroupId($aCampaignAdgroupId)
  {
    $rawAnswer = array_search($aCampaignAdgroupId,$this->campaignAdgroupIds);
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

class GetAllAdgroupIdRequest
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

class GetAllAdgroupIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAllAdgroupIdResponse Attributes
  public $campaignAdgroupIds;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCampaignAdgroupIds($acampaignAdgroupIds) {
       $this->campaignAdgroupIds = $acampaignAdgroupIds;
   }

  public function addCampaignAdgroupId($aCampaignAdgroupId)
  {
    $wasAdded = false;
    $this->campaignAdgroupIds[] = $aCampaignAdgroupId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCampaignAdgroupId($aCampaignAdgroupId)
  {
    $wasRemoved = false;
    unset($this->campaignAdgroupIds[$this->indexOfCampaignAdgroupId($aCampaignAdgroupId)]);
    $this->campaignAdgroupIds = array_values($this->campaignAdgroupIds);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getCampaignAdgroupIds()
  {
    $newCampaignAdgroupIds = $this->campaignAdgroupIds;
    return $newCampaignAdgroupIds;
  }

  public function numberOfCampaignAdgroupIds()
  {
    $number = count($this->campaignAdgroupIds);
    return $number;
  }

  public function indexOfCampaignAdgroupId($aCampaignAdgroupId)
  {
    $rawAnswer = array_search($aCampaignAdgroupId,$this->campaignAdgroupIds);
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

class GetAdgroupByCampaignIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAdgroupByCampaignIdRequest Attributes
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

class GetAdgroupByCampaignIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAdgroupByCampaignIdResponse Attributes
  public $campaignAdgroups;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCampaignAdgroups($acampaignAdgroups) {
       $this->campaignAdgroups = $acampaignAdgroups;
   }

  public function addCampaignAdgroup($aCampaignAdgroup)
  {
    $wasAdded = false;
    $this->campaignAdgroups[] = $aCampaignAdgroup;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCampaignAdgroup($aCampaignAdgroup)
  {
    $wasRemoved = false;
    unset($this->campaignAdgroups[$this->indexOfCampaignAdgroup($aCampaignAdgroup)]);
    $this->campaignAdgroups = array_values($this->campaignAdgroups);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getCampaignAdgroups()
  {
    $newCampaignAdgroups = $this->campaignAdgroups;
    return $newCampaignAdgroups;
  }

  public function numberOfCampaignAdgroups()
  {
    $number = count($this->campaignAdgroups);
    return $number;
  }

  public function indexOfCampaignAdgroup($aCampaignAdgroup)
  {
    $rawAnswer = array_search($aCampaignAdgroup,$this->campaignAdgroups);
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

class GetAdgroupByAdgroupIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAdgroupByAdgroupIdRequest Attributes
  public $adgroupIds;
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

class GetAdgroupByAdgroupIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAdgroupByAdgroupIdResponse Attributes
  public $adgroupTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setAdgroupTypes($aadgroupTypes) {
       $this->adgroupTypes = $aadgroupTypes;
   }

  public function addAdgroupType($aAdgroupType)
  {
    $wasAdded = false;
    $this->adgroupTypes[] = $aAdgroupType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeAdgroupType($aAdgroupType)
  {
    $wasRemoved = false;
    unset($this->adgroupTypes[$this->indexOfAdgroupType($aAdgroupType)]);
    $this->adgroupTypes = array_values($this->adgroupTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getAdgroupTypes()
  {
    $newAdgroupTypes = $this->adgroupTypes;
    return $newAdgroupTypes;
  }

  public function numberOfAdgroupTypes()
  {
    $number = count($this->adgroupTypes);
    return $number;
  }

  public function indexOfAdgroupType($aAdgroupType)
  {
    $rawAnswer = array_search($aAdgroupType,$this->adgroupTypes);
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

class AddAdgroupRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AddAdgroupRequest Attributes
  public $adgroupTypes;
  public $extended;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setAdgroupTypes($aadgroupTypes) {
       $this->adgroupTypes = $aadgroupTypes;
   }

  public function addAdgroupType($aAdgroupType)
  {
    $wasAdded = false;
    $this->adgroupTypes[] = $aAdgroupType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeAdgroupType($aAdgroupType)
  {
    $wasRemoved = false;
    unset($this->adgroupTypes[$this->indexOfAdgroupType($aAdgroupType)]);
    $this->adgroupTypes = array_values($this->adgroupTypes);
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


  public function getAdgroupTypes()
  {
    $newAdgroupTypes = $this->adgroupTypes;
    return $newAdgroupTypes;
  }

  public function numberOfAdgroupTypes()
  {
    $number = count($this->adgroupTypes);
    return $number;
  }

  public function indexOfAdgroupType($aAdgroupType)
  {
    $rawAnswer = array_search($aAdgroupType,$this->adgroupTypes);
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

class AddAdgroupResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AddAdgroupResponse Attributes
  public $adgroupTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setAdgroupTypes($aadgroupTypes) {
       $this->adgroupTypes = $aadgroupTypes;
   }

  public function addAdgroupType($aAdgroupType)
  {
    $wasAdded = false;
    $this->adgroupTypes[] = $aAdgroupType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeAdgroupType($aAdgroupType)
  {
    $wasRemoved = false;
    unset($this->adgroupTypes[$this->indexOfAdgroupType($aAdgroupType)]);
    $this->adgroupTypes = array_values($this->adgroupTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getAdgroupTypes()
  {
    $newAdgroupTypes = $this->adgroupTypes;
    return $newAdgroupTypes;
  }

  public function numberOfAdgroupTypes()
  {
    $number = count($this->adgroupTypes);
    return $number;
  }

  public function indexOfAdgroupType($aAdgroupType)
  {
    $rawAnswer = array_search($aAdgroupType,$this->adgroupTypes);
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

class UpdateAdgroupRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UpdateAdgroupRequest Attributes
  public $adgroupTypes;
  public $extended;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setAdgroupTypes($aadgroupTypes) {
       $this->adgroupTypes = $aadgroupTypes;
   }

  public function addAdgroupType($aAdgroupType)
  {
    $wasAdded = false;
    $this->adgroupTypes[] = $aAdgroupType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeAdgroupType($aAdgroupType)
  {
    $wasRemoved = false;
    unset($this->adgroupTypes[$this->indexOfAdgroupType($aAdgroupType)]);
    $this->adgroupTypes = array_values($this->adgroupTypes);
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


  public function getAdgroupTypes()
  {
    $newAdgroupTypes = $this->adgroupTypes;
    return $newAdgroupTypes;
  }

  public function numberOfAdgroupTypes()
  {
    $number = count($this->adgroupTypes);
    return $number;
  }

  public function indexOfAdgroupType($aAdgroupType)
  {
    $rawAnswer = array_search($aAdgroupType,$this->adgroupTypes);
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

class UpdateAdgroupResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UpdateAdgroupResponse Attributes
  public $adgroupTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setAdgroupTypes($aadgroupTypes) {
       $this->adgroupTypes = $aadgroupTypes;
   }

  public function addAdgroupType($aAdgroupType)
  {
    $wasAdded = false;
    $this->adgroupTypes[] = $aAdgroupType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeAdgroupType($aAdgroupType)
  {
    $wasRemoved = false;
    unset($this->adgroupTypes[$this->indexOfAdgroupType($aAdgroupType)]);
    $this->adgroupTypes = array_values($this->adgroupTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getAdgroupTypes()
  {
    $newAdgroupTypes = $this->adgroupTypes;
    return $newAdgroupTypes;
  }

  public function numberOfAdgroupTypes()
  {
    $number = count($this->adgroupTypes);
    return $number;
  }

  public function indexOfAdgroupType($aAdgroupType)
  {
    $rawAnswer = array_search($aAdgroupType,$this->adgroupTypes);
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

class DeleteAdgroupRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //DeleteAdgroupRequest Attributes
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

class DeleteAdgroupResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //DeleteAdgroupResponse Attributes
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

class sms_v3_AdgroupService extends CommonService 
{    public function __construct() {
        parent::__construct ( 'sms', 'v3', 'AdgroupService' );
    }

  // ABSTRACT METHODS 

 public function getAdgroupIdByCampaignId ($GetAdgroupIdByCampaignIdRequest){
 return $this->execute ( 'getAdgroupIdByCampaignId', $GetAdgroupIdByCampaignIdRequest );
}
 public function getAllAdgroupId ($GetAllAdgroupIdRequest){
 return $this->execute ( 'getAllAdgroupId', $GetAllAdgroupIdRequest );
}
 public function getAdgroupByCampaignId ($GetAdgroupByCampaignIdRequest){
 return $this->execute ( 'getAdgroupByCampaignId', $GetAdgroupByCampaignIdRequest );
}
 public function getAdgroupByAdgroupId ($GetAdgroupByAdgroupIdRequest){
 return $this->execute ( 'getAdgroupByAdgroupId', $GetAdgroupByAdgroupIdRequest );
}
 public function addAdgroup ($AddAdgroupRequest){
 return $this->execute ( 'addAdgroup', $AddAdgroupRequest );
}
 public function updateAdgroup ($UpdateAdgroupRequest){
 return $this->execute ( 'updateAdgroup', $UpdateAdgroupRequest );
}
 public function deleteAdgroup ($DeleteAdgroupRequest){
 return $this->execute ( 'deleteAdgroup', $DeleteAdgroupRequest );
}
  
}


?>