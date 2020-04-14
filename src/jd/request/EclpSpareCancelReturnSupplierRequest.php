<?php
class EclpSpareCancelReturnSupplierRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.spare.cancelReturnSupplier";
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
                                                        		                                    	                   			private $spareReturnSupplierNo;
    	                        
	public function setSpareReturnSupplierNo($spareReturnSupplierNo){
		$this->spareReturnSupplierNo = $spareReturnSupplierNo;
         $this->apiParas["spareReturnSupplierNo"] = $spareReturnSupplierNo;
	}

	public function getSpareReturnSupplierNo(){
	  return $this->spareReturnSupplierNo;
	}

                        	                   			private $updateUser;
    	                        
	public function setUpdateUser($updateUser){
		$this->updateUser = $updateUser;
         $this->apiParas["updateUser"] = $updateUser;
	}

	public function getUpdateUser(){
	  return $this->updateUser;
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





        
 

