<?php error_reporting(0);  include"config/connection.php";	  
if(isset($_GET['viewId']))
{
	$_SESSION['viewId']=$_GET['viewId'];
}
else
{
	$_SESSION['viewId']=$_SESSION['viewId'];
	
}




 ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head><base href="/">

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Blog | NRIs</title>
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
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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

</style>   
<style type="text/css">
			th,td, tr {
			text-align:center;
			vertical-align:middle;
			height:35px;
		}
	/*
	Max width before this PARTICULAR table gets nasty
	This query will take effect for any screen smaller than 760px
	and also iPads specifically.
	*/
	@media
	only screen and (max-width: 760px),
	(min-device-width: 768px) and (max-device-width: 1024px)  {

		/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr {
			display: block;
			text-align:center;
			vertical-align:central;
		    height: auto;
		    padding: 5px 0;
		}

		/* Hide table headers (but not display: none;, for accessibility) */
		thead tr {
			position: absolute;
			top: -9999px;
			left: -9999px;
		}

		tr { border: 1px solid #ccc; }

		td {
			/* Behave  like a "row" */
			border: none;
			border-bottom: 1px solid #eee;
			position: relative;
			padding-left: 50%;
		}

		td:before {
			/* Now like a table header */
			position: absolute;
			/* Top/left values mimic padding */
			top: 6px;
			left: 6px;
			width: 45%;
			padding-right: 10px;
			white-space: nowrap;
		}

		/*
		Label the data
		*/
		td:nth-of-type(1):before { content: "Title"; }
		td:nth-of-type(2):before { content: "Views"; }
		td:nth-of-type(3):before { content: "Replies"; }
	}

	/* Smartphones (portrait and landscape) ----------- */
	@media only screen
	and (min-device-width : 320px)
	and (max-device-width : 480px) {
		body {
			padding: 0;
			margin: 0;
			}
		}

	/* iPads (portrait and landscape) ----------- */
	@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
	
	}
	
	





.sidebar h4 {
	padding-bottom: 0;
	font-size: 1.4em;
	color: #555;
	letter-spacing: -1px;
	padding: 0;
}

.sidebar ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

.sidebar ul li {
	margin-bottom: 20px;
	line-height: 1.9em;
}

.sidebar ul li.bg, .sidebar ul li.bg h4, .sidebar ul li.bg a, .sidebar ul li.bg a:hover {
	background-color: #699BBA;
	color: #fff;
}
.sidebar ul li.bg a, .sidebar ul li.bg a:hover {
	border-bottom-color: #fff;
}


.sidebar li ul {
    list-style: none outside none;
    margin: 0px;
}

.sidebar li ul li {
	display: block;
	border-top: none;
	padding: 10px 2px;
	margin: 0;
	line-height: 1.5em;
	font-size: 0.85em;
}

.sidebar li ul li ul {
	margin-top: 10px;
}

.sidebar li ul li li  {
	font-size: 1.0em;
	padding-left: 15px;
}



.sidebar li ul li.text { 
	border-bottom: none;
}



.sidebar li a {

	 border-bottom-color: #ccc;
	color: #333333;
}


.sidebar li a:hover {
	color: #333;

	 border-bottom-color: #333;
}
.sidebar li ul li a.readmore {
   font-weight: bold;
}


.sidebar li.color-bg {
/*	background-color: #f0f0f0;*/
}

.sidebar li.color-bg h4 {
	color: #555;
}

.sidebar ul.blocklist li {
	padding: 0;	
}

.sidebar ul.blocklist li a,
.sidebar ul.blocklist li a:hover {
	border-bottom: 0;
	display: block;
	padding: 14px 10px;

}

.sidebar ul.blocklist li a:hover
{
		background:#699BBA;
}
.sidebar ul.blocklist li a.selected {
	background:#699BBA;
    color: #FFFFFF;
	font-weight: bold;

}
.sidebar li ul.blocklist li li {
	font-size: 1.0em;
}

.sidebar li ul.blocklist ul {
	margin-top: 0;
}

.sidebar li ul.blocklist li li a,
.sidebar li ul.blocklist li li a:hover {
	padding-left: 25px;
}

.sidebar ul.newslist li {
	padding: 20px 0px;
}

.sidebar ul.newslist p {
	line-height: 2.5em;
	margin-bottom: 0;
}

.sidebar ul.newslist span.newslist-date { 
	background-color: #699BBA;
	color: #fff;
	padding: 5px 10px;
}


.post-content .featured-image {
    margin-bottom: 10px;
}

	
	</style> 
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>



	<?php if(isset($defaultState) && $defaultState != '') { ?>
		<?php include "config/menu_inner_state.php" ;  ?>
	<?php } else { ?>
		<?php include "config/menu.php" ;  ?>
	<?php } ?>
	
	<div class="clearfix"></div>

    
		<?php include_once('stock_block.php');?>     
	
	
