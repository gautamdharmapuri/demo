<?php error_reporting(0);  include"config/connection.php";	  

if(isset($_GET['id']))
{
	$_SESSION['threadId']=$_GET['id'];
}
else
{
	$_SESSION['threadId']=$_SESSION['threadId'];
	
}



if(isset($_GET['id']))
{
$query_main = "select a.*, b.* from  nris_talk a, register b where a.member_id = b.id and a.id = '".$_SESSION['threadId']."' ";
$result_main = mysql_query($query_main);
$rs = mysql_fetch_array($result_main);
$total_views = $rs['total_views'] + 1 ;
mysql_query("update nris_talk set total_views='".$total_views."' where id = '".$_SESSION['threadId']."'");	
}

?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Nris Talk | NRIs</title>
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
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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

</style>   
<style>
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

	</style> 
    
     
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>



	<?php   include "config/menu_inner_state.php" ;  ?>
	
	<div class="clearfix"></div>

    
		<div class="stock-scroll">
		
				<div class="col-md-12">
                SCROLLING TEXT GOES HERE
                </div>
       
        </div>     
	
	

     
    
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
			<?php
$query_blog = "SELECT * FROM nris_talk WHERE id = ".$_GET['id'];
$result = mysql_query($query_blog);
$rs = mysql_fetch_array($result);
?>
            <div class="col-md-12" style="text-align:left;color:#000000;"> 
   				
<div class="widget-temple">
	<h4><a href="state.php?State=<?php echo $state;?>" style="color:#0033FF;">Home</a> >>
	<a href="<?php echo SITE_BASE_URL.'/discussion_room.php';?>" class="breadcumb_link">Nri's Talk</a> >> <?php echo ucfirst($rs['title']); ?></h4>
</div>    <br>

<div style="border:1px solid #999999;width:100%;padding:10px;border-radius:5px;">
<div style="font-size:18px;font-weight:bold;"><?php echo ucwords($rs['title']); ?></div>
<div><?php echo ucwords($rs['description']); ?></div>
<p>Posted by <?php echo ucwords($rs['fname']) ?>&nbsp;<?php echo ucwords($rs['lname']) ?>&nbsp;-&nbsp;<?php echo date("M d, Y",strtotime($rs['date'])); ?></p>

<?php

$blog_id = $assoc_id = $rs['id'];
	$type = 'nritalk';
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
	$query_res = mysqli_query($con, 'SELECT like_val from likes where user_id = '.$user_id.' AND assoc_id = '.$assoc_id.'
							  AND type="'.$type.'"');
	$user_like_res = mysqli_fetch_assoc($query_res);

					$like_cls = $disliked_cls = '';
					if (isset($user_like_res['like_val'])) {
						$like_cls = ($user_like_res['like_val'] == 1) ? 'liked' : '';
						$disliked_cls = ($user_like_res['like_val'] == 1) ? '' : 'disliked';
					}
		            ?>
		            <div class="like_lnks_cnt">
		                <a class='like_dislike_lnk _like <?php echo $like_cls ?>' href="<?php echo SITE_BASE_URL.'/like_dislike.php?assoc_id='.$assoc_id.'&button_type=like&like_type='.$type.'' ?>">
						<button type="button" class="btn btn-default btn-sm">
							<span class="glyphicon glyphicon-thumbs-up"></span> <span id="likeCnt"><?php echo $likeQueryRes;?></span>
						</button></a>
		                <a class='like_dislike_lnk _dislike <?php echo $disliked_cls ?>' href="<?php echo SITE_BASE_URL.'/like_dislike.php?assoc_id='.$assoc_id.'&button_type=dislike&like_type='.$type.'' ?>" style="margin : 0 10px">
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

</div>
		




<br><br><br>                    
<?php
$query_blog_cmnt = "select a.*, b.* from nris_talk_comment a, register b where a.member_id = b.id
					and a.reply_status='0' and thread_Pid = ".$_GET['id']." order by a.cmnt_id desc" ;
$result_cmnt = mysql_query($query_blog_cmnt);
if(mysql_numrows($result_cmnt) > 0)
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

<?php
if(isset($_POST['cmdcomment']))	
{

		$blogId = $_POST['postId'];
		$mId = $_POST['memberId'];	
		
		$msg = trim($_POST['Message']);
		$a=stripslashes($msg);
		$a=mysql_real_escape_string($a);
		
		$date = date("Y-m-d");
		$time = date("h:m:s");	
		
		$query_cmt = "insert into  nris_talk_comment(thread_Pid,member_id,comment,cmnt_date,cmnt_time) values('".$blogId."','".$mId."','".$a."','".$date."','".$time."')";		 
		$result=mysql_query($query_cmt);
		echo "<script language='javascript' type='text/javascript'>alert('Your Comment Posted sucsessfully');</script>";		 
		header("location:discussion_room_view.php?id='".$_SESSION['threadId']."'");
		/*		echo"<script language='javascript' type='text/javascript'>document.location='state_blog_details.php?viewId=.$_SESSION['viewId'].';</script>";*/

}
?>

 <div class="dividerHeading">
    <h5 style="background:#ccc;padding:8px;font-weight:bold;text-align:center;"><span>Comment on this post</span></h5>
</div>        
        		
<form class="form-horizontal" role="form" method="post" action="">

<div class="form-group">
	<label for="inputPassword3" class="col-sm-2 control-label" style="text-align:right;">Description</label>
	<div class="col-sm-10">
    <textarea rows="5" cols="40" style="width:100%;" name="Message" id="Message" tabindex="1" required=''></textarea>
	</div>
</div>

<div class="form-submit-buttons">
<input type="hidden" name="postId" id="postId" value="<?php echo $_GET['id'] ; ?>">
<input type="hidden" name="memberId" id="memberId" value="<?php echo $_SESSION['Nris_session']['id'];  ?>">
<input type="submit" name="cmdcomment" id="cmdcomment" class="btn btn-success"  style="float:right" value="Post Comment">
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
<script src="js/like_dislike.js"></script>
<!-- End js -->

<?php include "config/social.php" ;  ?>

</body>
</html>