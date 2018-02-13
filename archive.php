<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9 content">
			<?php
			
			$monthnum = get_query_var('monthnum');
			$year = get_query_var('year');
			
			$my_query = new WP_Query('cat=2&monthnum='.$monthnum.'&year='.$year.'&posts_per_page=-1');
			 ?>
			<?php if($my_query->have_posts() ) : ?>
			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<div class="left">
					<h2></h2>
					<?php 
						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						  the_post_thumbnail('large');
						} 
					?>
				</div>
				
				<div class="right news">
				<h3><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
				</div>
				
				<hr class="line" />
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
		
	<?php get_sidebar('news'); ?>
	
	</div>
</div>

<?php get_footer(); ?>