<?php
error_reporting(0);
include "config/connection.php";
if($_POST)
{
$user=htmlentities($_POST['user']);
$msg=addslashes($_POST['msg']);

mysql_query("insert into dt_homechat(`user_name`,`msg`)values('$user','$msg')");
$sql=mysql_query("select id from `dt_homechat` where user_name='$user' order by id desc limit 1");

$row=mysql_fetch_array($sql);
$id=$row['id'];
$user="me";
$msg_time = date('h:i A M d',time()); // current time
echo '<div class="shout_msg" id="'.$id.'"><time>'.$msg_time.'</time><span class="username">'.$user.'</span><div class="message">'.stripslashes($msg).'</div></div>';
} ?>