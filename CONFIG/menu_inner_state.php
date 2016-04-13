<script type="text/javascript">
		var site_url = '<?php echo SITE_BASE_URL.'/';?>';
	</script>
<?php
if(isset($_GET['State']))
{
	$_SESSION['state']=$_GET['State'];
}
else
{
	$_SESSION['state']=$_SESSION['state'];
	
}
?>
    <header id="header-top">
<div class="header-top-wrap clearfix"  style="height: 35px;line-height: 35px;background-color: lightcoral;border-bottom: 1px solid #eae9e9;">
    <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">


		<?php
		if(isset($_SESSION['Nris_session']))	  
	   { ?>
            <div class="login"><a href="logout.php" style="color:#FFFFFF;">Logout</a></div>
	        <div class="login"><i class="fa fa-user"></i><a href="profile.php" style="color:#FFFFFF;">Profile</a></div>            
	<?php } else { ?>            
        
        <div class="login"><a href="#" data-toggle="modal" data-target="#myModal"  style="color:#FFFFFF;"><i class="fa fa-lock"></i>login</a></div>    
        <div class="get-started" style="border:none;"><a href="register.php" style="color:#FFFFFF;">Register</a></div>
       <?php } ?>     

            
        </div>
    </div>
</div><!-- End container -->
</header><!-- End header -->
<header id="header" class="header-3">
<div class="menu-wrap clearfix">

    <div class="col-md-12 header-top-two">

        <div class="logo"><a href="state.php?State=<?php echo ($_GET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']);?>"><img alt="" src="img/logo.png"></a></div>
        
        <div class="advertise-header">
            
               
               <?php

				$home_ad_query1 = "select * from states where state_code = '".$_SESSION['state']."'   limit 1";
				$home_ad_res1 = mysql_query($home_ad_query1);
				if(mysql_num_rows($home_ad_res1)>0)
				{
				$home_fs1 = mysql_fetch_array($home_ad_res1);
					if (strpos($home_fs1['state_header'],'.') !== false) {  
						echo '<img src="admin/uploads/state/'.$home_fs1 ['state_header'].'"  style="height:110px; width:313px;">';
					}else 	 {    echo "<img src='img/home1.jpg' alt='Advertisement'>" ; }	
					
				} else { 
			?>		
                                <img src="img/home1.jpg" alt="Advertisement">
                 <?php } ?>
          
           
           
             <?php

				$home_ad_query2 = "select * from states WHERE state_code = '".$_GET['State']."' limit 1";
			//	echo $home_ad_query2 ;
				$home_ad_res2 = mysql_query($home_ad_query2);
				$home_fs2 = mysql_fetch_array($home_ad_res2);
				if(mysql_num_rows($home_ad_res2)>0 && $home_fs2['image'] != '')
				{
				
				$home_fs2['url'] = ($home_fs2['url'] != '') ? $home_fs2['url'] : 'javascript:;';
				 echo '<a href="' . $home_fs2['url'] . '"><img src="admin/uploads/state/'.$home_fs2['image'].'" style="width:500px !important;height:100px !important;"></a>';
				} else { 
			?>		            
                <a href="javascript:;"><img src="img/home2.jpg" alt="Advertisement"></a>
               <?php } ?>
      
        </div>
    
    </div>
    <nav class="navigation">
        <ul>

            
        <li><a href="state.php">Home</a></li>
        <li><a href="yellowpages.php">Desi Pages</a></li>
        <li><a href="discussion_board.php">National Forum</a></li>
       
		<li><a href="#"> Free Ads</a>
            <ul class="subnav">
                <li><a href="auto_inner.php?code=<?php echo $_SESSION['state'] ?>">Auto</a></li>
                <li><a href="baby_sitting_inner.php?code=<?php echo $_SESSION['state'] ?>">Baby Sitting</a></li>  
                <li><a href="education_inner.php?code=<?php echo $_SESSION['state'] ?>">Education & Teaching</a></li>   
                <li><a href="electronics_inner.php?code=<?php echo $_SESSION['state'] ?>">Electronics</a></li>
                <li><a href="free_stuff_inner.php?code=<?php echo $_SESSION['state'] ?>">Free Stuff</a></li>                       
                <li><a href="garagesale_inner.php?code=<?php echo $_SESSION['state'] ?>">Garage Sale</a></li>                          
                <li><a href="jobs_inner.php?code=<?php echo $_SESSION['state'] ?>">Jobs</a></li>
                <li><a href="mypartner_inner.php?code=<?php echo $_SESSION['state'] ?>">My Partner</a></li>            
                <li><a href="roommates_inner.php?code=<?php echo $_SESSION['state'] ?>">Roommates</a></li>          
                <li><a href="realestate_inner.php?code=<?php echo $_SESSION['state'] ?>">Real Estate</a></li>
            </ul>
        </li>
        <li><a href="state_blog.php">Blog</a></li>
        <li><a href="discussion_room.php"><?php echo $_GET['State'] ?> NRI's talk</a></li>
        <li><a href="#"> <?php echo $_SESSION['state'] ?> Box Office</a>
            <ul class="subnav">
            <li><a href="#">$1 Movie Theaters</a></li>
            <li><a href="#">$ Saving Theaters</a></li>
            <li><a href="#">Top Rated Movie Theaters</a></li>
            <li><a href="#">Open Theaters(Drive in Theaters)</a></li>          
            </ul>
        </li> 
        
        
        
          
        
  <li><a href="#">Casinos </a>
            <ul class="subnav">
            <li><a href="top_rated_casinos.php?code=<?php echo $_SESSION['state'] ?>">Top Rated Casinos </a></li>
            <li><a href="casinos_inner.php?code=<?php echo $_SESSION['state'] ?>"><?php echo $_SESSION['state'] ?> Casinos </a></li>
            <li><a href="casinos_near.php?code=<?php echo $_SESSION['state'] ?>">Casinos Near Me</a></li>
             </ul>
        </li>
        <!-- <li id="famousTemples"><a href="#famousIndianTemples">Famous Indian Temples</a></li> -->
        <li><a href="#">Temples</a>
            <ul>
            <li><a href="temples_inner.php?type=Hindu Temples&code=<?php echo $_SESSION['state'] ?>">Hindu Temples </a></li>
            <li><a href="temples_inner.php?type=ISKON Temple&code=<?php echo $_SESSION['state'] ?>">ISKON Temples</a></li>
            <li><a href="temples_inner.php?type=Jain Temples&code=<?php echo $_SESSION['state'] ?>">Jain Temples</a></li>
            <li><a href="temples_inner.php?type=Gurudwara&code=<?php echo $_SESSION['state'] ?>">Gurudeara Temples</a></li>
            <li><a href="temples_inner.php?type=Churches&code=<?php echo $_SESSION['state'] ?>">Churches</a></li>
            <li><a href="temples_inner.php?type=Mosques & Darga&code=<?php echo $_SESSION['state'] ?>">Mosques &amp; Darga</a></li>
            <li><a href="temples_inner.php?type=Budda Vihar&code=<?php echo $_SESSION['state'] ?>">Budda Vihar</a></li>		
            <li><a href="temples_inner.php?type=Other&code=<?php echo $_SESSION['state'] ?>">Other</a></li>
            </ul>
        </li>
        
        
        <li><a href="#">Restaurants </a>
        <ul>
        <li><a href="restaurants_inner.php?type=Top Rated Restaurants&code=<?php echo $_SESSION['state'] ?>">Top Rated Restaurants </a></li>
		<li><a href="restaurants_inner.php?type=Indian Restaurants&code=<?php echo $_SESSION['state'] ?>">Indian Restaurants</a></li>
		<li><a href="restaurants_inner.php?type=Indian Vegetarian Restaurants&code=<?php echo $_SESSION['state'] ?>">Indian Vegetarian Restaurants</a></li>
		<li><a href="restaurants_inner.php?type=Halal Restaurants&code=<?php echo $_SESSION['state'] ?>">Halal Restaurants </a></li>
		<li><a href="restaurants_inner.php?type=Thai Restaurants&code=<?php echo $_SESSION['state'] ?>">Thai Restaurants </a></li>
		<li><a href="restaurants_inner.php?type=Chinese Restaurants&code=<?php echo $_SESSION['state'] ?>">Chinese Restaurants </a></li>
		<li><a href="restaurants_inner.php?type=American Restaurants&code=<?php echo $_SESSION['state'] ?>">American Restaurants </a></li>
		<li><a href="restaurants_inner.php?type=Mediterranean Restaurants&code=<?php echo $_SESSION['state'] ?>">Mediterranean Restaurants </a></li>
		<li><a href="restaurants_inner.php?type=Mexican Restaurants&code=<?php echo $_SESSION['state'] ?>">Mexican Restaurants </a></li>
		<li><a href="restaurants_inner.php?type=Italian Restaurants&code=<?php echo $_SESSION['state'] ?>">Italian Restaurants </a></li>
		<li><a href="restaurants_inner.php?type=French Restaurants&code=<?php echo $_SESSION['state'] ?>">French Restaurants </a></li>
		<li><a href="restaurants_inner.php?type=Spanish Restaurants&code=<?php echo $_SESSION['state'] ?>">Spanish Restaurants </a></li>
		<li><a href="restaurants_inner.php?type=Other&code=<?php echo $_SESSION['state'] ?>">other </a></li>
        </ul>
        </li>
  
        
        
        <li><a href="#">Sports</a>
        <ul>
        <li><a href="sports_inner.php?type=Tennis Clubs&code=<?php echo $_SESSION['state'] ?>">Tennis clubs </a></li>
     	<li><a href="sports_inner.php?type=Cricket Clubs&code=<?php echo $_SESSION['state'] ?>">Cricket Clubs </a></li>
		<li><a href="sports_inner.php?type=Shuttle (Badminton)&code=<?php echo $_SESSION['state'] ?>">Shuttle (Badminton) </a></li>
		<li><a href="sports_inner.php?type=Board Games (Carom Board, Chess, Checkers, Brain Vita)&code=<?php echo $_SESSION['state'] ?>">Board games ( carom board , chess , checkers , brain vita ) </a></li>
		<li><a href="sports_inner.php?type=GOLF Clubs&code=<?php echo $_SESSION['state'] ?>">GOLF clubs </a></li>
		<li><a href="sports_inner.php?type=Swimming Pools&code=<?php echo $_SESSION['state'] ?>">Swimming pools </a></li>
		<li><a href="sports_inner.php?type=Kayaking&code=<?php echo $_SESSION['state'] ?>">Kayaking </a></li>
		<li><a href="sports_inner.php?type=Hiking&code=<?php echo $_SESSION['state'] ?>">Hiking </a></li>
		<li><a href="sports_inner.php?type=Skating&code=<?php echo $_SESSION['state'] ?>">Skating </a></li>
		<li><a href="sports_inner.php?type=Surfing&code=<?php echo $_SESSION['state'] ?>">Surfing </a></li>
		<li><a href="sports_inner.php?type=Para Sailing&code=<?php echo $_SESSION['state'] ?>">Para sailing </a></li>
		<li><a href="sports_inner.php?type=Boating&code=<?php echo $_SESSION['state'] ?>">Boating </a></li>
		<li><a href="sports_inner.php?type=Other&code=<?php echo $_SESSION['state'] ?>">Other </a></li>
        </ul>
        </li>
        
        
        <li><a href="#">Pub/Party Places</a>
        <ul>
        <li><a href="pub_places.php?type=Spots Bars&code=<?php echo $_SESSION['state'] ?>">Sports bars </a></li>
		<li><a href="pub_places.php?type=Bowling Bars&code=<?php echo $_SESSION['state'] ?>">Bowling bars </a></li>
		<li><a href="pub_places.php?type=Night Clubs&code=<?php echo $_SESSION['state'] ?>">Night Clubs </a></li>
		<li><a href="pub_places.php?type=Hukkah Bars&code=<?php echo $_SESSION['state'] ?>">Hukkah Bars </a></li>
		<li><a href="pub_places.php?type=Dancing clubs&code=<?php echo $_SESSION['state'] ?>">Dancing clubs </a></li>
		<li><a href="pub_places.php?type=Salsa Bars&code=<?php echo $_SESSION['state'] ?>">Salsa bars </a></li>		
		<li><a href="pub_places.php?type=Other&code=<?php echo $_SESSION['state'] ?>">Other </a></li>
        </ul>
        </li>
        
        <li><a href="javascript:;"><?php echo ($_GET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']) ?> Carpool</a>
        <ul>
        <li><a href="localcarpool.php"><?php echo ($_GET['State'] != '') ? $_GET['State'] : (($_GET['code'] != '') ? $_GET['code'] : $_SESSION['state']) ?> Local carpool</a></li>
		<li><a href="carpool.php">Inter state Carpool</a></li>
		<li><a href="intercarpool.php">International carpool</a></li>		
        </ul>
        </li>
        
        
        <li><a href="groceries.php?code=<?php echo $_SESSION['state'] ?>">groceries</a></li>
        <li><a href="#">Movies/Videos </a>
  
			 <ul>
            <?php

			$query_video_lang="select * from  video_languages order by id desc";
			$result_video_lang=mysql_query($query_video_lang);                                                
			while($rs_video_lang=mysql_fetch_array($result_video_lang))
			{?>
				
            <li><a href="videos_inner.php?lang=<?php echo $rs_video_lang['name'] ?>"><?php echo $rs_video_lang['name'] ?></a></li>
			<?php } ?>
            </ul>
        </li>
        
        <li><a href="add_university.php">Student's Talk</a>
         <ul class="subnav">
            <li><a href="#">Newyork State University</a>
                    <ul class="subnav">
                        <li><a href="#">Accommodation</a></li>
                        <li><a href="#">Campus Jobs</a></li>
                        <li><a href="#">Graduate Assistantship</a></li>
                        <li><a href="#">General Talk</a></li>
                    </ul>
            </li>
            <li><a href="#">Buffalo University</a></li>
            <li><a href="#">Columbia University</a></li>
            <li><a href="#">Request Us to add your University</a></li>
        </ul>
        </li>
        <li><a href="advertising_inner.php">Advertise </a></li>
        <li><a href="contact_inner.php">Contact </a></li>
 
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
                // include_once("fb_login/includes/functions.php");
                //destroy facebook session if user clicks reset
                // var_dump($fbuser);exit;
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
