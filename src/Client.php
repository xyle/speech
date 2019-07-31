<?php
namespace Xyle\Speech;
use Xyle\Speech\AipSpeech;

class Client{
	
	public $client;
	
	public function __construct($appid,$apikey,$secretkey){
		$this->client = new AipSpeech($appid, $apikey, $secretkey);
	}
	
	public function getResult($content,$setting = [],$lang = 'zh',){
		
		$result = $this->client->synthesis($content, $lang, 1,$setting);

		return $result;
	}
}


