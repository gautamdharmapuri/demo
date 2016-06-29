<?php
include_once("config.php");
include_once("includes/functions.php");

if (!empty($_SESSION['Nris_session'])) {
	header('Location:'.$siteUrlConstant);
}
//destroy facebook session if user clicks reset
// var_dump($fbuser);exit;
if(!$fbuser){
	$fbuser = null;
	$loginUrl = $facebook->getLoginUrl(array('redirect_uri'=>$homeurl,'scope'=>$fbPermissions));
	$output = '<a href="'.$loginUrl.'"><img src="images/fb_login.png" alt="Facebook"></a>'; 	
}else{
	$user_profile = $facebook->api('/me?fields=id,first_name,last_name,email,gender,locale,picture');
	// print_r($user_profile);exit;
	$user = new Users();
	$user_data = $user->checkUser('facebook',$user_profile['id'],$user_profile['first_name'],$user_profile['last_name'],$user_profile['email'],$user_profile['gender'],$user_profile['locale'],$user_profile['picture']['data']['url']);
	// echo '<pre>';
	// print_r($user_data);exit;
	if(!empty($user_data)) {
		$user_data['login_medium'] = 'facebook';
		createLoginSession($user_data);
		header('Location: '.AFTER_LOGIN_REDIRECT_URL);
		/*$create_user_data['first_name'] = $user_data['fname'];
		$create_user_data['lname'] = $user_data['lname'];
		$create_user_data['email'] = $user_data['email'];

		$output = '<h1>Facebook Profile Details </h1>';
		$output .= '<img src="'.$user_data['picture'].'">';
        $output .= '<br/>Facebook ID : ' . $user_data['oauth_uid'];
        $output .= '<br/>Name : ' . $user_data['fname'].' '.$user_data['lname'];
        $output .= '<br/>Email : ' . $user_data['email'];
        $output .= '<br/>Gender : ' . $user_data['gender'];
        $output .= '<br/>Locale : ' . $user_data['locale'];
        $output .= '<br/>You are login with : Facebook';
        $output .= '<br/>Logout from <a href="logout.php?logout">Facebook</a>'; */
	}else{
		$output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
	}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login with Facebook using PHP by CodexWorld</title>
<style type="text/css">
h1{font-family:Arial, Helvetica, sans-serif;color:#999999;}
</style>
</head>
<body>
<div>
<?php echo !empty($output) ? $output : ''; ?>
</div>

</body>
</html>