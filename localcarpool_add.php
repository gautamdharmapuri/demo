<?php error_reporting(0);  include"config/connection.php";	   
//echo $_SESSION['state'];
?>

<?php
if(isset($_POST['Submit']))
{
	$Error ='';
	$msg = '';
	

	
		$TitleAD = test_input($_POST["TitleAD"]);		
		$Desrp = test_input($_POST["Message"]);		
	

		$ConatctNAME = test_input($_POST["ConatctNAME"]);						
		$ConatctNumber = test_input($_POST["ConatctNumber"]);								
		$ConatctEmail = test_input($_POST["ConatctEmail"]);
		$pid = $_POST['id'];
		

		$City = test_input($_POST["City1"]);			
	
		$EndDate = test_input($_POST["EndDate"]);		
		
		
		
		$round=rand(1000,100000);
		$fileName1=$_FILES["my_file1"]["name"];
		$fileSize1=$_FILES["my_file1"]["size"]/1024;
		$fileType1=$_FILES["my_file1"]["type"];
		$fileTmpName1=$_FILES["my_file1"]["tmp_name"];  
		

		if($fileSize1<=200){			
				
				$image1=$round."_".$_FILES['my_file1']['name'];
				$img1="uploads/free_stuff/".$image1;
				move_uploaded_file($_FILES['my_file1']['tmp_name'],$img1);
		}
		else
		{
  			$Error .= "Maximum upload file size limit is 200 kb.<br>";
		}
		
		
	//	echo $Error;
			
		
		$adPosttype = test_input($_POST["adPosttype"]);	
											
		$date = date("Y-m-d");
		$time = date("h:m:s");	
		
	
		if ($Error=='')
		{
			
			if($adPosttype!='')	
			{
					
					$query=mysql_query("insert into post_free_stuff (TitleAD,Message,image,AdPostType,ConatctNAME,ConatctNumber,ConatctEmail,Contact_PID,City,EndDate,date,time) VALUES('".$TitleAD."','".$Desrp."','".$image1."','".$adPosttype."','".$ConatctNAME."','".$ConatctNumber."','".$ConatctEmail."','".$pid."','".$City."','".$EndDate."','".$date."','".$time."')");			
			}
			else
			{
			$query=mysql_query("insert into post_free_stuff (TitleAD,Message,image,ConatctNAME,ConatctNumber,ConatctEmail,Contact_PID,City,EndDate,date,time) VALUES('".$TitleAD."','".$Desrp."','".$image1."','".$ConatctNAME."','".$ConatctNumber."','".$ConatctEmail."','".$pid."','".$City."','".$EndDate."','".$date."','".$time."')");
			}
			$msg = "<h3 class='sucess'>Carpool Ads Created Successfully!..</h3>";
		}
		else
		{
			$Error = $Error;
		}
		
		

}






function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title><?php echo $_SESSION['state'] ?> - Carpool | NRIs</title>
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


<script language="javascript" type="text/javascript">
function showDiv(elem){

   if(elem.value == 1)
   {
      document.getElementById('hidden_div1').style.display = "none";
	  document.getElementById('hidden_div2').style.display = "none";
	}  

   if(elem.value == 2)
   {
      document.getElementById('hidden_div1').style.display = "block";
	  document.getElementById('hidden_div2').style.display = "none";
	}  
   if(elem.value == 3)
   { 
      document.getElementById('hidden_div1').style.display = "none";
	  document.getElementById('hidden_div2').style.display = "block";

	}  	

 if(elem.value == 0)
 {
      document.getElementById('hidden_div1').style.display = "none";
	  document.getElementById('hidden_div2').style.display = "none";

	}	  
}


</script>



