<?php error_reporting(0);  include"config/connection.php";	   
//echo $_SESSION['state'];
if(isset($_GET['code']))
{
	$_SESSION['state']=$_GET['code'];
}
else
{
	$_SESSION['state']=$_SESSION['state'];	
}

$state = ($_GET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']);
if($_SESSION['Nris_session']['id'] > 0 && $_GET['verified'] == '') {
	
	$date = date("Y-m-d H:i:s");
	$query_count = "select count(id) as cnt from post_free_real_estate
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
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title><?php echo $_SESSION['state'] ?> - Real Estate Ad | NRIs</title>
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
#warning_popup , #images_popup{
	position:absolute;	
	height:auto !important;
	border:5px solid #000;
	z-index: 9002;
	background-color:#FFFFFF;
	top:0%;
	overflow: auto;
	padding:10px;
	left:25% !important;
	top:0% !important;	
	
}

#warning_popup h3, #images_popup h3
{
	font-size:14px;
}
.mydata { color:#000000;text-align:justify;line-height:22px;font-family: 'Roboto', sans-serif;font-size:16px;line-height:26px; }

#warning_popup a, #images_popup a {top:10%; float:right;font-size:22px;font-weight:bold;color:#000000;margin:10px;}
#warning_popup a:hover, #images_popup a:hover{top:10%; float:right;font-size:22px;font-weight:bold;color:#000000;margin:10px;}
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


label
{
font-weight:500;
color:#000000;
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
function showstate(str)
{
	if(str=='ALL')
	{
		popup('warning_popup');
	}
	if(str=='multiple')
	{
		document.getElementById('multiple_state').click();
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
		
		$AdsCat = test_input($_POST["AdsCat"]);			
		$BuiltYear = test_input($_POST["BuiltYear"]);
		$PropertyPrice = test_input($_POST["PropertyPrice"]);
		$SquareFeet = test_input($_POST["SquareFeet"]);			
		$Bedrooms = test_input($_POST["Bedrooms"]);			
		$Bathrooms = test_input($_POST["Bathrooms"]);
		$Other = test_input($_POST["Other"]);			
		
		$URL = test_input($_POST["URL"]);	
		
		if($_FILES["my_file1"]["name"] != '') {
		$round=rand(1000,100000);
		$fileName1=$_FILES["my_file1"]["name"];
		$fileSize1=$_FILES["my_file1"]["size"]/1024;
		$fileType1=$_FILES["my_file1"]["type"];
		$fileTmpName1=$_FILES["my_file1"]["tmp_name"];  
		

		if($fileSize1<=200){			
				
				if($_FILES['my_file1']['name'] != '') {
					$image1=$round."_".$_FILES['my_file1']['name'];
				$img1="uploads/real_estate/".$image1;
				move_uploaded_file($_FILES['my_file1']['tmp_name'],$img1);	
				}
				
		}
		else
		{
  			$Error .= "Maximum upload file size limit is 200 kb.<br>";
		}
		}
		
		if($_FILES["my_file2"]["name"] != '') {
		$fileName2=$_FILES["my_file2"]["name"];
		$fileSize2=$_FILES["my_file2"]["size"]/1024;
		$fileType2=$_FILES["my_file2"]["type"];
		$fileTmpName2=$_FILES["my_file2"]["tmp_name"];
		
		if($fileSize2<=200){			
				
				$image2=$round."_".$_FILES['my_file2']['name'];
				$img2="uploads/real_estate/".$image2;
				move_uploaded_file($_FILES['my_file2']['tmp_name'],$img2);
		}
		else
		{
  			$Error .= "Maximum upload file size limit is 200 kb.<br>";
		}
		}
		
		if($_FILES["my_file3"]["name"] != '') {
		$fileName3=$_FILES["my_file3"]["name"];
		$fileSize3=$_FILES["my_file3"]["size"]/1024;
		$fileType3=$_FILES["my_file3"]["type"];
		$fileTmpName3=$_FILES["my_file3"]["tmp_name"];
		
		if($fileSize3<=200){			
				
				$image3=$round."_".$_FILES['my_file3']['name'];
				$img3="uploads/real_estate/".$image3;
				move_uploaded_file($_FILES['my_file3']['tmp_name'],$img3);
		}
		else
		{
  			$Error .= "Maximum upload file size limit is 200 kb.<br>";
		}
		}
		
		
			$adPosttype = test_input($_POST["adPosttype"]);	
			if($adPosttype!='')	
			{

                if ($_FILES["my_file4"]["name"] != '') {
                    $fileName4 = $_FILES["my_file4"]["name"];
                    $fileSize4 = $_FILES["my_file4"]["size"] / 1024;
                    $fileType4 = $_FILES["my_file4"]["type"];
                    $fileTmpName4 = $_FILES["my_file4"]["tmp_name"];

                    if ($fileSize4 <= 200) {

                        $image4 = $round . "_" . $_FILES['my_file4']['name'];
                        $img4 = "uploads/jobs/" . $image4;
                        move_uploaded_file($_FILES['my_file4']['tmp_name'], $img4);
                    } else {
                        $Error .= "Maximum upload file size limit is 200 kb.<br>";
                    }
                }

                if ($_FILES["my_file5"]["name"] != '') {
                    $fileName5 = $_FILES["my_file5"]["name"];
                    $fileSize5 = $_FILES["my_file5"]["size"] / 1024;
                    $fileType5 = $_FILES["my_file5"]["type"];
                    $fileTmpName5 = $_FILES["my_file5"]["tmp_name"];

                    if ($fileSize5 <= 200) {

                        $image5 = $round . "_" . $_FILES['my_file5']['name'];
                        $img5 = "uploads/jobs/" . $image5;
                        move_uploaded_file($_FILES['my_file5']['tmp_name'], $img5);
                    } else {
                        $Error .= "Maximum upload file size limit is 200 kb.<br>";
                    }
                }

                if ($_FILES["my_file6"]["name"] != '') {
                    $fileName6 = $_FILES["my_file6"]["name"];
                    $fileSize6 = $_FILES["my_file6"]["size"] / 1024;
                    $fileType6 = $_FILES["my_file6"]["type"];
                    $fileTmpName6 = $_FILES["my_file6"]["tmp_name"];

                    if ($fileSize6 <= 200) {

                        $image6 = $round . "_" . $_FILES['my_file6']['name'];
                        $img6 = "uploads/jobs/" . $image6;
                        move_uploaded_file($_FILES['my_file6']['tmp_name'], $img6);
                    } else {
                        $Error .= "Maximum upload file size limit is 200 kb.<br>";
                    }
                }

                if ($_FILES["my_file7"]["name"] != '') {
                    $fileName7 = $_FILES["my_file7"]["name"];
                    $fileSize7 = $_FILES["my_file7"]["size"] / 1024;
                    $fileType7 = $_FILES["my_file7"]["type"];
                    $fileTmpName7 = $_FILES["my_file7"]["tmp_name"];

                    if ($fileSize7 <= 200) {

                        $image7 = $round . "_" . $_FILES['my_file7']['name'];
                        $img7 = "uploads/jobs/" . $image7;
                        move_uploaded_file($_FILES['my_file7']['tmp_name'], $img7);
                    } else {
                        $Error .= "Maximum upload file size limit is 200 kb.<br>";
                    }
                }

                if ($_FILES["my_file8"]["name"] != '') {
                    $fileName8 = $_FILES["my_file8"]["name"];
                    $fileSize8 = $_FILES["my_file8"]["size"] / 1024;
                    $fileType8 = $_FILES["my_file8"]["type"];
                    $fileTmpName8 = $_FILES["my_file8"]["tmp_name"];

                    if ($fileSize8 <= 200) {

                        $image8 = $round . "_" . $_FILES['my_file8']['name'];
                        $img8 = "uploads/jobs/" . $image8;
                        move_uploaded_file($_FILES['my_file8']['tmp_name'], $img8);
                    } else {
                        $Error .= "Maximum upload file size limit is 200 kb.<br>";
                    }
                }

                if ($_FILES["my_file9"]["name"] != '') {
                    $fileName9 = $_FILES["my_file9"]["name"];
                    $fileSize9 = $_FILES["my_file9"]["size"] / 1024;
                    $fileType9 = $_FILES["my_file9"]["type"];
                    $fileTmpName9 = $_FILES["my_file9"]["tmp_name"];

                    if ($fileSize9 <= 200) {

                        $image9 = $round . "_" . $_FILES['my_file9']['name'];
                        $img9 = "uploads/jobs/" . $image9;
                        move_uploaded_file($_FILES['my_file9']['tmp_name'], $img9);
                    } else {
                        $Error .= "Maximum upload file size limit is 200 kb.<br>";
                    }
                }

                if ($_FILES["my_file10"]["name"] != '') {
                    $fileName10 = $_FILES["my_file10"]["name"];
                    $fileSize10 = $_FILES["my_file10"]["size"] / 1024;
                    $fileType10 = $_FILES["my_file10"]["type"];
                    $fileTmpName10 = $_FILES["my_file10"]["tmp_name"];

                    if ($fileSize10 <= 200) {

                        $image10 = $round . "_" . $_FILES['my_file10']['name'];
                        $img10 = "uploads/jobs/" . $image10;
                        move_uploaded_file($_FILES['my_file10']['tmp_name'], $img10);
                    } else {
                        $Error .= "Maximum upload file size limit is 200 kb.<br>";
                    }
                }

                if ($_FILES["my_file11"]["name"] != '') {
                    $fileName11 = $_FILES["my_file11"]["name"];
                    $fileSize11 = $_FILES["my_file11"]["size"] / 1024;
                    $fileType11 = $_FILES["my_file11"]["type"];
                    $fileTmpName11 = $_FILES["my_file11"]["tmp_name"];

                    if ($fileSize11 <= 200) {

                        $image11 = $round . "_" . $_FILES['my_file11']['name'];
                        $img11 = "uploads/jobs/" . $image11;
                        move_uploaded_file($_FILES['my_file11']['tmp_name'], $img11);
                    } else {
                        $Error .= "Maximum upload file size limit is 200 kb.<br>";
                    }
                }

                if ($_FILES["my_file12"]["name"] != '') {
                    $fileName12 = $_FILES["my_file12"]["name"];
                    $fileSize12 = $_FILES["my_file12"]["size"] / 1024;
                    $fileType12 = $_FILES["my_file12"]["type"];
                    $fileTmpName12 = $_FILES["my_file12"]["tmp_name"];

                    if ($fileSize12 <= 200) {

                        $image12 = $round . "_" . $_FILES['my_file12']['name'];
                        $img12 = "uploads/jobs/" . $image12;
                        move_uploaded_file($_FILES['my_file12']['tmp_name'], $img12);
                    } else {
                        $Error .= "Maximum upload file size limit is 200 kb.<br>";
                    }
                }

                if ($_FILES["my_file13"]["name"] != '') {
                    $fileName13 = $_FILES["my_file13"]["name"];
                    $fileSize13 = $_FILES["my_file13"]["size"] / 1024;
                    $fileType13 = $_FILES["my_file13"]["type"];
                    $fileTmpName13 = $_FILES["my_file13"]["tmp_name"];

                    if ($fileSize13 <= 200) {

                        $image13 = $round . "_" . $_FILES['my_file13']['name'];
                        $img13 = "uploads/jobs/" . $image13;
                        move_uploaded_file($_FILES['my_file13']['tmp_name'], $img13);
                    } else {
                        $Error .= "Maximum upload file size limit is 200 kb.<br>";
                    }
                }

                if ($_FILES["my_file14"]["name"] != '') {
                    $fileName14 = $_FILES["my_file14"]["name"];
                    $fileSize14 = $_FILES["my_file14"]["size"] / 1024;
                    $fileType14 = $_FILES["my_file14"]["type"];
                    $fileTmpName14 = $_FILES["my_file14"]["tmp_name"];

                    if ($fileSize14 <= 200) {

                        $image14 = $round . "_" . $_FILES['my_file14']['name'];
                        $img14 = "uploads/jobs/" . $image14;
                        move_uploaded_file($_FILES['my_file14']['tmp_name'], $img14);
                    } else {
                        $Error .= "Maximum upload file size limit is 200 kb.<br>";
                    }
                }


                if ($_FILES["my_file15"]["name"] != '') {
                    $fileName15 = $_FILES["my_file15"]["name"];
                    $fileSize15 = $_FILES["my_file15"]["size"] / 1024;
                    $fileType15 = $_FILES["my_file15"]["type"];
                    $fileTmpName15 = $_FILES["my_file15"]["tmp_name"];

                    if ($fileSize15 <= 200) {

                        $image15 = $round . "_" . $_FILES['my_file15']['name'];
                        $img15 = "uploads/jobs/" . $image15;
                        move_uploaded_file($_FILES['my_file15']['tmp_name'], $img15);
                    } else {
                        $Error .= "Maximum upload file size limit is 200 kb.<br>";
                    }
                }
					
		}
		
		
		
	//	echo $Error;
		
		
		$States = test_input($_POST["States"]);		
//		echo $States."<br>";
		
			if($States=='ALL')
			{					
					$chk ='ALL';  					
			}
			
			
			if($States=='multiple')
			{
					$checkbox1=$_POST['state_id_multiple'];  
					$chk="";  
					foreach($checkbox1 as $chk1)  
					{  
					$chk .= $chk1.",";  
					}   
			}
			
			if($States!='ALL' && $States!='multiple')
			{					
					$chk = $States;					
			}
					
			
			if($chk=='')
			{
				$Error .= "Please Select atleast One State.<br>";
			}
			

/*		echo $chk."<bR>"; 				
		echo $Error;
		exit;			*/
		
		
		
		$City = test_input($_POST["City"]);	
		$NextDate = test_input($_POST["NextDate"]);	
		
		
			

		$ConatctNAME = test_input($_POST["ConatctNAME"]);						
		$ConatctNumber = test_input($_POST["ConatctNumber"]);								
		$ConatctEmail = test_input($_POST["ConatctEmail"]);
		$pid = $_POST['id'];
		
		$ShowEmail = test_input($_POST["ShowEmail"]);	
		$Address = test_input($_POST["Address"]);	
		
		$EndDate = test_input($_POST["EndDate"]);		
		
		
		
											
		$date = date("Y-m-d");
		$time = date("H:i:s");	
		
	
		if ($Error=='')
		{
		
			if($adPosttype!='')	
			{
			$query=mysql_query("insert into post_free_real_estate (TitleAD,Message,AdsCat,BuiltYear,PropertyPrice,SquareFeet,Bedrooms,Bathrooms,Other,URL,image1,image2,image3,image4,image5,image6,image7,image8,image9,image10,image11,image12,image13,image14,image15,AdPostType,States,States_Details,City,NextDate,ConatctNAME,ConatctNumber,ConatctEmail,Contact_PID,ShowEmail,Address,EndDate,date,time) VALUES('".$TitleAD."','".$Desrp."','".$AdsCat."','".$BuiltYear."','".$PropertyPrice."','".$SquareFeet."','".$Bedrooms."','".$Bathrooms."','".$Other."','".$URL."','".$image1."','".$image2."','".$image3."','".$image4."','".$image5."','".$image6."','".$image7."','".$image8."','".$image9."','".$image10."','".$image11."','".$image12."','".$image13."','".$image14."','".$image15."','".$adPosttype."','".$States."','".$chk."','".$City."','".$NextDate."','".$ConatctNAME."','".$ConatctNumber."','".$ConatctEmail."','".$pid."','".$ShowEmail."','".$Address."','".$EndDate."','".$date."','".$time."')");
			}
			else
			{
			$query=mysql_query("insert into post_free_real_estate (TitleAD,Message,AdsCat,BuiltYear,PropertyPrice,SquareFeet,Bedrooms,Bathrooms,Other,URL,image1,image2,image3,States,States_Details,City,NextDate,ConatctNAME,ConatctNumber,ConatctEmail,Contact_PID,ShowEmail,Address,EndDate,date,time) VALUES('".$TitleAD."','".$Desrp."','".$AdsCat."','".$BuiltYear."','".$PropertyPrice."','".$SquareFeet."','".$Bedrooms."','".$Bathrooms."','".$Other."','".$URL."','".$image1."','".$image2."','".$image3."','".$States."','".$chk."','".$City."','".$NextDate."','".$ConatctNAME."','".$ConatctNumber."','".$ConatctEmail."','".$pid."','".$ShowEmail."','".$Address."','".$EndDate."','".$date."','".$time."')");
			}
			$final_count++;
			
			$msg = "<h3 class='sucess'>Real Estate Ads Created Successfully!..</h3>";
		if($_GET['type'] == 'premium') {
				
				$type = 'realestate';
				$table_name = 'post_free_real_estate';
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
				<?php $state = ($_GET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']);?>
			   <input type="hidden" name="return" id="return" value="<?php echo SITE_BASE_URL; ?>/payment_success.php?status=success&type=<?php echo $type; ?>&table_name=<?php echo $table_name; ?>&id=<?php echo md5($post_id);?>&state=<?php echo $state;?>" />
			   <input type="hidden" name="cancel_return" value="<?php echo SITE_BASE_URL; ?>/payment_success.php?status=fail&type=<?php echo $type; ?>&id=<?php echo md5($post_id);?>&state=<?php echo $state;?>">
			   <input type="hidden" name="notify_url" value="<?php echo SITE_BASE_URL;?>/payment_success.php?b=success">			
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
	<?php $state = ($_GET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']);?>
				<h4><a href="state.php" style="color:#0033FF;">Home</a> >> <a href="<?php echo SITE_BASE_URL.'/realestate_inner.php?code='.$state;?>" class="breadcumb_link">Real Estate</a> >> Create Ad</h4>
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




<div class="col-md-12">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Title (Ad title limited to 50 characters only)</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="" pattern="[a-zA-Z0-9\s]+" required name="TitleAD" placeholder="Title Ad" style="width:100%;margin-bottom:0px;" maxlength="50" tabindex="1" onKeyUp="LimtCharacters(this,50,'lblcount');" />               		
 <label id="lblcount" style="background-color:#E2EEF1;color:Red;font-weight:bold;">50 characters remaining</label><br/>        
	</div>
</div>
</div>



<div class="form-group">
	<label for="inputPassword3" class="col-sm-2 control-label" style="text-align:left;">Property Details</label>
	<div class="col-sm-10">
    <textarea rows="5" cols="40" style="width:100%;" name="Message" id="Message" tabindex="2"></textarea>
	</div>
</div>



<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:left;">Property Type*</label>
	<div class="col-sm-8">
    	<select name="AdsCat" id="AdsCat" required=""  class="form-control"  onChange="showstate(this.value);" tabindex="3" >              
                <option value="">Please Select</option>
                <?php
					$edu_query = "select * from real_estate order by name";
					$edu_result = mysql_query($edu_query );
					while($rs_edu = mysql_fetch_array($edu_result)) {
				?>
                <option value="<?php echo $rs_edu['id'] ?>"><?php echo $rs_edu['name'] ?></option>
               <?php } ?>
		</select>                		
	</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Built Year*</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="BuiltYear" name="BuiltYear" placeholder="Built Year" style="width:100%;margin-bottom:0px;" tabindex="4"  required />               		
	</div>
</div>
</div>



<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Property Price*</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="PropertyPrice" name="PropertyPrice" placeholder="Property Price" style="width:100%;margin-bottom:0px;" tabindex="5"  required />               		
	</div>
</div>
</div>



<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Square Feet</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="SquareFeet" name="SquareFeet" placeholder="Square Feet" style="width:100%;margin-bottom:0px;" tabindex="6"   />               		
	</div>
</div>
</div>




<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:left;">No of Bedrooms</label>
	<div class="col-sm-8">
    	<select name="Bedrooms" id="Bedrooms" required=""  class="form-control" tabindex="7" >              
                <option value="">Please Select</option>              
                <?php for($i=1; $i<=6; $i++) {  ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
               <?php } ?>
		</select>                		
	</div>
</div>
</div>






<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;font-size:13px;">No of Bathrooms</label>
	<div class="col-sm-8">
    	<select name="Bathrooms" id="Bathrooms" required=""  class="form-control" tabindex="8" >              
                <option value="">Please Select</option>              
                <?php for($i=1; $i<=6; $i++) {  ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
               <?php } ?>
		</select>                		
	</div>
</div>
</div>





<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:left;font-size:12px">No of Other Rooms</label>
	<div class="col-sm-8">
    	<select name="Other" id="Other" required=""  class="form-control" tabindex="9" >              
                <option value="">Please Select</option>              
                <?php for($i=1; $i<=6; $i++) {  ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
               <?php } ?>
		</select>                		
	</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;font-size:12px;">More details URL (Optional)</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="URL" name="URL" placeholder="URL" style="width:100%;margin-bottom:0px;" tabindex="10" />               		
	</div>
</div>
</div>





<p style="clear:both;color:#333333;clear:both;">First Field is Compulsory. Only JPEG,PNG,JPG Type Image<bR>
								Uploaded. Image Size Should Be Less Than 200KB. <br>
								Drag and drop your photo to add image to your posting. <br>
								if your image is too larger or not uploading for any reason
								convert your image here to upload it for free <a href="http://www.fixpicture.org/" target="_blank" style="color: red; font-weight: bold;">Click here to convert </a>
                                
</p>
<div class="col-md-6">  


<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Upload Image</label>
	<div class="col-sm-8">
		<input type="file" class="form-control" id="my_file1" name="my_file1" placeholder="" tabindex="11" />
	</div>
</div>
</div>

<div class="col-md-6">  

<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Upload Image</label>
	<div class="col-sm-8">
		<input type="file" class="form-control" id="my_file2" name="my_file2" placeholder="" tabindex="12" />
	</div>
</div>
</div>

<div class="col-md-6">  

<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Upload Image</label>
	<div class="col-sm-8">
		<input type="file" class="form-control" id="my_file3" name="my_file3" placeholder="" tabindex="13" />
	</div>
</div>
</div>

<?php	if($_GET['type']=='premium')	{ ?>

<div class="col-md-6">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Upload Image</label>
	<div class="col-sm-8">
		<input type="file" class="form-control" id="my_file4" name="my_file4" placeholder="" tabindex="17" />
	</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Upload Image</label>
	<div class="col-sm-8">
		<input type="file" class="form-control" id="my_file5" name="my_file5" placeholder="" tabindex="17" />
	</div>
</div>
</div>



<div class="col-md-6">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Upload Image</label>
	<div class="col-sm-8">
		<input type="file" class="form-control" id="my_file6" name="my_file6" placeholder="" tabindex="17" />
	</div>
</div>
</div>



<div class="col-md-6">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Upload Image</label>
	<div class="col-sm-8">
		<input type="file" class="form-control" id="my_file7" name="my_file7" placeholder="" tabindex="17" />
	</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Upload Image</label>
	<div class="col-sm-8">
		<input type="file" class="form-control" id="my_file8" name="my_file8" placeholder="" tabindex="17" />
	</div>
</div>
</div>



<div class="col-md-6">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Upload Image</label>
	<div class="col-sm-8">
		<input type="file" class="form-control" id="my_file9" name="my_file9" placeholder="" tabindex="17" />
	</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Upload Image</label>
	<div class="col-sm-8">
		<input type="file" class="form-control" id="my_file10" name="my_file10" placeholder="" tabindex="17" />
	</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Upload Image</label>
	<div class="col-sm-8">
		<input type="file" class="form-control" id="my_file11" name="my_file11" placeholder="" tabindex="17" />
	</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Upload Image</label>
	<div class="col-sm-8">
		<input type="file" class="form-control" id="my_file12" name="my_file12" placeholder="" tabindex="17" />
	</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Upload Image</label>
	<div class="col-sm-8">
		<input type="file" class="form-control" id="my_file13" name="my_file13" placeholder="" tabindex="17" />
	</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Upload Image</label>
	<div class="col-sm-8">
		<input type="file" class="form-control" id="my_file14" name="my_file14" placeholder="" tabindex="17" />
	</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Upload Image</label>
	<div class="col-sm-8">
		<input type="file" class="form-control" id="my_file15" name="my_file15" placeholder="" tabindex="17" />
	</div>
</div>
</div>

<input type="hidden" name="adPosttype" id="adPosttype" value="<?php echo $_GET['type'];  ?>">
		
<?php 	} ?>


<div style="clear:both"></div>
<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">State</label>
	<div class="col-sm-8">
    	<select name="States" id="States" required=""  class="form-control"  onChange="showstate(this.value);" tabindex="14" >              
               <option value="">Select State</option>                
                <option value="<?php echo $_SESSION['state'] ?>">Current State Only</option>  
                <option value="ALL" data-toggle="modal" data-target="#ALL">All States in USA</option>  
                <option value="multiple" data-toggle="modal" data-target="#multiple">Select Multiple States</option>      	
		</select>            		
	</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">City</label>
	<div class="col-sm-8">
    	<!--<input type="text" class="form-control" id="City" name="City" placeholder="City" style="width:100%;margin-bottom:0px;" tabindex="15" required />-->
		<input name="city" class="city" id="city_auto" style="width:100%;" required="required" type="text" placeholder="City">
		<input name="City" class="city" id="City" type="hidden" style="width:100%;">
	</div>
</div>
</div>






<div class="col-md-12">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-3 control-label"  style="text-align:right;">Next Open House Date</label>
	<div class="col-sm-9">
        <input type="text" class="form-control" name="NextDate" id="NextDate" tabindex="16" required>
	</div>
</div>
</div>


















<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Contact Name</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="ConatctNAME" name="ConatctNAME" placeholder="Contact Name" style="width:100%;margin-bottom:0px;" tabindex="17" value="<?php echo $_SESSION['Nris_session']['fname'] ?> <?php echo $_SESSION['Nris_session']['lname'] ?>" />               		
	</div>
</div>
</div>




<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Contact Number</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="ConatctNumber" name="ConatctNumber" placeholder="Contact Number" style="width:100%;margin-bottom:0px;" tabindex="18" value="<?php echo $_SESSION['Nris_session']['mobile'] ?> " />               		
	</div>
</div>
</div>



<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Email</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="ConatctEmail" name="ConatctEmail" readonly placeholder="Contact Email" style="width:100%;margin-bottom:0px;" tabindex="19" value="<?php echo $_SESSION['Nris_session']['email'] ?> " />               		
	</div>
</div>
</div>




<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Display Email ?</label>
	<div class="col-sm-8">
    	<input type="checkbox" id="ShowEmail" value="Yes" name="ShowEmail" tabindex="20" />&nbsp;
        (Check this box if you want to display email address)
	</div>
</div>
</div>















<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Address</label>
	<div class="col-sm-8">
    	<input type="text" class="form-control" id="Address" name="Address" placeholder="Address" style="width:100%;margin-bottom:0px;" tabindex="21"  />  
	</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Ad Expiry Date</label>
	<div class="col-sm-8">
        <input type="text" class="form-control" name="EndDate" id="EndDate" tabindex="22" required>
	</div>
</div>
</div>





<div id="warning_popup" style="display:none;">
    <a style="float:right;cursor: pointer;" onClick="popup('warning_popup')">X</a>
       
<center><h4>Alert!</h4></center>

                <div class="col-lg-12 col-md-12 col-sm-12">   
					<p class="mydata">
						 NOTE: NRIS.COM OFFERING THIS SERVICE FOR CONVINIENCE OF OUR USERS TO POST AN AD IN ALL STATES IN UNITED STATES WITH A SINGLE CLICK , IF YOU DOESN NOT OBEY  FAIR USE POLICY YOUR USER ACCEESS TO THIS WEBSITE WILL BE TERMINATED PERMENTLEY AND IP ADDRESS WILL BE TAGGED
					</p>
					<div class="modal-footer" style="clear:both;">
						<button type="button" class="btn btn-default" onClick="popup('warning_popup')" style="background-color:#FF9900;color:#FFFFFF;">Agree</button>
					</div>
                </div>
	</div>





<!-- multiple States  Modal -->
<a href="javasccript:;" id="multiple_state" data-toggle="modal" data-target="#multiple"></a>
  <div class="modal fade" id="multiple" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">         
          <h4 class="modal-title"><center>State</center></h4>
        </div>
        <div class="modal-body">
			
             <div id="myLoginuser"></div>  
			<table border="0" cellpadding="2" cellspacing="1" width="100%">
            	<tr>
                	

           
         	<?php 
			$cnt=0;
			$qy_state_res = mysql_query("select state,state_code from states order by state");
			while($fs_state = mysql_fetch_array($qy_state_res))
			{ 	
			
				if($cnt%2==0){						
				echo "<tr>";
				}
					?>

            <td style="vertical-align:middle;width:auto;">
            <input type="checkbox" name="state_id_multiple[]"  value="<?php echo $fs_state['state_code']; ?>" <?php if($fs_state['state_code']==$_SESSION['state']) { echo "checked"; } ?> style="padding:3px;">
			<?php echo $fs_state['state'];?>
            </td>
          <?php 
		 					  if($cnt%2==0 && $cnt != 0){
                                    echo "</tr>";						
                                    }
                                    $cnt++;
                                    if($cnt==2)
                                    {
                                        $cnt=0;
                                    }
		 } ?>
            
                </tr>
            </table>            
            
        </div>
        <div class="modal-footer" style="clear:both;">
        <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['Nris_session']['id']; ?>">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FF9900;color:#FFFFFF;">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- multiple States Modal -->    





<!-- All States in USA Modal -->
  <div class="modal fade" id="ALL" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">         
          <h4 class="modal-title"><center>Warning!</center></h4>
        </div>
        <div class="modal-body">
			
             <div id="myLoginuser"></div>  
            <div>
           
          This site is providing option to post a free advertisement to be displayed in all states in United States just with one click, please co-operate with site administration by not posting unnecessary advertisments in Entire United States , and by click on agreeing button at the bottom I agree that after 10 misuses of this feature my account will be terminated permanently from nris.com 
            </div>
          
            
            
            
        </div>
        <div class="modal-footer" style="clear:both;">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FF9900;color:#FFFFFF;">Agree</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- All States in USA Modal -->    












<!-- multiple States  Modal -->
  <div class="modal fade" id="multiple" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">         
          <h4 class="modal-title"><center>State</center></h4>
        </div>
        <div class="modal-body">
			
             <div id="myLoginuser"></div>  
			<table border="0" cellpadding="2" cellspacing="1" width="100%">
            	<tr>
                	

           
         	<?php 
			$cnt=0;
			$qy_state_res = mysql_query("select state,state_code from states order by state");
			while($fs_state = mysql_fetch_array($qy_state_res))
			{ 	
			
				if($cnt%2==0){						
				echo "<tr>";
				}
					?>

            <td style="vertical-align:middle;width:auto;">
            <input type="checkbox" name="state_id_multiple[]"  value="<?php echo $fs_state['state_code']; ?>" <?php if($fs_state['state_code']==$_SESSION['state']) { echo "checked"; } ?> style="padding:3px;">
			<?php echo $fs_state['state'];?>
            </td>
          <?php 
		 					  if($cnt%2==0 && $cnt != 0){
                                    echo "</tr>";						
                                    }
                                    $cnt++;
                                    if($cnt==2)
                                    {
                                        $cnt=0;
                                    }
		 } ?>
            
                </tr>
            </table>            
            
        </div>
        <div class="modal-footer" style="clear:both;">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FF9900;color:#FFFFFF;">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- multiple States Modal -->                        





<div class="col-md-12">

<div class="form-group">
	<div class="col-sm-offset-5 col-sm-3">&nbsp;</div>
	<div class="col-sm-offset-5 col-sm-7">
	     <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['Nris_session']['id']; ?>">
		<?php
			$buttonText = "Save";
			if($_GET['type'] == 'premium') {
				$buttonText = "Proceed to Payment";
			}
		?>
		<input type="button" class="button" name="Submit2" id="Submit2" tabindex="28" value="<?php echo $buttonText;?>">
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
			$url = 'adcheck.php?redirect=realestate_create&State='.$state;
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
			$.getJSON("city_auto.php", { term: $('#city_auto').val(),state:$('#States').val() },response);
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

  <script>
   $(function() {
    $( "#NextDate" ).datepicker();
  });
  </script>


<?php include "config/social.php" ;  ?>

</body>
</html>