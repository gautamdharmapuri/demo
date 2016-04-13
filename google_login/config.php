<?php
session_start();
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = '333114714696-biida8pektompj3pm2i4ebid87p0l5nc.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = 'o2xpHKGhWSNVMdLwVZIF3_He'; //Google CLIENT SECRET
$redirectUrl = 'http://nrislocal.com/google_login';  //return url (url to script)
$homeUrl = 'http://nrislocal.com/google_login';  //return to home

##################################

$gClient = new Google_Client();
$gClient->setApplicationName('Sample login google');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>