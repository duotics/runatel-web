<?php defined('_JEXEC') or die('Restricted access');//Comprueba si la constante esta definida
//$folderBase='/runatel.com/'; //Remoto. '/'; Local. '/Folder/' (Folder in www)
//$folderCont='runatel.com/'; //Folder if system is in subdirectory 
$folderBase='/'; //Remoto. '/'; Local. '/Folder/' (Folder in www)
$folderCont=''; //Folder if system is in subdirectory

$serverRoot=$_SERVER['DOCUMENT_ROOT'];
$hostType=$_SERVER[HTTP_HOST].'/'; //Remoto. 'www.'; Local. 'localhost/'
$protocolS='https://';

if ($_SERVER[HTTPS]) $protocolS='https://';
else $protocolS='http://';

define('RAIZ',$serverRoot.$folderBase);
define('RAIZa',RAIZ.'assets/');
define('RAIZm',RAIZ.'mods/');
define('RAIZf',RAIZ.'frames/');
define('RAIZd',RAIZ.'data/');
define('RAIZs',RAIZ.'sys/');

$RAIZ=$protocolS.$hostType.$folderCont;
$RAIZa=$RAIZ.'assets/';
$RAIZd=$RAIZi.'data/';
$RAIZm=$RAIZ.'mods/';
$RAIZs=$RAIZ.'sys/';
/*
echo '$RAIZ. '.$RAIZ.'<br>';
echo "RAIZ. ".RAIZ.'<br>';
*/
?>