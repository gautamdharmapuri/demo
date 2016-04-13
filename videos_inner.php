<?php error_reporting(0);  include"config/connection.php";	   
//echo $_SESSION['state'];
?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Movies / Videos | NRIs</title>
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
  <!--[if !IE]><!-->
	
    

        <link rel="stylesheet" href="css/fancybox/jquery.fancybox-buttons.css">
        <link rel="stylesheet" href="css/fancybox/jquery.fancybox.css">        
       
                <script src="css/modal/jquery.min.js"></script>            
            <script src="css/modal/bootstrap.min.js"></script>
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
.cat_heading
{
color: #3c3c3c;;font-family: "Montserrat",sans-serif;font-size: 18px;font-weight: 700;line-height: 3px; margin: 0;padding: 20px 0 10px;text-align: left;text-transform: uppercase;
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
<div class="section-1-wrap" style="min-height:650px;">	
<!-- Section-1 START-->	
		<div class="col-md-12">
				
              <?php if(isset($_GET['lang'])) { ?>
              
              
                <div class="col-md-4" style="margin:0 auto;">
            	
                    <?php /*?><div class="nri-talk" style="width:80%;margin-left:20px;">
                                <div class="heading-plain">
                                <h3>Show Timings and Places</h3>
                                </div>
                                <ul style="padding:0px 9px;">
                                    <li><a href="#">Loreal espum</a></li>
                                    <li><a href="#">Loreal espum</a></li>
                                </ul>                                   
                            </div><?php */?>
                            <div style="width:30%;float:left;">&nbsp;</div>
                            <div class="nri-talk" style="width:70%;">
                                          <div class="head-title-no-pad">
                                              <h4 class="cat_heading">Category</h4>
                                        </div>
                                                <div class="bord-cla">
                                                 <ul style="padding-left:5px;padding-right:5px;">
                                                       <?php
														$querys_video_cat="select * from  video_categories order by category_name";
														$results_video_cat=mysql_query($querys_video_cat);                                                
														while($row__video_cat=mysql_fetch_array($results_video_cat))
														{?>
                                                       
                                                        <li><a href="videos_inner.php?lang=<?php echo $_GET['lang'] ?>&cat=<?php echo $row__video_cat['category_name'] ?>"><?php echo $row__video_cat['category_name'] ?></a></li>
                                                        <?php } ?>
                                                        
                                              </ul>                                                         
                                              </div>        
                            </div>
                </div>        
				
                
                
                
                
                <div class="col-md-8"><br><br>
                	
                    <?php
					if(isset($_GET['cat']))
					{					
						$query="select * from  videos where language='".trim($_GET['lang'])."' and  category='".trim($_GET['cat'])."' order by id desc";
					}
					else	
					{
							$query="select * from  videos where language='".trim($_GET['lang'])."'  order by id desc";
					}		
					//	echo $query;
						$result=mysql_query($query);						
						if(mysql_num_rows($result) > 0) {
						while($rs=mysql_fetch_array($result))
						{	?>	
                        
                	<div class="col-md-2" style="padding:5px;margin:10px;">
                    
                    	<a class="various fancybox.iframe" title="<?php echo ucfirst($rs['title']); ?>" href="http://www.youtube.com/v/<?php echo $rs['video_id']; ?>?fs=1&amp;autoplay=1"><img src="http://img.youtube.com/vi/<?php echo $rs['video_id']; ?>/0.jpg"></a>
																				                    
                    </div>
                    
                    <?php }  } else { 
					

					if(!isset($_GET['cat']))
					{	?>
					
					<p><h5>Language : <?php echo $_GET['lang'];  ?></h5></p>					
   					<p><h4>No Videos Found.</h4></p>                    
                    
					
				<?php }  else  { ?>
                
                					<p><h5>Language : <?php echo $_GET['lang'];  ?></h5></p>
					<p><h5>Category : <?php echo $_GET['cat'];  ?></h5></p>
   					<p><h4>No Videos Found.</h4></p>                    
                    
                
                
                 <?php } 
				 }	?>
                	              
                
                </div>    
                
                
                
                
                
                
                
                <?php }  ?>    
		</div>
        <!-- Section-1 ENDS -->
</div><!-- End Section-1 WRAP -->

	
    
 	
	
    
    
<div style="clear:both"></div>    
	
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

<!-- Grab Google CDN's jQuery, fall back to local if offline -->
  		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  		<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
        
        
	<!-- FancyBox -->
		<script src="js/fancybox/jquery.fancybox.js"></script>
		<script src="js/fancybox/jquery.fancybox-buttons.js"></script>
		<script src="js/fancybox/jquery.fancybox-thumbs.js"></script>
        <script src="js/fancybox/jquery.easing-1.3.pack.js"></script>
		<script src="js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
        

        

        
        <script type="text/javascript">
        	$(document).ready(function() {
				$(".various").fancybox({
					maxWidth	: 800,
					maxHeight	: 600,
					fitToView	: false,
					width		: '70%',
					height		: '70%',
					autoSize	: false,
					closeClick	: false,
					openEffect	: 'elastic',
					closeEffect	: 'none'
				});
			});
		</script>

</body>
</html>