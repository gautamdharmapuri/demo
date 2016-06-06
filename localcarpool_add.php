<?php error_reporting(0);  include"config/connection.php";	   
//echo $_SESSION['state'];
?>

<?php

$defaultState = $state = ($_GET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']);
if(isset($_POST['Submitdata']))
{
	$Error ='';
	$msg = '';
		
		
	//	echo $Error;
		$insData = $_POST;
		unset($insData['Submitdata']);
		unset($insData['JourneyType']);
		
		if($insData['type'] == "local") {
			if($insData['from_state'] == '' || $insData['from_state'] == 0) {
				$insData['from_state'] = $defaultState;
			}
			if($insData['to_state'] == '' || $insData['to_state'] == 0) {
				$insData['to_state'] = $defaultState;
			}
		}
		
		if($insData['type'] == "international") {
			$sql = mysql_query("select * from cities where id = '".$insData['from_city']."' GROUP BY city ORDER BY city ASC LIMIT 1");
			
			$row = mysql_fetch_array($sql);
			$insData['from_state'] = $row['state_code'];
			
			$sql=mysql_query("select * from cities where id = '".$insData['to_city']."' GROUP BY city ORDER BY city ASC LIMIT 1");
			$row = mysql_fetch_array($sql);
			$insData['to_state'] = $row['state_code'];
		}
		
		
		if ($Error == '') {
			$columns = implode(", ",array_keys($insData));
			$escaped_values = array_map('mysql_real_escape_string', array_values($insData));
			foreach($escaped_values as $escapedVal) {
				$tempArr[] = "'".$escapedVal."'";
			}
			$values  = implode(", ", $tempArr);
			$sql = "INSERT INTO `carpool` ($columns) VALUES ($values)";
			mysql_query($sql);
			$msg = "<h3 class='sucess'>Carpool Ads Created Successfully!..</h3>";
		} else {
			
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

   if(elem.value == 'local')
   {
      document.getElementById('hidden_div1').style.display = "none";
	  document.getElementById('hidden_div2').style.display = "none";
	}  

   if(elem.value == 'interstate')
   {
      document.getElementById('hidden_div1').style.display = "block";
	  document.getElementById('hidden_div2').style.display = "none";
	}  
   if(elem.value == 'international')
   { 
      document.getElementById('hidden_div1').style.display = "none";
	  document.getElementById('hidden_div2').style.display = "block";

	}  	

 if(elem.value == '')
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
	<?php ?>
				<h4><a href="state.php?State=<?php echo $state;?>" style="color:#0033FF;">Home</a> >>
				<a href="javascript:history.back()" class="breadcumb_link"> Local Carpool</a>
				>> Create Carpool Post</h4>
</div><br>




		<?php if($msg!='')
        {
        echo $msg ;exit;
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
		<select name="type" id="CarpoolType" required=""  class="form-control" tabindex="1"  onchange="showDiv(this)">         
               <option value="">Select Type</option>
                <option value="local">local carpool</option>
                <option value="interstate">Inter state Carpool</option>
                <option value="international">International carpool</option>    	
		</select>    
	</div>
</div>
</div>



<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Contact Name</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="ConatctNAME" name="name" placeholder="Contact Name" style="width:100%;margin-bottom:0px;" tabindex="4" value="<?php echo $_SESSION['Nris_session']['fname'] ?> <?php echo $_SESSION['Nris_session']['lname'] ?>" />               		
	</div>
</div>
</div>




<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Contact Number</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="ConatctNumber" name="mobile" placeholder="Contact Number" style="width:100%;margin-bottom:0px;" tabindex="5" value="<?php echo $_SESSION['Nris_session']['mobile']; ?>" />               		
	</div>
</div>
</div>



<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Email</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="ConatctEmail" name="email" readonly placeholder="Contact Email" style="width:100%;margin-bottom:0px;" tabindex="6" value="<?php echo $_SESSION['Nris_session']['email'] ?> " />               		
	</div>
</div>
</div>






<div class="col-md-12">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-2 control-label" style="text-align:left;">Journey Type</label>
	<div class="col-sm-3">
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
		<select name="from_state" id="from_state" required=""  class="form-control" tabindex="6" >         
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
		<select name="to_state" id="to_state" required=""  class="form-control" tabindex="6" >         
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
	<div class="col-md-2">
		<label for="inputEmail3" class="col-sm-12 control-label"  style="text-align:left;">Going to</label>
	</div>
	<div class="col-md-10">
		<div class="form-group">
	
	<div class="col-sm-8">
<div class="col-md-4"><input type="radio"  id="TitleAD" name="country" value="US" style="width:auto" checked/> US</div>
<div class="col-md-4"><input type="radio"  id="TitleAD" name="country" value="Mexico" style="width:auto"  /> Mexico</div>
<div class="col-md-4"><input type="radio"  id="TitleAD" name="country" value="Canada" style="width:auto"  /> Canada</div>        
	</div>
</div>
	</div>

</div>




















<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Departure City</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="city_auto1" placeholder="City" style="width:100%;margin-bottom:0px;" tabindex="8" required />
		<input type="hidden" name="from_city" id="City1">
	</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Arrival City</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="city_auto2" placeholder="City" style="width:100%;margin-bottom:0px;" tabindex="8" required />
		<input type="hidden" name="to_city" id="City2">
	</div>
</div>
</div>




<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Departure Date</label>
	<div class="col-sm-8">
        <input type="text" class="form-control" name="start_date" id="EndDate" tabindex="9" required placeholder="Date">
	</div>
</div>
</div>




<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Departure Time</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="DepartureTime" name="start_time" placeholder="Time" style="width:100%;margin-bottom:0px;" tabindex="8" required />               		
	</div>
</div>
</div>





<div class="col-md-12" id="hidden_div_twoWay" style="display: none;">
<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Date of return Journey</label>
	<div class="col-sm-8">
        <input type="text" class="form-control" name="end_date" id="EndDate2" tabindex="9"  placeholder="Date">
	</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Time of return journey</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="City" name="end_time" placeholder="Time" style="width:100%;margin-bottom:0px;" tabindex="8"  />               		
	</div>
</div>
</div>


</div>





<div class="col-md-12">

<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Flexible with timings Arrival/Departure</label>
	<div class="col-sm-8">
    	<input type="radio"  id="City" name="flex_time" value="YES" checked /> Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    	<input type="radio"  id="City" name="flex_time" value="NO"/> No        
	</div>
</div>
</div>
	
	
	<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Flexible with dates Arrival/Departure</label>
	<div class="col-sm-8">
    	<input type="radio"  id="Citys" name="flex_date" value="YES"/> Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    	<input type="radio"  id="Citys" name="flex_date" value="NO" checked /> No        
	</div>
</div>
</div>
</div>










<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Flexible for pick up near by location</label>
	<div class="col-sm-8">
    	<input type="radio"  id="location" name="flex_location" value="YES"/> Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    	<input type="radio"  id="location" name="flex_location" value="NO" checked /> No        
	</div>
</div>
</div>


























<div class="col-md-12">

<div class="form-group">
	<div class="col-sm-offset-5 col-sm-3">&nbsp;</div>
	<div class="col-sm-offset-5 col-sm-7">
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
	
	$('#from_state').change(function(){
		$('#city_auto1').val('');
	});
	$('#to_state').change(function(){
		$('#city_auto2').val('');
	});
	
	$( "#city_auto1" ).autocomplete({
		source: function(request, response) {
			var stateType = $('#CarpoolType option:selected').val();
			var stateVal = '<?php echo $defaultState;?>';
			if (stateType == 'international') {
                stateVal = 'all';
            }
			if (stateType == 'interstate') {
                stateVal = $('#from_state option:selected').val();
            }
			$.getJSON("city_auto.php", { term: $('#city_auto1').val(),state:stateVal},response);
		},
      minLength: 1,
      select: function( event, ui ) {
			$('#City1').val(ui.item.id);
      }
    });
	$( "#city_auto2" ).autocomplete({
		source: function(request, response) {
			var stateType = $('#CarpoolType option:selected').val();
			var stateVal = '<?php echo $defaultState;?>';
			if (stateType == 'international') {
                stateVal = 'all';
            }
			if (stateType == 'interstate') {
                stateVal = $('#to_state option:selected').val();
            }
			$.getJSON("city_auto.php", { term: $('#city_auto2').val(),state:stateVal},response);
		},
      minLength: 1,
      select: function( event, ui ) {
			$('#City2').val(ui.item.id);
      }
    });
	
	$('#city_auto1').keyup(function(e){if(e.keyCode == 8)$('#city_auto1, #City1').val('');});
	$('#city_auto2').keyup(function(e){if(e.keyCode == 8)$('#city_auto2, #City2').val('');});
	
	customRadio('flex_time');
	customRadio('flex_date');
	customRadio('flex_location');
	customRadio('country');
	
	
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