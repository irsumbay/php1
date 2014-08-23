<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
  require_once('conexion.php');
  $c=$_POST["id"];
  $n=$_POST["no"];
  $t=$_POST["te"];
  $e=$_POST["em"];
  echo $c;
  echo "<br>";
  echo $n;
  echo "<br>";
  echo $t;
  echo "<br>";
  echo $e;
  $sql = "update usuarios set nombre='$n',telefono='$t',email='$e' where id = '$c'";
  $res=mysql_query($sql,$con);    
  header('Location: index.php');
?>
</body>
</html>
