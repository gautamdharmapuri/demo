<?php error_reporting(0);  include"config/connection.php";	  
$current_date = date('Y-m-d');
 ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head><base href="/">

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Ads on National Automobiles in USA | Auto Ads | NRIS</title>
	<meta name="description" content="Buy/Sell Cars, automobiles at best prices with exciting offers and deals. Just select your state and find the latest auto Ads for cars, autos in USA.">
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



	<?php   include "config/menu.php" ;  ?>
	
	<div class="clearfix"></div>

    
		<?php include_once('stock_block.php');?>     
	
	
<?php include_once('top_container_links.php');?>
     
    
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
                                            
                                            <table border="0" cellpadding="0" cellspacing="10" style="width:100%;">
                                            	<tr  style="background-color:#FFFFFF;">
                                                	<td style="vertical-align:top;">Min Price</td>
                                                    <td style="vertical-align:middle;"><img src="images/Dollar.png" style="float:left;" alt="$"><input type="text" name="MinPrice" id="MinPrice" style="width:150px;"></td>
                                                </tr>
                                            	<tr>
                                                	<td style="vertical-align:top;">Max Price</td>
                                                    <td style="vertical-align:middle;"><img src="images/Dollar.png" style="float:left;" alt="$"><input type="text" name="MaxPrice" id="MaxPrice" style="width:150px;"></td>
                                                </tr>                                                
                                            </table>
                                            <select name="AdsCat" id="AdsCat"  class="form-control" >              
                                                <option value="">Please Select</option>
													<?php
                                                    $query_brand="select * from  auto_makes order by name";
                                                    $result_brand=mysql_query($query_brand);                                                
                                                    while($rs_brand=mysql_fetch_array($result_brand))
                                                    {?>
                                                    <option value="<?php echo $rs_brand['id'] ?>"><?php echo ucwords($rs_brand['name']);?></option>  
                                                    <?php } ?>   	
                                            </select>
                                            <br>
                                            
                                            <select name="Year" id="Year" class="form-control" >  
                                            <option value="">Select Year</option>
                                            <?php for($i=1955; $i<=date("Y", strtotime('+1 years')); $i++)
                                            { ?>
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                            <?php } ?>
                                            
                                            </select>
							                <br>
                                            
                                            <input type="submit" value="Submit" name="cmdsubmit" id="cmdsubmit" class="btn btn-success">
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


	<h4><a href="<?php echo $siteUrlConstant;?>" style="color:#0033FF;">Home</a> >> National Auto</h4>

  <?php
if(isset($_SESSION['Nris_session']))	  
{ ?>

<a href="#" data-toggle="modal" data-target="#change_state" class="btn btn-default" style="background-color:#990033;color:#FFFFFF;float:right;">Create Free Post <img src="images/arrow.gif" alt=">"></a> 
 <?php } else { ?> 
<a href="#"  data-toggle="modal" data-target="#myModal"  class="btn btn-default" style="background-color:#0000FF;color:#FFFFFF;float:right;" >Create Free Post Ad&nbsp;<img src="images/arrow.gif" alt=">"></a>
<?php } ?>    



