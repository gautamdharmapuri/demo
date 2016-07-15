<script src="js/webshim/minified/polyfiller.js"></script>
<script> 
	 webshim.activeLang('en');
	 webshims.polyfill('forms');
	 webshims.cfg.no$Switch = true;
</script>
<script type="text/javascript" src="js/common.js"></script>

<footer id="footer">
     <div class="footer-inner" style="width:100%;">
     	 <div class="social-ul-ftr">
						<ul>
							<li class="social-facebook"><a href="https://www.facebook.com/us.nris" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li class="social-twitter"><a href="https://twitter.com/nrisnetwork" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li class="social-google"><a href="https://plus.google.com/collections/featured" target="_blank"><i class="fa fa-google-plus"></i></a></li>
							<li class="social-linkedin"><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>							
						</ul>
					</div>
          <div class="link-ftr" style="width:100%;text-align:center;color:#FFFFFF;">
			   <?php $state = $defaultState;
					$aboutus = 'aboutus';
					$disclaimer = 'disclaimer';
					if($state != '') {
						$aboutus .= '?State='.$state;
						$disclaimer .= '?State='.$state; 
					}
			   ?>
            	<a href="<?php echo $siteUrlConstant;?><?php echo $aboutus;?>" style="color:#FFFFFF;font-weight:bold;">About Us</a>&nbsp;|&nbsp;
                <a href="javascript:;" onclick="popup('terms_conditions_popup');" style="color:#FFFFFF;font-weight:bold;">Terms &amp; Condition</a> &nbsp;|&nbsp;
               <a href="<?php echo $siteUrlConstant;?><?php echo $disclaimer;?>"  style="color:#FFFFFF;font-weight:bold;">Disclaimer</a>
         
          </div>         
         <div class="copyright-n">
         	<p>&copy; Copyrights 2016 <a href="javascript:;" target="_blank">nris.com</a></p>
         </div>           
     </div>
		
	</footer>
   
<!--POPUP-->
<div id="images_popup" style="display:none;">
    <a style="float:right;cursor: pointer;" onClick="popup('images_popup')">X</a>
				<div id="col-md-12">
					<img src="img/logo.png" id="myImage" alt="image" width="200" height="90">
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

<table style="line-height:28px;width: 100%;border: none;border-spacing: 1px;">
           
         	<?php 
			$cnt=0;
			$qy_state_res = mysql_query("select state,state_code from states order by state");
			while($fs_state = mysql_fetch_array($qy_state_res))
			{ 	
			
				if($cnt%3==0){						
				echo "<tr>";
				}
				$siteUrlConstant = $protocol . "://" .str_replace(' ','',$fs_state['state']).'.'.$_SERVER['SERVER_NAME'].'/';
					?>

            <td style="vertical-align:middle;width:auto;text-align:left;padding: 2px;padding-left:10px;">
            <a href="<?php echo $siteUrlConstant;?>state?code=<?php echo $fs_state['state_code']; ?>"  onMouseMove="this.style.color='red'" onMouseOut="this.style.color='black'">
            <?php if($fs_state['state_code']==$defaultState) { 
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
    	<!--<a href="javascript:;" onClick="popup('popUpDiv')" >X</a>-->
       
	 <h4 style="text-align: center;">Terms And Conditions!</h4>

                    
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
					<p class="mydata">
						 <input type="checkbox" value="y" id="chkAll" checked disabled>
						 &nbsp; I Accept Terms & Conditions.&nbsp;&nbsp;&nbsp;
						 <button onClick="popup('terms_conditions_popup')" class="btn btn-success" style="">Accept</button></p>
                </div>
	</div>	
<!-- / POPUP-->









<div id="chat_terms_conditions_popup" style="display:none;">
    <a style="float:right;cursor: pointer;" onClick="popup('chat_terms_conditions_popup')">X</a>
    	<!--<a href="javascript:;" onClick="popup('popUpDiv')" >X</a>-->
       
<h4 style="text-align: center;">Terms And Conditions!</h4>

                    
                        <p class="mydata">
							  The NRIS Nationwide  chat room and State Wide Chat rooms are operated by the NRIS.com staff, and users falls under a number of regulations. This is to ensure a safe and fun chatting environment for all!
                        </p>

                <div class="col-lg-12 col-md-12 col-sm-12">   
					<ul class="checks">
						 <li>No Foul Language - Please avoid using obscene words or phrases. Like the forums, the chat is considered a PG-13 zone, and thus the language used should reflect that. Using foul language may result in a warning. Persistent behavior of the kind will not be tolerated and will result in a ban.</li>
						 <li>No Flooding or Excess Spam - Please do not flood the channel with meaningless or repetitive messages. It distracts from the conversation and may result in a kick from the channel. Repeat offenses will result in bans.</li>
						 <li>No Advertising - Entering the channel and using it solely to promote another website, IRC channel, etc will result in being kicked/banned from the room. We do not mind you talking about your own Trek fan films and the like, but we ask that you not use the channel solely for that purpose. The room is, after all, a Hidden Frontier chat room.</li>
						 <li>Do Not Falsely Represent Yourself - Falsely representing yourself as an HF cast/crewmember or another member is grounds for an immediate and permanent ban from the chat room. To protect your identity, we recommend that you register your nickname with NickServ. You can get more information on how to do this by typing /msg NickServ Register into the channel.</li>
						 <li>Do Not Beg for Ops - Ops, or channel operators (indicated by a @, %, ~, or & next to their nickname) are moderators of the room. Do not beg or request to become an op in the channel, as it will result in an immediate kick from the room. Repeat behavior will result in a ban. Operators are (typically) production and/or forum staff members. While we do recruit non- forum/production staff members to assist us in moderation on occasion, we invite you, and not the other way around.</li>
						 <li>Do Not Evade Bans - Ban evasion, which is defined as deliberately getting around a ban (either by changing your IP or other means) before the ban is served completely. Ban evasion will result in a temporary ban becoming a permanent one. Repeat attempts will result in it being considered as harassment, the consequences of which are defined below.</li>
						 <li>Follow Operator Instructions - We ask that you follow all instructions given to you by channel operators. Failure to follow instructions will result in a kick and/or ban from the channel. If you feel you were unfairly targeted by an operator, you may file a report us at Admin@nris.com</li>
						 <li>Do Not Harass Members - Harassing members or moderators of the chat room, or any other user on the IRC server will result in severe repercussions, including but not limited to a kline -- or permanent ban from the server (not just the channel) -- and possibly a police report, depending on the severity of the harassment.</li>
						 <li>No Leetspeak - Please do not use "leet speak" (l1k3 7h1s s0r7 0f 7yp1ng) or variants thereof. Also, using excessive forms of slang or "street talk" may result in warnings, and eventually a kick/ban from the channel.</li>
						 <li>Monday Night Chats - Our weekly Monday night chat sessions (beginning at 7:00pm Pacific, and ending before midnight) may have different rules and regulations associated with them.</li>
						 <li>Operator Authority - Channel operators are empowered to enforce these regulations, make exceptions to them when necessary, and use their discretion when applying punishment. If you feel you have been treated unfairly, you may file a complaint at Admin@NRIS.com</li>
					</ul>
					<p class="mydata">
						 Thanks for joining us in chat!
					</p>
					<p class="mydata"> <input type="checkbox" value="y" id="chkAll1" checked disabled>&nbsp; I Accept Terms & Conditions.&nbsp;&nbsp;&nbsp;
					<button onClick="chat_condition_click();" class="btn btn-success" style="">Agree</button></p>
                </div>
	</div>	
<!-- / POPUP-->



<link rel="stylesheet" href="css/common.css.gz">

