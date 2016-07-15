    	<link rel="stylesheet" href="css/custom.css"> 

<?php
$state = $defaultState;
//$chats=$obj->get_chat_msg();
$state_id=$defaultState; 
	$today=date('Y-m-d',strtotime(date('Y-m-d') .'+1 days'));           
		$query="SELECT * FROM `dt_homechat` WHERE DATE(created) ='$today' AND state_code = '".$defaultState."'";
		$result=mysql_query($query);
		$data = array();
		while($row=mysql_fetch_assoc($result)) {
			$data[]=$row;
		}
$chats = $data;

//$online_users=$obj->get_online_user();
if($defaultState != '') {
	$query="select COUNT(*) as count from register where state='$defaultState' and login_status='Y'"; 
} else {
	$query="select COUNT(*) as count from register where login_status='Y'"; 	
}


            $result=mysql_query($query);
            $row=mysql_fetch_assoc($result);
            $online_users = $row['count'];
			
$user='';
if(isset($_SESSION['Nris_session']['fname']))
{
$user=$_SESSION['Nris_session']['fname'];
}
?> 
<script type="text/javascript">
var user='<?php echo $user;?>'; 
// Requesting to Database every 2 seconds
//document.onmousemove = resetTimer;
//document.onclick = resetTimer;
var isInitial = true;
var isActive = 0;

var auto_refresh = setInterval(function ()
{
  var last_id=jQuery(".shout_msg").last().attr("id");
  if (typeof(last_id) == 'undefined') {
    last_id = 0;
  }
  var chat_topic = jQuery('#chat_topic option:selected').val();
jQuery.getJSON(site_url+"chat_json.php?q="+user+"&id="+last_id+"&State=<?php echo $defaultState;?>&chat_topic="+chat_topic+"&isInitial="+isInitial+"&isActive="+isActive,function(data)
{
	if (data == -1) {
		alert('your session has timed out');
        location.reload(true);
    }
jQuery.each(data, function(i,data)
{
if(data.id != last_id)  
{
var div_data="<div class='shout_msg' id='"+data.id+"'><time>"+data.msg_time+"</time><span class='username'>"+data.user+"</span><div class='message'>"+data.msg+"</div></div>";
 jQuery(div_data).hide().appendTo('.message_box').fadeIn();                
var scrolltoh = jQuery('.message_box')[0].scrollHeight;
jQuery('.message_box').scrollTop(scrolltoh);
jQuery('#shout_message').val('');
}
});
});
isInitial = false;
isActive = parseInt(isActive) + 1;
}, 1000);

// Inserting records into chat table
jQuery(document).ready(function()
{
	
	jQuery('body').mousemove(function(){
		isActive = 0;
	});
	jQuery('body').click(function(){
		isActive = 0;
	});
jQuery("#shout_message").keypress(function(evt) {
    if(evt.which == 13) {
      var s=jQuery('#shout_message').val();
  
var arrStr = s.split(/[ ]/);
var msg_text="";
for(var i=0; i<arrStr.length; i++)
  {  
  if(arrStr[i]!='')
  {
    var img_src=jQuery("img[data-smily='"+arrStr[i]+"']").attr('src');
    if(typeof img_src !== "undefined")
    {
      arrStr[i]="<img src='"+img_src+"' />";
    }    
  }
  msg_text +=arrStr[i]+" ";
  }
var boxval = jQuery("#shout_message").val();
var user = '<?php echo $user;?>';
//var dataString = 'user='+ user + '&msg=' + boxval;
if(boxval.length > 0)
{ 
	 if(document.getElementById('chkAll1').checked==false){
					popup('terms_conditions_popup');
					return false;

	}
	var chat_topic = jQuery('#chat_topic option:selected').val();
jQuery.ajax({
type: "POST",
url: "chatajax.php",
data: {user:user,msg:msg_text,State:'<?php echo $defaultState;?>',chat_topic:chat_topic},
cache: false,
success: function(html)
{ 
 jQuery(html).hide().appendTo('.message_box').fadeIn();                
var scrolltoh = jQuery('.message_box')[0].scrollHeight;
jQuery('.message_box').scrollTop(scrolltoh);
jQuery('#shout_message').val('');
}
});
}
return false;
}
});
});
</script>
<div class="shout_box">
   
