<?php include('../init.php');
$pHead['title']='Internet residencial para hogares :: Runatel Cobertura :: Chilcapamba, San José de la PLaya, San Antonio de Gapal, El Valle, Gualalcay';
include(RAIZf.'head.php');
include(RAIZf.'top.php')
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo $RAIZ ?>">Inicio</a></li>
    <li class="breadcrumb-item"><a href="<?php echo $RAIZ ?>planes-internet.php">Planes Internet</a></li>
    <li class="breadcrumb-item active" aria-current="page">Planes Residenciales</li>
  </ol>
</nav>
<div class="contenido contenido-head">
	<?php include('_internet-residencial.php') ?>
</div>
<?php include(RAIZm.'mod_content/modCobertura.php') ?>
<?php include(RAIZm.'mod_content/modLocalizacion.php') ?>
<?php include(RAIZf.'foot.php'); ?>