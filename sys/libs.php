<script type="text/javascript" src="<?php echo $RAIZa ?>js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo $RAIZa ?>js/popper-1.14.7.min.js"></script>
<script type="text/javascript" src="<?php echo $RAIZa ?>js/bootstrap.min.js"></script>
<!--<script type="text/javascript" src="<?php echo $RAIZa ?>plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>-->
<script type="text/javascript" src="<?php echo $RAIZa ?>js/custom_cart_v08.js"></script>
<script type="text/javascript" src="<?php echo $RAIZa ?>js/custom_v01.js"></script>
<script type="text/javascript" src="<?php echo $RAIZa ?>plugins/chosen/chosen.jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $RAIZa ?>js/jquery.validate.js"></script>
<!-- GRITTER -->
<script type="text/javascript" src="<?php echo $RAIZa ?>plugins/Gritter-master/js/jquery.gritter.min.js"></script>

<!-- BEG TEMPLATE PLUGINS -->
<script type="text/javascript" src="<?php echo $RAIZa ?>/plugins/parallax.js-2.0.0-alpha/jquery.parallax.min.js"></script>
<!--
<script type="text/javascript" src="<?php echo $RAIZa ?>/plugins/parallax.js-1.4.2/parallax.min.js"></script>
<script type="text/javascript" src="<?php echo $RAIZa ?>js/parallax.min.js"></script>
<script type="text/javascript" src="<?php echo $RAIZa ?>js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo $RAIZa ?>js/waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo $RAIZa ?>js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo $RAIZa ?>js/bootstrap-hover-dropdown.js"></script>
<script type="text/javascript" src="<?php echo $RAIZa ?>js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo $RAIZa ?>js/front.js"></script>
-->
<!-- END TEMPLATE PLUGINS -->

<script type="text/javascript">
var RAIZ='<?php echo $RAIZ ?>';
var RAIZc='<?php echo $RAIZc ?>';
var RAIZs='<?php echo $RAIZs ?>';
</script>
<!-- NIVO SLIDER (home) -->
<script type="text/javascript">
$('#myTab a').click(function (e) { e.preventDefault(); $(this).tab('show'); })
$('#carousel').carousel({ interval: 2000 })
</script>
<!--<script type="text/javascript" src="<?php echo $RAIZa ?>plugins/CustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>-->
<!-- Add fancyBox JS -->
<script type="text/javascript" src="<?php echo $RAIZa ?>plugins/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="<?php echo $RAIZa ?>plugins/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript" src="<?php echo $RAIZa ?>plugins/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php echo $RAIZa ?>plugins/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="<?php echo $RAIZa ?>plugins/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
		$(".various").fancybox({ maxWidth	: 800,		maxHeight	: 600, fitToView	: false, width		: '70%',	height		: '70%', autoSize	: false,	closeClick	: false, openEffect	: 'none',	closeEffect	: 'none' });
		$(".fancyfull").fancybox({ width		: '85%',	height		: '85%' });
		$(".fancybox-thumb").fancybox({ prevEffect : 'none', nextEffect : 'none', helpers : { title : { type: 'outside' }, thumbs : { width	: 50, height : 50 }}});
	});
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- Slick slider -->
<script type="text/javascript" src="<?php echo $RAIZa ?>plugins/slick/slick.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.slickSlider').slick({ infinite: true, slidesToShow: 7, slidesToScroll: 7, autoplay: true, autoplaySpeed: 5000, arrows: false /*centerMode: true, //variableWidth: true*/});
	$('.slickSlider3').slick({
  dots: true, infinite: false, speed: 300, slidesToShow: 5, slidesToScroll: 5, responsive: [ { breakpoint: 1024, settings: { slidesToShow: 3, slidesToScroll: 3, infinite: true, dots: true } }, { breakpoint: 600, settings: { slidesToShow: 2,slidesToScroll: 2 } }, { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } } /* You can unslick at a given breakpoint now by adding: // settings: "unslick"// instead of a settings object*/]});
	$('.slickSlider4').slick({ dots: true, infinite: true, speed: 300, slidesToShow: 1, centerMode: true, variableWidth: true, arrows: false, autoplay: true, autoplaySpeed: 4000, }); });
</script>
<!--Personal code-->
<script type = “text/javascript”>
$(document).ready(function(){
	$("#btnUC").click(function(){ alert("Under Construction"); });
})    
</script>
<script type="text/javascript">

	//GRITTER
	$.extend($.gritter.options, {
		//class_name: 'gritter-light', // for light notifications (can be added directly to $.gritter.add too)
		position: 'bottom-right', // possibilities: bottom-left, bottom-right, top-left, top-right
		fade_in_speed: 1000, // how fast notifications fade in (string or int)
		fade_out_speed: 1500, // how fast the notices fade out
		time: 5000 // hang on the screen for...
	});
function logGritter(titulo,descripcion,imagen){
		$.gritter.add({
			title: titulo,// (string | mandatory) the heading of the notification
			text: descripcion,// (string | mandatory) the text inside the notification
			image: imagen,// (string | optional) the image to display on the left
			sticky: false,// (bool | optional) if you want it to fade out on its own or just sit there
			time: '',// (int | optional) the time you want it to be alive for before fading out
			//class_name: 'my-sticky-class'// (string | optional) the class name you want to apply to that specific message
		});
	}
function logGrittN(titulo,descripcion,imagen,css,time,sticky){
		$.gritter.add({
			title: titulo,// (string | mandatory) the heading of the notification
			text: descripcion,// (string | mandatory) the text inside the notification
			image: imagen,// (string | optional) the image to display on the left
			sticky: false,// (bool | optional) if you want it to fade out on its own or just sit there
			time: '',// (int | optional) the time you want it to be alive for before fading out
			//class_name: 'my-sticky-class'// (string | optional) the class name you want to apply to that specific message
		});
	}
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
	
function showLoading(){ $('#loading').css({visibility:"visible"}).css({opacity:"1"});}
function hideLoading(){ $('#loading').fadeTo(200, 0);};

</script>