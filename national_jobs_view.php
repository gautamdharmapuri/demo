<?php error_reporting(0);  include"config/connection.php";	  


if(isset($_GET['State']))
{
	$_SESSION['state']=$_GET['State'];
}
else
{
	$_SESSION['state']=$_SESSION['state'];
	
}

//	echo $_SESSION['state'];
 ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title><?php echo $_SESSION['state'];  ?> Jobs Ad View | NRIs</title>
	<meta name="description" content="NRIs">
	<meta name="author" content="NRIs">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="img/favicon.png">
	<!-- Main Style -->
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Skins -->
	<link rel="stylesheet" href="css/skins/skins.css">
	
	<!-- Responsive Style -->
	<link rel="stylesheet" href="css/responsive.css">
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.png">
    
    <link href='https://fonts.googleapis.com/css?family=Roboto|Montserrat' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/bootstrap.css"><!--
    <link rel="stylesheet" href="css/tab.css">-->
  	<link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/lists.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/settings.css">
    <link rel="stylesheet" href="css/animate-custom.css">    
    
    	<link rel="stylesheet" href="css/tab/style.css"> <!-- Resource style -->
	<script src="js/tab/modernizr.js"></script> <!-- Modernizr -->
    
                <script src="css/modal/jquery.min.js"></script>            
            <script src="css/modal/bootstrap.min.js"></script>
  <!--[if !IE]><!-->
	
	<!--<![endif]-->
<style>
.mydata { color:#000000;text-align:justify;line-height:22px; }

.famous_btn
{
	background: #f73040 none repeat scroll 0 0;
    border-radius: 5px;
    color: #fff;    
    font-family: "Montserrat",sans-serif;
    font-size: 11px;
    font-weight: 500;
    height: auto;
    margin: 5px 15px;
    padding: 10px 5px;
	color:#FFFFFF;	
    width: auto !important;
	text-align:center;
}
.famous_btn a
{ color:#FFFFFF;
}


.polaroid img {
  border: 10px solid #fff;
  border-bottom: 45px solid #fff;
  -webkit-box-shadow: 3px 3px 3px #777;
     -moz-box-shadow: 3px 3px 3px #777;
          box-shadow: 3px 3px 3px #777;
}
th
{
background-color:#f1f5f9;
color:#56688a;
font-size:12px;
}
</style>    
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>



		<?php   include "config/menu_inner_state.php" ;  ?>
	
	<div class="clearfix"></div>

    
		<div class="stock-scroll">
		
				<div class="col-md-12">
                SCROLLING TEXT GOES HERE
                </div>
       
        </div>     
	
	

     
     

     
    
<!-- Section-1 WRAP START-->	
<div class="section-1-wrap">	
<!-- Section-1 START-->	
		<div class="section-1">
        
        
        
        <!-- COLUMN LEFT -->	
        <?php include_once('state_common_left.php');?><!-- COLUMN LEFT ENDS -->	
        
        <!-- COLUMN MIDDLE -->	
        <div class="col-md-8 inner-middle-wrap">
        
        	<!-- TOP ADVERTISE -->
            <!-- TOP ADVERTISE END-->
            
            
            <!-- TOP BUTTONS -->
           
            <!-- TOP BUTTONS ENDS-->
            
            <!-- FIRST TABLE -->
            <div class="col-md-12" style="text-align:left;color:#000000;"> 

        <?php
			$query="select a.*, b.name, c.role from post_free_job a, job_category b, job_role c where a.Category = b.id and a.Job_Role=c.id and md5(a.id) = '".$_GET['ViewId']."'"; 
			$result=mysql_query($query);
			$rs=mysql_fetch_array($result);	
			$total_views = $rs['total_views'] + 1 ;
			mysql_query("update post_free_job set total_views='".$total_views."' where md5(id) = '".$_GET['ViewId']."'");
			
			$query2 = "select city from cities where id = ".$rs['City'];
			$result2 = mysql_query($query2);
			$rs2 = mysql_fetch_array($result2);
			$cityName = $rs2['city'];
			
			
						if($rs['Address'] != '') {
							$addArr[] = $rs['Address'];
						}
						if($cityName != '') {
							$addArr[] = $cityName;
						}
						if($rs['state'] != '') {
							$addArr[] = $rs['state'];
						}
						$addArr[] = 'US';
						$address = urldecode(implode(',',$addArr));
						$geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$address.'&sensor=false');

						$output= json_decode($geocode); //Store values in variable
						
						if($output->status == 'OK'){ // Check if address is available or not
						  $lat = $output->results[0]->geometry->location->lat; //Returns Latitude
						  $lng = $output->results[0]->geometry->location->lng; // Returns Longitude
						}
			?>               
                       
