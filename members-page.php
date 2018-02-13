<?php
/*
Template Name: Members Page Template
*/
?>
<?php if ( is_user_logged_in() ) { } else { wp_redirect( 'http://fitzroviapartnership.com/wp-login.php' ); exit; } ?> 
<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9 content">
		
			<?php
			$sectionImage = get_field('section_image_header');
				echo '<img src="'.$sectionImage['url'].'" />';
			?>
		
			<div class="left">
				<h2><?php the_title(); ?></h2>
			</div>
			
			<div class="right">
			<?php if( have_rows('member_documents') ): ?>
				<?php while( have_rows('member_documents') ): the_row(); ?>
				<div class="document">
					<div class="pdf"><img src="<?php echo get_template_directory_uri(); ?>/img/pdficon.png" /></div>
					<div class="info">
						<h3><a href="<?php the_sub_field('document_link'); ?>"><?php the_sub_field('document_title'); ?></a></h3>
						<?php the_sub_field('document_description'); ?>
					</div>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
			
		</div>
		
		<?php get_sidebar('members'); ?>
	</div>
</div>

<?php get_footer(); ?>