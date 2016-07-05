<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<base href="/">
<script type="text/javascript">
		var site_url = '<?php echo $siteUrlConstant;?>';
		var map_url = '<?php echo str_replace('www.','',$_SERVER['SERVER_NAME']).'/';?>';
	</script>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Indian Website for Nris in USA | NRIS</title>
	<meta name="description" content="An Indian community website for all NRI'S residing in United States. Get information on local real estate, Indian movies, restaurants, visiting spots etc.">
	<meta name="author" content="NRIs">
	<?php include_once('tracking.php');?>
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="img/favicon.png">
    
    <link href='css/font.css' rel='stylesheet' type='text/css'>
    <script src="js/jquery.min.js"></script> 
    <link rel="stylesheet" href="css/bootstrap.css">
  	<link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    	<link rel="stylesheet" href="css/tab/style.css"> <!-- Resource style -->
	<script src="js/map-config.js" type="text/javascript"></script>
            <script src="js/jquery.bxslider.js"></script>
            <link rel="stylesheet" href="css/jquery.bxslider.css">
            <script src="css/modal/bootstrap.min.js"></script>
            <link href="widget/astrovisioncss.css" rel="stylesheet">
           
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
            $("#advert-grp li").css("display", "block");
        }
                    });
                });
            </script>
  
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>
	<?php   include "config/menu_home.php" ;  ?>
	
	<div class="clearfix"></div>
		<div id="stock_div">
			<iframe id="myFrame" src="http://nris.com/stock_block_state.php" style="margin: 0px !important;padding: 0px !important;width:100%;height:41px;"></iframe>
		</div> 
<div class="section-1-wrap">	
		<div class="section-1">
<!-- WEATHER WIDGET -->
				<div class="left-section-1 col-md-2" >
				        <script src="widget/astrovisionjs.js"></script>
<div id="astro_widget_home">
		<div id="astro_widget_home_content">
</div>
</div>
                </div><!-- End Left-Section-1 -->
