var idleTime = 0;
		  var chatCheck = true;
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
		  
		  
		  jQuery(document).ready(function () {
			  //Increment the idle time counter every minute.
			  var idleInterval = setInterval(timerIncrement, 1000); // 1 minute
		  
			  //Zero the idle timer on mouse movement.
			  jQuery(this).mousemove(function (e) {
				  idleTime = 0;
			  });
			  jQuery(this).keypress(function (e) {
				  idleTime = 0;
			  });
		  });
		  
		  
	 });
	 function timerIncrement() {
			  idleTime = idleTime + 1;
			  if (idleTime > 4) { // 20 minutes
				  //alert('idle');
				  chatCheck = false;
			  }
		  }
		  
		  function chat_condition_click() {
			   popup('chat_terms_conditions_popup');
			   chatCheck = true;
			   jQuery('.chat_header').trigger('click');
		  }
          
          
          function toggle(div_id) {
	var el = document.getElementById(div_id);
	if ( el.style.display == 'none' ) {	el.style.display = 'block';}
	else {el.style.display = 'none';}
}
function blanket_size(popUpDivVar) {
	if (typeof window.innerWidth != 'undefined') {
		viewportheight = window.innerHeight;
	} else {
		viewportheight = document.documentElement.clientHeight;
	}
	if ((viewportheight > document.body.parentNode.scrollHeight) && (viewportheight > document.body.parentNode.clientHeight)) {
		blanket_height = viewportheight;
	} else {
		if (document.body.parentNode.clientHeight > document.body.parentNode.scrollHeight) {
			blanket_height = document.body.parentNode.clientHeight;
		} else {
			blanket_height = document.body.parentNode.scrollHeight;
		}
	}
	var blanket = document.getElementById('blanket');
	blanket.style.height = blanket_height + 'px';
	var popUpDiv = document.getElementById(popUpDivVar);
	popUpDiv_height=blanket_height/2-200;//200 is half popup's height
	popUpDiv.style.top = popUpDiv_height + 'px';
}
function window_pos(popUpDivVar) {
	if (typeof window.innerWidth != 'undefined') {
		viewportwidth = window.innerHeight;
	} else {
		viewportwidth = document.documentElement.clientHeight;
	}
	if ((viewportwidth > document.body.parentNode.scrollWidth) && (viewportwidth > document.body.parentNode.clientWidth)) {
		window_width = viewportwidth;
	} else {
		if (document.body.parentNode.clientWidth > document.body.parentNode.scrollWidth) {
			window_width = document.body.parentNode.clientWidth;
		} else {
			window_width = document.body.parentNode.scrollWidth;
		}
	}
	var popUpDiv = document.getElementById(popUpDivVar);
	window_width=window_width/2-200;//200 is half popup's width
	popUpDiv.style.left = window_width + 'px';
}
function popup(windowname) {
	blanket_size(windowname);
	window_pos(windowname);
	toggle('blanket');
	toggle(windowname);
	document.body.scrollTop = document.documentElement.scrollTop = 0;
}