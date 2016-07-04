<?php  include"config/connection.php";

		$category = $_GET['lang'];
		$title = $description = 'Nri Movies, Movies';
		if($category != '') {
			switch($category) {
				case 'Panjabi' :
					$title = 'Panjabi Entertainment | Watch Punjabi Movies Online | NRIs';
					$description = 'A movie of the day is here! Watch Panjabi movies in high-quality resolution anytime. Let the entertainment continues with latest hits of flash players.';
					break;
				case 'Tamil' :
					$title = 'Full-on Entertainment | Tamil Movies Online | NRIs';
					$description = 'Watch latest Tamil movies, trailers of various genres like action, comedy, romance, family, drama, horror etc at NRIs. Browse big collection of fun here!';
					break;
				case 'Hindi' :
					$title = 'Hindi Cinema Fun | NRIs';
					$description = 'Watch the latest Bollywood movies only at NRIs. From romantic to action, comedy to drama, emotional to horror, children’s fun to animation, all entertainment is here.';
					break;
				case 'English' :
					$title = 'Hollywood Theatre in HD | NRIs';
					$description = 'Don’t let the entertainment stop with latest Hollywood movies. Browse your favorite movies online for free streamed on flash players and enjoy watching.';
					break;
				case 'Telugu' :
					$title = 'Desi Telugu Movies and Videos Online | NRIs';
					$description = 'Let the fun begins! Watch desi movies and videos only at NRIs. Enjoy watching latest Telugu movies and trailers of various genres like action, comedy, romance, etc.';
					break;
				case 'kannada' :
					$title = 'Watch Latest Kannada Movies Online | NRIs';
					$description = 'Watch Kannada movies online! Enjoy the latest Kannada movies, trailers of various genres like action, comedy, romance, family, drama, horror etc at NRIs.';
					break;
				default :
					$title = $category;
					$description = $category;
			}
		}
?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head><base href="/">

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title><?php echo $title;?></title>
	<meta name="description" content="<?php echo $description;?>">
	<meta name="author" content="NRIs">
	
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
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <!--[if !IE]><!-->
	
    

        <link rel="stylesheet" href="css/fancybox/jquery.fancybox-buttons.css">
        <link rel="stylesheet" href="css/fancybox/jquery.fancybox.css">        
       
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
.cat_heading
{
color: #3c3c3c;;font-family: "Montserrat",sans-serif;font-size: 18px;font-weight: 700;line-height: 3px; margin: 0;padding: 20px 0 10px;text-align: left;text-transform: uppercase;
}

</style>    
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>



	<?php if(isset($defaultState) && $defaultState != '') { ?>
		<?php include "config/menu_inner_state.php" ;  ?>
	<?php } else { ?>
		<?php include "config/menu.php" ;  ?>
	<?php } ?>
	
	<div class="clearfix"></div>

    <?php include_once('stock_block.php');?>
	

    
    
