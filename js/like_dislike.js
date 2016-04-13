
$(document).ready(function() {
	$('.like_dislike_lnk').click(function(e) {
		e.preventDefault();
		curLnk = $(this);
		$.getJSON(this.href, {}, function(like_resp) {
			if (like_resp.success == 1) {
				curLnk.parent().find('.like_dislike_lnk').removeClass('liked disliked');
				if (like_resp.like == 1) {
					curLnk.addClass('liked')
				} else {
					curLnk.addClass('disliked')
				}
			} else {
				alert(like_resp.message)
			}

		})
	});
})