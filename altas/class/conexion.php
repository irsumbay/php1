<?php
	class ConexionBD	
	{
		
		var $servidor;
		var $base_datos;
		var $usuario;
		var $password;
		var $conexion;
		
		
		function ConexionBD()
		{
			$this->base_datos="abm";
			$this->servidor="localhost";
			$this->usuario="root";
			$this->password="root";
		}
		
		function conectar()
		{
			$this->conexion=mysql_connect($this->servidor,$this->usuario,$this->password);
			mysql_select_db($this->base_datos,$this->conexion);
		}
		
		function desconectar()
		{
			mysql_close($this->conexion);
		}
		
		function ejecutarsentencia($sql)
		{
		$this->conectar();
		$resultados=mysql_query($sql,$this->conexion);
		
		if(preg_match("/insert/i", $sql))
   		$resultados = mysql_insert_id($this->conexion);
		
		$this->desconectar();
		return $resultados;
		
		}
	}
?>