<!-- Section-1 WRAP START-->	
<div class="section-1-wrap" style="min-height:600px;">	
<!-- Section-1 START-->


	<div class="col-md-12">
					<div class="col-md-4">
						
					</div>
					<div class="col-md-8">
					<?php
				
				
				$query_video_lang="select * from  video_languages order by id desc";
				$result_video_lang=mysql_query($query_video_lang);                                                
				while($rs_video_lang=mysql_fetch_array($result_video_lang))
				{?>
				<a href="<?php echo $siteUrlConstant;?>videos/<?php echo $rs_video_lang['name'] ?>">
				<div class="col-xs-2 col-centered">
					<div class="famous_btn" <?php if($rs_video_lang['name'] == $_GET['lang']) { ?>style="background-color: #2eb1fd;"<?php }?>>
					<?php echo $rs_video_lang['name'] ?>
					</div></div></a>
				<?php } ?>
	</div>
				</div>

		<div class="col-md-12">
				
              <?php
			  if(isset($_GET['lang'])) { ?>
			  
			  <?php
			  $tableName="videos";		
	$targetpage = "videos/".$_GET['lang']; 	
	$limit = 15; 
	
	$query = "SELECT DISTINCT  * FROM videos where status = 'Active' and language = '".$_GET['lang']."'";

	$total_pages = mysql_query($query);
	$total_pages = mysql_num_rows($total_pages);

	
//	$total_pages = $total_pages[num];
	
	$stages = 3;
	$page = mysql_escape_string($_GET['page']);
	if($page){
		$start = ($page - 1) * $limit; 
	}else{
		$start = 0;	
		}	
	
	// Initial page num setup
	if ($page == 0){$page = 1;}
	$prev = $page - 1;	
	$next = $page + 1;							
	$lastpage = ceil($total_pages/$limit);		
	$LastPagem1 = $lastpage - 1;					
	
	
	$paginate = '';
	if($lastpage > 1)
	{	
	

	
	
		$paginate .= "<div class='paginate'>";
		// Previous
		if ($page > 1){
			$paginate.= "<a href='$targetpage&page=$prev'><i class='fa fa-angle-double-left'></i></a>";
		}else{
			$paginate.= "<span class='disabled'><i class='fa fa-angle-double-left'></i></span>";	}
			

		
		// Pages	
		if ($lastpage < 7 + ($stages * 2))	// Not enough pages to breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page){
					$paginate.= "<span class='current'>$counter</span>";
				}else{
					$paginate.= "<a href='$targetpage&page=$counter'>$counter</a>";}					
			}
		}
		elseif($lastpage > 5 + ($stages * 2))	// Enough pages to hide a few?
		{
			// Beginning only hide later pages
			if($page < 1 + ($stages * 2))		
			{
				for ($counter = 1; $counter < 4 + ($stages * 2); $counter++)
				{
					if ($counter == $page){
						$paginate.= "<span class='current'>$counter</span>";
					}else{
						$paginate.= "<a href='$targetpage&page=$counter'>$counter</a>";}					
				}
				$paginate.= "...";
				$paginate.= "<a href='$targetpage&page=$LastPagem1'>$LastPagem1</a>";
				$paginate.= "<a href='$targetpage&page=$lastpage'>$lastpage</a>";		
			}
			// Middle hide some front and some back
			elseif($lastpage - ($stages * 2) > $page && $page > ($stages * 2))
			{
				$paginate.= "<a href='$targetpage&page=1'>1</a>";
				$paginate.= "<a href='$targetpage&page=2'>2</a>";
				$paginate.= "...";
				for ($counter = $page - $stages; $counter <= $page + $stages; $counter++)
				{
					if ($counter == $page){
						$paginate.= "<span class='current'>$counter</span>";
					}else{
						$paginate.= "<a href='$targetpage&page=$counter'>$counter</a>";}					
				}
				$paginate.= "...";
				$paginate.= "<a href='$targetpage&page=$LastPagem1'>$LastPagem1</a>";
				$paginate.= "<a href='$targetpage&page=$lastpage'>$lastpage</a>";		
			}
			// End only hide early pages
			else
			{
				$paginate.= "<a href='$targetpage&page=1'>1</a>";
				$paginate.= "<a href='$targetpage&page=2'>2</a>";
				$paginate.= "...";
				for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page){
						$paginate.= "<span class='current'>$counter</span>";
					}else{
						$paginate.= "<a href='$targetpage&page=$counter'>$counter</a>";}					
				}
			}
		}
					
				// Next
		if ($page < $counter - 1){ 
			$paginate.= "<a href='$targetpage&page=$next'><i class='fa fa-angle-double-right'></i></a>";
		}else{
			$paginate.= "<span class='disabled'><i class='fa fa-angle-double-right'></i></span>";
			}
			
		$paginate.= "</div>";		
	
}?>
			  
                <div class="col-md-4" style="margin:0 auto;">
     
                            <div style="width:30%;float:left;">&nbsp;</div>
                            <div class="nri-talk" style="width:70%;height: auto !important;">
                                          <div class="head-title-no-pad">
                                              <h4 class="cat_heading">Category</h4>
                                        </div>
                                                <div class="bord-cla">
                                                 <ul>
                                                       <?php
														$querys_video_cat="select * from  video_categories order by category_name";
														$results_video_cat=mysql_query($querys_video_cat);                                                
														while($row__video_cat=mysql_fetch_array($results_video_cat))
														{
															$color = '';
															if($row__video_cat['category_name'] == $_GET['cat']) {
																$color = 'lightseagreen';	
															}
															
															?>
                                                       
                                                        <li style="padding-left:5px;padding-right:5px;background-color: <?php echo $color;?>"><a href="<?php echo $siteUrlConstant;?>videos?lang=<?php echo $_GET['lang'] ?>&cat=<?php echo $row__video_cat['category_name'] ?>"><?php echo $row__video_cat['category_name'] ?></a></li>
                                                        <?php } ?>
                                                        
                                              </ul>                                                         
                                              </div>        
                            </div>
                </div>
				
				
				
                <div class="col-md-8" style="border: 10px solid transparent;border-image: url('images/border.png') 30 round;margin-top: 14px;">
					<div class="col-md-12">
					   <div class="col-md-12">
						   <center><h3 style="margin-top: 10px;">Movie of the Day</h3></center>
					   </div>
					</div>
					<?php
					$sql2 = "SELECT * FROM videos WHERE language = '".$_GET['lang']."'
										   ORDER BY rand(".date('Ymd').") LIMIT 1";
							   //echo $sql2;
							   $result2 = mysql_query($sql2);		
							   $rs2 = mysql_fetch_array($result2);
					?>
					<div class="col-md-12">
					   <div class="col-md-7">
						   <?php
							   if(mysql_num_rows($result2) > 0) {
							   ?>
							   
							   <div class="col-md-6" style="padding:5px;margin:10px;padding-right: 20px;margin-right: 0px;border-right:2px solid lightgrey;">
						   <a class="various fancybox.iframe" title="<?php echo ucfirst($rs2['title']); ?>"
						   href="http://www.youtube.com/v/<?php echo $rs2['video_id']; ?>?fs=1&amp;autoplay=1">
						   <img alt="<?php echo ucfirst($rs2['title']); ?>" src="http://img.youtube.com/vi/<?php echo $rs2['video_id']; ?>/0.jpg" title="<?php echo $rs2['title'];?>">
						   </a>
					   </div>
					   <div class="col-md-5" style="padding-left:0px;">
							<div style="float:left; clear:both;text-align: left;padding-left:20px;padding-top: 16px;">
							   <b style="font-size: 18px;color: #9445A2;"><?php
							   echo $rs2['title'];?></b>
							   <br>
							   <?php
									$blog_id = $assoc_id = $rs2['id'];
									$type = 'video';
									$likeQuery = mysqli_query($con, 'SELECT COUNT(id) as cnt from likes
									where assoc_id = '.$assoc_id.' AND type="'.$type.'" AND like_val = 1');
									$likeQueryRes1 = mysqli_fetch_assoc($likeQuery);
									$likeQueryRes = (isset($likeQueryRes1['cnt'])) ? $likeQueryRes1['cnt'] : 0;
				
									$dislikeQuery = mysqli_query($con, 'SELECT COUNT(id) as cnt from likes
									where assoc_id = '.$assoc_id.' AND type="'.$type.'" AND like_val = 0');
									$dislikeQueryRes1 = mysqli_fetch_assoc($dislikeQuery);
									$dislikeQueryRes = (isset($dislikeQueryRes1['cnt'])) ? $dislikeQueryRes1['cnt'] : 0;
							   ?>
							   <?php echo $rs2['language'].' ('.$rs2['category'].')';?>
							   <br><br>
							   <p style="color: #9445A2"><?php echo 'Likes '.$likeQueryRes.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dislikes '.$dislikeQueryRes;?></p>
						   </div>
					   </div><?php } else { ?>
									<div class="col-md-7" style="padding:5px;margin:10px;">
										<h4>No Videos Found.</h4>
									</div>
							   <?php }
						   ?>
					   </div>
					</div>
				</div>
                
                <div class="col-md-8"><br><br>
                	
                    <?php
					
					if(isset($_GET['cat']))
					{					
						$query= 'select * from  videos where language="'.trim($_GET['lang']).'" and  category="'.trim($_GET['cat']).'" order by id desc  LIMIT '.$start.', '.$limit;
					}
					else	
					{
							$query="select * from  videos where language='".trim($_GET['lang'])."'  order by id desc  LIMIT $start, $limit";
					}		
						//echo $query;
						$result=mysql_query($query);						
						if(mysql_num_rows($result) > 0) {
							$i = 0;
						while($rs=mysql_fetch_array($result))
						{	?>	
                        
                	<div class="col-md-2" style="padding:8px;margin-bottom: 20px;float: left !important;<?php if($i++ % 6 == 0) { ?>clear:both;<?php } ?>">
						<div style="float:left; width:100%;clear:both;" title="<?php echo $rs['title'];?>">
							<?php
							$strlen = 12;
							if(strlen($rs['title']) > $strlen) {
								$finalTitle = substr($rs['title'],0,$strlen).'..';
							} else {
								$finalTitle = $rs['title'];
							} echo $finalTitle;?>
						</div>
                    	<a class="various fancybox.iframe" title="<?php echo ucfirst($rs['title']); ?>"
						href="http://www.youtube.com/v/<?php echo $rs['video_id']; ?>?fs=1&amp;autoplay=1">
						<img alt="<?php echo $finalTitle;?>" src="http://img.youtube.com/vi/<?php echo $rs['video_id']; ?>/0.jpg" title="<?php echo $rs['title'];?>">
						</a>
								<?php
							
							$blog_id = $assoc_id = $rs['id'];
							$type = 'video';
							$likeQuery = mysqli_query($con, 'SELECT COUNT(id) as cnt from likes
							where assoc_id = '.$assoc_id.' AND type="'.$type.'" AND like_val = 1');
							$likeQueryRes1 = mysqli_fetch_assoc($likeQuery);
							$likeQueryRes = $likeQueryRes1['cnt'];
		
							$dislikeQuery = mysqli_query($con, 'SELECT COUNT(id) as cnt from likes
							where assoc_id = '.$assoc_id.' AND type="'.$type.'" AND like_val = 0');
							$dislikeQueryRes1 = mysqli_fetch_assoc($dislikeQuery);
							$dislikeQueryRes = $dislikeQueryRes1['cnt'];
							
							if (!empty($_SESSION['Nris_session']['id'])) { ?>
							<?php
							$user_id = $_SESSION['Nris_session']['id'];
							$query_res = mysqli_query($con, 'SELECT like_val from likes where user_id = '.$user_id.' AND assoc_id = '.$assoc_id.' AND type="'.$type.'"');
							$user_like_res = mysqli_fetch_assoc($query_res);
		
							$like_cls = $disliked_cls = '';
							if (isset($user_like_res['like_val'])) {
								$like_cls = ($user_like_res['like_val'] == 1) ? 'liked' : '';
								$disliked_cls = ($user_like_res['like_val'] == 1) ? '' : 'disliked';
							}
							?>
							<div class="like_lnks_cnt" style="margin-top:4px;padding: 2px;">
								<a class='like_dislike_lnk _like <?php echo $like_cls ?>' href="<?php echo $siteUrlConstant.'/like_dislike.php?assoc_id='.$assoc_id.'&button_type=like&like_type='.$type.'' ?>">
								<button type="button" class="btn btn-default btn-sm">
									<span class="glyphicon glyphicon-thumbs-up"></span> <span id="likeCnt"><?php echo $likeQueryRes;?></span>
								</button></a>
								<a class='like_dislike_lnk _dislike <?php echo $disliked_cls ?>' href="<?php echo $siteUrlConstant.'/like_dislike.php?assoc_id='.$assoc_id.'&button_type=dislike&like_type='.$type.'' ?>" style="margin : 0 10px">
									<button type="button" class="btn btn-default btn-sm">
										<span class="glyphicon glyphicon-thumbs-down"></span> <span id="unlikeCnt"><?php echo $dislikeQueryRes;?></span>
									</button>
								</a>
							</div>
						<?php } else { ?>
							<div class="like_lnks_cnt" style="margin-top:4px;padding: 2px;">
								<a href="javascript:;" class='like_dislike_lnk _like' data-toggle="modal" data-target="#myModal">
									<button type="button" class="btn btn-default btn-sm">
										<span class="glyphicon glyphicon-thumbs-up"></span> <span id="likeCnt"><?php echo $likeQueryRes;?></span>
									</button>
								</a>
								<a href="javascript:;" class='like_dislike_lnk _dislike' data-toggle="modal" data-target="#myModal" style="margin : 0 10px">
									<button type="button" class="btn btn-default btn-sm">
										<span class="glyphicon glyphicon-thumbs-down"></span> <span id="unlikeCnt"><?php echo $dislikeQueryRes;?></span>
									</button>
								</a>
							</div>
						<?php } ?>
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
                
                <?php  echo "<br><br><center>".$paginate."</center>"; ?><br><br><br>
                
                
                
                
                
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
        
<script src="js/like_dislike.js"></script>
        

        
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