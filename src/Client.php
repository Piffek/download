<?php 
namespace src;
use Download\Load\Download;
class Client extends Download
{
	/*
	 * check the webside
	 * $url = string
	 */
	public function curlINIT($url){
		return $this->check($url);
		
	}
	
	/*
	 * check the webside
	 * $url = string
	 * $param = array assoc
	 */
	public function curlInitWithParam($url,$param)
	{
		return $this->checkWithParam($url,$param);
	}
	
	/*
	 * check the webside
	 * $url = string
	 * $param = array
	 */
	public function curlInitWithParamByID($url,$param)
	{
		return $this->checkByID($url,$param);
	}
	
	/*
	 * check the webside
	 * $url = string
	 * $param = array
	 */
	public function curlInitWithParamByClass($url,$param)
	{
		return $this->checkByClass($url,$param);
	}
	
	
}

?>