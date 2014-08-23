<?php
include_once('conexion.php');

class Producto{
	
	var $id;
	var $nom;
	var $cant;
	
	function Producto($id=0,$nom='',$cant=0){
		$this->id=$id;
		$this->nom=$nom;
		$this->cant=$cant;
	}
	
	function Listar(){
		$con = new ConexionBD();
		$sql = "select * from productos";
		
		$result = $con->ejecutarsentencia($sql);

		$resultados = array();
		while($fila = mysql_fetch_array($result)){
			$registro = array();
			$registro['id']=$fila['id'];
			$registro['nom']=$fila['nom'];
			$registro['cant']=$fila['cant'];
			array_push($resultados,$registro);
		}
	mysql_free_result($result);
	return $resultados;
	}

	function Obtener(){
		$con = new ConexionBD();
		$sql = "select * from productos where id=".$this->id;
		
		$result = $con->ejecutarsentencia($sql);

		while($fila = mysql_fetch_array($result)){
			$this->id=$fila['id'];
			$this->nom=$fila['nom'];
			$this->cant=$fila['cant'];
		}
	}

	function Modificar(){
		$con = new ConexionBD();
		$sql ="update productos set nom='".$this->nom."',cant='".$this->cant."' where id=".$this->id;
		return $con->ejecutarsentencia($sql);	
	}
	
	function Eliminar(){
		$con = new ConexionBD();
		$sql ="delete from productos where id=".$this-id;
	
		return $con->ejecutarsentencia($sql);	
	}
}
?>
