<?php
//echo '<pre>';
$ip = $_POST['ip'];
$location = file_get_contents('http://freegeoip.net/json/'.$ip);
$locationArr = json_decode($location,true);
//print_r($locationArr);exit;
$finalLocation = ($locationArr['country_code'] != '') ? $locationArr['country_code'] : 'US';
if($locationArr['city'] != '') {
    //$finalLocation = $locationArr['city'].','.$finalLocation;
    $finalLocation = $locationArr['city'];
}
echo $finalLocation;exit;
?>