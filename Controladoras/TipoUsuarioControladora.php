<?php namespace Controladoras;	

class TipoUsuarioControladora{

	private $datosUsuario;

	function __construct(){

    	$this->datosUsuario = \Daos\UsuariosDaos::getInstancia();
    	
    }

    public function Nuevo($nombre,$domicilio,$telefono,$email)  {
        
        $Nuevo = new \Modelos\Usuarios($nombre,$domicilio,$telefono,$email); 
        $Nuevo->setRol('cliente');
        $this->datosCliente->Insertar($Nuevo);
        $listadoC = $this->datosCliente->traerTodos();
        //$_SESSION["ListaCerveza"] = $ListaCerveza;
    
    }

    public function logearse($email,$pass){
		
		$valid = $this->datosUsuario->traerUno($email);

        if($valid == NULL){
            echo 'mail inexistente';
        }
        else{

            $UserArray = $this->datosUsuario->isValid($email, $pass);

            if($UserArray == NULL){
                echo 'Contraseña incorrecta';
            }
            else{
                $this->validarRolSession($email);

            }
         }   
	}


    public function validarRolSession($email){
       
        if($this->datosUsuario->isAdmin($email)){
             require_once ('Vistas/Administrador.php');
            
            //echo ' Login Admin';
           // var_dump($_SESSION);
            //var_dump($_SESSION['Usuario']);
        }
        else if($this->datosUsuario->isUser($email)){
             require_once ('Vistas/Index.php');
            //echo ' Login User';
        }
    }

    public function cerrar(){

    session_destroy();

    require_once ('Vistas/Index.php');

    }
}

?>
