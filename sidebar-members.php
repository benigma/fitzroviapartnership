<script type="text/javascript">
$(window).scroll(function(e){ 
  var $el = $('.navigation'); 
  var isPositionFixed = ($el.css('position') == 'fixed');
  if ($(this).scrollTop() > 140 && !isPositionFixed){ 
    $('.navigation').css({'position': 'fixed', 'width': '310px', 'top': '0px', 'right': '0px'}); 
  }
  if ($(this).scrollTop() < 140 && isPositionFixed)
  {
    $('.navigation').css({'position': 'static', 'top': '0px'}); 
  } 
});
</script>
<div class="col-sm-3 navigation">

  <?php if ( !function_exists( 'dynamic_sidebar' ) ||
  	!dynamic_sidebar('Members') ) : ?>
  <?php endif; ?>
	
</div>