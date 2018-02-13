<?php
/*
Template Name: Members Area Template
*/
?>
<?php if ( is_user_logged_in() ) { } else { wp_redirect( 'http://fitzroviapartnership.com/wp-login.php' ); exit; } ?> 
<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9 content">	
			<?php if ( have_posts() ) { /* Query and display the parent. */
			 while ( have_posts() ) {
			 the_post();
			 $thispage=$post->ID;
			 }
			} ?>
			<?php $childpages = query_posts('post_per_page=-1&orderby=menu_order&order=asc&post_type=page&post_parent='.$thispage);
			 if($childpages){ /* display the children content */
			 	foreach ($childpages as $post) :
			 	setup_postdata($post); ?>
			 		<div class="left">
			 			<h2><?php the_title(); ?></h2>
			 		</div>
			 		<div class="right">
				 		<?php the_content();?>
				 	</div>
			 		<hr />
			 <?php
			 	endforeach;
			 } ?>
		</div>
		
		<?php get_sidebar('members'); ?>
	</div>
</div>

<?php get_footer(); ?>