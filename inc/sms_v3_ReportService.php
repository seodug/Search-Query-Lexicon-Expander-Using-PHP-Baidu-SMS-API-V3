<?php
require_once 'CommonService.php';

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class AttributeType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AttributeType Attributes
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
   public function setValue($avalue) {
       $this->value = $avalue;
   }

  public function addValue($aValue)
  {
    $wasAdded = false;
    $this->value[] = $aValue;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeValue($aValue)
  {
    $wasRemoved = false;
    unset($this->value[$this->indexOfValue($aValue)]);
    $this->value = array_values($this->value);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getKey()
  {
    return $this->key;
  }


  public function getValue()
  {
    $newValue = $this->value;
    return $newValue;
  }

  public function numberOfValue()
  {
    $number = count($this->value);
    return $number;
  }

  public function indexOfValue($aValue)
  {
    $rawAnswer = array_search($aValue,$this->value);
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

class RealTimeRequestType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //RealTimeRequestType Attributes
  public $performanceData;
  public $order;
  public $startDate;
  public $endDate;
  public $levelOfDetails;
  public $attributes;
  public $reportType;
  public $statIds;
  public $statRange;
  public $unitOfTime;
  public $number;
  public $device;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setPerformanceData($aperformanceData) {
       $this->performanceData = $aperformanceData;
   }

  public function addPerformanceData($aPerformanceData)
  {
    $wasAdded = false;
    $this->performanceData[] = $aPerformanceData;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removePerformanceData($aPerformanceData)
  {
    $wasRemoved = false;
    unset($this->performanceData[$this->indexOfPerformanceData($aPerformanceData)]);
    $this->performanceData = array_values($this->performanceData);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setOrder($aOrder)
  {
    $wasSet = false;
    $this->order = $aOrder;
    $wasSet = true;
    return $wasSet;
  }

  public function setStartDate($aStartDate)
  {
    $wasSet = false;
    $this->startDate = $aStartDate;
    $wasSet = true;
    return $wasSet;
  }

  public function setEndDate($aEndDate)
  {
    $wasSet = false;
    $this->endDate = $aEndDate;
    $wasSet = true;
    return $wasSet;
  }

  public function setLevelOfDetails($aLevelOfDetails)
  {
    $wasSet = false;
    $this->levelOfDetails = $aLevelOfDetails;
    $wasSet = true;
    return $wasSet;
  }
   public function setAttributes($aattributes) {
       $this->attributes = $aattributes;
   }

  public function addAttribute($aAttribute)
  {
    $wasAdded = false;
    $this->attributes[] = $aAttribute;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeAttribute($aAttribute)
  {
    $wasRemoved = false;
    unset($this->attributes[$this->indexOfAttribute($aAttribute)]);
    $this->attributes = array_values($this->attributes);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setReportType($aReportType)
  {
    $wasSet = false;
    $this->reportType = $aReportType;
    $wasSet = true;
    return $wasSet;
  }
   public function setStatIds($astatIds) {
       $this->statIds = $astatIds;
   }

  public function addStatId($aStatId)
  {
    $wasAdded = false;
    $this->statIds[] = $aStatId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeStatId($aStatId)
  {
    $wasRemoved = false;
    unset($this->statIds[$this->indexOfStatId($aStatId)]);
    $this->statIds = array_values($this->statIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setStatRange($aStatRange)
  {
    $wasSet = false;
    $this->statRange = $aStatRange;
    $wasSet = true;
    return $wasSet;
  }

  public function setUnitOfTime($aUnitOfTime)
  {
    $wasSet = false;
    $this->unitOfTime = $aUnitOfTime;
    $wasSet = true;
    return $wasSet;
  }

  public function setNumber($aNumber)
  {
    $wasSet = false;
    $this->number = $aNumber;
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


  public function getPerformanceData()
  {
    $newPerformanceData = $this->performanceData;
    return $newPerformanceData;
  }

  public function numberOfPerformanceData()
  {
    $number = count($this->performanceData);
    return $number;
  }

  public function indexOfPerformanceData($aPerformanceData)
  {
    $rawAnswer = array_search($aPerformanceData,$this->performanceData);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getOrder()
  {
    return $this->order;
  }

  public function getStartDate()
  {
    return $this->startDate;
  }

  public function getEndDate()
  {
    return $this->endDate;
  }

  public function getLevelOfDetails()
  {
    return $this->levelOfDetails;
  }


  public function getAttributes()
  {
    $newAttributes = $this->attributes;
    return $newAttributes;
  }

  public function numberOfAttributes()
  {
    $number = count($this->attributes);
    return $number;
  }

  public function indexOfAttribute($aAttribute)
  {
    $rawAnswer = array_search($aAttribute,$this->attributes);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getReportType()
  {
    return $this->reportType;
  }


  public function getStatIds()
  {
    $newStatIds = $this->statIds;
    return $newStatIds;
  }

  public function numberOfStatIds()
  {
    $number = count($this->statIds);
    return $number;
  }

  public function indexOfStatId($aStatId)
  {
    $rawAnswer = array_search($aStatId,$this->statIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getStatRange()
  {
    return $this->statRange;
  }

  public function getUnitOfTime()
  {
    return $this->unitOfTime;
  }

  public function getNumber()
  {
    return $this->number;
  }

  public function getDevice()
  {
    return $this->device;
  }

  public function isOrder()
  {
    return $this->order;
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

class RealTimeQueryRequestType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //RealTimeQueryRequestType Attributes
  public $performanceData;
  public $startDate;
  public $endDate;
  public $levelOfDetails;
  public $attributes;
  public $reportType;
  public $statIds;
  public $statRange;
  public $unitOfTime;
  public $number;
  public $device;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setPerformanceData($aperformanceData) {
       $this->performanceData = $aperformanceData;
   }

  public function addPerformanceData($aPerformanceData)
  {
    $wasAdded = false;
    $this->performanceData[] = $aPerformanceData;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removePerformanceData($aPerformanceData)
  {
    $wasRemoved = false;
    unset($this->performanceData[$this->indexOfPerformanceData($aPerformanceData)]);
    $this->performanceData = array_values($this->performanceData);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setStartDate($aStartDate)
  {
    $wasSet = false;
    $this->startDate = $aStartDate;
    $wasSet = true;
    return $wasSet;
  }

  public function setEndDate($aEndDate)
  {
    $wasSet = false;
    $this->endDate = $aEndDate;
    $wasSet = true;
    return $wasSet;
  }

  public function setLevelOfDetails($aLevelOfDetails)
  {
    $wasSet = false;
    $this->levelOfDetails = $aLevelOfDetails;
    $wasSet = true;
    return $wasSet;
  }
   public function setAttributes($aattributes) {
       $this->attributes = $aattributes;
   }

  public function addAttribute($aAttribute)
  {
    $wasAdded = false;
    $this->attributes[] = $aAttribute;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeAttribute($aAttribute)
  {
    $wasRemoved = false;
    unset($this->attributes[$this->indexOfAttribute($aAttribute)]);
    $this->attributes = array_values($this->attributes);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setReportType($aReportType)
  {
    $wasSet = false;
    $this->reportType = $aReportType;
    $wasSet = true;
    return $wasSet;
  }
   public function setStatIds($astatIds) {
       $this->statIds = $astatIds;
   }

  public function addStatId($aStatId)
  {
    $wasAdded = false;
    $this->statIds[] = $aStatId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeStatId($aStatId)
  {
    $wasRemoved = false;
    unset($this->statIds[$this->indexOfStatId($aStatId)]);
    $this->statIds = array_values($this->statIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setStatRange($aStatRange)
  {
    $wasSet = false;
    $this->statRange = $aStatRange;
    $wasSet = true;
    return $wasSet;
  }

  public function setUnitOfTime($aUnitOfTime)
  {
    $wasSet = false;
    $this->unitOfTime = $aUnitOfTime;
    $wasSet = true;
    return $wasSet;
  }

  public function setNumber($aNumber)
  {
    $wasSet = false;
    $this->number = $aNumber;
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


  public function getPerformanceData()
  {
    $newPerformanceData = $this->performanceData;
    return $newPerformanceData;
  }

  public function numberOfPerformanceData()
  {
    $number = count($this->performanceData);
    return $number;
  }

  public function indexOfPerformanceData($aPerformanceData)
  {
    $rawAnswer = array_search($aPerformanceData,$this->performanceData);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getStartDate()
  {
    return $this->startDate;
  }

  public function getEndDate()
  {
    return $this->endDate;
  }

  public function getLevelOfDetails()
  {
    return $this->levelOfDetails;
  }


  public function getAttributes()
  {
    $newAttributes = $this->attributes;
    return $newAttributes;
  }

  public function numberOfAttributes()
  {
    $number = count($this->attributes);
    return $number;
  }

  public function indexOfAttribute($aAttribute)
  {
    $rawAnswer = array_search($aAttribute,$this->attributes);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getReportType()
  {
    return $this->reportType;
  }


  public function getStatIds()
  {
    $newStatIds = $this->statIds;
    return $newStatIds;
  }

  public function numberOfStatIds()
  {
    $number = count($this->statIds);
    return $number;
  }

  public function indexOfStatId($aStatId)
  {
    $rawAnswer = array_search($aStatId,$this->statIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getStatRange()
  {
    return $this->statRange;
  }

  public function getUnitOfTime()
  {
    return $this->unitOfTime;
  }

  public function getNumber()
  {
    return $this->number;
  }

  public function getDevice()
  {
    return $this->device;
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

class RealTimeResultType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //RealTimeResultType Attributes
  public $ID;
  public $name;
  public $date;
  public $KPIs;
  public $relatedId;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setID($aID)
  {
    $wasSet = false;
    $this->ID = $aID;
    $wasSet = true;
    return $wasSet;
  }
   public function setName($aname) {
       $this->name = $aname;
   }

  public function addName($aName)
  {
    $wasAdded = false;
    $this->name[] = $aName;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeName($aName)
  {
    $wasRemoved = false;
    unset($this->name[$this->indexOfName($aName)]);
    $this->name = array_values($this->name);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setDate($aDate)
  {
    $wasSet = false;
    $this->date = $aDate;
    $wasSet = true;
    return $wasSet;
  }
   public function setKPIs($aKPIs) {
       $this->KPIs = $aKPIs;
   }

  public function addKPI($aKPI)
  {
    $wasAdded = false;
    $this->KPIs[] = $aKPI;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKPI($aKPI)
  {
    $wasRemoved = false;
    unset($this->KPIs[$this->indexOfKPI($aKPI)]);
    $this->KPIs = array_values($this->KPIs);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setRelatedId($aRelatedId)
  {
    $wasSet = false;
    $this->relatedId = $aRelatedId;
    $wasSet = true;
    return $wasSet;
  }

  public function getID()
  {
    return $this->ID;
  }


  public function getName()
  {
    $newName = $this->name;
    return $newName;
  }

  public function numberOfName()
  {
    $number = count($this->name);
    return $number;
  }

  public function indexOfName($aName)
  {
    $rawAnswer = array_search($aName,$this->name);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getDate()
  {
    return $this->date;
  }


  public function getKPIs()
  {
    $newKPIs = $this->KPIs;
    return $newKPIs;
  }

  public function numberOfKPIs()
  {
    $number = count($this->KPIs);
    return $number;
  }

  public function indexOfKPI($aKPI)
  {
    $rawAnswer = array_search($aKPI,$this->KPIs);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getRelatedId()
  {
    return $this->relatedId;
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

class RealTimeQueryResultType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //RealTimeQueryResultType Attributes
  public $query;
  public $keywordId;
  public $creativeId;
  public $queryInfo;
  public $date;
  public $KPIs;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setQuery($aQuery)
  {
    $wasSet = false;
    $this->query = $aQuery;
    $wasSet = true;
    return $wasSet;
  }

  public function setKeywordId($aKeywordId)
  {
    $wasSet = false;
    $this->keywordId = $aKeywordId;
    $wasSet = true;
    return $wasSet;
  }

  public function setCreativeId($aCreativeId)
  {
    $wasSet = false;
    $this->creativeId = $aCreativeId;
    $wasSet = true;
    return $wasSet;
  }
   public function setQueryInfo($aqueryInfo) {
       $this->queryInfo = $aqueryInfo;
   }

  public function addQueryInfo($aQueryInfo)
  {
    $wasAdded = false;
    $this->queryInfo[] = $aQueryInfo;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeQueryInfo($aQueryInfo)
  {
    $wasRemoved = false;
    unset($this->queryInfo[$this->indexOfQueryInfo($aQueryInfo)]);
    $this->queryInfo = array_values($this->queryInfo);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setDate($aDate)
  {
    $wasSet = false;
    $this->date = $aDate;
    $wasSet = true;
    return $wasSet;
  }
   public function setKPIs($aKPIs) {
       $this->KPIs = $aKPIs;
   }

  public function addKPI($aKPI)
  {
    $wasAdded = false;
    $this->KPIs[] = $aKPI;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKPI($aKPI)
  {
    $wasRemoved = false;
    unset($this->KPIs[$this->indexOfKPI($aKPI)]);
    $this->KPIs = array_values($this->KPIs);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getQuery()
  {
    return $this->query;
  }

  public function getKeywordId()
  {
    return $this->keywordId;
  }

  public function getCreativeId()
  {
    return $this->creativeId;
  }


  public function getQueryInfo()
  {
    $newQueryInfo = $this->queryInfo;
    return $newQueryInfo;
  }

  public function numberOfQueryInfo()
  {
    $number = count($this->queryInfo);
    return $number;
  }

  public function indexOfQueryInfo($aQueryInfo)
  {
    $rawAnswer = array_search($aQueryInfo,$this->queryInfo);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getDate()
  {
    return $this->date;
  }


  public function getKPIs()
  {
    $newKPIs = $this->KPIs;
    return $newKPIs;
  }

  public function numberOfKPIs()
  {
    $number = count($this->KPIs);
    return $number;
  }

  public function indexOfKPI($aKPI)
  {
    $rawAnswer = array_search($aKPI,$this->KPIs);
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

class RealTimePairResultType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //RealTimePairResultType Attributes
  public $keywordId;
  public $creativeId;
  public $pairInfo;
  public $date;
  public $KPIs;

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

  public function setCreativeId($aCreativeId)
  {
    $wasSet = false;
    $this->creativeId = $aCreativeId;
    $wasSet = true;
    return $wasSet;
  }
   public function setPairInfo($apairInfo) {
       $this->pairInfo = $apairInfo;
   }

  public function addPairInfo($aPairInfo)
  {
    $wasAdded = false;
    $this->pairInfo[] = $aPairInfo;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removePairInfo($aPairInfo)
  {
    $wasRemoved = false;
    unset($this->pairInfo[$this->indexOfPairInfo($aPairInfo)]);
    $this->pairInfo = array_values($this->pairInfo);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setDate($aDate)
  {
    $wasSet = false;
    $this->date = $aDate;
    $wasSet = true;
    return $wasSet;
  }
   public function setKPIs($aKPIs) {
       $this->KPIs = $aKPIs;
   }

  public function addKPI($aKPI)
  {
    $wasAdded = false;
    $this->KPIs[] = $aKPI;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKPI($aKPI)
  {
    $wasRemoved = false;
    unset($this->KPIs[$this->indexOfKPI($aKPI)]);
    $this->KPIs = array_values($this->KPIs);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getKeywordId()
  {
    return $this->keywordId;
  }

  public function getCreativeId()
  {
    return $this->creativeId;
  }


  public function getPairInfo()
  {
    $newPairInfo = $this->pairInfo;
    return $newPairInfo;
  }

  public function numberOfPairInfo()
  {
    $number = count($this->pairInfo);
    return $number;
  }

  public function indexOfPairInfo($aPairInfo)
  {
    $rawAnswer = array_search($aPairInfo,$this->pairInfo);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getDate()
  {
    return $this->date;
  }


  public function getKPIs()
  {
    $newKPIs = $this->KPIs;
    return $newKPIs;
  }

  public function numberOfKPIs()
  {
    $number = count($this->KPIs);
    return $number;
  }

  public function indexOfKPI($aKPI)
  {
    $rawAnswer = array_search($aKPI,$this->KPIs);
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

class ReportRequestType
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //ReportRequestType Attributes
  public $performanceData;
  public $startDate;
  public $endDate;
  public $idOnly;
  public $levelOfDetails;
  public $attributes;
  public $format;
  public $reportType;
  public $statIds;
  public $statRange;
  public $unitOfTime;
  public $device;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setPerformanceData($aperformanceData) {
       $this->performanceData = $aperformanceData;
   }

  public function addPerformanceData($aPerformanceData)
  {
    $wasAdded = false;
    $this->performanceData[] = $aPerformanceData;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removePerformanceData($aPerformanceData)
  {
    $wasRemoved = false;
    unset($this->performanceData[$this->indexOfPerformanceData($aPerformanceData)]);
    $this->performanceData = array_values($this->performanceData);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setStartDate($aStartDate)
  {
    $wasSet = false;
    $this->startDate = $aStartDate;
    $wasSet = true;
    return $wasSet;
  }

  public function setEndDate($aEndDate)
  {
    $wasSet = false;
    $this->endDate = $aEndDate;
    $wasSet = true;
    return $wasSet;
  }

  public function setIdOnly($aIdOnly)
  {
    $wasSet = false;
    $this->idOnly = $aIdOnly;
    $wasSet = true;
    return $wasSet;
  }

  public function setLevelOfDetails($aLevelOfDetails)
  {
    $wasSet = false;
    $this->levelOfDetails = $aLevelOfDetails;
    $wasSet = true;
    return $wasSet;
  }
   public function setAttributes($aattributes) {
       $this->attributes = $aattributes;
   }

  public function addAttribute($aAttribute)
  {
    $wasAdded = false;
    $this->attributes[] = $aAttribute;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeAttribute($aAttribute)
  {
    $wasRemoved = false;
    unset($this->attributes[$this->indexOfAttribute($aAttribute)]);
    $this->attributes = array_values($this->attributes);
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

  public function setReportType($aReportType)
  {
    $wasSet = false;
    $this->reportType = $aReportType;
    $wasSet = true;
    return $wasSet;
  }
   public function setStatIds($astatIds) {
       $this->statIds = $astatIds;
   }

  public function addStatId($aStatId)
  {
    $wasAdded = false;
    $this->statIds[] = $aStatId;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeStatId($aStatId)
  {
    $wasRemoved = false;
    unset($this->statIds[$this->indexOfStatId($aStatId)]);
    $this->statIds = array_values($this->statIds);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function setStatRange($aStatRange)
  {
    $wasSet = false;
    $this->statRange = $aStatRange;
    $wasSet = true;
    return $wasSet;
  }

  public function setUnitOfTime($aUnitOfTime)
  {
    $wasSet = false;
    $this->unitOfTime = $aUnitOfTime;
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


  public function getPerformanceData()
  {
    $newPerformanceData = $this->performanceData;
    return $newPerformanceData;
  }

  public function numberOfPerformanceData()
  {
    $number = count($this->performanceData);
    return $number;
  }

  public function indexOfPerformanceData($aPerformanceData)
  {
    $rawAnswer = array_search($aPerformanceData,$this->performanceData);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getStartDate()
  {
    return $this->startDate;
  }

  public function getEndDate()
  {
    return $this->endDate;
  }

  public function getIdOnly()
  {
    return $this->idOnly;
  }

  public function getLevelOfDetails()
  {
    return $this->levelOfDetails;
  }


  public function getAttributes()
  {
    $newAttributes = $this->attributes;
    return $newAttributes;
  }

  public function numberOfAttributes()
  {
    $number = count($this->attributes);
    return $number;
  }

  public function indexOfAttribute($aAttribute)
  {
    $rawAnswer = array_search($aAttribute,$this->attributes);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getFormat()
  {
    return $this->format;
  }

  public function getReportType()
  {
    return $this->reportType;
  }


  public function getStatIds()
  {
    $newStatIds = $this->statIds;
    return $newStatIds;
  }

  public function numberOfStatIds()
  {
    $number = count($this->statIds);
    return $number;
  }

  public function indexOfStatId($aStatId)
  {
    $rawAnswer = array_search($aStatId,$this->statIds);
    $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
    return $index;
  }

  public function getStatRange()
  {
    return $this->statRange;
  }

  public function getUnitOfTime()
  {
    return $this->unitOfTime;
  }

  public function getDevice()
  {
    return $this->device;
  }

  public function isIdOnly()
  {
    return $this->idOnly;
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

class GetRealTimeDataRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetRealTimeDataRequest Attributes
  public $realTimeRequestTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setRealTimeRequestTypes($aRealTimeRequestTypes)
  {
    $wasSet = false;
    $this->realTimeRequestTypes = $aRealTimeRequestTypes;
    $wasSet = true;
    return $wasSet;
  }

  public function getRealTimeRequestTypes()
  {
    return $this->realTimeRequestTypes;
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

class GetRealTimePairDataRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetRealTimePairDataRequest Attributes
  public $realTimePairRequestTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setRealTimePairRequestTypes($aRealTimePairRequestTypes)
  {
    $wasSet = false;
    $this->realTimePairRequestTypes = $aRealTimePairRequestTypes;
    $wasSet = true;
    return $wasSet;
  }

  public function getRealTimePairRequestTypes()
  {
    return $this->realTimePairRequestTypes;
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

class GetRealTimeQueryDataRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetRealTimeQueryDataRequest Attributes
  public $realTimeQueryRequestTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setRealTimeQueryRequestTypes($aRealTimeQueryRequestTypes)
  {
    $wasSet = false;
    $this->realTimeQueryRequestTypes = $aRealTimeQueryRequestTypes;
    $wasSet = true;
    return $wasSet;
  }

  public function getRealTimeQueryRequestTypes()
  {
    return $this->realTimeQueryRequestTypes;
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

class GetRealTimeDataResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetRealTimeDataResponse Attributes
  public $realTimeResultTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setRealTimeResultTypes($arealTimeResultTypes) {
       $this->realTimeResultTypes = $arealTimeResultTypes;
   }

  public function addRealTimeResultType($aRealTimeResultType)
  {
    $wasAdded = false;
    $this->realTimeResultTypes[] = $aRealTimeResultType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeRealTimeResultType($aRealTimeResultType)
  {
    $wasRemoved = false;
    unset($this->realTimeResultTypes[$this->indexOfRealTimeResultType($aRealTimeResultType)]);
    $this->realTimeResultTypes = array_values($this->realTimeResultTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getRealTimeResultTypes()
  {
    $newRealTimeResultTypes = $this->realTimeResultTypes;
    return $newRealTimeResultTypes;
  }

  public function numberOfRealTimeResultTypes()
  {
    $number = count($this->realTimeResultTypes);
    return $number;
  }

  public function indexOfRealTimeResultType($aRealTimeResultType)
  {
    $rawAnswer = array_search($aRealTimeResultType,$this->realTimeResultTypes);
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

class GetProfessionalReportIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetProfessionalReportIdRequest Attributes
  public $reportRequestType;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setReportRequestType($aReportRequestType)
  {
    $wasSet = false;
    $this->reportRequestType = $aReportRequestType;
    $wasSet = true;
    return $wasSet;
  }

  public function getReportRequestType()
  {
    return $this->reportRequestType;
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

class GetProfessionalReportIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetProfessionalReportIdResponse Attributes
  public $reportId;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setReportId($aReportId)
  {
    $wasSet = false;
    $this->reportId = $aReportId;
    $wasSet = true;
    return $wasSet;
  }

  public function getReportId()
  {
    return $this->reportId;
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

class GetReportStateRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetReportStateRequest Attributes
  public $reportId;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setReportId($aReportId)
  {
    $wasSet = false;
    $this->reportId = $aReportId;
    $wasSet = true;
    return $wasSet;
  }

  public function getReportId()
  {
    return $this->reportId;
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

class GetReportStateResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetReportStateResponse Attributes
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

class GetReportFileUrlRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetReportFileUrlRequest Attributes
  public $reportId;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setReportId($aReportId)
  {
    $wasSet = false;
    $this->reportId = $aReportId;
    $wasSet = true;
    return $wasSet;
  }

  public function getReportId()
  {
    return $this->reportId;
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

class GetReportFileUrlResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetReportFileUrlResponse Attributes
  public $reportFilePath;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setReportFilePath($aReportFilePath)
  {
    $wasSet = false;
    $this->reportFilePath = $aReportFilePath;
    $wasSet = true;
    return $wasSet;
  }

  public function getReportFilePath()
  {
    return $this->reportFilePath;
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

class GetRealTimeQueryDataResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetRealTimeQueryDataResponse Attributes
  public $realTimeQueryResultTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setRealTimeQueryResultTypes($arealTimeQueryResultTypes) {
       $this->realTimeQueryResultTypes = $arealTimeQueryResultTypes;
   }

  public function addRealTimeQueryResultType($aRealTimeQueryResultType)
  {
    $wasAdded = false;
    $this->realTimeQueryResultTypes[] = $aRealTimeQueryResultType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeRealTimeQueryResultType($aRealTimeQueryResultType)
  {
    $wasRemoved = false;
    unset($this->realTimeQueryResultTypes[$this->indexOfRealTimeQueryResultType($aRealTimeQueryResultType)]);
    $this->realTimeQueryResultTypes = array_values($this->realTimeQueryResultTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getRealTimeQueryResultTypes()
  {
    $newRealTimeQueryResultTypes = $this->realTimeQueryResultTypes;
    return $newRealTimeQueryResultTypes;
  }

  public function numberOfRealTimeQueryResultTypes()
  {
    $number = count($this->realTimeQueryResultTypes);
    return $number;
  }

  public function indexOfRealTimeQueryResultType($aRealTimeQueryResultType)
  {
    $rawAnswer = array_search($aRealTimeQueryResultType,$this->realTimeQueryResultTypes);
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

class GetRealTimePairDataResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetRealTimePairDataResponse Attributes
  public $realTimePairResultTypes;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setRealTimePairResultTypes($arealTimePairResultTypes) {
       $this->realTimePairResultTypes = $arealTimePairResultTypes;
   }

  public function addRealTimePairResultType($aRealTimePairResultType)
  {
    $wasAdded = false;
    $this->realTimePairResultTypes[] = $aRealTimePairResultType;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeRealTimePairResultType($aRealTimePairResultType)
  {
    $wasRemoved = false;
    unset($this->realTimePairResultTypes[$this->indexOfRealTimePairResultType($aRealTimePairResultType)]);
    $this->realTimePairResultTypes = array_values($this->realTimePairResultTypes);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getRealTimePairResultTypes()
  {
    $newRealTimePairResultTypes = $this->realTimePairResultTypes;
    return $newRealTimePairResultTypes;
  }

  public function numberOfRealTimePairResultTypes()
  {
    $number = count($this->realTimePairResultTypes);
    return $number;
  }

  public function indexOfRealTimePairResultType($aRealTimePairResultType)
  {
    $rawAnswer = array_search($aRealTimePairResultType,$this->realTimePairResultTypes);
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

class sms_v3_ReportService extends CommonService 
{    public function __construct() {
        parent::__construct ( 'sms', 'v3', 'ReportService' );
    }

  // ABSTRACT METHODS 

 public function getRealTimeData ($GetRealTimeDataRequest){
 return $this->execute ( 'getRealTimeData', $GetRealTimeDataRequest );
}
 public function getProfessionalReportId ($GetProfessionalReportIdRequest){
 return $this->execute ( 'getProfessionalReportId', $GetProfessionalReportIdRequest );
}
 public function getReportState ($GetReportStateRequest){
 return $this->execute ( 'getReportState', $GetReportStateRequest );
}
 public function getReportFileUrl ($GetReportFileUrlRequest){
 return $this->execute ( 'getReportFileUrl', $GetReportFileUrlRequest );
}
 public function getRealTimeQueryData ($GetRealTimeQueryDataRequest){
 return $this->execute ( 'getRealTimeQueryData', $GetRealTimeQueryDataRequest );
}
 public function getRealTimePairData ($GetRealTimePairDataRequest){
 return $this->execute ( 'getRealTimePairData', $GetRealTimePairDataRequest );
}
  
}


?>