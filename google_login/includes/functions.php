<?php
require_once "../CONFIG/connection.php";
class Users {
	public $table_name = 'register';
	
	function __construct(){
		//database configuration
		/*$dbServer = 'localhost'; //Define database server host
		$dbUsername = 'root'; //Define database username
		$dbPassword = ''; //Define database password
		$dbName = 'angeldes_nris'; //Define database name*/

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
	
	function checkUser($oauth_provider,$oauth_uid,$fname,$lname,$email,$gender,$locale,$link,$picture){
		$prev_query = mysqli_query($this->connect,"SELECT * FROM ".$this->table_name." WHERE oauth_uid = '".$oauth_uid."' OR email = '".$email."'") or die(mysql_error($this->connect));
		// $prevQuery = mysqli_query($this->connect,"SELECT * FROM $this->table_name WHERE oauth_uid = '".$oauth_uid."'") or die(mysqli_error($this->connect));
		if (mysqli_num_rows($prev_query) > 0){
			$result = mysqli_fetch_array($prev_query);
			return $result;
			// $update = mysqli_query($this->connect,"UPDATE $this->table_name SET oauth_provider = '".$oauth_provider."', oauth_uid = '".$oauth_uid."', fname = '".$fname."', lname = '".$lname."', email = '".$email."', gender = '".$gender."', locale = '".$locale."', picture = '".$picture."', gpluslink = '".$link."', modified = '".date("Y-m-d H:i:s")."' WHERE oauth_provider = '".$oauth_provider."' AND oauth_uid = '".$oauth_uid."'") or die(mysqli_error($this->connect));
		} else {
			$insert = mysqli_query($this->connect,"INSERT INTO $this->table_name SET oauth_uid = '".$oauth_uid."', fname = '".$fname."', lname = '".$lname."', email = '".$email."', isactive = 1 ");
		}
		
		$query = mysqli_query($this->connect,"SELECT * FROM $this->table_name WHERE oauth_uid = '".$oauth_uid."' OR email = '".$email."'") or die(mysqli_error($this->connect));
		$result = mysqli_fetch_array($query);
		return $result;
	}
}
?>