<?php error_reporting(0);
include"config/connection.php";	   
$current_date = date('Y-m-d');

$pos = strpos($serverName, $originalName);
if ($serverName != $originalName && $serverName != 'www.'.$originalName) {
		$selectedState = str_replace($originalName,'',$serverName);
		
		$queryState = "select state_code from states where state = '".$selectedState."'";
		$stateRes = mysql_query($queryState);
		$stateRes = mysql_fetch_array($stateRes);
		$state = $defaultState = $_SESSION['state'] = $stateRes['state_code'];
		include_once('state_home.php');
} else {
		include_once('home.php');
}

?>
