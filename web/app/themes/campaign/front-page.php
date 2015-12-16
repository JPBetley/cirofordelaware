<?php get_header(); ?>
	<div id="slides_wrap"<?php $sb_count = wp_get_sidebars_widgets(); if (count( $sb_count['Home_Page_Banner']) == '0') { ?> class="home_space"<?php } ?>>
		
		<?php // START SLIDES
		$query_default = new WP_Query( array(
			'post_type' => 'slides',
			'posts_per_page' => 99,
			'order' => 'desc'
		)); 
		if ( $query_default->have_posts() ) : ?>
		<div id="slides" class="clearfix"> 
			<div id="slide_wrap" class="clearfix">
				
				<ul class="slides clearfix">
			
				<?php while ( $query_default->have_posts() ) : $query_default->the_post(); ?>
					
					<?php get_template_part( 'loop', 'slide' ); ?>
					
				<?php endwhile; wp_reset_query(); ?>
				
				</ul>
			
			</div>
		</div>
		<?php endif; // END SLIDES ?>
		<?php /*
		<div id="slide_widget">
			<div id="slide_widget_inner">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Top_Sidebar') ) : endif; ?>
			</div>
		</div>
		<div class="clear"></div>
		*/ ?>
	</div>
	
	<?php if (count( $sb_count['Home_Page_Banner']) != '0') { ?>
	<div id="home_widgets">
		<div id="home_widget_wrap" class="<?php $sb_count = wp_get_sidebars_widgets(); if (count( $sb_count['Home_Page_Banner']) <= '3') { ?>banner_widget_count<?php count_sidebar_widgets( 'Home_Page_Banner' );?><?php } else { ?>banner_widget_overflow<?php } ?>">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home_Page_Banner') ) : endif; ?>
			<div class="clear"></div>
		</div>
	</div>
	<?php } ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<?php if ($post->post_content != "") { // if the post has content ?>

			<div id="home_content">
				<div <?php post_class(); ?>>
					<?php the_content(); ?>
					<div class="clear"></div>
				</div>
			</div>
		
		<?php } ?>
	
	<?php endwhile; endif; ?>
	
	<div class="posts-wrap">
	
		<?php if (of_get_option('video_type') != 'none') { ?>
		<div id="home_video_wrap">
			<div id="home_video">
				<?php if ((of_get_option('vimeo_id') != '') && (of_get_option('video_type') == 'vimeo')) { ?>
				<iframe src="http://player.vimeo.com/video/<?php echo stripslashes(of_get_option('vimeo_id')); ?>?portrait=0" width="380" height="223" frameborder="0"></iframe>
				<?php } if ((of_get_option('youtube_id') != '') && (of_get_option('video_type') == 'youtube')) { ?>
				<iframe width="380" height="223" src="http://www.youtube.com/embed/<?php echo stripslashes(of_get_option('youtube_id')); ?>?wmode=opaque" frameborder="0" allowfullscreen></iframe>
				<?php } ?>
			</div>
			<?php if (of_get_option('video_desc') != '') { ?>
			<div id="home_video_desc">
				<?php if (of_get_option('video_title') != '') { ?>
				<h4><?php echo stripslashes(of_get_option('video_title')); ?></h4>
				<?php } ?>
				<p><?php echo stripslashes(of_get_option('video_desc')); ?></p>
			</div>
			<?php } ?>
			<div class="clear"></div>
		</div>
		<?php } ?>
	
		<?php wp_reset_query(); // END NEWS LOOP ?>
	
	</div>

<?php get_footer(); ?>