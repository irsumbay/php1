<?php
include_once('class/productos.php');
$p = new Producto($_REQUEST['id'],$_REQUEST['nom'],$_REQUEST['cant']);

$op = $_REQUEST['op'];

switch($op){
	case 'Modificar':
	$p->Modificar();
	break;
	
	case 'Eliminar':
	$p->Eliminar();
	break;
		
}
sleep(1);
?>
