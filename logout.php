<?php
session_start();
include"config/connection.php";
error_reporting(-1);
$email = $_SESSION['Nris_session']['email'];
mysql_query("UPDATE register SET login_status = 'N' where email ='".$email."' and isactive = 1");
$_SESSION['Nris_session']="";
unset($_SESSION['Nris_session']);
$_SESSION['state']="";
unset($_SESSION['state']);		
$_SESSION['ViewId']="";
unset($_SESSION['ViewId']);

if (!headers_sent())
	header('location:index.php');
else {
	echo '<script type="text/javascript">';
	echo 'window.location.href="index.php";';
	echo '</script>';
	echo '<noscript>';
	echo '<meta http-equiv="refresh" content="0;url='.$filename.'" />';
	echo '</noscript>';
}
exit;