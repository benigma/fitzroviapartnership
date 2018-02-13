<?php
/*
Template Name: What We Do Template
*/
?>
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
			 		<?php
			 		$sectionAnchor = get_field('page_anchor');
			 		if(strlen($sectionAnchor) == 0) {
			 		
			 		} else {
			 			echo "<a class='anchor' name='".$sectionAnchor."'></a>";
			 		}
			 		
			 		$sectionImage = get_field('section_image_header');
			 		if(!is_array($sectionImage)) {
			 		
			 		} else {
			 			echo '<img src="'.$sectionImage['url'].'" />';
			 		}
			 		?>
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
		
		<?php get_sidebar('what'); ?>
		
	</div>
</div>

<?php get_footer(); ?>