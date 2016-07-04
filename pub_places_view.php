<?php error_reporting(0);  include"config/connection.php";	  
$current_URL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
//	echo $defaultState;
 ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head><base href="/">

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title><?php echo $defaultState;  ?> Pub View | NRIs</title>
	<meta name="description" content="NRIs">
	<meta name="author" content="NRIs">
	
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
    	 <link rel='stylesheet' type='text/css' href='css/rate.css'>   
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
    
                <script src="css/modal/jquery.min.js"></script>            
            <script src="css/modal/bootstrap.min.js"></script>
  <!--[if !IE]><!-->
	
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


.polaroid img {
  border: 10px solid #fff;
  border-bottom: 45px solid #fff;
  -webkit-box-shadow: 3px 3px 3px #777;
     -moz-box-shadow: 3px 3px 3px #777;
          box-shadow: 3px 3px 3px #777;
}
</style>    
</head>
<body>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


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

                       <br><?php 
					  	 $query="select a.*, b.state from fam_pubs a, states b where a.state_code = b.state_code and md5(a.id) = '".$_GET['ViewId']."'";							
	
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
								//	echo ucwords($rs['temple_name']); 
									$total_views = $rs['total_views'] + 1 ;
									mysql_query("update fam_pubs set total_views='".$total_views."' where md5(id) = '".$_GET['ViewId']."'");
					    ?>
<div class="widget-temple">
	<?php $state = $defaultState;
		$type = urlencode($rs['pub_type']);
	?>
	<h4><a href="<?php echo $siteUrlConstant;?>state?State=<?php echo $state;?>" style="color:#0033FF;">Home</a> >>
	<a href="<?php echo $siteUrlConstant.'pub_places?type='.$type.'&code='.$state;?>" class="breadcumb_link"><?php echo $defaultState;  ?> Pubs</a>
	>> <?php echo ucwords($rs['name']); ?></h4>
</div>    <br>                          
                        


<p class="mydata" align="center" style="text-align:center;">
		<?php   if (strpos($rs['image'],'.') !== false) {  ?>
        <img alt="<?php echo ucwords($rs['name']); ?>" src="admin/uploads/pubs/<?php echo $rs['image'];?>" width="80%" style="height:400px !important;" class="imgframe"> 	<?php }  else {  ?>
        <img alt="<?php echo ucwords($rs['name']); ?>" src="admin/img/no_image.png" height="auto" width="300" class="imgframe">
        <?php } ?>

</p>


<div class="fb-share-button" data-href="<?php echo $current_URL ?>" data-layout="button" style="float:right;"></div>
<img src="img/share-twitter.png" alt="Twitter" style="float:right;margin-right:5px;">   				

<bR>


<p class="mydata"><b>Pub Name :</b> <?php echo ucwords($rs['name']); ?></p>
<p class="mydata"><b>Type :</b> <?php echo ucwords($rs['pub_type']); ?></p>
<p class="mydata"><b>Number  :</b> <a class="call_link" href="tel:<?php echo $rs['contact']; ?>"><?php echo ucwords($rs['contact']); ?></a></p>
<p class="mydata"><b>City  :</b> <?php 
$query_city=mysql_query("select id,city from  cities where id='".$rs['city_id']."'");
															$rcity = mysql_fetch_array($query_city);
															echo ucwords($rcity['city']); ?></p>
<p class="mydata"><b>Address  :</b> <a href="https://maps.google.com/maps?saddr=&daddr=<?php echo urlencode($rs['address']);?>" target="_blank" class="address_link">
		<span class="glyphicon-map-marker"></span>
		<?php echo ucwords($rs['address']); ?>
	</a></p><br>


					



<?php
		if(isset($_SESSION['Nris_session']))	  
	   { ?>
<form action="" method="post">                    
<div class="rating">		
		<input type="radio" name="stars" id="4_stars" value="5" onClick="javascript: submit()" >
		<label class="stars" for="4_stars">4 stars</label>
		<input type="radio" name="stars" id="3_stars" value="4" onClick="javascript: submit()" >
		<label class="stars" for="3_stars">3 stars</label>
		<input type="radio" name="stars" id="2_stars" value="3" onClick="javascript: submit()" >
		<label class="stars" for="2_stars">2 stars</label>
		<input type="radio" name="stars" id="1_stars" value="2" onClick="javascript: submit()" >
		<label class="stars" for="1_stars">1 star</label>
		<input type="radio" name="stars" id="0_stars" value="1" required onClick="javascript: submit()">
		<label class="stars" for="0_stars">0 star</label>
		<span  class="label" style="color:#000000;"> Rating: </span>
</div>
</form>

<?php
if(isset($_POST['stars']))
{
$star =  $_POST['stars'];
$pro_id = $rs['id'];
$myid =  $_SESSION['Nris_session']['id'];
$fname =  $_SESSION['Nris_session']['fname'];
$lname =  $_SESSION['Nris_session']['lname'];
$new_name = $fname." ".$lname;

$date=date('Y-m-d');
$query_rate_before = mysql_query("select * from rating_pubs where login_id='".$myid."' and pub_id ='".$pro_id."' ");

if(mysql_num_rows($query_rate_before)>0)
{
		 $query_rate = "update rating_pubs set pub_id = '".$pro_id."', rate='".$star."', login_id = '".$myid."', login_name = '".$new_name."', date = '".$date."' where login_id='".$myid."' and pub_id ='".$pro_id."'";		 
		 $result_rate = mysql_query($query_rate);
}
else
{
 $query_rate = "insert into rating_pubs(pub_id,rate,login_id,login_name,date) values('".$pro_id."','".$star."','".$myid."','".$new_name."','".$date."')";		 
 $result_rate = mysql_query($query_rate);
}


// $query_rate = "insert into rating_pubs(pub_id,rate,login_id,login_name,date) values('".$pro_id."','".$star."','".$myid."','".$new_name."','".$date."')";		 
// $result_rate = mysql_query($query_rate);

}

}
else
{?>
<div style="float:right;">  
Give your rating
<a href="javascript:;" data-toggle="modal" data-target="#myModal"  onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'">Click here to rate</a>
</div>
<?php }  ?>

