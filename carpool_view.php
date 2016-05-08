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
	<title><?php echo $_SESSION['state'];  ?> Carpool View | NRIs</title>
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
		
		
			$query1 = "SELECT carpool.*,c1.city as from_cityname,c2.city as to_cityname, s1.state as from_statename,s2.state as to_statename 
						FROM carpool
						LEFT JOIN cities as c1 ON c1.id = carpool.from_city
						LEFT JOIN cities as c2 ON c2.id = carpool.to_city
						
						LEFT JOIN states as s1 ON s1.state_code = carpool.from_state
						LEFT JOIN states as s2 ON s2.state_code = carpool.to_state
						WHERE md5(carpool.id) = '".$_GET['id']."'";
			$result=mysql_query($query1);
			$rs=mysql_fetch_array($result);
			$total_views = $rs['total_views'] + 1 ;
			///mysql_query("update post_free_auto set total_views='".$total_views."' where md5(id) = '".$_GET['ViewId']."'");
				
					   ?>               
        <div class="widget-temple">
	<h4><a href="state.php?State=<?php echo $state;?>" style="color:#0033FF;">Home</a> >> Carpool</h4>
       
</div>
<br>
		
        <div class="col-md-12" >
          <table class="table table-bordered">
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Name</th>                                         
                                             <th> <?php echo ucwords($rs['name']);   ?> </th>
                                         	</tr>
                                       </thead>
									   <thead>
                                       		<tr>
                                       		<th>Email</th>                                         
                                             <th> <?php echo $rs['email'];   ?> </th>
                                         	</tr>
                                       </thead>
									   <thead>
                                       		<tr>
                                       		<th>Mobile</th>                                         
                                             <th> <?php echo ucwords($rs['mobile']);   ?> </th>
                                         	</tr>
                                       </thead>
									   <thead>
                                       		<tr>
                                       		<th>Type</th>                                         
                                             <th> <?php echo ucwords($rs['type']);   ?> </th>
                                         	</tr>
                                       </thead>
                                       
									   <?php if($rs['from_statename'] != '') { ?>
											<thead>
												 <tr>
												 <th>From State</th>                                         
												  <th> <?php echo ucwords($rs['from_statename']);   ?> </th>
												 </tr>
											</thead>
									   <?php } ?>
									   <?php if($rs['to_statename'] != '') { ?>
											<thead>
												 <tr>
												 <th>To State</th>                                         
												  <th> <?php echo ucwords($rs['to_statename']);   ?> </th>
												 </tr>
											</thead>
									   <?php } ?>
									   <thead>
                                       		<tr>
                                       		<th>Country</th>                                         
                                             <th> <?php echo ucwords($rs['country']);   ?> </th>
                                         	</tr>
                                       </thead>
									   <thead>
                                       		<tr>
                                       		<th>From City</th>                                         
                                             <th> <?php echo ucwords($rs['from_cityname']);   ?> </th>
                                         	</tr>
                                       </thead>
									   <thead>
                                       		<tr>
                                       		<th>To City</th>                                         
                                             <th> <?php echo ucwords($rs['to_cityname']);   ?> </th>
                                         	</tr>
                                       </thead>
									   
									   
									   <thead>
                                       		<tr>
                                       		<th>Start Date&Time</th>                                         
                                             <th> <?php echo $rs['start_date'].' '.$rs['start_time'];   ?> </th>
                                         	</tr>
                                       </thead>
									   <thead>
                                       		<tr>
                                       		<th>End Date&Time</th>                                         
                                             <th> <?php echo $rs['end_date'].' '.$rs['end_time'];   ?> </th>
                                         	</tr>
                                       </thead>
									   <thead>
                                       		<tr>
                                       		<th>Flexible With Dates</th>                                         
                                             <th> <?php echo ucwords($rs['flex_date']);   ?> </th>
                                         	</tr>
                                       </thead>
									   <thead>
                                       		<tr>
                                       		<th>Flexible With Times</th>                                         
                                             <th> <?php echo ucwords($rs['flex_time']);?> </th>
                                         	</tr>
                                       </thead>
									   <thead>
                                       		<tr>
                                       		<th>Flexible With Location</th>                                         
                                             <th> <?php echo ucwords($rs['flex_location']);?> </th>
                                         	</tr>
                                       </thead>
                                    </table>              
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
	
</body>
</html>