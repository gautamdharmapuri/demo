<?php error_reporting(0);  include"config/connection.php";	  
$current_date = date('Y-m-d');

			$state = ($_GET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']);
			$_SESSION['state'] = $state;
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
                        speed:6000,
						onSliderLoad: function(){
									j(".bx-viewport #advert-grp li").css("display", "block");
								}
                    });
				   
				   var tempVar = 1;
				   setInterval(function(){
					    
						if (tempVar > 2) {
                            tempVar = 0;
                        }
						var randNum = tempVar;
						j('#desi_movies_link li a').removeClass('selected');
						j('#desi_movies_content li').removeClass('selected');
						j('#desi_movies_content li div img').hide();
						j('#desi_movies_link li a:eq('+randNum+')').addClass('selected');
						j('#desi_movies_content li:eq('+randNum+')').addClass('selected');
						j('#desi_movies_content li div img:eq('+randNum+')').show();
						tempVar = randNum+1;
			        },3000);
				   
				   j('body').prepend('<a href="javascript:;" class="back-to-top">Back to Top</a>');
						var amountScrolled = 200;
			  
						j(window).scroll(function() {
							if ( j(window).scrollTop() > amountScrolled ) {
								j('a.back-to-top').fadeIn('slow');
							} else {
								j('a.back-to-top').fadeOut('slow');
							}
						});
						j('a.back-to-top').click(function() {
							 j('html, body').animate({
								 scrollTop: 0
							 }, 700);
							 return false;
						});
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
                <div class="left-imgs">
                    
                    
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
                                
									<?php
                                    if($home_dm1['edate'] >= $current_date) {
                                        echo '<a href="' . $home_dm1['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_dm1 ['image'].'"></a>';
                                    } else { 
                                        $home_middle_query1 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Top-Center-4' and ad_position_no='1' and edate < '".$current_date."' "); 
                                    ?>		            
                                        <a href="javascript:;" ><img src="img/middle.jpg" alt="Advertisement"></a>
                                    <?php } ?>                      
                                
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
                                                          <li class="tab-size" style="width:100%;"><a style="" data-content="hot-list" class="selected" href="#0">Hot List Ads (Just pay $2 for premium visibility)</a></li>
                                                          <!--<li class="tab-size tab-two" style="width:42%;"><a data-content="post-ad" href="#0" style="" >Just pay $2 for premium visibility</a></li>
                                                           <li class="tab-size tab-three" style="width:28%;"><a data-content="relegious" href="#0" style="" >10 Images/ad</a></li>-->
                                                      </ul> <!-- cd-tabs-navigation -->
                                                  </nav>
                                                  
                                                  <ul class="cd-tabs-content" style="height:382px;">
                                                      <li data-content="hot-list" class="selected">
                                                          <div class="content-tab">
																		<div class="col-md-12" style="padding: 0px;font-weight: bold;">
																				<div class="col-md-6" style="padding: 1px;">Title</div>
																				<div class="col-md-3" style="padding: 1px;"><span>Category</span></div>
																				<div class="col-md-2" style="padding: 1px;"><span style="color:black !important;">Views</span></div>
																		</div>
															<?php
																		
																		$query = "SELECT s.* from ((SELECT id,TitleAD,'auto' as type,image1 as image,Address as address,date,'auto' as category,total_views as totViews FROM post_free_auto WHERE TitleAD != '' AND  AdPostType = 'premium' ORDER BY post_free_auto.id DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'baby_sitting' as type,image as image,City as address,date,'baby sitter' as category,total_views as totViews FROM post_free_baby_sitting WHERE TitleAD != '' AND  AdPostType = 'premium' ORDER BY post_free_baby_sitting.id DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'education' as type,image as image,City as address,date,'education' as category,total_views as totViews FROM post_free_education WHERE TitleAD != '' AND  AdPostType = 'premium' ORDER BY post_free_education.id DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'electronics' as type,image as image,City as address,date,'electronics' as category,total_views as totViews FROM post_free_electronics WHERE TitleAD != '' AND  AdPostType = 'premium' ORDER BY post_free_electronics.id DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'garagesale' as type,image as image,City as address,date,'garage sale' as category,total_views as totViews FROM post_free_garage_sale WHERE TitleAD != '' AND  AdPostType = 'premium' ORDER BY post_free_garage_sale.id DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'jobs' as type,image1 as image,City as address,date,'jobs' as category,total_views as totViews FROM post_free_job WHERE TitleAD != '' AND  AdPostType = 'premium' ORDER BY post_free_job.id DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'realestate' as type,image1 as image,City as address,date,'realestate' as category,total_views as totViews FROM post_free_real_estate WHERE TitleAD != '' AND  AdPostType = 'premium' ORDER BY post_free_real_estate.id DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'roommates' as type,image1 as image,City as address,date,'roommates' as category,total_views as totViews FROM post_free_roommates WHERE TitleAD != '' AND  AdPostType = 'premium' ORDER BY post_free_roommates.id DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'free_stuff' as type,image as image,City as address,date,'free stuff' as category,total_views as totViews FROM post_free_stuff WHERE TitleAD != '' AND  AdPostType = 'premium' ORDER BY post_free_stuff.id DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'mypartner' as type,image1 as image,City as address,date,'my partener' as category,total_views as totViews FROM post_free_mypart WHERE TitleAD != '' AND  AdPostType = 'premium' ORDER BY post_free_mypart.id DESC LIMIT 12)) s
																		ORDER BY date DESC LIMIT 12";
																		$result = mysql_query($query);
																		$i=1;	
																		while($rs=mysql_fetch_array($result)) {
																				$color = '';	
																		if($i++%2 == 0) {
																				$color = '#E6E6E6';	
																		} else {
																				$color = '#CCC';	
																		}
															?>
																		<a href="<?php echo $rs['type'];?>_inner_view.php?ViewId=<?php echo md5($rs['id']);?>"
																		onMouseMove="this.style.color='red'"
																		onMouseOut="this.style.color='black'"
																		style="background-color: <?php echo $color;?> !important;border: 1px solid white;">
																		<div class="col-md-12" style="padding: 0px;">
																				<div class="col-md-7" style="padding: 1px;"><?php if($rs['address'] != '') { ?>
																					<img src="images/map-icon.png">
																		<?php } ?>
																		<?php if($rs['image'] != '') { ?>
																					<img src="images/image-icon.png">
																		<?php } ?>
																					<span style="color:black !important;"><?php echo substr($rs['TitleAD'],0,28);?></span>&nbsp;<img src="images/New_icon2.gif"></div>
																				<div class="col-md-3" style="padding: 1px;"><span><?php echo $rs['category'];?></span></div>
																				<div class="col-md-2" style="padding: 1px;"><span style="color:black !important;"><?php echo $rs['totViews'];?></span></div>
																		</div>
																		</a>
                                                             
															<?php } ?>
                                                          </div>    
                                                      </li>
                                                      
                                                      <li data-content="post-ad">
                                                      <div class="content-tab">
                                                             
                                                              <?php
																		
																		$query = "SELECT s.* from ((SELECT id,TitleAD,'auto' as type,image1 as image,Address as address,total_views,'auto' as category,total_views as totViews  FROM post_free_auto WHERE TitleAD != '' AND  AdPostType = 'premium' ORDER BY post_free_auto.total_views DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'baby_sitting' as type,image as image,City as address,total_views,'baby sitter' as category,total_views as totViews  FROM post_free_baby_sitting WHERE TitleAD != '' AND  AdPostType = 'premium' ORDER BY post_free_baby_sitting.total_views DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'education' as type,image as image,City as address,total_views,'education' as category,total_views as totViews  FROM post_free_education WHERE TitleAD != '' AND  AdPostType = 'premium' ORDER BY post_free_education.total_views DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'electronics' as type,image as image,City as address,total_views,'electronics' as category,total_views as totViews  FROM post_free_electronics WHERE TitleAD != '' AND  AdPostType = 'premium' ORDER BY post_free_electronics.total_views DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'garagesale' as type,image as image,City as address,total_views,'garage sale' as category,total_views as totViews  FROM post_free_garage_sale WHERE TitleAD != '' AND  AdPostType = 'premium' ORDER BY post_free_garage_sale.total_views DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'jobs' as type,image1 as image,City as address,total_views,'jobs' as category,total_views as totViews  FROM post_free_job WHERE TitleAD != '' AND  AdPostType = 'premium' ORDER BY post_free_job.total_views DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'realestate' as type,image1 as image,City as address,total_views,'realestate' as category,total_views as totViews  FROM post_free_real_estate WHERE TitleAD != '' AND  AdPostType = 'premium' ORDER BY post_free_real_estate.total_views DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'roommates' as type,image1 as image,City as address,total_views,'roommates' as category,total_views as totViews  FROM post_free_roommates WHERE TitleAD != '' AND  AdPostType = 'premium' ORDER BY post_free_roommates.total_views DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'free_stuff' as type,image as image,City as address,total_views,'free stuff' as category,total_views as totViews  FROM post_free_stuff WHERE TitleAD != '' AND  AdPostType = 'premium' ORDER BY post_free_stuff.total_views DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'mypartner' as type,image1 as image,City as address,total_views,'my partener' as category,total_views as totViews  FROM post_free_mypart WHERE TitleAD != '' AND  AdPostType = 'premium' ORDER BY post_free_mypart.total_views DESC LIMIT 12)) s
																		ORDER BY total_views DESC LIMIT 12";
																		$result = mysql_query($query);
																		$i=1;					
																		while($rs=mysql_fetch_array($result)) {
																					$color = '';	
																		if($i++%2 == 0) {
																				$color = '#E6E6E6';	
																		} else {
																				$color = '#CCC';	
																		}
															?>
                                                              <a href="<?php echo $rs['type'];?>_inner_view.php?ViewId=<?php echo md5($rs['id']);?>" onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"style="background-color: <?php echo $color;?> !important;border: 1px solid white;">
																		<div class="col-md-12" style="padding: 0px;">
																				<div class="col-md-7" style="padding: 1px;"><?php if($rs['address'] != '') { ?>
																					<img src="images/map-icon.png">
																		<?php } ?>
																		<?php if($rs['image'] != '') { ?>
																					<img src="images/image-icon.png">
																		<?php } ?>
																					<span style="color:black !important;"><?php echo substr($rs['TitleAD'],0,30);?></span></div>
																				<div class="col-md-3" style="padding: 1px;"><span><?php echo $rs['category'];?></span></div>
																				<div class="col-md-2" style="padding: 1px;"><span style="color:black !important;"><?php echo $rs['totViews'];?></span></div>
																		</div>
																		</a>
															<?php } ?>
                                                        </div>    
                                                      </li>
                                                      <li data-content="relegious">
                                                          <div class="content-tab">
                                                             <?php
															 $state = ($_GET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']);
															 $query = "SELECT * FROM post_free_stuff WHERE TitleAD != '' AND AdPostType = 'premium' AND States LIKE '%".$state."%' ORDER BY id desc LIMIT 8;";
																		$result = mysql_query($query);
																		$i=1;
																		if(mysql_numrows($result) > 0) {
																		while($rs=mysql_fetch_array($result)) {
																					$color = '';	
																		if($i++%2 == 0) {
																				$color = '#E6E6E6';	
																		} else {
																				$color = '#CCC';	
																		} 
															 ?>
                                                              <a href="free_stuff_inner_view.php?ViewId=<?php echo md5($rs['id']);?>" onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'" style="background-color: <?php echo $color;?> !important;border: 1px solid white;">
																		<div class="col-md-12" style="padding: 0px;">
																				<div class="col-md-7" style="padding: 2px;"><?php if($rs['address'] != '') { ?>
																					<img src="images/map-icon.png">
																		<?php } ?>
																		<?php if($rs['image'] != '') { ?>
																					<img src="images/image-icon.png">
																		<?php } ?>
																					<span style="color:black !important;"><?php echo substr($rs['TitleAD'],0,30);?></span></div>
																				<div class="col-md-3" style="padding: 1px;"><span>Free Stuff</span></div>
																				<div class="col-md-2" style="padding: 1px;"><span style="color:black !important;"><?php echo $rs['total_views'];?></span></div>
																		</div>
																		</a>
															  
															  <?php } } else { ?>
																		<p><span>No Result found</span></p>
															  <?php } ?>
                                                          </div>    
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
							<?php
									$query = "SELECT fam_city_movies.*,cities.city as cityname FROM fam_city_movies,cities
												WHERE image != '' AND status = 'Active'
												AND cities.id = city_id
												AND fam_city_movies.state_code LIKE '%".$state."%'
												ORDER BY fam_city_movies.id desc LIMIT 3;";
											   $result = mysql_query($query);
											   $movieArr = array();
												if(mysql_numrows($result) > 0) {
															while($rs = mysql_fetch_array($result)) {
																		$movieArr[] = $rs;	
															}
															if($movieArr == 3) {	
															} else {
																		for($t = 0 ; $t < 4-count($movieArr) ; $t++) {
																					if(count($movieArr) < 3) {
																								$movieArr[] = $movieArr[$t];	
																					}
																		}
															}
												}
							?>
                        
                                    <div class="cd-tabs" style="float:left;padding: 0 5px;width: 100%;margin-top:0;">
												<?php if(count($movieArr) > 0) { $k = 0;?>
															<nav>
																<ul class="cd-tabs-navigation" style="width:100%;" id="desi_movies_link">
																	<?php foreach($movieArr as $movie) { ?>
																		<li style="width:84px;background-color:#87CEEB;">
																			<a data-content="<?php echo ucfirst($movie['cityname']);?>" <?php if($k == 0) { ?>class="selected"<?php } ?> href="#<?php echo $k;?>" style="font-size:9px;height:35px;text-align:center; color:#3c3c3c;">
																						<?php echo ucfirst($movie['cityname']);$k++;?>
																			</a>
																		</li>
																	<?php } ?>
																</ul> <!-- cd-tabs-navigation -->
															</nav>
															
															<ul class="cd-tabs-content height-content" style="height:188px;" id="desi_movies_content">
																		<?php $k = 0;foreach($movieArr as $movie) { ?>
																					<li style="padding: 0px !important;" data-content="<?php echo ucfirst($movie['cityname']);?>" <?php if($k == 0) { ?>class="selected"<?php } ?>>
																						<div style="padding: 0px !important;" class="content-tab">
																							<img src="admin/uploads/city_movies/<?php echo $movie['image'];?>" alt="<?php echo ucfirst($movie['name']);?>" width="100%" <?php if($k++ == 0) { ?>style="overflow:hidden;height:186px;"<?php } else { ?>style="overflow:hidden;height:186px;display:none;"<?php } ?>>
																						</div>    
																					</li>
																		<?php } ?>
															</ul> <!-- cd-tabs-content ends -->
												<?php } else { ?>
															No Movies
												<?php } ?>
									</div> <!-- cd-tabs ends-->
                        </div><!-- MOVIES ends-->
                    
					<div class="nri-talk" style="float:left;height:149px;width:100%;">
                                <div class="heading-plain">
                                <h3>Show Timings and Places</h3>
                                </div>
                                <ul style="padding:0px 9px;height:115px;">
									<?php foreach($movieArr as $movie) { ?>
												<li><a href="desi_movie_detail.php?id=<?php echo md5($movie['id']);?>"><?php echo $movie['name'];?></a></li>
									<?php } ?>
                                </ul>
                            </div>
					
                    </div><!-- TOP SECTION RIGHT ENDS -->
                    
                       
				</div><!-- TOP SECTION ONE ENDS -->
             
                
</div><!-- MAIN MIDDLE SECTION  ENDS-->

                


                 <!-- LEFT AD SECTION -->
                    <div class="right-imgs">
                    	<div class="col-md-12 padding-no">
									<?php
												$state = ($_GET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']);
												$query = "SELECT * FROM fam_advertisement
															WHERE image != '' AND edate >= now() AND ad_position = 'Right Side'
															AND state_code LIKE '%".$state."%'
															ORDER BY ad_position_no asc LIMIT 10;";
														   $result = mysql_query($query);
														   $i=1;
														   if(mysql_numrows($result) > 0) {
														   while($rs=mysql_fetch_array($result)) {
									?>
                                <div class="adv-big">
                                    <a href="<?php echo ($rs['url'] != '') ? $rs['url'] : 'javascript:;';?>" target="_blank">
                                        <img src="admin/uploads/myadimg/<?php echo $rs['image'];?>" alt="<?php echo $rs['ad_title'];?>">                        
                                    </a>
                                </div>
                                <?php } } else { ?>
									<div class="adv-big">
												<a href="<?php echo ($rs['url'] != '') ? $rs['url'] : 'javascript:;';?>" target="_blank">
													<img src="img/2_x_1-ad.jpg">
												</a>
											</div>
								<?php } ?>
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
                       
                               
                                        
                                        <?php
                                        if(isset($_SESSION['Nris_session']))	  
                                        { ?>
                                        <a href="#"  data-toggle="modal" data-target="#PostFreeAd" class="CreatAd">Post Free Ad&nbsp;<img src="images/arrow.gif"></a>                                        
                                         <a href="#" id="premium_custom_btn" data-toggle="modal" data-target="#PostPremiumAd"  class="CreatAd2"  >Create Premium Ad&nbsp;<img src="images/New_icon2.gif"></a>
                                        <?php } else { ?> 
                                         <a href="#"  data-toggle="modal"  data-toggle="modal" data-target="#myModal" class="CreatAd">Post Free Ad&nbsp;<img src="images/arrow.gif"></a>                                        
                                         <a href="#" id="premium_custom_btn" data-toggle="modal" data-toggle="modal" data-target="#myModal" class="CreatAd2"  >Create Premium Ad&nbsp;<img src="images/New_icon2.gif"></a>   

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
           
            <ul class="home_category_model_ul">
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
                                                          <li class="tab-size tab-one"><a style="text-align:center;height: 40px;padding:11px 19px;" data-content="hot-list" class="selected" href="#0">Recent Ads</a></li>
                                                          <li class="tab-size tab-two"><a data-content="post-ad" href="#0" style="text-align:center;height: 40px;padding:11px 19px;width:auto;" >Most viewed ads</a></li>
                                                           <li class="tab-size tab-three"><a data-content="relegious" href="#0" style="text-align:center;height: 40px;padding:11px 19px;" >Free Stuff for Pickup</a></li>
                                                      </ul> <!-- cd-tabs-navigation -->
                                                  </nav>
                                                  
                                                  <ul class="cd-tabs-content tab-content-size">
                                                      <li data-content="hot-list" class="selected">
                                                          <div class="content-tab">
															<div class="col-md-12" style="padding: 0px;font-weight: bold;">
																				<div class="col-md-6" style="padding: 1px;">Title</div>
																				<div class="col-md-3" style="padding: 1px;"><span>Category</span></div>
																				<div class="col-md-2" style="padding: 1px;"><span style="color:black !important;">Views</span></div>
																		</div>
															<?php
																		
																		$query = "SELECT s.* from ((SELECT id,TitleAD,'auto' as type,image1 as image,Address as address,date,'auto' as category,total_views as totViews  FROM post_free_auto WHERE TitleAD != '' AND  AdPostType != 'premium' ORDER BY post_free_auto.id DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'baby_sitting' as type,image as image,City as address,date,'baby sitter' as category,total_views as totViews  FROM post_free_baby_sitting WHERE TitleAD != '' AND  AdPostType != 'premium' ORDER BY post_free_baby_sitting.id DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'education' as type,image as image,City as address,date,'education' as category,total_views as totViews  FROM post_free_education WHERE TitleAD != '' AND  AdPostType != 'premium' ORDER BY post_free_education.id DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'electronics' as type,image as image,City as address,date,'electronics' as category,total_views as totViews  FROM post_free_electronics WHERE TitleAD != '' AND  AdPostType != 'premium' ORDER BY post_free_electronics.id DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'garagesale' as type,image as image,City as address,date,'garage sale' as category,total_views as totViews  FROM post_free_garage_sale WHERE TitleAD != '' AND  AdPostType != 'premium' ORDER BY post_free_garage_sale.id DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'jobs' as type,image1 as image,City as address,date,'jobs' as category,total_views as totViews  FROM post_free_job WHERE TitleAD != '' AND  AdPostType != 'premium' ORDER BY post_free_job.id DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'realestate' as type,image1 as image,City as address,date,'realestate' as category,total_views as totViews  FROM post_free_real_estate WHERE TitleAD != '' AND  AdPostType != 'premium' ORDER BY post_free_real_estate.id DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'roommates' as type,image1 as image,City as address,date,'roommates' as category,total_views as totViews  FROM post_free_roommates WHERE TitleAD != '' AND  AdPostType != 'premium' ORDER BY post_free_roommates.id DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'free_stuff' as type,image as image,City as address,date,'free stuff' as category,total_views as totViews  FROM post_free_stuff WHERE TitleAD != '' AND  AdPostType != 'premium' ORDER BY post_free_stuff.id DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'mypartner' as type,image1 as image,City as address,date,'my partener' as category,total_views as totViews  FROM post_free_mypart WHERE TitleAD != '' AND  AdPostType != 'premium' ORDER BY post_free_mypart.id DESC LIMIT 12)) s
																		ORDER BY date DESC LIMIT 12";
																		$result = mysql_query($query);
																		$i=1;					
																		while($rs=mysql_fetch_array($result)) {
																					$color = '';	
																		if($i++%2 == 0) {
																				$color = '#E6E6E6';	
																		} else {
																				$color = '#CCC';	
																		}
															?>
                                                             <a href="<?php echo $rs['type'];?>_inner_view.php?ViewId=<?php echo md5($rs['id']);?>" onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"style="background-color: <?php echo $color;?> !important;border: 1px solid white;">
																		<div class="col-md-12" style="padding: 0px;">
																				<div class="col-md-7" style="padding: 1px;"><?php if($rs['address'] != '') { ?>
																					<img src="images/map-icon.png">
																		<?php } ?>
																		<?php if($rs['image'] != '') { ?>
																					<img src="images/image-icon.png">
																		<?php } ?>
																					<span style="color:black !important;"><?php echo substr($rs['TitleAD'],0,30);?></span></div>
																				<div class="col-md-3" style="padding: 1px;"><span><?php echo $rs['category'];?></span></div>
																				<div class="col-md-2" style="padding: 1px;"><span style="color:black !important;"><?php echo $rs['totViews'];?></span></div>
																		</div>
																		</a>
															<?php } ?>
															<div style="float: right !important;"><a href="freeads_viewmore.php?type=free&State=<?php echo $state;?>" >View more</a></div>
                                                          </div> 
                                                      </li>
                                                      
                                                      <li data-content="post-ad">
                                                      <div class="content-tab">
															<div class="col-md-12" style="padding: 0px;font-weight: bold;">
																				<div class="col-md-6" style="padding: 1px;">Title</div>
																				<div class="col-md-3" style="padding: 1px;"><span>Category</span></div>
																				<div class="col-md-2" style="padding: 1px;"><span style="color:black !important;">Views</span></div>
																		</div>
															<?php
																		
																		$query = "SELECT s.* from ((SELECT id,TitleAD,'auto' as type,image1 as image,Address as address,total_views,'auto' as category,total_views as totViews  FROM post_free_auto WHERE TitleAD != '' AND  AdPostType != 'premium' ORDER BY post_free_auto.total_views DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'baby_sitting' as type,image as image,City as address,total_views,'baby sitter' as category,total_views as totViews  FROM post_free_baby_sitting WHERE TitleAD != '' AND  AdPostType != 'premium' ORDER BY post_free_baby_sitting.total_views DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'education' as type,image as image,City as address,total_views,'education' as category,total_views as totViews  FROM post_free_education WHERE TitleAD != '' AND  AdPostType != 'premium' ORDER BY post_free_education.total_views DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'electronics' as type,image as image,City as address,total_views,'electronics' as category,total_views as totViews  FROM post_free_electronics WHERE TitleAD != '' AND  AdPostType != 'premium' ORDER BY post_free_electronics.total_views DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'garagesale' as type,image as image,City as address,total_views,'garage sale' as category,total_views as totViews  FROM post_free_garage_sale WHERE TitleAD != '' AND  AdPostType != 'premium' ORDER BY post_free_garage_sale.total_views DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'jobs' as type,image1 as image,City as address,total_views,'jobs' as category,total_views as totViews  FROM post_free_job WHERE TitleAD != '' AND  AdPostType != 'premium' ORDER BY post_free_job.total_views DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'realestate' as type,image1 as image,City as address,total_views,'realestate' as category,total_views as totViews  FROM post_free_real_estate WHERE TitleAD != '' AND  AdPostType != 'premium' ORDER BY post_free_real_estate.total_views DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'roommates' as type,image1 as image,City as address,total_views,'roommates' as category,total_views as totViews  FROM post_free_roommates WHERE TitleAD != '' AND  AdPostType != 'premium' ORDER BY post_free_roommates.total_views DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'free_stuff' as type,image as image,City as address,total_views,'free stuff' as category,total_views as totViews  FROM post_free_stuff WHERE TitleAD != '' AND  AdPostType != 'premium' ORDER BY post_free_stuff.total_views DESC LIMIT 12)
																		UNION
																		(SELECT id,TitleAD,'mypartner' as type,image1 as image,City as address,total_views,'my partener' as category,total_views as totViews  FROM post_free_mypart WHERE TitleAD != '' AND  AdPostType != 'premium' ORDER BY post_free_mypart.total_views DESC LIMIT 12)) s
																		ORDER BY total_views DESC LIMIT 12";
																		$result = mysql_query($query);
																		$i=1;					
																		while($rs=mysql_fetch_array($result)) {
																					$color = '';	
																		if($i++%2 == 0) {
																				$color = '#E6E6E6';	
																		} else {
																				$color = '#CCC';	
																		}
															?>
                                                              <a href="<?php echo $rs['type'];?>_inner_view.php?ViewId=<?php echo md5($rs['id']);?>" onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"style="background-color: <?php echo $color;?> !important;border: 1px solid white;">
																		<div class="col-md-12" style="padding: 0px;">
																				<div class="col-md-7" style="padding: 1px;"><?php if($rs['address'] != '') { ?>
																					<img src="images/map-icon.png">
																		<?php } ?>
																		<?php if($rs['image'] != '') { ?>
																					<img src="images/image-icon.png">
																		<?php } ?>
																					<span style="color:black !important;"><?php echo substr($rs['TitleAD'],0,30);?></span></div>
																				<div class="col-md-3" style="padding: 1px;"><span><?php echo $rs['category'];?></span></div>
																				<div class="col-md-2" style="padding: 1px;"><span style="color:black !important;"><?php echo $rs['totViews'];?></span></div>
																		</div>
																		</a>
															<?php } ?>
                                                          </div> 
                                                      </li>
                                                      <li data-content="relegious">
                                                          <div class="content-tab">
															<div class="col-md-12" style="padding: 0px;font-weight: bold;">
																				<div class="col-md-6" style="padding: 1px;">Title</div>
																				<div class="col-md-3" style="padding: 1px;"><span>Category</span></div>
																				<div class="col-md-2" style="padding: 1px;"><span style="color:black !important;">Views</span></div>
																		</div>
                                                             <?php
															 $state = ($_GET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']);
															 $query = "SELECT * FROM post_free_stuff WHERE TitleAD != '' AND AdPostType != 'premium' AND States LIKE '%".$state."%' ORDER BY id desc LIMIT 8;";
															 
																		$result = mysql_query($query);
																		if(mysql_numrows($result) > 0) {
																		while($rs=mysql_fetch_array($result)) {
																					$color = '';	
																		if($i++%2 == 0) {
																				$color = '#E6E6E6';	
																		} else {
																				$color = '#CCC';	
																		}
															 ?>
                                                              <a href="free_stuff_inner_view.php?ViewId=<?php echo md5($rs['id']);?>" onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"style="background-color: <?php echo $color;?> !important;border: 1px solid white;">
																		<div class="col-md-12" style="padding: 0px;">
																				<div class="col-md-7" style="padding: 1px;"><?php if($rs['address'] != '') { ?>
																					<img src="images/map-icon.png">
																		<?php } ?>
																		<?php if($rs['image'] != '') { ?>
																					<img src="images/image-icon.png">
																		<?php } ?>
																					<span style="color:black !important;"><?php echo substr($rs['TitleAD'],0,30);?></span></div>
																				<div class="col-md-3" style="padding: 1px;"><span>Free Stuff</span></div>
																				<div class="col-md-2" style="padding: 1px;"><span style="color:black !important;"><?php echo $rs['total_views'];?></span></div>
																		</div>
																		</a>
															  
															  <?php } } else { ?>
																		<p><span>No Result found</span></p>
															  <?php } ?>
                                                          </div>
                                                      </li>
                                                      
                                                  </ul> <!-- cd-tabs-content ends -->
                                                  
                            </div> <!-- cd-tabs ends-->
                            
                       </div>
                       
                       <div class="right-table">
                           
                             <div class="movies">
                            <div class="full-btn">
                                <a href="#"><?php echo $_SESSION['state']; ?> - EVENTS </a>
                            </div>
                        
                                         <div class="cd-tabs" style="float:left;padding: 0 5px;width: 100%;margin-top:0;">
                                                  <nav>
                                                      <ul class="cd-tabs-navigation" style="width:100%;">
                                                          <li style="width: 84px;"><a data-content="chicago" class="selected" href="#0" style="font-size:9px;padding:15px 0px;text-align:center;">Cultural</a></li>
                                                          <li style="width: 84px;"><a data-content="spring" href="#0" style="font-size:9px;padding: 15px 0px;text-align:center;" >Religious</a></li>
                                                           <li style="width: 84px;"><a data-content="chicago-2" href="#0" style="font-size:9px;padding:15px 0px;text-align:center;" >Community</a></li>
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
                <div class="left-imgs">
                    
                    
                           <div class="padding-no">
                        
                                <?php
												$state = ($_GET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']);
												$query = "SELECT * FROM fam_advertisement
															WHERE image != '' AND edate >= now() AND ad_position = 'Left Side'
															AND state_code LIKE '%".$state."%'
															ORDER BY ad_position_no asc LIMIT 10;";
														   $result = mysql_query($query);
														   $i=1;
														   if(mysql_numrows($result) > 0) {
														   while($rs=mysql_fetch_array($result)) {
									?>
                                <div class="adv-big">
                                    <a href="<?php echo ($rs['url'] != '') ? $rs['url'] : 'javascript:;';?>" target="_blank">
                                        <img src="admin/uploads/myadimg/<?php echo $rs['image'];?>" alt="<?php echo $rs['ad_title'];?>">                        
                                    </a>
                                </div>
                                <?php } }?>
                                
                            
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
															$edudata = 1;;
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
													$i = 0;
													while($rsfs = mysql_fetch_array($result_cat))
													{
															
																		$color = '';	
																		if($i++%2 == 0) {
																				$color = '#E6E6E6';	
																		} else {
																				$color = '#CCC';	
																		} 
														if($edudata==1) { ?>  
                                                      <li data-content="<?php echo $rsfs['id'] ; ?>" class="selected">
                                                    	<?php } else { ?>
                                                   		<li data-content="<?php echo $rsfs['id'] ; ?>">
                                                    	 <?php } ?>
                                                     
                                                     
                                                      <div class="content-tab" style="background-color: <?php echo $color;?> !important;">
                                                       <?php
                                                                $state = ($_ET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']);
																$query_Nation_tran_SAP="select  * from  batches where expdate>='".$current_date."' and category = '".$rsfs['id']."' and state_code ='".$state."'  and status='Active' order by id desc limit 5";
																$result_SAP=mysql_query($query_Nation_tran_SAP);                                                
																if(mysql_num_rows($result_SAP) > 0) {
																while($rs_SAP=mysql_fetch_array($result_SAP))
																{
																		
																		
																		?>												
                                                      
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
                                      <h3>NRI's talk</h3>
                                </div>
                                <div class="bord-cla">
                                 <ul style="padding-left:5px;padding-right:5px;">
                                       <?php
									   $state = ($_ET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']);
                                        $query_nritalk="select  * from  nris_talk where title != '' and state_code = '".$state."' order by id desc limit 5";																
                                        $result_nritalk=mysql_query($query_nritalk);
										$i = 0;
                                        if(mysql_num_rows($result_nritalk) > 0) {
                                        while($fs_gro=mysql_fetch_array($result_nritalk))
                                        {
												$color = '';	
																		if($i++%2 == 0) {
																				$color = '#E6E6E6';	
																		} else {
																				$color = '#CCC';	
																		} 
												?>	
                                        <li style="background-color: <?php echo $color;?> !important;border: 1px solid white;"><a href="discussion_room_view.php?id=<?php echo $fs_gro['id'];?>" ><?php echo ucwords($fs_gro['title']);?></a></li>
                                        <?php } } else {  ?>
                                                        <li><h4>No Data Found.</h4></li>
                                                        <?php } ?>
                                        
                              </ul>    
                                      <a href="discussion_room.php?State=<?php echo $state;?>" class="read-btn-b">View more</a>
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
									if($_SESSION['Nris_session']['id'] > 0) {
												$query_Gro = "SELECT fam_groceries.*,rate FROM fam_groceries
									left join rating_grocery on rating_grocery.grocery_id = fam_groceries.id and login_id = ".$_SESSION['Nris_session']['id']."
									where  state_code='".$state."' and status = 'Active' order by id desc LIMIT 5";
									} else {
												$query_Gro = "SELECT fam_groceries.*,rate FROM fam_groceries
									left join rating_grocery on rating_grocery.grocery_id = fam_groceries.id 
									where  state_code='".$state."' and status = 'Active' order by id desc LIMIT 5";
									}
									
									//echo $query_Gro;
									$result_Gro = mysql_query($query_Gro);
									if(mysql_num_rows($result_Gro) > 0) 
									{
												$i = 0;
										while($rs_Gro = mysql_fetch_array($result_Gro)) {
												$color = '';	
																		if($i++%2 == 0) {
																				$color = '#E6E6E6';	
																		} else {
																				$color = '#CCC';	
																		}
												
												?>                                 
                                       <li style="background-color: <?php echo $color;?>">
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
									<?php
									$query = "SELECT DISTINCT  * FROM fam_restaurants
									LEFT OUTER JOIN rating_restaurant
									ON fam_restaurants.id = rating_restaurant.res_id
									WHERE fam_restaurants.state_code='".$state."'
									GROUP BY(fam_restaurants.id)
									ORDER BY rating_restaurant.rate desc LIMIT 6";
									$result = mysql_query($query);
									if(mysql_num_rows($result) > 0) 
									{$i = 0;
												while($rs = mysql_fetch_array($result)) {
												$color = '';	
												if($i++%2 == 0) {
														$color = '#E6E6E6';	
												} else {
														$color = '#CCC';	
												}
												?>  
                                         <li style="background-color: <?php echo $color;?>">
										 <a href="restaurant_inner_view.php?ViewId=<?php echo md5($rs['id']);?>">
										 <?php echo ucwords($rs['rest_name']);?></a></li>
                                    <?php } } else { ?> 
                                   <li>No Records Found.</li>
                                   <?php } ?>
                                        
                              </ul>    
                                      <a href="restaurants_inner.php?type=Top%20Rated%20Restaurants&code=<?php echo $state;?>" class="read-btn-b">View more</a>
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
									{$i = 0;
												while($rs_anc = mysql_fetch_array($result_anc)) {
												$color = '';	
																		if($i++%2 == 0) {
																				$color = '#E6E6E6';	
																		} else {
																				$color = '#CCC';	
																		}
												?>  
                                         <li style="background-color: <?php echo $color;?>"><a href="announcement_view.php?ViewId=<?php echo md5($rs_anc['id']);?>"><?php echo ucwords($rs_anc['title']);?></a></li>
                                    <?php } } else { ?> 
                                   <li>No Records Found.</li>
                                   <?php } ?>
                                 
                                        
                                        
                              </ul>    
                                      <a href="announcement.php?State=<?php echo $state; ?>" class="read-btn-b">View more</a>
                              </div>  
                 </div>
                         </div><!-- MIDDLE SECTION ENDS -->
                    
                     <!-- LEFT AD SECTION -->
                    <div class="right-imgs">
                    	<div class="col-md-12 padding-no">
                        
                                <div class="adv-big">
                                    <?php //include_once('state_common_right.php');?>
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
<?php include "config/social.php" ;  ?>


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