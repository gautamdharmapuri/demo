<?php error_reporting(0);  include"config/connection.php";	  
$current_date = date('Y-m-d');



//	echo $_SESSION['state'];
 ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>NRIs</title>
	<meta name="description" content="NRI's">
	<meta name="author" content="Rakesh Bagda">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Skins -->
	<link rel="stylesheet" href="css/skins/skins.css">
	
	<!-- Responsive Style -->
	<link rel="stylesheet" href="css/responsive.css">
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="img/favicon.png">
    
    <link href='https://fonts.googleapis.com/css?family=Roboto|Montserrat' rel='stylesheet' type='text/css'>
    <script src="js/jquery.min.js"></script>
   <link rel="stylesheet" href="css/bootstrap.css"><!--
    <link rel="stylesheet" href="css/tab.css">-->
  	<link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/lists.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/prettyPhoto.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontello/css/fontello.css">
    <link rel="stylesheet" href="css/settings.css">
    <link rel="stylesheet" href="css/animate-custom.css">    
    
    	<link rel="stylesheet" href="css/tab/style.css"> <!-- Resource style -->
		<script src="js/tab/modernizr.js"></script> <!-- Modernizr -->
  

            <script src="css/modal/jquery.min.js"></script>
			<script src="js/jquery.bxslider.js"></script>
            <link rel="stylesheet" href="css/jquery.bxslider.css">
            <script src="css/modal/bootstrap.min.js"></script>
    <script type="text/javascript">
                var j = jQuery.noConflict();
                j(document).ready(function(){
                    
                   j('#advert-grp').bxSlider({
                       auto:true,
                       autoHover:true,
                        controls:false,
                        slideWidth: 220,
                        minSlides: 3,
                        maxSlides: 3,
                        slideMargin: 10,
                        pager: false,
						moveSlides:3,
                        speed:6000
                    });
				   
				   var tempVar = 0;
				   setInterval(function(){
					    
						if (tempVar > 2) {
                            tempVar = 0;
                        }
						var randNum = tempVar;
						j('#desi_movies_link li a').removeClass('selected');
						j('#desi_movies_content li').removeClass('selected');
						j('#desi_movies_link li a:eq('+randNum+')').addClass('selected');
						j('#desi_movies_content li:eq('+randNum+')').addClass('selected');
						tempVar = randNum+1;
			        },3000);
                });
            </script>
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>



	<?php   include "config/menu_inner_state.php" ;  ?>
	
	<div class="clearfix"></div>

    
		<div class="stock-scroll">
		
				<div class="col-md-8">
                </div>
       
        </div>     
	
	
	
<div class="section-1-wrap">	
	
		<div class="section-inner-page">
			
            
<!-- WEATHER WIDGET -->
				<!-- RIGHT AD SECTION -->
                <div class="left-ad">
                    
                    
                           <div class="padding-no">
                        
                                <div class="left-section-1 col-md-2">
                                    <script src="widget/astrovisionjs.js"></script>
<link href="widget/astrovisioncss.css" rel="stylesheet">
<div id="astro_widget" style="border:1px solid black;padding: 5px;"><div id="astro_widget_content">
</div>
</div>
                                </div>
                                
                               
                            
                           </div> 
                            
               </div><!-- RIGHT AD SECTION ENDS -->   
                

