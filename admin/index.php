<?php session_start(); error_reporting(0);
include"config/connection.php";

  if(isset($_SESSION['USNRIs_session']))
	  
	   {
	      header('location:dashboard.php');
		  exit;
	   }


if(isset($_POST['cmdsubmit']))
{

$myusername=trim($_POST['Username']);
$mypassword=trim($_POST['Password']); 
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$cat=trim($_POST['userrole']); 
   $query="select * from login where username='".$myusername."' and password='".$mypassword."' and category='".$cat."'";

   $result=mysql_query($query);
   $fs=mysql_fetch_array($result);
   
   if(mysql_num_rows($result) > 0)   
   {
   			
			if($cat=='Admistrator')
			{
			
			
				$q="select * from login where username ='".$myusername."' and password='".$mypassword."' and category='".$cat."'";
				$res=mysql_query($q);
				$rs=mysql_fetch_array($res);
				$_SESSION['USNRIs_session']=$rs;					
				echo "<script language='javascript' type='text/javascript'>document.location='dashboard.php';</script>";
				exit; 
		   }
			
			
			
			
			
			if($cat=='Director')
			{
			
			
				$q="select * from login where username ='".$myusername."' and password='".$mypassword."' and category='".$cat."'";
				$res=mysql_query($q);
				$rs=mysql_fetch_array($res);
				$_SESSION['USNRIs_session']=$rs;					
				echo "<script language='javascript' type='text/javascript'>document.location='dashboard.php';</script>";
				exit; 
		   }
		   
		   
		   if($cat=='Manager')
			{
			
			
				$q="select * from login where username ='".$myusername."' and password='".$mypassword."' and category='".$cat."'";
				$res=mysql_query($q);
				$rs=mysql_fetch_array($res);
				$_SESSION['USNRIs_session']=$rs;					
				echo "<script language='javascript' type='text/javascript'>document.location='dashboard.php';</script>";
				exit; 
		   }
		   
		   if($cat=='Clerk')
			{
			
			
				$q="select * from login where username ='".$myusername."' and password='".$mypassword."' and category='".$cat."'";
				$res=mysql_query($q);
				$rs=mysql_fetch_array($res);
				$_SESSION['USNRIs_session']=$rs;					
				echo "<script language='javascript' type='text/javascript'>document.location='dashboard.php';</script>";
				exit; 
		   }
		   
		   
		  
		   
	}
   else
   {
       $msg='Username or Password Incorrect, Try Again...';
   }

}




?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>  
        <!-- META SECTION -->
        <title>NRIs.com</title>            
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
		if (document.getElementById('Username').value=='')
		{
			alert('Please Enter User Name');			
			document.getElementById('Username').focus();
			return false;
		}
		
		if (document.getElementById('Password').value=='')
		{
			alert('Please Enter Password');			
			document.getElementById('Password').focus();
			return false;
		}	
		
		if (document.getElementById('userrole').value=='None')
		{
			alert('Please Select User Role for Login');			
			document.getElementById('userrole').focus();
			return false;
		}		
		return true;
	}
</script>                                         
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logomain"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Log In</strong> to your account</div>
                    <form class="form-horizontal" method="post" onSubmit="return frmchk();">
                    <div class="form-group">
                     <?php if($msg!='')
					    {
						    echo "<h5 style='color:#FFFFFF;font-weight:bold;text-align:center;'><i class='fa fa-exclamation-triangle'  style='color:#FFCC33'></i>&nbsp;".$msg."</h5>";
					    }?>
                    
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Username" name="Username" id="Username"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Password" name="Password" id="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                             <select class="form-control select" name="userrole" id="userrole" style="background-color:#3a444e;">
                                <option value="None">Select User Role</option>
                                <option value="Admistrator">Admistrator</option>
                                <option value="Director">Director</option>
                                <option value="Manager">State Manager</option>
                                <option value="Clerk">Data Entry Engineer</option>
                            </select>
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="forgot_password.php" class="btn btn-link btn-block">Forgot your password?</a>
                            &nbsp;
                        </div>
                        <div class="col-md-6">
                            <input type="submit" value="Login" class="btn btn-info btn-block" name="cmdsubmit" id="cmdsubmit">
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2015 NRIs.com
                    </div>
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