<div class="chat_header"><?php if($defaultState != '') echo $defaultState;else echo 'National';?> NRI'S Chat (<?php echo $online_users;?> users online)  <div class="open_btn">&nbsp;</div></div>

  <div class="toggle_chat" style="display:none;">
	<div style="padding: 5px;">
	Choose Topic
	<select id="chat_topic" onchange="jQuery('.message_box').empty();">
		<option value="General">General Chat</option>
		<option value="Jobs">Jobs Chat</option>
		<option value="Students">Student's Chat</option>
	</select>
</div>
  <div class="message_box">
  <?php if(is_array($chats) && count($chats)>0)  
  {
    foreach($chats as $chat) { 
        $msg_time = date('h:i A M d',strtotime($chat['created']));
 ?>
   <div class="shout_msg" id="<?php echo $chat['id']; ?>">
   <time><?php echo $msg_time; ?></time>
   <span class="username"><?php echo $chat['user_name']; ?></span>
   <div class="message"><?php echo $chat['msg']; ?></div>
   </div>
  <?php  } }?>
    </div>
<?php  if(isset($_SESSION['Nris_session']['id'])) { ?>
    <div class="user_info">
    <span><a href="javascript:;" onclick="popup('terms_conditions_popup');" class="loginterms_popup" ><b>Please accept Terms & Conditions</b></a></span> 
    <textarea  onblur="count_txt(this,128)" style="width:99%;height:45px;margin:2px;overflow:auto;resize:none;" rows="2" cols="32" class="form-control textbox_extra" id="shout_message" name="shout_message"></textarea>   
    <div class="msg_text"></div>
   <img onmouseout="this.style.opacity='1.0'" onmouseover="this.style.opacity='0.7'" class="link smilies" title="Smilies" alt="" src="images/emoticon.png" style="opacity: 1;">
    
    </div>
    <?php } else { ?>
    <div class="user_info">
   <a href="javascript:;" data-toggle="modal" data-target="#myModal">Click here to join chat</a>
    </div>
    <?php } ?>
    </div>
</div>
<script type="text/javascript">
jQuery(".chat_header").click(function (e) {
    //get CSS display state of .toggle_chat element
    var toggleState = jQuery('.toggle_chat').css('display');
    //toggle show/hide chat box
    
   
   if (!chatCheck) {
		popup('chat_terms_conditions_popup');
				return false; 
    } else {
		jQuery('.toggle_chat').slideToggle();
		//use toggleState var to change close/open icon image
		if(toggleState == 'block')
		{
			jQuery(".chat_header div").attr('class', 'open_btn');
			jQuery('#box_smilies').hide();
		}else{
			jQuery(".chat_header div").attr('class', 'close_btn');
		}
	}
    
	
});
</script>
<?php include 'images/smilies.inc'; ?>
<div id="box_smilies" class="blab_boxes bgcolor_panel_content boxes_extra" style="display:none;">
<?php

for($i=0;$i<count($emoticons);$i++){
$csm=explode(' ',$emoticons[$i]);
if(isset($csm[1])){
print '<img class="link" src="images/smilies/'.$csm[2].'" width="19" height="19" onmouseover="document.getElementById(\'sprv\').innerHTML=\''.$csm[0].'\'" onmouseout="document.getElementById(\'sprv\').innerHTML=\'\'" onclick="ad_emo(\''.$csm[0].'\')" alt="smily" data-smily="'.$csm[0].'" />'."\r\n";
}}

?>
</div>
<br style="clear:both" />
<div class="title2 box_close_button" style="float:right">
<span class="link_color">Close</span>
</div>
<script>
jQuery('document').ready(function() {
jQuery('.smilies').click(function() {
jQuery('#box_smilies').slideToggle();
});
jQuery('.link_color').click(function() {
  jQuery('#box_smilies').fadeOut('slow');
  jQuery('#shout_message').focus();
});

jQuery(document).ready(function(){
        setTimeout(function(){
            jQuery('.wbiscroller').find('a').attr('href','javascript:;');
        },300);
    });

});
</script>