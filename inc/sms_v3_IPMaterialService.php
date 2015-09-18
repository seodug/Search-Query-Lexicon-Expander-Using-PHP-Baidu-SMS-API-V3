<?php
require_once 'CommonService.php';

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class IPBindDTO
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //IPBindDTO Attributes
  public $bindId;
  public $targetId;
  public $targetType;
  public $isPause;
  public $isDel;
  public $planid;
  public $planname;
  public $unitid;
  public $unitname;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setBindId($aBindId)
  {
    $wasSet = false;
    $this->bindId = $aBindId;
    $wasSet = true;
    return $wasSet;
  }

  public function setTargetId($aTargetId)
  {
    $wasSet = false;
    $this->targetId = $aTargetId;
    $wasSet = true;
    return $wasSet;
  }

  public function setTargetType($aTargetType)
  {
    $wasSet = false;
    $this->targetType = $aTargetType;
    $wasSet = true;
    return $wasSet;
  }

  public function setIsPause($aIsPause)
  {
    $wasSet = false;
    $this->isPause = $aIsPause;
    $wasSet = true;
    return $wasSet;
  }

  public function setIsDel($aIsDel)
  {
    $wasSet = false;
    $this->isDel = $aIsDel;
    $wasSet = true;
    return $wasSet;
  }

  public function setPlanid($aPlanid)
  {
    $wasSet = false;
    $this->planid = $aPlanid;
    $wasSet = true;
    return $wasSet;
  }

  public function setPlanname($aPlanname)
  {
    $wasSet = false;
    $this->planname = $aPlanname;
    $wasSet = true;
    return $wasSet;
  }

  public function setUnitid($aUnitid)
  {
    $wasSet = false;
    $this->unitid = $aUnitid;
    $wasSet = true;
    return $wasSet;
  }

  public function setUnitname($aUnitname)
  {
    $wasSet = false;
    $this->unitname = $aUnitname;
    $wasSet = true;
    return $wasSet;
  }

  public function getBindId()
  {
    return $this->bindId;
  }

  public function getTargetId()
  {
    return $this->targetId;
  }

  public function getTargetType()
  {
    return $this->targetType;
  }

  public function getIsPause()
  {
    return $this->isPause;
  }

  public function getIsDel()
  {
    return $this->isDel;
  }

  public function getPlanid()
  {
    return $this->planid;
  }

  public function getPlanname()
  {
    return $this->planname;
  }

  public function getUnitid()
  {
    return $this->unitid;
  }

  public function getUnitname()
  {
    return $this->unitname;
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

class IPMaterialDTO
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //IPMaterialDTO Attributes
  public $materialId;
  public $bindId;
  public $materialType;
  public $materialName;
  public $status;
  public $reasonId;
  public $reasonText;
  public $planid;
  public $planname;
  public $unitid;
  public $unitname;
  public $materialContent;
  public $auditContent;
  public $isPause;
  public $isDel;
  public $auditStatus;
  public $bind;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setMaterialId($aMaterialId)
  {
    $wasSet = false;
    $this->materialId = $aMaterialId;
    $wasSet = true;
    return $wasSet;
  }

  public function setBindId($aBindId)
  {
    $wasSet = false;
    $this->bindId = $aBindId;
    $wasSet = true;
    return $wasSet;
  }

  public function setMaterialType($aMaterialType)
  {
    $wasSet = false;
    $this->materialType = $aMaterialType;
    $wasSet = true;
    return $wasSet;
  }

  public function setMaterialName($aMaterialName)
  {
    $wasSet = false;
    $this->materialName = $aMaterialName;
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

  public function setReasonId($aReasonId)
  {
    $wasSet = false;
    $this->reasonId = $aReasonId;
    $wasSet = true;
    return $wasSet;
  }

  public function setReasonText($aReasonText)
  {
    $wasSet = false;
    $this->reasonText = $aReasonText;
    $wasSet = true;
    return $wasSet;
  }

  public function setPlanid($aPlanid)
  {
    $wasSet = false;
    $this->planid = $aPlanid;
    $wasSet = true;
    return $wasSet;
  }

  public function setPlanname($aPlanname)
  {
    $wasSet = false;
    $this->planname = $aPlanname;
    $wasSet = true;
    return $wasSet;
  }

  public function setUnitid($aUnitid)
  {
    $wasSet = false;
    $this->unitid = $aUnitid;
    $wasSet = true;
    return $wasSet;
  }

  public function setUnitname($aUnitname)
  {
    $wasSet = false;
    $this->unitname = $aUnitname;
    $wasSet = true;
    return $wasSet;
  }

  public function setMaterialContent($aMaterialContent)
  {
    $wasSet = false;
    $this->materialContent = $aMaterialContent;
    $wasSet = true;
    return $wasSet;
  }

  public function setAuditContent($aAuditContent)
  {
    $wasSet = false;
    $this->auditContent = $aAuditContent;
    $wasSet = true;
    return $wasSet;
  }

  public function setIsPause($aIsPause)
  {
    $wasSet = false;
    $this->isPause = $aIsPause;
    $wasSet = true;
    return $wasSet;
  }

  public function setIsDel($aIsDel)
  {
    $wasSet = false;
    $this->isDel = $aIsDel;
    $wasSet = true;
    return $wasSet;
  }

  public function setAuditStatus($aAuditStatus)
  {
    $wasSet = false;
    $this->auditStatus = $aAuditStatus;
    $wasSet = true;
    return $wasSet;
  }
   public function setBind($abind) {
       $this->bind = $abind;
   }

  public function addBind($aBind)
  {
    $wasAdded = false;
    $this->bind[] = $aBind;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeBind($aBind)
  {
    $wasRemoved = false;
    unset($this->bind[$this->indexOfBind($aBind)]);
    $this->bind = array_values($this->bind);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getMaterialId()
  {
    return $this->materialId;
  }

  public function getBindId()
  {
    return $this->bindId;
  }

  public function getMaterialType()
  {
    return $this->materialType;
  }

  public function getMaterialName()
  {
    return $this->materialName;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function getReasonId()
  {
    return $this->reasonId;
  }

  public function getReasonText()
  {
    return $this->reasonText;
  }

  public function getPlanid()
  {
    return $this->planid;
  }

  public function getPlanname()
  {
    return $this->planname;
  }

  public function getUnitid()
  {
    return $this->unitid;
  }

  public function getUnitname()
  {
    return $this->unitname;
  }

  public function getMaterialContent()
  {
    return $this->materialContent;
  }

  public function getAuditContent()
  {
    return $this->auditContent;
  }

  public function getIsPause()
  {
    return $this->isPause;
  }

  public function getIsDel()
  {
    return $this->isDel;
  }

  public function getAuditStatus()
  {
    return $this->auditStatus;
  }


  public function getBind()
  {
    $newBind = $this->bind;
    return $newBind;
  }

  public function numberOfBind()
  {
    $number = count($this->bind);
    return $number;
  }

  public function indexOfBind($aBind)
  {
    $rawAnswer = array_search($aBind,$this->bind);
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

class IPMaterialQueryResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //IPMaterialQueryResponse Attributes
  public $data;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setData($adata) {
       $this->data = $adata;
   }

  public function addData($aData)
  {
    $wasAdded = false;
    $this->data[] = $aData;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeData($aData)
  {
    $wasRemoved = false;
    unset($this->data[$this->indexOfData($aData)]);
    $this->data = array_values($this->data);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getData()
  {
    $newData = $this->data;
    return $newData;
  }

  public function numberOfData()
  {
    $number = count($this->data);
    return $number;
  }

  public function indexOfData($aData)
  {
    $rawAnswer = array_search($aData,$this->data);
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

class IPMaterialQueryRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //IPMaterialQueryRequest Attributes
  public $materialType;
  public $materialIds;
  public $isDel;
  public $nameLike;
  public $targetType;
  public $targetIds;
  public $offset;
  public $num;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setMaterialType($aMaterialType)
  {
    $wasSet = false;
    $this->materialType = $aMaterialType;
    $wasSet = true;
    return $wasSet;
  }
   public function setMaterialIds($amaterialIds) {
       $this->materialIds = $amaterialIds;
   }

  public function addMaterialId($aMaterialId)
  {
    $wasAdded = false;
    $this->materialIds[] = $aMaterialId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeMaterialId($aMaterialId)
  {
    $wasRemoved = false;
    unset($this->materialIds[$this->indexOfMaterialId($aMaterialId)]);
    $this->materialIds = array_values($this->materialIds);
    $wasRemoved = true;
    return $wasRemoved;
  }
   public function setIsDel($aisDel) {
       $this->isDel = $aisDel;
   }

  public function addIsDel($aIsDel)
  {
    $wasAdded = false;
    $this->isDel[] = $aIsDel;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeIsDel($aIsDel)
  {
    $wasRemoved = false;
    unset($this->isDel[$this->indexOfIsDel($aIsDel)]);
    $this->isDel = array_values($this->isDel);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setNameLike($aNameLike)
  {
    $wasSet = false;
    $this->nameLike = $aNameLike;
    $wasSet = true;
    return $wasSet;
  }

  public function setTargetType($aTargetType)
  {
    $wasSet = false;
    $this->targetType = $aTargetType;
    $wasSet = true;
    return $wasSet;
  }
   public function setTargetIds($atargetIds) {
       $this->targetIds = $atargetIds;
   }

  public function addTargetId($aTargetId)
  {
    $wasAdded = false;
    $this->targetIds[] = $aTargetId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeTargetId($aTargetId)
  {
    $wasRemoved = false;
    unset($this->targetIds[$this->indexOfTargetId($aTargetId)]);
    $this->targetIds = array_values($this->targetIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setOffset($aOffset)
  {
    $wasSet = false;
    $this->offset = $aOffset;
    $wasSet = true;
    return $wasSet;
  }

  public function setNum($aNum)
  {
    $wasSet = false;
    $this->num = $aNum;
    $wasSet = true;
    return $wasSet;
  }

  public function getMaterialType()
  {
    return $this->materialType;
  }


  public function getMaterialIds()
  {
    $newMaterialIds = $this->materialIds;
    return $newMaterialIds;
  }

  public function numberOfMaterialIds()
  {
    $number = count($this->materialIds);
    return $number;
  }

  public function indexOfMaterialId($aMaterialId)
  {
    $rawAnswer = array_search($aMaterialId,$this->materialIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }


  public function getIsDel()
  {
    $newIsDel = $this->isDel;
    return $newIsDel;
  }

  public function numberOfIsDel()
  {
    $number = count($this->isDel);
    return $number;
  }

  public function indexOfIsDel($aIsDel)
  {
    $rawAnswer = array_search($aIsDel,$this->isDel);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getNameLike()
  {
    return $this->nameLike;
  }

  public function getTargetType()
  {
    return $this->targetType;
  }


  public function getTargetIds()
  {
    $newTargetIds = $this->targetIds;
    return $newTargetIds;
  }

  public function numberOfTargetIds()
  {
    $number = count($this->targetIds);
    return $number;
  }

  public function indexOfTargetId($aTargetId)
  {
    $rawAnswer = array_search($aTargetId,$this->targetIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getOffset()
  {
    return $this->offset;
  }

  public function getNum()
  {
    return $this->num;
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

class sms_v3_IPMaterialService extends CommonService 
{    public function __construct() {
        parent::__construct ( 'sms', 'v3', 'IPMaterialService' );
    }

  // ABSTRACT METHODS 

 public function getIPMaterial ($IPMaterialQueryRequest){
 return $this->execute ( 'getIPMaterial', $IPMaterialQueryRequest );
}
  
}


?>