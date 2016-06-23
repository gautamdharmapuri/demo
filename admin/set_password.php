<?php session_start(); error_reporting(0);
include"config/connection.php";

  if(isset($_SESSION['USNRIs_session']))
	  
	   {
	      header('location:dashboard.php');
		  exit;
	   }

 	$email = trim(mysql_escape_string($_GET['email']));
    $key = trim(mysql_escape_string($_GET['key']));

?>

<?php
if(isset($_POST['cmdsetpass']))
{ 
			$mypassword=trim($_POST['Password']); 
			$mypassword = stripslashes($mypassword);
			$mypassword = mysql_real_escape_string($mypassword);
			
			
			$email=trim($_POST['mymail']); 
			$key=trim($_POST['mykey']); 
			
			$date = date("Y-m-d");
			$time = date("h:m:s");	
			
			$query=mysql_query("update login set password='".$mypassword."',date='".$date."',time='".$time."' where hash='".$_POST['mykey']."'");
			if($query)
			{
				$msg = "<h3 class='sucess'>User Details Updated Successfully!..</h3>";				
			}
}
?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head><base href="/">        
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
		if (document.getElementById('Password').value=='')
		{
			alert('Please Enter New Password');			
			document.getElementById('Password').focus();
			return false;
		}
		
		if (document.getElementById('RPassword').value=='')
		{
			alert('Please Re- Enter Password');			
			document.getElementById('RPassword').focus();
			return false;
		}	
		
		p1 = document.getElementById('Password').value;
		p2 = document.getElementById('RPassword').value;		
		if(p1!=p2)
		{
			alert('Password Mismatch| Try Again.');			
			document.getElementById('Password').value='' ;
			document.getElementById('RPassword').value='' ;
			
			document.getElementById('Password').focus();
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
                <?php 

$query_verify_email = "SELECT * FROM login  WHERE email ='$email'";
//echo $query_verify_email;
$result_verify_email = mysql_query($query_verify_email);
$rs=mysql_fetch_array($result_verify_email);
	if(mysql_num_rows($result_verify_email)>0) {

?>

                
                <div class="login-body">
                    <div class="login-title"><strong>Reset</strong> Password</div>
                   
                    <form class="form-horizontal" method="post" onSubmit="return frmchk();">
                    <div class="form-group">
                    
                      <?php if($msg!='')
					    {
						    echo "<h5 style='color:#FFFFFF;font-weight:bold;text-align:center;'>".$msg."</h5>";
					    }?>
                        <h5 style="color:#FFFFFF;margin-left:15px;">Name : <?php echo ucwords($rs['full_name']); ?></h5>
                        <h5 style="color:#FFFFFF;margin-left:15px;">Username : <?php echo $rs['username']; ?></h5>                        
                        <h5 style="color:#FFFFFF;margin-left:15px;">E-mail : <?php echo strtolower($rs['email']); ?></h5>
                        <h5 style="color:#FFFFFF;margin-left:15px;">User Role : <?php echo ucwords($rs['category']); ?></h5>                                                                        
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="New Password" name="Password" id="Password"/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Re-Password" name="RPassword" id="RPassword"/>
                        </div>
                    </div>
                    
                    
                    
                    <div class="form-group">                        
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                        	<input type="hidden" name="mymail" id="mymail" value="<?php echo $email ;  ?>">
                        	<input type="hidden" name="mykey" id="mykey" value="<?php echo $key ;  ?>">                            
                            <input type="submit" value="Reset Password" class="btn btn-info btn-block" name="cmdsetpass" id="cmdsetpass">
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    </form>
                    
                  
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2015 NRIs.com
                    </div>   
                    
<?php } else {  ?>  
<center><h1 style="color:#FFFFFF;">Opps. Try Again.</h1></center>
<?php } ?>

                                   
                </div>
            </div>
            
        </div>
        
    </body>
</html>