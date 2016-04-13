<?php 	session_start();
	include"config/connection.php";
	$_SESSION['Nris_session']="";
	unset($_SESSION['Nris_session']);
	
	$_SESSION['state']="";
	unset($_SESSION['state']);	
	
	$_SESSION['ViewId']="";
	unset($_SESSION['ViewId']);		
	
	header('location:index.php');
	exit;
?>