<?php error_reporting(0);  include"config/connection.php";	  
if(isset($_GET['viewId']))
{
	$_SESSION['viewId']=$_GET['viewId'];
}
else
{
	$_SESSION['viewId']=$_SESSION['viewId'];
	
}

//	echo $_SESSION['viewId'];


 ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head><base href="/">

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Blog | NRIs</title>
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

</style>   
<style>
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
	
	





.sidebar h4 {
	padding-bottom: 0;
	font-size: 1.4em;
	color: #555;
	letter-spacing: -1px;
	padding: 0;
}

.sidebar ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

.sidebar ul li {
	margin-bottom: 20px;
	line-height: 1.9em;
}

.sidebar ul li.bg, .sidebar ul li.bg h4, .sidebar ul li.bg a, .sidebar ul li.bg a:hover {
	background-color: #699BBA;
	color: #fff;
}
.sidebar ul li.bg a, .sidebar ul li.bg a:hover {
	border-bottom-color: #fff;
}


.sidebar li ul {
    list-style: none outside none;
    margin: 0px;
}

.sidebar li ul li {
	display: block;
	border-top: none;
	padding: 10px 2px;
	margin: 0;
	line-height: 1.5em;
	font-size: 0.85em;
}

.sidebar li ul li ul {
	margin-top: 10px;
}

.sidebar li ul li li  {
	font-size: 1.0em;
	padding-left: 15px;
}



.sidebar li ul li.text { 
	border-bottom: none;
}



.sidebar li a {

	 border-bottom-color: #ccc;
	color: #333333;
}


.sidebar li a:hover {
	color: #333;

	 border-bottom-color: #333;
}
.sidebar li ul li a.readmore {
   font-weight: bold;
}


.sidebar li.color-bg {
/*	background-color: #f0f0f0;*/
}

.sidebar li.color-bg h4 {
	color: #555;
}

.sidebar ul.blocklist li {
	padding: 0;	
}

.sidebar ul.blocklist li a,
.sidebar ul.blocklist li a:hover {
	border-bottom: 0;
	display: block;
	padding: 14px 10px;

}

.sidebar ul.blocklist li a:hover
{
		background:#699BBA;
}
.sidebar ul.blocklist li a.selected {
	background:#699BBA;
    color: #FFFFFF;
	font-weight: bold;

}
.sidebar li ul.blocklist li li {
	font-size: 1.0em;
}

.sidebar li ul.blocklist ul {
	margin-top: 0;
}

.sidebar li ul.blocklist li li a,
.sidebar li ul.blocklist li li a:hover {
	padding-left: 25px;
}

.sidebar ul.newslist li {
	padding: 20px 0px;
}

.sidebar ul.newslist p {
	line-height: 2.5em;
	margin-bottom: 0;
}

.sidebar ul.newslist span.newslist-date { 
	background-color: #699BBA;
	color: #fff;
	padding: 5px 10px;
}


.post-content .featured-image {
    margin-bottom: 10px;
}

	
	</style> 
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>



	<?php   include "config/menu.php" ;  ?>
	
	<div class="clearfix"></div>

    
		<?php include_once('stock_block.php');?>     
	
	

     
    
<!-- Section-1 WRAP START-->	
<div class="section-1-wrap" style="min-height:700px;">	
<!-- Section-1 START-->	
		
        
       <div class="section-inner-page" style="background-color:#009900;"> 
        <div class="col-md-12" style="text-align:left;color:#000000;float:left;"> 
        <!-- COLUMN LEFT -->	
        
            
            <!-- FIRST TABLE -->
            <div class="col-md-10" style="text-align:left;color:#000000;"> 
   				
<div class="widget-temple">
	<h4><a href="<?php echo $siteUrlConstant;?>" style="color:#0033FF;">Home</a> >> Blog Deatils</h4>
</div>    
<?php

	$tableName="blog_categories";		
	$targetpage = "blog_category"; 	
	$limit = 2; 
	
	
	$query = "select a.*, b.category_name from blog a, blog_categories b where a.category_id  = b.id and a.visibility = 'Public' and status = 'Publish' and md5(a.category_id) = '".$_SESSION['viewId']."'" ;
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
	$query1 = "select a.*, b.category_name from blog a, blog_categories b where a.category_id  = b.id and a.visibility = 'Public' and status = 'Publish' and md5(a.category_id) = '".$_SESSION['viewId']."' LIMIT $start, $limit";
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

<h3><?php echo ucwords($rs['blog_title']);?></h3>
<div style="color: #808080;font-weight: 300;line-height: 24px;margin-bottom: 12px;">Posted <?php echo date("d M, Y",strtotime($rs['date'])); ?> by Admin / Category: <?php echo ucwords($rs['category_name']);?></div>

<?php 
if (strpos($rs['image'],'.') !== false) {  ?>
		<div class="featured-image"><a href="<?php echo $siteUrlConstant;?>blog_details?viewId=<?php echo md5($rs['id']); ?>">
        <img alt="" src="admin/uploads/blog/<?php echo $rs['image']; ?>" style="width:100%;" class="imgframe" alt="<?php echo ucwords($rs['blog_title']);?>"></a> </div>
<?php } ?>

<p style="text-align:justify;margin:10px 0 90px 0;color:#666666;">
 <?php echo substr($rs['blog_desc'],0,350)."..."; ?>
 <span style="float:right;"><a href="<?php echo $siteUrlConstant;?>blog_details?viewId=<?php echo md5($rs['id']); ?>" onMouseOver="this.style.color='Red'" onMouseOut="this.style.color='Blue'" style="color:#0033FF;">Read More...</a></span>
</p>


<div style="clear:both"></div>
<hr style="margin-bottom:30px;">
<?php }  ?>

<?php  echo "<br><br><center>".$paginate."</center>"; } else { ?>
<h3>No Records Found.</h3>

<?php } ?>

<bR>


            

            



            
            
            

                        

            
</div>            
            <!-- TOP BUTTONS ENDS-->
            
            
    
        
        
        
        
        
        
        <!-- COLUMN RIGHT -->	
         <div class="col-md-2 inner-left">
			
            <!-- left ad1 -->
            <aside class="sidebar big-sidebar right-sidebar">
	
	
            <ul style="list-style:none;border:1px solid #000000;margin-top:25px;">	

               <li class="color-bg" style="list-style:none;">
                    <ul class="blocklist">
			            <li><a class="selected" href="#" style="font-size:16px;">Categories</a></li>
                       <?php
					   	$query_cat = "select * from blog_categories order by category_name" ;
						$result_cat = mysql_query($query_cat);
						while($fs = mysql_fetch_array($result_cat)){ ?>
                        <li><a href="<?php echo $siteUrlConstant;?>blog_category?viewId=<?php echo md5($fs['id']); ?>" style="list-style:none;"><?php echo $fs['category_name']; ?></a></li>			
                       <?php } ?> 

                    </ul>
                </li>
                
               

                
            </ul>
		
        </aside>
         </div>
        <!-- COLUMN RIGHT ENDS -->	
			
            

               
               
               
                 
                    
        </div><!-- Section-1 ENDS -->
       </div>
</div><!-- End Section-1 WRAP -->

	
    <div style="clear:both;"></div>
    	
	
    
    
    
	
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