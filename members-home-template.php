<?php
/*
Template Name: Members Area Home Page
*/
?>
<?php if ( is_user_logged_in() ) { } else { wp_redirect( 'http://fitzroviapartnership.com/wp-login.php' ); exit; } ?> 
<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-6">
			<a href="<?php the_field('counter_terrorism_url'); ?>">
			<img src="<?php the_field('counter_terrorism_iamge'); ?>" class="story" />
			<span class="triangle"></span>
				<?php the_field('counter_terrorism_content'); ?>
			</a>
		</div>
		<div class="col-sm-6 blackblock">
			<a href="<?php the_field('agm_url'); ?>">
			<img src="<?php the_field('agm_image'); ?>" class="story" />
			<span class="triangleWhite"></span>
				<?php the_field('agm_content'); ?>
			</a>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-6 blackblock">
			<a href="<?php the_field('footfall_url'); ?>">
			<img src="<?php the_field('footfall_image'); ?>" class="story" />
			<span class="triangleWhite"></span>
				<?php the_field('footfall_content'); ?>
			</a>
		</div>
		<div class="col-sm-6">
			<a href="<?php the_field('operation_url'); ?>">
			<img src="<?php the_field('operation_image'); ?>" class="story" />
			<span class="triangle"></span>
				<?php the_field('operation_content'); ?>
			</a>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-6">
			<a href="<?php the_field('board_url'); ?>">
			<img src="<?php the_field('board_image'); ?>" class="story" />
			<span class="triangle"></span>
				<?php the_field('board_content'); ?>
			</a>
		</div>
		<div class="col-sm-6 blackblock">
			<a href="<?php the_field('subgroup_url'); ?>">
			<img src="<?php the_field('subgroup_image'); ?>" class="story" />
			<span class="triangleWhite"></span>
				<?php the_field('subgroup_content'); ?>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<a href="<?php the_field('offers_url'); ?>">
			<img src="<?php the_field('offers_image'); ?>" class="story" />
			<span class="triangle"></span>
				<?php the_field('offers_content'); ?>
			</a>
		</div>
		<div class="col-sm-6"></div>
	</div>
</div>

<?php get_footer(); ?>