<?php error_reporting(0);  include"config/connection.php";	   


$state = $defaultState;
if($_SESSION['Nris_session']['id'] > 0 && $_GET['verified'] == '') {
	
	$date = date("Y-m-d H:i:s");
	$query_count = "select count(id) as cnt from post_free_baby_sitting
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
	<title><?php echo $defaultState ?> - Baby Sitting Create Ad | NRIs</title>
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



 <script type="text/javascript">
function LimtCharacters(txtMsg, CharLength, indicator) {
chars = txtMsg.value.length;
document.getElementById(indicator).innerHTML = CharLength - chars + ' characters remaining';
if (chars > CharLength) {
txtMsg.value = txtMsg.value.substring(0, CharLength);
}
}
</script>
<script type="text/javascript" src="css-pop.js"></script>
</head>
<body  <?php if(!isset($_POST['Submit']))
{ ?>onload="popup('popUpDiv')"<?php }?>>


<?php
if(isset($_POST['Submit']))
{
	$Error ='';
	$msg = '';
	

	
		$TitleAD = test_input($_POST["TitleAD"]);		
		$Desrp = test_input($_POST["Message"]);		
		$AdsCat = test_input($_POST["AdsCat"]);				

		$ConatctNAME = test_input($_POST["ConatctNAME"]);						
		$ConatctNumber = test_input($_POST["ConatctNumber"]);								
		$ConatctEmail = test_input($_POST["ConatctEmail"]);
		$pid = $_POST['id'];
		
		$ShowEmail = test_input($_POST["ShowEmail"]);	
		$City = test_input($_POST["City"]);			
		$EndDate = test_input($_POST["EndDate"]);		
		
		
		if($_FILES["my_file1"]["name"] != '') {
		$round=rand(1000,100000);
		$fileName1=$_FILES["my_file1"]["name"];
		$fileSize1=$_FILES["my_file1"]["size"]/1024;
		$fileType1=$_FILES["my_file1"]["type"];
		$fileTmpName1=$_FILES["my_file1"]["tmp_name"];  
		

		if($fileSize1<=200){			
				
				$image1=$round."_".$_FILES['my_file1']['name'];
				$img1="uploads/baby_sitting/".$image1;
				move_uploaded_file($_FILES['my_file1']['tmp_name'],$img1);
		}
		else
		{
  			$Error .= "Maximum upload file size limit is 200 kb.<br>";
		}
		}
	
		$adPosttype = test_input($_POST["adPosttype"]);	
		if($adPosttype!='')	
		{
					if($_FILES["my_file2"]["name"] != '') {
						$fileName2=$_FILES["my_file2"]["name"];
						$fileSize2=$_FILES["my_file2"]["size"]/1024;
						$fileType2=$_FILES["my_file2"]["type"];
						$fileTmpName2=$_FILES["my_file2"]["tmp_name"];
						
						if($fileSize2<=200){			
								
								$image2=$round."_".$_FILES['my_file2']['name'];
								$img2="uploads/baby_sitting/".$image2;
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
								$img3="uploads/baby_sitting/".$image3;
								move_uploaded_file($_FILES['my_file3']['tmp_name'],$img3);
						}
						else
						{
							$Error .= "Maximum upload file size limit is 200 kb.<br>";
						}
					}
					
					if($_FILES["my_file4"]["name"] != '') {
						$fileName4=$_FILES["my_file4"]["name"];
						$fileSize4=$_FILES["my_file4"]["size"]/1024;
						$fileType4=$_FILES["my_file4"]["type"];
						$fileTmpName4=$_FILES["my_file4"]["tmp_name"];
						
						if($fileSize4<=200){			
						
						$image4=$round."_".$_FILES['my_file4']['name'];
						$img4="uploads/baby_sitting/".$image4;
						move_uploaded_file($_FILES['my_file4']['tmp_name'],$img4);
						}
						else
						{
						$Error .= "Maximum upload file size limit is 200 kb.<br>";
						}
					}
					
					if($_FILES["my_file5"]["name"] != '') {
						$fileName5=$_FILES["my_file5"]["name"];
						$fileSize5=$_FILES["my_file5"]["size"]/1024;
						$fileType5=$_FILES["my_file5"]["type"];
						$fileTmpName5=$_FILES["my_file5"]["tmp_name"];
						
						if($fileSize5<=200){			
						
						$image5=$round."_".$_FILES['my_file5']['name'];
						$img5="uploads/baby_sitting/".$image5;
						move_uploaded_file($_FILES['my_file5']['tmp_name'],$img5);
						}
						else
						{
						$Error .= "Maximum upload file size limit is 200 kb.<br>";
						}
					}
					
					if($_FILES["my_file6"]["name"] != '') {
					$fileName6=$_FILES["my_file6"]["name"];
					$fileSize6=$_FILES["my_file6"]["size"]/1024;
					$fileType6=$_FILES["my_file6"]["type"];
					$fileTmpName6=$_FILES["my_file6"]["tmp_name"];
					
					if($fileSize6<=200){			
					
					$image6=$round."_".$_FILES['my_file6']['name'];
					$img6="uploads/baby_sitting/".$image6;
					move_uploaded_file($_FILES['my_file6']['tmp_name'],$img6);
					}
					else
					{
					$Error .= "Maximum upload file size limit is 200 kb.<br>";
					}
					}
					
					if($_FILES["my_file7"]["name"] != '') {
					$fileName7=$_FILES["my_file7"]["name"];
					$fileSize7=$_FILES["my_file7"]["size"]/1024;
					$fileType7=$_FILES["my_file7"]["type"];
					$fileTmpName7=$_FILES["my_file7"]["tmp_name"];
					
					if($fileSize7<=200){			
					
					$image7=$round."_".$_FILES['my_file7']['name'];
					$img7="uploads/baby_sitting/".$image7;
					move_uploaded_file($_FILES['my_file7']['tmp_name'],$img7);
					}
					else
					{
					$Error .= "Maximum upload file size limit is 200 kb.<br>";
					}
					}
					
					if($_FILES["my_file8"]["name"] != '') {
					$fileName8=$_FILES["my_file8"]["name"];
					$fileSize8=$_FILES["my_file8"]["size"]/1024;
					$fileType8=$_FILES["my_file8"]["type"];
					$fileTmpName8=$_FILES["my_file8"]["tmp_name"];
					
					if($fileSize8<=200){			
					
					$image8=$round."_".$_FILES['my_file8']['name'];
					$img8="uploads/baby_sitting/".$image8;
					move_uploaded_file($_FILES['my_file8']['tmp_name'],$img8);
					}
					else
					{
					$Error .= "Maximum upload file size limit is 200 kb.<br>";
					}
					}
					
					if($_FILES["my_file9"]["name"] != '') {
					$fileName9=$_FILES["my_file9"]["name"];
					$fileSize9=$_FILES["my_file9"]["size"]/1024;
					$fileType9=$_FILES["my_file9"]["type"];
					$fileTmpName9=$_FILES["my_file9"]["tmp_name"];
					
					if($fileSize9<=200){			
					
					$image9=$round."_".$_FILES['my_file9']['name'];
					$img9="uploads/baby_sitting/".$image9;
					move_uploaded_file($_FILES['my_file9']['tmp_name'],$img9);
					}
					else
					{
					$Error .= "Maximum upload file size limit is 200 kb.<br>";
					}
					}
					
					if($_FILES["my_file10"]["name"] != '') {
					$fileName10=$_FILES["my_file10"]["name"];
					$fileSize10=$_FILES["my_file10"]["size"]/1024;
					$fileType10=$_FILES["my_file10"]["type"];
					$fileTmpName10=$_FILES["my_file10"]["tmp_name"];
					
					if($fileSize10<=200){			
					
					$image10=$round."_".$_FILES['my_file10']['name'];
					$img10="uploads/baby_sitting/".$image10;
					move_uploaded_file($_FILES['my_file10']['tmp_name'],$img10);
					}
					else
					{
					$Error .= "Maximum upload file size limit is 200 kb.<br>";
					}
					}
					
					if($_FILES["my_file11"]["name"] != '') {
					$fileName11=$_FILES["my_file11"]["name"];
					$fileSize11=$_FILES["my_file11"]["size"]/1024;
					$fileType11=$_FILES["my_file11"]["type"];
					$fileTmpName11=$_FILES["my_file11"]["tmp_name"];
					
					if($fileSize11<=200){			
					
					$image11=$round."_".$_FILES['my_file11']['name'];
					$img11="uploads/baby_sitting/".$image11;
					move_uploaded_file($_FILES['my_file11']['tmp_name'],$img11);
					}
					else
					{
					$Error .= "Maximum upload file size limit is 200 kb.<br>";
					}
					}
					
					if($_FILES["my_file12"]["name"] != '') {
					$fileName12=$_FILES["my_file12"]["name"];
					$fileSize12=$_FILES["my_file12"]["size"]/1024;
					$fileType12=$_FILES["my_file12"]["type"];
					$fileTmpName12=$_FILES["my_file12"]["tmp_name"];
					
					if($fileSize12<=200){			
					
					$image12=$round."_".$_FILES['my_file12']['name'];
					$img12="uploads/baby_sitting/".$image12;
					move_uploaded_file($_FILES['my_file12']['tmp_name'],$img12);
					}
					else
					{
					$Error .= "Maximum upload file size limit is 200 kb.<br>";
					}
					}
					
					if($_FILES["my_file13"]["name"] != '') {
					$fileName13=$_FILES["my_file13"]["name"];
					$fileSize13=$_FILES["my_file13"]["size"]/1024;
					$fileType13=$_FILES["my_file13"]["type"];
					$fileTmpName13=$_FILES["my_file13"]["tmp_name"];
					
					if($fileSize13<=200){			
					
					$image13=$round."_".$_FILES['my_file13']['name'];
					$img13="uploads/baby_sitting/".$image13;
					move_uploaded_file($_FILES['my_file13']['tmp_name'],$img13);
					}
					else
					{
					$Error .= "Maximum upload file size limit is 200 kb.<br>";
					}
					}
					
					if($_FILES["my_file14"]["name"] != '') {
					$fileName14=$_FILES["my_file14"]["name"];
					$fileSize14=$_FILES["my_file14"]["size"]/1024;
					$fileType14=$_FILES["my_file14"]["type"];
					$fileTmpName14=$_FILES["my_file14"]["tmp_name"];
					
					if($fileSize14<=200){			
					
					$image14=$round."_".$_FILES['my_file14']['name'];
					$img14="uploads/baby_sitting/".$image14;
					move_uploaded_file($_FILES['my_file14']['tmp_name'],$img14);
					}
					else
					{
					$Error .= "Maximum upload file size limit is 200 kb.<br>";
					}
					}
					
					
					if($_FILES["my_file15"]["name"] != '') {
					$fileName15=$_FILES["my_file15"]["name"];
					$fileSize15=$_FILES["my_file15"]["size"]/1024;
					$fileType15=$_FILES["my_file15"]["type"];
					$fileTmpName15=$_FILES["my_file15"]["tmp_name"];
					
					if($fileSize15<=200){			
					
					$image15=$round."_".$_FILES['my_file15']['name'];
					$img15="uploads/baby_sitting/".$image15;
					move_uploaded_file($_FILES['my_file15']['tmp_name'],$img15);
					}
					else
					{
					$Error .= "Maximum upload file size limit is 200 kb.<br>";
					}
					}
					
		}
		
		
	//	echo $Error;
			
		
		
											
		$date = date("Y-m-d");
		$time = date("H:i:s");	
		
	
		if ($Error=='')
		{

			$state = $defaultState;
			if($adPosttype!='')	
			{
			$query=mysql_query("insert into post_free_baby_sitting (TitleAD,Message,AdsCat,ConatctNAME,ConatctNumber,ConatctEmail,Contact_PID,ShowEmail,City,EndDate,image,image2,image3,image4,image5,image6,image7,image8,image9,image10,image11,image12,image13,image14,image15,AdPostType,date,time,States) VALUES('".$TitleAD."','".$Desrp."','".$AdsCat."','".$ConatctNAME."','".$ConatctNumber."','".$ConatctEmail."','".$pid."','".$ShowEmail."','".$City."','".$EndDate."','".$image1."','".$image2."','".$image3."','".$image4."','".$image5."','".$image6."','".$image7."','".$image8."','".$image9."','".$image10."','".$image11."','".$image12."','".$image13."','".$image14."','".$image15."','".$adPosttype."','".$date."','".$time."','".$state."')");
			}
			else
			{			
			$query=mysql_query("insert into post_free_baby_sitting (TitleAD,Message,AdsCat,ConatctNAME,ConatctNumber,ConatctEmail,Contact_PID,ShowEmail,City,EndDate,image,date,time,States) VALUES('".$TitleAD."','".$Desrp."','".$AdsCat."','".$ConatctNAME."','".$ConatctNumber."','".$ConatctEmail."','".$pid."','".$ShowEmail."','".$City."','".$EndDate."','".$image1."','".$date."','".$time."','".$state."')");
			}
			$post_id = mysql_insert_id();
			$final_count++;
			
			$msg = "<h3 class='sucess'>Baby Sitting Ads Created Successfully!..</h3>";
		if($_GET['type'] == 'premium') {
				
				$type = 'baby_sitting';
				$table_name = 'post_free_baby_sitting';
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


<!--POPUP-->        
    <div id="blanket" style="display:none;"></div>
	<div id="popUpDiv" style="display:none;">
    
    	<!--<a href="javascript:;" onClick="popup('popUpDiv')" >X</a>-->
       
<center><h4>Terms And Conditions!</h4></center>
                    
                        <p>Babysitting Only performed by licensed babysitters according to state law unless if the baby sitter is immediate next relation to that baby/kid, violators will be prosecuted according to state law.  
                            By agreeing these terms and conditions means i have gone through the state babysitting regulations website and gained full knowledge to perform babysitting according to law 
                            All income that is not specifically exempted from taxation by law is taxable income, and that includes money earned by babysitting. The same rules and regulations that apply to any other kind of income apply to babysitting income, which has pros and cons. For example, a teenager who earns money babysitting might have to pay federal income taxes, but she can also use that earned income to fund a tax-advantaged individual retirement account.
                        </p>

                <div class="col-lg-12 col-md-12 col-sm-12">   
                <h3>FILING REQUIREMENTS</h3>              
                    <p>Whether you have to file a federal income tax return on your babysitting earnings depends on a number of factors, including your filing status, your dependency status, and the total amount of your earned and unearned income from all sources. For example, if you are single, your parents claim you as a dependent and you have only earned income, you don't have to file an income tax return until your income reaches $5,800 as of the 2011 tax year. If you are a single adult, and no one claims you as a dependent, you don't have to file a federal income tax return until your income reaches $9,500.
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">   
                <h3>TAXABLE INCOME</h3>              
                    <p>The Internal Revenue Service considers any income you receive in exchange for performing a personal service to be taxable income. It does not matter what the personal service is, or in what manner the income was paid. As long as the income was available to you, whether or not you actually have it in your possession, it is subject to federal income taxation. For example, if you receive cash in exchange for babysitting for a neighbor, that cash is taxable income. If the neighbor pays your way to the movies in exchange for your babysitting service, the IRS considers the value of the movie ticket to be taxable income.
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">   
                <h3>CHILD-CARE PROVIDERS</h3>              
                    <p>The IRS considers babysitters, regardless of their age, to be child-care providers, and the same rules that apply to child-care providers apply to babysitters. The IRS does not make a distinction between where the child care is provided. You must include any compensation you received for providing child care, or babysitting, regardless of whether that care was provided in your home, in the child's home or at another location.
                     </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">  
                <h3>BABYSITTER AS EMPLOYEE</h3>              
                    <p>If the person you babysit for has the right to control what you do, when you do it and how you do it, the IRS might consider that person to be your employer. How your babysitting income is reported and taxed is different if you work as an employee than if you work as an independent contractor. If you work as an employee, the person you work for should provide you with a W-2 detailing how much you were paid during the year, as well as how much money was withheld for such things as Social Security, Medicare, retirement benefits and any other withholdings. You should report your babysitting earnings along with your other wages, salaries and W-2 earnings on Line 7 of Form 1040.
                    </p>
                </div>
                 <div class="col-lg-12 col-md-12 col-sm-12">  
                <h3>BABYSITTING AS INDEPENDENT CONTRACTOR</h3>              
                    <p>If the person you babysit for has the right to control what you do, when you do it and how you do it, the IRS might consider that person to be your employer. How your babysitting income is reported and taxed is different if you work as an employee than if you work as an independent contractor. If you work as an employee, the person you work for should provide you with a W-2 detailing how much you were paid during the year, as well as how much money was withheld for such things as Social Security, Medicare, retirement benefits and any other withholdings. You should report your babysitting earnings along with your other wages, salaries and W-2 earnings on Line 7 of Form 1040.
                    The IRS considers you to be an independent contractor if the person you babysit for does not have the right to control what you do, how you do it or when you do it, even if they have the right to direct the results of your work. If you babysit only on an irregular basis, you are likely an independent contractor. The person you babysat for would not withhold any money from your pay. If you earned more than $600 per year from one person, she should provide you with a Form 1099-MISC. You must report all of your income for babysitting as an independent contractor on Schedule C, Form 1040, regardless of the amount and regardless of whether you receive a Form 1099-MISC. As an independent contractor, you will be responsible for paying self-employment taxes as well as income taxes on your babysitting earnings.
                    </p>
                </div>
                 <div class="col-lg-12 col-md-12 col-sm-12">  
                <h3>SELF-EMPLOYMENT TAXES</h3>              
                    <p>While your babysitting income might not be subject to federal income taxes, you might still have to pay self-employment taxes. According to the Internal Revenue Service, you must file Schedule SE and pay self-employment taxes if you had net earnings from self-employment of $400 or more. Self-employment tax rules apply regardless of your age.
                    </p>
                </div>
<p> <input type="checkbox" value="y" id="chkAll" checked disabled readonly>&nbsp; I Accept Terms & Conditions.&nbsp;&nbsp;&nbsp;<button onClick="popup('popUpDiv')" class="btn btn-success" style="">Agree</button></span></p>



	</div>	
<!-- / POPUP-->  
















<div class="loader"><div class="loader_html"></div></div>



<?php   include "config/menu_inner_state.php" ;  ?>
	
	<div class="clearfix"></div>

    
		<?php include_once('stock_block.php');?>    
	
	

     
     
    
    
     
    
<!-- Section-1 WRAP START-->	
<div class="section-1-wrap">	
<!-- Section-1 START-->	
		<div class="section-1">
        
        
        
        <!-- COLUMN LEFT -->	
                <?php include_once('state_common_left.php');?>
<!-- COLUMN LEFT ENDS -->	
        
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
				<h4><a href="<?php echo $siteUrlConstant;?>state?State=<?php echo $state;?>" style="color:#0033FF;">Home</a> >> <a href="<?php echo $siteUrlConstant.'baby_sitting_inner?code='.$state;?>" class="breadcumb_link">Baby Sitting</a> >> Create Ad</h4>
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
    	<input type="text" pattern="[a-zA-Z0-9\s]+" required class="form-control" id="" name="TitleAD" placeholder="Title Ad" style="width:100%;margin-bottom:0px;" maxlength="50" tabindex="1" onKeyUp="LimtCharacters(this,50,'lblcount');" required/>               		
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
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:left;font-size:11px;">Select Ads Category*</label>
	<div class="col-sm-8">
    	<select name="AdsCat" id="AdsCat" required=""  class="form-control"  onChange="showstate(this.value);" tabindex="3" >              
                <option value="">Please Select</option>
                 <?php
					$baby_query = "select * from baby_sitting order by name";
					$baby_result = mysql_query($baby_query);
					while($rs_baby = mysql_fetch_array($baby_result)) {
				?>
                <option value="<?php echo $rs_baby['id'] ?>"><?php echo $rs_baby['name'] ?></option>
               <?php } ?> 	
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
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">Display Email ?</label>
	<div class="col-sm-8">
    	<input type="checkbox" id="ShowEmail" name="ShowEmail" tabindex="7" value="Yes"  />&nbsp;
        (Check this box if you want to display email address)
	</div>
</div>
</div>



<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:right;">City</label>
	<div class="col-sm-8">
    	<!--<input type="text" class="form-control" id="City" name="City" placeholder="City" style="width:100%;margin-bottom:0px;" tabindex="8" required/>               		-->
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
		<input type="file" class="form-control" id="my_file1" name="my_file1" placeholder="" tabindex="10" accept="image/*"/>
	</div>
</div>
</div>



<?php	if($_GET['type']=='premium')	{ ?>

<div class="col-md-6">  

<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Upload Image</label>
	<div class="col-sm-8">
		<input type="file" class="form-control" id="my_file2" name="my_file2" placeholder="" tabindex="16" />
	</div>
</div>
</div>

<div class="col-md-6">  

<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Upload Image</label>
	<div class="col-sm-8">
		<input type="file" class="form-control" id="my_file3" name="my_file3" placeholder="" tabindex="17" />
	</div>
</div>
</div>


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









<div class="col-md-12">
<div class="form-group">

	<div class="col-sm-12">
    	<input type="checkbox" id="ChkTerms" name="ChkTerms" tabindex="11" disabled readonly checked/>&nbsp;
        <a href="javascript:;" style="color:#6A6A6A;">I Accept Terms & Conditions</a>
	</div>
</div>
</div>















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

</div></form>

            </div>
            <!-- TOP BUTTONS ENDS-->

<br style="clear:both;"><br><br><br><br><br><br>			
            
            
        </div><!-- COLUMN MIDDLE ENDS -->	
        <!-- COLUMN RIGHT -->	
        <?php include_once('state_common_right.php');?><!-- COLUMN RIGHT ENDS -->	  
        </div><!-- Section-1 ENDS -->
</div><!-- End Section-1 WRAP -->

	
    
    	<?php
		
		if($_SESSION['Nris_session']['id'] > 0 && $_GET['verified'] == '') {
			if($final_count >= 3) {
				$url = 'adcheck?redirect=baby_sitting_create&State='.$defaultState;
				echo "<script>window.location.href='".$url."';</script>";
				exit;
			}
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
	
	$( "#city_auto" ).autocomplete({
		source: function(request, response) {
			$.getJSON("city_auto.php", { term: $('#city_auto').val()},response);
		},
      minLength: 1,
      select: function( event, ui ) {
			$('#City').val(ui.item.id);
      }
    });
	$('#city_auto').keyup(function(e){if(e.keyCode == 8)$('#city_auto, #City').val('');});
  });
  </script>

<?php include "config/social.php" ;  ?>

</body>
</html>