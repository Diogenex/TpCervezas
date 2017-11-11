<?php namespace Controladoras;

class TipoCervezaControladora{
    
    private $datoscerveza ;
  
   
    function __construct(){

    	//$this->datoscerveza = \Daos\ListaCerveza::getInstancia();// DEfine el daos
    	$this->datoscerveza = \Daos\CervezasDaos::getInstancia();
    	
    }


    public function gestionCervezas(){

		$this->VerCervezas();

	}

	public function vista(){

    	require_once ('Vistas/VistaCervezas.php');
    }

    public function inicio(){

    	require_once ('Vistas/Index.php');
    	
    }


	public function login(){

		require_once ('Vistas/Login.php');

	}


	public function Nuevo($nombre,$descripcion,$precio){
		
		$Nuevo = new \Modelos\Cervezas($nombre,$descripcion,$precio); //Creo un Objeto de tipo Cerveza
		$this->datoscerveza->Insertar($Nuevo);
		$this->VerCervezas();
	
	}

	public function VerCervezas(){
		
		$listadoC = $this->datoscerveza->traerTodos();
		require_once('Vistas/TiposCervezas.php');

	}

	public function borrarTodos(){

		$this->datoscerveza->eliminarT();
		$this->VerCervezas();
	}

	public function Borrar($id){

		$this->datoscerveza->eliminar($id);
		$this->VerCervezas();

	}
	

	public function Actualizar($id,$nombre,$descripcion,$precio){

		$this->datoscerveza->actualizar($id,$nombre,$descripcion,$precio);
		$this->VerCervezas();
	}

	public function Modificar($id,$nombre,$descripcion,$precio){

		include ('Vistas/ModificarCerveza.php');
	
	}

}