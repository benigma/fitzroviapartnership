<?php get_header(); ?>
<style type='text/css'>
			#gallery-1 {
				margin: auto;
				width: 100%;
				display: block;
				margin-left: 5%;
			}
			#gallery-1 .gallery-item {
				float: left;
				text-align: center;
				width: 22%;
				margin: 10px 5px;
			}
			#gallery-1 img {
				border: 2px solid #cfcfcf;
			}
			#gallery-1 .gallery-caption {
				margin-left: 0;
			}
			/* see gallery_shortcode() in wp-includes/media.php */
		</style>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 content">	
			<?php if ( have_posts() ) : ?>
			        <p>We have found <?php echo $total_results = $wp_query->found_posts; ?> item(s) for your search <strong>"<?php echo $_GET['s']; ?>"</strong>.</p><br />
					<?php while ( have_posts() ) : the_post(); ?>                        
			            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			            <!-- <span class="date">Posted on: <?php the_modified_date(); ?></span><br /> -->
			            <?php the_excerpt(20); ?>
					<?php endwhile; ?>
			
				<?php else : ?>
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyeleven' ); ?></p>
				<?php endif; ?>
				<?php if (function_exists("pagination")) {
						pagination($additional_loop->max_num_pages);
						} ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>