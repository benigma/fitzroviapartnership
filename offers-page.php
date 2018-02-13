<?php
/*
Template Name: Offers Template
*/
?>
<?php get_header(); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 offers">	
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
					<?php the_excerpt(); ?>
					
				<?php else : ?>
				<!-- Introduction -->
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					
				<!-- 10% Discounts -->
				<?php if( get_field('10_offers') ): ?>
					<div class="left">
						<h2></h2>
						<img src="<?php echo get_field('10_image'); ?>" />
					</div>
					
					<div class="right">
						<?php the_field('10_offers'); ?>
					</div>
					<div style="clear: both;"></div>
				<?php endif; ?>	
				
				<!-- 15% Discounts -->
				<?php if( get_field('15_offers') ): ?>
					<div class="left">
						<h2></h2>
						<img src="<?php echo get_field('15_image'); ?>" />
					</div>
					
					<div class="right">
						<?php the_field('15_offers'); ?>
					</div>
					<div style="clear: both;"></div>
				<?php endif; ?>	
					
				<!-- 20% Discounts -->
				<?php if( get_field('20_offers') ): ?>
					<div class="left">
						<h2></h2>
						<img src="<?php echo get_field('20_image'); ?>" />
					</div>
					
					<div class="right">
						<?php the_field('20_offers'); ?>
					</div>
					<div style="clear: both;"></div>
				<?php endif; ?>	
					
				<!-- 25% Discounts -->
				<?php if( get_field('25_offers') ): ?>
					<div class="left">
						<h2></h2>
						<img src="<?php echo get_field('25_image'); ?>" />
					</div>
					
					<div class="right">
						<?php the_field('25_offers'); ?>
					</div>
					<div style="clear: both;"></div>
				<?php endif; ?>	
					
				<!-- 30% Discounts -->
				<?php if( get_field('30_offers') ): ?>
					<div class="left">
						<h2></h2>
						<img src="<?php echo get_field('30_image'); ?>" />
					</div>
					
					<div class="right">
						<?php the_field('30_offers'); ?>
					</div>
					<div style="clear: both;"></div>
				<?php endif; ?>	
				
				<!-- 35% Discounts -->
				<?php if( get_field('35_offers') ): ?>
					<div class="left">
						<h2></h2>
						<img src="<?php echo get_field('35_image'); ?>" />
					</div>
					
					<div class="right">
						<?php the_field('35_offers'); ?>
					</div>
					<div style="clear: both;"></div>
				<?php endif; ?>	
				
				<!-- 40% Discounts -->
				<?php if( get_field('40_offers') ): ?>
					<div class="left">
						<h2></h2>
						<img src="<?php echo get_field('40_image'); ?>" />
					</div>
					
					<div class="right">
						<?php the_field('40_offers'); ?>
					</div>
					<div style="clear: both;"></div>
				<?php endif; ?>	
					
				<!-- 45% Discounts -->
				<?php if( get_field('45_offers') ): ?>
					<div class="left">
						<h2></h2>
						<img src="<?php echo get_field('45_image'); ?>" />
					</div>
					
					<div class="right">
						<?php the_field('45_offers'); ?>
					</div>
					<div style="clear: both;"></div>
				<?php endif; ?>	
										
				<!-- 50% Discounts -->
				<?php if( get_field('50_offers') ): ?>
					<div class="left">
						<h2></h2>
						<img src="<?php echo get_field('50_image'); ?>" />
					</div>
					
					<div class="right">
						<?php the_field('50_offers'); ?>
					</div>
					<div style="clear: both;"></div>
				<?php endif; ?>	
					
				<!-- Other Discounts -->
					<div class="left">
						<h2></h2>
						<img src="<?php echo get_field('other_image'); ?>" />
					</div>
					
					<div class="right">
						<?php the_field('other_offers'); ?>
					</div>
					<div style="clear: both;"></div>
					
				<?php endif; ?>
			<?php endwhile; ?>
		</div>
		
	</div>
</div>

<?php get_footer(); ?>