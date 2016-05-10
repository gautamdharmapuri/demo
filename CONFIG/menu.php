 <script type="text/javascript">
		var site_url = '<?php echo SITE_BASE_URL.'/';?>';
	</script>   
<header id="header" class="header-3">
<div class="menu-wrap clearfix">











    <div class="col-md-12 header-top-two" style="background-image: url('images/banner.jpg');">
	   
	   <div class="col-md-4">
			  <div class="logo"><a href="index.php"><img alt="" src="img/logo.png"></a></div>
	   </div>
	   <div class="col-md-8">
			  <?php
					 if(isset($_SESSION['Nris_session'])) { ?>
							<div class="new-uer-right-div">
								   <a href="logout.php" class="reg">Logout</a>
								   <a href="profile.php" class="reg"><i class="fa fa-user"></i>&nbsp;Profile</a>
							</div>          
			  <?php  } else { ?>
							<div class="new-uer-right-div">
								  <a class="reg" href="javascript:;" data-toggle="modal" data-target="#myModal"><i class="fa fa-lock"></i>&nbsp;login</a>
								  <a class="reg" href="register.php">Register</a>
							</div>
			  <?php  } ?> 
	   </div>
        
        
		
        <div class="advertise-header" style="display: none;">
            
               
               <?php
				$current_date = date('Y-m-d');
			//	echo $current_date;
				$home_ad_query1 = "select * from us_ads where ad_position='Home-Top-Small' and ad_position_no='1' and status='Active' order by id desc limit 1";
			//	echo $home_ad_query1 ;
				$home_ad_res1 = mysql_query($home_ad_query1);
				//if(mysql_num_rows($home_ad_res1)>0)
				$home_fs1 = mysql_fetch_array($home_ad_res1);
				if($home_fs1['edate'] >= $current_date && $home_fs1['image'] != '')
				{

				$home_fs1['url'] = ($home_fs1['url'] != '') ? $home_fs1['url'] : 'javascript:;';
				 echo '<a href="' . $home_fs1['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_fs1['image'].'"></a>';
				} else { 
			?>		
                <img src="img/home1.jpg" alt="Advertisement">
                 <?php
				 $home_ad_query1 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Top-Small' and ad_position_no='1' and edate < '".$current_date."' ");
				  } ?>
          
           
           
            
             <?php

				$home_ad_query2 = "select * from us_ads where ad_position='Home-Top-Large' and ad_position_no='1' and status='Active' order by id desc limit 1";
			//	echo $home_ad_query2 ;
				$home_ad_res2 = mysql_query($home_ad_query2);
				$home_fs2 = mysql_fetch_array($home_ad_res2);
				if($home_fs2['edate'] >= $current_date && $home_fs2['image'] != '')
				{
					$home_fs2['url'] = ($home_fs2['url'] != '') ? $home_fs2['url'] : 'javascript:;';	
					echo '<a href="' . $home_fs2['url'] . '" target="_blank"><img src="admin/uploads/us_ads/'.$home_fs2['image'].'"></a>';
				} else { 
				 $home_ad_query1 = mysql_query("update us_ads set status='De-Active' where ad_position='Home-Top-Large' and ad_position_no='1' and edate < '".$current_date."' ");
			?>		            
                <a href="javascript:;"><img src="img/home2.jpg" alt="Advertisement"></a>
               <?php } ?>
        </div>
    
    
	
	</div>
    
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<nav class="navigation">
        <ul>

            
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="#" data-toggle="modal" data-target="#nri_post">NRI's talk</a></li>
        <li><a href="discussion_board_data.php">National Forum</a></li>
        <li><a href="realestate.php">National Real Estate</a></li>
        <li><a href="education.php">Education& Teaching</a></li>
        <li><a href="auto.php">National Autos</a></li>
        <li><a href="mypartner.php">My Partner</a></li>
       
  <li><a href="javascript:;"> National Jobs</a>
            <ul class="subnav">
			  <?php
					 $jobQuery = "select * from  job_category order by id asc";
					 $resultJob = mysql_query($jobQuery);                                                
					 while($jobTop = mysql_fetch_array($resultJob)) {
			  ?>
					 <li><a href="national_jobs.php?type=<?php echo $jobTop['id'];?>"><?php echo rtrim($jobTop['name'],'Jobs');?> Jobs</a></li>
			  <?php } ?>
            </ul>
        </li>
        
  <li><a href="javascript:;">Best Visiting Spots</a>
            <ul class="subnav">
            <li><a href="best_casinos.php">Casinos </a></li>
            <li><a href="best_restaurants.php">Restaurants </a></li>
            <li><a href="best_temples.php">Temples </a></li>
            <li><a href="best_pubs.php">Pubs </a></li>
             </ul>
        </li>
        <!-- <li id="famousTemples"><a href="#famousIndianTemples">Famous Indian Temples</a></li> -->
        <li><a href="javascript:;">Carpool</a>
            <ul>
            <li><a href="carpool_data.php">Inter state Carpool</a></li>
            <li><a href="carpool_data.php">International carpool</a></li>		
            </ul>
        </li>
  <li><a href="videos.php">Movies/Videos </a>
  
			 <ul>
            <?php

			$query_video_lang="select * from  video_languages order by id desc";
			$result_video_lang=mysql_query($query_video_lang);                                                
			while($rs_video_lang=mysql_fetch_array($result_video_lang))
			{?>				
            <li><a href="videos.php?lang=<?php echo $rs_video_lang['name'] ?>"><?php echo $rs_video_lang['name'] ?></a></li>
			<?php } ?>
            </ul>
        </li>
        
        
		<li><a href="blog.php">Blog</a></li>
        <li>
			  <a href="javascript:;"  data-toggle="modal" data-target="#student_talk">Student's Talk</a>
        </li>
        <li><a href="advertising.php">Advertise </a></li>
        <li><a href="contact.php">Contact </a></li>      
      </ul>
    </nav><!-- End navigation -->
</div>
<!-- End container -->
</header><!-- End header -->

<!-- Modal -->

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <?php	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  ?>	
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><center><img src="img/logo.png" height="65" width="184" /></center></h4>
        </div>
        <div class="modal-body">
			 <form name="formLogin" id="formLogin" method="post" class="form-horizontal" action="verify.php">
             <div id="myLoginuser"></div>  
            <div style="width:60%;float:left;">
            <h5>Existing user? Login</h5>
            <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:left;font-weight:bold;">Email Id</label>            
	<div class="col-sm-8">
		<input type="text" class="form-control" id="Loginemail" name="Loginemail" placeholder="Enter E-mail" style="width:100%;" tabindex="1"  required="required"  value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>" />
	</div>
</div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:left;font-weight:bold;">Password</label>
	<div class="col-sm-8">
		<input type="password" class="form-control" id="LoginPassword" name="LoginPassword" placeholder="Enter Password" style="width:100%;" tabindex="2" required="required"  value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>" />
	</div>
	<div class="col-sm-8">
		<input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE['remember_me'])) { echo 'checked="checked"'; } else { echo ''; } ?> />&nbsp;Remember Me
	</div>    
