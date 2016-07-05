<?php error_reporting(0);  include"config/connection.php";	   ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head><base href="/">

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Forgot Password | NRIs</title>
	<meta name="description" content="NRIs">
	<meta name="author" content="NRIs"><?php include_once('tracking.php');?>
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="img/favicon.png">
	<!-- Main Style -->
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Skins -->
	
	
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
    
    <link rel="stylesheet" href="css/animate-custom.css">    
    
    	<link rel="stylesheet" href="css/tab/style.css"> <!-- Resource style -->
	<script src="js/tab/modernizr.js"></script> <!-- Modernizr -->
  <!--[if !IE]><!-->
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


<style type="text/css">
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
</style>

<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->
<script type="text/javascript" src="js/1.4.2_jquery.min.js"></script>



<script type="text/javascript">

  function checkForm(form)
  {
   
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
<body>

<div class="loader"><div class="loader_html"></div></div>



	<?php include "config/menu.php" ;  ?>
	
	<div class="clearfix"></div>

    
		<?php include_once('stock_block.php');?>
	

     <?php include_once('top_container_links.php');?>
     
    
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
    $validator->addValidation("Email","email","The input for Email should be a valid email value");
    //Now, validate the form
    if($validator->ValidateForm())
    {
        
				$email=trim($_POST['Email']);
				$c=stripslashes($email);
				$c=mysql_real_escape_string($c);
				
				$query_verify_email = "SELECT * FROM register  WHERE email ='$c' and isactive = 1";
		        $result_verify_email = mysqli_query($con,$query_verify_email);
     
   if (!$result_verify_email) {
            echo ' Syste Error! ';
        }

		
        if (mysqli_num_rows($result_verify_email) > 0) { 

			
		
		 if (mysqli_affected_rows($con) == 1) { 


$subject = 'Forgot Password';

$headers = "From: kbknaidu@gmail.com \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$url= BASE_PATH . '/verify?email=' . urlencode($c) . "&key=$hash";
$row = mysqli_fetch_array($result_verify_email, MYSQLI_ASSOC);
$message ='<h1>NRIs.com</h1><h3>Forgot Password</h3><p>To login please use this password : '.$row['password'].'</p>';

mail($email, $subject, $message, $headers);



                echo '<br><br><div class="sucess">A email
has been sent to <b>'. $email.' </b><br>Please check and login with the sent details </div><br>';


            } else { 
                echo '<div class="error">Error Occured</div>';
            }
		}
		else{
		echo '<div class="error">Email not registered</div>';}
				
				
				
				
				
				
		

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

<div class="col-md-12">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:left;font-weight:bold;">E-mail :*</label>
	<div class="col-sm-8">
		<input type="email" class="form-control" id="Email" name="Email" placeholder="Your E-mail" style="width:100%;" required="required"  />
	</div>
</div>
</div>


<div class="form-group">
	<div class="col-sm-offset-2 col-sm-2">&nbsp;</div>
	<div class="col-sm-offset-2 col-sm-7">
        <button type="submit" class="button" name="Submit" id="Submit">Send</button> 

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
	
	$('#state_auto').keyup(function(e){if(e.keyCode == 8)$('#state_auto, #State').val('');})
	$('#city_auto').keyup(function(e){if(e.keyCode == 8)$('#city_auto, #City').val('');})  
  });
  </script>  

<?php include "config/social.php" ;  ?>

</body>
</html>