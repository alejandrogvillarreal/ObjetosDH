<?php

include_once 'Curso.php';
/**
 *
 */
class DigitalHouseManager
{

  private $profesores=[];
  private $cursos=[];
  private $alumnos=[];


  public function altaCurso($nombre, $codigoCurso, $cupoMaximoDeAlumnos){

    $curso = new Curso($nombre,$codigoCurso);
    $curso->setcupoMaximoAlumnos($cupoMaximoDeAlumnos);

    $this->cursos[]=$curso;
  }

  public function getCursos()
  {
    return $this->cursos;
  }

  public function altaProfesorAdjunto($nombre, $apellido, $codigoProfesor, $cantidadDeHoras){

    $profesorAdjunto = new ProfesorAdjunto($nombre, $apellido, $codigoProfesor, 0, $cantidadDeHoras);
    $this->profesores[]=$profesorAdjunto;
  }

  public function altaProfesorTitular($nombre, $apellido, $codigoProfesor, $especialidad){
    $profesorTitular = new ProfesorTitular($nombre, $apellido, $codigoProfesor, 0, $especialidad);
    $this->profesores[]=$profesorTitular;
  }

  public function altaAlumno($nombre, $apellido, $codigoAlumno){
    $alumno = new Alumno($nombre, $apellido, $codigoAlumno);
    $this->alumnos[]=$alumno;
  }
  public function inscribirAlumno($codigoAlumno, $codigoCurso)
  {
    foreach ($this->cursos as $curso) {
      if ($curso->getCodCurso() == $codigoCurso) {
        foreach ($this->alumnos as $alumno) {
          if ($alumno->getCodAlumno() == $codigoAlumno) {
              $curso->agregarAlumno($alumno);
              echo "<h1>INSCRIPCION EXITOSA</h1>";
            }
        }
      }
    }
  }
  public function asignarProfesores($codigoCurso, $codigoProfesorTitular, $codigoProfesorAdjunto)
  {
    foreach ($this->cursos as $curso) {
      if ($curso->getCodCurso() == $codigoCurso) {
        foreach ($this->profesores as $profesor) {
          if ($profesor->getCodProfesor() == $codigoProfesorTitular) {
              $curso->setProfesorTitular($profesor);
            }
        }
        foreach ($this->profesores as $profesor) {
          if ($profesor->getCodProfesor() == $codigoProfesorAdjunto) {
              $curso->setProfesorAdjunto($profesor);
            }
        }
      }
    }
  }
}
