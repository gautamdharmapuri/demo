<?php error_reporting(0);  include"config/connection.php";	  


if(isset($_GET['State']))
{
	$_SESSION['state']=$_GET['State'];
}
else
{
	$_SESSION['state']=$_SESSION['state'];
	
}


if(isset($_GET['ViewId']))
{
	$_SESSION['ViewId']=$_GET['ViewId'];
}
else
{
	$_SESSION['ViewId']=$_SESSION['ViewId'];
	
}

//	echo $_SESSION['state'];
 ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title><?php echo $_SESSION['state'];  ?> My Partner Ad View | NRIs</title>
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


.polaroid img {
  border: 10px solid #fff;
  border-bottom: 45px solid #fff;
  -webkit-box-shadow: 3px 3px 3px #777;
     -moz-box-shadow: 3px 3px 3px #777;
          box-shadow: 3px 3px 3px #777;
}
th
{
background-color:#f1f5f9;
color:#56688a;
font-size:12px;
}
</style>    
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>



		<?php   include "config/menu_inner_state.php" ;  ?>
	
	<div class="clearfix"></div>

    
		<?php include_once('stock_block.php');?>
     

     
    
<!-- Section-1 WRAP START-->	
<div class="section-1-wrap">	
<!-- Section-1 START-->	
		<div class="section-1">
        
        <?php
if(isset($_POST['cmdcomment']))	
{

		$postId = $_POST['postId'];
		$mId = $_POST['memberId'];
		
		$msg = trim($_POST['Message']);
		$a = stripslashes($msg);
		$a = mysql_real_escape_string($a);
		
		
		$query_cmt = "insert into  mypartner_comment(blog_id,member_id,comment,cmnt_date,cmnt_time)
		values('".$postId."','".$_SESSION['Nris_session']['id']."','".$a."','".date('Y-m-d')."','".date('h:i:s')."')";
		//echo $query_cmt;exit;
		$result=mysql_query($query_cmt);
		echo "<script language='javascript' type='text/javascript'>alert('Your Comment Posted sucsessfully');</script>";		 
		header("location:mypartner_inner_view.php?ViewId='".md5($postId)."'");
		
		/* Sending Notification mail starts here */
			$query_user = "SELECT * FROM register WHERE id = ".$mId;
			$result_user = mysql_query($query_user);
			$result_user = mysql_fetch_array($result_user);
			
			$email = $result_user['email'];
			$name = $result_user['fname'].' '.$result_user['lname'];
			
			$subject = 'Comment to your Post';
			$headers = "From: kbknaidu@gmail.com \r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$url = BASE_PATH . '/mypartner_inner_view.php?ViewId=' . md5($postId);
			
			$message ='<h1>NRIs.com</h1><h3>Notification Mail</h3><p> Dear '.$name.'<br>Someone has commented to your post.</p>';
			$message.='<table cellspacing="0" cellpadding="0"> <tr>'; 
			$message .= '<td align="center" width="300" height="40" bgcolor="#000091" style="-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; color: #ffffff; display: block;">';
			$message .= '<a href="'.$url.'" style="color: #ffffff; font-size:16px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-decoration: none; 
			line-height:40px; width:100%; display:inline-block">Click to View</a>';
			$message .= '</td> </tr> </table>';
			mail($email, $subject, $message, $headers);
		/* Sending Notification mail ends here */
}
?>
        
        <!-- COLUMN LEFT -->	
        <?php include_once('state_common_left.php');?><!-- COLUMN LEFT ENDS -->	
        
        <!-- COLUMN MIDDLE -->	
        <div class="col-md-8 inner-middle-wrap">
        
        	<!-- TOP ADVERTISE -->
            <!-- TOP ADVERTISE END-->
            
            
            <!-- TOP BUTTONS -->
           
            <!-- TOP BUTTONS ENDS-->
            
            <!-- FIRST TABLE -->
            <div class="col-md-12" style="text-align:left;color:#000000;"> 

        <?php
			$query="select a.*, b.name from post_free_mypart a,  my_partner b where a.Category = b.id and md5(a.id) = '".$_GET['ViewId']."'"; 
			$result=mysql_query($query);
			$rs=mysql_fetch_array($result);	
			$total_views = $rs['total_views'] + 1 ;
			mysql_query("update post_free_mypart set total_views='".$total_views."' where md5(id) = '".$_GET['ViewId']."'");
			
			$query2 = "select city from cities where id = ".$rs['City'];
				$result2 = mysql_query($query2);
				$rs2 = mysql_fetch_array($result2);
				$cityName = $rs2['city'];
			
			
						if($rs['Address'] != '') {
							$addArr[] = $rs['Address'];
						}
						if($cityName != '') {
							$addArr[] = $cityName;
						}
						if($rs['States'] != '' && strtolower($rs['States']) != 'all' && strtolower($rs['States']) != 'multiple') {
							$query2="select state from states where state_code = '".$rs['States']."'"; 
							$result2=mysql_query($query2);
							$rs2=mysql_fetch_array($result2);
							$addArr[] = $rs2['state'];
						}
						$addArr[] = 'United States';
						
						$address = urldecode(implode(', ',$addArr));
			?>               
                       
        <div class="widget-temple">
	<h4><a href="state.php?State=<?php echo $state;?>" style="color:#0033FF;">Home</a> >> My Partner</h4>
 <?php
