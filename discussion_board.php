<?php error_reporting(0);  include"config/connection.php";	
$inseted_row ='';
if(isset($_POST['cmdsave']))
{
	$threadId = $_POST['threadId'];
	$mId = $_POST['memberId'];	
	
	$Titletxt = trim($_POST['Titletxt']);
	$Titletxt=stripslashes($Titletxt);
	$Titletxt=mysql_real_escape_string($Titletxt);
	
	$msg = trim($_POST['Message']);
	$msg=stripslashes($msg);
	$msg=mysql_real_escape_string($msg);
	
	$status = '1';
	
	$date = date("Y-m-d");
	$time = date("h:m:s");	
				
	$query_thread = "insert into  forum_threads(title,description,category_id,member_id,status,date,time) values('".$Titletxt."','".$msg."','".$threadId."','".$mId."','".$status."','".$date."','".$time."')";		 
	$result_thread = mysql_query($query_thread);
	$inseted_row = "Topic Saved Successfully";
	
}
  ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head><base href="/">

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Forum | NRIs</title>
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
	<h4><a href="<?php echo $siteUrlConstant;?>" style="color:#0033FF;">Home</a> >> Forum</h4>
</div>    <br>
                     <!--  <br><h5 id="classifieds">Home >> Temples</h5>-->

				<?php	if($inseted_row!='') { ?>
                <div style="background-color:#009933;border:1px solid #333333;padding:10px;width:100%;color:#FFFFFF;font-weight:bold;border-radius:5px;"><?php echo $inseted_row ; ?></div><br>
                <?php } ?>
				
				<?php $query = "select * from forum_categories order by category_name";
					$result = mysql_query($query) ; 
					while($rs = mysql_fetch_array($result)) { ?>

                        <table align="center" >
                        <thead>
                            <tr>
                            <th><b><?php echo strtoupper($rs['category_name']) ; ?></b></th>
                            <th>Threads / Posts</th>
                            <th>Last Thread Posted by</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        <?php 
							$query_inner = "select * from forum_sub_categories where main_cat_id='".$rs['id']."' order by sub_cat_name";  
							$result_inner = mysql_query($query_inner) ; 
							while($fs = mysql_fetch_array($result_inner)) { ?>
                        <tr>
                            <td style="padding-top:10px;padding-bottom:10px;"><img src="admin/uploads/forum/<?php echo $fs['image']; ?>" style="width:70px;height:auto;" alt="<?php echo ucwords($fs['sub_cat_name']) ; ?>">&nbsp;
								<a href="<?php echo $siteUrlConstant;?>threads?id=<?php echo md5($fs['sub_id']); ?>" style="color:#0000FF" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#0000FF'"><?php echo ucwords($fs['sub_cat_name']) ; ?></a>
                            </td>
                            <td style="text-align:left;">Threads : 
							 <?php 
								$q="select id from forum_threads where status=1 and category_id ='".$fs['sub_id']."'";
								$r=mysql_query($q);
								  echo mysql_num_rows($r);
								?> <br>
                                Post :
                                 <?php 
								$qss="select cmnt_id from forum_thread_comment where sub_cat_id = '".$fs['sub_id']."' and reply_status='0'";
								$rss=mysql_query($qss);
								  echo mysql_num_rows($rss);
								?>
                            </td>
                            
                            <td style="text-align:left;">
                            <?php
						$query_blog_cmnt = "select a.*, b.* from forum_threads a, register b where a.member_id = b.id  and a.category_id  = '".$fs['sub_id']."'  order by a.id desc limit 1" ;
						$result_cmnt = mysql_query($query_blog_cmnt);
						if(mysql_num_rows($result_cmnt) > 0)
						{ 
							$rs_cmnt=mysql_fetch_array($result_cmnt);
						?>
							Posted  <?php echo date("d M, Y",strtotime($rs_cmnt['date'])); ?> <br>by <?php echo ucfirst($rs_cmnt['fname']) ?>&nbsp;<?php echo ucfirst($rs_cmnt['lname']) ?>
														
						<?php }
						else
						{
							echo "None";
						}
							?>
                            </td>
                            
                            
                        </tr> 
                        <?php } ?>    
                        
                        </tbody>
                        </table>
                        
                        <br><br>
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
<!-- End js -->

<?php include "config/social.php" ;  ?>

</body>
</html>