<?php
error_reporting(0);
include_once("config.php");
include_once("includes/functions.php");

if (!empty($_SESSION['Nris_session'])) {
	header('Location:'.SITE_BASE_URL);
}
//print_r($_GET);die;

if(isset($_REQUEST['code'])){
	$gClient->authenticate();
	$_SESSION['token'] = $gClient->getAccessToken();
	header('Location: ' . filter_var($redirectUrl, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
	$gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
	$userProfile = $google_oauthV2->userinfo->get();
	//DB Insert
	$gUser = new Users();
	$user_data = $gUser->checkUser('google',$userProfile['id'],$userProfile['given_name'],$userProfile['family_name'],$userProfile['email'],$userProfile['gender'],$userProfile['locale'],$userProfile['link'],$userProfile['picture']);
	$user_data['login_medium'] = 'google';
	$_SESSION['google_data'] = $userProfile;
	createLoginSession($user_data);
	header('Location: '.AFTER_LOGIN_REDIRECT_URL);
	$_SESSION['token'] = $gClient->getAccessToken();

	// $_SESSION['google_data'] = $userProfile; // Storing Google User Data in Session
	// header("location: account.php");
	// $_SESSION['token'] = $gClient->getAccessToken();
} else {
	$authUrl = $gClient->createAuthUrl();
}

if(isset($authUrl)) {
	echo '<a href="'.$authUrl.'"><img src="images/glogin.png" alt=""/></a>';
} else {
	echo '<a href="logout.php?logout">Logout</a>';
}

?>