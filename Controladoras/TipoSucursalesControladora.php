<?php namespace Controladoras;


class TipoSucursalesControladora{

	private $datossucursales; // Variable de tipo Singleton. Una sola instancia del Daos 
  
   
    //Constructor. 
    function __construct(){

    	$this->datossucursales = \Daos\SucursalesDaos::getInstancia();
    	
    }

	public function vista(){

		require_once ('Vistas/VistaSucursales.php');
	}

	public function gestionSucursales(){

		$this->VerSucursales();

	}

	public function VerSucursales(){
		
		$listadoS = $this->datossucursales->traerTodos();
		require_once('Vistas/TiposSucursales.php');

	}

	public function Nuevo($nombre,$descripcion,$ubicacion,$foto){
		
		$Nuevo = new \Modelos\Envases($nombre,$descripcion,$ubicacion,$foto); //Creo un Objeto 
		$this->datossucursales->Insertar($Nuevo);
		$this->VerSucursales();
	
	}
}