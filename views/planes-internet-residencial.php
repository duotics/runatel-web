<?php include('init.php');
$pHead[title]='Internet residencial para hogares :: Runatel Cobertura :: Chilcapamba, San José de la PLaya, San Antonio de Gapal, El Valle, Gualalcay';
include('frames/head.php');
include('frames/top.php')
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo $RAIZ ?>">Inicio</a></li>
    <li class="breadcrumb-item"><a href="<?php echo $RAIZ ?>planes-internet.php">Planes Internet</a></li>
    <li class="breadcrumb-item active" aria-current="page">Planes Residenciales</li>
  </ol>
</nav>

<div class="contenido contenido-head">
<div class="container">
	<div class="row">
	<div class="col-8">
		<h1>Planes Residenciales</h1>
		<div class="card">
			<h4 class="card-header">Condiciones del Servicio</h4>
			<ul class="list-group">
			  <li class="list-group-item">Precio regular de instalación $69.00 USD</li>
			  <li class="list-group-item">Servicio de Internet disponible en las diferentes áreas de cobertura (Cuenca, Gualaceo, Paute y Chordeleg) de acuerdo a factibilidad.</li>
			  <li class="list-group-item">La velocidad y correcto funcionamiento del servicio contratado puede variar de acuerdo a: configuración, capacidad y potencia del computador, las características del rendimiento de cada uno de los componentes de la red, y cantidad de usuarios conectados simultáneamente al Internet.</li>
			  <li class="list-group-item">La instalación no incluye &ldquo;ROUTER WIFI&rdquo;</li>
			  <li class="list-group-item">Compartición máxima servicio es de 8 a 1.</li>
			  <li class="list-group-item">Disponibilidad anual del servicio es del 99.95%.</li>
			  <li class="list-group-item">Para Contratación del Servicio presentar: copia de Cédula y copia de un Servicio Básico.</li>
			  <li class="list-group-item">La Contratación de servicio no tiene tiempo establecido.</li>
		  </ul>
		</div>
		<br>
		<hr>
		<br>
		<div class="card-deck">
			<div class="card border-success">
					<h5 class="card-header">Concepto de Banda Ancha</h5>
					<div class="card-body"><h5 class="card-title">Según lo estipulado en la Resolución 216-09-CONATEL-2009</h5>
					<p class="card-text">"Es el ancho de banda suministrado a un usuario mediante una velocidad de transmisión de bajada (proveedor hacia usuario) mínima efectiva igual o superior a 256 Kbps y una velocidad de transmisión de subida (usuario hacia proveedor) mínima efectiva igual o superior a 128 Kbps para cualquier aplicación".</p></div>
				</div>
			<div class="card border-success">
					<h5 class="card-header">Compartición ó canal compartido</h5>
					<div class="card-body">
						<h5 class="card-text">Según lo estipulado en la Resolución 216-09-CONATEL-2009</h5>
						<p>"Es un canal de comunicación en el que se divide el ancho de banda disponible para el número de usuarios que lo ocupan simultáneamente".</p>
					</div>
				</div>
		</div>
	</div>
	<div class="col-4">
	<?php include('frames/vertA.php') ?>
	</div>
	</div>

</div>
</div>

<?php include('mods/mod_content/modCobertura.php') ?>
<?php include('mods/mod_content/modLocalizacion.php') ?>
<?php include('frames/bottom.php');
include('frames/foot.php'); ?>