<!-- MAIN MIDDLE SECTION-->
<div class="middle-section">
				<!-- TOP HALF AD STARTS-->              
                <div class="top-half">
                    <ul class="advert-grp" id="advert-grp">
                        <?php
                            $home_middle_query1 = "select * from us_ads where ad_position='Home-Top-Center-4'  and status='Active' order by id desc";
                            $home_middle_res1 = mysql_query($home_middle_query1);
                            while ($home_dm1 = mysql_fetch_array($home_middle_res1)) {
                        ?>
                        <li>
									<?php
                                    if($home_dm1['edate'] >= $current_date) {
										if($home_dm1['url'] != '') {
												echo '<a href="' . $home_dm1['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_dm1 ['image'].'" alt="'.$home_dm1 ['image'].'" width="217" height="87"></a>';
										} else {
												echo '<a href="javascript:;" target="_blank"><img src="admin/uploads/us_ads/'.$home_dm1 ['image'].'" alt="'.$home_dm1 ['image'].'" width="217" height="87"></a>';
										}
                                    } else { 
                                        $home_middle_query1 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Top-Center-4' and ad_position_no='1' and edate < '".$current_date."' "); 
                                    ?>		            
                                        <a href="javascript:;" ><img src="img/middle.jpg" alt="Advertisement" width="217" height="87"></a>
                                    <?php } ?>                      
                            </li>	
                        <?php } ?>
                  </ul><!-- TOP ADVERT FROUP ENDS -->
              </div>
              <!-- TOP HALF AD SECTION ENDS -->
               <!-- MIDDLE MAP SECTION -->                
				<div class="right-section-map-wrap">
				  <div class="text_map">
						<input type="text" name="responsive_auto_states" id="responsive_auto_states" value="" placeholder="Choose State"/>
				  </div>
                   <span id="map-tip"></span>
<div id="mapwrapper">
	<div id="map_base">
		<?php
				$cache_file = 'map.php';
				$cachedFile = 'map_cached.php';
				$url = $siteUrlConstant.$cache_file;
				if (file_exists($cachedFile) && (filemtime($cachedFile) > (time() - 60 * 60 * 1200 ))) {
						$file = file_get_contents($cachedFile);
				} else {
						$file = file_get_contents($url);
						file_put_contents($cachedFile, $file, LOCK_EX);
				}
				echo $file;
		?>
	</div>
</div>
<div class="clear"></div> 
				</div><!-- MAP MODULE  ENDS-->
</div><!-- MAIN MIDDLE SECTION  ENDS-->
                <!-- RIGHT AD SECTION -->
				<div class="right-section-ad">
                   <div class="padding-no ad-right-top">
						<?php
								$home_righttop_query1 = "select * from us_ads where ad_position='Home-Right-Top-8' and status='Active' order by ad_position_no asc,id desc limit 8";
                                $home_righttop_ad_res1 = mysql_query($home_righttop_query1);
								$homeRightCnt = 0;
								while($homeRight = mysql_fetch_array($home_righttop_ad_res1)) {
										$homeRightCnt++;
						?>
						<div class="advertise-1">
								<?php                                    
									
									 if($homeRight['edate'] >= $current_date)
									{
											$homeRight['url'] = ($homeRight['url'] != '') ? $homeRight['url'] : 'javascript:;';
									echo '<a href="' . $homeRight['url'] . '" target="_blank">
											<img width="165" height="30" src="admin/uploads/us_ads/'.$homeRight['image'].'" alt="'.$homeRight['image'].'">
											</a>';
									} else { 
									?>
									<a href="javascript:;" ><img width="165" height="30" src="img/home_right_top.jpg" alt="Advertisement"></a>
								<?php } ?> 
						</div>	
					<?php }
						$remainingHomeRightCnt = 8-$homeRightCnt;
						for($k = 0; $k < $remainingHomeRightCnt ; $k++) {
								?>
								<div class="advertise-1"><a href="javascript:;" ><img width="165" height="30" src="img/home_right_top.jpg" alt="Advertisement"></a></div>
								<?php
						}
					?>
					
				   </div><!-- RIGHT AD SECTION ENDS -->  
<!-- EVENTS SECTION -->                 
                     <div class="events col-md-12 padding-no">
                        
                            <div class="head-title">
                                <h3>National Events</h3>
                            </div>
								<?php
										$eventCatSelect = "SELECT category FROM national_events GROUP BY category ORDER BY id DESC LIMIT 3";
										$eventCatResult = mysql_query($eventCatSelect);
										while($tempRes = mysql_fetch_array($eventCatResult)) {
												$eventCatArr[] = $tempRes['category'];
										}
								?>
                              <div class="cd-tabs">
                                  <nav>
                                      <ul class="cd-tabs-navigation">
												<?php $catCnt = 0;
												foreach($eventCatArr as $eventCat) { ?>
														<li style="width:33.3%;"><a data-content="<?php echo $eventCat;?>" <?php if($catCnt == 0) { ?>class="selected"<?php } ?> href="<?php echo '#'.$catCnt++;?>"><?php echo ucfirst($eventCat);?></a></li>
												<?php } ?>
                                      </ul> <!-- cd-tabs-navigation -->
                                  </nav>
                                  
                                  <ul class="cd-tabs-content cd-tabs-content-2">
										<?php $catCnt = 0;
												foreach($eventCatArr as $eventCat) { ?>
										<li data-content="<?php echo $eventCat;?>" <?php if($catCnt++ == 0) { ?>class="selected"<?php } ?>>
											<div class="content-tab">                                             
											  <?php
												  $query_Nation_evnts_Cul="select * from national_events where category='".$eventCat."' and edate>'".$current_date."' and status='Active' order by id desc limit 5";																
												  $result_Events_cul=mysql_query($query_Nation_evnts_Cul);                                                
												  if(mysql_num_rows($result_Events_cul) > 0) {
												  while($rs_event1=mysql_fetch_array($result_Events_cul))
												  {?>   
												  <p><a href="<?php echo $siteUrlConstant;?>national_events?ViewId=<?php echo ucfirst($eventCat);?>"><?php echo date("d M ",strtotime($rs_event1['date'])); ?><span>&nbsp; <?php echo ucwords($rs_event1['title']);?></span></a></p>
												  <?php } } else {  ?>
												  <h4>No Data Found.</h4>
												  <?php } ?>
												
											</div>    
											<a href="<?php echo $siteUrlConstant;?>national_events?ViewId=Cultural" class="read-btn-tab">View more</a>
										</li>
                                      <?php } ?>
                                  </ul> <!-- cd-tabs-content ends -->
                                  
                              </div> <!-- cd-tabs ends-->
    
                </div><!-- EVENTS ENDS -->
                    
            </div><!-- RIGHT AD AND EVENTS SECTION ENDS -->
                 
                 
   <div class="btn-module col-md-8">
           
           <!-- BUTTON COLUMN FIRST -->
           		<div class="col-md-4 full-wid">
                    <div class="btn-1"><a href="<?php echo $siteUrlConstant;?>temples">Famous Temples<br> rated by NRI's</a></div>
                    <div class="btn-1"><a href="<?php echo $siteUrlConstant;?>restaurants">Famous Restaurants<br> rated by NRI's</a></div>
                </div>
          <!-- BUTTON COLUMN SECOND -->
           		<div class="col-md-4 full-wid">
                	<div class="btn-round-wrap">
                      	<div class="btn-round"><a href="javascript:;" data-toggle="modal" data-target="#free_post">Create<br><span>Free Post</span></a></div>
                        <div class="btn-round-red" id="premium_custom_btn"><a href="javascript:;" data-toggle="modal" data-target="#premium_post">Create<br><span>Premium Post</span></a></div>
                    </div>    
                </div>
          <!-- BUTTON COLUMN THIRD -->
           		<div class="col-md-4 full-wid">
                    <div class="btn-1"><a href="<?php echo $siteUrlConstant;?>casinos">Famous Casinos<br> rated by NRI's</a></div>
                    <div class="btn-1"><a href="<?php echo $siteUrlConstant;?>pubs">Famous Pubs/Bars<br> rated by NRI's</a></div>
                </div>  
           </div> <!-- btn-module ENDS -->
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
                <!-- SECTION 2 NEW -->
                <div class="section-new-2">
                
                <!-- RIGHT AD SECTION -->
                <div class="left-image">
                           <div class="padding-no">
								<?php
										$home_left_query1 = "select * from us_ads where ad_position='Home-Left-Bottom' and status='Active' order by ad_position_no asc,id desc limit 8";
										$home_left_ad_res1 = mysql_query($home_left_query1);
										$leftBottomCnt = 0;
										while($home_left1 = mysql_fetch_array($home_left_ad_res1)) {
												$leftBottomCnt++;
								?>
                                <div class="image-big">
                                          <?php                                    
                                    
                                    if($home_left1['edate'] >= $current_date)
                                    {
                                  		 $home_left1['url'] = ($home_left1['url'] != '') ? $home_left1['url'] : 'javascript:;';
                                   	 	echo '<a href="' . $home_left1['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_left1['image'].'" alt="'.$home_left1['image'].'" width="192" height="96"></a>';
                                    } else {
                                    ?>		
                                       <a href="javascript:;"><img src="images/ads1.gif" height="96" width="192" alt="Advertisement"></a>
                                          <?php } ?>  
                                </div>
                                <?php }
										$remainingLeftBotmCnt = 8-$leftBottomCnt;
										for($k = 0; $k < $remainingLeftBotmCnt ; $k++) {
												?>
												<div class="image-big">
														<a href="javascript:;"><img src="images/ads1.gif" height="96" width="192" alt="Advertisement"></a>
												</div>
												<?php
										}
								?>
                           </div> 
                            
               </div><!-- RIGHT AD SECTION ENDS -->
               <div class="middle-column-section-2">
                    
                                <div class="events col-md-12 padding-no">
                                    
                                        <div class="head-title">
                                            <h3>National Training &amp; Placement</h3>
                                        </div>
                    
                                          <div class="cd-tabs">
                                              <nav>
                                                  <ul class="cd-tabs-navigation">
                                                   <?php 
															$query_cat="select * from national_batch_cat order by name";
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
													$query_cat="select * from national_batch_cat order by name";
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
																$query_Nation_tran_SAP="select  * from  natioal_batches where expdate>='".$current_date."' and  category = '".$rsfs['id']."' and status='Active' order by date desc limit 5";								
								
																$result_SAP=mysql_query($query_Nation_tran_SAP);                                                
																if(mysql_num_rows($result_SAP) > 0) {
																while($rs_SAP=mysql_fetch_array($result_SAP))
																{?>												
                                                      
                                                          <p><a href="<?php echo $siteUrlConstant;?>national_training?ViewId=<?php echo $rsfs['id'] ; ?>"><?php echo date("d M ",strtotime($rs_SAP['date'])); ?><span>&nbsp; <?php echo ucwords($rs_SAP['title']);?></span></a></p>
                                                        <?php } } else {  ?>
                                                        <h4>No Data Found.</h4>
                                                        <?php } ?>
                                                      </div>    
                                                      <a href="<?php echo $siteUrlConstant;?>national_training?ViewId=<?php echo $rsfs['id'] ; ?>" class="read-btn-tab">View more</a>
                                                  </li>
                                                <?php  $edudata++ ; } ?>  
                                              </ul> <!-- cd-tabs-content ends -->
                                              
                                          </div> <!-- cd-tabs ends-->
                
                            </div><!-- EVENTS ENDS -->
            
            <!-- DESI MARKET SECTION -->                
                            <div class="nri-talk col-md-6">
                                  <div class="head-title-no-pad">
                                      <h3>Desi Market</h3>
                                  </div>
                                    <ul>
										<?php
                                        $query_groceries="select  * from  fam_groceries order by id desc limit 5";																
                                        $result_Groceries=mysql_query($query_groceries);
										$i = 0;
                                        if(mysql_num_rows($result_Groceries) > 0) {
                                        while($fs_gro=mysql_fetch_array($result_Groceries))
                                        {
												$color = '';	
																		if($i++%2 == 0) {
																				$color = '#E6E6E6';	
																		} else {
																				$color = '#CCC';	
																		} 
												?>		
                                        <li style="background-color: <?php echo $color;?> !important;border: 1px solid white;"><a href="<?php echo $siteUrlConstant;?>grocery_view?ViewId=<?php echo md5($fs_gro['id']);?>" ><?php echo ucwords($fs_gro['name']);?></a></li>
                                        <?php } } else {  ?>
                                                        <li><h4>No Data Found.</h4></li>
                                                        <?php } ?>
                                        
                                    </ul>
                                    <a href="javascript:;" class="read-btn" data-toggle="modal" data-target="#desi_market">View more</a>
                            </div>
                                                  <!-- Modal -->
                                      <div class="modal fade" id="desi_market" role="dialog">
                                        <div class="modal-dialog">
                                        
                                          <!-- Modal content-->
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">Desi Market</h4>
                                            </div>
                                            <div class="modal-body">
                                              <p style="color:#000000;font-size:14px;">Select your state at the top map to check more data.</p>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                          
                                        </div>
                                      </div>
                            
            <!-- NRI TALK SECTION -->                                            
                            <div class="nri-talk col-md-6">
                            	<div class="head-title-no-pad">
                                      <h3>National NRI's Talk</h3>
                                </div>
                                 <ul>
										<?php
                                        $query_nritalk="select  * from  nris_talk where title != '' order by id desc limit 5";																
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
                                        <li style="background-color: <?php echo $color;?> !important;border: 1px solid white;"><a href="<?php echo $siteUrlConstant;?>discussion_room_view?id=<?php echo $fs_gro['id'];?>" ><?php echo ucwords($fs_gro['title']);?></a></li>
                                        <?php } } else {  ?>
                                                        <li><h4>No Data Found.</h4></li>
                                                        <?php } ?>
                                    </ul>
                             </div>
             <!-- 3 AD SECTION -->                                            
                            <div class="three-ad-wrap">
                                <div class="thr-ad">
									<?php      
                                    $home_bottom_query1 = "select * from us_ads where ad_position='Home-Bottom-Small' and ad_position_no='1' and status='Active' order by id desc limit 1";
                                    $home_bottom_ad_res1 = mysql_query($home_bottom_query1);
									$home_btm1 = mysql_fetch_array($home_bottom_ad_res1);
                                    if($home_btm1['edate'] >= $current_date)
                                    {
										$home_btm1['url'] = ($home_btm1['url'] != '') ? $home_btm1['url'] : 'javascript:;';
                                   	 	echo '<a href="' . $home_btm1['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_btm1['image'].'" alt="'.$home_btm1['image'].'" width="294" height="123"></a>';
                                    } else { 
							$home_bottom_query1 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Bottom-Small' and ad_position_no='1' and edate < '".$current_date."' ");
                                    ?>		
                                        
                                        <img src="images/ads1.gif" height="123" width="294" alt="Advertisement">
                                          <?php } ?>
                                    
                                </div>
                                
                                <div class="thr-ad">
                                	
									<?php                                    
                                    $home_bottom_query2 = "select * from us_ads where ad_position='Home-Bottom-Small' and ad_position_no='2' and status='Active' order by id desc limit 1";
                                    $home_bottom_ad_res2 = mysql_query($home_bottom_query2);
									$home_btm2 = mysql_fetch_array($home_bottom_ad_res2);
                                    if($home_btm2['edate'] >= $current_date)
                                    {
                                  		$home_btm2['url'] = ($home_btm2['url'] != '') ? $home_btm2['url'] : 'javascript:;';
                                   	 	echo '<a href="' . $home_btm2['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_btm2['image'].'" alt="'.$home_btm2['image'].'" width="294" height="123"></a>';
                                    } else {
									$home_bottom_query2 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Bottom-Small' and ad_position_no='2' and edate < '".$current_date."' "); 
                                    ?>		
                                        
                                       <img src="images/ads1.gif" height="123" width="294" alt="Advertisement">
                                          <?php } ?>
                                    
                                </div>
                                
                                <div class="thr-ad">
                                	
									<?php                                    
                                    $home_bottom_query3 = "select * from us_ads where ad_position='Home-Bottom-Small' and ad_position_no='3' and status='Active' order by id desc limit 1";
                                    $home_bottom_ad_res3 = mysql_query($home_bottom_query3);
									 $home_btm3 = mysql_fetch_array($home_bottom_ad_res3);
                                    if($home_btm3['edate'] >= $current_date)
                                    {
                                  		$home_btm3['url'] = ($home_btm3['url'] != '') ? $home_btm3['url'] : 'javascript:;';
                                   	 	echo '<a href="' . $home_btm3['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_btm3['image'].'" alt="'.$home_btm3['image'].'" width="294" height="123"></a>';
                                    } else { 
							$home_bottom_query2 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Bottom-Small' and ad_position_no='3' and edate < '".$current_date."' "); 		
                                    ?>		
                                        
                                        <img src="images/ads1.gif" height="123" width="294" alt="Advertisement">
                                          <?php } ?>
                                    
                                </div>
                            </div>
               <!-- 1 AD SECTION -->
                            <div class="single-ad">
                            	<?php                                    
                                    $home_bottom_query4 = "select * from us_ads where ad_position='Home-Bottom-Large' and ad_position_no='1' and status='Active' order by id desc limit 1";
                                    $home_bottom_ad_res4 = mysql_query($home_bottom_query4);
									$home_btm4 = mysql_fetch_array($home_bottom_ad_res4);
                                     if($home_btm4['edate'] >= $current_date)
                                    {
                                  		 $home_btm4['url'] = ($home_btm4['url'] != '') ? $home_btm4['url'] : 'javascript:;';
										 echo '<a href="' . $home_btm4['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_btm4['image'].'" alt="'.$home_btm4['image'].'" width="875" height="110"></a>';
                                   	 	
                                    } else {
								$home_bottom_query2 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Bottom-Large' and ad_position_no='1' and edate < '".$current_date."' "); 			 
                                    ?>		
                                        
                                        <img src="img/home_bottom2.jpg" alt="Advertisement" width="875" height="110">
                                          <?php } ?>
                            </div><!-- 1 AD SECTION ENDS -->
                
                
                    </div><!-- MIDDLE SECTION ENDS -->
                    
                     <!-- LEFT AD SECTION -->
                    <div class="right-img">
                    	<div class="col-md-12 padding-no">
								<?php
										$home_right_query1 = "select * from us_ads where ad_position='Home-Right-Bottom' and status='Active' order by ad_position_no asc,id desc limit 8";
										$home_right_ad_res1 = mysql_query($home_right_query1);
										$rightBtmCnt = 0;
										while($home_right1 = mysql_fetch_array($home_right_ad_res1)) {
												$rightBtmCnt++;
								?>
                                <div class="image-big">
                                       <?php    
                                    if($home_right1['edate'] >= $current_date)
                                    {
										$home_right1['url'] = ($home_right1['url'] != '') ? $home_right1['url'] : 'javascript:;';
                                   	 	echo '<a href="' . $home_right1['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_right1['image'].'" alt="'.$home_right1['image'].'" width="192" height="96"></a>';
                                    } else {
                                    ?>
                                         <img src="images/ads1.gif" height="96" width="192" alt="Advertisement">
                                          <?php } ?>   
                                </div>
								<?php }
										$remainingRightBtmCnt = 8-$rightBtmCnt;
										for($k = 0; $k < $remainingRightBtmCnt ; $k++) {
												?>
												<div class="image-big">
														<img src="images/ads1.gif" height="96" width="192" alt="Advertisement">
												</div>
												<?php
										}
								?>
                           </div> 
                    </div><!-- LEFT AD SECTION ENDS-->
                    
                </div> <!--SECTION 2 ENDS -->
                 
                </div><!-- right-section-1 ENDS -->

</div><!-- End Section-1 -->

	 <?php include "config/footer.php" ; ?>
     <!--End footer -->

<div class="go-up"><i class="fa fa-chevron-up"></i></div>
<script src="js/tab/jquery-2.1.1.js"></script>
<script src="js/tab/main.js"></script> <!-- Resource jQuery -->

    <script src="calender/jquery-ui.js"></script>

    <script src="widget/jquery.simpleWeather.min.js"></script>
    <script src="widget/moment.js"></script>
    <script src="widget/moment-timezone.js"></script>
    <script src="widget/jstz.min.js"></script>
    <script src="widget/jqIpLocation.js"></script>
    <script type="text/javascript">
		
		var widget = new avWidgetAstroCalendar('astro_widget_home');
        $(document).ready(function () {
			
			$( "#responsive_auto_states" ).autocomplete({
      source: "state_auto.php",
      minLength: 1,
      select: function( event, ui ) {
			window.location.href = site_url+'state?State='+ui.item.id;
      }
    });
			
			var locat = '<?php echo $state;?>';
			var imgUrl = 'images/combo.png';
			$("#astro_widget_home").css('background-image','url(' + imgUrl + ')');
			$("#astro_widget_home").css('background-repeat','no-repeat');
			$("#astro_widget_home").css('background-color','beige');
															
			$.get("http://ipinfo.io", function(response) {
						$.ajax({
									url : 'location.php',
									type: 'POST',
									data: {ip:response.ip},
									success : function(data) {
										if (data == '' || typeof(data) == 'undefined') {
                                        } else {
											locat =	data;
										}
										$.simpleWeather({
												location: locat,
												woeid: '',
												unit: 'f',
												success: function(weather) {
															var imgUrl = weather.image;
															if (imgUrl == '' || typeof(imgUrl) == 'undefined') {
                                                                imgUrl = 'images/combo.png';
                                                            }
															$("#astro_widget_home").css('background-image','url(' + imgUrl + ')');
															$("#astro_widget_home").css('background-repeat','no-repeat');
															$("#astro_widget_home").css('background-color','beige');
												},
												error: function(error) {
												  $("#weather").html('<p>'+error+'</p>');
												}
									});
									}
								});			
			}, "jsonp");
        });
    </script>
<?php include "config/social.php" ;  ?>
</body>
</html>