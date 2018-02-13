<?php get_header(); ?>

<!-- Row 1 -->
<div class="container-fluid">
	<div class="row">
	
		<div class="col-sm-6">
			<a href="http://fitzroviapartnership.com/about-us/" class="block">
			<img src="<?php echo get_template_directory_uri(); ?>/img/about-us.jpg" class="story" />
			<span class="triangle"></span>
			<h3>About us</h3>
			<p>The Fitzrovia Partnership is a Business Improvement District representing businesses in the heart of London's Fitrovia</p></a>
		</div>
		
		<div class="col-sm-3 video">
			<a href="https://vimeo.com/196292428" target="_blank" class="block">
			<img src="<?php echo get_template_directory_uri(); ?>/img/TFP_Video_Banner.jpg" /></a>
		</div>
		
		<div class="col-sm-3 white">
			<a href="http://fitzroviapartnership.com/what-we-do/" class="block">
			<h3>What we do</h3>
			<p>The Fitzrovia Partnership speaks for, represents and supports its members through a number of project and initiatives.</p></a>
		</div>
		
	</div>

	<!-- Row 2 -->
	<div class="row">
	
		<div class="col-sm-6">
			<?php echo do_shortcode('[owl-carousel category="Home" singleItem="true" autoPlay="true"]'); ?>
		</div>
		
		<div class="col-sm-6 no-border">
		
			<ul class="blocks">
				<li>
					<a href="http://fitzroviapartnership.com/what-we-do/#sustainability" class="block">
					<h3>Sustainability</h3>
					<p>We are working with you and our partners to ensure the area isa healthy place to live, work and do business.</p></a>
				</li>
				<li>
					<a href="http://fitzroviapartnership.com/insight/" class="block">
					<h3>Insight</h3>
					<p>We provide reports to give our members insight into issues influencing the built environment, local and wider economies.</p></a>
				</li>
	
				<!-- Footfall Figures-->
				<li><a href="http://fitzroviapartnership.com/insight/#footfall">
					<h3 class="stats">Weekly Footfall</h3>
					<p><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow.png" /></p>
					<p><figure>3.9%</figure> from previous week</p></a>
				</li>
				<li><a href="http://fitzroviapartnership.com/insight/#footfall">
					<h3 class="stats">Weekly Sales</h3>
					<p><img src="<?php echo get_template_directory_uri(); ?>/img/up-arrow.png" /></p>
					<p><figure>10.5%</figure> from previous month</p></a>
				</li>
			</ul>
		
		</div>		
	</div>
	<!-- Row 3 -->
	<div class="row">
		<div class="col-sm-6">
			<a href="http://fitzroviapartnership.com/what-we-do/#safety" class="block">
			<img src="<?php echo get_template_directory_uri(); ?>/img/tfp_safety_security.jpg" class="story" />
			<span class="triangle"></span>
			<h3>Safety &amp; Security</h3>
			<p>The partnership  provides a wide range of services to meet the demand of a clean, safe, and well-presented area.</p></a>
		</div>
		
		<div class="col-sm-6 blackblock">
			<a href="http://fitzroviapartnership.com/news/" class="block">
			<img src="<?php echo get_template_directory_uri(); ?>/img/TFP_News_Web.jpg" class="story" />
			<span class="triangleWhite"></span>
			<h3>News</h3>
			<p>Read about the development of our projects, new services, upcoming events and how you can get be involved.</p></a>
		</div>
	</div>
	<!-- Row 4 -->
	<div class="row">
	
		<div class="col-sm-3 white">
			<a href="http://fitzroviapartnership.com/csr/" class="block">
			<h3>CSR</h3>
			<p>The Partnership is committed to supporting a number of special local charitable and community organisations.</p></a>
		</div>
		
		<div class="col-sm-6">
				<a href="http://fitzroviapartnership.com/what-we-do/#businesscosts" class="block">
				<img src="<?php echo get_template_directory_uri(); ?>/img/savings.jpg" class="story" />
				<span class="triangle"></span>
				<h3>Savings</h3>
				<p>Find out about how you can save on your current business and utility costs with our range of unique services.</p></a>
		</div>
		
		<div class="col-sm-3 black">
			<a href="http://fitzroviapartnership.com/insight/#crossrail" class="block"><h3>Are you ready for Crossrail</h3>
			<p>Learn more about the impact of Crossrail on Tottenham Court Road.</p></a>
		</div>
		
	</div>
	<!-- Row 5 -->
	<div class="row">
	
		<div class="col-sm-6 blackblock">
			<a href="http://fitzroviapartnership.com/what-we-do/#marketing" class="block">
				<img src="<?php echo get_template_directory_uri(); ?>/img/celebrate-fitzrovia-small.jpeg" class="story" />
				<span class="triangleWhite"></span>
				<h3>Marketing</h3>
				<p>The Fitzrovia Partnership promotes and markets Fitzrovia businesses to help support and grow the local economy.</p></a>
			</a>
		</div>
		
		<div class="col-sm-3 red">
			<a href="http://fitzroviapartnership.com/what-we-do/#businesscommunity" class="block">
			<h3>FREE training courses</h3>
			<p>Read about how you can sign up for 2016 FREE Training courses and Seminars.</p></a>
		</div>
		
		<div class="col-sm-3 white">
			<a href="http://fitzroviapartnership.com/gallery/" class="block">
			<h3>Gallery</h3>
			<p>Take a look at our recent events in the local area.</p></a>
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