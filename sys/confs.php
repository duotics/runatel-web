<?php //defined('_JEXEC') or die('Restricted access');
function startConfigs(){
	if(!($_SESSION['conf'])){
		$conf=parse_ini_file(RAIZs.'config.ini',TRUE);
		foreach($conf as $x => $xval){
			foreach($xval as $y => $yval) $configEnd[$x][$y]=$yval;
		}
		$_SESSION['conf']=$configEnd;
	}
}
startConfigs();
$pHead['title']='RUNATEL "Conectando el Futuro" :: Servicio de Internet - El Valle, Chilcapamba, San José de la PLaya, San Antonio de Gapal, Gualalcay, Santa Ana';
$pHead['meta_des']='Runatel Proveedor de Servicio de Internet para hogares, Cuenca - Ecuador, sector Chilcapamba - El Valle - 098 317 6000';
date_default_timezone_set('America/Guayaquil');
setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
$sdate=date('Y-m-d');
$sdatet=date('Y-m-d H:i:s');
//TEMA BOOTSTRAP
if(isset($_SESSION['bsTheme'])) $bsTheme=$_SESSION['bsTheme'];
else $bsTheme=$_SESSION['conf']['var']['theme'];
?>