<?php include"config/connection.php";
	$email=$_GET['MyemailId'];
	$pass=$_GET['MyPassword'];	
	$Lquery="select * from register where email ='".$email."' and password='".$pass."' and isactive = 1";
	//echo $Lquery;
	$Lresult=mysql_query($Lquery);
	$Lrow=mysql_num_rows($Lresult);
	if($Lrow>0)
	{
		$Lrow=mysql_fetch_array($Lresult);
		echo "Sucess";
	//	header("Refresh:2; url=page2.php");
	//	echo "<meta http-equiv='refresh' content='0'>";
		header('location:next');
		exit;
	}
	else
	{
		echo "Invalid";
	}
?>


