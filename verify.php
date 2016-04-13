<?php
include"config/connection.php";	
if(isset($_POST['cmdLoginbtn']))
	{
			$email = $_POST['Loginemail'];
			$pass = $_POST['LoginPassword'];
			
			if(isset($_POST['remember'])) {
				$time = time();
				setcookie('remember_me', true,$time*100);
				setcookie('username', $email,$time*100);
				setcookie('password', $pass,$time*100);
				
			} else {
				setcookie('remember_me', false,$time*100);
				setcookie('username', '',$time*100);
				setcookie('password', '',$time*100);
			}
			$current_URL = trim($_POST['currentURL']);
		//	echo $current_URL;
			$Lquery="select * from register where email ='".$email."' and password='".$pass."' and isactive = 1";
		//	echo $Lquery;
		//	exit;
			$Lresult=mysql_query($Lquery);
			$Lrow=mysql_num_rows($Lresult);
			if($Lrow>0)
			{
				echo '<center><img src="img/loading.gif"></center>'	;				

				$Lrow=mysql_fetch_array($Lresult);
				$_SESSION['Nris_session']=$Lrow;					
				if($current_URL!='')		
				{
					echo "<script language='javascript' type='text/javascript'>document.location='".$current_URL."';</script>";
					exit; 

				}
				else
				{
					echo "<script language='javascript' type='text/javascript'>document.location='index.php';</script>";
					exit; 
				}	
			}
			else
			{
				echo '<br><br><div class="error">Invalid/Username or Password. &nbsp;<a href="#"  data-toggle="modal" data-target="#myModal">Login Here</a></div>';
			}
	} else { 
?>

<?php
   $email = trim(mysql_escape_string($_GET['email']));

    $key = trim(mysql_escape_string($_GET['key']));


$query_verify_email = "SELECT * FROM register  WHERE email ='$email' and isactive = 1";
        $result_verify_email = mysqli_query($con,$query_verify_email);

if (mysqli_num_rows($result_verify_email) == 1)
    {
    echo '<div class="success">Your Account already exists. Please <a href="#"  data-toggle="modal" data-target="#myModal">Login Here</a></div>';

    }
else
{

if (isset($email) && isset($key))
{


   mysqli_query($con, "UPDATE register SET isactive=1 WHERE email ='".$email."' AND hash='".$key."' ") or die(mysql_error());

    if (mysqli_affected_rows($con) == 1)
    {
    echo '<div class="success">Your Account has been activated. Please <a href="#"  data-toggle="modal" data-target="#myModal">Login Here</a></div>';

    } else
    {
        echo '<div class="error">Account couldnot be activated.</div>';

    }
}
    mysqli_close($con);

} 

}
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>User Verify | NRIs</title>
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
padding:15px;
color:#FFFFFF;
width:100%;
font-weight:bold;
}
.error a
{
	color:#FFFF00;
}
.error a:hover
{
	color:#FFCC33;
}

.success
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

</style>    
</head>
<body>

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
        <div class="col-md-2 inner-left">
        	<div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            
        </div><!-- COLUMN LEFT ENDS -->	
        
        <!-- COLUMN MIDDLE -->	
        <div class="col-md-8 inner-middle-wrap">
        
        	<!-- TOP ADVERTISE -->
            <!-- TOP ADVERTISE END-->
            
            
            <!-- TOP BUTTONS -->
           
            <!-- TOP BUTTONS ENDS-->
            
            <!-- FIRST TABLE -->
            <div class="col-md-12" style="text-align:left;color:#000000;"> 
   				

                   
	                     
                       <br><h5 class="myheadline4">User Verify</h5>




<p class="mydata">






</p>
<br>
					
			
            </div>
            <!-- TOP BUTTONS ENDS-->
            
            
        </div><!-- COLUMN MIDDLE ENDS -->	
        
        
        
        
        
        
        <!-- COLUMN RIGHT -->	
        <div class="col-md-2 inner-right">
        	<div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            <div class="inner-left-ad-wrap">
            	<img src="img/2_x_1-ad.jpg" alt="Advertisement">
            </div>
            
        </div><!-- COLUMN RIGHT ENDS -->	
			
            

               
               
               
                 
                    
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

<?php include "config/social.php" ;  ?>

</body>
</html>