if(isset($_SESSION['Nris_session']))	  
{ ?>
<a href="mypartner_create.php?code=<?php echo $_SESSION['state'] ?>&type=premium"  class="btn btn-default" style="background-color:#0000FF;color:#FFFFFF;float:right;">Create Premium Post <img src="images/New_icon2.gif"></a>    
<a href="mypartner_create.php?code=<?php echo $_SESSION['state'] ?>"  class="btn btn-default" style="background-color:#990033;color:#FFFFFF;float:right;">Create Free Post <img src="images/arrow.gif"></a>    
 <?php } else { ?> 
<a href="#"  data-toggle="modal" data-toggle="modal" data-target="#myModal" class="btn btn-default" style="background-color:#990033;color:#FFFFFF;float:right;" >Create Premium Ad&nbsp;<img src="images/New_icon2.gif"></a>   
<a href="#"  data-toggle="modal"  data-toggle="modal" data-target="#myModal"  class="btn btn-default" style="background-color:#0000FF;color:#FFFFFF;float:right;" >Create Free Post Ad&nbsp;<img src="images/arrow.gif"></a>
<?php } ?>  
</div><br>
                       
                  <div class="col-md-12" >
			<?php for($k=1;$k<16;$k++) { ?>
				<div class="col-md-3" >
					<?php
						$tempVar = $k;
						if($rs['image'.$tempVar] != '') { ?>
							<div class="col-sm-12">
								<a href="javascript:;">
									<img class="myImageClass" src="<?php echo 'uploads/my_partner/'.$rs['image'.$tempVar];?>" style="width:100%;height:140px;">
								</a>
							</div>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
            
			<div class="col-md-7" style="padding-top: 10px;">
				
        <table class="table table-bordered">
                                       
                                     <thead>
                                       		<tr>
                                       		<th>Title</th>                                         
                                             <th> <?php    echo ucwords($rs['TitleAD']);   ?> </th>
                                         	</tr>
                                     </thead>
                                     
                                     <thead>
                                       		<tr>
                                       		<th>Description</th>                                         
                                             <th> <?php    echo ucfirst($rs['Message']);   ?> </th>
                                         	</tr>
                                     </thead>
                                     
                                     <thead>
                                       		<tr>
                                       		<th>Ad Category</th>                                         
                                             <th> <?php    echo ucwords($rs['name']);   ?> </th>
                                         	</tr>
                                     </thead>
                                    
                                    <thead>
                                       		<tr>
                                       		<th>Contact Name</th>                                         
                                             <th> <?php    echo ucwords($rs['ConatctNAME']);   ?> </th>
                                         	</tr>
                                       </thead>
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Contact Number</th>  
                                            <th>   
                                              <?php
                                                if(isset($_SESSION['Nris_session']))	  
                                                {
													?>
													<a class="call_link" href="tel:<?php echo $rs['ConatctNumber']; ?>"><?php echo ucwords($rs['ConatctNumber']); ?></a>
												<?php
												} else { ?>
											 <a href=""  data-toggle="modal" data-target="#myModal" style="color:#990000;" >Click Here to View</a>
											 <?php } ?> </th>                                                                                   
                                         	</tr>
                                       </thead>
                                       
                                       
                                      
                                       
                                    
                                         <?php  if($rs['ShowEmail']=='Yes') { ?>
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Email</th> 
                                             <th> 
												<?php
                                                if(isset($_SESSION['Nris_session']))	  
                                                { echo strtolower($rs['ConatctEmail']);  } else { ?>
											 <a href=""  data-toggle="modal" data-target="#myModal" style="color:#990000;" >Click Here to View</a>
											 <?php } ?> </th>                                                                                     
                                         	</tr>
                                       </thead>
                                   <?php } ?>  
                                   
                                        
                                     <thead>
                                       		<tr>
                                       		<th>City</th>                                         
                                             <th> <?php    echo ucwords($cityName);   ?> </th>
                                         	</tr>
                                     </thead>
                                     
                                     <thead>
                                       		<tr>
                                       		<th>URL</th>                                         
                                             <th> <?php    echo strtolower($rs['URL']);   ?> </th>
                                         	</tr>
                                     </thead>
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Ad Expiry Date</th>                                         
                                             <th> <?php echo date("d M, Y",strtotime($rs['EndDate'])); ?> </th>
                                         	</tr>
                                       </thead>
                                    
                                    
                                    </table>      
                       
                   	
		
            
			</div>
			
			
		
		<div class="col-md-5" >
		              
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function () {
geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(-34.397, 150.644);
    var mapOptions = {
      zoom: 8,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);
	
	var address = '<?php echo $address; ?>';
	console.log(address);
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location
        });
      } else {
        console.log('Geocode was not successful for the following reason: ' + status);
      }
    });

});
</script>
<div id="googleMap" style="width:100%;height:300px;" ></div>
		</div>

			
			</div>
			
			<div class="col-md-12">
				
				<br><br><br>                    
