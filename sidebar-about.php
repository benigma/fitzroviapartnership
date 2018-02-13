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

  <?php if ( !function_exists( 'dynamic_sidebar' ) ||
	!dynamic_sidebar('About Us') ) : ?>
  <?php endif; ?>
	
</div>