<?php error_reporting(0);  include"config/connection.php";	  

$current_date = date('Y-m-d');?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head><base href="/">

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title><?php echo $defaultState;  ?> Jobs Ads | NRIs</title>
	<meta name="description" content="NRIs">
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

<div class="loader"><div class="loader_html"></div></div>



	<?php   include "config/menu_inner_state.php" ;  ?>
	
	<div class="clearfix"></div>

    <?php include_once('stock_block.php');?>

     
    
<!-- Section-1 WRAP START-->	
<div class="section-1-wrap" style="min-height:700px;">	
<!-- Section-1 START-->	
		
        
       <div class="section-inner-page"> 
        <div class="col-md-12" style="text-align:left;color:#000000;float:left;"> 
        <!-- COLUMN LEFT -->	
        <div style="width:25%;float:left;">
                        <div class="head-title-no-pad" style="text-align:left;vertical-align:bottom;">
                        <br> <h4 class="cat_heading" style="color:#0066FF;">Search</h4>
                        </div>
                        <div class="bord-cla">
                                            <form name="form" id="form" method="post" style="margin:20px auto;width:90%;">
                                           
                                           <ul style="font-weight:bold;line-height:28px;">
                                           	<?php											
                                                $query_main="select * from  job_category order by name";
                                                $result_main=mysql_query($query_main);                                                
                                                while($rs_main=mysql_fetch_array($result_main))
                                                {?>
                                            
                                            <li style="color:#0033CC;"><?php echo ucwords($rs_main['name']);?>
                                            	<ul style="margin-left:10px;font-weight:normal;">
                                                	<?php
														$query_sub="select * from  job_role where job_cat_id='".$rs_main['id']."' order by role";
														$result_sub=mysql_query($query_sub);                                                
														while($rs_sub=mysql_fetch_array($result_sub))
														{?>
    												<li style="list-style:none;"><a href="<?php echo $siteUrlConstant;?>jobs_inner?AdsCat=<?php echo $rs_sub['id'];?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php echo ucwords($rs_sub['role']);?></a></li>                                        
    												<?php } ?>
	                                            </ul>
                                            </li>
                                            <?php } ?>
                                           <?php /*?> <li>aaaa
                                            	<ul style="margin-left:10px;font-weight:normal;">
    												  <li style="list-style:none;"><a href="javascript:;"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">zzzzzz</a></li>                                                      <li style="list-style:none;"><a href="javascript:;"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">zzzzzz</a></li>                                                                                                                                              
	                                            </ul>
                                            </li><?php */?>
                                            
                                           </ul>
                                            </form>
                                              </div>
        </div>
        <!-- COLUMN LEFT ENDS -->	
        
        <!-- COLUMN MIDDLE -->	
       
        
        	<!-- TOP ADVERTISE -->
            <!-- TOP ADVERTISE END-->
            
            
            <!-- TOP BUTTONS -->
           
            <!-- TOP BUTTONS ENDS-->
            
            <!-- FIRST TABLE -->
            <div class="col-md-8" style="text-align:left;color:#000000;"> 
  
<div class="widget-temple">
	<?php $state = $defaultState;?>
	<h4><a href="<?php echo $siteUrlConstant;?>state?State=<?php echo $state;?>" style="color:#0033FF;">Home</a> >> Jobs</h4>
  <?php
		if(isset($_SESSION['Nris_session']))	  
		{ ?>
<a href="<?php echo $siteUrlConstant;?>job_create?code=<?php echo $defaultState ?>&type=premium"  class="btn btn-default" style="background-color:#0000FF;color:#FFFFFF;float:right;">Create Premium Post <img src="images/New_icon2.gif" alt="New"></a>    
<a href="<?php echo $siteUrlConstant;?>job_create?code=<?php echo $defaultState ?>"  class="btn btn-default" style="background-color:#990033;color:#FFFFFF;float:right;">Create Free Post <img src="images/arrow.gif" alt=">"></a>    
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
		$state = $defaultState;
		if(isset($_GET['AdsCat']))
		{
			$cat = $_GET['AdsCat'];
				$query1 = "select a.*, b.name, c.role from post_free_job a, job_category b, job_role c where a.EndDate >= now() and a.Category = b.id and a.Job_Role=c.id  and  a.States  IN ('ALL') and a.Job_Role='".$cat."' order by a.total_views desc";							
				$query2 = "select a.*, b.name, c.role from post_free_job a, job_category b, job_role c where a.EndDate >= now() and a.Category = b.id and a.Job_Role=c.id  and a.Job_Role='".$cat."' and  FIND_IN_SET('".$state."',  a.States_Details)  order by a.total_views desc";
			
		}
		else
		{		
					//$query = "select * from post_free_job order by id desc";			
				$query1 = "select a.*, b.name, c.role from post_free_job a, job_category b, job_role c where a.EndDate >= now() and a.Category = b.id and a.Job_Role=c.id  and  a.States  IN ('ALL') order by a.total_views desc";							
				$query2 = "select a.*, b.name, c.role from post_free_job a, job_category b, job_role c where a.EndDate >= now() and a.Category = b.id and a.Job_Role=c.id  and  FIND_IN_SET('".$state."',  a.States_Details)  order by a.total_views desc";				
					
		}
		
			$result = mysql_query($query1);

				$i=1;					
				while($rs=mysql_fetch_array($result))
				{ ?> 
                    <tr>
					<td>
						<?php if($rs['City'] != '') { ?>
								<img src="images/map-icon.png" alt="Map">
							<?php } ?>
							<?php if($rs['image1'] != '') { ?>
								<img src="images/image-icon.png" alt="Image">
							<?php } ?>
						<a href="<?php echo $siteUrlConstant;?>jobs_inner_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php echo ucwords($rs['TitleAD']);?></a></td>                 	
                    <td><a href="<?php echo $siteUrlConstant;?>jobs_inner_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php echo ucwords($rs['name']);?></a></td>                 	
                    <td><a href="<?php echo $siteUrlConstant;?>jobs_inner_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php echo ucwords($rs['role']);?></a></td>
                    <td><a href="<?php echo $siteUrlConstant;?>jobs_inner_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php  echo $rs['total_views'];?></a></td>
                    </tr>
			<?php }   
            
            $result2 = mysql_query($query2);

				$i=1;					
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
							
							<a href="<?php echo $siteUrlConstant;?>jobs_inner_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php echo ucwords($rs['TitleAD']);?></a></td>                 	
                    <td><a href="<?php echo $siteUrlConstant;?>jobs_inner_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php echo ucwords($rs['name']);?></a></td>                 	
                    <td><a href="<?php echo $siteUrlConstant;?>jobs_inner_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php echo ucwords($rs['role']);?></a></td>
                    <td><a href="<?php echo $siteUrlConstant;?>jobs_inner_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php  echo $rs['total_views'];?></a></td>
                    </tr>
			<?php }   ?>
            
                                                            
                                                            </tbody>
                                                            </table>
                                                          

			
            </div>
            <!-- TOP BUTTONS ENDS-->
            
            
    
        
        
        
        
        
        
        <!-- COLUMN RIGHT -->	
         <div style="width:8%;float:right;">
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