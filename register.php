<?php error_reporting(0);  include"config/connection.php";	   ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Registration | NRIs</title>
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

<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->
<script type="text/javascript" src="js/1.4.2_jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$(".State").change(function()
{
var id=$(this).val();
var dataString = 'id='+ id;

$.ajax
({
type: "POST",
url: "ajax_city.php",
data: dataString,
cache: false,
success: function(html)
{
$(".city").html(html);
} 
});

});
});
</script>



<script type="text/javascript">

  function checkForm(form)
  {
   
   if (document.getElementById('Firstname').value=='')
		{
			alert('Please Enter your First Name');			
			document.getElementById('Firstname').focus();
			return false;
		}
		if (document.getElementById('Lastname').value=='')
		{
			alert('Please Enter your Last Name');			
			document.getElementById('Lastname').focus();
			return false;
		}
		
		if (document.getElementById('Email').value=='')
		{
			alert('Please Enter your E-mail Id');			
			document.getElementById('Email').focus();
			return false;
		}
		else if(!chkemail())
		{
			return false;
		}
		
		if (document.getElementById('Mobile').value=='')
		{
			alert('Please Enter your Mobile Number');			
			document.getElementById('Mobile').focus();
			return false;
		}
   
   
  		if (document.getElementById('DOB').value=='')
		{
			alert('Please Enter your Date of Birth');			
			document.getElementById('DOB').focus();
			return false;
		}
		
	
   

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
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.Password.focus();
      return false;
    }
	
	
	if (document.getElementById('Address').value=='')
		{
			alert('Please Enter your Address');			
			document.getElementById('Address').focus();
			return false;
		}
		
	if (document.getElementById('State').value=='')
		{
			alert('Please Select your State');			
			document.getElementById('State').focus();
			return false;
		}		
		
	if (document.getElementById('city').value=='')
		{
			alert('Please Select your city');			
			document.getElementById('city').focus();
			return false;
		}				
	
	 if(!form.terms.checked) {
      alert("Please indicate that you accept the Terms and Conditions");
      form.terms.focus();
      return false;
    }
	
 
    return true;
  }


function chkemail()
{
var status = false;     
var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
     if (document.getElementById('Email').value.search(emailRegEx) == -1) 
	 {
          alert("Please enter a valid E-mail address.");
		  document.getElementById('Email').value='';
		  document.getElementById('Email').focus();
		  
     }
    
     else {    	    
          status = true;
     }
     return status;
}	

</script>
</head>
<body  <?php if(!isset($_POST['Submit']))
{ ?>onload="popup('popUpDiv')"<?php }?>>

<div class="loader"><div class="loader_html"></div></div>



	<?php include "config/menu.php" ;  ?>
	
	<div class="clearfix"></div>

    
		<div class="stock-scroll">
		
				<div class="col-md-12">
                SCROLLING TEXT GOES HERE
                </div>
       
        </div>     
	
	

     
     
    
    <div class="container">
    <div class="row row-centered">
        <div class="col-xs-3 col-centered"><div class="famous_btn"><a href="temples.php" >Famous Temples rated by nri's</a></div></div>
        <div class="col-xs-3 col-centered"><div class="famous_btn"><a href="restaurants.php" >Famous Restaurants rated by nri's</a></div></div>
        <div class="col-xs-3 col-centered"><div class="famous_btn"><a href="casinos.php" >Famous Casino rated by nri's</a></div></div>
        <div class="col-xs-3 col-centered"><div class="famous_btn"><a href="pubs.php" >Famous Pubs/Bars rated by NRI's</a></div></div>
    </div>
</div>
     
    
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
            <h4>Home >> Registration</h4>
            </div>    <br>



			<div class="col-md-12">
            

<?php
require_once "config/formvalidator.php";

$show_form=true;

