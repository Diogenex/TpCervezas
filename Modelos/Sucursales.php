<?php namespace Modelos;

class Sucursales{
		
		private $idSucursal;
		private $nombre;
		private $descripcion;
		private $ubicacion;
		private $foto;

public function __construct($nombre='',$ubicacion='',$descripcion='Sin Descripcion' ,$foto = '/Vistas/img/default.png'){

	$this->nombre = $nombre;
	$this->ubicacion = $ubicacion;
	$this->descripcion = $descripcion;
	$this->foto = $foto;


}

public function getId()
{
    return $this->idSucursal;
}

public function setId($idSucursal)
{
    $this->idSucursal = $idSucursal;
}

public function getNombre()
{
    return $this->nombre;
}

public function setNombre($nombre)
{
    $this->nombre = $nombre;
    return $this->nombre;
}

public function getUbicacion()
{
    return $this->ubicacion;
}

public function setUbicacion($ubicacion)
{
    $this->ubicacion = $ubicacion;
    return $this->ubicacion;
}

public function getDescripcion()
{
    return $this->descripcion;
}

public function setDescripcion($descripcion)
{
    $this->descripcion = $descripcion;
    return $this;
}

public function getFoto()
{
    return $this->foto;
}

public function setFoto($foto)
{
    $this->foto = $foto;
    return $this->$foto;
}

}


?>