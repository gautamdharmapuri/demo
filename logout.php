<?php 	session_start();
	include"config/connection.php";
	
	$email = $_SESSION['Nris_session']['email'];
	mysql_query("UPDATE register SET login_status = 'N' where email ='".$email."' and isactive = 1");
	
	$_SESSION['Nris_session']="";
	unset($_SESSION['Nris_session']);
	
	$_SESSION['state']="";
	unset($_SESSION['state']);	
	
	$_SESSION['ViewId']="";
	unset($_SESSION['ViewId']);		
	
	header('location:index.php');
	exit;
?>