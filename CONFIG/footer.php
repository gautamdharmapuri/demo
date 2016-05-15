<script type="text/javascript" src="css-pop.js"></script>
<script type="text/javascript" src="js/blab.js"></script>
<script type="text/javascript">
	 
	 jQuery(document).ready(function(){
		  
		  jQuery('.myImageClass').click(function(){
			var thisSrc = jQuery(this).attr('src');
			jQuery('#myImage').attr('src',thisSrc);
			popup('images_popup');
		});
		  
		  jQuery('body').prepend('<a href="javascript:;" class="back-to-top">Back to Top</a>');
		  var amountScrolled = 200;

		  jQuery(window).scroll(function() {
			  if ( jQuery(window).scrollTop() > amountScrolled ) {
				  jQuery('a.back-to-top').fadeIn('slow');
			  } else {
				  jQuery('a.back-to-top').fadeOut('slow');
			  }
		  });
		  jQuery('a.back-to-top').click(function() {
			   jQuery('html, body').animate({
				   scrollTop: 0
			   }, 700);
			   return false;
		  });
		  
		  jQuery('input[type="file"]').change(function(){
			
			   var myFile = this.files[0]
			   var sizeinKb = (myFile.size||myFile.fileSize)/1024;
			   if (sizeinKb > 200) {
					alert('Image size should not exceed 200KB');
					jQuery(this).val('');
					return false;
			   }
			   
			   var thisId = jQuery(this).attr('id');
			   var progress = 0;
			   if (jQuery('#processeing_bar_'+thisId).length == 0) {
				   jQuery('#'+thisId).after('<div id="processeing_bar_'+thisId+'"><div style="background-color: red;width:0%;height: 2px;">&nbsp;</div></div>');
			   }
			   
			   var refreshIntervalId = setInterval(function(){
					progress = progress + 20;
					jQuery('#processeing_bar_'+thisId+' div').html('<center>'+progress+'%'+'</center>');
					jQuery('#processeing_bar_'+thisId+' div').css('width',progress+'%');
					if (progress == 120) {
						clearInterval(refreshIntervalId);
						jQuery('#processeing_bar_'+thisId).remove();
					}
			   },200);
		});  
	 });
	 
</script>

<footer id="footer">
     <div class="footer-inner" style="width:100%;">
     	 <div class="social-ul-ftr">
						<ul>
							<li class="social-facebook"><a href="https://www.facebook.com/us.nris" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li class="social-twitter"><a href="https://twitter.com/nrisnetwork" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li class="social-google"><a href="https://plus.google.com/collections/featured" target="_blank"><i class="fa fa-google-plus"></i></a></li>
							<li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>							
						</ul>
					</div>
          <div class="link-ftr" style="width:100%;text-align:center;color:#FFFFFF;">
			   <?php $state = ($_GET['State'] != '') ? $_GET['State'] : $_GET['code'];
					$aboutus = 'aboutus.php';
					$disclaimer = 'disclaimer.php';
					if($state != '') {
						$aboutus .= '?State='.$state;
						$disclaimer .= '?State='.$state; 
					}
			   ?>
            	<a href="<?php echo $aboutus;?>" style="color:#FFFFFF;font-weight:bold;">About Us</a>&nbsp;|&nbsp;
                <a href="javascript:;" onclick="popup('terms_conditions_popup');" style="color:#FFFFFF;font-weight:bold;">Terms &amp; Condition</a> &nbsp;|&nbsp;
               <a href="<?php echo $disclaimer;?>"  style="color:#FFFFFF;font-weight:bold;">Disclaimer</a>
         
          </div>         
         <div class="copyright-n">
         	<p>&copy; Copyrights 2016 <a href="#" target="_blank">nris.com</a></p>
         </div>           
     </div>
		
	</footer>
   
<!--POPUP-->
<div id="images_popup" style="display:none;">
    <a style="float:right;cursor: pointer;" onClick="popup('images_popup')">X</a>
				<div id="col-md-12">
					<img src="" id="myImage">
                </div>
	</div>
    <div id="blanket" style="display:none;"></div>
	
	<!-- Modal  Switch State  Start-->
<div class="modal fade" id="change_state" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Switch State</h4>
</div>
<div class="modal-body">

<table border="0" cellpadding="2" cellspacing="1" width="100%" style="line-height:28px;">
           
         	<?php 
			$cnt=0;
			$qy_state_res = mysql_query("select state,state_code from states order by state");
			while($fs_state = mysql_fetch_array($qy_state_res))
			{ 	
			
				if($cnt%3==0){						
				echo "<tr>";
				}
					?>

            <td style="vertical-align:middle;width:auto;text-align:left;padding-left:10px;">
            <a href="auto_create.php?code=<?php echo $fs_state['state_code']; ?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">
            <?php if($fs_state['state_code']==$_SESSION['state']) { 
			echo '<i class="fa fa-check"></i> '.$fs_state['state']; }
			else { 	echo $fs_state['state'];  } ?>
            </a>
            </td>
          <?php 
		 					  if($cnt%3==0 && $cnt != 0){
                                    echo "</tr>";						
                                    }
                                    $cnt++;
                                    if($cnt==3)
                                    {
                                        $cnt=0;
                                    }
		 } ?>
            
                </tr>
            </table>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>  
