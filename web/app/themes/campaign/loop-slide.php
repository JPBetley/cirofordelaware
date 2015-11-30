<li class="single_slide slides_container clearfix">
	<div class="slide_content clearfix">
	
	<?php if (has_post_thumbnail()) { ?>
		<div class="slide_image_wrap">
			<?php if (get_post_meta($post->ID, '_dc_slide_text', true) != '') { ?>
			<div class="slide_text_overlay">
				<?php echo get_post_meta($post->ID, '_dc_slide_text', true);?>
			</div>
			<?php } ?>
			<?php if (get_post_meta($post->ID, '_dc_slide_link', true) != '') { ?><a href="<?php echo get_post_meta($post->ID, '_dc_slide_link', true);?>" title="<?php the_title(); ?>"><?php } ?>
				<?php the_post_thumbnail(); ?>
			<?php if (get_post_meta($post->ID, '_dc_slide_link', true) != '') { ?></a><?php } ?>
		</div>
	<?php } else { ?>
		<?php if (get_post_meta($post->ID, '_dc_video', true) != '') { ?>
			<?php echo wp_oembed_get(get_post_meta($post->ID, '_dc_video', true), array('width'=>600,'height'=>300)); ?>
		<?php } ?>
	<?php } ?>
			
	</div>
</li>