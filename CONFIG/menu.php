<script type="text/javascript">
		var site_url = '<?php echo SITE_BASE_URL.'/';?>';
	</script>
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
	        <div class="login"><i class="fa fa-user"></i><a href="#" style="color:#FFFFFF;">Profile</a></div>            
	<?php } else { ?>            
        
        <div class="login"><a href="#" data-toggle="modal" data-target="#myModal" style="color:#FFFFFF;"><i class="fa fa-lock"></i>login</a></div>    
        <div class="get-started" style="border:none;"><a href="register.php" style="color:#FFFFFF;">Get Started</a></div>
       <?php } ?>     

            
        </div>
    </div>
</div><!-- End container -->
</header><!-- End header -->
<header id="header" class="header-3">
<div class="menu-wrap clearfix">

    <div class="col-md-12 header-top-two">

        <div class="logo"><a href="index.php"><img alt="" src="img/logo.png"></a></div>
        
        <div class="advertise-header">
            <a href="#">
                <img src="img/ad-radio-khushi.jpg" alt="Advertisement-Radio-Khushi">
            </a>
            <a href="#">
                <img src="img/ad-iphone.jpg" alt="Advertisement-Iphone">
            </a>
        </div>
    
    </div>
    <nav class="navigation">
        <ul>

            
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="discussion_room_data.php">NRI's talk</a></li>
        <li><a href="discussion_board_data.php">National Forum</a></li>
        <li><a href="realestate.php">National Real Estate</a></li>
        <li><a href="education.php">Education& Teaching</a></li>
        <li><a href="auto.php">National Autos</a></li>
        <li><a href="mypartner.php">My Partner</a></li>
       
  <li><a href="#"> National Jobs</a>
            <ul class="subnav">
            <li><a href="#">Medical Jobs  Jobs</a></li>
            <li><a href="#">Accounting/Clerical  Jobs</a></li>
            <li><a href="#">IT Jobs Jobs</a></li>
            <li><a href="#">PartTime/ Hourly  Jobs</a></li>
            <li><a href="#">HR/Management Jobs Jobs</a></li>
            </ul>
        </li>
        
  <li><a href="#">Best Visiting Spots</a>
            <ul class="subnav">
            <li><a href="best_casinos.php">Casinos </a></li>
            <li><a href="best_restaurants.php">Restaurants </a></li>
            <li><a href="best_temples.php">Temples </a></li>
            <li><a href="best_pubs.php">Pubs </a></li>
             </ul>
        </li>
        <!-- <li id="famousTemples"><a href="#famousIndianTemples">Famous Indian Temples</a></li> -->
        <li><a href="#">Carpool</a>
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
  
            <?php /*?><ul>
            <li><a href="#">Telugu</a></li>
            <li><a href="#">English</a></li>
            <li><a href="#">Hindi</a></li>
            <li><a href="#">Tamil</a></li>
            <li><a href="#">Kanada</a></li>
            <li><a href="#">Serials</a></li>
            </ul><?php */?>
        </li>
        
        
        
        <li><a href="blog.php">Blog</a></li>
         <li><a href="#"  data-toggle="modal" data-target="#free_post">Student's Talk</a>
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
        <li><a href="advertising.php">Advertise </a></li>
        <li><a href="contact.php">Contact </a></li>
        
        
        
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
      </ul>
    </nav><!-- End navigation -->
</div>
<!-- End container -->
</header><!-- End header -->






<?php /*?><script type="text/javascript">
    function showUser(str)
    {
    myemail=document.getElementById('Loginemail').value;
	mypassword=document.getElementById('LoginPassword').value;
	if (str=="")
    {
    document.getElementById("myLoginuser").innerHTML="";
    return;
    }
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myLoginuser").innerHTML=xmlhttp.responseText;
    if(xmlhttp.responseText=="Sucess")
    {
      // document.getElementById("formLogin").submit();
	 alert('sdf');
	 document.write("Hello World!");
    }    
    }
    }
    xmlhttp.open("GET","login.php?MyemailId="+myemail+"&MyPassword="+mypassword,true);
    xmlhttp.send();
    }
    </script><?php */?>


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

