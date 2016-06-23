<?php error_reporting(0);  include"config/connection.php";	   


$state = $defaultState;
if($_SESSION['Nris_session']['id'] > 0 && $_GET['verified'] == '') {
	
	$date = date("Y-m-d H:i:s");
	$query_count = "select count(id) as cnt from post_free_stuff
					where CONCAT(`date`,' ',`time`) > date_sub('".$date."', interval 10 minute)
					and CONCAT(`date`,' ',`time`) < '".$date."'
					and ConatctEmail = '".$_SESSION['Nris_session']['email']."'";
	$result_count = mysql_query($query_count);                                                
	$result_count = mysql_fetch_array($result_count);
	$final_count = $result_count['cnt'];
}
?>


<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head><base href="/">

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title><?php echo $defaultState ?> - Free Stuff Create Ad | NRIs</title>
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
		

		$City = test_input($_POST["City"]);			
	
		$EndDate = test_input($_POST["EndDate"]);		
		
		
		if($_FILES["my_file1"]["name"] != '') {
		$round=rand(1000,100000);
		$fileName1=$_FILES["my_file1"]["name"];
		$fileSize1=$_FILES["my_file1"]["size"]/1024;
		$fileType1=$_FILES["my_file1"]["type"];
		$fileTmpName1=$_FILES["my_file1"]["tmp_name"];  
		

		if($fileSize1<=200){			
				
				if($_FILES['my_file1']['name'] != '') {
					$image1=$round."_".$_FILES['my_file1']['name'];
					$img1="uploads/free_stuff/".$image1;
					move_uploaded_file($_FILES['my_file1']['tmp_name'],$img1);	
				}
				
		}
		else
		{
  			$Error .= "Maximum upload file size limit is 200 kb.<br>";
		}
		}
		
	//	echo $Error;
			
		
		$adPosttype = test_input($_POST["adPosttype"]);	
											
		$date = date("Y-m-d");
		$time = date("H:i:s");	
		
	
		if ($Error=='')
		{
			$state = $defaultState;
			if($adPosttype!='')	
			{
					
					$query=mysql_query("insert into post_free_stuff (TitleAD,Message,image,AdPostType,ConatctNAME,ConatctNumber,ConatctEmail,Contact_PID,City,EndDate,date,time,States) VALUES('".$TitleAD."','".$Desrp."','".$image1."','".$adPosttype."','".$ConatctNAME."','".$ConatctNumber."','".$ConatctEmail."','".$pid."','".$City."','".$EndDate."','".$date."','".$time."','".$state."')");			
			}
			else
			{
			$query=mysql_query("insert into post_free_stuff (TitleAD,Message,image,ConatctNAME,ConatctNumber,ConatctEmail,Contact_PID,City,EndDate,date,time,States) VALUES('".$TitleAD."','".$Desrp."','".$image1."','".$ConatctNAME."','".$ConatctNumber."','".$ConatctEmail."','".$pid."','".$City."','".$EndDate."','".$date."','".$time."','".$state."')");
			}
			$post_id = mysql_insert_id();
			$final_count++;
			$msg = "<h3 class='sucess'>Free Stuff Ads Created Successfully!..</h3>";
		if($_GET['type'] == 'premium') {
				
				$type = 'free_stuff';
				$table_name = 'post_free_stuff';
				?>
				
				<form  action="https://www.paypal.com/cgi-bin/webscr"  method="post" name="paypal_form" id="paypal_form" >
				<input type="hidden" name="image_url" value="img/logo.png">		
				<input type="hidden" name="cmd" value="_cart">
				<input type="hidden" name="upload" value="1">
				<input type="hidden" name="business" value="<?php echo 'mailnris@gmail.com';?>" >
                <input name = "rm" value = "2" type = "hidden">
                <input name="custom" value="<?php echo $post_id; ?>" type="hidden">
                <input name="custom2" value="test" type="hidden">
                
                <input type="hidden" class='bg'  size="5"  width="211" height="25"  name="amount_1"  value="2" >
				<input type="hidden" name="item_name_1" value="Premium Ad">                
                <input type="hidden" name="item_number_1" value="<?php echo $post_id; ?>">
               <input name = "shipping" value = "0" type = "hidden">
			   <input type="hidden" name="currency_code" value="USD">
			   <input type="hidden" name="button_subtype" value="Free Ads">
			   <input type="hidden" name="no_note" value="0">
			   <input type="hidden" value="img/logo.png" name="cpp_header_image">
				<input type="hidden" value="img/logo.png" name="image_url">
				<?php $state = $defaultState;?>
			   <input type="hidden" name="return" id="return" value="<?php echo $siteUrlConstant; ?>/payment_success?status=success&type=<?php echo $type; ?>&table_name=<?php echo $table_name; ?>&id=<?php echo ($post_id);?>&state=<?php echo $state;?>" />
			   <input type="hidden" name="cancel_return" value="<?php echo $siteUrlConstant; ?>/payment_success?status=fail&type=<?php echo $type; ?>&id=<?php echo ($post_id);?>&table_name=<?php echo $table_name; ?>&state=<?php echo $state;?>">
			   <input type="hidden" name="notify_url" value="<?php echo $siteUrlConstant;?>/payment_success?b=success&table_name=<?php echo $table_name; ?>">			
</form>
<script>
$('document').ready(function() {
$('#paypal_form').submit();
});
</script>
				
				<?php
				exit;
			}
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
	<?php $state = $defaultState;?>
				<h4><a href="<?php echo $siteUrlConstant;?>state?State=<?php echo $state;?>" style="color:#0033FF;">Home</a> >> <a href="<?php echo $siteUrlConstant.'free_stuff_inner?code='.$state;?>" class="breadcumb_link">Free Stuff</a> >> Create Ad</h4>
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
 
<form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">




<div class="col-md-12">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Title (Ad title limited to 50 characters only)</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" pattern="[a-zA-Z0-9\s]+" required  id="" name="TitleAD" placeholder="Title Ad" style="width:100%;margin-bottom:0px;" maxlength="50" tabindex="1" onKeyUp="LimtCharacters(this,50,'lblcount');" required />               		
 <label id="lblcount" style="background-color:#E2EEF1;color:Red;font-weight:bold;">50 characters remaining</label><br/>        
	</div>
</div>
</div>



<div class="form-group">
	<label for="inputPassword3" class="col-sm-2 control-label" style="text-align:left;">Description</label>
	<div class="col-sm-10">
    <textarea rows="5" cols="40" style="width:100%;" name="Message" id="Message" tabindex="2" required></textarea>
	</div>
</div>



<div class="col-md-6">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Upload Image</label>
	<div class="col-sm-8">
		<input type="file" class="form-control" id="my_file1" name="my_file1" placeholder="" tabindex="10" />
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
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">City</label>
	<div class="col-sm-8">
    	<!--<input type="text" class="form-control" id="City" name="City" placeholder="City" style="width:100%;margin-bottom:0px;" tabindex="8" required />               		-->
		<input name="city" class="city" id="city_auto" style="width:100%;" required="required" type="text">
			<input name="City" class="city" id="City" type="hidden" style="width:100%;">
	</div>
</div>
</div>




<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Ad Expiry Date</label>
	<div class="col-sm-8">
        <input type="text" class="form-control" name="EndDate" id="EndDate" tabindex="9" required>
	</div>
</div>
</div>




































<div class="col-md-12">

<div class="form-group">
	<div class="col-sm-offset-5 col-sm-3">&nbsp;</div>
	<div class="col-sm-offset-5 col-sm-7">

<?php	if($_GET['type']=='premium')	{ ?>

<input type="hidden" name="adPosttype" id="adPosttype" value="<?php echo $_GET['type'];  ?>">		
<?php 	} ?>
    
    
        <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['Nris_session']['id']; ?>">    		
		<input type="button" class="button" name="Submit2" id="Submit2" tabindex="28" value="Save">
		<input type="submit" class="button" name="Submit" id="Submit" tabindex="28" value="Save2" style="display:none;">
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

	
    
    	<?php
		
		if($final_count >= 3) {
			$url = 'adcheck?redirect=create_free_stuff&State='.$state;
			echo "<script>window.location.href='".$url."';</script>";
			exit;
		}
		
		?>
	
    
    
    
	
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
    $( "#EndDate" ).datepicker({minDate: 0,maxDate: "+30d" });
	
	$('#Submit2').click(function(){
		var err = false;
		$('input[type="file"]').each(function(){
			if (this.files.length > 0) {
				var thisSize = this.files[0].size/1024;
				if (thisSize > 200) {
					err = true;
				}   
            }
		});
		if (err) {
            alert('Please upload the file less than the 200KB');
			return false;
        } else {
			$('#Submit').trigger('click');
		}
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