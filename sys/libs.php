<script type="text/javascript" src="<?php echo $RAIZv ?>components/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $RAIZa ?>js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo $RAIZv ?>twbs/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- BEG TEMPLATE PLUGINS -->
<!-- PARALLAX PLUGIN -->
<script type="text/javascript" src="<?php echo $RAIZa ?>plugins/jarallax/jarallax.min.js"></script>
<script type="text/javascript" src="<?php echo $RAIZa ?>plugins/jarallax/jarallax-video.min.js"></script>

<!-- END TEMPLATE PLUGINS -->

<script type="text/javascript">
var RAIZ='<?php echo $RAIZ ?>';
var RAIZs='<?php echo $RAIZs ?>';
</script>
<!-- NIVO SLIDER (home) -->
<script type="text/javascript">
$('#myTab a').click(function (e) { e.preventDefault(); $(this).tab('show'); })
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

<!--Personal code-->
<script type = “text/javascript”>
$(document).ready(function(){
	$("#btnUC").click(function(){ alert("Under Construction"); });
})    
</script>
<script type="text/javascript">
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
	
function showLoading(){ $('#loading').css({visibility:"visible"}).css({opacity:"1"});}
function hideLoading(){ $('#loading').fadeTo(200, 0);};

</script>