<?php
class Config{

	public static function get($path=null){
		return "hello world";
	}

	const ACONSTANT="hello world , this is a string prinred from constant variable!";

	public static function get($path=null){

		return self::obtainString();
	}

	public static function obtainString(){
		return "obtained string";
	}
	
	private $name;
	private $pwd;

	public function setName($vname="not set name"){
		
		$this->name=$vname;
	}
	public function setPwd($vpwd="not set pwd"){
		
		$this->pwd=$vpwd;
	}
	public function toString(){
		echo "name : ".$this->name . " pwd: " . $this->pwd;

	}
}
