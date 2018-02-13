<?php get_header(); 
if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else {
    // Custom content markup goes here
}
?>
<script>
$(document).ready(function() {
 
     $("#owl-example").owlCarousel({
        navigation : false,
     	items : 1,
     	autoPlay : true,
     	singleItem: true
     	});
 
});
</script>
<!-- Row 1 -->
<div class="container-fluid">
	<div class="row">
	
		<div class="col-sm-6">
			<a href="<?php echo get_field('about_us_link'); ?>" class="block">
			<img src="<?php echo get_template_directory_uri(); ?>/img/about-us.jpg" class="story" />
			<span class="triangle"></span>
				<?php echo get_field('about_us_block'); ?>
			</a>
		</div>
		
		<div class="col-sm-3 video">
			<a href="<?php echo get_field('video_link'); ?>" target="_blank" class="block">
			<img src="<?php echo the_field('video_block'); ?>" /></a>
		</div>
		
		<div class="col-sm-3 white">
			<a href="<?php echo get_field('what_we_do_link'); ?>" class="block">
				<?php echo get_field('what_we_do_block'); ?>
			</a>
		</div>
		
	</div>
	<!-- Row 2 -->
	<div class="row">
	
		<div class="col-sm-6">
			<div id="owl-example" class="owl-carousel">
			<?php 
			
			$images = get_field('carousel');
			
			if( $images ): ?>
			        <?php foreach( $images as $image ): ?>
			            <div>
			            	<a href="<?php echo $image['alt']; ?>"><div class="intro"><?php echo $image['caption']; ?></div>
			                <img src="<?php echo $image['url']; ?>" class="full-width" /></a>
			            </div>
			        <?php endforeach; ?>
			<?php endif; ?>
			</div>
		</div>
		
		<div class="col-sm-6 no-border">
		
			<ul class="blocks">
				<li>
					<a href="<?php echo get_field('sustainability_link'); ?>" class="block">
					<?php echo get_field('sustainability_block'); ?>
					</a>
				</li>
				<li>
					<a href="http://fitzroviapartnership.com/counter-terrorism-and-contingency/" class="block">
					<h3>Counter Terrorism and Contingency</h3>
					<p>Use The Fitzrovia Partnership's resources from the official authorities for the latest information and updates including Cyber Security.</p></a>
				</li>
				<?php
				if (get_field('footfall_colour') == 'red') { ?>
						<li style="background: #fd4239;">
				<?php } else { ?>
					    <li style="background: #a6ce39;">
				<?php } ?>
				<a href="http://fitzroviapartnership.com/insight/#footfall">
					<?php echo get_field('footfall_block'); ?>
					</a>
				</li>
				<?php
				if (get_field('sales_colour') == 'red') { ?>
						<li style="background: #fd4239;">
				<?php } else { ?>
					    <li style="background: #a6ce39;">
				<?php } ?>
				<a href="http://fitzroviapartnership.com/insight/#footfall">
					<?php echo get_field('sales_block'); ?></a>
				</li>
			</ul>
		
		</div>		
	</div>
	<!-- Row 3 -->
	<div class="row">
		<div class="col-sm-6">
			<a href="<?php echo get_field('safety_link'); ?>" class="block">
			<img src="<?php echo get_template_directory_uri(); ?>/img/tfp_safety_security.jpg" class="story" />
			<span class="triangle"></span>
			
				<?php echo get_field('safety_block'); ?>
			</a>
		</div>
		
		<div class="col-sm-6 blackblock">
			<a href="<?php echo get_field('news_link'); ?>" class="block">
			<img src="<?php echo get_template_directory_uri(); ?>/img/TFP_News_Web.jpg" class="story" />
			<span class="triangleWhite"></span>
				<?php echo get_field('news_block'); ?>
			</a>
		</div>
	</div>
	<!-- Row 4 -->
	<div class="row">
	
		<div class="col-sm-3 white">
			<a href="<?php echo get_field('csr_link'); ?>" class="block">
	
			<?php echo get_field('csr_block'); ?>	
			</a>
		</div>
		
		<div class="col-sm-3 red">
				<a href="<?php echo get_field('savings_link'); ?>" class="block">
				<?php echo get_field('savings_block'); ?>
				</a>
		</div>
		
		<div class="col-sm-3 black">
			<a href="<?php echo get_field('crossrail_link'); ?>" class="block">
	
			<?php echo get_field('crossrail_block'); ?>
			</a>
		</div>
		
		<div class="col-sm-3 red">
			<a href="<?php echo get_field('training_link'); ?>" class="block">
				<?php echo get_field('training_block'); ?>
			</a>
		</div>
		
	</div>
	<!-- Row 5 -->
	<div class="row">
	
		<div class="col-sm-6 blackblock">
			<a href="<?php echo get_field('marketing_link'); ?>" class="block">
				<img src="<?php echo get_template_directory_uri(); ?>/img/celebrate-fitzrovia-small.jpeg" class="story" />
				<span class="triangleWhite"></span>
				
					<?php echo get_field('marketing_block'); ?>
				</a>
			</a>
		</div>
		
		<div class="col-sm-6">
			<a href="<?php echo get_field('gallery_link'); ?>" class="block">
				<img src="<?php echo get_template_directory_uri(); ?>/img/tfp_gallery_2017.jpg" class="story" />
				<span class="triangle"></span>
					
				<?php echo get_field('gallery_block'); ?>
			</a>
		</div>
		
	</div>
</div>
<style>

.owl-theme .owl-controls {
	margin-top: -28px;
	z-index: 10000;
}
.owl-theme .owl-controls .owl-page span {
	background: #000;
}
.owl-theme .owl-controls .owl-page:hover span {
	background: #000;
}
.owl-theme .owl-controls .owl-page.active span {
	background: red;
	opacity: 0.5;
	visibility: visible;
}

</style>
<?php get_footer(); ?>