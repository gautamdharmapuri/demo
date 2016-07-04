<?php error_reporting(0); include"config/connection.php";	   ?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head><base href="/">

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Profile | NRIs</title>
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
    
    <link rel="stylesheet" href="css/animate-custom.css">    
    
    	<link rel="stylesheet" href="css/tab/style.css"> <!-- Resource style -->
	<script src="js/tab/modernizr.js"></script> <!-- Modernizr -->
  <!--[if !IE]><!-->
	
    

        <link rel="stylesheet" href="css/fancybox/jquery.fancybox-buttons.css">
        <link rel="stylesheet" href="css/fancybox/jquery.fancybox.css">        
       
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
.cat_heading
{
color: #3c3c3c;;font-family: "Montserrat",sans-serif;font-size: 18px;font-weight: 700;line-height: 3px; margin: 0;padding: 20px 0 10px;text-align: left;text-transform: uppercase;
}



.profile-details
{
padding:10px;
}
.profile-details div {
    border-bottom: 1px solid #ccc;
    color: #000;
    font-size: 15px;
    font-weight: bold;
    padding-bottom: 10px;
	text-align:left;
	width:100%;
}
.profile-details div b {
    color: #029cd3;
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

.span-email {
    background: #ccc none repeat scroll 0 0;
    border: 1px solid lightskyblue;
    cursor: not-allowed;
    font-weight: bold;
    padding: 5px;
	text-align:left;
}

			th,td, tr {
			vertical-align:middle;
			height:35px;
		}
		th {
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
	
	.cd-tabs-content li {
		overflow : scroll;
		height: 416px;
	}
	</style> 
<script type="text/javascript">

  function checkForm(form)
  {
   
  
   

    if(form.Password.value != "" && form.Password.value == form.CnfPassword.value) {
      if(form.Password.value.length < 8) {
        alert("Error: Password must contain at least 8 characters!");
        form.Password.focus();
        return false;
      }
     
      re = /[0-9]/;
      if(!re.test(form.Password.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.Password.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.Password.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.Password.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.Password.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.Password.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.Password.focus();
      return false;
    }
	
	
	
	
 
    return true;
  }



</script>

</head>
<body>

<div class="loader"><div class="loader_html"></div></div>



	<?php // include "config/menu.php" ;  
	include "config/menu_inner_state.php" ; 
	?>
	
	<div class="clearfix"></div>

    
		<?php include_once('stock_block.php');?>

     
     
    
    <?php include_once('top_container_links.php');?>
     
    
<!-- Section-1 WRAP START-->	
<div class="section-1-wrap" style="min-height:600px;">	
<!-- Section-1 START-->	
		<div class="col-md-12">
			
			
			<div class="col-md-3" style="margin:0 auto;">
            	
                            <div style="width:30%;float:left;">&nbsp;</div>
                            <div class="nri-talk" style="width:70%;">
                                          <div class="head-title-no-pad">
                                              <h4 class="cat_heading"><?php echo ucwords($_SESSION['Nris_session']['fname']); ?> Profile</h4>
                                        </div>
                                                <div class="bord-cla">
                                                 <ul style="padding-left:5px;padding-right:5px;height:100px;">
                                                      
                                                       
                                                        <li><img src="img/list.jpg" alt=">">&nbsp;<a href="<?php echo $siteUrlConstant;?>profile">My Profile</a></li>
                                                        <li><img src="img/list.jpg" alt=">">&nbsp;<a href="<?php echo $siteUrlConstant;?>myads">My Ads</a></li>
                                                        <li style="border-bottom:none;"><img src="img/list.jpg" alt=">">&nbsp;<a href="<?php echo $siteUrlConstant;?>profile?action=edit">Edit Profile</a></li>                                                                                                                
                                                      
                                                        
                                              </ul>                                                         
                                              </div>        
                            </div>
                </div>
			
			<div class="col-md-9" style="margin:0 auto;">
				<div class="cd-tabs table-margin" style="margin-top:54px;">
                                                  <nav class="tab-head">
                                                      <ul class="cd-tabs-navigation" style="width:100%;">
                                                          <li class="tab-size" style="width:10%;"><a style="text-align:center;height: 40px;padding:11px 19px;" data-content="hot-list1" class="selected" href="#0">Auto</a></li>
                                                          <li class="tab-size" style="width:10%;"><a data-content="hot-list2" href="#0" style="text-align:center;height: 40px;padding:11px 19px;width:auto;" >Baby Sitting</a></li>
                                                           <li class="tab-size" style="width:10%;"><a data-content="hot-list3" href="#0" style="text-align:center;height: 40px;padding:11px 19px;" >Education</a></li>
														   <li class="tab-size" style="width:10%;"><a data-content="hot-list4" href="#0" style="text-align:center;height: 40px;padding:11px 19px;" >Electronics</a></li>
														   <li class="tab-size" style="width:10%;"><a data-content="hot-list5" href="#0" style="text-align:center;height: 40px;padding:11px 19px;" >Free Stuff</a></li>
														   <li class="tab-size" style="width:10%;"><a data-content="hot-list6" href="#0" style="text-align:center;height: 40px;padding:11px 19px;" >Garage</a></li>
														   <li class="tab-size" style="width:10%;"><a data-content="hot-list7" href="#0" style="text-align:center;height: 40px;padding:11px 19px;" >Jobs</a></li>
														   <li class="tab-size" style="width:10%;"><a data-content="hot-list8" href="#0" style="text-align:center;height: 40px;padding:11px 19px;" >MyPartner</a></li>
														   <li class="tab-size" style="width:10%;"><a data-content="hot-list9" href="#0" style="text-align:center;height: 40px;padding:11px 19px;" >Roommates</a></li>
														   <li class="tab-size" style="width:10%;"><a data-content="hot-list10" href="#0" style="text-align:center;height: 40px;padding:11px 19px;" >Realestate</a></li>
                                                      </ul> <!-- cd-tabs-navigation -->
                                                  </nav>
                                                  
                                                  <ul class="cd-tabs-content tab-content-size">
                                                      <li data-content="hot-list1" class="selected">
														<table align="center" >
                                                                            <thead>
                                                                            <tr>
																			<th align="center">Title</th>
                                                                               <th style="text-align: left;">Views</th>
																			   <th style="text-align: left;">Action</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
																		<?php
																		$query1 = "select a.* from post_free_auto a
																		where ConatctEmail = '".$_SESSION['Nris_session']['email']."' and TitleAD != '' group by a.id order by a.total_views desc";
																		$result = mysql_query($query1);
																							$i=1;					
																							while($rs=mysql_fetch_array($result))
																							{ ?> 
																								<tr>
																									<td>
																										<?php if($rs['Address'] != '') { ?>
																											<img src="images/map-icon.png" alt="Map">
																										<?php } ?>
																										<?php if($rs['image1'] != '') { ?>
																											<img src="images/image-icon.png" alt="Image">
																										<?php } ?>
																										
																										<a href="<?php echo $siteUrlConstant;?>auto_inner_view?ViewId=<?php echo md5($rs['id']);?>"
																										onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">
																										<?php echo ucwords($rs['TitleAD']);?></a></td>
																							<td>
																									<a href="<?php echo $siteUrlConstant;?>auto_inner_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php  echo $rs['total_views'];?></a>
																							</td>
																							<td><a href="delete?id=<?php echo $rs['id'];?>&type=auto">Delete</a></td>
																							   </tr>
																						<?php }   
																						
																			  ?>
																			</tbody>
																	</table>
													  </li>
													  <li data-content="hot-list2">
														<table align="center" >
                                                                            <thead>
                                                                            <tr>
																			<th align="center">Title</th>
                                                                               <th style="text-align: left;">Views</th>
																			   <th style="text-align: left;">Action</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
																		<?php
																		$query1 = "select a.* from post_free_baby_sitting a
																		where ConatctEmail = '".$_SESSION['Nris_session']['email']."' and TitleAD != '' group by a.id order by a.total_views desc";
																		$result = mysql_query($query1);
																							$i=1;					
																							while($rs=mysql_fetch_array($result))
																							{ ?> 
																								<tr>
																									<td>
																										<?php if($rs['City'] != '') { ?>
																											<img src="images/map-icon.png" alt="Map">
																										<?php } ?>
																										<?php if($rs['image'] != '') { ?>
																											<img src="images/image-icon.png" alt="Image">
																										<?php } ?>
																										
																										<a href="<?php echo $siteUrlConstant;?>baby_sitting_inner_view?ViewId=<?php echo md5($rs['id']);?>"
																										onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">
																										<?php echo ucwords($rs['TitleAD']);?></a></td>
																							<td>
																									<a href="<?php echo $siteUrlConstant;?>baby_sitting_inner_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php  echo $rs['total_views'];?></a>
																							</td>
																							<td><a href="delete?id=<?php echo $rs['id'];?>&type=baby_sitting">Delete</a></td>
																							   </tr>
																						<?php }   
																						
																			  ?>
																			</tbody>
																	</table>
													  </li>
													  <li data-content="hot-list3">
														<table align="center" >
                                                                            <thead>
                                                                            <tr>
																			<th align="center">Title</th>
                                                                               <th style="text-align: left;">Views</th>
																			   <th style="text-align: left;">Action</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
																		<?php
																		$query1 = "select a.* from post_free_education a
																		where ConatctEmail = '".$_SESSION['Nris_session']['email']."' and TitleAD != '' group by a.id order by a.total_views desc";
																		$result = mysql_query($query1);
																							$i=1;					
																							while($rs=mysql_fetch_array($result))
																							{ ?> 
																								<tr>
																									<td>
																										<?php if($rs['City'] != '') { ?>
																											<img src="images/map-icon.png" alt="Map">
																										<?php } ?>
																										<?php if($rs['image'] != '' || $rs['image1'] != '') { ?>
																											<img src="images/image-icon.png" alt="Image">
																										<?php } ?>
																										
																										<a href="<?php echo $siteUrlConstant;?>education_inner_view?ViewId=<?php echo md5($rs['id']);?>"
																										onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">
																										<?php echo ucwords($rs['TitleAD']);?></a></td>
																							<td>
																									<a href="<?php echo $siteUrlConstant;?>education_inner_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php  echo $rs['total_views'];?></a>
																							</td>
																							<td><a href="delete?id=<?php echo $rs['id'];?>&type=education">Delete</a></td>
																							   </tr>
																						<?php }   
																						
																			  ?>
																			</tbody>
																	</table>
													  
													  </li>
													  <li data-content="hot-list4">
														<table align="center" >
                                                                            <thead>
                                                                            <tr>
																			<th align="center">Title</th>
                                                                               <th style="text-align: left;">Views</th>
																			   <th style="text-align: left;">Action</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
																		<?php
																		$query1 = "select a.* from post_free_electronics a
																		where ConatctEmail = '".$_SESSION['Nris_session']['email']."' and TitleAD != '' group by a.id order by a.total_views desc";
																		$result = mysql_query($query1);
																							$i=1;					
																							while($rs=mysql_fetch_array($result))
																							{ ?> 
																								<tr>
																									<td>
																										<?php if($rs['City'] != '') { ?>
																											<img src="images/map-icon.png" alt="Map">
																										<?php } ?>
																										<?php if($rs['image'] != '' || $rs['image1'] != '') { ?>
																											<img src="images/image-icon.png" alt="Image">
																										<?php } ?>
																										
																										<a href="<?php echo $siteUrlConstant;?>electronics_inner_view?ViewId=<?php echo md5($rs['id']);?>"
																										onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">
																										<?php echo ucwords($rs['TitleAD']);?></a></td>
																							<td>
																									<a href="<?php echo $siteUrlConstant;?>electronics_inner_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php  echo $rs['total_views'];?></a>
																							</td>
																							<td><a href="delete?id=<?php echo $rs['id'];?>&type=electronics">Delete</a></td>
																							   </tr>
																						<?php }   
																						
																			  ?>
																			</tbody>
																	</table>
													  </li>
													  <li data-content="hot-list5">
														<table align="center" >
                                                                            <thead>
                                                                            <tr>
																			<th align="center">Title</th>
                                                                               <th style="text-align: left;">Views</th>
																			   <th style="text-align: left;">Action</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
																		<?php
																		$query1 = "select a.* from post_free_stuff a
																		where ConatctEmail = '".$_SESSION['Nris_session']['email']."' and TitleAD != '' group by a.id order by a.total_views desc";
																		$result = mysql_query($query1);
																							$i=1;					
																							while($rs=mysql_fetch_array($result))
																							{ ?> 
																								<tr>
																									<td>
																										<?php if($rs['City'] != '') { ?>
																											<img src="images/map-icon.png" alt="Map">
																										<?php } ?>
																										<?php if($rs['image'] != '' || $rs['image1'] != '') { ?>
																											<img src="images/image-icon.png" alt="Image">
																										<?php } ?>
																										
																										<a href="<?php echo $siteUrlConstant;?>free_stuff_inner_view?ViewId=<?php echo md5($rs['id']);?>"
																										onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">
																										<?php echo ucwords($rs['TitleAD']);?></a></td>
																							<td>
																									<a href="<?php echo $siteUrlConstant;?>free_stuff_inner_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php  echo $rs['total_views'];?></a>
																							</td>
																							<td><a href="delete?id=<?php echo $rs['id'];?>&type=free_stuff">Delete</a></td>
																							   </tr>
																						<?php }   
																						
																			  ?>
																			</tbody>
																	</table>
													  </li>
													  <li data-content="hot-list6">
														<table align="center" >
                                                                            <thead>
                                                                            <tr>
																			<th align="center">Title</th>
                                                                               <th style="text-align: left;">Views</th>
																			   <th style="text-align: left;">Action</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
																		<?php
																		$query1 = "select a.* from post_free_garage_sale a
																		where ConatctEmail = '".$_SESSION['Nris_session']['email']."' and TitleAD != '' group by a.id order by a.total_views desc";
																		$result = mysql_query($query1);
																							$i=1;					
																							while($rs=mysql_fetch_array($result))
																							{ ?> 
																								<tr>
																									<td>
																										<?php if($rs['City'] != '') { ?>
																											<img src="images/map-icon.png" alt="Map">
																										<?php } ?>
																										<?php if($rs['image'] != '' || $rs['image1'] != '') { ?>
																											<img src="images/image-icon.png" alt="Image">
																										<?php } ?>
																										
																										<a href="<?php echo $siteUrlConstant;?>garagesale_inner_view?ViewId=<?php echo md5($rs['id']);?>"
																										onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">
																										<?php echo ucwords($rs['TitleAD']);?></a></td>
																							<td>
																									<a href="<?php echo $siteUrlConstant;?>garagesale_inner_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php  echo $rs['total_views'];?></a>
																							</td>
																							<td><a href="delete?id=<?php echo $rs['id'];?>&type=garagesale">Delete</a></td>
																							   </tr>
																						<?php }   
																						
																			  ?>
																			</tbody>
																	</table>
													  </li>
													  <li data-content="hot-list7">
														<table align="center" >
                                                                            <thead>
                                                                            <tr>
																			<th align="center">Title</th>
                                                                               <th style="text-align: left;">Views</th>
																			   <th style="text-align: left;">Action</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
																		<?php
																		$query1 = "select a.* from post_free_job a
																		where ConatctEmail = '".$_SESSION['Nris_session']['email']."' and TitleAD != '' group by a.id order by a.total_views desc";
																		$result = mysql_query($query1);
																							$i=1;					
																							while($rs=mysql_fetch_array($result))
																							{ ?> 
																								<tr>
																									<td>
																										<?php if($rs['City'] != '') { ?>
																											<img src="images/map-icon.png" alt="Map">
																										<?php } ?>
																										<?php if($rs['image'] != '' || $rs['image1'] != '') { ?>
																											<img src="images/image-icon.png" alt="Image">
																										<?php } ?>
																										
																										<a href="<?php echo $siteUrlConstant;?>jobs_inner_view?ViewId=<?php echo md5($rs['id']);?>"
																										onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">
																										<?php echo ucwords($rs['TitleAD']);?></a></td>
																							<td>
																									<a href="<?php echo $siteUrlConstant;?>jobs_inner_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php  echo $rs['total_views'];?></a>
																							</td>
																							<td><a href="delete?id=<?php echo $rs['id'];?>&type=jobs">Delete</a></td>
																							   </tr>
																						<?php }   
																						
																			  ?>
																			</tbody>
																	</table>
													  </li>
													  <li data-content="hot-list8">
														<table align="center" >
                                                                            <thead>
                                                                            <tr>
																			<th align="center">Title</th>
                                                                               <th style="text-align: left;">Views</th>
																			   <th style="text-align: left;">Action</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
																		<?php
																		$query1 = "select a.* from post_free_mypart a
																		where ConatctEmail = '".$_SESSION['Nris_session']['email']."' and TitleAD != '' group by a.id order by a.total_views desc";
																		$result = mysql_query($query1);
																							$i=1;					
																							while($rs=mysql_fetch_array($result))
																							{ ?> 
																								<tr>
																									<td>
																										<?php if($rs['City'] != '') { ?>
																											<img src="images/map-icon.png" alt="Map">
																										<?php } ?>
																										<?php if($rs['image'] != '' || $rs['image1'] != '') { ?>
																											<img src="images/image-icon.png" alt="Image">
																										<?php } ?>
																										
																										<a href="<?php echo $siteUrlConstant;?>mypartner_inner_view?ViewId=<?php echo md5($rs['id']);?>"
																										onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">
																										<?php echo ucwords($rs['TitleAD']);?></a></td>
																							<td>
																									<a href="<?php echo $siteUrlConstant;?>mypartner_inner_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php  echo $rs['total_views'];?></a>
																							</td>
																							<td><a href="delete?id=<?php echo $rs['id'];?>&type=mypartner">Delete</a></td>
																							   </tr>
																						<?php }   
																						
																			  ?>
																			</tbody>
																	</table>
													  </li>
													  <li data-content="hot-list9">
														<table align="center" >
                                                                            <thead>
                                                                            <tr>
																			<th align="center">Title</th>
                                                                               <th style="text-align: left;">Views</th>
																			   <th style="text-align: left;">Action</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
																		<?php
																		$query1 = "select a.* from post_free_roommates a
																		where ConatctEmail = '".$_SESSION['Nris_session']['email']."' and TitleAD != '' group by a.id order by a.total_views desc";
																		$result = mysql_query($query1);
																							$i=1;					
																							while($rs=mysql_fetch_array($result))
																							{ ?> 
																								<tr>
																									<td>
																										<?php if($rs['City'] != '') { ?>
																											<img src="images/map-icon.png" alt="Map">
																										<?php } ?>
																										<?php if($rs['image'] != '' || $rs['image1'] != '') { ?>
																											<img src="images/image-icon.png" alt="Image">
																										<?php } ?>
																										
																										<a href="<?php echo $siteUrlConstant;?>roommates_inner_view?ViewId=<?php echo md5($rs['id']);?>"
																										onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">
																										<?php echo ucwords($rs['TitleAD']);?></a></td>
																							<td>
																									<a href="<?php echo $siteUrlConstant;?>roommates_inner_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php  echo $rs['total_views'];?></a>
																							</td>
																							<td><a href="delete?id=<?php echo $rs['id'];?>&type=roommates">Delete</a></td>
																							   </tr>
																						<?php }   
																						
																			  ?>
																			</tbody>
																	</table>
													  </li>
													  <li data-content="hot-list10">
														<table align="center" >
                                                                            <thead>
                                                                            <tr>
																			<th align="center">Title</th>
                                                                               <th style="text-align: left;">Views</th>
																			   <th style="text-align: left;">Action</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
																		<?php
																		$query1 = "select a.* from post_free_real_estate a
																		where ConatctEmail = '".$_SESSION['Nris_session']['email']."' and TitleAD != '' group by a.id order by a.total_views desc";
																		$result = mysql_query($query1);
																							$i=1;					
																							while($rs=mysql_fetch_array($result))
																							{ ?> 
																								<tr>
																									<td>
																										<?php if($rs['City'] != '') { ?>
																											<img src="images/map-icon.png" alt="Map">
																										<?php } ?>
																										<?php if($rs['image'] != '' || $rs['image1'] != '') { ?>
																											<img src="images/image-icon.png" alt="Image">
																										<?php } ?>
																										
																										<a href="<?php echo $siteUrlConstant;?>realestate_inner_view?ViewId=<?php echo md5($rs['id']);?>"
																										onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">
																										<?php echo ucwords($rs['TitleAD']);?></a></td>
																							<td>
																									<a href="<?php echo $siteUrlConstant;?>realestate_inner_view?ViewId=<?php echo md5($rs['id']);?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'"><?php  echo $rs['total_views'];?></a>
																							</td>
																							<td><a href="delete?id=<?php echo $rs['id'];?>&type=realestate">Delete</a></td>
																							   </tr>
																						<?php }   
																						
																			  ?>
																			</tbody>
																	</table>
													  </li>
												  </ul>
			</div>
			
			</div>
			
				
            
                
                
                
                
                
                
		</div>
        <!-- Section-1 ENDS -->
</div><!-- End Section-1 WRAP -->

	
    
 	
	
    
    
<div style="clear:both"></div>    
	
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

<!-- Grab Google CDN's jQuery, fall back to local if offline -->
  		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  		<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
        
        
	<!-- FancyBox -->
		<script src="js/fancybox/jquery.fancybox.js"></script>
		<script src="js/fancybox/jquery.fancybox-buttons.js"></script>
		<script src="js/fancybox/jquery.fancybox-thumbs.js"></script>
        <script src="js/fancybox/jquery.easing-1.3.pack.js"></script>
		<script src="js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
        

        

        
        <script type="text/javascript">
        	$(document).ready(function() {
				$(".various").fancybox({
					maxWidth	: 800,
					maxHeight	: 600,
					fitToView	: false,
					width		: '70%',
					height		: '70%',
					autoSize	: false,
					closeClick	: false,
					openEffect	: 'elastic',
					closeEffect	: 'none'
				});
			});
		</script>

</body>
</html>