<?php
error_reporting(0);  include"config/connection.php";
$sql=mysql_query("select state,state_code from states where state like '".$_GET['term']."%' GROUP BY state ORDER BY state ASC LIMIT 20");
$cnt = 0;
while($row = mysql_fetch_array($sql)) {
    $data[$cnt]['value'] =  $row['state'];
    $data[$cnt]['label'] =  $row['state'];
    $data[$cnt++]['id'] =  $row['state_code'];
}
echo json_encode($data);exit;
?>