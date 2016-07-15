<?php session_start(); error_reporting(0);
include"config/connection.php";

  if(isset($_SESSION['USNRIs_session']))
	  
	   {
	      header('location:dashboard.php');
		  exit;
	   }





if(isset($_POST['submitform'])){

$to_query = "select email from  login where category='Admistrator' limit 1";
$to_result = mysql_query($to_query);
$to_row = mysql_fetch_array($to_result);
//echo $to_row[0];



DEFINE('BASE_PATH', 'http://www.nris.com/admin/');

$email = trim(mysql_escape_string($_POST['email']));


  $query_verify_email = "SELECT * FROM login  WHERE email ='$email'";

//  echo $query_verify_email ;
        $result_verify_email = mysql_query($query_verify_email);
     
   if (!$result_verify_email) {
            echo '<h1>Not Found - Error!</h1>';
        }

		
        if (mysql_num_rows($result_verify_email) > 0) { 


            // Generate a unique code:
            $hash = md5(uniqid(rand(), true));


          //  $query_create_user = "INSERT INTO `register` ( `name`, `email`, `password`, `hash`) VALUES ( '$name', '$email', '$password', '$hash')";
		    $query_create_user = "update login set  hash = '".$hash."' where email = '".$email."'";

		 $result_create_user = mysql_query($query_create_user);
            if (!$result_create_user) {
                echo 'Query Failed ';
            }
		
		
		$restults = mysql_query("select * from login where email = '".$email."'");
		$row = mysql_fetch_array($restults);
	//	echo $row['username'];
	//	exit;
			
		 if (mysql_affected_rows() == 1) { 
			
			
			

$subject = 'Activate Your Email';

$headers = "From: kbknaidu@gmail.com \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$url= BASE_PATH . 'set_password.php?email=' . urlencode($email) . "&key=$hash";

$message ='<p>To activate your account please click on Reset Password buttton</p><br>';
$message .="<p>Full Name : ".ucwords($row['full_name'])."</p>";
$message .="<p>Username : ".$row['username']."</p><br>";

$message.='<table cellspacing="0" cellpadding="0"> <tr>'; 
$message .= '<td align="center" width="300" height="40" bgcolor="#000091" style="-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; 

color: #ffffff; display: block;">';

$message .= '<a href="'.$url.'" style="color: #ffffff; font-size:16px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-decoration: none; 

line-height:40px; width:100%; display:inline-block">Click to Reset Password</a>';
$message .= '</td> </tr> </table>'; 


//$to='angelwebsupport@gmail.com';
$to = 'sudakbk@gmail.com';//$to_row[0];


mail($to, $subject, $message, $headers);



               echo '<div class="success">A confirmation email
has been sent to <b>'. $to.' </b><br>Please click on the Link to Reset your Password</div>';




            } else { 
                echo '<div class="error">Error Occured</div>';
            }
		}
		else{
		echo '<div class="error">Email Not Found - Try Again</div>';}
		}


	else{
		echo '<div class="error">Error - Try Again</div>';}



?>

<html>
<head>
<link rel="stylesheet" href="css/mystyle.css" />
</head>
<body>
</body>
</html>