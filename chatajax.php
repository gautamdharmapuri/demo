<?php
error_reporting(0);
include "config/connection.php";
if($_POST)
{
$user = htmlentities($_POST['user']);
$msg = addslashes($_POST['msg']);

$state = ($_POST['State'] != '') ? $_POST['State'] : '';
$chat_topic = ($_POST['chat_topic'] != '') ? $_POST['chat_topic'] : 'General';

mysql_query("INSERT INTO dt_homechat(`user_name`,`msg`,`state_code`,`chat_topic`) VALUES ('$user','$msg','$state','$chat_topic')");
$sql=mysql_query("SELECT id FROM `dt_homechat` WHERE user_name='".$user."' AND state_code = '".$state."' AND chat_topic = '".$chat_topic."' ORDER BY id DESC LIMIT 1");

$row=mysql_fetch_array($sql);
$id=$row['id'];
$user="me";
$msg_time = date('h:i A M d',time()); // current time
echo '<div class="shout_msg" id="'.$id.'"><time>'.$msg_time.'</time><span class="username">'.$user.'</span><div class="message">'.stripslashes($msg).'</div></div>';
} ?>