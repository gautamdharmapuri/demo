<?php
error_reporting(0);
include "config/connection.php"; 
$today=date('Y-m-d',strtotime(date('Y-m-d')));  
$last_id = $_GET['id'];
$state = ($_GET['State'] != '') ? $_GET['State'] : '';
$chat_topic = ($_GET['chat_topic'] != '') ? $_GET['chat_topic'] : 'General';
$query = mysql_query("SELECT * FROM `dt_homechat` WHERE DATE(created) ='$today' AND id >'$last_id'
                     AND state_code = '".$state."' AND chat_topic = '".$chat_topic."'
                     ORDER BY id DESC");
$rows=mysql_num_rows($query);
if($rows) {
$row=mysql_fetch_array($query);
$username=$row['user_name'];
$id=$row['id'];
$msg=stripslashes($row['msg']);
$msg_time = date('h:i A M d',strtotime($row['created']));
	$data['posts']=array('id'=>$id,'user'=>$username,'msg'=>$msg,'msg_time'=>$msg_time);
	echo json_encode($data);
	}
else 
echo 0;
?>