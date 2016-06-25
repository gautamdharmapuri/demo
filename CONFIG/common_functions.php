<?php


if(isset($_GET['State']) && $_GET['State'] != '') {
	
	$_SESSION['state'] = $_GET['State'];
	
} elseif(isset($_GET['state']) && $_GET['state'] != '') {

	$_SESSION['state']=$_GET['state'];
	
} elseif(isset($_GET['code']) && $_GET['code'] != '') {
	
	$_SESSION['state']=$_GET['code'];
	
} else {
}
$state = $defaultState = $_SESSION['state'];

$serverName = $_SERVER['SERVER_NAME'];

$pos = strpos($serverName, 'gautam.com');
if ($pos !== false) {
		$originalName = 'gautam.com';
		$originalNameUrl = '.gautam.com';
} else{
		$originalName = 'nris.com';
		$originalNameUrl = '.nris.com';
}

function send_respond_mail($data,$email) {   
	global $config;
	$frm = 'info@usnris.com';                 
	$subject = "Response to ad";
	$headers = "MIME-Version: 1.0\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= 'From:' . $frm . "\r\n";            
	$htmlmsg = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				</head>
				<body style="background-color:#F6F6F6;">
				<div id="container" style="width:600px;padding:0;margin:0 auto;height:auto;background-color:#FFF;">
				<div id="head2" style="background:#325D88;height:18%;padding:4px;">
				<div><img src="img/logo.png" width=350px height=100px></div>
				</div>
				<div id="message" style="height:auto;border-bottom:1px solid #ccc;margin:10px;">
				<h3>'.date('M d,Y').'</h3>
				<h3>Email Verification Letter</h3></div>
				<div id="order" style="height:auto;border-bottom:1px solid #ccc;margin:10px;">                         
				<p>You have got a response from usnris user</p>
				<strong>Name :</strong><span>'.$data['name'].'</span><br>
				<strong>Email :</strong><span>'.$data['email'].'</span><br>
				<strong>Message :</strong><span>'.$data['message'].'</span>
				<br>
				</div>
				<div id="footer" style="border-top:1px solid #ccc;margin:10px;text-align:center;">Copyright '.date('Y').' usnris, All rights reserved.</div>
				</div>        
				</body>
				</html>';
				//echo $htmlmsg;exit;
	if(@mail($email, $subject, $htmlmsg, $headers))
	{   
		return "Mail Sent Successfully";
	}
}

?>