<?php



class Curso
{

  private $nombre;
  private $cod_curso;
  private $profesorTitular;
  private $profesorAdjunto;
  private $cupoMaximoAlumnos;
  private $alumnos=[];



  function __construct($nombre, $cod_curso)
  {
    $this->nombre = $nombre;
    $this->cod_curso = $cod_curso;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  public function getCodCurso(){
    return $this->cod_curso;
  }
  public function setCodCurso($cod_curso){
    $this->cod_curso = $cod_curso;
  }

  //GET Y SET DEL CUPO MAXIMO DE ALUMNOS
  public function getCupoMaximoAlumnos(){
    return $this->cupoMaximoAlumnos;
  }
  public function setcupoMaximoAlumnos($cupoMaximoAlumnos){
    $this->cupoMaximoAlumnos = $cupoMaximoAlumnos;
  }

  //AGREGAR ALUMNOS AL CURSO
  public function agregarAlumno(Alumno $alumno){
    if (count($this->alumnos) <= $this->cupoMaximoAlumnos) {
      $this->alumnos[]=$alumno;
      return true;
    }else {
      echo "<h1>CUPO LLENO</h1>";
      return false;
    }
  }

  public function getAlumnos()
  {
    return $this->alumnos;
  }

  //GET Y SET DEL PROFESOR TITULAR
  public function setProfesorTitular(ProfesorTitular $profesorTitular){
    $this->profesorTitular = $profesorTitular;
  }
  public function getProfesorTitular(){
    return $this->profesorTitular;
  }

//GET Y SET DEL PROFESOR ADJUNTO
  public function setProfesorAdjunto(ProfesorAdjunto $profesorAdjunto){
    $this->profesorAdjunto = $profesorAdjunto;
  }
  public function getProfesorAdjunto(){
    return $this->profesorAdjunto;
  }
}
