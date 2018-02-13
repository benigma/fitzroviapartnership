<?php get_header(); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9 content">	
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
					<?php the_excerpt(); ?>
				<?php else : ?>
					<div class="left">
						<h2><?php the_date(); ?></h2>
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
		
		<div class="col-sm-3 navigation">
		
		<h2 class="widgettitle">Gallery</h2>
		<ul>
			<li><a href="http://fitzroviapartnership.com/">Home</a></li>
			<?php
			$my_query = new WP_Query('cat=9&posts_per_page=-1');
			 ?>
			 <?php if($my_query->have_posts() ) : ?>
			 <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
			 	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			 <?php endwhile; ?>
			 <?php endif; ?>
		</ul>
			
		</div>
		
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