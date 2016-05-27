<?php error_reporting(0);  include"config/connection.php";	   
//echo $_SESSION['state'];
?>



<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title><?php echo $_SESSION['state'] ?> - University Student talk | NRIs</title>
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
color:#FFFFFF;font-weight:bold;clear:both;background-color:#FF0000;font-weight:bold;padding:10px 10px;
border-radius: 5px;
}

/*.sucess
{
background-color:#009933;
padding:5px;
color:#FFFFFF;
width:100%;
font-weight:bold;
}

*/
.sucess
{
color:#FFFFFF;font-weight:bold;clear:both;background-color:#009900;font-weight:bold;padding:10px 10px;
border-radius: 5px;
}



</style>



 <script type="text/javascript">
function LimtCharacters(txtMsg, CharLength, indicator) {
chars = txtMsg.value.length;
document.getElementById(indicator).innerHTML = CharLength - chars + ' characters remaining';
if (chars > CharLength) {
txtMsg.value = txtMsg.value.substring(0, CharLength);
}
}
</script>

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
				<h4><a href="state.php?State=<?php echo $state;?>" style="color:#0033FF;">Home</a> >> Student's Talk >> University Student Talk</h4>
				<?php if($_GET['universityId'] > 0) { ?>
					<a href="add_university_student_talk.php?universityId=<?php echo $_GET['universityId'];?>" class="btn btn-default" style="background-color:#0000FF;color:#FFFFFF;float:right;">Create Topic <img src="images/arrow.gif"></a>
				<?php } ?>
				<br>
