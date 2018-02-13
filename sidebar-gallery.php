<script type="text/javascript">
$(document).ready(function() {  
    // check where the shoppingcart-div is  
    var offset = $('#navigation	').offset();  
    $(window).scroll(function () {    
        var scrollTop = $(window).scrollTop(); 
        // check the visible top of the browser     
        if (offset.top<scrollTop) {
            $('#navigation').addClass('fixed'); 
        } else {
            $('#navigation').removeClass('fixed');   
        }
    }); 
}); 
</script>
<div class="col-sm-3 navigation" id="navigation">

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