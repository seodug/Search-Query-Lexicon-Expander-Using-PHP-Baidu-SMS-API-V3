<?php
require_once 'CommonService.php';

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class ExclusionType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //ExclusionType Attributes
  public $exclusionId;
  public $exclusionContent;
  public $exclusionType;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setExclusionId($aExclusionId)
  {
    $wasSet = false;
    $this->exclusionId = $aExclusionId;
    $wasSet = true;
    return $wasSet;
  }

  public function setExclusionContent($aExclusionContent)
  {
    $wasSet = false;
    $this->exclusionContent = $aExclusionContent;
    $wasSet = true;
    return $wasSet;
  }

  public function setExclusionType($aExclusionType)
  {
    $wasSet = false;
    $this->exclusionType = $aExclusionType;
    $wasSet = true;
    return $wasSet;
  }

  public function getExclusionId()
  {
    return $this->exclusionId;
  }

  public function getExclusionContent()
  {
    return $this->exclusionContent;
  }

  public function getExclusionType()
  {
    return $this->exclusionType;
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

class DynCreativeExclusionType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //DynCreativeExclusionType Attributes
  public $exclusionTypes;
  public $campaignId;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setExclusionTypes($aexclusionTypes) {
       $this->exclusionTypes = $aexclusionTypes;
   }

  public function addExclusionType($aExclusionType)
  {
    $wasAdded = false;
    $this->exclusionTypes[] = $aExclusionType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeExclusionType($aExclusionType)
  {
    $wasRemoved = false;
    unset($this->exclusionTypes[$this->indexOfExclusionType($aExclusionType)]);
    $this->exclusionTypes = array_values($this->exclusionTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setCampaignId($aCampaignId)
  {
    $wasSet = false;
    $this->campaignId = $aCampaignId;
    $wasSet = true;
    return $wasSet;
  }


  public function getExclusionTypes()
  {
    $newExclusionTypes = $this->exclusionTypes;
    return $newExclusionTypes;
  }

  public function numberOfExclusionTypes()
  {
    $number = count($this->exclusionTypes);
    return $number;
  }

  public function indexOfExclusionType($aExclusionType)
  {
    $rawAnswer = array_search($aExclusionType,$this->exclusionTypes);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
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

class GetExclusionTypeByCampaignIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetExclusionTypeByCampaignIdRequest Attributes
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

class GetExclusionTypeByCampaignIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetExclusionTypeByCampaignIdResponse Attributes
  public $dynCreativeExclusionTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setDynCreativeExclusionTypes($adynCreativeExclusionTypes) {
       $this->dynCreativeExclusionTypes = $adynCreativeExclusionTypes;
   }

  public function addDynCreativeExclusionType($aDynCreativeExclusionType)
  {
    $wasAdded = false;
    $this->dynCreativeExclusionTypes[] = $aDynCreativeExclusionType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeDynCreativeExclusionType($aDynCreativeExclusionType)
  {
    $wasRemoved = false;
    unset($this->dynCreativeExclusionTypes[$this->indexOfDynCreativeExclusionType($aDynCreativeExclusionType)]);
    $this->dynCreativeExclusionTypes = array_values($this->dynCreativeExclusionTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getDynCreativeExclusionTypes()
  {
    $newDynCreativeExclusionTypes = $this->dynCreativeExclusionTypes;
    return $newDynCreativeExclusionTypes;
  }

  public function numberOfDynCreativeExclusionTypes()
  {
    $number = count($this->dynCreativeExclusionTypes);
    return $number;
  }

  public function indexOfDynCreativeExclusionType($aDynCreativeExclusionType)
  {
    $rawAnswer = array_search($aDynCreativeExclusionType,$this->dynCreativeExclusionTypes);
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

class AddExclusionTypeRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AddExclusionTypeRequest Attributes
  public $dynCreativeExclusionTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setDynCreativeExclusionTypes($adynCreativeExclusionTypes) {
       $this->dynCreativeExclusionTypes = $adynCreativeExclusionTypes;
   }

  public function addDynCreativeExclusionType($aDynCreativeExclusionType)
  {
    $wasAdded = false;
    $this->dynCreativeExclusionTypes[] = $aDynCreativeExclusionType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeDynCreativeExclusionType($aDynCreativeExclusionType)
  {
    $wasRemoved = false;
    unset($this->dynCreativeExclusionTypes[$this->indexOfDynCreativeExclusionType($aDynCreativeExclusionType)]);
    $this->dynCreativeExclusionTypes = array_values($this->dynCreativeExclusionTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getDynCreativeExclusionTypes()
  {
    $newDynCreativeExclusionTypes = $this->dynCreativeExclusionTypes;
    return $newDynCreativeExclusionTypes;
  }

  public function numberOfDynCreativeExclusionTypes()
  {
    $number = count($this->dynCreativeExclusionTypes);
    return $number;
  }

  public function indexOfDynCreativeExclusionType($aDynCreativeExclusionType)
  {
    $rawAnswer = array_search($aDynCreativeExclusionType,$this->dynCreativeExclusionTypes);
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

class AddExclusionTypeResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AddExclusionTypeResponse Attributes
  public $dynCreativeExclusionTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setDynCreativeExclusionTypes($adynCreativeExclusionTypes) {
       $this->dynCreativeExclusionTypes = $adynCreativeExclusionTypes;
   }

  public function addDynCreativeExclusionType($aDynCreativeExclusionType)
  {
    $wasAdded = false;
    $this->dynCreativeExclusionTypes[] = $aDynCreativeExclusionType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeDynCreativeExclusionType($aDynCreativeExclusionType)
  {
    $wasRemoved = false;
    unset($this->dynCreativeExclusionTypes[$this->indexOfDynCreativeExclusionType($aDynCreativeExclusionType)]);
    $this->dynCreativeExclusionTypes = array_values($this->dynCreativeExclusionTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getDynCreativeExclusionTypes()
  {
    $newDynCreativeExclusionTypes = $this->dynCreativeExclusionTypes;
    return $newDynCreativeExclusionTypes;
  }

  public function numberOfDynCreativeExclusionTypes()
  {
    $number = count($this->dynCreativeExclusionTypes);
    return $number;
  }

  public function indexOfDynCreativeExclusionType($aDynCreativeExclusionType)
  {
    $rawAnswer = array_search($aDynCreativeExclusionType,$this->dynCreativeExclusionTypes);
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

class DelExclusionTypeRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //DelExclusionTypeRequest Attributes
  public $dynCreativeExclusionTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setDynCreativeExclusionTypes($adynCreativeExclusionTypes) {
       $this->dynCreativeExclusionTypes = $adynCreativeExclusionTypes;
   }

  public function addDynCreativeExclusionType($aDynCreativeExclusionType)
  {
    $wasAdded = false;
    $this->dynCreativeExclusionTypes[] = $aDynCreativeExclusionType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeDynCreativeExclusionType($aDynCreativeExclusionType)
  {
    $wasRemoved = false;
    unset($this->dynCreativeExclusionTypes[$this->indexOfDynCreativeExclusionType($aDynCreativeExclusionType)]);
    $this->dynCreativeExclusionTypes = array_values($this->dynCreativeExclusionTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getDynCreativeExclusionTypes()
  {
    $newDynCreativeExclusionTypes = $this->dynCreativeExclusionTypes;
    return $newDynCreativeExclusionTypes;
  }

  public function numberOfDynCreativeExclusionTypes()
  {
    $number = count($this->dynCreativeExclusionTypes);
    return $number;
  }

  public function indexOfDynCreativeExclusionType($aDynCreativeExclusionType)
  {
    $rawAnswer = array_search($aDynCreativeExclusionType,$this->dynCreativeExclusionTypes);
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

class DelExclusionTypeResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //DelExclusionTypeResponse Attributes
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

class sms_v3_DynamicCreativeService extends CommonService 
{    public function __construct() {
        parent::__construct ( 'sms', 'v3', 'DynamicCreativeService' );
    }

  // ABSTRACT METHODS 

 public function getExclusionTypeByCampaignId ($GetExclusionTypeByCampaignIdRequest){
 return $this->execute ( 'getExclusionTypeByCampaignId', $GetExclusionTypeByCampaignIdRequest );
}
 public function addExclusionType ($AddExclusionTypeRequest){
 return $this->execute ( 'addExclusionType', $AddExclusionTypeRequest );
}
 public function delExclusionType ($DelExclusionTypeRequest){
 return $this->execute ( 'delExclusionType', $DelExclusionTypeRequest );
}
  
}


?>