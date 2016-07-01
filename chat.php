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
var isInitial = true;
var auto_refresh = setInterval(function ()
{
  var last_id=jQuery(".shout_msg").last().attr("id");
  if (typeof(last_id) == 'undefined') {
    last_id = 0;
  }
  var chat_topic = jQuery('#chat_topic option:selected').val();
jQuery.getJSON(site_url+"chat_json.php?q="+user+"&id="+last_id+"&State=<?php echo $defaultState;?>&chat_topic="+chat_topic+"&isInitial="+isInitial,function(data)
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
}, 1000);

// Inserting records into chat table
jQuery(document).ready(function()
{
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
print '<img class="link" src="images/smilies/'.$csm[2].'" onmouseover="document.getElementById(\'sprv\').innerHTML=\''.$csm[0].'\'" onmouseout="document.getElementById(\'sprv\').innerHTML=\'\'" onclick="ad_emo(\''.$csm[0].'\')" alt="" data-smily="'.$csm[0].'" />'."\r\n";
}}

?>
</div>
<br style="clear:both" />
<div class="title2 box_close_button" style="float:right">
<span class="link_color">Close</span>
</div>

<style type="text/css">
#blab_top_bar{position:fixed;top:0px;left:0px;right:0px;height:62px}
#blab_bottom_bar{position:fixed;left:0px;right:0px;bottom:0px;height:45px;padding-top:4px}

.blab_top_buttons{margin-top:5px;line-height:46px;height:46px;padding-left:48px;padding-right:5px;background-repeat:no-repeat;cursor:pointer}
.blab_histo_a{background-image:url(images/histo.png);background-position:bottom left}
.blab_histo_b{background-image:url(images/histo.png);background-position:top left}
.blab_panel_a{background-image:url(images/panel.png);background-position:bottom left}
.blab_panel_b{background-image:url(images/panel.png);background-position:top left}
.blab_exitt_a{background-image:url(images/exitt.png);background-position:bottom left}
.blab_exitt_b{background-image:url(images/exitt.png);background-position:top left}

.blab_send_button{width:42px;height:42px;background-color:transparent;background-image:url(images/messg.png);background-repeat:no-repeat;cursor:pointer}
.blab_send_a{background-position:bottom left}
.blab_send_b{background-position:top left;position:relative;left:1px}

#blab_chat{position:fixed;left:13px;top:70px;bottom:60px;width:98%;overflow:hidden}
#blab_flood_warning{display:none;width:100%;padding:12px;text-align:center}

#blab_online_show_button{position:absolute;right:0px;top:70px;width:20px;height:65px;background-image:url(images/show_on.png);cursor:pointer}
#blab_online_top_bar{position:fixed;right:1%;top:70px;bottom:60px;width:18%;display:none}
#blab_online_content{padding-top:8px;position:fixed;right:1%;top:118px;bottom:75px;width:18%;overflow:hidden;display:none}

.blab_boxes{position:fixed;left:5px;bottom:60px;padding:10px}
.box_close_button{text-align:right;margin-top:8px}
#box_autoscroll{display:none}
#box_scrollhint{line-height:20pt;display:none}
#box_paint_container{max-width:420px;display:none}
#box_ins_paint_container{max-width:420px;display:none}
#box_smilies{width:265px}
#box_colours{width:255px;display:none}

.txt_format_button_normal{border:2px solid #555;cursor:pointer}
.txt_format_button_active{border:2px solid #a00;cursor:pointer}

.color_boxes{font-size:8px;width:10px;height:10px;border:1px solid #fff;margin:1px;float:left}
.paint_thumb{width:68px;height:38px;background-image:url(images/no_thumb.png);cursor:pointer;border:2px solid #ccc}

#arri1{position:absolute;left:1px;top:73px;cursor:pointer}
#arri2{position:absolute;right:1%;bottom:75px;cursor:pointer;display:none}

#blab_panel{position:absolute;display:none}
#panel_top{padding:13px;padding-top:20px;padding-bottom:20px}
#panel_mid{padding:12px;height:260px}
#panel_bot{padding:12px}

.panel_table{border-width:1px}.panel_table td{padding:8px}
.panel_sound_select{float:left;margin:1px;width:7px;height:7px;font-size:5px;border:1px solid #fff;cursor:pointer}
.panel_loading{width:100%;height:100%;background-image:url(images/loading.gif);background-repeat:no-repeat;background-position:center center}

.paint_toolbar_container{position:absolute;left:0px;top:222px;width:398px;padding-top:5px;padding-bottom:5px}
.paint_body{margin:0px;padding:0px;overflow:hidden}
.paint_clear_button{font-size:9px;width:18px;height:23px;padding:0px;line-height:22px;text-align:center;font-weight:bold;float:left;border:1px solid #fff;cursor:pointer}
.paint_plus_minus{font-size:8px;width:18px;height:10px;margin-left:1px;cursor:pointer;padding:0px;border:1px solid #fff;text-align:center}
.blab_boxes {
     bottom: 10%;
    left: 76%;
    padding: 10px;
    position: fixed;
    z-index: 9;
    cursor:pointer;
}
.boxes_extra {
    border: 0 solid #fff;
    border-radius: 5px;
    box-shadow: 2px 2px 2px #111;
}
.bgcolor_panel_content {
    background-color: #222;
    color: #fff;
}
#box_smilies {
  z-index:99999999;
}
</style>
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