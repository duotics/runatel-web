<?php if (!isset($_SESSION)) session_start();
define( '_JEXEC', 1 );// esto define una constante
include("sys/paths.php");
include(RAIZs."conn/conn.php");
include(RAIZs."confs.php");
include(RAIZs."fncts.php");
$css['body']=null;
$LOG=null;
?>