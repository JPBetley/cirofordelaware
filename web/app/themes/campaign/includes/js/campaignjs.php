<?php
/*
Campaign JS
Code and stuff you need for the Campaign theme
*/
?>
<script type="text/javascript">
	/* <![CDATA[  */ 
	
	<?php if (is_front_page()) { ?>
	jQuery(function($) {
		$(window).load(function(){
			
			// THE SLIDER
			$('#slides').flexslider({
				start: function(slider) {
					if (slider.count == 1) {
						$('.flex-control-nav, .flex-direction-nav').hide();
					} 
				},
				animation: "fade",
				slideshowSpeed: <?php echo stripslashes(of_get_option('slider_time')); ?>000,
				animationSpeed: 600,
				prevText: "",
				nextText: "",
				smoothHeight: true,
				controlNav: true,
				video: true,
				directionNav: false
			});
					
		
		});
	});
	<?php } ?>
	
	jQuery(document).ready(function($){
	
		// load mobile menu
		$('#main_menu ul.menu').mobileMenu();
		
        $('select.select-menu').each(function(){
            var title = $(this).attr('title');
            if( $('option:selected', this).val() != ''  ) title = $('option:selected',this).text();
            $(this)
                .css({'z-index':10,'opacity':0,'-khtml-appearance':'none'})
                .after('<span class="select">' + title + '</span>')
                .change(function(){
                    val = $('option:selected',this).text();
                    $(this).next().text(val);
                    })
        });
		
		// Children Flyout on Menu
		$("#main_menu ul li ul").css({display: "none"}); // Opera Fix
		$("#main_menu ul li").hover(function(){
			$(this).find('ul:first').css({visibility: "visible",display: "none"}).show(300);
			},function(){
			$(this).find('ul:first').css({visibility: "hidden"});
		});
		
		// FitVids
		$("#content").fitVids();
		
		<?php if ((of_get_option('sticky_header') == 'yes') && (of_get_option('body_display') == 'body_span')) { ?>
		$("#header").sticky({topSpacing:0});
		<?php } ?>
		
		// Turn on that SlabText
		function slabTextHeadlines() {
			$('.slabload').fadeIn(1000); // fade in after it's loaded
        	$(".slabwrap h1").slabText({
        		// Don't slabtext the headers if the viewport is under 380px
        		"viewportBreakpoint":380
        	});
		};

		// give it a second to load fonts
		$(window).load(function() {
 	       setTimeout(slabTextHeadlines, 1000);
 	    });
	
		// Adds class to commenters
		$("ul.commentlist li:not(.bypostauthor)").children(".the_comment").addClass("not_author");
		
		// Fancybox
		$(".lightbox").attr('rel', 'gallery').fancybox({
			'transitionIn'		: 'fade',
			'transitionOut'		: 'fade'
		});
		
		// clean up the WP Email Capture widget
		$('#wp_email_capture').parent().addClass('wp_email_capture_wrap');
		$('#wp_email_capture').parent().parent().parent().addClass('wp_email_slide');
		$('#wp_email_capture').find('br').remove();

		// put title in fields
		$("input[type='text']").focus(function(srcc) {
			if ($(this).val() == $(this)[0].title) {
				$(this).removeClass("wp-email-capture-active");
				$(this).val("");
			}
		});
		$("input[type='text']").blur(function() {
			if ($(this).val() == "") {
				$(this).addClass("wp-email-capture-active");
				$(this).val($(this)[0].title);
			}
		});
		$("input[type='text']").blur();
		
		$('#slide_widget').fadeIn(1000); // fade in after it's loaded

	});			
	/* ]]> */
</script>