<?php namespace Daos;

use \Daos\Conexion as Conexion;

class SucursalesDaos extends Conexion {	// implements IDAOS{
	
	protected $tabla = "Sucursales";
	Private $ListaSucursales = array();

	public function mapear($array){

		$sucursales = is_array($array) ? $array : [];
		
		$this->ListaSucursales = array_map(function($p){
			
			$Uno = new \Modelos\Sucursales($p['Nombre'],$p['Descripcion'],$p['Ubicacion'],$p['Foto']);
			$Uno->setId($p['IdSucursal']);
			return $Uno;
		}, $sucursales);
	}	

	public function consulta($consulta){

		$obj_pdo = new Conexion();
		$conexion = $obj_pdo->conectar();
		$sentencia = $conexion->prepare($consulta);
		$sentencia->execute();

		while ($row = $sentencia->fetch()) {
				
				$array[] = $row;
		}
		
		if(!empty($array)){
				
				$this->mapear($array);

		}
}

		public function insertar($Objeto){

		$Nombre = $Objeto->getNombre();
		$Descripcion = $Objeto->getDescripcion();		
		$Ubicacion = $Objeto->getUbicacion();
		$Foto = $Objeto->getFoto();

		$sql = "INSERT INTO $this->tabla (Nombre, Descripcion ,Ubicacion, Foto) VALUES ('$Nombre', $Descripcion,$Ubicacion, $Foto)";

		$this->consulta($sql);		
		
		}



	public function eliminar($id){

		$sql = "DELETE FROM " . $this->tabla . " WHERE IdTipo=" . $id;
		$this->consulta($sql);

	}
		

	public function actualizar($id,$nombre,$descripcion,$ubicacion,$foto){

		$sql = "UPDATE " . $this->tabla . " SET Nombre= ' " . $nombre . " ', Descripcion=  " . $Descripcion. " , Ubicacion=" . $Ubicacion . " Foto= " . $foto ." WHERE IdSucursal=" . $id;
		$this->consulta($sql);
		return $this->ListaSucursales;

	}



	public function eliminarT(){


	}


	public function traerTodos() {

		// Guardo como string la consulta sql
		$sql = "SELECT * FROM " . $this->tabla;
		$this->consulta($sql);
		return $this->ListaSucursales;

	}



	public function buscar($nombre){

		$sql = "SELECT * FROM " . $this->tabla . " WHERE Nombre=" . $nombre;
		$this->consulta($sql);

	}
	

	public function buscarId($id){

		$sql = "SELECT * FROM " . $this->tabla . " WHERE IdSucursal=" . $id;
		$this->consulta($sql);

	}


	}



	?>