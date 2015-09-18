<?php
require_once 'CommonService.php';

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class KeywordInfo
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //KeywordInfo Attributes
  public $keywordId;
  public $keyword;
  public $adgroupId;
  public $adgroupName;
  public $campaignId;
  public $campaignName;

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

  public function setKeyword($aKeyword)
  {
    $wasSet = false;
    $this->keyword = $aKeyword;
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

  public function setAdgroupName($aAdgroupName)
  {
    $wasSet = false;
    $this->adgroupName = $aAdgroupName;
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

  public function setCampaignName($aCampaignName)
  {
    $wasSet = false;
    $this->campaignName = $aCampaignName;
    $wasSet = true;
    return $wasSet;
  }

  public function getKeywordId()
  {
    return $this->keywordId;
  }

  public function getKeyword()
  {
    return $this->keyword;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }

  public function getAdgroupName()
  {
    return $this->adgroupName;
  }

  public function getCampaignId()
  {
    return $this->campaignId;
  }

  public function getCampaignName()
  {
    return $this->campaignName;
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

class AdgroupInfo
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //AdgroupInfo Attributes
  public $adgroupId;
  public $adgroupName;
  public $campaignId;
  public $campaignName;

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

  public function setAdgroupName($aAdgroupName)
  {
    $wasSet = false;
    $this->adgroupName = $aAdgroupName;
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

  public function setCampaignName($aCampaignName)
  {
    $wasSet = false;
    $this->campaignName = $aCampaignName;
    $wasSet = true;
    return $wasSet;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }

  public function getAdgroupName()
  {
    return $this->adgroupName;
  }

  public function getCampaignId()
  {
    return $this->campaignId;
  }

  public function getCampaignName()
  {
    return $this->campaignName;
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

class CampaignInfo
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //CampaignInfo Attributes
  public $campaignId;
  public $campaignName;

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

  public function getCampaignId()
  {
    return $this->campaignId;
  }

  public function getCampaignName()
  {
    return $this->campaignName;
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

class GetKeywordBySearchRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeywordBySearchRequest Attributes
  public $searchWord;
  public $startNum;
  public $endNum;
  public $campaignId;
  public $adgroupId;
  public $searchType;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setSearchWord($aSearchWord)
  {
    $wasSet = false;
    $this->searchWord = $aSearchWord;
    $wasSet = true;
    return $wasSet;
  }

  public function setStartNum($aStartNum)
  {
    $wasSet = false;
    $this->startNum = $aStartNum;
    $wasSet = true;
    return $wasSet;
  }

  public function setEndNum($aEndNum)
  {
    $wasSet = false;
    $this->endNum = $aEndNum;
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

  public function setAdgroupId($aAdgroupId)
  {
    $wasSet = false;
    $this->adgroupId = $aAdgroupId;
    $wasSet = true;
    return $wasSet;
  }

  public function setSearchType($aSearchType)
  {
    $wasSet = false;
    $this->searchType = $aSearchType;
    $wasSet = true;
    return $wasSet;
  }

  public function getSearchWord()
  {
    return $this->searchWord;
  }

  public function getStartNum()
  {
    return $this->startNum;
  }

  public function getEndNum()
  {
    return $this->endNum;
  }

  public function getCampaignId()
  {
    return $this->campaignId;
  }

  public function getAdgroupId()
  {
    return $this->adgroupId;
  }

  public function getSearchType()
  {
    return $this->searchType;
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

class GetKeywordBySearchResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetKeywordBySearchResponse Attributes
  public $moreWord;
  public $keywordInfos;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setMoreWord($aMoreWord)
  {
    $wasSet = false;
    $this->moreWord = $aMoreWord;
    $wasSet = true;
    return $wasSet;
  }
   public function setKeywordInfos($akeywordInfos) {
       $this->keywordInfos = $akeywordInfos;
   }

  public function addKeywordInfo($aKeywordInfo)
  {
    $wasAdded = false;
    $this->keywordInfos[] = $aKeywordInfo;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeKeywordInfo($aKeywordInfo)
  {
    $wasRemoved = false;
    unset($this->keywordInfos[$this->indexOfKeywordInfo($aKeywordInfo)]);
    $this->keywordInfos = array_values($this->keywordInfos);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getMoreWord()
  {
    return $this->moreWord;
  }


  public function getKeywordInfos()
  {
    $newKeywordInfos = $this->keywordInfos;
    return $newKeywordInfos;
  }

  public function numberOfKeywordInfos()
  {
    $number = count($this->keywordInfos);
    return $number;
  }

  public function indexOfKeywordInfo($aKeywordInfo)
  {
    $rawAnswer = array_search($aKeywordInfo,$this->keywordInfos);
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

class GetAdgroupBySearchRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAdgroupBySearchRequest Attributes
  public $adgroupName;
  public $startNum;
  public $endNum;
  public $campaignId;
  public $searchType;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setAdgroupName($aAdgroupName)
  {
    $wasSet = false;
    $this->adgroupName = $aAdgroupName;
    $wasSet = true;
    return $wasSet;
  }

  public function setStartNum($aStartNum)
  {
    $wasSet = false;
    $this->startNum = $aStartNum;
    $wasSet = true;
    return $wasSet;
  }

  public function setEndNum($aEndNum)
  {
    $wasSet = false;
    $this->endNum = $aEndNum;
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

  public function setSearchType($aSearchType)
  {
    $wasSet = false;
    $this->searchType = $aSearchType;
    $wasSet = true;
    return $wasSet;
  }

  public function getAdgroupName()
  {
    return $this->adgroupName;
  }

  public function getStartNum()
  {
    return $this->startNum;
  }

  public function getEndNum()
  {
    return $this->endNum;
  }

  public function getCampaignId()
  {
    return $this->campaignId;
  }

  public function getSearchType()
  {
    return $this->searchType;
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

class GetAdgroupBySearchResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetAdgroupBySearchResponse Attributes
  public $moreAdgroup;
  public $adgroupInfos;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setMoreAdgroup($aMoreAdgroup)
  {
    $wasSet = false;
    $this->moreAdgroup = $aMoreAdgroup;
    $wasSet = true;
    return $wasSet;
  }
   public function setAdgroupInfos($aadgroupInfos) {
       $this->adgroupInfos = $aadgroupInfos;
   }

  public function addAdgroupInfo($aAdgroupInfo)
  {
    $wasAdded = false;
    $this->adgroupInfos[] = $aAdgroupInfo;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeAdgroupInfo($aAdgroupInfo)
  {
    $wasRemoved = false;
    unset($this->adgroupInfos[$this->indexOfAdgroupInfo($aAdgroupInfo)]);
    $this->adgroupInfos = array_values($this->adgroupInfos);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getMoreAdgroup()
  {
    return $this->moreAdgroup;
  }


  public function getAdgroupInfos()
  {
    $newAdgroupInfos = $this->adgroupInfos;
    return $newAdgroupInfos;
  }

  public function numberOfAdgroupInfos()
  {
    $number = count($this->adgroupInfos);
    return $number;
  }

  public function indexOfAdgroupInfo($aAdgroupInfo)
  {
    $rawAnswer = array_search($aAdgroupInfo,$this->adgroupInfos);
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

class GetCampaignBySearchRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetCampaignBySearchRequest Attributes
  public $campaignName;
  public $startNum;
  public $endNum;
  public $searchType;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setCampaignName($aCampaignName)
  {
    $wasSet = false;
    $this->campaignName = $aCampaignName;
    $wasSet = true;
    return $wasSet;
  }

  public function setStartNum($aStartNum)
  {
    $wasSet = false;
    $this->startNum = $aStartNum;
    $wasSet = true;
    return $wasSet;
  }

  public function setEndNum($aEndNum)
  {
    $wasSet = false;
    $this->endNum = $aEndNum;
    $wasSet = true;
    return $wasSet;
  }

  public function setSearchType($aSearchType)
  {
    $wasSet = false;
    $this->searchType = $aSearchType;
    $wasSet = true;
    return $wasSet;
  }

  public function getCampaignName()
  {
    return $this->campaignName;
  }

  public function getStartNum()
  {
    return $this->startNum;
  }

  public function getEndNum()
  {
    return $this->endNum;
  }

  public function getSearchType()
  {
    return $this->searchType;
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

class GetCampaignBySearchResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetCampaignBySearchResponse Attributes
  public $moreCampaign;
  public $campaignInfos;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setMoreCampaign($aMoreCampaign)
  {
    $wasSet = false;
    $this->moreCampaign = $aMoreCampaign;
    $wasSet = true;
    return $wasSet;
  }
   public function setCampaignInfos($acampaignInfos) {
       $this->campaignInfos = $acampaignInfos;
   }

  public function addCampaignInfo($aCampaignInfo)
  {
    $wasAdded = false;
    $this->campaignInfos[] = $aCampaignInfo;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCampaignInfo($aCampaignInfo)
  {
    $wasRemoved = false;
    unset($this->campaignInfos[$this->indexOfCampaignInfo($aCampaignInfo)]);
    $this->campaignInfos = array_values($this->campaignInfos);
    $wasRemoved = true;
    return $wasRemoved;
  }

  public function getMoreCampaign()
  {
    return $this->moreCampaign;
  }


  public function getCampaignInfos()
  {
    $newCampaignInfos = $this->campaignInfos;
    return $newCampaignInfos;
  }

  public function numberOfCampaignInfos()
  {
    $number = count($this->campaignInfos);
    return $number;
  }

  public function indexOfCampaignInfo($aCampaignInfo)
  {
    $rawAnswer = array_search($aCampaignInfo,$this->campaignInfos);
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

class CountInfo
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //CountInfo Attributes
  public $id;
  public $count;

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

  public function setCount($aCount)
  {
    $wasSet = false;
    $this->count = $aCount;
    $wasSet = true;
    return $wasSet;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getCount()
  {
    return $this->count;
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

class GetCountByIdRequest
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetCountByIdRequest Attributes
  public $idType;
  public $ids;
  public $countType;
  public $status;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function setIdType($aIdType)
  {
    $wasSet = false;
    $this->idType = $aIdType;
    $wasSet = true;
    return $wasSet;
  }
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

  public function setCountType($aCountType)
  {
    $wasSet = false;
    $this->countType = $aCountType;
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

  public function getIdType()
  {
    return $this->idType;
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

  public function getCountType()
  {
    return $this->countType;
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

class GetCountByIdResponse
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //GetCountByIdResponse Attributes
  public $countInfos;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------
   public function setCountInfos($acountInfos) {
       $this->countInfos = $acountInfos;
   }

  public function addCountInfo($aCountInfo)
  {
    $wasAdded = false;
    $this->countInfos[] = $aCountInfo;
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCountInfo($aCountInfo)
  {
    $wasRemoved = false;
    unset($this->countInfos[$this->indexOfCountInfo($aCountInfo)]);
    $this->countInfos = array_values($this->countInfos);
    $wasRemoved = true;
    return $wasRemoved;
  }


  public function getCountInfos()
  {
    $newCountInfos = $this->countInfos;
    return $newCountInfos;
  }

  public function numberOfCountInfos()
  {
    $number = count($this->countInfos);
    return $number;
  }

  public function indexOfCountInfo($aCountInfo)
  {
    $rawAnswer = array_search($aCountInfo,$this->countInfos);
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

class sms_v3_SearchService extends CommonService 
{    public function __construct() {
        parent::__construct ( 'sms', 'v3', 'SearchService' );
    }

  // ABSTRACT METHODS 

 public function getKeywordBySearch ($GetKeywordBySearchRequest){
 return $this->execute ( 'getKeywordBySearch', $GetKeywordBySearchRequest );
}
 public function getAdgroupBySearch ($GetAdgroupBySearchRequest){
 return $this->execute ( 'getAdgroupBySearch', $GetAdgroupBySearchRequest );
}
 public function getCampaignBySearch ($GetCampaignBySearchRequest){
 return $this->execute ( 'getCampaignBySearch', $GetCampaignBySearchRequest );
}
 public function getCountById ($GetCountByIdRequest){
 return $this->execute ( 'getCountById', $GetCountByIdRequest );
}
  
}


?>