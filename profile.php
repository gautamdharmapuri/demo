<?php error_reporting(0); include"config/connection.php";	   ?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head><base href="/">

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Profile | NRIs</title>
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
	
    

        <link rel="stylesheet" href="css/fancybox/jquery.fancybox-buttons.css">
        <link rel="stylesheet" href="css/fancybox/jquery.fancybox.css">        
       
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
.cat_heading
{
color: #3c3c3c;;font-family: "Montserrat",sans-serif;font-size: 18px;font-weight: 700;line-height: 3px; margin: 0;padding: 20px 0 10px;text-align: left;text-transform: uppercase;
}



.profile-details
{
padding:10px;
}
.profile-details div {
    border-bottom: 1px solid #ccc;
    color: #000;
    font-size: 15px;
    font-weight: bold;
    padding-bottom: 10px;
	text-align:left;
	width:100%;
}
.profile-details div b {
    color: #029cd3;
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
padding:5px;
color:#FFFFFF;
width:100%;
font-weight:bold;
}

.span-email {
    background: #ccc none repeat scroll 0 0;
    border: 1px solid lightskyblue;
    cursor: not-allowed;
    font-weight: bold;
    padding: 5px;
	text-align:left;
}
</style>    

<script type="text/javascript">

  function checkForm(form)
  {
   
  
   

    if(form.Password.value != "" && form.Password.value == form.CnfPassword.value) {
      if(form.Password.value.length < 8) {
        alert("Error: Password must contain at least 8 characters!");
        form.Password.focus();
        return false;
      }
     
      re = /[0-9]/;
      if(!re.test(form.Password.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.Password.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.Password.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.Password.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.Password.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.Password.focus();
        return false;
      }
    } else if(form.Password.value != "" && form.Password.value != form.CnfPassword.value) {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.Password.focus();
      return false;
    }
    return true;
  }



</script>

</head>
<body>

<div class="loader"><div class="loader_html"></div></div>



	<?php // include "config/menu.php" ;  
	include "config/menu_inner_state.php" ; 
	?>
	
	<div class="clearfix"></div>

    <?php include_once('stock_block.php');?>

     
     <?php include_once('top_container_links.php');?>
    
<!-- Section-1 WRAP START-->	
<div class="section-1-wrap" style="min-height:600px;">	
<!-- Section-1 START-->	
		<div class="col-md-12">
				
                <div class="col-md-3" style="margin:0 auto;">
            	
                            <div style="width:30%;float:left;">&nbsp;</div>
                            <div class="nri-talk" style="width:70%;">
                                          <div class="head-title-no-pad">
                                              <h4 class="cat_heading"><?php echo ucwords($_SESSION['Nris_session']['fname']); ?> Profile</h4>
                                        </div>
                                                <div class="bord-cla">
                                                 <ul style="padding-left:5px;padding-right:5px;height:100px;">
                                                      
                                                       
                                                        <li><img src="img/list.jpg" alt=">">&nbsp;<a href="<?php echo $siteUrlConstant;?>profile">My Profile</a></li>
                                                        <li><img src="img/list.jpg" alt=">">&nbsp;<a href="<?php echo $siteUrlConstant;?>myads">My Ads</a></li>
                                                        <li style="border-bottom:none;"><img src="img/list.jpg" alt=">">&nbsp;<a href="<?php echo $siteUrlConstant;?>profile?action=edit">Edit Profile</a></li>                                                                                                                
                                                      
                                                        
                                              </ul>                                                         
                                              </div>        
                            </div>
                </div>        
				
                <?php if(isset($_GET['action']))
				{ ?>

							 <div class="col-md-9"><br><br>

<?php
require_once "config/formvalidator.php";

$show_form=true;

if(isset($_POST['Submit']))
{// The form is submitted

    //Setup Validations
    $validator = new FormValidator();
    $validator->addValidation("Firstname","req","Please Enter your First Name");
	$validator->addValidation("Lastname","req","Please Enter your Last Name");
	$validator->addValidation("Mobile","req","Please Enter your Mobile");	
	//$validator->addValidation("Password","req","Please Enter your Password");		
    //Now, validate the form
    if($validator->ValidateForm())
    {
        //Validation success. 
        //Here we can proceed with processing the form 
        //(like sending email, saving to Database etc)
        // In this example, we just display a message
		
		
				$fname=trim($_POST['Firstname']);
				$a=stripslashes($fname);
				$a=mysql_real_escape_string($a);
				
				
				$lname=trim($_POST['Lastname']);
				$b=stripslashes($lname);
				$b=mysql_real_escape_string($b);
				
				$Mobile=trim($_POST['Mobile']);
				$c=stripslashes($Mobile);
				$c=mysql_real_escape_string($c);
				
				$d = '';
				if($_POST['Password'] != '') {
					$pass=trim($_POST['Password']);
					$d = stripslashes($pass);
					$d = mysql_real_escape_string($d);	
				}
				
				$date=date('Y-m-d');
				$time=date('h:m:s');
				
		 $query="update register set fname='".$a."',lname='".$b."',mobile='".$c."' where id='".$_SESSION['Nris_session']['id']."' ";
		 if($d != '') {
			$query="update register set fname='".$a."',lname='".$b."',mobile='".$c."',password='".$d."' where id='".$_SESSION['Nris_session']['id']."' ";
		 }
		 $result=mysql_query($query);
		
		
        echo "<div class='sucess'>Profile Updated Successully !</div>";
        $show_form=false;
    }
    else
    {
        echo "<div class='error'>Errors:</div>";

        $error_hash = $validator->GetErrors();
        foreach($error_hash as $inpname => $inp_err)
        {
            echo "<div style='color:#FF0000;margin-top:10px;'>$inpname : $inp_err</div>";
        }        
    }//else
}//if(isset($_POST['Submit']))

if(true == $show_form)
{
?>
<div class="bord-cla" style="padding:10px;margin-top:10px;">

<br>
<div class="span-email"><?php echo strtolower($_SESSION['Nris_session']['email']); ?></div>
<br>

<form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data" onSubmit="return checkForm(this);" name="form" id="form">

<div class="col-md-5">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:left;font-weight:bold;">First Name</label>
	<div class="col-sm-8">
		<input type="text" class="form-control" id="Firstname" name="Firstname" placeholder="Your First Name" style="width:100%;" tabindex="1" value="<?php echo $_SESSION['Nris_session']['fname']; ?>" required="required"  />
	</div>
</div>
<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;font-weight:bold">Mobile</label>
	<div class="col-sm-8">
		<input type="text" class="form-control" id="Mobile" name="Mobile" placeholder="Your Mobile Number" style="width:100%;" tabindex="3"  value="<?php echo $_SESSION['Nris_session']['mobile']; ?>" required="required"  />
	</div>
</div>

<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;font-weight:bold;">Confirm Password:</label>
	<div class="col-sm-8">
		<input type="text" class="form-control" id="CnfPassword" name="CnfPassword" placeholder="Confirm Password:" style="width:100%;" tabindex="5"/>
	</div>
</div>

</div>


<div class="col-md-5">
            


<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:left;font-weight:bold;">Last Name</label>
	<div class="col-sm-8">
		<input type="text" class="form-control" id="Lastname" name="Lastname" placeholder="Your Last Name" style="width:100%;" tabindex="2"  value="<?php echo $_SESSION['Nris_session']['lname']; ?>" required="required" />
	</div>
</div>


<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:left;font-weight:bold;">Change Password</label>
	<div class="col-sm-8">
		<input type="text" class="form-control" id="Password" name="Password" placeholder="Change Password" style="width:100%;" tabindex="4" />
	</div>
</div>


<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:left;font-size:13px;">&nbsp;</label>
	<div class="col-sm-8">
		<button type="submit123"  class="btn btn-success"  name="Submit" tabindex="9">Update</button>
	</div>
</div>

            </div>

</form>
</div>

<?php } ?>
</div>
                            
                <?php  } else { ?>
                <div class="col-md-9"><br><br>
                	    
                     <div class="col-md-8">   

                       <div class="profile-details">
                                <div><b>First Name :</b> <?php echo ucwords($_SESSION['Nris_session']['fname']); ?></div>
                                <div><b>Last Name :</b> <?php echo ucwords($_SESSION['Nris_session']['lname']); ?></div>
                                <div><b>Address :</b>  <?php echo ucwords($_SESSION['Nris_session']['address']); ?></div>
                                <div><b>City :</b> 
											<?php 
                                                $query_city=mysql_query("select id,city from  cities where id='".$_SESSION['Nris_session']['city']."'");
                                                $rcity = mysql_fetch_array($query_city);
                                                echo ucwords($rcity['city']); ?>
                                </div>
                                <div><b>Mobile :</b> <?php echo ucwords($_SESSION['Nris_session']['address']); ?></div>
                                <div><b>Email :</b>  <?php echo strtolower($_SESSION['Nris_session']['email']); ?></div>
                            </div>
                                          <div class="col-md-2">   </div>       
					</div>
                	              
                
                </div>    
                <?php } ?>
		</div>
        <!-- Section-1 ENDS -->
</div><!-- End Section-1 WRAP -->

    
<div style="clear:both"></div>    
	
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

<!-- Grab Google CDN's jQuery, fall back to local if offline -->
  		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  		<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
        
        
	<!-- FancyBox -->
		<script src="js/fancybox/jquery.fancybox.js"></script>
		<script src="js/fancybox/jquery.fancybox-buttons.js"></script>
		<script src="js/fancybox/jquery.fancybox-thumbs.js"></script>
        <script src="js/fancybox/jquery.easing-1.3.pack.js"></script>
		<script src="js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
        

        

        
        <script type="text/javascript">
        	$(document).ready(function() {
				$(".various").fancybox({
					maxWidth	: 800,
					maxHeight	: 600,
					fitToView	: false,
					width		: '70%',
					height		: '70%',
					autoSize	: false,
					closeClick	: false,
					openEffect	: 'elastic',
					closeEffect	: 'none'
				});
			});
		</script>

</body>
</html>