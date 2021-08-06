<?php defined('_JEXEC') or die('Restricted access');//Comprueba si la constante esta definida
$folderBase='/'; //Remoto. '/'; Local. '/Folder/' (Folder in www)
$folderCont='runatel-web/'; //Folder if system is in subdirectory

$serverRoot=$_SERVER['DOCUMENT_ROOT'];
$remoteHost='https://runatel.com/';
$hostType=$_SERVER['HTTP_HOST'].'/'; //Remoto. 'www.'; Local. 'localhost/'

if (isset($_SERVER['HTTPS'])) $protocolS='https://';
else $protocolS='http://';

define('RAIZ',$serverRoot.$folderBase.$folderCont);
define('RAIZa',RAIZ.'assets/');
define('RAIZm',RAIZ.'mods/');
define('RAIZf',RAIZ.'frames/');
define('RAIZd',RAIZ.'data/');
define('RAIZs',RAIZ.'sys/');

$RAIZ=$protocolS.$hostType.$folderCont;
$RAIZr=$remoteHost;
$RAIZa=$RAIZ.'assets/';
$RAIZd=$RAIZ.'data/';
$RAIZm=$RAIZ.'mods/';
$RAIZs=$RAIZ.'sys/';

?>