<!-- MAIN MIDDLE SECTION-->
<div class="middle-section-master">

				<!-- TOP HALF AD STARTS-->
                <div class="top-half">
                    <ul class="advert-grp" id="advert-grp">
                        <?php
                        
                            $home_middle_query1 = "select * from us_ads where ad_position='Home-Top-Center-4' and status='Active' order by id desc";
                            $home_middle_res1 = mysql_query($home_middle_query1);
                            while ($home_dm1 = mysql_fetch_array($home_middle_res1)) {
                        ?>
                        <li>
                                <a href="#" >
									<?php
                                    if($home_dm1['edate'] >= $current_date) {
                                        echo '<a href="' . $home_dm1['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_dm1 ['image'].'"></a>';
                                    } else { 
                                        $home_middle_query1 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Top-Center-4' and ad_position_no='1' and edate < '".$current_date."' "); 
                                    ?>		            
                                        <img src="img/middle.jpg" alt="Advertisement">
                                    <?php } ?>                      
                                </a>
                            </li>	
                        <?php } ?>
                    	
                    
                  </ul><!-- TOP ADVERT FROUP ENDS -->
              </div> 
              
              
                
               <!-- TOP SECTION ONE STARTS -->                
				<div class="top-section-one">
                	<!-- TOP SECTION LEFT STARTS -->
                	<div class="top-section-one-left">
                     
                    	
                             <div class="cd-tabs">
                                                  <nav class="tab-head">
                                                      <ul class="cd-tabs-navigation" style="width:100%;">
                                                          <li class="tab-size tab-one" ><a style="" data-content="hot-list" class="selected" href="#0">Hot List Ads</a></li>
                                                          <li class="tab-size tab-two" ><a data-content="post-ad" href="#0" style="" >Just Pay $2 and post your ad here</a></li>
                                                           <li class="tab-size tab-three"><a data-content="relegious" href="#0" style="" >Religious</a></li>
                                                      </ul> <!-- cd-tabs-navigation -->
                                                  </nav>
                                                  
                                                  <ul class="cd-tabs-content" style="height:300px;">
                                                      <li data-content="hot-list" class="selected">
                                                          <div class="content-tab">
                                                              <p><a href="#">16 Mar<span> Ads title goes here</span></a></p>
                                                              <p><a href="#">16 Mar<span> Ads title goes here</span></a></p>
                                                              <p><a href="#">16 Mar<span> Ads title goes here</span></a></p>
                                                              <p><a href="#">16 Mar<span> Ads title goes here</span></a></p>
                                                              <p><a href="#">16 Mar<span> Ads title goes here</span></a></p>
                                                              <p><a href="#">16 Mar<span> Ads title goes here</span></a></p>
                                                              <p><a href="#">16 Mar<span> Ads title goes here</span></a></p>
                                                              <p><a href="#">16 Mar<span> Ads title goes here</span></a></p>
                                                          </div>    
                                                          <a href="#" class="read-btn-tab">View more</a>
                                                      </li>
                                                      
                                                      <li data-content="post-ad">
                                                      <div class="content-tab">
                                                             
                                                              <p><a href="#">16 Mar<span> Loream Ispum</span></a></p>
                                                              <p><a href="#">16 Mar<span> Loream Ispum</span></a></p>
                                                              <p><a href="#">16 Mar<span> Loream Ispum</span></a></p>
                                                              <p><a href="#">16 Mar<span> Loream Ispum</span></a></p>
                                                              <p><a href="#">16 Mar<span> Loream Ispum</span></a></p>
                                                              <p><a href="#">16 Mar<span> Loream Ispum</span></a></p>
                                                              <p><a href="#">16 Mar<span> Loream Ispum</span></a></p>
                                                              <p><a href="#">16 Mar<span> Loream Ispum</span></a></p>
                                                        </div>    
                                                          <a href="#" class="read-btn-tab">View more</a>
                                                      </li>
                                                      <li data-content="relegious">
                                                          <div class="content-tab">
                                                             
                                                              <p><a href="#">16 Mar<span> Loream Ispum</span></a></p>
                                                              <p><a href="#">16 Mar<span> Loream Ispum</span></a></p>
                                                              <p><a href="#">16 Mar<span> Loream Ispum</span></a></p>
                                                              <p><a href="#">16 Mar<span> Loream Ispum</span></a></p>
                                                              <p><a href="#">16 Mar<span> Loream Ispum</span></a></p>
                                                              <p><a href="#">16 Mar<span> Loream Ispum</span></a></p>
                                                              <p><a href="#">16 Mar<span> Loream Ispum</span></a></p>
                                                              <p><a href="#">16 Mar<span> Loream Ispum</span></a></p>
                                                          </div>    
                                                          <a href="#" class="read-btn-tab">View more</a>
                                                      </li>
                                                      
                                                  </ul> <!-- cd-tabs-content ends -->
                                                  
                            </div> <!-- cd-tabs ends-->
                            
                            
                           
                            
             
                        
                    </div><!-- TOP SECTION LEFT ENDS -->
                    
                   


                   

                   
                   
                   
                   
                    <!-- TOP SECTION RIGHT STARTS -->
                    <div class="top-section-one-right">
                    	<div class="full-btn-purple">
                        	<a href="#" data-toggle="modal" data-target="#change_state" style="padding: 5px 5px;">Switch State</a>
                        </div>
                        
                        <div class="full-btn-orange">
                        	<a href="<?php echo SITE_BASE_URL;?>" style="padding: 5px 5px;">National NRIs Page</a>
                        </div>
                        
                        <div class="movies">
                            <div class="full-btn">
                                <a href="#">Desi Movies</a>
                            </div>
                        
                                         <div class="cd-tabs" style="float:left;padding: 0 5px;width: 100%;margin-top:0;">
                                                  <nav>
                                                      <ul class="cd-tabs-navigation" style="width:100%;" id="desi_movies_link">
                                                          <li style="width:84px;"><a data-content="chicago" class="selected" href="#0" style="font-size:9px;height:35px;text-align:center; background:#d9d9d9;color:#3c3c3c;">Chicago</a></li>
                                                          <li  style="width:84px;"><a data-content="spring" href="#0" style="font-size:9px;height:35px;background:#d9d9d9;color:#3c3c3c;text-align:center;" >Spring Field</a></li>
                                                           <li  style="width:84px;"><a data-content="chicago-2" href="#0" style="font-size:9px;height:35px;background:#d9d9d9;color:#3c3c3c;text-align:center;" >Chicago</a></li>
                                                      </ul> <!-- cd-tabs-navigation -->
                                                  </nav>
                                                  
                                                  <ul class="cd-tabs-content height-content" style="height:188px;" id="desi_movies_content">
                                                      <li data-content="chicago" class="selected">
                                                          <div class="content-tab">
                                                              <img src="img/poster.jpg" alt="POSTER" width="100%" style="overflow:hidden;">
                                                          </div>    
                                                      </li>
                                                      
                                                      <li data-content="spring" >
                                                      <div class="content-tab">
                                                             <img src="img/poster.jpg" alt="POSTER" width="100%" style="overflow:hidden;">
                                                        </div>    
                                                          
                                                      </li>
                                                      <li data-content="chicago-2" >
                                                          <div class="content-tab">
                                                          <img src="img/poster.jpg" alt="POSTER" width="100%" style="overflow:hidden;">
                                                          </div>    
                                                      </li>
                                                      
                                                  </ul> <!-- cd-tabs-content ends -->
                                                  
                            </div> <!-- cd-tabs ends-->
                        </div><!-- MOVIES ends-->
                    
                    </div><!-- TOP SECTION RIGHT ENDS -->
                    
                       
				</div><!-- TOP SECTION ONE ENDS -->
             
                
</div><!-- MAIN MIDDLE SECTION  ENDS-->

                


                 <!-- LEFT AD SECTION -->
                    <div class="right-ad">
                    	<div class="col-md-12 padding-no">
                        
                                <div class="advert-big">
                                    <a href="#" >
                                        <img src="img/2_x_1-ad.jpg" alt="ADVERT">                        
                                    </a>
                                </div>
                                <div class="advert-big">
                                    <a href="#" >
                                        <img src="img/2_x_1-ad.jpg" alt="ADVERT">                        
                                    </a>
                                </div>
                                <div class="advert-big">
                                    <a href="#" >
                                        <img src="img/2_x_1-ad.jpg" alt="ADVERT">                      
                                    </a>
                                </div>	
                                <div class="advert-big">
                                    <a href="#" >
                                        <img src="img/2_x_1-ad.jpg" alt="ADVERT">                        
                                    </a>
                                </div>
                                <div class="advert-big">
                                    <a href="#" >
                                        <img src="img/2_x_1-ad.jpg" alt="ADVERT">                      
                                    </a>
                                </div>
                                <div class="advert-big">
                                    <a href="#" >
                                        <img src="img/2_x_1-ad.jpg" alt="ADVERT">                      
                                    </a>
                                </div>	
                                <div class="advert-big">
                                    <a href="#" >
                                        <img src="img/2_x_1-ad.jpg" alt="ADVERT">                      
                                    </a>
                                </div>
                                <div class="advert-big">
                                    <a href="#" >
                                        <img src="img/2_x_1-ad.jpg" alt="ADVERT">                      
                                    </a>
                                </div>	
                                
                               
                      </div> 
                    </div><!-- LEFT AD SECTION ENDS--> 

                
                <!-- RIGHT AD SECTION --><!-- RIGHT AD SECTION ENDS -->   
                 
                 
<!-- EVENTS SECTION --> 

 <!-- NEW  SECTION -->
                 	<div class="table-section-new">
                   
                    <div id="doc-menu">
                            <a href="auto_inner.php?code=<?php echo $_SESSION['state'] ?>">Autos</a>
                            <a href="baby_sitting_inner.php?code=<?php echo $_SESSION['state'] ?>">Baby Sitting</a>
                            <a href="education_inner.php?code=<?php echo $_SESSION['state'] ?>">Education & Teaching</a>
							<a href="electronics_inner.php?code=<?php echo $_SESSION['state'] ?>">Electronics</a>    
                            <a href="free_stuff_inner.php?code=<?php echo $_SESSION['state'] ?>">Free Stuff</a>
							 <a href="garagesale_inner.php?code=<?php echo $_SESSION['state'] ?>">Garage Sale</a>							
                            <a href="jobs_inner.php?code=<?php echo $_SESSION['state'] ?>">Jobs</a>
                            <a href="mypartner_inner.php?code=<?php echo $_SESSION['state'] ?>">My Partner</a> 
                            <a href="roommates_inner.php?code=<?php echo $_SESSION['state'] ?>">Roommates</a>
                            <a href="realestate_inner.php?code=<?php echo $_SESSION['state'] ?>">Real Estate</a>                           
                    </div>
                    
                       <div class="left-table">
                       
                       			<div class="state-l-head">
                                    <h3>Free Clasified</h3>
                                </div>
                               
                                        
                                        <?php
                                        if(isset($_SESSION['Nris_session']))	  
                                        { ?>
                                        <a href="#"  data-toggle="modal" data-target="#PostFreeAd" class="CreatAd">Post Free Ad&nbsp;<img src="images/arrow.gif"></a>                                        
                                         <a href="#" id="premium_custom_btn" data-toggle="modal" data-target="#PostPremiumAd"  class="CreatAd2"  >Create Premium Ad&nbsp;<img src="images/arrow.gif"></a>
                                        <?php } else { ?> 
                                         <a href="#"  data-toggle="modal"  data-toggle="modal" data-target="#myModal" class="CreatAd">Post Free Ad&nbsp;<img src="images/arrow.gif"></a>                                        
                                         <a href="#" id="premium_custom_btn" data-toggle="modal" data-toggle="modal" data-target="#myModal" class="CreatAd2"  >Create Premium Ad&nbsp;<img src="images/arrow.gif"></a>   

                                         <?php } ?>   <br>  
                               
                                
                                

<!-- Modal -->

  <div class="modal fade" id="PostFreeAd" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><center>Select Category</center></h4>
        </div>
        <div class="modal-body">
			
             <div id="myLoginuser"></div>  
            <div>
           
            <ul style="text-align:left;line-height:28px;">
                <li><a href="auto_create.php?code=<?php echo $_SESSION['state'] ?>">Auto</a></li>
                <li><a href="baby_sitting_create.php?code=<?php echo $_SESSION['state'] ?>">Baby Sitting</a></li>  
                <li><a href="education_create.php?code=<?php echo $_SESSION['state'] ?>">Education & Teaching</a></li>   
                <li><a href="electronics_create.php?code=<?php echo $_SESSION['state'] ?>">Electronics</a></li>
                <li><a href="create_free_stuff.php?code=<?php echo $_SESSION['state'] ?>">Free Stuff</a></li>                       
                <li><a href="garagesale_create.php?code=<?php echo $_SESSION['state'] ?>">Garage Sale</a></li>                          
                <li><a href="job_create.php?code=<?php echo $_SESSION['state'] ?>">Jobs</a></li>
                <li><a href="mypartner_create.php?code=<?php echo $_SESSION['state'] ?>">My Partner</a></li>            
                <li><a href="roommates_create.php?code=<?php echo $_SESSION['state'] ?>">Roommates</a></li>          
                <li><a href="realestate_create.php?code=<?php echo $_SESSION['state'] ?>">Real Estate</a></li>

            </ul>


            </div>
            
            
            
            
        </div>
        <div class="modal-footer" style="clear:both;">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<!-- Modal -->                        
                        
                        
                        
  <!-- Modal Premium -->

  <div class="modal fade" id="PostPremiumAd" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><center>Select Category</center></h4>
        </div>
        <div class="modal-body">
			
             <div id="myLoginuser"></div>  
            <div>
           
            <ul style="text-align:left;line-height:28px;">
                <li><a href="auto_create.php?code=<?php echo $_SESSION['state'] ?>&type=premium">Auto</a></li>
                <li><a href="baby_sitting_create.php?code=<?php echo $_SESSION['state'] ?>&type=premium">Baby Sitting</a></li>  
                <li><a href="education_create.php?code=<?php echo $_SESSION['state'] ?>&type=premium">Education & Teaching</a></li>   
                <li><a href="electronics_create.php?code=<?php echo $_SESSION['state'] ?>&type=premium">Electronics</a></li> 
                 <li><a href="create_free_stuff.php?code=<?php echo $_SESSION['state'] ?>&type=premium">Free Stuff</a></li>                                    
                <li><a href="garagesale_create.php?code=<?php echo $_SESSION['state'] ?>&type=premium">Garage Sale</a></li>                          
                <li><a href="job_create.php?code=<?php echo $_SESSION['state'] ?>&type=premium">Jobs</a></li>
                <li><a href="mypartner_create.php?code=<?php echo $_SESSION['state'] ?>&type=premium">My Partner</a></li>            
                <li><a href="roommates_create.php?code=<?php echo $_SESSION['state'] ?>&type=premium">Roommates</a></li>          
                <li><a href="realestate_create.php?code=<?php echo $_SESSION['state'] ?>&type=premium">Real Estate</a></li>

            </ul>


            </div>
            
            
            
            
        </div>
        <div class="modal-footer" style="clear:both;">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<!-- Modal Premium-->                        
                        
                        
                        
                        
                        
                        
                        
                        
                                
                                
                       		 <div class="cd-tabs table-margin" style="margin-top:54px;">
                                                  <nav class="tab-head">
                                                      <ul class="cd-tabs-navigation" style="width:100%;">
                                                          <li class="tab-size tab-one"><a style="text-align:center;height: 40px;padding:11px 19px;" data-content="hot-list" class="selected" href="#0">Hot List Ads</a></li>
                                                          <li class="tab-size tab-two"><a data-content="post-ad" href="#0" style="text-align:center;height: 40px;padding:11px 19px;width:auto;" >Just Pay $2 and post your ad here</a></li>
                                                           <li class="tab-size tab-three"><a data-content="relegious" href="#0" style="text-align:center;height: 40px;padding:11px 19px;" >Religious</a></li>
                                                      </ul> <!-- cd-tabs-navigation -->
                                                  </nav>
                                                  
                                                  <ul class="cd-tabs-content tab-content-size">
                                                      <li data-content="hot-list" class="selected">
                                                          <div class="content-tab">
                                                              <div class="table-inner">

                                                                        <table align="center" >
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Title</th>
                                                                                <th>Views</th>
                                                                                <th>Replies</th>
                                                                                <th>Catagories</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                           
                                                                            
                                                                            </tbody>
                                                                        </table>
                                                                    
                                                                </div>	
                                                          </div>    
                                                          <a href="#" class="read-btn-tab">View more</a>
                                                      </li>
                                                      
                                                      <li data-content="post-ad">
                                                      <div class="content-tab">
                                                             
                                                              <div class="table-inner">

                                                                        <table align="center" >
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Title</th>
                                                                                <th>Views</th>
                                                                                <th>Replies</th>
                                                                                <th>Catagories</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                           
                                                                            
                                                                            </tbody>
                                                                        </table>
                                                                    
                                                                </div>	
                                                        </div>    
                                                          <a href="#" class="read-btn-tab">View more</a>
                                                      </li>
                                                      <li data-content="relegious">
                                                          <div class="content-tab">
                                                             
                                                             <div class="table-inner">

                                                                        <table align="center" >
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Title</th>
                                                                                <th>Views</th>
                                                                                <th>Replies</th>
                                                                                <th>Catagories</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td>Hallow my dear Indians</td>
                                                                                <td>views: 0</td>
                                                                                <td>Replies: 0</td>
                                                                                <td>None</td>
                                                                            </tr>
                                                                           
                                                                            
                                                                            </tbody>
                                                                        </table>
                                                                    
                                                                </div>	
                                                          </div>    
                                                          <a href="#" class="read-btn-tab">View more</a>
                                                      </li>
                                                      
                                                  </ul> <!-- cd-tabs-content ends -->
                                                  
                            </div> <!-- cd-tabs ends-->
                            
                       </div>
                       
                       <div class="right-table">
                           
                       
                            <div class="nri-talk" style="float:left;height:149px;width:100%;">
                                <div class="heading-plain">
                                <h3>Show Timings and Places</h3>
                                </div>
                                <ul style="padding:0px 9px;height:115px;">
                                    <li><a href="#">Loreal espum</a></li>
                                    <li><a href="#">Loreal espum</a></li>
                                </ul>    
                                <a href="#" class="read-btn-b">View more</a>
                            </div>
                            
                            
                             <div class="movies">
                            <div class="full-btn">
                                <a href="#"><?php echo $_SESSION['state']; ?> - EVENTS </a>
                            </div>
                        
                                         <div class="cd-tabs" style="float:left;padding: 0 5px;width: 100%;margin-top:0;">
                                                  <nav>
                                                      <ul class="cd-tabs-navigation" style="width:100%;">
                                                          <li style="width: 84px;"><a data-content="chicago" class="selected" href="#0" style="font-size:9px;padding:15px 0px;text-align:center; background:#d9d9d9;color:#3c3c3c;">Cultural</a></li>
                                                          <li style="width: 84px;"><a data-content="spring" href="#0" style="font-size:9px;padding: 15px 0px;text-align:center;background:#d9d9d9;color:#3c3c3c;" >Religious</a></li>
                                                           <li style="width: 84px;"><a data-content="chicago-2" href="#0" style="font-size:9px;padding:15px 0px;text-align:center;background:#d9d9d9;color:#3c3c3c;" >Community</a></li>
                                                      </ul> <!-- cd-tabs-navigation -->
                                                  </nav>
                                                  
                                                  <ul class="cd-tabs-content" style="min-height:257px;">
                                                      <li data-content="chicago" class="selected">
                                                          <div class="content-tab">
		<?php
        $event_query1 = "select * from events where state_code = '".$_SESSION['state']."' and category='Cultural' and edate>'".$current_date."' and status='Active' order by sdate limit 5";
        $result_e1 = mysql_query($event_query1);
		if(mysql_num_rows($result_e1) > 0) {
        while($rs_ent1 = mysql_fetch_array($result_e1)) 
		{
        	if($rs_ent1['edate'] >= $current_date)
	        { ?>                                                          
                      <p><a href="events.php?ViewId=Cultural&State=<?php echo $_SESSION['state']; ?>"><?php echo date("d M",strtotime($rs_ent1['sdate'])); ?>
                        <span style="text-transform:none;"> <?php echo $rs_ent1['title']; ?></span></a></p>
                                                                
             <?php } 
		}	} else { echo "<p>No Event Found.</p>" ; } ?>
                                                             <?php /*?> <p><a href="#">16 Mar<span> Cultural EVENT TITLE</span></a></p>
                                                              <p><a href="#">16 Mar<span> Cultural EVENT TITLE</span></a></p><?php */?>
                                                          </div> 
                                                          <a href="events.php?ViewId=Cultural&State=<?php echo $_SESSION['state']; ?>" class="read-btn-tab">View more</a>   
                                                      </li>
                                                      
                                                      <li data-content="spring" >
                                                      <div class="content-tab">
                                                            <?php
        $event_query2 = "select * from events where state_code = '".$_SESSION['state']."' and category='Religious' and edate>'".$current_date."' and status='Active' order by sdate limit 5";
        $result_e2 = mysql_query($event_query2);
		if(mysql_num_rows($result_e2) > 0) {
        while($rs_ent2 = mysql_fetch_array($result_e2)) 
		{
        	if($rs_ent2['edate'] >= $current_date)
	        { ?>                                                          
                      <p><a href="events.php?ViewId=Religious"><?php echo date("d M",strtotime($rs_ent2['sdate'])); ?>
                        <span style="text-transform:none;"> <?php echo $rs_ent2['title']; ?></span></a></p>
                                                                
             <?php } 
		}	} else { echo "<p>No Event Found.</p>" ; } ?>
                                                        </div>    
                                                          <a href="events.php?ViewId=Religious" class="read-btn-tab">View more</a>
                                                      </li>
                                                      <li data-content="chicago-2" >
                                                          <div class="content-tab">
                                                         
                                                          <?php
        $event_query3 = "select * from events where state_code = '".$_SESSION['state']."' and category='Community' and edate>'".$current_date."' and status='Active' order by sdate limit 5";
        $result_e3 = mysql_query($event_query3);
		if(mysql_num_rows($result_e3) > 0) {
        while($rs_ent3 = mysql_fetch_array($result_e3)) 
		{
        	if($rs_ent3['edate'] >= $current_date)
	        { ?>                                                          
                      <p><a href="events.php?ViewId=Community"><?php echo date("d M",strtotime($rs_ent3['sdate'])); ?>
                        <span style="text-transform:none;"> <?php echo $rs_ent3['title']; ?></span></a></p>
                                                                
             <?php } 
		}	} else { echo "<p>No Event Found.</p>" ; } ?>
                                                         
                                                          </div>    
                                                          <a href="events.php?ViewId=Community" class="read-btn-tab">View more</a>
                                                      </li>
                                                      
                                                  </ul> <!-- cd-tabs-content ends -->
                                                  
                            </div> <!-- cd-tabs ends-->
                        </div><!-- MOVIES ends-->
                            
                       		
                       </div>            
                
                    </div>
                 
                 <!-- NEW SECTION -->                
 <!-- EVENTS ENDS -->
                    
                <!-- SECTION 2 NEW -->
                <div class="section-new-2">
                
                <!-- RIGHT AD SECTION -->
                <div class="left-ad">
                    
                    
                           <div class="padding-no">
                        
                                <div class="advert-big">
                                    <a href="#" >
                                        <img src="img/2_x_1-ad.jpg" alt="ADVERT">          
                                    </a>
                                </div>
                                <div class="advert-big">
                                    <a href="#" >
                                        <img src="img/2_x_1-ad.jpg" alt="ADVERT">                       
                                    </a>
                                </div>
                                <div class="advert-big">
                                    <a href="#" >
                                        <img src="img/2_x_1-ad.jpg" alt="ADVERT">             
                                    </a>
                                </div>	
                                <div class="advert-big">
                                    <a href="#" >
                                        <img src="img/2_x_1-ad.jpg" alt="ADVERT">                       
                                    </a>
                                </div>
                                <div class="advert-big">
                                    <a href="#" >
                                       <img src="img/2_x_1-ad.jpg" alt="ADVERT">                 
                                    </a>
                                </div>
                                <div class="advert-big">
                                    <a href="#" >
                                       <img src="img/2_x_1-ad.jpg" alt="ADVERT">                        
                                    </a>
                                </div>	
                                <div class="advert-big">
                                    <a href="#" >
                                        <img src="img/2_x_1-ad.jpg" alt="ADVERT">                               
                                    </a>
                                </div>
                                <div class="advert-big">
                                    <a href="#" >
                                        <img src="img/2_x_1-ad.jpg" alt="ADVERT">                               
                                    </a>
                                </div>
                            
                           </div> 
                            
               </div><!-- RIGHT AD SECTION ENDS -->   

                    
              
                    
               <div class="middle-column-section-2">
                    
                                <div class="events col-md-12 padding-no">
                                    
                                        <div class="head-title">
                                            <h3>Teaching &amp; Learning</h3>
                                        </div>
                    
                                          <div class="cd-tabs">
                                              <nav>
                                                  <ul class="cd-tabs-navigation">
                                                   <?php
															$query_cat="select * from batch_category order by name";
															$result_cat = mysql_query($query_cat);
															$edudata = 1;
															while($rsfs = mysql_fetch_array($result_cat))
															{ 
															if($edudata==1) { ?>
                                                            <li><a data-content="<?php echo $rsfs['id'] ; ?>" class="selected" href=""><?php echo $rsfs['name'] ; ?></a></li>
                                                            <?php } else { ?>
		                                                      <li><a data-content="<?php echo $rsfs['id'] ; ?>" href=""><?php echo $rsfs['name'] ; ?></a></li>                                                            
                                                            <?php } $edudata++ ; } ?>
                                                  
                                                  </ul> <!-- cd-tabs-navigation -->
                                              </nav>
                                              
                                              <ul class="cd-tabs-content" style="min-height:161px;">
                                                 
                                                  <?php
													$query_cat="select * from batch_category order by name";
													$result_cat = mysql_query($query_cat);													
													$edudata = 1;
													while($rsfs = mysql_fetch_array($result_cat))
													{  
														if($edudata==1) { ?>  
                                                      <li data-content="<?php echo $rsfs['id'] ; ?>" class="selected">
                                                    	<?php } else { ?>
                                                   		<li data-content="<?php echo $rsfs['id'] ; ?>">
                                                    	 <?php } ?>
                                                     
                                                     
                                                      <div class="content-tab">
                                                       <?php
                                                                $state = ($_GET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']);
																$query_Nation_tran_SAP="select  * from  batches where expdate>='".$current_date."' and category = '".$rsfs['id']."' and state_code ='".$state."'  and status='Active' order by id desc limit 5";
																$result_SAP=mysql_query($query_Nation_tran_SAP);                                                
																if(mysql_num_rows($result_SAP) > 0) {
																while($rs_SAP=mysql_fetch_array($result_SAP))
																{?>												
                                                      
                                                          <p><a href="batches.php?ViewId=<?php echo $rsfs['id'] ; ?>&State=<?php echo $_SESSION['state']; ?>">
														  <?php echo date("d M ",strtotime($rs_SAP['date'])); ?><span>&nbsp; <?php echo ucwords($rs_SAP['title']);?></span></a></p>
                                                        <?php } } else {  ?>
                                                        <p><h4>No Data Found.</h4></p>
                                                        <?php } ?>
                                                      
                                                      
                                                          
                                                      </div>    
                                                      <a href="batches.php?ViewId=<?php echo $rsfs['id'] ; ?>&State=<?php echo $_SESSION['state']; ?>" class="read-btn-tab">View more</a>
                                                  </li>
                                                   <?php  $edudata++ ; } ?>  
                                                 <?php ?>
                                                  
                                              </ul> <!-- cd-tabs-content ends -->
                                              
                                          </div> <!-- cd-tabs ends-->
                
                            </div><!-- EVENTS ENDS -->
            
            <!-- DESI MARKET SECTION -->                
                            <div class="nri-talk col-md-6">
                                  <div class="head-title-no-pad">
                                      <h3>Desi Market</h3>
                                </div>
                                <div class="bord-cla">
                                 <ul style="padding-left:5px;padding-right:5px;">
                                       <?php
                                        $state = ($_GET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']);
                                        $query_groceries="select  * from  desi_pages where state_code ='".$state."'
										order by id desc limit 5";																
                                        $result_Groceries=mysql_query($query_groceries);                                                
                                        if(mysql_num_rows($result_Groceries) > 0) {
                                        while($fs_gro=mysql_fetch_array($result_Groceries))
                                        {?>		
                                        <li><a href="grocery_view.php?ViewId=<?php echo md5($fs_gro['id']);?>"><?php echo ucwords($fs_gro['title']);?></a></li>
                                        <?php } } else {  ?>
                                                        <li><h4>No Data Found.</h4></li>
                                                        <?php } ?>
                                        
                              </ul>    
                                      <a href="#" class="read-btn-b">View more</a>
                              </div>        
                            </div>
                            
            <!-- NRI TALK SECTION -->                                            
                            <div class="nri-talk col-md-6">
                            	<div class="head-title-no-pad">
                                      <h3>Grocery Store</h3>
                                </div>
                                <div class="bord-cla">
                                 <ul style="padding-left:5px;padding-right:5px;">
                                 <?php
                                    $state = ($_GET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']);
									
									$query_Gro = "SELECT fam_groceries.*,rate FROM fam_groceries
									left join rating_grocery on rating_grocery.grocery_id = fam_groceries.id and login_id = ".$_SESSION['Nris_session']['id']."
									where  state_code='".$state."' and status = 'Active' order by id desc LIMIT 5";
									//echo $query_Gro;
									$result_Gro = mysql_query($query_Gro);
									if(mysql_num_rows($result_Gro) > 0) 
									{ 
										while($rs_Gro = mysql_fetch_array($result_Gro)) {  ?>                                 
                                       <li>
												<a href="groceries_view.php?ViewId=<?php echo md5($rs_Gro['id']);?>">
															<?php echo ucwords($rs_Gro['name']);?>
												</a>
												<?php 
                        if($rs_Gro['rate']==5)  { echo "<img src='images/5.png'>" ; }
                        if($rs_Gro['rate']==4)  { echo "<img src='images/4.png'>" ; }
                        if($rs_Gro['rate']==3)  { echo "<img src='images/3.png'>" ; }
                        if($rs_Gro['rate']==2)  { echo "<img src='images/2.png'>" ; }
                        if($rs_Gro['rate']==1)  { echo "<img src='images/1.png'>" ; }
                        if($rs_Gro['rate']==0)  { echo "<img src='images/0.png'>" ; }
                        if($rs_Gro['rate']=='NULL')  { echo "<img src='images/0.png'>" ; }
                        
                        ?>
									   </li>
                                       <?php } } else { ?> 
                                       <li>No Records Found.</li>
                                       <?php } ?>
                                        
                              </ul>    
                                      <a href="groceries.php?State=<?php echo $state; ?>" class="read-btn-b">View more</a>
                              </div>  
                 </div>
                            
                            
                             <!-- DESI MARKET SECTION -->                
                            <div class="nri-talk col-md-6">
                                  <div class="head-title-no-pad">
                                      <h3>Top Rated by NRIs</h3>
                                </div>
                                <div class="bord-cla">
                                 <ul style="padding-left:5px;padding-right:5px;">
                                  <li><a href="#">Glover Park Market</a></li>
                                        <li><a href="#">Orient Foods</a></li>
                                        <li><a href="#">Spice Merchant</a></li>
                                        <li><a href="#">India House</a></li>
                                        <li><a href="#">Bombay Bazaar</a></li>
                                        <li><a href="#">Kassar Food & Gifts</a></li>
                                        
                              </ul>    
                                      <a href="#" class="read-btn-b">View more</a>
                              </div>  
                            </div>
                            
            <!-- NRI TALK SECTION -->                                            
                            <div class="nri-talk col-md-6">
                            	<div class="head-title-no-pad">
                                      <h3>Announcement</h3>
                                </div>
                                 <div class="bord-cla">
                                 <ul style="padding-left:5px;padding-right:5px;">
                                  <?php
                                  $state = ($_GET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']);
									$query_anc = "SELECT * FROM announcement where  state_code='".$state."' and status='Active' order by total_views desc LIMIT 5";
									$result_anc = mysql_query($query_anc);
									if(mysql_num_rows($result_anc) > 0) 
									{  while($rs_anc = mysql_fetch_array($result_anc)) {  ?>  
                                         <li><a href="announcement_view.php?ViewId=<?php echo md5($rs_anc['id']);?>"><?php echo ucwords($rs_anc['title']);?></a></li>
                                    <?php } } else { ?> 
                                   <li>No Records Found.</li>
                                   <?php } ?>
                                 
                                        
                                        
                              </ul>    
                                      <a href="announcement.php?State=<?php echo $state; ?>" class="read-btn-b">View more</a>
                              </div>  
                 </div>
                         </div><!-- MIDDLE SECTION ENDS -->
                    
                     <!-- LEFT AD SECTION -->
                    <div class="right-ad">
                    	<div class="col-md-12 padding-no">
                        
                                <div class="advert-big">
                                    <a href="#" >
                                        <img src="img/2_x_1-ad.jpg" alt="ADVERT">                        
                                    </a>
                                </div>
                                <div class="advert-big">
                                    <a href="#" >
                                        <img src="img/2_x_1-ad.jpg" alt="ADVERT">                        
                                    </a>
                                </div>
                                <div class="advert-big">
                                    <a href="#" >
                                        <img src="img/2_x_1-ad.jpg" alt="ADVERT">                      
                                    </a>
                                </div>	
                                <div class="advert-big">
                                    <a href="#" >
                                        <img src="img/2_x_1-ad.jpg" alt="ADVERT">                        
                                    </a>
                                </div>
                                <div class="advert-big">
                                    <a href="#" >
                                        <img src="img/2_x_1-ad.jpg" alt="ADVERT">                      
                                    </a>
                                </div>
                                <div class="advert-big">
                                    <a href="#" >
                                        <img src="img/2_x_1-ad.jpg" alt="ADVERT">                      
                                    </a>
                                </div>	
                                <div class="advert-big">
                                    <a href="#" >
                                        <img src="img/2_x_1-ad.jpg" alt="ADVERT">                      
                                    </a>
                                </div>
                                <div class="advert-big">
                                    <a href="#" >
                                        <img src="img/2_x_1-ad.jpg" alt="ADVERT">                      
                                    </a>
                                </div>
                               
                      </div> 
                    </div><!-- LEFT AD SECTION ENDS-->
                    
                </div> <!--SECTION 2 ENDS -->
           
  </div><!-- right-section-1 ENDS -->
</div><!-- End Section-1 -->
	
	 <?php include "config/footer.php"  ; ?><!--End footer -->


<div class="go-up"><i class="fa fa-chevron-up"></i></div>
<script src="js/tab/jquery-2.1.1.js"></script>
<script src="js/tab/main.js"></script> <!-- Resource jQuery -->


<!-- js -->

<script src="js/html5.js"></script>
<script src="js/custom.js"></script>






    <script>var widget = new avWidgetAstroCalendar('astro_widget');</script>

    <script src="widget/jquery.simpleWeather.min.js"></script>
    <script src="widget/moment.js"></script>
    <script src="widget/moment-timezone.js"></script>
    <script src="widget/jstz.min.js"></script>
    <script src="widget/jqIpLocation.js"></script>
    <script>
        jQuery.noConflict();
        jQuery(document).ready(function () {
            setInterval(function () {
                jQuery.getJSON("http://www.telize.com/geoip?callback=?", function (data) {
                    bwea(data);
                });
            }, 10000);


            var bwea = function (pos) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    loadWeather(position.coords.latitude + ',' + position.coords.longitude); //load weather using your lat/lng coordinates
                }, function(){
                    loadWeather(pos.latitude + ',' + pos.longitude); //load weather using your lat/lng coordinates
                });

                //loadWeather(pos.latitude + ',' + pos.longitude); //load weather using your lat/lng coordinates

                function loadWeather(location, woeid) {
                    jQuery.simpleWeather({
                        location: location,
                        woeid: woeid,
                        unit: 'f',
                        success: function (weather) {
                            var url = weather.image;
                            var city = weather.city;
                            var region = weather.region;
                            var place = city + ", " + region;

                            var tz = jstz.determine();
                            var name = tz.name();

                            var d = new Date();
                            //                            var day = moment(d).tz(name).format('hh:mma z');
                            var day = moment(d).format('hh:mma z');

                            var n = '<div id="wrap" style="line-height: 31px; width: 144px; text-align: center; float: left; color: black; font-weight: bold;"><div id="temp" style="line-height: 31px; width: 48px; text-align: center; float: left; color: black; font-weight: bold; }">' + weather.temp + '&deg;' + 'F' + '</div><div id="place" style="float: left; height: 50%; width: 95px; font-size: 9px; text-align: center; line-height: 14px;">' + place + '</div><div id="time" style=" text-align: center; font-size: 11px; line-height: 14px; float: left; height: 50%; width: 95px;">' + day + '</div></div>';
                            var durl = 'images/daysky.JPG';
                            jQuery('#astro_widget').css({ "background": "url('" + durl + "')", "background-repeat": "no-repeat"});
                            jQuery('#astro_widget_content').css({ "background": "url('" + url + "')", "background-repeat": "no-repeat", "background-size":"auto 147px"  });
                            jQuery('div').find('.place.ac.fa.grey.pt10.cp').remove('.place.ac.fa.grey.pt10.cp');
                            var l = jQuery('div').find('.haeder div#wrap').length;

                            if (l == 0) {                                
                                jQuery(n).appendTo('.haeder');
                            } else {
                                jQuery('.haeder div#wrap').replaceWith(n);
                            }
                        },
                        error: function (error) {
                            alert(error.message);
                        }
                    });
                }
            }
        });
    </script>
















<!-- End js -->
<div class="fixed-side-social-container">
<a class="social-icon twitter-icon" href="https://twitter.com/nrisnetwork" target="new" title="Follow us on Twitter"><span></span></a>
<a class="social-icon facebook-icon" href="https://www.facebook.com/us.nris" target="new" title="Like us on Facebook"><span></span></a>
<a class="social-icon google-icon" href="https://plus.google.com/?cbp=awesc55e6nju&cid=5&soc-app=115&soc-platform=1" target="new" title="Follow us on Google+"><span></span></a>
</div>


<!-- Modal  Switch State  Start-->
<div class="modal fade" id="change_state" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Switch State</h4>
</div>
<div class="modal-body">

<table border="0" cellpadding="2" cellspacing="1" width="100%">
            	                	

           
         	<?php 
			$cnt=0;
			$qy_state_res = mysql_query("select state,state_code from states order by state");
			while($fs_state = mysql_fetch_array($qy_state_res))
			{ 	
			
				if($cnt%3==0){						
				echo "<tr>";
				}
					?>

            <td style="vertical-align:middle;width:auto;text-align:left;padding-left:10px;">
            <a href="state.php?State=<?php echo $fs_state['state_code']; ?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">
            <?php if($fs_state['state_code']==$_SESSION['state']) { 
			echo '<i class="fa fa-check"></i> '.$fs_state['state']; }
			else { 	echo $fs_state['state'];  } ?>
            </a>
            </td>
          <?php 
		 					  if($cnt%3==0 && $cnt != 0){
                                    echo "</tr>";						
                                    }
                                    $cnt++;
                                    if($cnt==3)
                                    {
                                        $cnt=0;
                                    }
		 } ?>
            
                </tr>
            </table>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>  
<!-- Modal  Switch State  End -->  
</body>
</html>