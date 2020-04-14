<?php
class EclpMasterUpdateSellerCategoryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.master.updateSellerCategory";
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
                                    	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $categoryName;
    	                        
	public function setCategoryName($categoryName){
		$this->categoryName = $categoryName;
         $this->apiParas["categoryName"] = $categoryName;
	}

	public function getCategoryName(){
	  return $this->categoryName;
	}

                        	                   			private $categoryNo;
    	                        
	public function setCategoryNo($categoryNo){
		$this->categoryNo = $categoryNo;
         $this->apiParas["categoryNo"] = $categoryNo;
	}

	public function getCategoryNo(){
	  return $this->categoryNo;
	}

                        	}





        
 

