<?php error_reporting(0);  include"config/connection.php";	  

$current_date = date('Y-m-d');
$type = str_replace('-','/',$_GET['type']);
		$category = urldecode($type);
		$title = $description = 'National Jobs';
		$h1Data = 'National Jobs';
		if($category != '') {
			switch($category) {
				case 'Medical Jobs' :
					$title = 'Post and Search Medical Jobs';
					$h1Data = 'Search and Apply for Medical Jobs Near You';
					$description = 'Looking for the medical jobs near you? NRIs is the perfect classified search engine for you to post or find the medical jobs from registered organisations.';
					break;
				case 'Accounting/Clerical' :
					$title = 'Free Accounting and Clerical Jobs';
					$h1Data = 'Accounting and Clerical Job Ads';
					$description = 'NRIs offers several accounting jobs for those looking for career in this field. Visit us to find and post your free accounting job ads.';
					break;
				case 'IT Jobs' :
					$title = 'Find or Post Free IT Employement';
					$h1Data = 'Find or Post Free IT Employment';
					$description = 'NRIs let you to kick off your search for jobs in IT field in a better way. Post your IT jobs ad free and find thousands of qualified professionals here.';
					break;
				case 'PartTime/ Hourly' :
					$title = 'Free Hourly Jobs Ads';
					$h1Data = 'Part Time/Hourly Jobs Near You';
					$description = 'Browse for best part time job listings at NRIs. You can find or post your job easily here to accelerate your career with flexible hours. Visit us for more!';
					break;
				case 'HR/Management Jobs' :
					$title = 'HR and Management Job Ads';
					$h1Data = 'Apply for HR and Management Jobs';
					$description = 'Post or find free HR and Management jobs ads with the expert advice from thousands of qualified professionals. NRIs welcomes you to browse the best level jobs here!';
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
	<title><?php echo $title; ?> | Post and Search Medical Jobs | National Jobs | NRIs</title>
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="author" content="NRIs"><?php include_once('tracking.php');?>
	
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
<h1 style="display: none;"><?php echo $h1Data;?></h1>
<div class="loader"><div class="loader_html"></div></div>



	<?php   include "config/menu_home.php" ;  ?>
	
	<div class="clearfix"></div>

    
		<?php include_once('stock_block.php');?>
	

     
    
<!-- Section-1 WRAP START-->	
<div class="section-1-wrap" style="min-height:700px;">	
<!-- Section-1 START-->	
		
        
       <div class="section-inner-page"> 
        <div class="col-md-12" style="text-align:left;color:#000000;float:left;"> 
        <!-- COLUMN LEFT -->	
        <div class="col-md-2">
                        <?php include_once('home_common_left.php');?>
        </div>
            <!-- FIRST TABLE -->
            <div class="col-md-8" style="text-align:left;color:#000000;"> 
  
<div class="widget-temple">
	<?php $state = $defaultState;?>
	<h4><a href="<?php echo $siteUrlConstant;?>state?State=<?php echo $state;?>" style="color:#0033FF;">Home</a> >> Jobs</h4>
  <?php
		if(isset($_SESSION['Nris_session']))	  
		{ ?>
<a href="javascript:;" data-toggle="modal" data-target="#change_state"  class="btn btn-default" style="background-color:#0000FF;color:#FFFFFF;float:right;">Create Premium Post <img src="images/New_icon2.gif" alt="New"></a>    
<a href="javascript:;" data-toggle="modal" data-target="#change_state2"  class="btn btn-default" style="background-color:#990033;color:#FFFFFF;float:right;">Create Free Post <img src="images/arrow.gif" alt=">"></a>    
  <?php } else { ?> 
<a href="javascript:;"  data-toggle="modal" data-target="#myModal" class="btn btn-default" style="background-color:#990033;color:#FFFFFF;float:right;" >Create Premium Ad&nbsp;<img src="images/New_icon2.gif" alt="New"></a>   
<a href="javascript:;"  data-toggle="modal" data-target="#myModal"  class="btn btn-default" style="background-color:#0000FF;color:#FFFFFF;float:right;" >Create Free Post Ad&nbsp;<img src="images/arrow.gif" alt=">"></a>
<?php } ?>   
</div><br>

                     <!--  <br><h5 id="classifieds">Home >> Temples</h5>-->




<table align="center" >
			<thead>
				<tr>
				   <th>Title</th>
					<th>Category</th>
					<th>Job Role</th>
					<th>Views</th>
				</tr>
				</thead>
				<tbody>
		<?php
		$type = str_replace('-','/',$_GET['type']);
		if($type)
		{
			$cat = urldecode($type);
			$query2 = "select a.*, b.name, c.role from post_free_job a, job_category b, job_role c where a.EndDate >= now() and a.Category = b.id and a.Job_Role=c.id  and b.name ='".$cat."' group by a.id order by a.total_views desc";
		}
		else
		{	
			$query2 = "select a.*, b.name, c.role from post_free_job a, job_category b, job_role c where a.EndDate >= now() and a.Category = b.id and a.Job_Role=c.id group by a.id order by a.total_views desc";
		}
			
            $result2 = mysql_query($query2);

				$i=1;
				if(mysql_numrows($result2) > 0) {
					while($rs=mysql_fetch_array($result2))
					{ ?> 
						<tr>
							<td>
								<?php if($rs['City'] != '') { ?>
									<img src="images/map-icon.png" alt="Map">
								<?php } ?>
								<?php if($rs['image1'] != '') { ?>
									<img src="images/image-icon.png" alt="Image">
								<?php } ?>
								
								<a href="<?php echo $siteUrlConstant;?>national_jobs_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php echo ucwords($rs['TitleAD']);?></a></td>                 	
						<td><a href="<?php echo $siteUrlConstant;?>national_jobs_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php echo ucwords($rs['name']);?></a></td>                 	
						<td><a href="<?php echo $siteUrlConstant;?>national_jobs_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php echo ucwords($rs['role']);?></a></td>
						<td><a href="<?php echo $siteUrlConstant;?>national_jobs_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php  echo $rs['total_views'];?></a></td>
						</tr>
				<?php }   ?>
			<?php } else { ?>
				<tr><td colspan="4">No Jobs Found</td></tr>
			<?php } ?>
			</tbody>
			</table>

			
            </div>
            <!-- TOP BUTTONS ENDS-->
            
        
        <!-- COLUMN RIGHT -->	
         <div class="col-md-2">
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- left ad1 -->
            <ins class="adsbygoogle"
            style="display:inline-block;width:160px;height:600px"
            data-ad-client="ca-pub-9102554018913545"
            data-ad-slot="4969085119"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>     </div>
            </div>           
            <script>
            $("#premium_btn").hover(function(e) {
            $('#Premium_message').css({
            left: e.pageX - 30,
            top: e.pageY - 30
            }).stop().show(100);
            }, function() {
            $('#Premium_message').hide();
            });
            </script>
         </div>
        <!-- COLUMN RIGHT ENDS -->	
			
            

               
               
               
                 
                    
        </div><!-- Section-1 ENDS -->
       </div>
</div><!-- End Section-1 WRAP -->

	
    <div style="clear:both;"></div>
    	
	
    
    
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
				$siteUrlConstant = $protocol . "://" .str_replace(' ','',$fs_state['state']).'.'.$_SERVER['SERVER_NAME'].'/';
					?>

            <td style="vertical-align:middle;width:auto;text-align:left;padding-left:10px;">
            <a href="<?php echo $siteUrlConstant;?>job_create?code=<?php echo $fs_state['state_code']; ?>&type=premium"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">
            <?php if($fs_state['state_code']==$defaultState) { 
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
    
	
	<!-- Modal  Switch State  Start-->
<div class="modal fade" id="change_state2" role="dialog">
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
				$siteUrlConstant = $protocol . "://" .str_replace(' ','',$fs_state['state']).'.'.$_SERVER['SERVER_NAME'].'/';
					?>

            <td style="vertical-align:middle;width:auto;text-align:left;padding-left:10px;">
            <a href="<?php echo $siteUrlConstant;?>job_create?code=<?php echo $fs_state['state_code']; ?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">
            <?php if($fs_state['state_code']==$defaultState) { 
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

</body>
</html>