<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9">
			<div class="attachment">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php echo wp_get_attachment_image($attachment_id, $size='full', $icon=false); ?>
				
				<?php endwhile; 
				 
				 endif; ?>
				 
		 	<div class="nav-links">
		 		<?php next_image_link( false, '<div class="next-image">' . __( '>', '$text_domain' ) . '</div>' ); ?>
				<?php previous_image_link( false, '<div class="previous-image">' . __( '<', '$text_domain' ) . '</div>' ); ?>
				
				<?php $permalink = get_permalink($post->post_parent); ?>
				<div class="return"><a href="<?php echo $permalink; ?>">RETURN TO GALLERY</a></div>
			</div>
		</div>
		</div>

		<?php get_sidebar('gallery'); ?>

	</div>
</div>

<?php get_footer(); ?>