<div class="widget-temple">
	<h4><a href="state.php" style="color:#0033FF;">Home</a> >> Jobs</h4>
  <?php
		if(isset($_SESSION['Nris_session']))	  
		{ ?>
<a href="#" data-toggle="modal" data-target="#premium_post"  class="btn btn-default" style="background-color:#0000FF;color:#FFFFFF;float:right;">Create Premium Post <img src="images/arrow.gif"></a>    
<a href="#" data-toggle="modal" data-target="#free_post"  class="btn btn-default" style="background-color:#990033;color:#FFFFFF;float:right;">Create Free Post <img src="images/arrow.gif"></a>    
  <?php } else { ?> 
<a href="#"  data-toggle="modal" data-toggle="modal" data-target="#myModal" class="btn btn-default" style="background-color:#990033;color:#FFFFFF;float:right;" >Create Premium Ad&nbsp;<img src="images/arrow.gif"></a>   
<a href="#"  data-toggle="modal"  data-toggle="modal" data-target="#myModal"  class="btn btn-default" style="background-color:#0000FF;color:#FFFFFF;float:right;" >Create Free Post Ad&nbsp;<img src="images/arrow.gif"></a>
<?php } ?>   
</div><br>
           
		   <div class="col-md-7" >            
        <table class="table table-bordered">
                                       
                                        <thead>
                                       		<tr>
                                       		<th>Title</th>                                         
                                             <th> <?php    echo ucwords($rs['TitleAD']);   ?> </th>
                                         	</tr>
                                       </thead>  
                                       
                                        <thead>
                                       		<tr>
                                       		<th>Job Details</th>                                         
                                             <th> <?php    echo ucwords($rs['Message']);   ?> </th>
                                         	</tr>
                                       </thead>  
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Category</th>                                         
                                             <th> <?php    echo ucwords($rs['name']);   ?> </th>
                                         	</tr>
                                       </thead>
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Job Role</th>                                         
                                             <th> <?php    echo ucwords($rs['role']);   ?> </th>
                                         	</tr>
                                       </thead> 
                                       
                                    
                                     
                                     
                                     <thead>
                                       		<tr>
                                       		<th>City</th>                                         
                                             <th> <?php    echo ucwords($cityName);   ?> </th>
                                         	</tr>
                                     </thead>
                                       
                                       
                                       
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Employement Type</th>                                         
                                             <th> <?php    echo ucwords($rs['Emp_type']);   ?> </th>
                                         	</tr>
                                       </thead> 
                                       
                                        
                                       
                                        <thead>
                                       		<tr>
                                       		<th>Job Reference Id</th>                                         
                                             <th> <?php    echo ucwords($rs['Job_Ref_Id']);   ?> </th>
                                         	</tr>
                                       </thead> 
                                       
                                       
                                    
                                    <thead>
                                       		<tr>
                                       		<th>Contact Name</th>                                         
                                             <th> <?php    echo ucwords($rs['ConatctNAME']);   ?> </th>
                                         	</tr>
                                       </thead>
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Contact Number</th> 
                                            <th>   
                                              <?php
                                                if(isset($_SESSION['Nris_session']))	  
                                                { echo ucwords($rs['ConatctNumber']);  } else { ?>
											 <a href=""  data-toggle="modal" data-target="#myModal" style="color:#990000;" >Click Here to View</a>
											 <?php } ?> </th>                                                                                      
                                         	</tr>
                                       </thead>
                                       
                                       
                                     
                                       
                                      
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Email</th> 
                                            <th>
                                            <?php
                                                if(isset($_SESSION['Nris_session']))	  
                                                { echo strtolower($rs['ConatctEmail']);  } else { ?>
											 <a href=""  data-toggle="modal" data-target="#myModal" style="color:#990000;" >Click Here to View</a>
											 <?php } ?> </th>                                          
                                         	</tr>
                                       </thead>
                                  
                                       
                                        
                                     <thead>
                                       		<tr>
                                       		<th>URL</th>                                         
                                             <th> <?php    echo strtolower($rs['URL']);   ?> </th>
                                         	</tr>
                                     </thead>
                                       
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Ad Expiry Date</th>                                         
                                             <th> <?php echo date("d M, Y",strtotime($rs['EndDate'])); ?> </th>
                                         	</tr>
                                       </thead>
                                    
                                    
                                    </table>               
                       
        </div>
		
		<div class="col-md-5" >
		              
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function () {
// Define the latitude and longitude positions
var latitude = parseFloat("<?php echo $lat; ?>"); // Latitude get from above variable
var longitude = parseFloat("<?php echo $lng; ?>"); // Longitude from same
var latlngPos = new google.maps.LatLng(latitude, longitude);
// Set up options for the Google map
var myOptions = {
zoom: 17,
center: latlngPos,
mapTypeId: google.maps.MapTypeId.ROADMAP,
zoomControlOptions: true,
zoomControlOptions: {
style: google.maps.ZoomControlStyle.LARGE
}
};
// Define the map
map = new google.maps.Map(document.getElementById("googleMap"), myOptions);
// Add the marker
var marker = new google.maps.Marker({
position: latlngPos,
map: map,
title: "Address"
});
});
</script>
<div id="googleMap" style="width:100%;height:300px;" ></div>
		</div>

		
		
		    </div>
            <!-- TOP BUTTONS ENDS-->
            
            
        </div><!-- COLUMN MIDDLE ENDS -->	
        
        
        
        
        
        
        <!-- COLUMN RIGHT -->	
        <?php include_once('state_common_right.php');?><!-- COLUMN RIGHT ENDS -->	
			
            

               
               
               
                 
                    
        </div><!-- Section-1 ENDS -->
</div><!-- End Section-1 WRAP -->

	
    
    	
	
    
    
    
	
	 <?php include "config/footer.php" ; ?><!--End footer -->
    



<div class="go-up"><i class="fa fa-chevron-up"></i></div>
<script src="js/tab/jquery-2.1.1.js"></script>
<script src="js/tab/main.js"></script> <!-- Resource jQuery -->


<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/html5.js"></script>
<script src="js/custom.js"></script>
<!-- End js -->

<?php include "config/social.php" ;  ?>
<!-- Modal  Free Post  -->
  <div class="modal fade" id="free_post" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Free Post</h4>
        </div>
        <div class="modal-body">
          <p style="color:#000000;font-size:14px;">Select your State in the map to post an ad Locally or selective state or through out the united states.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>  
  <!-- Modal  Free Post  End -->
  
  
  
   <!-- Modal  Premium Post  -->
  <div class="modal fade" id="premium_post" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Premium Post</h4>
        </div>
        <div class="modal-body">
          <p style="color:#000000;font-size:14px;">Select your State in the map to post an ad Locally or selective state or through out the united states.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- Modal  Premium Post  End --> 
</body>
</html>