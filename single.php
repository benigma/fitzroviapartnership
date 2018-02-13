<?php get_header(); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9 content">	
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
					<?php the_excerpt(); ?>
					
				<?php else : ?>
					<div class="left">
						<h2></h2>
						<?php 
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							  the_post_thumbnail('large');
							} 
						?>
					</div>
					
					<div class="right">
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
		</div>
		
		<?php get_sidebar('news'); ?>
		
	</div>
</div>

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
</style>

<?php get_footer(); ?>