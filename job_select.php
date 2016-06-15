<?php error_reporting(0);
	  include"config/connection.php";	  
	 
	$unm=$_GET['q'];
	$query_cities="select * from job_role where job_cat_id='".$unm."'";		
	$result_citites=mysql_query($query_cities);
		
		echo '<select class="form-control select" name="SubBrand" id="SubBrand" tabindex="4">';

		   while($drop_2 = mysql_fetch_array( $result_citites )) 
			{
			  echo '<option value="'.$drop_2['id'].'">'.$drop_2['role'].'</option>';
			}
	
	echo '</select> ';
	
?>
