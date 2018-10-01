<?php


/**
 *
 */
class Alumno
{

  private $nombre;
  private $apellido;
  private $cod_alumno;

  function __construct($nombre, $apellido, $cod_alumno)
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->cod_alumno = $cod_alumno;
  }

  //SET Y GET DE NOMBRE
  public function getNombre(){
    return $this->nombre;
  }
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }

  //SET Y GET DE APELLIDO
  public function getApellido(){
    return $this->apellido;
  }
  public function setApellido($apellido){
    $this->apellido = $apellido;
  }

  //SET Y GET DE CODIGO DE ALUMNO
  public function getCodAlumno(){
    return $this->cod_alumno;
  }
  public function setCodAlumno($cod_alumno){
    $this->cod_alumno = $cod_alumno;
  }

}
