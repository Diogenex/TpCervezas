<?php namespace Controladoras;

Class VistaControladora{

	public function __construct (){

	}
	
	//METODOS CARGA DE VISTAS


	public function Index(){//vista x defecto
		require_once('/Vistas/Index.php');
	}
	public function Login(){
		require_once('/Vistas/Login.php');
	}
	public function ModificarCerveza(){//vista admin
		require_once('/Vistas/ModificarCerveza.php');
	}
	public function TiposCervezas(){//vista admin
		require_once('/Vistas/TiposCervezas.php');
	}
	public function VistaCervezas(){//vista usuario
		require_once('/Vistas/VistaCervezas.php');
	}
	public function VistaSucursales(){//vista usuario
		require_once('/Vistas/VistaSucursales.php');
	}
	public function TiposSucursales(){//vista usuario
		require_once('/Vistas/TiposSucursales.php');
	}
	public function TiposEnvases(){//vista usuario
		require_once('/Vistas/TiposEnvases.php');
	}
}

?>