<?php 
$star1 = "SELECT COUNT(id) AS star1Id FROM  rating_pubs WHERE pub_id = '".$rs['id']."' and rate='1'";
$result_start1 = mysql_query($star1);
$star_fs1 = mysql_fetch_array($result_start1);

$star2 = "SELECT COUNT(id) AS star2Id FROM  rating_pubs WHERE pub_id = '".$rs['id']."' and rate='2'";
$result_start2 = mysql_query($star2);
$star_fs2 = mysql_fetch_array($result_start2);

$star3 = "SELECT COUNT(id) AS star3Id FROM  rating_pubs WHERE pub_id = '".$rs['id']."' and rate='3'";
$result_start3 = mysql_query($star3);
$star_fs3 = mysql_fetch_array($result_start3);

$star4 = "SELECT COUNT(id) AS star4Id FROM  rating_pubs WHERE pub_id = '".$rs['id']."' and rate='4'";
$result_start4 = mysql_query($star4);
$star_fs4 = mysql_fetch_array($result_start4);

$star5 = "SELECT COUNT(id) AS star5Id FROM  rating_pubs WHERE pub_id = '".$rs['id']."' and rate='5'";
$result_start5 = mysql_query($star5);
$star_fs5 = mysql_fetch_array($result_start5);
?>

<table border="0" cellspacing="0" cellpadding="0" align="left" style="margin-top:20px;">
<tr>
<td style="background-color:#FFFFFF;vertical-align:top;text-align:right;width:70px;">1 Star&nbsp;&nbsp;</td>

<td style="background-color:#FFFFFF;vertical-align:middle;"> <div id="progress" class="graph">
<div id="bar" style="width:<?php echo $star_fs1['star1Id']; ?>%"><p>
<?php echo $star_fs1['star1Id']; ?>%</p></div></div></td>
</tr>


<tr>
<td style="background-color:#FFFFFF;vertical-align:top;text-align:right;">2 Star&nbsp;&nbsp;</td>
<td style="background-color:#FFFFFF;vertical-align:middle;"> <div id="progress" class="graph">
<div id="bar" style="width:<?php echo $star_fs2['star2Id']; ?>%"><p>
<?php echo $star_fs2['star2Id']; ?>%</p></div></div></td>
</tr>
<tr>
<td style="background-color:#FFFFFF;vertical-align:top;text-align:right;">3 Star&nbsp;&nbsp;</td>
<td style="background-color:#FFFFFF;vertical-align:middle;"> <div id="progress" class="graph">
<div id="bar" style="width:<?php echo $star_fs3['star3Id']; ?>%"><p>
<?php echo $star_fs3['star3Id']; ?>%</p></div></div></td>
</tr>
<tr>
<td style="background-color:#FFFFFF;vertical-align:top;text-align:right;">4 Star&nbsp;&nbsp;</td>
<td style="background-color:#FFFFFF;vertical-align:middle;"> <div id="progress" class="graph">
<div id="bar" style="width:<?php echo $star_fs4['star4Id']; ?>%"><p>
<?php echo $star_fs4['star4Id']; ?>%</p></div></div></td>
</tr>
<tr>
<td style="background-color:#FFFFFF;vertical-align:top;text-align:right;">5 Star&nbsp;&nbsp;</td>
<td style="background-color:#FFFFFF;vertical-align:middle;"> <div id="progress" class="graph">
<div id="bar" style="width:<?php echo $star_fs5['star5Id']; ?>%"><p>
<?php echo $star_fs5['star5Id']; ?>%</p></div></div></td>
</tr>
</table>




                    
<br style="clear:both;"><br><br>


