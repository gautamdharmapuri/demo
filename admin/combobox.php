<?php
$hostname_connect = "localhost";
$database_connect = "multi_select";
$username_connect = "root";
$password_connect = "";
$connect = mysql_pconnect($hostname_connect, $username_connect, $password_connect) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("SET NAMES UTF8");
$aD = array();
$id = $_GET['value'];
$nameType = $_GET['name'];
if($nameType == 'type') {
	if($id!=""){
		mysql_select_db($database_connect, $connect);
		$query_subType = "SELECT * FROM subtype WHERE typeId=$id";
		$subType = mysql_query($query_subType, $connect) or die(mysql_error());		
		$totalRows_subType = mysql_num_rows($subType);
		if($totalRows_subType>0){
			while($row_subType = mysql_fetch_array($subType)){
				$aD[] = array($row_subType["subTypeId"],$row_subType["subTypeName"]);
			}
		}
	}
	
}
if($nameType == "subType"){
   if($id){
	   mysql_select_db($database_connect, $connect);
		$query_data = "SELECT * FROM `data` WHERE subTypeId=$id";
		$data = mysql_query($query_data, $connect) or die(mysql_error());
		$totalRows_data = mysql_num_rows($data);	
		if($totalRows_data>0){
			while($row_data = mysql_fetch_array($data)){
				$aD[] = array($row_data["dataId"],$row_data["dataName"]);
			}
		}
	}	
	
	
	
}

echo json_encode($aD);

?>
