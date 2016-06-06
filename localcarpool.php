<?php error_reporting(0);  include"config/connection.php";	  


if(isset($_GET['State']))
{
	$_SESSION['state']=$_GET['State'];
}
else
{
	$_SESSION['state']=$_SESSION['state'];
	
}


	/*echo $_SESSION['state']; */


 ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title><?php echo $_SESSION['state'];  ?> Carpool | NRIs</title>
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
                                            <form name="form" id="form" method="get" style="margin:20px auto;width:90%;">
                                            
                                            <table border="0" cellpadding="0" cellspacing="10" style="width:100%;">
                                            	<tr  style="background-color:#FFFFFF;">
                                                	<td style="vertical-align:top;">Departure City</td>
                                                    <td style="vertical-align:middle;"><input type="text" name="Departure" id="city_auto1" placeholder="Departure City" style="width:150px;">
													<input type="hidden" name="City1" id="City1"></td>
                                                </tr>
                                            	<tr>
                                                	<td style="vertical-align:top;">Arrival City</td>
                                                    <td style="vertical-align:middle;">
														<input type="text" name="Arrival" id="city_auto2" placeholder="Arrival City" style="width:150px;">
														<input type="hidden" name="City2" id="City2">
													</td>
                                                </tr>                                                
                                            </table>
                                            
                                         
							                <br>
                                            
												<input type="submit" value="Submit" name="cmdsubmit" id="cmdsubmit" class="btn btn-success">
												<a href="localcarpool.php">
													<input type="button" value="Reset" name="reset" id="reset" class="btn btn-success">
												</a>
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
	<?php $state = ($_GET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']);?>
	<h4><a href="state.php?State=<?php echo $state;?>" style="color:#0033FF;">Home</a> >>  <a href="localcarpool.php">Local Carpool</a></h4>
   <?php
if(isset($_SESSION['Nris_session']))	  
{ ?>
<a href="localcarpool_add.php?code=<?php echo $_SESSION['state'] ?>"  class="btn btn-default" style="background-color:#990033;color:#FFFFFF;float:right;">Create Carpool<img src="images/arrow.gif"></a>    
  <?php } else { ?> 
<a href="#"  data-toggle="modal" data-target="#myModal"  class="btn btn-default" style="background-color:#0000FF;color:#FFFFFF;float:right;" >Create Carpool<img src="images/arrow.gif"></a>
<?php } ?>     


</div>    <br>
                     <!--  <br><h5 id="classifieds">Home >> Temples</h5>-->
<table align="center" >
					<thead>
						<tr>
							<th>From City</th>
							<th>To City</th>
							<th>Start Date</th>
							<th>Start Time</th>
						</tr>
					</thead>
					<tbody>
<?php
		
	$where = '';
	if(isset($_GET['City1']) && $_GET['City1'] > 0 && isset($_GET['City2']) && $_GET['City2'] > 0) {
		$where = ' AND (carpool.from_city = "'.$_GET['City1'].'" AND carpool.to_city = "'.$_GET['City2'].'")';
	}
	$query1 = "SELECT carpool.*,c1.city as from_cityname,c2.city as to_cityname FROM carpool,cities c1, cities as c2
				WHERE type = 'local'
				AND c1.id = from_city AND c2.id = to_city $where";

			$result = mysql_query($query1);
			if(mysql_numrows($result) > 0) { ?>
						<?php	
							while($data = mysql_fetch_assoc($result)) {?>
								<tr>
									<td>
										<a href="carpool_view.php?id=<?php echo md5($data['id']); ?>">
											<?php
											$from_state = ($data['from_state'] != '0') ? ', '.$data['from_state'] : '';
											echo $data['from_cityname'].$from_state; ?>
										</a>
									</td>
									<td>
										<a href="carpool_view.php?id=<?php echo md5($data['id']); ?>">
											<?php
											$to_state = ($data['to_state'] != '0') ? ', '.$data['to_state'] : '';
											echo $data['to_cityname'].$to_state; ?>
										</a>
									</td>
									<td>
										<a href="carpool_view.php?id=<?php echo md5($data['id']); ?>">
											<?php echo $data['start_date']; ?>
										</a>
									</td>
									<td>
										<a href="carpool_view.php?id=<?php echo md5($data['id']); ?>">
											<?php echo $data['start_time']; ?>
										</a>
									</td>
								</tr>
						<?php } ?>
                    <?php  } else { ?>
						<tr><td colspan="4">No data available</td></tr>
				<?php } ?>
				</tbody>
				</table>
			</div>
            <!-- TOP BUTTONS ENDS-->


                                                          

			
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
	   
	   <link rel="stylesheet" href="calender/jquery-ui.css">
    <script src="calender/jquery-1.10.2.js"></script>
    <script src="calender/jquery-ui.js"></script>
	   
            <script>
            
	
	$( "#city_auto1" ).autocomplete({
		source: function(request, response) {
			$.getJSON("city_auto.php", { term: $('#city_auto1').val()},response);
		},
      minLength: 1,
      select: function( event, ui ) {
			$('#City1').val(ui.item.id);
      }
    });
	$( "#city_auto2" ).autocomplete({
		source: function(request, response) {
			$.getJSON("city_auto.php", { term: $('#city_auto2').val()},response);
		},
      minLength: 1,
      select: function( event, ui ) {
			$('#City2').val(ui.item.id);
      }
    });
	
	$('#city_auto1').keyup(function(e){if(e.keyCode == 8)$('#city_auto1, #City1').val('');});
	$('#city_auto2').keyup(function(e){if(e.keyCode == 8)$('#city_auto2, #City2').val('');});
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