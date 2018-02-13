<?php
/*
Template Name: Form Template
*/
?>
<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9 content">	
			<?php
				$sectionImage = get_field('section_image_header');
				echo '<img src="'.$sectionImage['url'].'" />';
			?>
			<div class="left">
			<?php if ( have_posts() ) { /* Query and display the parent. */
			 while ( have_posts() ) {
			 the_post();
			 the_title('<h2>', '</h2>');
			 echo "</div>";
			 echo "<div class='right'>";
			 	
			 the_content();
			 echo "</div>";
			 $thispage=$post->ID;
			 }
			} ?>
		</div>
		
		<div class="col-sm-3 navigation">
			
		</div>
		
	</div>
</div>

<?php get_footer(); ?>