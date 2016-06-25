<?php error_reporting(0);
include"config/connection.php";	   
$current_date = date('Y-m-d');

$pos = strpos($serverName, $originalName);
if ($serverName != $originalName && $serverName != 'www.'.$originalName) {
		
		$selectedState = str_replace($originalName,'',$serverName);
		$selectedState = str_replace('.','',$selectedState);
		#echo $selectedState;
		if($selectedState == 'newmexico') {
				$selectedState = 'New Mexico';
		} elseif($selectedState == 'southdakota') {
				$selectedState = 'South Dakota';
		} elseif($selectedState == 'southcarolina') {
				$selectedState = 'South Carolina';
		} elseif($selectedState == 'rhodeisland') {
				$selectedState = 'Rhode Island';
		} elseif($selectedState == 'newyork') {
				$selectedState = 'New York';
		} elseif($selectedState == 'newjersey') {
				$selectedState = 'New Jersey';
		} elseif($selectedState == 'newhampshire') {
				$selectedState = 'New Hampshire';
		}elseif($selectedState == 'northdakota') {
				$selectedState = 'North Dakota';
		} elseif($selectedState == 'northcarolina') {
				$selectedState = 'North Carolina';
		} elseif($selectedState == 'newhampshire') {
				$selectedState = 'New Hampshire';
		}
		
		$queryState = "select state_code from states where state = '".$selectedState."'";
		$stateRes = mysql_query($queryState);
		$stateRes = mysql_fetch_array($stateRes);
		$state = $defaultState = $_SESSION['state'] = $stateRes['state_code'];
		include_once('state_home.php');
} else {
		include_once('home.php');
}

?>
