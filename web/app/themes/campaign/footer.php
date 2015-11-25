					<div class="clear"></div>
				</div><!-- end div.container, begins in header.php -->
			</div><!-- end div.wrapper, begins in header.php -->
		</div><!-- end div#main_wrap, begins in header.php -->
		<div id="footer" class="wrapper">
			<div class="container">
				<?php if (of_get_option('footer_slogan') != '') { ?>
					<h1 id="footer_slogan"><?php echo stripslashes(of_get_option('footer_slogan')) ?></h1>
				<?php } ?>
				<div id="footer_widgets" class="<?php $sb_count = wp_get_sidebars_widgets(); if (count( $sb_count['Footer']) <= '5') { ?>footer_widget_count<?php count_sidebar_widgets( 'Footer' );?><?php } else { ?>footer_widget_overflow<?php } ?>">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : endif; ?>
					<div class="clear"></div>
				</div>
				<div id="post_footer">				
					
					<?php if ((of_get_option('twitter') != '') || (of_get_option('facebook') != '') || (of_get_option('google') != '') || (of_get_option('flickr') != '') || (of_get_option('vimeo') != '') || (of_get_option('youtube') != '') || (of_get_option('tumblr') != '') || (of_get_option('pinterest') != '') || (of_get_option('instagram') != '') ) { ?>
					<div id="socnets_wrap">	
						<div id="socnets">
							<?php if (of_get_option('twitter') != '') { ?>
							<a href="<?php echo stripslashes(of_get_option('twitter')); ?>" title="Twitter" class="socnet-twitter"></a>
							<?php } if (of_get_option('facebook') != '') { ?>
							<a href="<?php echo stripslashes(of_get_option('facebook')); ?>" title="Facebook" class="socnet-facebook"></a>
							<?php } if (of_get_option('google') != '') { ?>
							<a href="<?php echo stripslashes(of_get_option('google')); ?>" title="Google+" class="socnet-google"></a>
							<?php } if (of_get_option('flickr') != '') { ?>
							<a href="<?php echo stripslashes(of_get_option('flickr')); ?>" title="Flickr" class="socnet-flickr"></a>
							<?php } if (of_get_option('tumblr') != '') { ?>
							<a href="<?php echo stripslashes(of_get_option('tumblr')); ?>" title="Tumblr" class="socnet-tumblr"></a>
							<?php } if (of_get_option('vimeo') != '') { ?>
							<a href="<?php echo stripslashes(of_get_option('vimeo')); ?>" title="Vimeo" class="socnet-vimeo"></a>
							<?php } if (of_get_option('youtube') != '') { ?>
							<a href="<?php echo stripslashes(of_get_option('youtube')); ?>" title="YouTube" class="socnet-youtube"></a>
							<?php } if (of_get_option('pinterest') != '') { ?>
							<a href="<?php echo stripslashes(of_get_option('pinterest')); ?>" title="Pinterest" class="socnet-pinterest"></a>
							<?php } if (of_get_option('instagram') != '') { ?>
							<a href="<?php echo stripslashes(of_get_option('instagram')); ?>" title="Instagram" class="socnet-instagram"></a>
							<?php } ?>
						</div>
						<div class="clear"></div>
					</div>
					<?php } ?>

					<?php if (of_get_option('paid_for') != '') { ?>
					<div id="paid_for"><?php echo stripslashes(of_get_option('paid_for')) ?></div>
					<?php } ?>
					<div id="site_info">
						&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>&nbsp;&nbsp;:&nbsp;
						
						<?php if (of_get_option('give_credit') == '1') {
						
							$string = sprintf( __('<a href="%1$s" title="Campaign WordPress Theme">Campaign Theme</a> by <a href="%2$s" title="Design Crumbs">Design Crumbs</a>', 'designcrumbs'), 'http://themes.designcrumbs.com', 'http://designcrumbs.com' );
							echo $string;
							
						} else {
						
							echo bloginfo('description');
							
						} ?>
					</div>
				</div>
			</div>
		</div>
		<?php wp_footer(); //leave for plugins ?>
		<?php echo stripslashes(of_get_option('analytics')); ?>
	</body>
</html>