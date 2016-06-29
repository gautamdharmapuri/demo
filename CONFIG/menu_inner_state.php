<?php

if(isset($_GET['State']) && $_GET['State'] != '') {
	
	$_SESSION['state'] = $_GET['State'];
	
} elseif(isset($_GET['state']) && $_GET['state'] != '') {

	$_SESSION['state']=$_GET['state'];
	
} elseif(isset($_GET['code']) && $_GET['code'] != '') {
	
	$_SESSION['state']=$_GET['code'];
	
} else {
}
$state = $defaultState = $_SESSION['state'];

if($_SERVER['SCRIPT_NAME']) {
		
}
if (strpos($_SERVER['SCRIPT_NAME'], 'aboutus') !== false || strpos($_SERVER['SCRIPT_NAME'], 'disclaimer') !== false) {
    $_SESSION['state'] = '';
	if($_GET['State'] != '') {
		$_SESSION['state'] = $_GET['State'];
	}
}

include_once('common_functions.php');

if(isset($_SESSION['state']) && $_SESSION['state'] != '') {
		if(strpos($siteUrlConstant,$_GET['State'].'.' === false)) {
				$siteUrlConstant = $protocol . "://" .$_SESSION['state'].'.'.$_SERVER['SERVER_NAME'].'/';
		}
}

?>

<script type="text/javascript">
var site_url = '<?php echo $siteUrlConstant;?>';
</script>