if(isset($_POST['Submit']))
{// The form is submitted

    //Setup Validations
    $validator = new FormValidator();
    $validator->addValidation("Firstname","req","Please Enter your First Name");
	$validator->addValidation("Lastname","req","Please Enter your Last Name");
    $validator->addValidation("Email","email","The input for Email should be a valid email value");
    $validator->addValidation("Email","req","Please fill in Email");
	$validator->addValidation("Mobile","req","Please Enter your Contact Number");	
//	$validator->addValidation("DOB","req","Please Select your Date of Birth");	
	$validator->addValidation("Password","req","Please Enter your Password");	
	$validator->addValidation("CnfPassword","req","Please Enter your Confirm Password");		
	$validator->addValidation("Address","req","Please Enter your Address");		
	$validator->addValidation("State","req","Please Select your State");			
	$validator->addValidation("city","req","Please Select your city");				
    //Now, validate the form
    if($validator->ValidateForm())
    {
        
		
		
				$fname=trim($_POST['Firstname']);
				$a=stripslashes($fname);
				$a=mysql_real_escape_string($a);
				
				
				$lname=trim($_POST['Lastname']);
				$b=stripslashes($lname);
				$b=mysql_real_escape_string($b);
				
				$email=trim($_POST['Email']);
				$c=stripslashes($email);
				$c=mysql_real_escape_string($c);
				
				
				$Mobile=trim($_POST['Mobile']);
				$d=stripslashes($Mobile);
				$d=mysql_real_escape_string($d);
				
				
				
				$dob=trim($_POST['DOB']);
				$e=stripslashes($dob);
				$e=mysql_real_escape_string($e);
				
				$pass=trim($_POST['Password']);
				$f=stripslashes($pass);
				$f=mysql_real_escape_string($f);
				
				
				$address=trim($_POST['Address']);
				$g=stripslashes($address);
				$g=mysql_real_escape_string($g);					
				
				
				$state=trim($_POST['State']);
				$h=stripslashes($state);
				$h=mysql_real_escape_string($h);
				
				$ct=trim($_POST['city']);
				$i=stripslashes($ct);
				$i=mysql_real_escape_string($i);	
				
				$date=date('Y-m-d');
				$time=date('h:m:s');
				
				
				
				
				
				
				
				
				$query_verify_email = "SELECT * FROM register  WHERE email ='$c' and isactive = 1";
		        $result_verify_email = mysqli_query($con,$query_verify_email);
     
   if (!$result_verify_email) {
            echo ' Syste Error! ';
        }

		
        if (mysqli_num_rows($result_verify_email) == 0) { 


            // Generate a unique code:
            $hash = md5(uniqid(rand(), true));


            $query_create_user = "INSERT INTO `register` ( `fname`, `lname`, `email`, `mobile`, `dob`, `password`, `address`, `state`, `city`, `hash`) VALUES ( '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$hash')";

		 $result_create_user = mysqli_query($con,$query_create_user);
            if (!$result_create_user) {
                echo 'Query Failed ';
            }
		
		 if (mysqli_affected_rows($con) == 1) { 


$subject = 'Activate Your Email';

$headers = "From: info@angeldesigning.com \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$url= BASE_PATH . '/verify.php?email=' . urlencode($c) . "&key=$hash";

$message ='<h1>NRIs.com</h1><h3>Registration Activate Link</h3><p>To activate your account please click on Activate buttton</p>';
$message.='<table cellspacing="0" cellpadding="0"> <tr>'; 
$message .= '<td align="center" width="300" height="40" bgcolor="#000091" style="-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; 

color: #ffffff; display: block;">';

$message .= '<a href="'.$url.'" style="color: #ffffff; font-size:16px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-decoration: none; 

line-height:40px; width:100%; display:inline-block">Click to Activate</a>';
$message .= '</td> </tr> </table>'; 

mail($email, $subject, $message, $headers);



                echo '<br><br><div class="sucess">A confirmation email
has been sent to <b>'. $email.' </b><br>Please click on the Activate Button to Activate your account </div><br>';


            } else { 
                echo '<div class="error">Error Occured</div>';
            }
		}
		else{
		echo '<div class="error">Email already registered</div>';}
				
				
				
				
				
				
		

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

<form class="form-horizontal" method="post" data-toggle="validator" role="form" onSubmit="return checkForm(this);" name="form" id="form">

<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:left;font-weight:bold;">First Name :*</label>
	<div class="col-sm-8">
		<input type="text" class="form-control" id="Firstname" name="Firstname" placeholder="Your First Name" style="width:100%;" required="required" />
	</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:left;font-weight:bold;text-align:right;">Last Name :*</label>
	<div class="col-sm-8">
		<input type="text" class="form-control" id="Lastname" name="Lastname" placeholder="Your Last Name" style="width:100%;" required="required"  />
	</div>
</div>
</div>



<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:left;font-weight:bold;">E-mail :*</label>
	<div class="col-sm-8">
		<input type="email" class="form-control" id="Email" name="Email" placeholder="Your E-mail" style="width:100%;" required="required"  />
	</div>
</div>
</div>



<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:left;font-weight:bold;font-size:12px;text-align:right;">Mobile Number :</label>
	<div class="col-sm-8">
		<input type="text" class="form-control" id="Mobile" name="Mobile" placeholder="Your Mobile Number" style="width:100%;" required="required" onkeypress='return event.charCode >= 48 && event.charCode <= 57' />
	</div>
</div>
</div>



<div class="col-md-6">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;font-weight:bold;">Date of Birth :*</label>
	<div class="col-sm-8">
		<input type="text" class="form-control" id="DOB" name="DOB" placeholder="Your Date of Birth" style="width:100%;" required="required"  />
	</div>
</div>
</div>

<div class="col-md-6"><div class="form-group" style="height:60px;"><label>&nbsp;</label></div></div>


<div class="col-md-6">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;font-weight:bold;">Password :*</label>
	<div class="col-sm-8">
		<input type="password" class="form-control" id="Password" name="Password" placeholder="Your Password" style="width:100%;margin-bottom:2px;" required="required"  />
		<span style="color:#FF0000;font-size:10px;"> 	*Enter minimum 8 chars with atleast 1 number, lower & special(@#$%&) characters       </span> 
	</div>
</div>
</div>



<div class="col-md-6">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;font-weight:bold;">Confirm Password :*</label>
	<div class="col-sm-8">
		<input type="password" class="form-control" id="CnfPassword" name="CnfPassword" placeholder="Confirm  Password" style="width:100%;" required="required"  />        
	</div>
</div>
</div>


<div class="col-md-12">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-2 control-label" style="text-align:left;font-weight:bold;">Address :</label>
	<div class="col-sm-10">
    <textarea rows="1" cols="40" style="width:100%;" name="Address" id="Address" required="required" ></textarea>
	</div>
</div>
</div>







            

<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:left;font-weight:bold;">State :*</label>
	<div class="col-sm-8">
		<input name="State1" class="State" id="state_auto" style="width:100%;" required="required" type="text">
		<input name="State" class="State" id="State" type="hidden" style="width:100%;">
	</div>
</div>
</div>




<div class="col-md-6">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;font-weight:bold;">City :*</label>
	<div class="col-sm-8">
		<input name="city" class="city" id="city_auto" style="width:100%;" required="required" type="text" placeholder="City">
		<input name="city" class="city" id="City" type="hidden" style="width:100%;">
	</div>
</div>
</div>



<div class="col-md-12">
<div class="form-group">
	<label for="inputPassword3" class="col-sm-12 control-label" style="text-align:left;">
		<input type="checkbox" name="terms" required="required">&nbsp;&nbsp;
		<a href="#" onMouseOver="this.style.color='Red'" onMouseOut="this.style.color='black'">I Accept Terms & Conditions</a></label>
</div>
</div>






<div class="form-group">
	<div class="col-sm-offset-2 col-sm-2">&nbsp;</div>
	<div class="col-sm-offset-2 col-sm-7">
		<?php
            include_once("fb_login/config.php");
            include_once("google_login/config.php");
            ?>
      
            <?php
                if(!$fbuser){
                    $fbuser = null;
                    $loginUrl = $facebook->getLoginUrl(array('redirect_uri'=>$homeurl,'scope'=>$fbPermissions));
                    echo '<a href="'.$loginUrl.'"><img src="img/login_fb.png" style="width:165px;height:45px;"></a>';    
                }
                ?>
                <!-- <a href="<?php echo SITE_BASE_URL.'/fb_login' ?>"><img src="img/login_fb.png" /></a> -->
           
            <?php
                $authUrl = $gClient->createAuthUrl();
                echo '<a href="'.$authUrl.'"><img src="google_login/images/glogin.png"  style="width:154px;height:85px;" alt=""/></a>';
            ?>
            
                <?php echo '<a href="twitter_login/process.php"><img style="width:129px;height:40px;" src="twitter_login/images/sign-in-with-twitter.png" border="0" /></a>'; ?>
            
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" class="button" name="Submit" id="Submit">Register</button> 

	</div>
</div>



<div class="form-group">
	<div class="col-sm-offset-2 col-sm-4" style="min-height:100px;">&nbsp;</div>
	<div class="col-sm-offset-2 col-sm-4" style="min-height:100px;">&nbsp;</div>
</div>

</form>

<?php } ?>	
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
    
    	<!--<a href="#" onClick="popup('popUpDiv')" >X</a>-->
       
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
<p> <input type="checkbox" value="y" id="chkAll" checked disabled readonly>&nbsp; I Accept Terms & Conditions.&nbsp;&nbsp;&nbsp;<button onClick="popup('popUpDiv')" class="btn btn-success" style="">Submit</button></span></p>



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