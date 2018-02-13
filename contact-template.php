<?php
/*
Template Name: Contact Template
*/
?>
<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9 content">	
			<div class="left">
			<?php if ( have_posts() ) { /* Query and display the parent. */
			 while ( have_posts() ) {
			 the_post();
			 the_title('<h2>', '</h2>');
			 echo "</div>";
			 echo "<div class='right'>";
			 the_content();
			 echo "<hr />";
			 echo "</div>";
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
				 		<hr />
				 	</div>
			 <?php
			 	endforeach;
			 } ?>
		</div>
		<div class="col-sm-3 nonav">
		</div>
	</div>
</div>

<?php get_footer(); ?>