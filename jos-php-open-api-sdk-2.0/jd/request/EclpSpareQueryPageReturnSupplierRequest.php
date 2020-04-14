<?php
class EclpSpareQueryPageReturnSupplierRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.spare.queryPageReturnSupplier";
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
                                                        		                                    	                   			private $fromDate;
    	                        
	public function setFromDate($fromDate){
		$this->fromDate = $fromDate;
         $this->apiParas["fromDate"] = $fromDate;
	}

	public function getFromDate(){
	  return $this->fromDate;
	}

                        	                   			private $spareReturnSupplierNo;
    	                        
	public function setSpareReturnSupplierNo($spareReturnSupplierNo){
		$this->spareReturnSupplierNo = $spareReturnSupplierNo;
         $this->apiParas["spareReturnSupplierNo"] = $spareReturnSupplierNo;
	}

	public function getSpareReturnSupplierNo(){
	  return $this->spareReturnSupplierNo;
	}

                        	                   			private $endDate;
    	                        
	public function setEndDate($endDate){
		$this->endDate = $endDate;
         $this->apiParas["endDate"] = $endDate;
	}

	public function getEndDate(){
	  return $this->endDate;
	}

                        	                   			private $billStatus;
    	                        
	public function setBillStatus($billStatus){
		$this->billStatus = $billStatus;
         $this->apiParas["billStatus"] = $billStatus;
	}

	public function getBillStatus(){
	  return $this->billStatus;
	}

                        	                   			private $outReturnSupplierNo;
    	                        
	public function setOutReturnSupplierNo($outReturnSupplierNo){
		$this->outReturnSupplierNo = $outReturnSupplierNo;
         $this->apiParas["outReturnSupplierNo"] = $outReturnSupplierNo;
	}

	public function getOutReturnSupplierNo(){
	  return $this->outReturnSupplierNo;
	}

                        	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                                                    	}





        
 

