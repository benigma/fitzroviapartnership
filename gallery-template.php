<?php
/*
Template Name: Gallery Template
*/
?>
<?php get_header(); ?>
		
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9 content">	
			<?php
			$my_query = new WP_Query('cat=9&posts_per_page=-1');
			 ?>
			<?php if($my_query->have_posts() ) : ?>
			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<div class="left">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</div>
				
				<div class="right">
				<?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					  the_post_thumbnail('small');
					} 
				?>
				<?php the_excerpt(); ?>
				<p>Click <a href="<?php the_permalink(); ?>">here</a> to see full gallery</p>
				<hr />
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
		
		<?php get_sidebar('gallery'); ?>
		
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