<?php
$tmpl_cmnt = "select a.*, b.* from  comment_pubs a, register b where a.member_id = b.id  and md5(a.pub_id) = '".$_SESSION['ViewId']."' order by a.cmnt_id desc" ;

$result_cmnt = mysql_query($tmpl_cmnt);
if(mysql_num_rows($result_cmnt) > 0)
{
?>
<bR><hr style="margin-bottom:30px;">
<h3>Comments </h3>
<?php
while($rs_cmnt=mysql_fetch_array($result_cmnt))
{?>

<div class="blockquote">
            <div class="quote" style="min-height:auto;">
                <?php /*?><h5 style="margin-bottom:5px;color:#666666;"><?php echo ucfirst($rs_cmnt['fname']) ?>&nbsp;<?php echo ucfirst($rs_cmnt['lname']) ?></h5><?php */?>
				
                <p align="justify" style="color:#666666;">                
                
                <?php echo ucfirst($rs_cmnt['comment']) ?> </p>
<div style="color: #999999;font-weight: 300;line-height: 24px;margin-bottom: 12px;">Posted <?php echo date("d M, Y",strtotime($rs_cmnt['cmnt_date'])); ?> by <?php echo ucfirst($rs_cmnt['fname']) ?>&nbsp;<?php echo ucfirst($rs_cmnt['lname']) ?></div>                
            </div>

			
            </div>
            
<?php } }?>  

<br><br>








<?php
if(isset($_POST['cmdcomment']))	
{

	$TMPId = $_POST['templeId'];
	$mId = $_POST['memberId'];	
	
	$msg = trim($_POST['Comment']);
	$a=stripslashes($msg);
	$a=mysql_real_escape_string($a);
	
	$date = date("Y-m-d");
	$time = date("h:m:s");	
	
	$url_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				
	$query_cmt = "insert into comment_pubs(pub_id,member_id,comment,cmnt_date,cmnt_time) values('".$TMPId."','".$mId."','".$a."','".$date."','".$time."')";		 
	$result=mysql_query($query_cmt);
		echo "<script language='javascript' type='text/javascript'>alert('Your Comment Posted sucsessfully');</script>";		 
		echo "<script language='javascript' type='text/javascript'>document.location='".$url_link."';</script>";
		exit; 

}
?>
       


 <div class="dividerHeading" style="clear:both;">
    <h5 style="background:#ccc;padding:8px;font-weight:bold;text-align:center;"><span>Comment on this post</span></h5>
</div>
        
          
            <form class="form-horizontal" role="form" method="post" onSubmit="return frmchk();">
              <div class="form-div ">
                    <div class="form-label">Message:</div>
                    <div class="form-field">
                    <textarea placeholder="Message" name="Comment" id="Comment" class="form-control tiny" required="required"></textarea>
<div style="clear:both;width: 100%;display: inline-block;float: left !important;margin-left:312px;">
						<div id="display_count" style="float: left !important;">200</div>
						<div style="float: left !important;">&nbsp;words remaining</div>
					</div>
                    </div>            
               </div>      
             <div class="form-submit-buttons">   
                        
<?php
if(isset($_SESSION['Nris_session']))	  
{  ?>
<input type="hidden" name="templeId" id="templeId" value="<?php echo $rs['id'] ; ?>">
<input type="hidden" name="memberId" id="memberId" value="<?php echo $_SESSION['Nris_session']['id'];  ?>">
             
             <input type="submit" class="btn-danger" style="float:right;padding:5px;" name="cmdcomment" id="cmdcomment" value="Post Comment">

<?php } else { ?>
             <a href="javascript:;" data-toggle="modal" data-target="#myModal"  class="btn-danger" style="float:right;padding:5px;">Post Comment</a>           
<?php } ?>             

             </div>
                <input class="form-control" name="post_id" value="623" type="hidden">
                <input class="form-control" name="commented_by" value="" type="hidden">
           </form> 
<br><br><br><br><br><br><br><br><br>		
		
            </div>
            <!-- TOP BUTTONS ENDS-->
            
            
        </div><!-- COLUMN MIDDLE ENDS -->	
        
        
        
        
        
        
        <!-- COLUMN RIGHT -->	
        <?php include_once('state_common_right.php');?><!-- COLUMN RIGHT ENDS -->	
			
            

               
               
               
                 
                    
        </div><!-- Section-1 ENDS -->
</div><!-- End Section-1 WRAP -->

	
    
    	<script>
     $('document').ready(function() {
		
        $('.no-comment').click(function() {
            alert("Please Login");
            return false;
        }); 
        //$('.comment-form').validate();
		
		var word_count = 200;
		$("#Comment").on('input propertychange',function() {

			var words = $(this).val().length;
			
			if (words > word_count) {
				//var trimmed = $(this).val().split(/\s+/, word_count).join(" ");
				//$(this).val(trimmed + " ");
				return false;
			}
			else {
			  $('#display_count').text(word_count-words);
			}
		  });
        
     });
     </script>
	
    
    
    
	
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