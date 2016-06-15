$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox({
				helpers: {
			    overlay: {
			      locked: false
			    }
			  },
        afterShow: function() {
            $('.fancybox-wrap').swipe({
                swipe : function(event, direction) {
                    if (direction === 'left' || direction === 'up') {
                        $.fancybox.prev( direction );
                    } else {
                        $.fancybox.next( direction );
                    }
                }
            });

        },

        afterLoad : function() {
        }
			});

});