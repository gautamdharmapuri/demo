<?php
error_reporting(0);

include "config/connection.php";
if (session_id() != '' && is_array($_SESSION['Nris_session'])) {
	$currentTime = strtotime(date('Y-m-d H:i:s'));
	$loggedInTime = strtotime($_SESSION['Nris_session']['loggedTime']);
	
	if(($currentTime-$loggedInTime) > 15*60) {
		$email = $_SESSION['Nris_session']['email'];
		mysql_query("UPDATE register SET login_status = 'N' where email ='".$email."' and isactive = 1");
		
		$_SESSION['Nris_session']="";
		unset($_SESSION['Nris_session']);
		
		$_SESSION['state']="";
		unset($_SESSION['state']);	
		
		$_SESSION['ViewId']="";
		unset($_SESSION['ViewId']);		
		
		echo -1;exit;
	}
}
$today=date('Y-m-d',strtotime(date('Y-m-d')));  
$last_id = $_GET['id'];
$state = ($_GET['State'] != '') ? $_GET['State'] : '';
$chat_topic = ($_GET['chat_topic'] != '') ? $_GET['chat_topic'] : 'General';

if($_GET['isInitial'] == "true") {
    $sql = "SELECT * FROM `dt_homechat` WHERE state_code = '".$state."'
                     AND chat_topic = '".$chat_topic."' AND created >= (NOW() - INTERVAL 1 DAY)
                     ORDER BY id ASC";
    $query = mysql_query($sql);    
} else {
    $sql = "SELECT * FROM `dt_homechat` WHERE DATE(created) ='$today' AND id >'$last_id'
                     AND state_code = '".$state."' AND chat_topic = '".$chat_topic."'
                     ORDER BY id ASC LIMIT 1";
    $query = mysql_query($sql);
}
$rows=mysql_num_rows($query);
if($rows) {
    /*$row=mysql_fetch_array($query);
    $username=$row['user_name'];
    $id=$row['id'];
    $msg=stripslashes($row['msg']);
    $msg_time = date('h:i A M d',strtotime($row['created']));
        $data['posts']=array('id'=>$id,'user'=>$username,'msg'=>$msg,'msg_time'=>$msg_time);
	echo json_encode($data);*/
        while ($row = mysql_fetch_array($query)) {
            $username = $row['user_name'];
            $id = $row['id'];
            $msg = stripslashes($row['msg']);
            $msg_time = date('h:i A M d',strtotime($row['created']));
            $data[] = array('id'=>$id,'user'=>$username,'msg'=>$msg,'msg_time'=>$msg_time);
        }
        echo json_encode($data);
	}
else 
echo 0;
?>