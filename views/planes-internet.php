<?php include('init.php');
$pHead[title]='Planes de internet residencial :: Runatel Cobertura :: Chilcapamba, San José de la PLaya, San Antonio de Gapal, El Valle, Gualalcay';
include('frames/head.php');
include('frames/top.php')
?>
<ol class="breadcrumb breadcrumb-cero">
    <li class="breadcrumb-item"><a href="<?php echo $RAIZ ?>">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page">Planes Internet</li>
</ol>
<?php include('mods/mod_content/modPlanes.php') ?>
<div class="contenido contenido-head">
	<div class="container">
		<div class="row">
			<div class="col-8"><a href="<?php echo $RAIZ ?>planes-internet-residencial.php" class="btn btn-primary">Características de Planes de Internet Residenciales</a>
	  <br>
	  <br>
	<h1>Definiciones</h1>
	<ul class="list-group">
	  <li class="list-group-item"><strong>Acceso Conmutado:</strong> Conexión temporal entre el terminal de usuario/cliente y el equipo del operador, mediante la conexión por medio de discado o marcación a una red pública de servicios finales ("Dial-up").</li>
	  <li class="list-group-item"><strong>Acceso No Conmutado:</strong> Conexión entre el terminal de usuario y el equipo del Proveedor, efectuada a través de un canal no conmutado de comunicación, compartido o no compartido. </li>
	  <li class="list-group-item"><strong>Ancho de Banda (Velocidad de Transmisión de información):</strong> Cantidad de información que puede ser transmitida en la unidad de tiempo a través de un canal de comunicación, expresada en bits por segundo o en sus múltiplos. Para los fines de la presente Plan se entenderá la denominación "Ancho de banda" como expresión de referencia a la velocidad de transmisión de información. </li>
	  <li class="list-group-item"><strong>Avería Efectiva Reportada:</strong> Es toda falla ocurrida en la prestación del servicio, detectada como consecuencia de un reclamo de un usuario/cliente, afecta a dicha prestación y es responsabilidad del operador. </li>
	  <li class="list-group-item"><strong>Banda Ancha:</strong> Ancho de banda suministrado a un usuario mediante una velocidad de transmisión de bajada (proveedor hacia usuario) mínima efectiva igual o superior a 256 kbps y una velocidad de transmisión de subida (usuario hacia proveedor) mínima efectiva igual o superior a 128 kbps para cualquier aplicación. </li>
	  <li class="list-group-item"><strong>Canal Compartido:</strong> Canal de comunicación en el que se divide el ancho de banda disponible para el número de usuarios que lo ocupan simultáneamente. </li>
	  <li class="list-group-item"><strong>Canal No Compartido:</strong> Canal de comunicación en el que el ancho de banda disponible se asigna a un usuario único. </li>
	  <li class="list-group-item"><strong>Cliente:</strong> Para efectos del presente Plan, cliente tiene el mismo significado que abonado </li>
	  <li class="list-group-item"><strong>Compartición:</strong> Expresión que define el número de usuarios asignados a un determinado canal compartido. </li>
	  <li class="list-group-item"><strong>Enlace Asimétrico:</strong> Es aquel cuyas velocidades de transmisión son diferentes en cada sentido. </li>
	  <li class="list-group-item"><strong>Enlace Simétrico:</strong> Es aquel cuyas velocidades de transmisión son iguales en ambos sentidos. </li>
	  <li class="list-group-item"><strong>Modem:</strong> Equipo que sirve para modular y demodular una señal llamada portadora mediante otra señal de entrada llamada moduladora. </li>
	  <li class="list-group-item"><strong>Reclamo:</strong> Es la expresión de insatisfacción referida a la prestación de un servicio de telecomunicaciones. </li>
	  <li class="list-group-item"><strong>Valor Objetivo:</strong> Es el valor máximo o mínimo establecido, según lo que aplique para cada parámetro y que proporciona un nivel aceptable de QOS. </li>
    </ul></div>
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