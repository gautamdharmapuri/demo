<?php  include"config/connection.php";	   
if(isset($_GET['ViewId']))
{
	$_SESSION['ViewId']=$_GET['ViewId'];
}
else
{
	$_SESSION['ViewId']=$_SESSION['ViewId'];
	
}

$current_URL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 

?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head><base href="/">

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Theater View | NRIs</title>
	<meta name="description" content="NRIs">
	<meta name="author" content="nris.com">
	
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
    
    	<link rel='stylesheet' type='text/css' href='css/rate.css'>
        
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
</style> 

<script language="javascript" type="text/javascript">
	function frmchk()
	{
		data  = document.getElementById('Comment').value;
				 if (data.length < 5)	
				{
						alert('Please Enter your Comment');					
						document.getElementById('Comment').focus();
						return false;
				}
		return true;
	}
</script>   
</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="loader"><div class="loader_html"></div></div>

	<?php if(isset($defaultState) && $defaultState != '') { ?>
		<?php include "config/menu_inner_state.php" ;  ?>
	<?php } else { ?>
		<?php include "config/menu.php" ;  ?>
	<?php } ?>
	
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

                       <br><h4 class="myheadline4">
							<?php if(isset($defaultState) && $defaultState != '') { ?>
								<a href="<?php echo $siteUrlConstant;?>state?State=<?php echo $defaultState;?>" style="color:#0033FF;">Home</a>
							<?php } else { ?>
								<a href="<?php echo $siteUrlConstant;?>" style="color:#0033FF;">Home</a>
							<?php } ?>>> Theater >> 
					   <?php 
					  	 $query = "SELECT fam_theaters.*,cities.city as cityName FROM fam_theaters
				LEFT JOIN cities ON cities.id = fam_theaters.city_id
				WHERE md5(fam_theaters.id) = '".$_GET['ViewId']."' ";
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
									echo ucwords($rs['name']); 
					    ?></h4>
                        


<p class="mydata" align="center" style="text-align:center;">
		<?php   if (strpos($rs['image'],'.') !== false) {  ?>
        <img src="admin/uploads/theaters/<?php echo $rs['image'];?>" width="80%" style="height:400px !important;"  class="imgframe"> 	<?php }  else {  ?>
        <img src="admin/img/no_image.png" height="auto" width="300" class="imgframe">
        <?php } ?>

</p>




<p class="mydata"><b>Theater Type :</b> <?php echo ucwords($rs['theater_type']); ?></p>
<p class="mydata"><b>Contact Number  :</b> <a class="call_link" href="tel:<?php echo $rs['contact']; ?>"><?php echo ucwords($rs['contact']); ?></a></p>
<p class="mydata"><b>Theater City  :</b> <?php echo ucwords($rs['cityName']); ?></p>
<p class="mydata"><b>Theater Address  :</b> <a href="https://maps.google.com/maps?saddr=&daddr=<?php echo urlencode($rs['address']);?>" target="_blank" class="address_link">
		<span class="glyphicon-map-marker"></span>
		<?php echo ucwords($rs['address']); ?>
	</a></p><br>
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