<header id="header" class="header-3">
<div class="menu-wrap clearfix">
		
		<?php

			$queryStateBanner = "select * from states where state_code = '".$defaultState."' and image != ''";
			$resultStateBannerTemp = mysql_query($queryStateBanner);
			$resultStateBanner = mysql_fetch_array($resultStateBannerTemp);
			if(mysql_numrows($resultStateBannerTemp) > 0)
			{?>
				<div class="col-md-12 header-top-two"
					 style="background-image: url('admin/uploads/state/<?php echo $resultStateBanner['image'];?>');background-position: 0px 0px;background-repeat: no-repeat;background-size: 100% 116px;">
		<?php } else { ?>
				<div class="col-md-12 header-top-two" style="background-image: url('images/banner.jpg');background-position: 0px 0px;background-repeat: no-repeat;background-size: 100% 116px;">
		<?php } ?>
        <div class="col-md-4">
				<div class="logo"><a href="<?php echo $siteUrlConstant;?>"><img alt="Nris" src="img/logo.png"></a></div>
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
								  <a class="reg" href="<?php echo $siteUrlConstant;?>register">Register</a>
							</div>
			  <?php  } ?> 
	   </div>
    
   </div>
    <nav class="navigation">
        <ul>

            
        <li><a href="<?php echo $siteUrlConstant;?>state?State=<?php echo $defaultState;?>">Home</a></li>
        <li><a href="<?php echo $siteUrlConstant;?>yellowpages"><?php echo $defaultState;?> Desi Pages</a></li>
        <li><a href="<?php echo $siteUrlConstant;?>discussion_board">Forum</a></li>
       
		<li><a href="javascript:;"> Free Ads</a>
            <ul class="subnav">
                <li><a href="<?php echo $siteUrlConstant;?>auto_inner?code=<?php echo $defaultState;?>">Auto</a></li>
                <li><a href="<?php echo $siteUrlConstant;?>baby_sitting_inner?code=<?php echo $defaultState;?>">Baby Sitting</a></li>  
                <li><a href="<?php echo $siteUrlConstant;?>education_inner?code=<?php echo $defaultState;?>">Education & Teaching</a></li>   
                <li><a href="<?php echo $siteUrlConstant;?>electronics_inner?code=<?php echo $defaultState;?>">Electronics</a></li>
                <li><a href="<?php echo $siteUrlConstant;?>free_stuff_inner?code=<?php echo $defaultState;?>">Free Stuff</a></li>                       
                <li><a href="<?php echo $siteUrlConstant;?>garagesale_inner?code=<?php echo $defaultState;?>">Garage Sale</a></li>                          
                <li><a href="<?php echo $siteUrlConstant;?>jobs_inner?code=<?php echo $defaultState;?>">Jobs</a></li>
                <li><a href="<?php echo $siteUrlConstant;?>mypartner_inner?code=<?php echo $defaultState;?>">My Partner</a></li>            
                <li><a href="<?php echo $siteUrlConstant;?>roommates_inner?code=<?php echo $defaultState;?>">Roommates</a></li>          
                <li><a href="<?php echo $siteUrlConstant;?>realestate_inner?code=<?php echo $defaultState;?>">Real Estate</a></li>
            </ul>
        </li>
        <li><a href="<?php echo $siteUrlConstant;?>blog">Blog</a></li>
        <li><a href="<?php echo $siteUrlConstant;?>discussion_room"><?php echo $defaultState;?> NRI's talk</a></li>
        <li><a href="javascript:;"> <?php echo $defaultState;?> Box Office</a>
            <ul class="subnav">
            <li><a href="<?php echo $siteUrlConstant;?>theaters?type=<?php echo urlencode('$1 Movie Theaters');?>&State=<?php echo $defaultState;?>">$1 Movie Theaters</a></li>
            <li><a href="<?php echo $siteUrlConstant;?>theaters?type=<?php echo urlencode('$ Saving Theaters');?>&State=<?php echo $defaultState;?>">$ Saving Theaters</a></li>
            <li><a href="<?php echo $siteUrlConstant;?>theaters?type=<?php echo urlencode('Top Rated Movie Theaters');?>&State=<?php echo $defaultState;?>">Top Rated Movie Theaters</a></li>
            <li><a href="<?php echo $siteUrlConstant;?>theaters?type=<?php echo urlencode('Open Theaters(Drive in Theaters)');?>&State=<?php echo $defaultState;?>">Open Theaters(Drive in Theaters)</a></li>          
            </ul>
        </li> 
        
        
        
          
        
  <li><a href="javascript:;">Casinos </a>
            <ul class="subnav">
            <li><a href="<?php echo $siteUrlConstant;?>top_rated_casinos?code=<?php echo $defaultState;?>">Top Rated Casinos </a></li>
            <li><a href="<?php echo $siteUrlConstant;?>casinos_inner?code=<?php echo $defaultState;?>"><?php echo $defaultState;?> Casinos </a></li>
            <li><a href="<?php echo $siteUrlConstant;?>casinos_near?code=<?php echo $defaultState;?>">Casinos Near Me</a></li>
             </ul>
        </li>
        <!-- <li id="famousTemples"><a href="#famousIndianTemples">Famous Indian Temples</a></li> -->
        <li><a href="javascript:;">Temples</a>
            <ul>
            <li><a href="<?php echo $siteUrlConstant;?>temples_inner?type=Hindu Temples&code=<?php echo $defaultState;?>">Hindu Temples </a></li>
            <li><a href="<?php echo $siteUrlConstant;?>temples_inner?type=ISKON Temple&code=<?php echo $defaultState;?>">ISKON Temples</a></li>
            <li><a href="<?php echo $siteUrlConstant;?>temples_inner?type=Jain Temples&code=<?php echo $defaultState;?>">Jain Temples</a></li>
            <li><a href="<?php echo $siteUrlConstant;?>temples_inner?type=Gurudwara&code=<?php echo $defaultState;?>">Gurudeara Temples</a></li>
            <li><a href="<?php echo $siteUrlConstant;?>temples_inner?type=Churches&code=<?php echo $defaultState;?>">Churches</a></li>
            <li><a href="<?php echo $siteUrlConstant;?>temples_inner?type=Mosques & Darga&code=<?php echo $defaultState;?>">Mosques &amp; Darga</a></li>
            <li><a href="<?php echo $siteUrlConstant;?>temples_inner?type=Budda Vihar&code=<?php echo $defaultState;?>">Budda Vihar</a></li>		
            <li><a href="<?php echo $siteUrlConstant;?>temples_inner?type=Other&code=<?php echo $defaultState;?>">Other</a></li>
            </ul>
        </li>
        
        
        <li><a href="javascript:;">Restaurants </a>
        <ul>
        <li><a href="<?php echo $siteUrlConstant;?>restaurants_inner?type=Top Rated Restaurants&code=<?php echo $defaultState;?>">Top Rated Restaurants </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>restaurants_inner?type=Indian Restaurants&code=<?php echo $defaultState;?>">Indian Restaurants</a></li>
		<li><a href="<?php echo $siteUrlConstant;?>restaurants_inner?type=Indian Vegetarian Restaurants&code=<?php echo $defaultState;?>">Indian Vegetarian Restaurants</a></li>
		<li><a href="<?php echo $siteUrlConstant;?>restaurants_inner?type=Halal Restaurants&code=<?php echo $defaultState;?>">Halal Restaurants </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>restaurants_inner?type=Thai Restaurants&code=<?php echo $defaultState;?>">Thai Restaurants </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>restaurants_inner?type=Chinese Restaurants&code=<?php echo $defaultState;?>">Chinese Restaurants </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>restaurants_inner?type=American Restaurants&code=<?php echo $defaultState;?>">American Restaurants </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>restaurants_inner?type=Mediterranean Restaurants&code=<?php echo $defaultState;?>">Mediterranean Restaurants </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>restaurants_inner?type=Mexican Restaurants&code=<?php echo $defaultState;?>">Mexican Restaurants </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>restaurants_inner?type=Italian Restaurants&code=<?php echo $defaultState;?>">Italian Restaurants </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>restaurants_inner?type=French Restaurants&code=<?php echo $defaultState;?>">French Restaurants </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>restaurants_inner?type=Spanish Restaurants&code=<?php echo $defaultState;?>">Spanish Restaurants </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>restaurants_inner?type=Other&code=<?php echo $defaultState;?>">other </a></li>
        </ul>
        </li>
  
        
        
        <li><a href="javascript:;">Sports</a>
        <ul>
        <li><a href="<?php echo $siteUrlConstant;?>sports_inner?type=Tennis Clubs&code=<?php echo $defaultState;?>">Tennis clubs </a></li>
     	<li><a href="<?php echo $siteUrlConstant;?>sports_inner?type=Cricket Clubs&code=<?php echo $defaultState;?>">Cricket Clubs </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>sports_inner?type=Shuttle (Badminton)&code=<?php echo $defaultState;?>">Shuttle (Badminton) </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>sports_inner?type=Board Games (Carom Board, Chess, Checkers, Brain Vita)&code=<?php echo $defaultState;?>">Board games ( carom board , chess , checkers , brain vita ) </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>sports_inner?type=GOLF Clubs&code=<?php echo $defaultState;?>">GOLF clubs </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>sports_inner?type=Swimming Pools&code=<?php echo $defaultState;?>">Swimming pools </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>sports_inner?type=Kayaking&code=<?php echo $defaultState;?>">Kayaking </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>sports_inner?type=Hiking&code=<?php echo $defaultState;?>">Hiking </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>sports_inner?type=Skating&code=<?php echo $defaultState;?>">Skating </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>sports_inner?type=Surfing&code=<?php echo $defaultState;?>">Surfing </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>sports_inner?type=Para Sailing&code=<?php echo $defaultState;?>">Para sailing </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>sports_inner?type=Boating&code=<?php echo $defaultState;?>">Boating </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>sports_inner?type=Other&code=<?php echo $defaultState;?>">Other </a></li>
        </ul>
        </li>
        
        
        <li><a href="javascript:;">Pub/Party Places</a>
        <ul>
        <li><a href="<?php echo $siteUrlConstant;?>pub_places?type=Spots Bars&code=<?php echo $defaultState;?>">Sports bars </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>pub_places?type=Bowling Bars&code=<?php echo $defaultState;?>">Bowling bars </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>pub_places?type=Night Clubs&code=<?php echo $defaultState;?>">Night Clubs </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>pub_places?type=Hukkah Bars&code=<?php echo $defaultState;?>">Hukkah Bars </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>pub_places?type=Dancing clubs&code=<?php echo $defaultState;?>">Dancing clubs </a></li>
		<li><a href="<?php echo $siteUrlConstant;?>pub_places?type=Salsa Bars&code=<?php echo $defaultState;?>">Salsa bars </a></li>		
		<li><a href="<?php echo $siteUrlConstant;?>pub_places?type=Other&code=<?php echo $defaultState;?>">Other </a></li>
        </ul>
        </li>
        
        <li><a href="javascript:;"><?php echo $defaultState;?> Carpool</a>
        <ul>
        <li><a href="<?php echo $siteUrlConstant;?>localcarpool"><?php echo $defaultState; ?> Local carpool</a></li>
		<li><a href="<?php echo $siteUrlConstant;?>carpool">Inter state Carpool</a></li>
		<li><a href="<?php echo $siteUrlConstant;?>intercarpool">International carpool</a></li>		
        </ul>
        </li>
        
        
        <li><a href="<?php echo $siteUrlConstant;?>groceries?code=<?php echo $defaultState;?>">groceries</a></li>
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
        
        <li>
				<?php
						if(isset($_SESSION['Nris_session'])) {
								echo '<a href="'.$siteUrlConstant.'add_university">Student\'s Talk</a>';
						} else {
								echo '<a href="#"  data-toggle="modal" data-target="#myModal">Student\'s Talk</a>';
						}
				?>
				<ul class="subnav">
						<?php
				
							$queryStudentTalk = "select * from student_talk where state_code = '".$defaultState."' and status = 'Active' order by uni_name asc";
							$resultStudentTalk = mysql_query($queryStudentTalk);                                                
							if(mysql_numrows($resultStudentTalk) > 0) {
						?>
						
								<?php while($resStuTalk = mysql_fetch_array($resultStudentTalk)) { ?>		
										<li><a href="<?php echo $siteUrlConstant;?>university_student_talk?universityId=<?php echo $resStuTalk['id'];?>"><?php echo $resStuTalk['uni_name'];?></a></li>
								<?php } ?>
						<?php
								}
						?>
						<li>
								<?php
										if(isset($_SESSION['Nris_session'])) {
												echo '<a href="'.$siteUrlConstant.'add_university">Request for University</a>';
										} else {
												echo '<a href="#"  data-toggle="modal" data-target="#myModal">Student\'s Talk</a>';
										}
								?>
						</li>
				</ul>
        </li>
        <li><a href="<?php echo $siteUrlConstant;?>advertising">Advertise </a></li>
        <li><a href="<?php echo $siteUrlConstant;?>contact">Contact </a></li>
 
      </ul>
    </nav>

	<!-- End navigation -->
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
          <h4 class="modal-title"><center><img src="img/logo.png" alt="Nris" height="65" width="184" /></center></h4>
        </div>
        <div class="modal-body">
			 <form name="formLogin" id="formLogin" method="post" class="form-horizontal" action="verify">
             <div id="myLoginuser"></div>  
            <div style="width:60%;float:left;">
            <h5>Existing user? Login</h5>
            <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:left;font-weight:bold;">Email Id</label>            
	<div class="col-sm-8">
		<input type="text" class="form-control" id="Loginemail" name="Loginemail" placeholder="Enter E-mail" style="width:100%;" tabindex="1"  required="required" />
	</div>
