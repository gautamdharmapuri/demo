<?php
require_once "../CONFIG/connection.php";
class Users {
	public $table_name = 'register';
	
	function __construct(){
		//Database configuration
		/*$dbServer = 'localhost'; //Define database server host
		$dbUsername = 'root'; //Define database username
		$dbPassword = ''; //Define database password
		$dbName = 'angeldes_nris'; //Define database name*/

		//database configuration
		$dbServer = MYSQL_DB_HOSTNAME; //Define database server host
		$dbUsername = MYSQL_DB_USER; //Define database username
		$dbPassword = MYSQL_DB_PASSWORD; //Define database password
		$dbName = MYSQL_DB_DATABASE; //Define database name
		
		//Connect databse
		$con = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);
		if(mysqli_connect_errno()){
			die("Failed to connect with MySQL: ".mysqli_connect_error());
		}else{
			$this->connect = $con;
		}
	}
	
	function checkUser($oauth_provider,$oauth_uid,$username,$fname,$lname,$locale,$oauth_token,$oauth_secret,$profile_image_url){
		$prevQuery = mysqli_query($this->connect,"SELECT * FROM $this->table_name WHERE oauth_uid = '".$oauth_uid."'") or die(mysqli_error($this->connect));
		if(mysqli_num_rows($prevQuery) > 0){
			$result = mysqli_fetch_array($prevQuery);
			return $result;
			//$update = mysqli_query($this->connect,"UPDATE $this->table_name SET oauth_token = '".$oauth_token."', oauth_secret = '".$oauth_secret."', modified = '".date("Y-m-d H:i:s")."' WHERE oauth_provider = '".$oauth_provider."' AND oauth_uid = '".$oauth_uid."'") or die(mysqli_error($this->connect));
		} else {
			$insert = mysqli_query($this->connect,"INSERT INTO $this->table_name SET oauth_uid = '".$oauth_uid."', fname = '".$fname."', lname = '".$lname."', isactive = 1") or die(mysqli_error($this->connect));
		}
		
		$query = mysqli_query($this->connect,"SELECT * FROM $this->table_name WHERE oauth_uid = '".$oauth_uid."'") or die(mysqli_error($this->connect));
		$result = mysqli_fetch_array($query);
		return $result;
	}
}
?>