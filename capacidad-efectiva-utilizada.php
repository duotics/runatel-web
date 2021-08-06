<?php include('init.php');
include('frames/head.php');
include('frames/topB.php')
?>
<ol class="breadcrumb breadcrumb-cero">
    <li class="breadcrumb-item"><a href="<?php echo $RAIZ ?>">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page">Capacidad Efectiva Utilizada</li>
</ol>
<div class="contenido" style="padding-top: 20px">
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h1 class="text-center"><div class="badge badge-success">Capacidad Efectiva Utilizada</div></h1>
			<h3 class="text-center">ISP Runatel Cuenca</h3>
			<!--DAYLY-->
			<div class="card border-success">
				<h5 class="card-header">Consumo Diario</h5>
				<div class="card-body text-center">
					<img class="img-thumbnail" src="data/graph/2018-02-25_01-53_daily.gif" alt="Daily">
					<p class="card-text">Max In: 16.33Mb; Average In: 3.62Mb; Current In: 12.19Mb;<br>
					Max Out: 82.29Mb; Average Out: 47.12Mb; Current Out: 13.75Mb;</p>
				</div>
				<div class="card-footer"><p class="card-text"><small class="text-muted">"Daily" Graph (5 Minute Average)</small></p></div>
			</div>
			<hr>
			<!--WEEKLY-->
			<div class="card border-success">
				<h5 class="card-header">Consumo Semanal</h5>
				<div class="card-body text-center">
					<img class="img-thumbnail" src="data/graph/2018-02-25_01-53_weekly.gif" alt="Weekly">
					<p class="card-text">Max In: 11.02Mb; Average In: 3.97Mb; Current In: 3.22Mb;<br>
						Max Out: 89.18Mb; Average Out: 50.90Mb; Current Out: 15.12Mb;</p>
				</div>
				<div class="card-footer"><p class="card-text"><small class="text-muted">"Weekly" Graph (30 Minute Average)</small></p></div>
			</div>
			<hr>
			<!--MONTHLY-->
			<div class="card border-success">
				<h5 class="card-header">Consumo Mensual</h5>
				<div class="card-body text-center">
					<img class="img-thumbnail" src="data/graph/2018-02-25_01-53_monthly.gif" alt="Monthly">
					<p class="card-text">Max In: 9.39Mb; Average In: 4.14Mb; Current In: 2.08Mb;<br>
					Max Out: 82.71Mb; Average Out: 51.64Mb; Current Out: 28.81Mb;</p>
				</div>
				<div class="card-footer"><p class="card-text"><small class="text-muted">"Monthly" Graph (2 Hour Average)</small></p></div>
			</div>
			<hr>
			<!--YEARLY-->
			<div class="card border-success">
				<h5 class="card-header">Consumo Anual</h5>
				<div class="card-body text-center">
					<img class="img-thumbnail" src="data/graph/2018-02-25_01-53_yearly.gif" alt="Yearly">
					<p class="card-text">Max In: 6.81Mb; Average In: 2.87Mb; Current In: 4.41Mb; <br>
					Max Out: 59.70Mb; Average Out: 35.23Mb; Current Out: 52.89Mb;</p>
				</div>
				<div class="card-footer"><p class="card-text"><small class="text-muted">"Yearly" Graph (1 Day Average)</small></p></div>
			</div>
			
		</div>
		<div class="col-md-4"><?php include('frames/vertA.php') ?></div>
	</div>
	<hr>
	<small class="text-muted">Actualizado 25/02/2018 01:58</small>
	
</div>
</div>
<?php include('mods/mod_content/modPlanes.php') ?>
<?php include('mods/mod_content/modCobertura.php') ?>
<?php include('mods/mod_content/modLocalizacion.php') ?>
<?php include('frames/bottom.php');
include('frames/foot.php'); ?>