<?php
require_once 'CommonService.php';

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class BidInsightFileInfo
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //BidInsightFileInfo Attributes
  public $fileURL;
  public $md5;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setFileURL($aFileURL)
  {
    $wasSet = false;
    $this->fileURL = $aFileURL;
    $wasSet = true;
    return $wasSet;
  }

  public function setMd5($aMd5)
  {
    $wasSet = false;
    $this->md5 = $aMd5;
    $wasSet = true;
    return $wasSet;
  }

  public function getFileURL()
  {
    return $this->fileURL;
  }

  public function getMd5()
  {
    return $this->md5;
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

class GetInsightFileInfoRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetInsightFileInfoRequest Attributes
  public $date;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setDate($aDate)
  {
    $wasSet = false;
    $this->date = $aDate;
    $wasSet = true;
    return $wasSet;
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

class GetInsightFileInfoResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetInsightFileInfoResponse Attributes
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

class sms_v3_InsightService extends CommonService 
{    public function __construct() {
        parent::__construct ( 'sms', 'v3', 'InsightService' );
    }

  // ABSTRACT METHODS 

 public function getBidInsightFileInfo ($GetInsightFileInfoRequest){
 return $this->execute ( 'getBidInsightFileInfo', $GetInsightFileInfoRequest );
}
  
}


?>