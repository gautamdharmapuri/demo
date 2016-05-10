<?php  include"config/connection.php";	 
if($_GET['id'])
{
$id = $_GET['id'];
$type = $_GET['type'];

switch($type) {
    case 'auto':
        $sql = " DELETE FROM post_free_auto WHERE id = ".$id;
        break;
    case 'baby_sitting':
        $sql = " DELETE FROM post_free_baby_sitting WHERE id = ".$id;
        break;
    case 'education':
        $sql = " DELETE FROM post_free_education WHERE id = ".$id;
        break;
    case 'electronics':
        $sql = " DELETE FROM post_free_electronics WHERE id = ".$id;
        break;
    case 'garagesale':
        $sql = " DELETE FROM post_free_garage_sale WHERE id = ".$id;
        break;
    case 'jobs':
        $sql = " DELETE FROM post_free_job WHERE id = ".$id;
        break;
    case 'mypartner':
        $sql = " DELETE FROM post_free_mypart WHERE id = ".$id;
        break;
    case 'realestate':
        $sql = " DELETE FROM post_free_real_estate WHERE id = ".$id;
        break;
    case 'roommates':
        $sql = " DELETE FROM post_free_roommates WHERE id = ".$id;
        break;
    case 'free_stuff':
        $sql = " DELETE FROM post_free_stuff WHERE id = ".$id;
        break;
}
mysql_query($sql);
}
header('location:myads.php');
		exit;

?>