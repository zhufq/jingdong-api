<?php
class EclpMasterModifyOrAddSellerDictRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.master.modifyOrAddSellerDict";
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
                                                        		                                    	                   			private $deptId;
    	                        
	public function setDeptId($deptId){
		$this->deptId = $deptId;
         $this->apiParas["deptId"] = $deptId;
	}

	public function getDeptId(){
	  return $this->deptId;
	}

                        	                   			private $dictType;
    	                        
	public function setDictType($dictType){
		$this->dictType = $dictType;
         $this->apiParas["dictType"] = $dictType;
	}

	public function getDictType(){
	  return $this->dictType;
	}

                        	                   			private $dictNo;
    	                        
	public function setDictNo($dictNo){
		$this->dictNo = $dictNo;
         $this->apiParas["dictNo"] = $dictNo;
	}

	public function getDictNo(){
	  return $this->dictNo;
	}

                        	                   			private $contacts;
    	                        
	public function setContacts($contacts){
		$this->contacts = $contacts;
         $this->apiParas["contacts"] = $contacts;
	}

	public function getContacts(){
	  return $this->contacts;
	}

                        	                   			private $phone;
    	                        
	public function setPhone($phone){
		$this->phone = $phone;
         $this->apiParas["phone"] = $phone;
	}

	public function getPhone(){
	  return $this->phone;
	}

                                                    	}





        
 

