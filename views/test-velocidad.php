<?php include('init.php');
$pHead[title]='Medidor de Velocidad, Runatel,  Cuenca - Ecuador';
include('frames/head.php');
include('frames/topB.php')
?>
<div class="contenido" style="padding: 20px 0 40px 0">
<div class="container">
	<h1 class="text-center"><div class="badge badge-success">Test de Velocidad</div></h1>
	<br>
	<iframe width="100%" height="650px" frameborder="0" src="http://runatel.speedtestcustom.com"></iframe>
</div>
</div>
<?php include('mods/mod_content/modPlanes.php') ?>
<?php include('mods/mod_content/modCobertura.php') ?>
<?php include('mods/mod_content/modLocalizacion.php') ?>
<?php include('frames/bottom.php');
include('frames/foot.php'); ?>