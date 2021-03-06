<?php error_reporting(0);  include"config/connection.php";	   ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head><base href="/">

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Page Not Found | NRIs</title>
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

.error
{
background-color:#FF0000;
padding:5px;
color:#FFFFFF;
width:100%;
font-weight:bold;
}

.sucess
{
background-color:#009933;
padding:10px;
color:#FFFFFF;
width:100%;
font-weight:bold;
line-height:28px;
text-align:center;
}

</style>    


<style type="text/css">
.button {
  display: inline-block;
  padding: 10px 15px;
  font-size: 18px;
  cursor: pointer;
  text-align: center;	
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 10px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.threed {
    color: #CCCCCC;
    text-shadow: 0 1px 0 #999999, 0 2px 0 #888888,
             0 3px 0 #777777, 0 4px 0 #666666,
             0 5px 0 #555555, 0 6px 0 #444444,
             0 7px 0 #333333, 0 8px 7px rgba(0, 0, 0, 0.4),
             0 9px 10px rgba(0, 0, 0, 0.2);
}

/*STYLES FOR CSS POPUP*/


#blanket {
   background-color:#111;
   opacity: 0.65;
   position:absolute;
   z-index: 9001;
   top:0px;
   left:0px;
   width:100%;
   height:auto;
}

#popUpDiv {
	position:absolute;	
	width:50%;
	height:500px;
	border:5px solid #000;
	z-index: 9002;
	background-color:#FFFFFF;
	top:0%;
	overflow: auto;
	padding:10px;
	left:25% !important;
	top:25% !important;	
	
}

#popUpDiv h3
{
	font-size:14px;
}

#popUpDiv a {top:10%; float:right;font-size:22px;font-weight:bold;color:#000000;margin:10px;}
#popUpDiv a:hover {top:10%; float:right;font-size:22px;font-weight:bold;color:#000000;margin:10px;}

</style>
</head>
<body> 

<div class="loader"><div class="loader_html"></div></div>



	<?php include "config/menu.php" ;  ?>
	
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
            <h4><a href="<?php echo $siteUrlConstant;?>" style="color:#0033FF;">Home</a> >> Page Not Found</h4>
            </div>    <br>



			<div class="col-md-12">
			<center>
				<h2>Page Not Found</h2>
				We couldn't find the page you requested. Please contact us by clicking this <a href="<?php echo $siteUrlConstant.'contact';?>"><b>Link</b></a>
			</center>
			

            </div>
            </div>
            <!-- TOP BUTTONS ENDS-->


            
            
        </div><!-- COLUMN MIDDLE ENDS -->	
        
        
        
        
        
        
        <!-- COLUMN RIGHT -->	
        <?php include_once('home_common_right.php');?><!-- COLUMN RIGHT ENDS -->	
                   
        </div><!-- Section-1 ENDS -->
</div><!-- End Section-1 WRAP -->
	
	 <?php include "config/footer.php" ; ?><!--End footer -->
    

<!--POPUP-->        
    <div id="blanket" style="display:none;"></div>
	<div id="popUpDiv" style="display:none;">
    
<center><h4>Terms And Conditions!</h4></center>

                    
                        <p class="mydata">
							  Terms and conditions before registering with our site after entered all the info .Registration  terms and conditions guidelines 
                        </p>

                <div class="col-lg-12 col-md-12 col-sm-12">   
					<ul class="checks">
						 <li>
							  I am responsible what ever the content I post at any section of this site ,to respect  that I do not  post any content, rate or reply/review that may be considered, abusive, vulgar,offensive,  obscene
						 </li>
						 <li>
							 Site Management is not responsible for any violations as per law.  
						 </li>
						 <li>
							 This site is for public for free use I always maintain courtesy, if i am a business person/organization, marketing person or any other soliciting person I oath for not repeated posts, if any, site management have right to find the IP address or delete the my ID and barred for future postings from this IP address 
						 </li>
						 <li>
							  We respect Privacy according to US law, by agreeing these terms I honor that I never post others information like name phone numbers addresses etc.
						 </li>
						 <li>
							 I oath i never do spamming, no repeated ads this sections with useless content, and i agree i am responsible to open any external links/URLs posted by other users and/or by Admin. 
						 </li>
						 <li>
							  I am agreeing that after i accept these terms & conditions i solely responsible for whatever the content si post here or share here in public chat
						 </li>
						 <li>
							  NRIS.com  Reserves all right to remove or delete any user permanantly with out any reason or prior notifcation.
						 </li>
						 <li>
							  I am authorizing NRIS.com can track my IPaddress all the times for legal reasons. 
						 </li>
						 <li>
							  I always respect all other users of this site and I expect the same from other users of this site
						 </li>
						 <li>
							  I know that public chat is limited just to share the views of  political issues ,movies, sports and educational issues and i oath i never use unparliamentary, unlawful,abusive,vulgar words or phrases at any time.
						 </li>
					</ul>
					<p class="mydata">
						 We thank you in advance for your understanding and continued support.
					</p>
					<p class="mydata"> <input type="checkbox" value="y" id="chkAll" checked disabled readonly>&nbsp; I Accept Terms & Conditions.&nbsp;&nbsp;&nbsp;<button onClick="popup('popUpDiv')" class="btn btn-success" style="">Agree</button></span></p>
                </div>

	</div>	
<!-- / POPUP-->  

<div class="go-up"><i class="fa fa-chevron-up"></i></div>
<script src="js/tab/jquery-2.1.1.js"></script>
<script src="js/tab/main.js"></script> <!-- Resource jQuery -->


<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/html5.js"></script>
<script src="js/custom.js"></script>
<!-- End js -->

    <link rel="stylesheet" href="calender/jquery-ui.css">
    <script src="calender/jquery-1.10.2.js"></script>
    <script src="calender/jquery-ui.js"></script>
  
  <script>
  $(function() {
    $( "#DOB" ).datepicker({
      changeMonth: true,
      changeYear: true,
	  yearRange: "-70:+0"
    });
	
	$( "#state_auto" ).autocomplete({
      source: "state_auto.php",
      minLength: 1,
      select: function( event, ui ) {
			$('#State').val(ui.item.id);
      }
    });
	
	$( "#city_auto" ).autocomplete({
		source: function(request, response) {
			$.getJSON("city_auto.php", { term: $('#city_auto').val(),state:$('#State').val() },response);
		},
      minLength: 1,
      select: function( event, ui ) {
			$('#City').val(ui.item.id);
      }
    });
	
	$('#state_auto').keyup(function(e){if(e.keyCode == 8)$('#state_auto, #State, #city_auto, #City').val('');});
	$('#city_auto').keyup(function(e){if(e.keyCode == 8)$('#city_auto, #City').val('');});
  });
  </script>  

<?php include "config/social.php" ;  ?>

</body>
</html>