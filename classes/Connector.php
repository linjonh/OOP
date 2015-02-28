<?php
/**
This class is intent to connect database and get database connector using by mysqli object.
*/
class Connector{
	//mysqli 连接实例对象
	private $conn;

	private function getConnClient($value=''){
		$this->conn = new mysqli('localhost:3306','root','root','app');
		if($this->conn){
			
			if ($this->conn->connect_errno == 2002) {
				echo $this->conn->connect_error;
				// echo '<br>client is not null,but connection error';
				return null;
			}
			// echo '<br>client is not null,and connection is success!';
			return $this->conn;			
		}	
	}

	public function getDML()
	{
		$DML=new DML($this->getConnClient());
		return $DML;
	}
}
