<?php

include_once 'Profesor.php';

/**
 *
 */
class ProfesorAdjunto extends Profesor
{
  private $cant_horas;


    function __construct($nombre, $apellido, $cod_profesor, $antiguedad, $cant_horas)
    {
      parent::__construct($nombre, $apellido, $cod_profesor, $antiguedad);
      $this->cant_horas=$cant_horas;
    }
}
