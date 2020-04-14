<?php
class FullAddressAreaServiceQueryaddressarealistRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.fullAddressAreaService.queryaddressarealist";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private  $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                                        		                                    	                   			private $pageNumber;
    	                                                            
	public function setPageNumber($pageNumber){
		$this->pageNumber = $pageNumber;
         $this->apiParas["page_number"] = $pageNumber;
	}

	public function getPageNumber(){
	  return $this->pageNumber;
	}

                        	                   			private $pageSize;
    	                                                            
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $companyCode;
    	                                                            
	public function setCompanyCode($companyCode){
		$this->companyCode = $companyCode;
         $this->apiParas["company_code"] = $companyCode;
	}

	public function getCompanyCode(){
	  return $this->companyCode;
	}

                            }





        
 

