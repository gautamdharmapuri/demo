<?php error_reporting(0);  include"config/connection.php";	  
//	echo $defaultState;
 ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head><base href="/">

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title><?php echo $defaultState;  ?> Auto Ad View | NRIs</title>
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

.table tbody tr th, .table tbody tr td {
	padding: 4px !important;
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
		
			if(isset($_POST['comment_submit']) && $_POST['comment_submit'] != '') {
				$postId = $_POST['post_id'];
				$bid = $_POST['bid'];
				$sessionData = $_SESSION['Nris_session'];
				$commented_by = $sessionData['id'];
				$comment = $_POST['comment'];
				
				$query = mysql_query("INSERT INTO auto_comments (post_id,comment,bid,commented_by)
									 VALUES ('".$postId."','".$comment."','".$bid."','".$commented_by."')");
				 
				$to = $_POST['to_email'];
				$frm = $sessionData['email'];                
				$subject = "Bid Deatilas of your classified";
				$headers = "MIME-Version: 1.0\r\n";
							$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
				$headers .= 'From:' . $frm . "\r\n";            
				$htmlmsg='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
							<html xmlns="http://www.w3.org/1999/xhtml">
							<head><base href="/">
							<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
							</head>
							<body style="background-color:#F6F6F6;">
							<div id="container" style="width:600px;padding:0;margin:0 auto;height:auto;background-color:#FFF;">
							<div id="head2" style="background:#325D88;height:18%;padding:4px;">
							<div><img src="'.$config['siteurl'].'img/logo.png" width=350px height=100px alt="Nris"/></div>
							</div>
							<div id="message" style="height:auto;border-bottom:1px solid #ccc;margin:10px;">
							<h3>'.date('M d,Y').'</h3>
							</div>
							<div id="order" style="height:auto;border-bottom:1px solid #ccc;margin:10px;">                         
							<p>You have got a response from usnris user</p>                        
							<strong>Bid Amount :</strong><span>'.$bid.'</span>
							<br>
							</div>
							<div id="footer" style="border-top:1px solid #ccc;margin:10px;text-align:center;">Copyright '.date('Y').' usnris, All rights reserved.</div>
							</div>        
							</body>
							</html>';
				mail($to, $subject, $htmlmsg, $headers);
				echo "<script type='text/javascript'>alert('Good luck your price has been submitted');</script>";
			}
			
			
		
			$query="select a.*, b.name, c.model_name from post_free_auto a, auto_makes b, auto_models c where a.Brand = b.id and md5(a.id) = '".$_GET['ViewId']."' group by a.id ";
			$result=mysql_query($query);
			$rs=mysql_fetch_array($result);	
			$total_views = $rs['total_views'] + 1 ;
			mysql_query("update post_free_auto set total_views='".$total_views."' where md5(id) = '".$_GET['ViewId']."'");
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
						
						
						if(isset($_POST['respond'])) {
							$msg = send_respond_mail($_POST,$rs['ConatctEmail']);
							echo "<script type='text/javascript'>alert('Your response sent successfully');</script>";
						}
						//echo $address;
					   ?>               
        <div class="widget-temple">
	<h4><a href="<?php echo $siteUrlConstant;?>state?State=<?php echo $state;?>" style="color:#0033FF;">Home</a> >> Auto Ads</h4>
    
  <?php
if(isset($_SESSION['Nris_session']))	  
{ ?>
<a href="<?php echo $siteUrlConstant;?>auto_create?code=<?php echo $defaultState ?>&type=premium"  class="btn btn-default" style="background-color:#0000FF;color:#FFFFFF;float:right;">Create Premium Post <img src="images/New_icon2.gif" alt="New"></a>    
<a href="<?php echo $siteUrlConstant;?>auto_create?code=<?php echo $defaultState ?>"  class="btn btn-default" style="background-color:#990033;color:#FFFFFF;float:right;">Create Free Post <img src="images/arrow.gif" alt=">"></a>    
  <?php } else { ?> 
<a href="javascript:;"  data-toggle="modal" data-target="#myModal" class="btn btn-default" style="background-color:#990033;color:#FFFFFF;float:right;" >Create Premium Ad&nbsp;<img src="images/New_icon2.gif" alt="New"></a>   
<a href="javascript:;"  data-toggle="modal" data-target="#myModal"  class="btn btn-default" style="background-color:#0000FF;color:#FFFFFF;float:right;" >Create Free Post Ad&nbsp;<img src="images/arrow.gif" alt=">"></a>
<?php } ?>     
</div>
<br>
		<div class="col-md-12" >
			<?php for($k=1;$k<16;$k++) { ?>
				<div class="col-md-3" >
					<?php if($rs['image'.$k] != '') { ?>
						<div class="col-sm-12">
							<a href="javascript:;">
								<img class="myImageClass" src="<?php echo 'uploads/auto/'.$rs['image'.$k];?>" style="width:100%;height:140px;" alt="<?php echo $rs['image'.$k];?>">
							</a>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
		
        <div class="col-md-7" >
          <table class="table table-bordered">
                                       <thead>
                                       		<tr>
                                       		<th>Title</th>                                         
                                             <th> <?php    echo ucwords($rs['TitleAD']);   ?> </th>
                                         	</tr>
                                     </thead>
                                       <thead>
                                       		<tr>
                                       		<th>Make</th>                                         
                                             <th> <?php    echo ucwords($rs['name']);   ?> </th>
                                         	</tr>
                                       </thead>
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Model</th>                                         
                                             <th> <?php    echo ucwords($rs['model_name']);   ?> </th>
                                         	</tr>
                                       </thead>    
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Condition</th>                                         
                                             <th> <?php    echo ucwords($rs['BCondition']);   ?> </th>
                                         	</tr>
                                       </thead> 
                                       
                                        <thead>
                                       		<tr>
                                       		<th>Transmission</th>                                         
                                             <th> <?php    echo ucwords($rs['Transmission']);   ?> </th>
                                         	</tr>
                                       </thead>   
                                       
                                        <thead>
                                       		<tr>
                                       		<th>Cylinder</th>                                         
                                             <th> <?php    echo ucwords($rs['Cylinder']);   ?> </th>
                                         	</tr>
                                       </thead> 
                                       
                                        <thead>
                                       		<tr>
                                       		<th>Type</th>                                         
                                             <th> <?php    echo ucwords($rs['BType']);   ?> </th>
                                         	</tr>
                                       </thead> 
                                       
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Drive Train</th>                                         
                                             <th> <?php    echo ucwords($rs['DriveTrain']);   ?> </th>
                                         	</tr>
                                       </thead>
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Year</th>                                         
                                             <th> <?php    echo ucwords($rs['Year']);   ?> </th>
                                         	</tr>
                                       </thead> 
                                       
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Color</th>                                         
                                             <th>
												<div style="background-color:<?php echo ucwords($rs['Color']);?>;" class="color-div"></div>
                                              </th>
                                         	</tr>
                                       </thead>                                   
                                      
                                      <thead>
                                       		<tr>
                                       		<th>VIN Number</th>                                         
                                             <th> <?php    echo ucwords($rs['VINNo']);   ?> </th>
                                         	</tr>
                                       </thead>
                                       
                                       
                                       <thead>
                                       		<tr>
                                       		<th>ODO Meter Reading</th>                                         
                                             <th> <?php    echo ucwords($rs['ODO']);   ?> </th>
                                         	</tr>
                                       </thead>
                                       
                                       
                                       <thead>
                                       		<tr>
                                       		<th>Price</th>                                         
                                             <th> <?php    echo $rs['Price'];   ?> </th>
                                         	</tr>
                                       </thead>
                                       
                                       
                                         <thead>
                                       		<tr>
                                       		<th>Current MPG</th>                                         
                                             <th> <?php    echo $rs['MPG'];   ?> </th>
                                         	</tr>
                                       </thead>
                                     
                                    
                                     <thead>
                                       		<tr>
                                       		<th>Address</th>                                         
                                             <th>
											 <a href="https://maps.google.com/maps?saddr=&daddr=<?php echo urlencode($rs['Address']);?>" target="_blank" class="address_link">
		<span class="glyphicon-map-marker"></span>
		<?php echo ucwords($rs['Address']); ?>
	</a></th>
                                         	</tr>
                                     </thead>
                                     
                                     <thead>
                                       		<tr>
                                       		<th>State</th>                                         
                                             <th> <?php echo $defaultState;  ?> </th>
                                         	</tr>
                                     </thead>
                                     
                                     
                                     <thead>
                                       		<tr>
                                       		<th>City</th>                                         
                                             <th> <?php    echo ucwords($cityName);   ?> </th>
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
                                       		<th>URL</th>                                         
                                             <th> <?php    echo strtolower($rs['URL']);   ?> </th>
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
            <!-- TOP BUTTONS ENDS-->
			
			<?php
				$query1 = "SELECT auto_comments.*,CONCAT(register.fname,' ',register.lname) as username
							FROM auto_comments,register
							WHERE post_id = ".$rs['id']." AND auto_comments.commented_by = register.id
							GROUP BY auto_comments.id";
				$result1 = mysql_query($query1);
				if(mysql_numrows($result1)) {
			?>
				<div class="col-md-12" style="clear: both;margin-bottom: 15px;">
				
						<div class="dividerHeading">
							<h4 style="background:#ccc;padding:4px;font-weight:bold;text-align:center;"><span>Comments</span></h4>
						</div>
						<table class="table table-bordered">
							<tr>
								<th>Name</th>
								<th>Bid Amount</th>
								<th>Comment</th>
								<th>Date</th>
							</tr>
						<?php				
							while($rs1 = mysql_fetch_array($result1)) {
						?>
							<tr>
								<td><?php echo $rs1['username'];?></td>
								<td><?php echo $rs1['bid'];?></td>
								<td><?php echo $rs1['comment'];?></td>
								<td><?php echo $rs1['created'];?></td>
							</tr>
						<?php } ?>
						</table>
					
				</div>
			<?php } ?>
			<br><br>
			<div class="col-md-12">
 <?php include "reply-widget.php"; ?>
 </div>
        <div class="col-md-12">

 <div class="dividerHeading">
    <h4 style="background:#ccc;padding:4px;font-weight:bold;text-align:center;"><span>Bid / Bargain </span></h4>
</div>
        
            <form method="post" action="" class="comment-form" autocomplete="off">  
            <div>
           <input type="text" style="float:left;width:250px;margin:10px;background-image:url('images/dollar-sign.gif');background-position: left;
  background-size: 25px;  height: 28px;background-repeat: no-repeat;padding-left:30px;" placeholder="Enter your bid amount"  maxlength="10" class="form-control" name="bid" required onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
               <input placeholder="Message" name="comment"  id="message" style="float:left;width:400px;margin:10px;height:28px;" required />
					<div style="clear:both;width: 100%;display: inline-block;float: left !important;margin-left:312px;">
						<div id="display_count" style="float: left !important;">100</div>
						<div style="float: left !important;">&nbsp;words remaining</div>
					</div>
               </div>
               <div style="clear:both"></div>
               <div>
              <p style="color:red;text-align: left;"> <b>Note: Negotiation should be wise and reasonable , non reasonable offers and offensive messages will be deleted by admin and after 10 repeated violations user will be terminated from this site permanently.</b></p>
              </div>
                      
             <div class="form-submit-buttons">
				<?php
					$sessionData = $_SESSION['Nris_session'];
				?>
                <input type="submit" name="comment_submit" value="Post Comment" class="<?php if(!isset($sessionData['id'])) { ?>no-comment<?php }?> btn btn-premium" />
             </div>
                <input class="form-control" type="hidden" name="post_id" value="<?php echo $rs['id']; ?>"/>
				<input class="form-control" type="hidden" name="to_email" value="<?php echo $rs['ConatctEmail']; ?>"/>
           </form> 
</div>                   
 
 
 <script>
     $('document').ready(function() {
		
        $('.no-comment').click(function() {
            alert("Please Login");
            return false;
        }); 
        //$('.comment-form').validate();
		
		var word_count = 100;
		$(".comment-form #message").on('keydown',function() {

			var words = $(this).val().length;
			
			if (words > word_count) {
				//var trimmed = $(this).val().split(/\s+/, word_count).join(" ");
				//$(this).val(trimmed + " ");
				return false;
			}
			else {
			  $('#display_count').text(word_count-words);
			  $('#message').text(word_count-words);
			}
		  });
        
     });
     </script>
            
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