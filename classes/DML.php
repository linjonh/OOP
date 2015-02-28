<?php
/**
Data Manipulation Language 数据库操纵语言
*/
class DML{
	//mysqli 连接实例对象
	private $ConnClient;
	public function __construct($ConnClient=null){
		$this->ConnClient=$ConnClient;
		if($this->ConnClient===null){
			echo "ConnClient is null";
		}
	}
	
	//add record 增
	public function insert($table=null,$projectionArray=null){
		if($table===null){
			echo "table argument not set";
			return;
		}
		if($projectionArray===null){
			echo "projection Array argument not set";
			return;
		}
		$projections='';
		$datas='';
		foreach ($projectionArray as $key => $value) {
			$projections.="{$key},";
			$datas.="{$value},";
		}
		$projections=substr($projections, 0,strlen($projections)-1);
		$datas=substr($datas, 0,strlen($datas)-1);
		$sql="INSERT INTO {$table} ( {$projections} ) VALUES ( {$datas} )";
		echo "$sql";
		$rowEffect=$this->ConnClient->query($sql);
		if($rowEffect){
			echo "rowEffect: $rowEffect";
		}else{
			echo "insert failed!";
		}		
	}	
	//delete record 删
	public function delete($sql=''){
		
	}	
	//alter record 改
	public function update($sql=''){
		
	}
	//query record 查
	/**
	$table: the table to be queried.
	$projectionArray: the projections of the table to be queried.
		structure: $projectionArray=array(one,two,three);
	$whereClauseStr: a where clause string
		
	$equlOrLike: precise query or dim query.
		true for precise query.
		false for dim query.
	return: query result cursor.
	*/
	public function select($table=null, $projectionArray=null, $whereClauseStr=null){
		if($table===null){
			echo "table args is not set!";
			return;
		}
		//args 2: projections	
		$projections='';
		if($projectionArray){
			foreach ($projectionArray as $proj) {
				$projections.="{$proj},";
			}
		  $projections= substr($projections, 0,	strlen($projections)-1); 
		}else{
			$projections='*';
		}

		//args 3: whereClauseStr
		$sql='';
		if($whereClauseStr){
			$sql="SELECT {$projections} FROM {$table} WHERE {$whereClauseStr}";
		}else{
			$sql="SELECT {$projections} FROM {$table}";
		}
		// echo "<br>$sql";
		$cursor = $this->ConnClient->query($sql);
		// if($cursor){
		// 	$a_res = $cursor->fetch_assoc();
		// 	$json = json_encode($a_res);
		// 	echo "<br>one row result: " .$json;
		// }
		return $cursor;
	}



	public function closeConnection()
	{
		if($this->ConnClient!==null){
			$this->ConnClient->close();
		}
	}
}