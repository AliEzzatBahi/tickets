jQuery(document).ready(function(e){
	//alert ("hello");
	jQuery(document).on('click', '.add-to-fav',function(e) {
//alert ("hello");
		e.preventDefault() 

		$this = jQuery(this);

		$this.find('i').addClass('fa-spin fa-spinner');

		var val = jQuery(this).data('post-id');

		var type = jQuery(this).data('post-type');

			jQuery.ajax({

				type: 'POST',

				dataType: 'json',

				url: ajax_search_term_object.ajaxurl,

				data: { 

					'action': 'beevent_add_favorite', 

					'post-id': val, 

					'type': type,

					},

				success: function(data) {

					if(data){

						if(data.active == 'yes'){

							$this.find('i').removeClass('fa-spin fa-spinner');

							var successText = $this.data('success-text');

							$this.find('span').text(successText);

							//alert($this.find('i'));

							$this.find('.fa').removeClass('fa-bookmark-o');

							$this.find('.fa').addClass('fa-bookmark');

									

						}				

					}

				  } 

			});

	});

	

	jQuery(".remove-fav").click(function(e) {

			e.preventDefault() 

			var val = jQuery(this).data('post-id');

			jQuery(this).find('i').removeClass('fa-close');

			jQuery(this).find('i').addClass('fa-spinner fa-spin');

			$this = jQuery(this);

				jQuery.ajax({

					type: 'POST',

					dataType: 'json',

					url: ajax_search_term_object.ajaxurl,

					data: { 

						'action': 'beevent_remove_favorite', 

						'post-id': val, 

						},

					success: function(data) {

						if(data){

							if(data.remove == 'yes'){

								$this .parent( ".bookmark-listing" ).fadeOut();

							}

						}

					  }

				});				

	});

});