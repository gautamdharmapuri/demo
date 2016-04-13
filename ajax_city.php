<?php  include"config/connection.php";	 
if($_POST['id'])
{
$id=$_POST['id'];
$sql=mysql_query("select * from cities where state_code='$id' order by city");
echo "<option selected='selected'>--Select City--</option>";
while($row=mysql_fetch_array($sql))
{
$id=$row['id'];
$data=$row['city'];
echo '<option value="'.$id.'">'.$data.'</option>';

}
}

?>