<?php 
include_once('config.php');

class User extends db {

	public function fetch_result() {
		$sql = "SELECT * FROM test";
		$result=mysqli_query($this->con, $sql);
		// Numeric array
		$row = mysqli_fetch_array($result,MYSQLI_NUM);
		return($row);
	}
	
}


 ?>