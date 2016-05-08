<?php
error_reporting(0);
include "config/connection.php"; 
$today=date('Y-m-d',strtotime(date('Y-m-d')));  
$last_id=$_GET['id'];
$query = mysql_query("select * from `dt_homechat` WHERE DATE(created) ='$today' AND id >'$last_id' order by id desc");
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