<script language="javascript" type="text/javascript">
function showDiv2(elem){

   if(elem.value == 1)
   {
      document.getElementById('hidden_div_twoWay').style.display = "none";
	}  

   if(elem.value == 2)
   {
      document.getElementById('hidden_div_twoWay').style.display = "block";
	}  
 
 if(elem.value == 0)
 {
      document.getElementById('hidden_div_twoWay').style.display = "none";

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
	<?php $state = ($_GET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']);?>
				<h4><a href="state.php?State=<?php echo $state;?>" style="color:#0033FF;">Home</a> >>
				<a href="javascript:history.back()" class="breadcumb_link"> Local Carpool</a>
				>> Create Carpool Post</h4>
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

<input type="hidden" value="<?php echo $state?>" id="State">
<div class="col-md-6">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Carpool Type</label>
	<div class="col-sm-8">
		<select name="CarpoolType" id="CarpoolType" required=""  class="form-control" tabindex="1"  onchange="showDiv(this)">         
               <option value="0">Select Type</option>
                <option value="1">local carpool</option>
                <option value="2">Inter state Carpool</option>
                <option value="3">International carpool</option>    	
		</select>    
	</div>
</div>
</div>



<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Contact Name</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="ConatctNAME" name="ConatctNAME" placeholder="Contact Name" style="width:100%;margin-bottom:0px;" tabindex="4" value="<?php echo $_SESSION['Nris_session']['fname'] ?> <?php echo $_SESSION['Nris_session']['lname'] ?>" />               		
	</div>
</div>
</div>




<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Contact Number</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="ConatctNumber" name="ConatctNumber" placeholder="Contact Number" style="width:100%;margin-bottom:0px;" tabindex="5" value="<?php echo $_SESSION['Nris_session']['mobile'] ?> " />               		
	</div>
</div>
</div>



<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Email</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="ConatctEmail" name="ConatctEmail" readonly placeholder="Contact Email" style="width:100%;margin-bottom:0px;" tabindex="6" value="<?php echo $_SESSION['Nris_session']['email'] ?> " />               		
	</div>
</div>
</div>






<div class="col-md-6">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Journey Type</label>
	<div class="col-sm-8">
		<select name="JourneyType" id="JourneyType" required=""  class="form-control" tabindex="6"  onchange="showDiv2(this)">         
             		 <option value="0">Please Select</option>
                    <option value="1">One Way</option>
                    <option value="2">Two Way</option> 	
		</select>    
	</div>
</div>
</div>







<div class="col-md-12" id="hidden_div1" style="display: none;">

<div class="col-md-6">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Departure State</label>
	<div class="col-sm-8">
		<select name="JourneyType" id="JourneyType" required=""  class="form-control" tabindex="6" >         
             		 <option value="0">Please Select</option>
			<?php
            $qy_state_res = mysql_query("select state,state_code from states order by state");
            while($fs_state = mysql_fetch_array($qy_state_res))
            { ?>	                     
                    <option value="<?php echo $fs_state['state_code']; ?>"><?php echo $fs_state['state']; ?></option>
			<?php } ?>                   
		</select>    
	</div>
</div>
</div>



<div class="col-md-6">


<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Arrival State</label>
	<div class="col-sm-8">
		<select name="JourneyType" id="JourneyType" required=""  class="form-control" tabindex="6" >         
             		 <option value="0">Please Select</option>
			<?php
            $qy_state_res = mysql_query("select state,state_code from states order by state");
            while($fs_state = mysql_fetch_array($qy_state_res))
            { ?>	                     
                    <option value="<?php echo $fs_state['state_code']; ?>"><?php echo $fs_state['state']; ?></option>
			<?php } ?>                   
		</select>    
	</div>
</div>
</div>


</div>



<div class="col-md-12" id="hidden_div2" style="display: none;">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Going to</label>
	<div class="col-sm-8">
<div class="col-md-4"><input type="radio"  id="TitleAD" name="goingTo" value="US" style="width:auto" checked/> US</div>
<div class="col-md-4"><input type="radio"  id="TitleAD" name="goingTo" value="Mexico" style="width:auto"  /> Mexico</div>
<div class="col-md-4"><input type="radio"  id="TitleAD" name="goingTo" value="Canada" style="width:auto"  /> Canada</div>        
	</div>
</div>
</div>




















<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Departure City</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="city_auto1" name="DepartureCity" placeholder="City" style="width:100%;margin-bottom:0px;" tabindex="8" required />
		<input type="hidden" name="City1" id="City1">
	</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Arrival City</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="city_auto2" name="ArrivalCity" placeholder="City" style="width:100%;margin-bottom:0px;" tabindex="8" required />
		<input type="hidden" name="City2" id="City2">
	</div>
</div>
</div>




<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Departure Date</label>
	<div class="col-sm-8">
        <input type="text" class="form-control" name="EndDate" id="EndDate" tabindex="9" required placeholder="Date">
	</div>
</div>
</div>




<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Departure Time</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="DepartureTime" name="DepartureTime" placeholder="Time" style="width:100%;margin-bottom:0px;" tabindex="8" required />               		
	</div>
</div>
</div>





<div class="col-md-12" id="hidden_div_twoWay" style="display: none;">
<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Date of return Journey</label>
	<div class="col-sm-8">
        <input type="text" class="form-control" name="EndDate2" id="EndDate2" tabindex="9" required placeholder="Date">
	</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Time of return journey</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="City" name="City" placeholder="Time" style="width:100%;margin-bottom:0px;" tabindex="8" required />               		
	</div>
</div>
</div>


</div>





<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Flexible with timings Arrival/Departure</label>
	<div class="col-sm-8">
    	<input type="radio"  id="City" name="City"  checked /> Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    	<input type="radio"  id="City" name="City"/> No        
	</div>
</div>
</div>




<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Flexible with dates Arrival/Departure</label>
	<div class="col-sm-8">
    	<input type="radio"  id="Citys" name="Citys" /> Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    	<input type="radio"  id="Citys" name="Citys"  checked /> No        
	</div>
</div>
</div>




<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Flexible for pick up near by location</label>
	<div class="col-sm-8">
    	<input type="radio"  id="location" name="location" /> Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    	<input type="radio"  id="location" name="location"  checked /> No        
	</div>
</div>
</div>


























<div class="col-md-12">

<div class="form-group">
	<div class="col-sm-offset-5 col-sm-3">&nbsp;</div>
	<div class="col-sm-offset-5 col-sm-7">
    
    
        <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['Nris_session']['id']; ?>">    		
		<button type="submit" class="button" name="Submitdata" id="Submitdata" tabindex="12">Save</button>
	</div>
</div>

</div>









</form>

                  
					

            </div>
            <!-- TOP BUTTONS ENDS-->

<br style="clear:both;"><br><br><br><br><br><br>			
            
            
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

<link rel="stylesheet" href="calender/jquery-ui.css">
    <script src="calender/jquery-1.10.2.js"></script>
    <script src="calender/jquery-ui.js"></script>
  
  <script>
   $(function() {
    $( "#EndDate" ).datepicker({minDate: '0'});
	$( "#EndDate2" ).datepicker({minDate: '0'});
	
	$( "#city_auto1" ).autocomplete({
		source: function(request, response) {
			$.getJSON("city_auto.php", { term: $('#city_auto1').val(),state:$('#State').val()},response);
		},
      minLength: 1,
      select: function( event, ui ) {
			$('#City1').val(ui.item.id);
      }
    });
	$( "#city_auto2" ).autocomplete({
		source: function(request, response) {
			$.getJSON("city_auto.php", { term: $('#city_auto2').val(),state:$('#State').val()},response);
		},
      minLength: 1,
      select: function( event, ui ) {
			$('#City2').val(ui.item.id);
      }
    });
	
	$('#city_auto1').keyup(function(e){if(e.keyCode == 8)$('#city_auto1, #City1').val('');});
	$('#city_auto2').keyup(function(e){if(e.keyCode == 8)$('#city_auto2, #City2').val('');});
	
	customRadio('goingTo');
	customRadio('Citys');
	customRadio('location');
	customRadio('City');
	
	
	function customRadio(radioName) {
		var radioButton = $('input[name="' + radioName + '"]');
		$(radioButton).each(function () {
			$(this).wrap("<span class='custom-radio'></span>");
			if ($(this).is(':checked')) {
				$(this).parent().addClass("selected");
			}
		});
		$(radioButton).click(function () {
			if ($(this).is(':checked')) {
				$(this).parent().addClass("selected");
			}
			$(radioButton).not(this).each(function () {
				$(this).parent().removeClass("selected");
			});
		});
	}
  });
  </script>
    

<?php include "config/social.php" ;  ?>

</body>
</html>