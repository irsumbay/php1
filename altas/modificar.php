<?php
include_once('class/productos.php');
if(isset($_REQUEST['id']))
$id = $_REQUEST['id'];
else
$id = 0;
$p = new Producto($id,'',0);
$p->Obtener();
$a = 1;
$b = 2;
?>
<form>
<input type="hidden" id="id" name="id" value="<?php echo $p->id;?>">
<input type="text" id="nom" name="nom" value="<?php echo $p->nom;?>">
<input type="text" id="cant" name="cant" value="<?php echo $p->cant;?>">
<input type="button" name="op" id="op_<?php echo $a;?>" onclick="Operacion(<?php echo $a;?>);" value="Modificar">
<input type="button" name="op" id="op_<?php echo $b;?>" onclick="Operacion(<?php echo $b;?>);" value="Eliminar">
</form>