<?php
$query_blog_cmnt = "select a.*, b.* from mypartner_comment a, register b where a.member_id = b.id  order by a.cmnt_id desc" ;
$result_cmnt = mysql_query($query_blog_cmnt);
if(mysql_num_rows($result_cmnt) > 0)
{
?>
<bR><hr style="margin-bottom:30px;">
<h5 style="color:#828282;">Comments</h5>
<?php
while($rs_cmnt=mysql_fetch_array($result_cmnt))
{?>

<div class="blockquote">
            <div class="quote" style="min-height:auto;">
                <?php /*?><h5 style="margin-bottom:5px;color:#666666;"><?php echo ucfirst($rs_cmnt['fname']) ?>&nbsp;<?php echo ucfirst($rs_cmnt['lname']) ?></h5><?php */?>
				
                <p align="justify" style="color:#666666;">                
                
                <?php echo ucfirst($rs_cmnt['comment']) ?> 
                <bR>
                <span style="color: #999999;font-weight: 300;line-height: 24px;margin-bottom: 12px;">Posted <?php echo date("d M, Y",strtotime($rs_cmnt['cmnt_date'])); ?> by <?php echo ucfirst($rs_cmnt['fname']) ?>&nbsp;<?php echo ucfirst($rs_cmnt['lname']) ?></span>                
                </p>

            </div>

			
            </div>
            
<?php } }?>   







<br><br><br><br><br>



 <div class="dividerHeading">
    <h5 style="background:#ccc;padding:8px;font-weight:bold;text-align:center;"><span>Comment on this post</span></h5>
</div>        
        		
<form class="form-horizontal" role="form" method="post" action="">

<div class="form-group">
	<label for="inputPassword3" class="col-sm-2 control-label" style="text-align:right;">Comment</label>
	<div class="col-sm-10">
    <textarea rows="5" cols="40" style="width:100%;" name="Message" id="Message" tabindex="1" required=''></textarea>
	<div style="clear:both;width: 100%;display: inline-block;float: left !important;margin-left:312px;">
						<div id="display_count" style="float: left !important;">200</div>
						<div style="float: left !important;">&nbsp;words remaining</div>
					</div>
	</div>
</div>

<div class="form-submit-buttons">
<input type="hidden" name="postId" id="postId" value="<?php echo $rs['id'] ; ?>">
<input type="hidden" name="memberId" id="memberId" value="<?php echo $_SESSION['Nris_session']['id'];  ?>">
<?php if($_SESSION['Nris_session']['id'] > 0) { ?>
	<input type="submit" value="Comment" name="cmdcomment" class="btn btn-success" style="float:right;">
<?php } else { ?>
	<a href="#"  data-toggle="modal" data-target="#myModal" class="btn btn-success" style="float:right;" >Post Comment</a>
<?php } ?>
</div>

</form>
<br><br><br><br><br><br>
				
			</div>
            <!-- TOP BUTTONS ENDS-->
            
            
        </div><!-- COLUMN MIDDLE ENDS -->	
        
        
        
        
        
        
        <!-- COLUMN RIGHT -->	
        <?php include_once('state_common_right.php');?><!-- COLUMN RIGHT ENDS -->	
			
            

               
               
               
                 
                    
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