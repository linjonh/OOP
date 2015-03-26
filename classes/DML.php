<?php
/**
Data Manipulation Language 数据库操纵语言
*/
class DML {
	// mysqli 连接实例对象
	private $ConnClient;
	public function __construct($ConnClient = null) {
		$this->ConnClient = $ConnClient;
		if ($this->ConnClient === null) {
			echo "ConnClient is null";
		}
	}
	
	// add record 增
	/**
	 * $table:
	 * insert a record to the table.
	 * $projectionArray:
	 * a record fields values mapping.
	 * struct:
	 * array(
	 * field => value,
	 * field2 => value2
	 * )
	 */
	public function insert($table = null, $projectionArray = null) {
		if ($table === null) {
			echo "table argument not set";
			return;
		}
		if ($projectionArray === null) {
			echo "projection Array argument not set";
			return;
		}
		$projections = '';
		$datas = '';
		foreach ( $projectionArray as $key => $value ) {
			$projections .= "{$key},";
			$datas .= "{$value},";
		}
		$projections = substr ( $projections, 0, strlen ( $projections ) - 1 );
		$datas = substr ( $datas, 0, strlen ( $datas ) - 1 );
		$sql = "INSERT INTO {$table} ( {$projections} ) VALUES ( {$datas} )";
		//echo "$sql";
		$rowEffect = $this->ConnClient->query ( $sql );
		// $resultJson="";
		if ($rowEffect) {
			$resultJson = '{"result":"'.$rowEffect.'row effect",description":"insert success"}';
		} else {
			$resultJson = '{"result":0,"description":"insert failed","error":.'$this->ConnClient->error.'}';
		}
		exit ( $resultJson );
	}
	// delete record 删
	/**
	 * $table:
	 * the table's record to be delete.
	 * $whereClauseStr:
	 * where clause to select a record to delete.
	 */
	public function delete($table = null, $whereClauseStr = null) {
		if ($table === null) {
			echo "table is not specified!";
			return;
		}
		$sql = '';
		if ($whereClauseStr !== null) {
			$sql = "DELETE FROM {$table} WHERE {$whereClauseStr}";
		} else {
			// delete all data in table;
			$sql = "DELETE FROM {$table} ";
		}
		$affectedCount = $this->ConnClient->query ( $sql );
		echo "$affectedCount affected!";
	}
	// alter record 改
	/**
	 * $table:
	 * the table to be update.
	 * $fieldsArray:
	 * fields to set data.
	 * struct:
	 * $array(
	 * field => value,
	 * field2 => value2
	 * ) transform to	(field = value,field2 = valued2)
	 * $whereClauseStr:
	 * where clause to select a record.
	 */
	public function update($table = null, $fieldsArray = null, $whereClauseStr = null) {
		if ($table === null) {
			echo "table is not specified!";
			return;
		}
		if ($fieldsArray === null) {
			echo "fields Array is not specified!";
			return;
		}
		$sql = '';
		$fieldsSet = '';
		foreach ( $fieldsArray as $key => $value ) {
			$fieldsSet .= "{$key} = {$value},";
		}
		$fieldsSet = substr ( $fieldsSet, 0, strlen ( $fieldsSet ) - 1 );
		if ($whereClauseStr !== null) {
			$sql = "UPDATE {$table} SET {$fieldsSet} WHERE {$whereClauseStr}";
		} else {
			// update all record
			$sql = "UPDATE {$table} SET {$fieldsSet}";
		}
		$affectedCount = $this->ConnClient->query ( $sql );
		if ($affectedCount) {
			echo "$affectedCount record updated!";
		} else {
			echo "update failed!";
		}
	}
	// query record 查
	/**
	 * $table:
	 * the table to be queried.
	 * $projectionArray:
	 * the projections of the table to be queried.
	 * structure:
	 * $projectionArray=array(
	 * one,
	 * two,
	 * three
	 * );
	 * $whereClauseStr:
	 * a where clause string
	 * $equlOrLike: precise query or dim query.
	 * true for precise query.
	 * false for dim query.
	 * return:
	 * query result cursor.
	 */
	public function select($table = null, $projectionArray = null, $whereClauseStr = null) {
		if ($table === null) {
			echo "table args is not set!";
			return;
		}
		// args 2: projections
		$projections = '';
		if ($projectionArray) {
			foreach ( $projectionArray as $proj ) {
				$projections .= "{$proj},";
			}
			$projections = substr ( $projections, 0, strlen ( $projections ) - 1 );
		} else {
			$projections = '*';
		}
		
		// args 3: whereClauseStr
		// $sql = '';
		if ($whereClauseStr) {
			$sql = "SELECT {$projections} FROM {$table} WHERE {$whereClauseStr}";
		} else {
			$sql = "SELECT {$projections} FROM {$table}";
		}
		// echo "<br>$sql";
		$cursor = $this->ConnClient->query ( $sql );
		// if($cursor){
		// $a_res = $cursor->fetch_assoc();
		// $json = json_encode($a_res);
		// echo "<br>one row result: " .$json;
		// }
		return $cursor;
	}
	
	/**
	 * excute sql directly.
	 */
	public function query($sql = '') {
		/*
		 * if(strtoupper(stristr($sql, 'SELECT',true))==='SELECT'){
		 * //is select query sql
		 * return $this->ConnClient->query($sql);
		 * }
		 */
		return $this->ConnClient->query ( $sql );
	}
	// close the database connection.
	public function closeConnection() {
		if ($this->ConnClient !== null) {
			$this->ConnClient->close ();
		}
	}
}
