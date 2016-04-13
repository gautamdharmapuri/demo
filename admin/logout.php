<?php 	session_start();
	include"config/connection.php";
	$_SESSION['USNRIs_session']="";
	unset($_SESSION['USNRIs_session']);
	header('location:index.php');
	exit;
?>