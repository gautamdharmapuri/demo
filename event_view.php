<?php error_reporting(0);  include"config/connection.php";
 ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head><base href="/">

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title><?php echo $defaultState;  ?> Events | NRIs</title>
	<meta name="description" content="NRIs">
	<meta name="author" content="NRIs"><?php include_once('tracking.php');?>
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="img/favicon.png">
	<!-- Main Style -->
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Skins -->
	
	
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
    
    <link rel="stylesheet" href="css/animate-custom.css">    
    
    	<link rel="stylesheet" href="css/tab/style.css"> <!-- Resource style -->
	<script src="js/tab/modernizr.js"></script> <!-- Modernizr -->
    
                <script src="css/modal/jquery.min.js"></script>            
            <script src="css/modal/bootstrap.min.js"></script>
  <!--[if !IE]><!-->
	
	<!--<![endif]-->
<style type="text/css">
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
</style>    
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>



		<?php   include "config/menu_inner_state.php" ;  ?>
	
	<div class="clearfix"></div>

    
		<?php include_once('stock_block.php');?>  
	
	

     
     

     
    
<!-- Section-1 WRAP START-->	
<div class="section-1-wrap">	
<!-- Section-1 START-->	
		<div class="section-1">
        
        
        
        <!-- COLUMN LEFT -->	
        <?php include_once('home_common_left.php');?><!-- COLUMN LEFT ENDS -->	
        
        <!-- COLUMN MIDDLE -->	
        <div class="col-md-8 inner-middle-wrap">
        
        	<!-- TOP ADVERTISE -->
            <!-- TOP ADVERTISE END-->
            
            
            <!-- TOP BUTTONS -->
           
            <!-- TOP BUTTONS ENDS-->
            
            <!-- FIRST TABLE -->
            <div class="col-md-12" style="text-align:left;color:#000000;"> 

                       <br><?php 
					  	 $query="select * from events  where md5(id) = '".$_GET['ViewId']."'";							
	
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
								//	echo ucwords($rs['temple_name']); 
									$total_views = $rs['total_views'] + 1 ;
									mysql_query("update events set total_views='".$total_views."' where md5(id) = '".$_GET['ViewId']."'");
					    ?>
<div class="widget-temple">
    <h4><a href="<?php echo $siteUrlConstant;?>" style="color:#0033FF;">Home</a> >> Events >> <?php echo ucwords($rs['category']); ?></h4>
</div>    <br>                          
                        


<p class="mydata" align="center" style="text-align:center;">
		<?php   if (strpos($rs['image'],'.') !== false) {  ?>
        <img src="admin/uploads/events/<?php echo $rs['image'];?>" width="80%" style="height:400px !important;"  class="imgframe" alt="<?php echo ucwords($rs['title']); ?>"> 	<?php }  else {  ?>
        <img src="admin/img/no_image.png" height="auto" width="300" class="imgframe" alt="<?php echo ucwords($rs['title']); ?>">
        <?php } ?>

</p>


<img src="img/share-facebook.png" alt="Facebook" style="float:right;">
<img src="img/share-twitter.png" alt="Twitter" style="float:right;margin-right:5px;">   				

<bR>


<p class="mydata"><b>Title :</b> <?php echo ucwords($rs['title']); ?></p>
<p class="mydata"><b>Category  :</b> <?php echo ucwords($rs['category']); ?></p>
<p class="mydata"><b>Details  :</b> <?php echo ucwords($rs['details']); ?></p>

<p class="mydata"><b>Address  :</b> <a href="https://maps.google.com/maps?saddr=&daddr=<?php echo urlencode($rs['address']);?>" target="_blank" class="address_link">
		<span class="glyphicon-map-marker"></span>
		<?php echo ucwords($rs['address']); ?>
	</a></p>
<p class="mydata"><b>City  :</b> <?php 
$query_city=mysql_query("select id,city from  cities where id='".$rs['city_id']."'");
															$rcity = mysql_fetch_array($query_city);
															echo ucwords($rcity['city']); ?></p>
<?php if($rs['url']!='') { ?>
<p class="mydata"><b>URL  :</b> <?php echo strtolower($rs['url']); ?></p>                                                            
<?php } ?>


<p class="mydata"><b>Event Start Date  :</b>&nbsp; <?php echo date("d M Y",strtotime($rs['sdate'])); ?><br>
<b>Event End Date  :</b>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo date("d M Y",strtotime($rs['edate'])); ?></p>

<br><br><br><br><br><br><br><br><br>	
		
            </div>
            <!-- TOP BUTTONS ENDS-->
            
            
        </div><!-- COLUMN MIDDLE ENDS -->	
        
        
        <!-- COLUMN RIGHT -->	
        <?php include_once('home_common_right.php');?><!-- COLUMN RIGHT ENDS -->	
			
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