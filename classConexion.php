<?php 
class classConexion{
	private $conexion;
	public function __construct(){
		$servidor='localhost';
		$usuario='root';
		/*$password='210398401';*/
		$base='cine';
		$this->conexion=new mysqli($servidor,$usuario,$password,$base);
	}
	public function getConexion(){
		return $this->conexion;
	}
	public function consultar($sql){
		$resultado=$this->conexion->query($sql) or die($this->conexion->error."[$sql]");
		return $resultado;
	}

	public function liberarConsulta($resultado){
		$resultado->free();
	}

	public function getArray($resultado){
		$arreglo=$resultado->fetch_array(MYSQLI_ASSOC);
			return $arreglo;
	}

	public function ejecutarConsulta($sql){
		$this->conexion->query($sql) or die($this->conexion->error."[$sql]");
		return $this->conexion->insert_id;
	}
	public function terminarConexion(){
		$this->conexion->close();
	}
}
?>