<?php
if(isset($_POST['cmdcomment']))	
{

	$blogId = $_POST['blogId'];
	$mId = $_POST['memberId'];	
	
	$msg = trim($_POST['Comment']);
	$a=stripslashes($msg);
	$a=mysql_real_escape_string($a);
	
	$date = date("Y-m-d");
	$time = date("h:m:s");	
				
	$query_cmt = "insert into  blog_comment(blog_id,member_id,comment,cmnt_date,cmnt_time) values('".$blogId."','".$mId."','".$a."','".$date."','".$time."')";		 
	$result=mysql_query($query_cmt);
		echo "<script language='javascript' type='text/javascript'>alert('Your Comment Posted sucsessfully');</script>";		 
		header("location:state_blog_details?viewId='".$_SESSION['viewId']."'");
	
	/* Sending Notification mail starts here */
			$query_user = "SELECT * FROM register WHERE id = ".$mId;
			$result_user = mysql_query($query_user);
			$result_user = mysql_fetch_array($result_user);
			
			$email = $result_user['email'];
			$name = $result_user['fname'].' '.$result_user['lname'];
			
			$subject = 'Comment to your Post';
			$headers = "From: mailnris@gmail.com \r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$url = $siteUrlConstant . 'blog_details?viewId=' . md5($blogId);
			
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
     
    
<!-- Section-1 WRAP START-->	
<div class="section-1-wrap" style="min-height:700px;">	
<!-- Section-1 START-->	
		
        
       <div class="section-inner-page" style="background-color:#009900;"> 
        <div class="col-md-12" style="text-align:left;color:#000000;float:left;"> 
        <!-- COLUMN LEFT -->	
        
            
            <!-- FIRST TABLE -->
            <div class="col-md-10" style="text-align:left;color:#000000;"> 
   				
<div class="widget-temple">
	<?php if(isset($defaultState) && $defaultState != '') { ?>
		<h4><a href="<?php echo $siteUrlConstant;?>state?State=<?php echo $defaultState;?>" style="color:#0033FF;">Home</a> >> Blog Details</h4>
	<?php } else { ?>
		<h4><a href="<?php echo $siteUrlConstant;?>" style="color:#0033FF;">Home</a> >> Blog Details </h4>
	<?php } ?>
</div>    
<?php
$query = "select a.*, b.category_name from blog a, blog_categories b where a.category_id  = b.id and a.visibility = 'Public' and status = 'Publish' and md5(a.id) = '".$_SESSION['viewId']."'" ;
$result = mysql_query($query);
$rs = mysql_fetch_array($result) ; 
?>

<h3><?php echo ucwords($rs['blog_title']);?></h3>
<div style="color: #808080;font-weight: 300;line-height: 24px;margin-bottom: 12px;">Posted <?php echo date("d M, Y",strtotime($rs['date'])); ?> by Admin / Category: <?php echo ucwords($rs['category_name']);?></div>

<?php 
if (strpos($rs['image'],'.') !== false) {  ?>
		<div class="featured-image"> <img alt="" src="admin/uploads/blog/<?php echo $rs['image']; ?>" style="width:100%;" class="imgframe" alt="<?php echo ucwords($rs['blog_title']);?"> </div>
<?php } ?>

<p style="text-align:justify;margin:10px 0 90px 0;color:#666666;">
<?php echo $rs['blog_desc'] ; ?>
</p>


<?php

$blog_id = $assoc_id = $rs['id'];
    $type = 'blog';
$likeQuery = mysqli_query($con, 'SELECT COUNT(id) as cnt from likes
					where assoc_id = '.$assoc_id.' AND type="'.$type.'" AND like_val = 1');
					$likeQueryRes1 = mysqli_fetch_assoc($likeQuery);
					$likeQueryRes = $likeQueryRes1['cnt'];

					$dislikeQuery = mysqli_query($con, 'SELECT COUNT(id) as cnt from likes
					where assoc_id = '.$assoc_id.' AND type="'.$type.'" AND like_val = 0');
					$dislikeQueryRes1 = mysqli_fetch_assoc($dislikeQuery);
					$dislikeQueryRes = $dislikeQueryRes1['cnt'];
	
if (!empty($_SESSION['Nris_session']['id'])) { ?>
    <?php
    $user_id = $_SESSION['Nris_session']['id'];
	$query_res = mysqli_query($con, 'SELECT like_val from likes where user_id = '.$user_id.' AND assoc_id = '.$assoc_id.' AND type="'.$type.'"');
	$user_like_res = mysqli_fetch_assoc($query_res);

	

					$like_cls = $disliked_cls = '';
					if (isset($user_like_res['like_val'])) {
						$like_cls = ($user_like_res['like_val'] == 1) ? 'liked' : '';
						$disliked_cls = ($user_like_res['like_val'] == 1) ? '' : 'disliked';
					}
		            ?>
		            <div class="like_lnks_cnt">
		                <a class='like_dislike_lnk _like <?php echo $like_cls ?>' href="<?php echo $siteUrlConstant.'/like_dislike.php?assoc_id='.$assoc_id.'&button_type=like&like_type='.$type.'' ?>">
						<button type="button" class="btn btn-default btn-sm">
							<span class="glyphicon glyphicon-thumbs-up"></span> <span id="likeCnt"><?php echo $likeQueryRes;?></span>
						</button></a>
		                <a class='like_dislike_lnk _dislike <?php echo $disliked_cls ?>' href="<?php echo $siteUrlConstant.'/like_dislike.php?assoc_id='.$assoc_id.'&button_type=dislike&like_type='.$type.'' ?>" style="margin : 0 10px">
							<button type="button" class="btn btn-default btn-sm">
								<span class="glyphicon glyphicon-thumbs-down"></span> <span id="unlikeCnt"><?php echo $dislikeQueryRes;?></span>
							</button>
						</a>
		            </div>
	            <?php } else { ?>
					<div class="like_lnks_cnt">
		                <a href="javascript:;" class='like_dislike_lnk _like' data-toggle="modal" data-target="#myModal">
							<button type="button" class="btn btn-default btn-sm">
								<span class="glyphicon glyphicon-thumbs-up"></span> <span id="likeCnt"><?php echo $likeQueryRes;?></span>
							</button>
						</a>
		                <a href="javascript:;" class='like_dislike_lnk _dislike' data-toggle="modal" data-target="#myModal" style="margin : 0 10px">
							<button type="button" class="btn btn-default btn-sm">
								<span class="glyphicon glyphicon-thumbs-down"></span> <span id="unlikeCnt"><?php echo $dislikeQueryRes;?></span>
							</button>
						</a>
		            </div>
				<?php } ?>

<bR><hr style="margin-bottom:30px;">


<?php
$query_blog_cmnt = "select a.*, b.* from blog_comment a, register b where a.member_id = b.id  and md5(a.blog_id) = '".$_SESSION['viewId']."' order by a.cmnt_id desc" ;
$result_cmnt = mysql_query($query_blog_cmnt);
if(mysql_num_rows($result_cmnt) > 0)
{
?>

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
            
            
<h3>Post a comment</h3>            
<form class="form-horizontal" role="form" method="post" action="">





<div class="form-group">
	<label for="inputPassword3" class="col-sm-2 control-label" style="text-align:right;">Comment</label>
	<div class="col-sm-10">
    <textarea rows="5" cols="40" style="width:100%;" name="Comment" id="Comment" tabindex="2"  placeholder="Your comment" required></textarea>
	<div style="clear:both;width: 100%;display: inline-block;float: left !important;margin-left:312px;">
						<div id="display_count" style="float: left !important;">200</div>
						<div style="float: left !important;">&nbsp;words remaining</div>
					</div>
	</div>
</div>

<div class="form-submit-buttons">
<input type="hidden" name="blogId" id="blogId" value="<?php echo $rs['id'] ; ?>">
<input type="hidden" name="memberId" id="memberId" value="<?php echo $_SESSION['Nris_session']['id'];  ?>">
<input type="submit" class="btn btn-success" name="cmdcomment" style="float:right" value="Post Comment">
</div>

</form>                        
<div style="margin-bottom:200px"></div>         
            
</div>            
            <!-- TOP BUTTONS ENDS-->
            
            
    
    
    
   
    
    
    
    
    
    
        
        
        
        
        
        
        <!-- COLUMN RIGHT -->	
         <div class="col-md-2 inner-left">
			
            <!-- left ad1 -->
            <aside class="sidebar big-sidebar right-sidebar" style="width:100%;">
	
	
            <ul style="list-style:none;border:1px solid #000000;margin-top:25px;">	

               <li class="color-bg" style="list-style:none;">
                    <ul class="blocklist">
			            <li><a class="selected" href="#" style="font-size:16px;">Categories</a></li>
                       <?php
					   	$query_cat = "select * from blog_categories order by category_name" ;
						$result_cat = mysql_query($query_cat);
						while($fs = mysql_fetch_array($result_cat)){ ?>
                        <li><a href="<?php echo $siteUrlConstant;?>blog_category?viewId=<?php echo md5($fs['id']); ?>" style="list-style:none;"><?php echo $fs['category_name']; ?></a></li>			
                       <?php } ?> 

                    </ul>
                </li>
                
               

                
            </ul>
		
        </aside>
         </div>
        <!-- COLUMN RIGHT ENDS -->	
			
            

               
               
               
                 
                    
        </div><!-- Section-1 ENDS -->
       </div>
</div><!-- End Section-1 WRAP -->

	
    <div style="clear:both;"></div>
    	
	
    
    
    
	
	 <?php include "config/footer.php" ; ?><!--End footer -->
    
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
			  $('#message').text(word_count-words);
			}
		  });
        
     });
     </script>


<div class="go-up"><i class="fa fa-chevron-up"></i></div>
<script src="js/tab/jquery-2.1.1.js"></script>
<script src="js/tab/main.js"></script> <!-- Resource jQuery -->


<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/html5.js"></script>
<script src="js/custom.js"></script>
<script src="js/like_dislike.js"></script>

<!-- End js -->

<?php include "config/social.php" ;  ?>

</body>
</html>