</div>

		<?php if($msg!='')
        {
        echo $msg ;exit;
        }
        
        if($Error!='')
        {
            echo "<h6 class='error'>Error :<br>".$Error."Try Again.</h6>";
        }
        
        ?>
		<?php
			$state = ($_GET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']);
			$universityId = ($_GET['universityId'] > 0) ? $_GET['universityId'] : 0;
		?>
		<div class="col-md-12">
			<div class="col-md-6">
				<div class="cd-tabs table-margin">
					<nav class="tab-head">
						<ul class="cd-tabs-navigation" style="width:100%;">
							<li style="width:100%;">
							  <a style="color:#00A2ED !important;font-size:16px;text-align:left;height: 40px;padding:11px 19px;background-color: #F5F5F5 !important;" data-content="hot-list" class="selected" href="#0">
								  Accommodation
							  </a>
							</li>
						</ul> <!-- cd-tabs-navigation -->
					</nav>
					
					<ul class="cd-tabs-content tab-content-size">
						<li data-content="hot-list" class="selected" style="padding: 2px !important;">
							<div class="content-tab" style="padding: 2px !important;">
								<?php
									$sql=mysql_query("select * from university_student_talk
													 where state_code = '$state' and universityId = ".$universityId." AND type = 'Accommodation' order by dateTime desc");
									if(mysql_numrows($sql) > 0) {
										while($row=mysql_fetch_array($sql)) {
								?>
										<p>
											<a href="university_student_talk_view.php?id=<?php echo $row['id'];?>" onmousemove="this.style.color='red'"
											  onmouseout="this.style.color='black'"
											  style="background-color: #E6E6E6 !important;border: 1px solid white;">
											  <span style="color:black !important;"><?php echo $row['title'];?></span>
											</a>
										  </p>
								<?php }
									} else {
										?>
										<p><center>No Topics Found</center></p>
									<?php
									}
								?>
							</div>
							<?php if(mysql_numrows($sql) > 0) { ?>
								<a href="student_talk_all.php?universityId=<?php echo $universityId;?>&type=Accommodation" class="read-btn-tab studenttalk_viewmore" style="padding: 4px;background-color: #3B6CA6;color:white;">View More</a>
							<?php } ?>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="cd-tabs table-margin">
					<nav class="tab-head">
						<ul class="cd-tabs-navigation" style="width:100%;">
							<li style="width:100%;">
							  <a style="color:#00A2ED !important;font-size:16px;text-align:left;height: 40px;padding:11px 19px;background-color: #F5F5F5 !important;" data-content="hot-list" class="selected" href="#0">
								  Campus Jobs
							  </a>
							</li>
						</ul> <!-- cd-tabs-navigation -->
					</nav>
					
					<ul class="cd-tabs-content tab-content-size">
						<li data-content="hot-list" class="selected" style="padding: 2px !important;">
							<div class="content-tab" style="padding: 2px !important;">
								<?php
									$sql=mysql_query("select * from university_student_talk
													 where state_code = '$state' and universityId = ".$universityId." AND type = 'CampusJobs' order by dateTime desc");
									if(mysql_numrows($sql) > 0) {
										while($row=mysql_fetch_array($sql)) {
								?>
										<p>
											<a href="university_student_talk_view.php?id=<?php echo $row['id'];?>" onmousemove="this.style.color='red'"
											  onmouseout="this.style.color='black'"
											  style="background-color: #E6E6E6 !important;border: 1px solid white;">
											  <span style="color:black !important;"><?php echo $row['title'];?></span>
											</a>
										  </p>
								<?php
										}
									} else {
										?>
										<p><center>No Topics Found</center></p>
									<?php
									}
								?>
							</div>
							<?php if(mysql_numrows($sql) > 0) { ?>
								<a href="student_talk_all.php?universityId=<?php echo $universityId;?>&type=CampusJobs" class="read-btn-tab studenttalk_viewmore" style="padding: 4px;background-color: #3B6CA6;color:white;">View More</a>
							<?php } ?>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-6">
				<div class="cd-tabs table-margin">
					<nav class="tab-head">
						<ul class="cd-tabs-navigation" style="width:100%;">
							<ul class="cd-tabs-navigation" style="width:100%;">
							<li style="width:100%;">
							  <a style="color:#00A2ED !important;font-size:16px;text-align:left;height: 40px;padding:11px 19px;background-color: #F5F5F5 !important;" data-content="hot-list" class="selected" href="#0">
								  Changing Major / Study Groups
							  </a>
							</li>
						</ul> <!-- cd-tabs-navigation -->
					</nav>
					
					<ul class="cd-tabs-content tab-content-size">
						<li data-content="hot-list" class="selected" style="padding: 2px !important;">
							<div class="content-tab" style="padding: 2px !important;">
								<?php
									$sql=mysql_query("select * from university_student_talk
													 where state_code = '$state' and universityId = ".$universityId." AND type = 'ChangeGroups' order by dateTime desc");
									if(mysql_numrows($sql) > 0) {
										while($row=mysql_fetch_array($sql)) {
								?>
										<p>
											<a href="university_student_talk_view.php?id=<?php echo $row['id'];?>" onmousemove="this.style.color='red'"
											  onmouseout="this.style.color='black'"
											  style="background-color: #E6E6E6 !important;border: 1px solid white;">
											  <span style="color:black !important;"><?php echo $row['title'];?></span>
											</a>
										  </p>
								<?php
										}
									} else {
										?>
										<p><center>No Topics Found</center></p>
									<?php
									}
								?>
							</div>
							<?php if(mysql_numrows($sql) > 0) { ?>
								<a href="student_talk_all.php?universityId=<?php echo $universityId;?>&type=ChangeGroups" class="read-btn-tab studenttalk_viewmore" style="padding: 4px;background-color: #3B6CA6;color:white;">View More</a>
							<?php } ?>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="cd-tabs table-margin">
					<nav class="tab-head">
						<ul class="cd-tabs-navigation" style="width:100%;">
							<ul class="cd-tabs-navigation" style="width:100%;">
							<li style="width:100%;">
							  <a style="color:#00A2ED !important;font-size:16px;text-align:left;height: 40px;padding:11px 19px;background-color: #F5F5F5 !important;" data-content="hot-list" class="selected" href="#0">
								  Other Topics
							  </a>
							</li>
						</ul> <!-- cd-tabs-navigation -->
					</nav>
					
					<ul class="cd-tabs-content tab-content-size">
						<li data-content="hot-list" class="selected" style="padding: 2px !important;">
							<div class="content-tab" style="padding: 2px !important;">
								<?php
									$sql=mysql_query("select * from university_student_talk
													 where state_code = '$state' and universityId = ".$universityId." AND type = 'OtherTopics' order by dateTime desc");
									if(mysql_numrows($sql) > 0) {
										while($row=mysql_fetch_array($sql)) {
								?>
										<p>
											<a href="university_student_talk_view.php?id=<?php echo $row['id'];?>" onmousemove="this.style.color='red'"
											  onmouseout="this.style.color='black'"
											  style="background-color: #E6E6E6 !important;border: 1px solid white;">
											  <span style="color:black !important;"><?php echo $row['title'];?></span>
											</a>
										  </p>
								<?php
										}
									} else {
										?>
										<p><center>No Topics Found</center></p>
									<?php
									}
								?>
							</div>
							<?php if(mysql_numrows($sql) > 0) { ?>
								<a href="student_talk_all.php?universityId=<?php echo $universityId;?>&type=OtherTopics" class="read-btn-tab studenttalk_viewmore" style="padding: 4px;background-color: #3B6CA6;color:white;">View More</a>
							<?php } ?>
						</li>
					</ul>
				</div>
			</div>
		</div>
					

            </div>
            <!-- TOP BUTTONS ENDS-->

<br style="clear:both;"><br><br><br><br><br><br>			
            
            
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
    $( "#EndDate" ).datepicker({minDate: 0});
  });
  </script>

<?php include "config/social.php" ;  ?>

</body>
</html>