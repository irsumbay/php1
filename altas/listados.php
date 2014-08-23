<?php 
include_once('class/productos.php');
$p = new Producto();
$lista = $p->Listar();
?>
<table>
<th>ID</th>
<th>Nombre</th>
<th>Cantidad</th>
<?php foreach($lista as $item){ ?>
<tr>
<td><?php echo $item['id'];?></td>
<td><a href="#" onclick="Llamar(<?php echo $item['id'];?>);"><?php echo $item['nom'];?></a></td>
<td><?php echo $item['cant'];?></td>
</tr>
<?php } ?>
</table>
