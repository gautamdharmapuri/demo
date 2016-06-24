<?php
include_once "../config/connection.php";

class Users {
	// public $table_name = 'users';
	public $table_name = 'register';
	
	function __construct(){
		/*global $mysql_db_hostname;
		global $mysql_db_user;
		global $mysql_db_password;
		global $mysql_db_database;

		$dbServer = $mysql_db_hostname; //Define database server host
		$dbUsername = $mysql_db_user; //Define database username
		$dbPassword = $mysql_db_password; //Define database password
		$dbName = $mysql_db_database; //Define database name*/
		//database configuration
		
		$dbServer = MYSQL_DB_HOSTNAME; //Define database server host
		$dbUsername = MYSQL_DB_USER; //Define database username
		$dbPassword = MYSQL_DB_PASSWORD; //Define database password
		$dbName = MYSQL_DB_DATABASE; //Define database name
		
		//connect databse
		$con = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);
		if(mysqli_connect_errno()){
			die("Failed to connect with MySQL: ".mysqli_connect_error());
		}else{
			$this->connect = $con;
		}
	}
	
	function checkUser($oauth_provider,$oauth_uid,$fname,$lname,$email,$gender,$locale,$picture){
		$prev_query = mysqli_query($this->connect,"SELECT * FROM ".$this->table_name." WHERE oauth_uid = '".$oauth_uid."' OR email = '".$email."'") or die(mysql_error($this->connect));
		if(mysqli_num_rows($prev_query)>0){
			$result = mysqli_fetch_array($prev_query);
			return $result;
			//$update = mysqli_query($this->connect,"UPDATE $this->table_name SET oauth_uid = '".$oauth_uid."', fname = '".$fname."', lname = '".$lname."', email = '".$email."' , isactive = 1 WHERE oauth_uid = '".$oauth_uid."'");
		}else{
			$insert = mysqli_query($this->connect,"INSERT INTO $this->table_name SET oauth_uid = '".$oauth_uid."', fname = '".$fname."', lname = '".$lname."', email = '".$email."', isactive = 1 ");
		}

		$query = mysqli_query($this->connect,"SELECT * FROM $this->table_name WHERE oauth_uid = '".$oauth_uid."' OR email = '".$email."'") or die(mysqli_error($this->connect));
		$result = mysqli_fetch_array($query);
		// print_r($result);exit;
		return $result;
	}

}
?>