</div>


<div class="form-group">
	<div class="col-sm-offset-2 col-sm-8">		
		<!--<button type="button" class="btn btn-success" tabindex="3" style="float:right;" onclick="showUser();">Sign In</button>-->
        <input type="hidden" name="currentURL" id="currentURL" value="<?php echo $actual_link ; ?>" />
		&nbsp;&nbsp;<a href="forgot_password.php" class="read-btn-tab" style="float:right;">Forgot Password</a>
        <button type="submit" name="cmdLoginbtn" id="cmdLoginbtn" class="btn btn-success" tabindex="3" style="float:right;">Sign In</button>
	</div>
</div>
            </div>
            </form>
            
            <div style="width:38%;float:right;">
			<center>
            <h3><a href="register.php"><img src="img/register.png" /></a></h3><br />
            <?php
            include_once("fb_login/config.php");
            include_once("google_login/config.php");
            ?>
            <h3>
                <?php
                if(!$fbuser){
                    $fbuser = null;
                    $loginUrl = $facebook->getLoginUrl(array('redirect_uri'=>$homeurl,'scope'=>$fbPermissions));
                    echo '<a href="'.$loginUrl.'"><img src="img/login_fb.png"></a>';    
                }
                ?>
                <!-- <a href="<?php echo SITE_BASE_URL.'/fb_login' ?>"><img src="img/login_fb.png" /></a> -->
            </h3>
            <h3>
            <?php
                $authUrl = $gClient->createAuthUrl();
                echo '<a href="'.$authUrl.'"><img src="google_login/images/glogin.png" alt=""/></a>';
            ?>
            </h3>
            <h3>
                <?php echo '<a href="twitter_login/process.php"><img src="twitter_login/images/sign-in-with-twitter.png" border="0" /></a>'; ?>
            </h3>
			</center>
            </div>
            
        </div>
        <div class="modal-footer" style="clear:both;">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</form>  
<!-- Modal -->
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