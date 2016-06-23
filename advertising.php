<?php error_reporting(0);  include"config/connection.php";	   ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head><base href="/">

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Advertise with Us | NRIs</title>
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

</style>
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>



	<?php if(isset($defaultState) && $defaultState != '') { ?>
		<?php include "config/menu_inner_state.php" ;  ?>
	<?php } else { ?>
		<?php include "config/menu_home.php" ;  ?>
	<?php } ?>
	
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
	<h4><a href="<?php echo $siteUrlConstant;?>" style="color:#0033FF;">Home</a>  >>  Advertise with Us</h4>
</div><br>




		
            
<?php
require_once "config/formvalidator.php";

$show_form=true;

if(isset($_POST['Submit']))
{// The form is submitted

    //Setup Validations
    $validator = new FormValidator();
    $validator->addValidation("Firstname","req","Please Enter your First Name");
	$validator->addValidation("Lastname","req","Please Enter your Last Name");
	$validator->addValidation("Business","req","Please Enter your Business");	
    $validator->addValidation("Email","email","The input for Email should be a valid email value");
    $validator->addValidation("Email","req","Please fill in Email");
	$validator->addValidation("Message","req","Please Enter your Message");		
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
				
				$full = ucfirst($a)." ".ucfirst($b);
				
				$business=trim($_POST['Business']);
				$c=stripslashes($business);
				$c=mysql_real_escape_string($c);
				
				$email=trim($_POST['Email']);
				$d=stripslashes($email);
				$d=mysql_real_escape_string($d);
				
				$web=trim($_POST['Website']);
				$e=stripslashes($web);
				$e=mysql_real_escape_string($e);
				
				$ph=trim($_POST['Phone']);
				$f=stripslashes($ph);
				$f=mysql_real_escape_string($f);
				
				
				$msg=trim($_POST['Message']);
				$msg=stripslashes($msg);
				$msg=mysql_real_escape_string($msg);				
					
		
		
		
			if (empty($_FILES['my_file']['name'])) {
 			  //  Withou Attachment Mail Start
				$to ='admin@nris.com';	
				$from = 'kbknaidu@gmail.com';	
				$subject = 'Advertise with Us';	
			
			   $body = "Name : $full\r\nBusiness : $c\r\nEmail :  $d\r\nWebsite : $e\r\nPhone : $f\r\nMessage:  $msg\r\n";
				mail($to, $subject, $body, "From: $from");
	
				 //  Withou Attachment Mail End		
		}
		else
		{
			
			
					$from_email = 'kbknaidu@gmail.com'; //sender email
					$recipient_email = 'admin@nris.com'; //recipient email
					$subject = 'Advertise with Us'; //subject of email
					$message = "Name : $full\r\nBusiness : $c\r\nEmail :  $d\r\nWebsite : $e\r\nPhone : $f\r\nMessage:  $msg\r\n";
   
					//get file details we need
					$file_tmp_name    = $_FILES['my_file']['tmp_name'];
					$file_name        = $_FILES['my_file']['name'];
					$file_size        = $_FILES['my_file']['size'];
					$file_type        = $_FILES['my_file']['type'];
					$file_error       = $_FILES['my_file']['error'];
				   
					$user_email = filter_var($_POST["Email"], FILTER_SANITIZE_EMAIL);
				
					if($file_error>0)
					{
						die('upload error');
					}
					//read from the uploaded file & base64_encode content for the mail
					$handle = fopen($file_tmp_name, "r");
					$content = fread($handle, $file_size);
					fclose($handle);
					$encoded_content = chunk_split(base64_encode($content));
				
				
						$boundary = md5("sanwebe");
						//header
						$headers = "MIME-Version: 1.0\r\n";
						$headers .= "From:".$from_email."\r\n";
						$headers .= "Reply-To: ".$user_email."" . "\r\n";
						$headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";
					   
						//plain text
						$body = "--$boundary\r\n";
						$body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
						$body .= "Content-Transfer-Encoding: base64\r\n\r\n";
						$body .= chunk_split(base64_encode($message));
					   
						//attachment
						$body .= "--$boundary\r\n";
						$body .="Content-Type: $file_type; name=\"$file_name\"\r\n";
						$body .="Content-Disposition: attachment; filename=\"$file_name\"\r\n";
						$body .="Content-Transfer-Encoding: base64\r\n";
						$body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
						$body .= $encoded_content;
						
				   
					mail($recipient_email, $subject, $body, $headers);
					
			
			
		}
		
				$fname=trim($_POST['Firstname']);
				$a=stripslashes($fname);
				$a=mysql_real_escape_string($a);
				
				
				$lname=trim($_POST['Lastname']);
				$b=stripslashes($lname);
				$b=mysql_real_escape_string($b);
				
				$full = ucfirst($a)." ".ucfirst($b);
				
				$business=trim($_POST['Business']);
				$c=stripslashes($business);
				$c=mysql_real_escape_string($c);
				
				$email=trim($_POST['Email']);
				$d=stripslashes($email);
				$d=mysql_real_escape_string($d);
				
				$web=trim($_POST['Website']);
				$e=stripslashes($web);
				$e=mysql_real_escape_string($e);
				
				$ph=trim($_POST['Phone']);
				$f=stripslashes($ph);
				$f=mysql_real_escape_string($f);
				
				
				$msg=trim($_POST['Message']);
				$msg=stripslashes($msg);
				$msg=mysql_real_escape_string($msg);				
					
				
				
				$round=rand(1000,100000);
				
				$image=$round."_".$_FILES['my_file']['name'];
				$img="admin/img/Advertise/".$image;
				move_uploaded_file($_FILES['my_file']['tmp_name'],$img);
				$img=$_FILES['my_file']['name'];	
					
				
				$date=date('Y-m-d');
				$time=date('h:m:s');
				
								
				
		
		 $query="insert into advertise_with_us(fname,lanem,business,email,website,phone,image,message,date,time) values('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$image."','".$msg."','".$date."','".$time."')";		 
		 $result=mysql_query($query);
		 
        echo "<div class='sucess'>Success! Your message has been recieved We will contact you soon. !</div>";
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
<form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">

<div class="col-md-6">
<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:left;">First Name</label>
	<div class="col-sm-8">
		<input type="text" class="form-control" id="Firstname" name="Firstname" placeholder="Your First Name" style="width:100%;" tabindex="1" />
	</div>
</div>
<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Business</label>
	<div class="col-sm-8">
		<input type="text" class="form-control" id="Business" name="Business" placeholder="Your Business Name" style="width:100%;" tabindex="3" />
	</div>
</div>

<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Website</label>
	<div class="col-sm-8">
		<input type="text" class="form-control" id="Website" name="Website" placeholder="Your Business Website" style="width:100%;" tabindex="5" />
	</div>
</div>

<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Image (If any)</label>
	<div class="col-sm-8">
		<input type="file" class="form-control" id="my_file" name="my_file" placeholder="" tabindex="7" />
	</div>
</div>


<div class="form-group">
	<label for="inputPassword3" class="col-sm-4 control-label" style="text-align:left;">Message</label>
	<div class="col-sm-8">
    <textarea rows="5" cols="40" style="width:100%;" name="Message" id="Message" tabindex="8"></textarea>
	</div>
</div>



</div>


<div class="col-md-6">
            


<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:left;">Last Name</label>
	<div class="col-sm-8">
		<input type="text" class="form-control" id="Lastname" name="Lastname" placeholder="Your Last Name" style="width:100%;" tabindex="2" />
	</div>
</div>


<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:left;">E-mail</label>
	<div class="col-sm-8">
		<input type="text" class="form-control" id="Email" name="Email" placeholder="Your E-mail" style="width:100%;" tabindex="4" />
	</div>
</div>


<div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:left;font-size:13px;">Phone Number</label>
	<div class="col-sm-8">
		<input type="text" class="form-control" id="Phone" name="Phone" placeholder="Your Phone Number" style="width:100%;" tabindex="6" />
	</div>
</div>



<div class="form-group">
	<div class="col-sm-offset-2 col-sm-4" style="min-height:100px;">&nbsp;</div>
	<div class="col-sm-offset-2 col-sm-4" style="min-height:100px;">&nbsp;</div>
</div>



<div class="form-group">
	<div class="col-sm-offset-2 col-sm-2">&nbsp;</div>
	<div class="col-sm-offset-2 col-sm-7">
		<a href="<?php echo $siteUrlConstant;?>advertising" class="button" style="background-color:#CD3232;" tabindex="10">Cancel</a>
		<button type="submit" class="button" name="Submit" tabindex="9">Save</button>
	</div>
</div>



            </div>

</form>

<?php } ?>					
			
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

<?php include "config/social.php" ;  ?>

</body>
</html>