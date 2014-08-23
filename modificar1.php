<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
require_once('conexion.php');
$id=$_GET['id'];
$sql="Select * from usuarios where id='$id'";
$res=mysql_query($sql,$con);	
$row=mysql_fetch_array($res);
?>
<form id="form1" name="form1" method="post" action="modificar2.php">
  <table width="200" border="1">
    <tr>
      <th scope="row">Nombre</th>
      <td><label>
        <input type="text" name="no" value="<?php echo $row["nombre"];?>">
      </label></td>
    </tr>
    <tr>
      <th scope="row">Telefono</th>
      <td><label>
        <input type="text" name="te" value="<?php echo $row["telefono"];?>">
      </label></td>
    </tr>
    <tr>
      <th scope="row">E mail </th>
      <td><label>
        <input type="text" name="em" value="<?php echo $row["email"];?>">
      </label></td>
    </tr>
  </table>
  <input type="hidden" name="id" value="<?php echo $row["id"];?>">
  <p>
    <label>
    <input type="submit" name="Submit" value="Actualizar">
    </label>
  </p>
</form>
</body>
</html>
