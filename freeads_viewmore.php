<?php error_reporting(0);  include"config/connection.php";	  
 ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head><base href="/">

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title><?php echo $defaultState;  ?> Free Ads | NRIs</title>
	<meta name="description" content="NRIs">
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

</style>   
<style type="text/css">
			th,td, tr {
			text-align:center;
			vertical-align:middle;
			height:35px;
		}
	/*
	Max width before this PARTICULAR table gets nasty
	This query will take effect for any screen smaller than 760px
	and also iPads specifically.
	*/
	@media
	only screen and (max-width: 760px),
	(min-device-width: 768px) and (max-device-width: 1024px)  {

		/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr {
			display: block;
			text-align:center;
			vertical-align:central;
		    height: auto;
		    padding: 5px 0;
		}

		/* Hide table headers (but not display: none;, for accessibility) */
		thead tr {
			position: absolute;
			top: -9999px;
			left: -9999px;
		}

		tr { border: 1px solid #ccc; }

		td {
			/* Behave  like a "row" */
			border: none;
			border-bottom: 1px solid #eee;
			position: relative;
			padding-left: 50%;
		}

		td:before {
			/* Now like a table header */
			position: absolute;
			/* Top/left values mimic padding */
			top: 6px;
			left: 6px;
			width: 45%;
			padding-right: 10px;
			white-space: nowrap;
		}

		/*
		Label the data
		*/
		td:nth-of-type(1):before { content: "Title"; }
		td:nth-of-type(2):before { content: "Views"; }
		td:nth-of-type(3):before { content: "Replies"; }
	}

	/* Smartphones (portrait and landscape) ----------- */
	@media only screen
	and (min-device-width : 320px)
	and (max-device-width : 480px) {
		body {
			padding: 0;
			margin: 0;
			}
		}

	/* iPads (portrait and landscape) ----------- */
	@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
	
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
        <?php include_once('state_common_left.php');?><!-- COLUMN LEFT ENDS -->	
        
        <!-- COLUMN MIDDLE -->	
        <div class="col-md-8 inner-middle-wrap">
        
        	<!-- TOP ADVERTISE -->
            <!-- TOP ADVERTISE END-->
            
            
            <!-- TOP BUTTONS -->
           
            <!-- TOP BUTTONS ENDS-->
            
            <!-- FIRST TABLE -->
            <div class="col-md-12" style="text-align:left;color:#000000;"> 
   				

<div class="widget-temple">
	<?php $state = $defaultState;?>
	<h4><a href="<?php echo $siteUrlConstant;?>state?State=<?php echo $state;?>" style="color:#0033FF;">Home</a> >> Free Ads</h4>
   
</div><br>




<table align="center" >
                                                                            <thead>
                                                                            <tr>
                                                                               
                                                                                <th>Title</th>
																				<th>Category</th>
                                                                                <th>City</th>
                                                                                <th>Views</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            
                                                                            
                                                                              
																				<?php
																				

	$tableName = "post_free_stuff";		
	$targetpage = "freeads_viewmore"; 	
	$limit = 10; 
	
	$count_query = "SELECT s.* from ((SELECT id,TitleAD,'auto' as type,image1 as image,Address as address,total_views,'auto' as category,total_views as totViews  FROM post_free_auto WHERE TitleAD != '' AND  AdPostType != 'premium' AND (States = '".$state."' OR States = 'ALL' OR States_Details LIKE '%".$state."%') ORDER BY post_free_auto.total_views DESC)
				UNION
				(SELECT id,TitleAD,'baby_sitting' as type,image as image,City as address,total_views,'baby sitter' as category,total_views as totViews  FROM post_free_baby_sitting WHERE TitleAD != '' AND  AdPostType != 'premium' AND (States = '".$state."' OR States = 'ALL') ORDER BY post_free_baby_sitting.total_views DESC )
				UNION
				(SELECT id,TitleAD,'education' as type,image as image,City as address,total_views,'education' as category,total_views as totViews  FROM post_free_education WHERE TitleAD != '' AND  AdPostType != 'premium' AND (States = '".$state."' OR States = 'ALL' OR States_Details LIKE '%".$state."%') ORDER BY post_free_education.total_views DESC )
				UNION
				(SELECT id,TitleAD,'electronics' as type,image as image,City as address,total_views,'electronics' as category,total_views as totViews  FROM post_free_electronics WHERE TitleAD != '' AND  AdPostType != 'premium' AND (States = '".$state."' OR States = 'ALL' OR State2 LIKE '%".$state."%') ORDER BY post_free_electronics.total_views DESC )
				UNION
				(SELECT id,TitleAD,'garagesale' as type,image as image,City as address,total_views,'garage sale' as category,total_views as totViews  FROM post_free_garage_sale WHERE TitleAD != '' AND  AdPostType != 'premium' AND (States = '".$state."' OR States = 'ALL') ORDER BY post_free_garage_sale.total_views DESC )
				UNION
				(SELECT id,TitleAD,'jobs' as type,image1 as image,City as address,total_views,'jobs' as category,total_views as totViews  FROM post_free_job WHERE TitleAD != '' AND  AdPostType != 'premium' AND (States = '".$state."' OR States = 'ALL' OR States_Details LIKE '%".$state."%') ORDER BY post_free_job.total_views DESC )
				UNION
				(SELECT id,TitleAD,'realestate' as type,image1 as image,City as address,total_views,'realestate' as category,total_views as totViews  FROM post_free_real_estate WHERE TitleAD != '' AND  AdPostType != 'premium' AND (States = '".$state."' OR States = 'ALL' OR States_Details LIKE '%".$state."%') ORDER BY post_free_real_estate.total_views DESC )
				UNION
				(SELECT id,TitleAD,'roommates' as type,image1 as image,City as address,total_views,'roommates' as category,total_views as totViews  FROM post_free_roommates WHERE TitleAD != '' AND  AdPostType != 'premium' AND (States = '".$state."' OR States = 'ALL') ORDER BY post_free_roommates.total_views DESC )
				UNION
				(SELECT id,TitleAD,'free_stuff' as type,image as image,City as address,total_views,'free stuff' as category,total_views as totViews  FROM post_free_stuff WHERE TitleAD != '' AND  AdPostType != 'premium' AND (States = '".$state."' OR States = 'ALL') ORDER BY post_free_stuff.total_views DESC )
				UNION
				(SELECT id,TitleAD,'mypartner' as type,image1 as image,City as address,total_views,'my partener' as category,total_views as totViews  FROM post_free_mypart WHERE TitleAD != '' AND  AdPostType != 'premium' AND (States = '".$state."' OR States = 'ALL' OR States_Details LIKE '%".$state."%') ORDER BY post_free_mypart.total_views DESC )) s
				ORDER BY total_views DESC";
	$total_pages = mysql_query($count_query);
	$total_pages = mysql_num_rows($total_pages);
	
	$stages = 3;
	$page = mysql_escape_string($_GET['page']);
	if($page){
		$start = ($page - 1) * $limit; 
	}else{
		$start = 0;	
		}	
	
    // Get page data
	$state = $defaultState;
	$query1 = $count_query." LIMIT $start, $limit";
	#echo $query1;
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
				while($rs=mysql_fetch_array($result))
				{ ?> 
                    <tr>                                                                             
                    <td>
						<?php if($rs['City'] != '') { ?>
								<img src="images/map-icon.png" alt="Map">
							<?php } ?>
							<?php if($rs['image'] != '') { ?>
								<img src="images/image-icon.png" alt="Image">
							<?php } ?>
						<a href="<?php echo $siteUrlConstant;?><?php echo $rs['type'];?>_inner_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php echo ucwords($rs['TitleAD']);?></a></td>
					<td><a href="<?php echo $siteUrlConstant;?>free_stuff_inner_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php echo ucwords($rs['category']);?></a>
					<td><a href="<?php echo $siteUrlConstant;?>free_stuff_inner_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php echo ucwords($rs['address']);?></a>
						</td>
                    <td><a href="<?php echo $siteUrlConstant;?><?php echo $rs['type'];?>_inner_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php  echo $rs['total_views'];?></a></td>
                    </tr>
			<?php }   ?>
                                                            
                                                            </tbody>
                                                            </table>
<?php  echo "<br><br><center>".$paginate."</center>"; ?><br><br><br>                                                            

			
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