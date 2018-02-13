<?php
/*
Template Name: News Template
*/
?>
<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9 content">	
			<?php
			$my_query = new WP_Query('cat=2&posts_per_page=-1');
			 ?>
			<?php if($my_query->have_posts() ) : ?>
			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<div class="left">
					<h2></h2>
					<?php 
						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						  the_post_thumbnail('small');
						} 
					?>
				</div>
				
				<div class="right news">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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