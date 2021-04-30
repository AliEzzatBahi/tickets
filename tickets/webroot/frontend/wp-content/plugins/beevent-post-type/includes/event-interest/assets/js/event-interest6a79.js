(function( $ ) {
	'use strict';
	$(document).on('click', '.sl-buttons', function() {
		var button = $(this);
		var post_id = button.attr('data-post-id');
		var security = button.attr('data-nonce');
		var iscomment = button.attr('data-iscomment');
		var allbuttons;
		if ( iscomment === '1' ) { /* Comments can have same id */
			allbuttons = $('.sl-comment-buttons-'+post_id);
		} else {
			allbuttons = $('.sl-buttons-'+post_id);
		}
		var loader = allbuttons.next('#sl-loaders');
		if (post_id !== '') {
			$.ajax({
				type: 'POST',
				url: simpleInterest.ajaxurl,
				data : {
					action : 'process_simple_interest',
					post_id : post_id,
					nonce : security,
					is_comment : iscomment,
				},
				beforeSend:function(){
					//loader.html('&nbsp;<div class="loader_likes">Loading...</div>');
				},	
				success: function(response){
					var icon = response.icon;
					var count = response.count;
					allbuttons.html(icon+count);
					if(response.status === 'notinterested') {
						var interest_text = simpleInterest.like;
						allbuttons.prop('title', interest_text);
						allbuttons.removeClass('interested');
					} else {
						var notinterest_text = simpleInterest.unlike;
						allbuttons.prop('title', notinterest_text);
						allbuttons.addClass('interested');
					}
					loader.empty();					
				}
			});
		}
		return false;
	});
})( jQuery );