</div>    <br>
                     <!--  <br><h5 id="classifieds">Home >> Temples</h5>-->




                        <table align="center" >
                        <thead>
                        <tr>
							<th>Title</th>
                            <th>Model</th>
                            <th>City</th>
                            <th>Views</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                                                                            
                                                                              
		<?php
		
		if(isset($_POST['cmdsubmit']))
		{
			$cat = $_POST['AdsCat'];
			$yr = $_POST['Year'];
			$min = $_POST['MinPrice'];
			$max = $_POST['MaxPrice'];	
			
			if($min!='' && $max!='' && $cat=='' && $yr=='')
			{
				$query  = "select a.*, b.name, c.model_name from post_free_auto a, auto_makes b, auto_models c where a.Price between '".$min."' and '".$max."'  and a.EndDate >= '".$current_date."'  and a.Brand = b.id and a.SubBrand=c.id  and a.States  IN ('ALL','multiple')   order by a.total_views desc";				
			}
			
			if($min!='' && $max!='' && $cat!='' && $yr=='')
			{
				$query  = "select a.*, b.name, c.model_name from post_free_auto a, auto_makes b, auto_models c where a.Price between '".$min."' and '".$max."' and '".$cat."' = b.id and a.EndDate >= '".$current_date."'  and a.Brand = b.id and a.SubBrand=c.id  and a.States  IN ('ALL','multiple')   order by a.total_views desc";					
			}
			
			if($min!='' && $max!='' && $cat!='' && $yr!='')
			{
				$query  = "select a.*, b.name, c.model_name from post_free_auto a, auto_makes b, auto_models c where a.Price between '".$min."' and '".$max."' and '".$cat."' = b.id and '".$yr."' = a.Year and a.EndDate >= '".$current_date."'  and a.Brand = b.id and a.SubBrand=c.id  and a.States  IN ('ALL','multiple')   order by a.total_views desc";									
			}	
			
			if($cat !='' && $yr != '')
			{				
				$query  = "select a.*, b.name, c.model_name from post_free_auto a, auto_makes b, auto_models c where a.EndDate >= '".$current_date."' and a.Brand = b.id and a.SubBrand=c.id  and '".$cat."' = b.id  and '".$yr."' = a.Year and a.States  IN ('ALL','multiple')   order by a.total_views desc";
			}	
			
			if($cat !='' && $yr == '')
			{
				$query  = "select a.*, b.name, c.model_name from post_free_auto a, auto_makes b, auto_models c where a.EndDate >= '".$current_date."' and a.Brand = b.id and a.SubBrand=c.id  and '".$cat."' = b.id  and a.States  IN ('ALL','multiple')   order by a.total_views desc";
			}	
			if($yr !='' && $cat == '')
			{
				$query  = "select a.*, b.name, c.model_name from post_free_auto a, auto_makes b, auto_models c where a.EndDate >= '".$current_date."' and a.Brand = b.id and a.SubBrand=c.id  and '".$yr."' = a.Year and a.States  IN ('ALL','multiple')   order by a.total_views desc";			
			}	
			if($min=='' && $max=='' && $cat=='' && $yr=='')
			{
				$query  = "select a.*, b.name, c.model_name  from post_free_auto a, auto_makes b, auto_models c where a.EndDate >= '".$current_date."'  and a.Brand = b.id and a.SubBrand=c.id  and a.States  IN ('ALL','multiple')   order by a.total_views desc";
			}		
			
		}
		else
		{		
			$query  = "select a.*, b.name, c.model_name  from post_free_auto a, auto_makes b, auto_models c where a.EndDate >= '".$current_date."'  and a.Brand = b.id and a.SubBrand=c.id  and a.States  IN ('ALL','multiple')   order by a.total_views desc";
		}	
						$result = mysql_query($query);
						
						if(mysql_num_rows($result) > 0) {
						while($rs=mysql_fetch_array($result))
						{ ?> 
					 <tr>
						<td><a href="<?php echo $siteUrlConstant;?>auto_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">
					<?php echo ucwords($rs['TitleAD']);?></a></td>
                    <td><a href="<?php echo $siteUrlConstant;?>auto_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">
					<?php echo ucwords($rs['model_name']);?></a></td>
                    <td><a href="<?php echo $siteUrlConstant;?>auto_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">
					<?php echo ucwords($rs['City']);?></a></td>
                    <td><a href="<?php echo $siteUrlConstant;?>auto_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">
					<?php  echo $rs['total_views'];?></a></td>
                    </tr>
					<?php }  } else {  ?>
                    
                    <tr>
						<td colspan="5"><br><h6>No Records Found.</h6></td>	
                    </tr>    
					<?php } ?>
                   
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
        </div>

<!-- Section-1 ENDS -->
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

<table border="0" cellpadding="2" cellspacing="1" width="100%" style="line-height:28px;">
           
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
            <a href="<?php echo $siteUrlConstant;?>auto_create?code=<?php echo $fs_state['state_code']; ?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">
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




</body>
</html>