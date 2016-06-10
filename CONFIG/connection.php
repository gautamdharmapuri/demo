<?php
error_reporting(0);
if (session_id() == '') {
session_start();
}
   
   mysql_connect("localhost","root","");
   mysql_select_db("angeldes_nris");

$mysql_db_hostname = "localhost";
$mysql_db_user = "root";
$mysql_db_password = "";
$mysql_db_database = "angeldes_nris";

if (!defined('MYSQL_DB_HOSTNAME')) {
	DEFINE('MYSQL_DB_HOSTNAME', $mysql_db_hostname);
}
if (!defined('MYSQL_DB_USER')) {
	DEFINE('MYSQL_DB_USER', $mysql_db_user);
}
if (!defined('MYSQL_DB_PASSWORD')) {
	DEFINE('MYSQL_DB_PASSWORD', $mysql_db_password);
}
if (!defined('MYSQL_DB_DATABASE')) {
	DEFINE('MYSQL_DB_DATABASE', $mysql_db_database);
}


$con = @mysqli_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password,
    $mysql_db_database);

if (!$con) {
    trigger_error('Error Connecting to DataBase: ' . mysqli_connect_error());
}



if (!defined('SITE_BASE_URL')) {
	if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
	$site_url = $protocol . "://" .$_SERVER['SERVER_NAME'];
	if ($_SERVER['SERVER_NAME'] == 'localhost') {
		$site_url = $site_url. '/demo';
	}

	define('SITE_BASE_URL', $site_url);
}
if (!defined('BASE_PATH')) {
	DEFINE('BASE_PATH', $site_url);
}
// echo $_SERVER['_SERVERR_NAME'] . $_SERVER['REQUEST_URI'];
if (!defined('AFTER_LOGIN_REDIRECT_URL')) {
	define('AFTER_LOGIN_REDIRECT_URL', SITE_BASE_URL);
}

function createLoginSession($data = array()) {
	$_SESSION['Nris_session'] = $data;
	return $_SESSION['Nris_session'];
}

if (session_id() != '' && is_array($_SESSION['Nris_session'])) {
$currentTime = strtotime(date('Y-m-d H:i:s'));
$loggedInTime = strtotime($_SESSION['Nris_session']['loggedTime']);

//echo $currentTime-$loggedInTime;
if(($currentTime-$loggedInTime) > 15*60) {
	$email = $_SESSION['Nris_session']['email'];
	mysql_query("UPDATE register SET login_status = 'N' where email ='".$email."' and isactive = 1");
	
	$_SESSION['Nris_session']="";
	unset($_SESSION['Nris_session']);
	
	$_SESSION['state']="";
	unset($_SESSION['state']);	
	
	$_SESSION['ViewId']="";
	unset($_SESSION['ViewId']);		
	
	echo "<script>alert('your session has timed out');</script>";
	header('location:index.php');
	exit;
}
}

include_once('common_functions.php');

?>

	