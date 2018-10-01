<?php


/**
 *
 */
abstract class Profesor
{

  protected $nombre;
  protected $apellido;
  protected $cod_profesor;
  protected $antiguedad;

  function __construct($nombre, $apellido, $cod_profesor, $antiguedad)
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->cod_profesor = $cod_profesor;
    $this->antiguedad = $antiguedad;
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
  public function getCodProfesor(){
    return $this->cod_profesor;
  }
  public function setCodProfesor($cod_profesor){
    $this->cod_profesor = $cod_profesor;
  }

  //SET Y GET DE ANTIGUEDAD
  public function getAntiguedad(){
    return $this->antiguedad;
  }
  public function setAntiguedad($antiguedad){
    $this->antiguedad = $antiguedad;
  }

}
