 <script type="text/javascript">
		var site_url = '<?php echo $siteUrlConstant;?>';
	</script>
 <?php
	   unset($_SESSION['state']);
	   $state = $defaultState = '';
 ?>
<header id="header" class="header-3">
<div class="menu-wrap clearfix">











    <div class="col-md-12 header-top-two" style="background-image: url('images/banner.jpg');">
	   
	   <div class="col-md-4">
			  <div class="logo"><a href="<?php echo $siteUrlConstant;?>"><img alt="Nris" src="img/logo.png" width="200" height="90"></a></div>
	   </div>
	   <div class="col-md-8">
			  <?php
					 if(isset($_SESSION['Nris_session'])) { ?>
							<div class="new-uer-right-div">
								   <?php include_once('top_social.php');?>
								   <a href="<?php echo $siteUrlConstant;?>logout" class="reg">Logout</a>
								   <a href="<?php echo $siteUrlConstant;?>profile" class="reg"><i class="fa fa-user"></i>&nbsp;Profile</a>
								   
								   
							</div>          
			  <?php  } else { ?>
							<div class="new-uer-right-div">
								   <?php include_once('top_social.php');?>
								  <a class="reg" href="javascript:;" data-toggle="modal" data-target="#myModal"><i class="fa fa-lock"></i>&nbsp;login</a>
								  <a class="reg" href="register">Register</a>
							</div>
			  <?php  } ?>
			  
	   </div>
	</div>
	
	<nav class="navigation">
        <ul>
        <li><a href="<?php echo $siteUrlConstant;?>">Home</a></li>
        <li><a href="<?php echo $siteUrlConstant;?>aboutus">About Us</a></li>
        <li><a href="javascript:;" data-toggle="modal" data-target="#change_state_nritalk">NRI's talk</a></li>
        <li><a href="<?php echo $siteUrlConstant;?>discussion_board_data">Forum</a></li>
        <li><a href="<?php echo $siteUrlConstant;?>realestate">National Real Estate</a></li>
        <li><a href="<?php echo $siteUrlConstant;?>education">Education& Teaching</a></li>
        <li><a href="<?php echo $siteUrlConstant;?>auto">National Autos</a></li>
        <li><a href="<?php echo $siteUrlConstant;?>mypartner">My Partner</a></li>
       
  <li><a href="javascript:;"> National Jobs</a>
            <ul class="subnav">
			  <?php
					 $jobQuery = "select * from  job_category order by id asc";
					 $resultJob = mysql_query($jobQuery);                                                
					 while($jobTop = mysql_fetch_array($resultJob)) {
							$jobName = str_replace('/','-',$jobTop['name']);
			  ?>
					 <li><a href="<?php echo $siteUrlConstant;?>national_jobs/<?php echo urlencode($jobName);?>"><?php echo rtrim($jobTop['name'],'Jobs');?> Jobs</a></li>
			  <?php } ?>
            </ul>
        </li>
        
  <li><a href="javascript:;">Best Visiting Spots</a>
            <ul class="subnav">
            <li><a href="<?php echo $siteUrlConstant;?>best_casinos">Casinos </a></li>
            <li><a href="<?php echo $siteUrlConstant;?>best_restaurants">Restaurants </a></li>
            <li><a href="<?php echo $siteUrlConstant;?>best_temples">Temples </a></li>
            <li><a href="<?php echo $siteUrlConstant;?>best_pubs">Pubs </a></li>
             </ul>
        </li>
        <li><a href="javascript:;">Carpool</a>
            <ul>
            <li><a href="<?php echo $siteUrlConstant;?>carpool_data/interstate">Inter state Carpool</a></li>
            <li><a href="<?php echo $siteUrlConstant;?>carpool_data/international">International carpool</a></li>		
            </ul>
        </li>
  <li><a href="javascript:;">Movies/Videos </a>
  
			 <ul>
            <?php

			$query_video_lang="select * from  video_languages order by id desc";
			$result_video_lang=mysql_query($query_video_lang);                                                
			while($rs_video_lang=mysql_fetch_array($result_video_lang))
			{?>				
            <li><a href="<?php echo $siteUrlConstant;?>videos/<?php echo $rs_video_lang['name'] ?>"><?php echo $rs_video_lang['name'] ?></a></li>
			<?php } ?>
            </ul>
        </li>
        
        
		<li><a href="<?php echo $siteUrlConstant;?>blog">Blog</a></li>
        <li>
			  <a href="javascript:;"  data-toggle="modal" data-target="#change_state_studenttalk">Student's Talk</a>
        </li>
        <li><a href="<?php echo $siteUrlConstant;?>advertising">Advertise </a></li>
        <li><a href="<?php echo $siteUrlConstant;?>contact">Contact </a></li>      
      </ul>
    </nav><!-- End navigation -->
</div>
<!-- End container -->
</header><!-- End header -->

<?php include_once('loginpop.php');?>
<!-- Modal  Free Post  -->
  <div class="modal fade" id="nri_post" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nri's Talk</h4>
        </div>
        <div class="modal-body">
          <p style="color:#000000;font-size:14px;">Select your State in the map to post an ad Locally or selective state or through out the united states.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>  
  <!-- Modal  Free Post  End -->
   <!-- Modal  Free Post  -->
  <div class="modal fade" id="student_talk" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Student's Talk</h4>
        </div>
        <div class="modal-body">
          <p style="color:#000000;font-size:14px;">Select your State in the map to post an ad Locally or selective state or through out the united states.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>  
  <!-- Modal  Free Post  End -->