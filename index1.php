 <?php
 	require_once('conexion.php');
	$sql="Select * from usuarios";
	$res=mysql_query($sql,$con);	
 ?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>
<body>

<center>
<font size="6" face="Courier New, Courier, monospace" color="#0000FF">
Lista de Usuarios
</font>
</center>
<a href="nuevo.php">Nuevo Usuario </a>
<p>
<table align="center" cellpadding="10" cellspacing="0" style="border: 1px solid #000000;">
  <tr valign="middle" bordercolor="#FFFFFF" bgcolor="#DFDFDF" class="catalogo"> 
    <td width="250" align="center"><strong>Nombre</strong></td>
    <td width="300" align="center"><strong>Telefono</strong></td>
    <td width="150" align="center"><strong>E Mail</strong></td>
	    <td width="300" align="center"><strong>Operación 1</strong></td>
    <td width="150" align="center"><strong>Operación 2</strong></td>
  </tr>
  
  <?php
  while($row=mysql_fetch_array($res)) //Aquí mediante el bucle while hacemos que se repitan los datos y campos de nuestra base de datos llamada mediante la consulta $sql (osea se repetiran cuantas veces existan en nuestra base de datos, por ejemplo si insertamos 2 productos con sus respectivos cantidades nombres y id, entonces apareceran en pantalla los 2 nombres de los productos y sus precios ambos incluidos en su fila correspondiente, ya que es lo que imprimimos mediante "echo" )
  {
  ?>
  <tr valign="middle" class="catalogo1">   
  	<td>
	<font size="5" color="#000099" face="Times New Roman, Times, serif">
		<?php echo $row["nombre"];?>
	</font>		
	</td>
	<td>
	<font size="5" color="#000099" face="Times New Roman, Times, serif">
		<?php echo $row["telefono"];?>
	</font>
	</td>	
	<td>
	<font size="5" color="#000099" face="Times New Roman, Times, serif">
		<?php echo $row["email"];?>
	</font>
	</td>	
	<td align="center">
	<a href="modificar1.php?id=<?php echo $row['id'];?>">Modificar</a>		
	</td>
	<td align="center">
	<a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a>		
	</td>
  </tr>
  <?php
  }
  ?>
  </table>
</body>
</html>
