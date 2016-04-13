<?php error_reporting(0);   session_start();
	  include"config/connection.php";	  
	  if(!isset($_SESSION['USNRIs_session']))
	  
	   {
	      header('location:index.php');
		  exit;
	   }
/*			echo $_SESSION['USNRIs_session']['username'];
			echo $_SESSION['USNRIs_session']['category'];			*/


	$unm=$_GET['q'];
	$query_cities="select * from cities where state_code='".$unm."'";		
	/*echo $query_cities;
	exit;*/
	$result_citites=mysql_query($query_cities);
		
		echo '<select class="form-control select" data-style="btn-success" name="txtcity" id="txtcity">
	      <option value="" disabled="disabled" selected="selected">Select City</option>';

		   while($drop_2 = mysql_fetch_array( $result_citites )) 
			{
			  echo '<option value="'.$drop_2['id'].'">'.$drop_2['city'].'</option>';
			}
	
	echo '</select> ';
	
?>
