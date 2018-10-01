<?php

include_once 'Profesor.php';

class ProfesorTitular extends Profesor
{
  private $especialidad;

  function __construct($nombre, $apellido, $cod_profesor, $antiguedad, $especialidad)
  {
    parent::__construct($nombre, $apellido, $cod_profesor, $antiguedad);
    $this->especialidad=$especialidad;

  }
}
