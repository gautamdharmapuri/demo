<?php
include_once("inc/facebook.php"); //include facebook SDK
######### Facebook API Configuration ##########
$appId = '688638491203531'; //Facebook App ID
$appSecret = '9de9361185249a6d79cb8f1595580ad6'; // Facebook App Secret
$homeurl = 'http://nrislocal.com/fb_login/';  //return to home
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));
$fbuser = $facebook->getUser();
?>