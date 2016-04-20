
$(document).ready(function() {
	$('.like_dislike_lnk').click(function(e) {
		if ($(this).hasClass('liked')) {
			alert('You already liked it');
			return false;	
		}
		if ($(this).hasClass('disliked')) {
			alert('You already disliked it');
			return false;	
		}
		e.preventDefault();
		curLnk = $(this);
		$.getJSON(this.href, {}, function(like_resp) {
			if (like_resp.success == 1) {
				
				var likeCount = parseInt(curLnk.parent().find('button span#likeCnt').text());
				var unlikeCount = parseInt(curLnk.parent().find('button span#unlikeCnt').text());
				
				curLnk.parent().find('.like_dislike_lnk').removeClass('liked disliked');
				if (like_resp.like == 1) {
					curLnk.addClass('liked');
					
					likeCount = likeCount+1;
					unlikeCount = unlikeCount-1;
					if (unlikeCount < 0) {
                        unlikeCount = 0;
                    }
				} else {
					likeCount = likeCount-1;
					unlikeCount = unlikeCount+1;
					if (likeCount < 0) {
                        likeCount = 0;
                    }
					curLnk.addClass('disliked');
				}
				curLnk.parent().find('button span#likeCnt').text(likeCount);
				curLnk.parent().find('button span#unlikeCnt').text(unlikeCount);
				
			} else {
				alert(like_resp.message)
			}

		})
	});
})