</div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label"  style="text-align:left;font-weight:bold;">Password</label>
	<div class="col-sm-8">
		<input type="password" class="form-control" id="LoginPassword" name="LoginPassword" placeholder="Enter Password" style="width:100%;" tabindex="2" required="required"  />
         <input type="hidden" name="currentURL" id="currentURL" value="<?php echo $actual_link ; ?>" />
	</div>
	<div class="col-sm-8">
		<input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE['remember_me'])) { echo 'checked="checked"'; } else { echo ''; } ?> />&nbsp;Remember Me
	</div>    
</div>
<div class="form-group">
	<div class="col-sm-offset-2 col-sm-8">		
		<!--<button type="button" class="btn btn-success" tabindex="3" style="float:right;" onclick="showUser();">Sign In</button>-->
		&nbsp;&nbsp;<a href="forgot_password" class="read-btn-tab" style="float:right;">Forgot Password</a>
        <button type="submit" name="cmdLoginbtn" id="cmdLoginbtn" class="btn btn-success" tabindex="3" style="float:right;">Sign In</button>
	</div>
</div>
            </div>
            </form>
            
            <div style="width:38%;float:right;">
			<center>
            <h3><a href="register"><img src="img/register.png" alt="Register"/></a></h3><br />
            <?php
            include_once("fb_login/config.php");
            include_once("google_login/config.php");
            ?>
            <h3>
                <?php
                // include_once("fb_login/includes/functions.php");
                //destroy facebook session if user clicks reset
                // var_dump($fbuser);exit;
                if(!$fbuser){
                    $fbuser = null;
                    $loginUrl = $facebook->getLoginUrl(array('redirect_uri'=>$homeurl,'scope'=>$fbPermissions));
                    echo '<a href="'.$loginUrl.'"><img src="img/login_fb.png" alt="Facebook"></a>';    
                }
                ?>
                <!-- <a href="<?php echo $siteUrlConstant.'/fb_login' ?>"><img src="img/login_fb.png" /></a> -->
            </h3>
            <h3>
            <?php
                $authUrl = $gClient->createAuthUrl();
                echo '<a href="'.$authUrl.'"><img src="google_login/images/glogin.png" alt="Google"/></a>';
            ?>
            </h3>
            <h3>
                <?php echo '<a href="twitter_login/process"><img alt="Twitter" src="twitter_login/images/sign-in-with-twitter.png" border="0" /></a>'; ?>
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
