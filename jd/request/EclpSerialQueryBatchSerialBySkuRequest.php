<?php
class EclpSerialQueryBatchSerialBySkuRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.serial.queryBatchSerialBySku";
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
                                                        		                                    	                   			private $goodsNo;
    	                        
	public function setGoodsNo($goodsNo){
		$this->goodsNo = $goodsNo;
         $this->apiParas["goodsNo"] = $goodsNo;
	}

	public function getGoodsNo(){
	  return $this->goodsNo;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $goodsSIDs;
                              public function setGoodsSIDs($goodsSIDs ){
                 $this->goodsSIDs=$goodsSIDs;
                 $this->apiParas["goodsSIDs"] = $goodsSIDs;
              }

              public function getGoodsSIDs(){
              	return $this->goodsSIDs;
              }
                                                                                                                                        	                   			private $queryType;
    	                        
	public function setQueryType($queryType){
		$this->queryType = $queryType;
         $this->apiParas["queryType"] = $queryType;
	}

	public function getQueryType(){
	  return $this->queryType;
	}

                                                    	}





        
 
