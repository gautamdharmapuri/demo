<?php error_reporting(0);  include"config/connection.php";	   
//echo $_SESSION['state'];
?>



<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title><?php echo $_SESSION['state'] ?> - Add University | NRIs</title>
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
    
                <script src="css/modal/jquery.min.js"></script>            
            <script src="css/modal/bootstrap.min.js"></script>
  <!--[if !IE]><!-->
	
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
.error
{
color:#FFFFFF;font-weight:bold;clear:both;background-color:#FF0000;font-weight:bold;padding:10px 10px;
border-radius: 5px;
}

/*.sucess
{
background-color:#009933;
padding:5px;
color:#FFFFFF;
width:100%;
font-weight:bold;
}

*/
.sucess
{
color:#FFFFFF;font-weight:bold;clear:both;background-color:#009900;font-weight:bold;padding:10px 10px;
border-radius: 5px;
}



</style>



 <script type="text/javascript">
function LimtCharacters(txtMsg, CharLength, indicator) {
chars = txtMsg.value.length;
document.getElementById(indicator).innerHTML = CharLength - chars + ' characters remaining';
if (chars > CharLength) {
txtMsg.value = txtMsg.value.substring(0, CharLength);
}
}
</script>

</head>
<body>

















<div class="loader"><div class="loader_html"></div></div>



<?php   include "config/menu_inner_state.php" ;  ?>
	
	<div class="clearfix"></div>

    
		<div class="stock-scroll">
		
				<div class="col-md-12">
                SCROLLING TEXT GOES HERE
                </div>
       
        </div>     
	
	

     
     
    
    
     
    
<!-- Section-1 WRAP START-->	
<div class="section-1-wrap">	
<!-- Section-1 START-->	
		<div class="section-1">
        
        
        
        <!-- COLUMN LEFT -->	
        <div class="col-md-2 inner-left">
        	<div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            
        </div><!-- COLUMN LEFT ENDS -->	
        
        <!-- COLUMN MIDDLE -->	
        <div class="col-md-8 inner-middle-wrap">
        
        	<!-- TOP ADVERTISE -->
            <!-- TOP ADVERTISE END-->
            
            
            <!-- TOP BUTTONS -->
           
            <!-- TOP BUTTONS ENDS-->
            
            <!-- FIRST TABLE -->
            <div class="col-md-12" style="text-align:left;color:#000000;"> 
   				

<div class="widget-temple">
				<h4><a href="state.php?State=<?php echo $state;?>" style="color:#0033FF;">Home</a> >> Student's Talk >> Add University</h4>
</div><br>




		<?php if($msg!='')
        {
        echo $msg ;
        }
        
        if($Error!='')
        {
            echo "<h6 class='error'>Error :<br>".$Error."Try Again.</h6>";
        }
        
        ?>
 
<form class="form-horizontal" role="form" method="post" action="#" enctype="multipart/form-data">





<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">University Name*</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="ConatctNumber" name="ConatctNumber" placeholder="University Name" style="width:100%;margin-bottom:0px;" tabindex="1" value="" />               		
	</div>
</div>
</div>



<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">University Website Link</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="ConatctNumber" name="ConatctNumber" placeholder="Website Link" style="width:100%;margin-bottom:0px;" tabindex="3" value="" />               		
	</div>
</div>
</div>



<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Field of Education</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="ConatctNumber" name="ConatctNumber" placeholder="Field of Education" style="width:100%;margin-bottom:0px;" tabindex="4" value="" />               		
	</div>
</div>
</div>



<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Email</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="ConatctEmail" name="ConatctEmail" readonly placeholder="Contact Email" style="width:100%;margin-bottom:0px;" tabindex="5" value="<?php echo $_SESSION['Nris_session']['email'] ?> " />               		
	</div>
</div>
</div>



<div class="form-group" style="clear:both;">
	<label for="inputPassword3" class="col-sm-2 control-label" style="text-align:right;">Description</label>
	<div class="col-sm-10">
    <textarea rows="5" cols="40" style="width:100%;" name="Message" id="Message" tabindex="6"></textarea>
	</div>
</div>






















<div class="col-md-12">

<div class="form-group">
	<div class="col-sm-offset-5 col-sm-3">&nbsp;</div>
	<div class="col-sm-offset-5 col-sm-7">


    
        <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['Nris_session']['id']; ?>">    		
		<button type="submit" class="button" name="cmdSubmit" id="cmdSubmit" tabindex="7">Send Message</button>
	</div>
</div>

</div>









</form>

                  
					

            </div>
            <!-- TOP BUTTONS ENDS-->

<br style="clear:both;"><br><br><br><br><br><br>			
            
            
        </div><!-- COLUMN MIDDLE ENDS -->	
        
        
        
        
        
        
        <!-- COLUMN RIGHT -->	
        <div class="col-md-2 inner-right">
        	<div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            
        </div><!-- COLUMN RIGHT ENDS -->	
			
            

               
               
               
                 
                    
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

<link rel="stylesheet" href="calender/jquery-ui.css">
    <script src="calender/jquery-1.10.2.js"></script>
    <script src="calender/jquery-ui.js"></script>
  
  <script>
   $(function() {
    $( "#EndDate" ).datepicker({minDate: 0});
  });
  </script>

<?php include "config/social.php" ;  ?>

</body>
</html>