<!-- Modal  Switch State  End --> 
	
	<div id="terms_conditions_popup" style="display:none;">
    <a style="float:right;cursor: pointer;" onClick="popup('terms_conditions_popup')">X</a>
    	<!--<a href="#" onClick="popup('popUpDiv')" >X</a>-->
       
<center><h4>Terms And Conditions!</h4></center>

                    
                        <p class="mydata">
							  Terms and conditions before registering with our site after entered all the info .Registration  terms and conditions guidelines 
                        </p>

                <div class="col-lg-12 col-md-12 col-sm-12">   
					<ul class="checks">
						 <li>
							  I am responsible what ever the content I post at any section of this site ,to respect  that I do not  post any content, rate or reply/review that may be considered, abusive, vulgar,offensive,  obscene
						 </li>
						 <li>
							 Site Management is not responsible for any violations as per law.  
						 </li>
						 <li>
							 This site is for public for free use I always maintain courtesy, if i am a business person/organization, marketing person or any other soliciting person I oath for not repeated posts, if any, site management have right to find the IP address or delete the my ID and barred for future postings from this IP address 
						 </li>
						 <li>
							  We respect Privacy according to US law, by agreeing these terms I honor that I never post others information like name phone numbers addresses etc.
						 </li>
						 <li>
							 I oath i never do spamming, no repeated ads this sections with useless content, and i agree i am responsible to open any external links/URLs posted by other users and/or by Admin. 
						 </li>
						 <li>
							  I am agreeing that after i accept these terms & conditions i solely responsible for whatever the content si post here or share here in public chat
						 </li>
						 <li>
							  NRIS.com  Reserves all right to remove or delete any user permanantly with out any reason or prior notifcation.
						 </li>
						 <li>
							  I am authorizing NRIS.com can track my IPaddress all the times for legal reasons. 
						 </li>
						 <li>
							  I always respect all other users of this site and I expect the same from other users of this site
						 </li>
						 <li>
							  I know that public chat is limited just to share the views of  political issues ,movies, sports and educational issues and i oath i never use unparliamentary, unlawful,abusive,vulgar words or phrases at any time.
						 </li>
					</ul>
					<p class="mydata">
						 We thank you in advance for your understanding and continued support.
					</p>
					<p class="mydata"> <input type="checkbox" value="y" id="chkAll" checked disabled readonly>&nbsp; I Accept Terms & Conditions.&nbsp;&nbsp;&nbsp;<button onClick="popup('terms_conditions_popup')" class="btn btn-success" style="">Submit</button></span></p>
                </div>
	</div>	
<!-- / POPUP-->
<style>
/*STYLES FOR CSS POPUP*/
.mydata { color:#000000;text-align:justify;line-height:22px;font-family: 'Roboto', sans-serif;font-size:16px;line-height:26px; }

ul.checks > li {
    margin: 10px 0;
	 list-style: outside none none;
	 margin-left:30px;
	 line-height:28px;
}
.checks >li:before {    
 content: '\f00c'; /* fa-star */
  font-family: 'FontAwesome';
  float: left;
  margin-left: -1.5em;
  color: #f73040;
}
#blanket {
   background-color:#111;
   opacity: 0.65;
   position:absolute;
   z-index: 9001;
   top:0px;
   left:0px;
   width:100%;
   height:auto;
}

#terms_conditions_popup , #images_popup{
	position:absolute;	
	width:50%;
	height:500px;
	border:5px solid #000;
	z-index: 9002;
	background-color:#FFFFFF;
	top:0%;
	overflow: auto;
	padding:10px;
	left:25% !important;
	top:25% !important;	
	
}

#terms_conditions_popup h3, #images_popup h3
{
	font-size:14px;
}

#terms_conditions_popup a, #images_popup a {top:10%; float:right;font-size:22px;font-weight:bold;color:#000000;margin:10px;}
#terms_conditions_popup a:hover, #images_popup a:hover{top:10%; float:right;font-size:22px;font-weight:bold;color:#000000;margin:10px;}
a.back-to-top {
	display: none;
	width: 60px;
	height: 60px;
	text-indent: -9999px;
	position: fixed;
	z-index: 999;
	right: 20px;
	bottom: 20px;
	background: #27AE61 url("images/up-arrow.png") no-repeat center 43%;
	-webkit-border-radius: 30px;
	-moz-border-radius: 30px;
	border-radius: 30px;
}
a:hover.back-to-top {
	background-color: #000;
}
</style>
