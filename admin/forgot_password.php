<?php session_start(); error_reporting(0);
include"config/connection.php";

  if(isset($_SESSION['USNRIs_session']))
	  
	   {
	      header('location:dashboard.php');
		  exit;
	   }


?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Forgot Password | NRIs.com</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="img/favicon.png" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->   

<script language="javascript" type="text/javascript">

function frmchk()
{
	
	if (document.getElementById('email').value=='')
		{
			alert('Please Enter your E-mail Id');			
			document.getElementById('email').focus();
			return false;
		}
		else if(!chkemail())
		{
			return false;
		}	
		
		checkUser_main();
	
	return true;

}

function chkemail()
{
var status = false;     
var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
     if (document.getElementById('email').value.search(emailRegEx) == -1) 
	 {
          alert("Please enter a valid E-mail address.");
		  document.getElementById('email').value='';
		  document.getElementById('email').focus();
		  
     }
    
     else {    	    
          status = true;
     }
     return status;
}

</script>
                                         
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
               <div class="login-logomain"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Forgot </strong>Password</div>
                    <form action="forgot_password_details.php" class="form-horizontal" method="post" onSubmit="return frmchk();">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="E-mail" name="email" id="email"/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="index.php" class="btn btn-link btn-block">Login Now</a>                        </div>
                        <div class="col-md-6">
                            <input type="submit" value="Send Password" class="btn btn-info btn-block" name="submitform" id="submitform">
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2015 NRIs.com                    </div>
                    <?php /*?><div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div><?php */?>
                </div>
            </div>
            
        </div>
        
    </body>
</html>






