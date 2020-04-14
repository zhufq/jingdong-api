<?php
class LdopAlphaBranchRangeJosConvertRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.alpha.branchRange.jos.Convert";
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
                                    	                   			private $branchRangeListXml;
    	                        
	public function setBranchRangeListXml($branchRangeListXml){
		$this->branchRangeListXml = $branchRangeListXml;
         $this->apiParas["branchRangeListXml"] = $branchRangeListXml;
	}

	public function getBranchRangeListXml(){
	  return $this->branchRangeListXml;
	}

                        	}





        
 

