<?php  include"config/connection.php";	   
$current_URL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head><base href="/">

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>National Training & Placement | NRIs</title>
	<meta name="description" content="NRIs">
	<meta name="author" content="nris.com">
	
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
  <!--[if !IE]><!-->
	            <script src="css/modal/jquery.min.js"></script>            
            <script src="css/modal/bootstrap.min.js"></script>
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





<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<div class="loader"><div class="loader_html"></div></div>



	<?php include "config/menu.php" ;  ?>
	
	<div class="clearfix"></div>

    
		<?php include_once('stock_block.php');?>
	
	<?php include_once('top_container_links.php');?>
     
    
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
                       <a href="<?php echo $siteUrlConstant;?>" style="color:#0033FF;">Home</a> >> <a href="<?php echo $siteUrlConstant;?>national_training?ViewId=3">National Training & Placement</a> >> 
					   <?php 
												   
					   
					   
					  				 $query="select a.*, b.name from natioal_batches a, national_batch_cat  b where a.category = b.id and md5(a.id) = '".$_GET['ViewId']."'";							
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
								
									$total_views = $rs['total_views'] + 1 ;
									mysql_query("update natioal_batches set total_views='".$total_views."' where md5(id) = '".$_GET['ViewId']."'");
									echo ucwords($rs['name']);
					    ?></h4>
                        


<p class="mydata" align="center" style="text-align:center;">
		<?php   if (strpos($rs['image'],'.') !== false) {  ?>
        <img src="admin/uploads/national_batches/<?php echo $rs['image'];?>" width="80%" height="auto" class="imgframe" alt="<?php echo ucwords($rs['title']); ?>"> 	<?php }  else {  ?>
        <img src="admin/img/no_image.png" height="auto" width="300" class="imgframe" alt="<?php echo ucwords($rs['title']); ?>">
        <?php } ?>

</p>


<div class="fb-share-button" data-href="<?php echo $current_URL ?>" data-layout="button" style="float:right;"></div>
<img src="img/share-twitter.png" alt="Twitter" style="float:right;margin-right:5px;">   				

<bR>



<p class="mydata"><b>Title :</b> <?php echo ucwords($rs['title']); ?></p>
<p class="mydata"><b>category :</b> 			<?php              echo ucwords($rs['name']);				?>     
</p>
<p class="mydata"><b>Details  :</b>  <?php echo ucfirst($rs['details']); ?></p><br>


					


                    
<br style="clear:both;"><br><br><br><br>

 <div class="dividerHeading">
    <h5 style="background:#ccc;padding:8px;font-weight:bold;text-align:center;"><span>Comment on this post</span></h5>
</div>
        
            <form novalidate="novalidate" method="post" action="" class="comment-form">               
              <div class="form-div ">
                    <div class="form-label">Message:</div>
                    <div class="form-field">
                    <textarea placeholder="Message" name="comment" class="form-control tiny" id="message" required></textarea>
                    </div>            
               </div>      
             <div class="form-submit-buttons">               
                <input name="comment_submit" value="Post Comment" class="no-comment btn btn-premium" type="submit" style="float:right">
             </div>
                <input class="form-control" name="post_id" value="623" type="hidden">
                <input class="form-control" name="commented_by" value="" type="hidden"><br>
           </form> 
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