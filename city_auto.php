<?php
error_reporting(0);
include"config/connection.php";

$where = '';
if(isset($_GET['state']) && (strtolower($_GET['state']) == 'all') || (strtolower($_GET['state']) == 'multiple')) {
    $_GET['state'] = '';
}
if(isset($_GET['state']) && $_GET['state'] != '') {
    $where = " AND state_code = '".$_GET['state']."'";
}


$sql=mysql_query("select id,city from cities where city like '".$_GET['term']."%' $where GROUP BY city ORDER BY city ASC LIMIT 20");
$cnt = 0;
while($row = mysql_fetch_array($sql)) {
    $data[$cnt]['value'] =  $row['city'];
    $data[$cnt]['label'] =  $row['city'];
    $data[$cnt++]['id'] =  $row['id'];
}
echo json_encode($data);exit;
?>