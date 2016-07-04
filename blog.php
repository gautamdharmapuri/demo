<?php error_reporting(0);  include"config/connection.php";	   ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head><base href="/">

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Our Blogs | NRIS</title>
	<meta name="description" content="Get the latest updates and information from the portal of NRIs community in USA. Read our blogs and stay updated with the latest posts.">
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
    
    <link rel="stylesheet" href="css/animate-custom.css">    
    
    	<link rel="stylesheet" href="css/tab/style.css"> <!-- Resource style -->
	<script src="js/tab/modernizr.js"></script> <!-- Modernizr -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <!--[if !IE]><!-->
	  <script src="css/modal/jquery.min.js"></script>            
            <script src="css/modal/bootstrap.min.js"></script>
	<!--<![endif]-->
<style type="text/css">
.liked, .disliked {color : green !important; }
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
   				
<div class="widget-temple">
	<h4><a href="<?php echo $siteUrlConstant;?>" style="color:#0033FF;">Home</a> >> Blog</h4>
</div><br>





<?php

	$tableName="blog_categories";		
	$targetpage = "blog"; 	
	$limit = 2; 
	
	
	$query = "select a.*, b.category_name from blog a, blog_categories b where a.category_id  = b.id and a.visibility = 'Public' and status = 'Publish' order by a.id desc" ;
	$res = mysql_query($query);
	$total_pages = mysql_num_rows($res)	;


//	$total_pages = mysql_fetch_array(mysql_query($query));
//	$total_pages = $total_pages[num];
	
	$stages = 3;
	$page = mysql_escape_string($_GET['page']);
	if($page){
		$start = ($page - 1) * $limit; 
	}else{
		$start = 0;	
		}	
	
    // Get page data
	$query1 = "select a.*, b.category_name from blog a, blog_categories b where a.category_id  = b.id and a.visibility = 'Public' and status = 'Publish'  order by a.id  desc LIMIT $start, $limit";
	$result = mysql_query($query1);
	
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
			$paginate.= "<a href='$targetpage?page=$prev'><i class='fa fa-angle-double-left'></i></a>";
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
					$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
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
						$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
				}
				$paginate.= "...";
				$paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
				$paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";		
			}
			// Middle hide some front and some back
			elseif($lastpage - ($stages * 2) > $page && $page > ($stages * 2))
			{
				$paginate.= "<a href='$targetpage?page=1'>1</a>";
				$paginate.= "<a href='$targetpage?page=2'>2</a>";
				$paginate.= "...";
				for ($counter = $page - $stages; $counter <= $page + $stages; $counter++)
				{
					if ($counter == $page){
						$paginate.= "<span class='current'>$counter</span>";
					}else{
						$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
				}
				$paginate.= "...";
				$paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
				$paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";		
			}
			// End only hide early pages
			else
			{
				$paginate.= "<a href='$targetpage?page=1'>1</a>";
				$paginate.= "<a href='$targetpage?page=2'>2</a>";
				$paginate.= "...";
				for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page){
						$paginate.= "<span class='current'>$counter</span>";
					}else{
						$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
				}
			}
		}
					
				// Next
		if ($page < $counter - 1){ 
			$paginate.= "<a href='$targetpage?page=$next'><i class='fa fa-angle-double-right'></i></a>";
		}else{
			$paginate.= "<span class='disabled'><i class='fa fa-angle-double-right'></i></span>";
			}
			
		$paginate.= "</div>";		
	
	
}

				$i=1;					
				
				if(mysql_num_rows($result) > 0) 
				{
				while($rs=mysql_fetch_array($result))
				{ ?> 



        <div class="blockquote">
            <div class="quote">
                <h5 style="margin-bottom:5px;"><?php echo ucwords($rs['blog_title']);?></h5>
				<div style="color: #808080;font-weight: 300;line-height: 24px;margin-bottom: 12px;">Posted <?php echo date("d M, Y",strtotime($rs['date'])); ?> by Admin / Category: <?php echo ucwords($rs['category_name']);?></div>
                <p style="clear:both;">
                <img src="admin/uploads/blog/<?php echo $rs['image']; ?>" height="auto" width="200" style="float:left;margin: 0 10px 10px 0;"  class="imgframe" alt="<?php echo ucwords($rs['blog_title']);?>">
                <?php echo substr($rs['blog_desc'],0,350)."..."; ?>
                
                 </p>
                 
	            <?php
					
					$blog_id = $assoc_id = $rs['id'];
		            $type = 'blog';
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
		            <div class="like_lnks_cnt">
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
					<div class="like_lnks_cnt">
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
                <span style="float:right;"><a href="<?php echo $siteUrlConstant;?>blog_details?viewId=<?php echo md5($rs['id']); ?>">Read More...</a></span>
                <br>                        
            </div>
        </div>
        <div style="clear:both"></div>
         <?php }  ?>
         
          <?php  echo "<br><br><center>".$paginate."</center>"; } else { ?>
           <div class="blockquote">
            <div class="quote">
            		<br><center><h5>No Records found.</h5></center>
            </div>
          </div>
          
          <?php } ?>  
          
          <br><br><br>
        
        			
			
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
<script src="js/like_dislike.js"></script>

<!-- End js -->

<?php include "config/social.php" ;  ?>

</body>
</html>