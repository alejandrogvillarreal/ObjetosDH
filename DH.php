<?php
include_once 'Models/DigitalHouseManager.php';
include_once 'Models/Alumno.php';
include_once 'Models/Curso.php';
include_once 'Models/Profesor.php';
include_once 'Models/ProfesorTitular.php';
include_once 'Models/ProfesorAdjunto.php';

/*
$alumno1=new Alumno("gabriel", "hocsman", 3524);
$alumno2=new Alumno("Carlos", "Villarreal", 321);
$alumno3=new Alumno("Pablo", "Fryda", 7653);
$alumno4=new Alumno("Ale", "Irigoyen", 449);
$curso=new Curso("php",1111);
$profesorTitular=new ProfesorTitular("juan", "maria", 333, 10, "humorista");
$profesorAdjunto=new ProfesorAdjunto("jose", "maria", 383, 6, 4);
*/
/*var_dump($alumno1);
var_dump($curso);
var_dump($profesorTitular);
var_dump($profesorAdjunto);
*/
/*
$curso->setcupoMaximoAlumnos(10);
$curso->agregarAlumno($alumno1);
$curso->agregarAlumno($alumno2);
$curso->setProfesorTitular($profesorTitular);
$curso->setProfesorAdjunto($profesorAdjunto);


var_dump($curso);
*/

$DigitalHouse = new DigitalHouseManager();


$DigitalHouse->altaProfesorTitular("manuel", "gonzalez", 43, "css");
$DigitalHouse->altaProfesorTitular("pedro", "gimenez", 40, "html");
$DigitalHouse->altaProfesorAdjunto("mario","peregrino", 24, 50);
$DigitalHouse->altaProfesorAdjunto("german", "diaz", 20, 30);
$DigitalHouse->altaCurso("FULL STACK", "20001", 3);
$DigitalHouse->altaCurso("ANDROID", "20002", 2);

//asignarProfesores($codigoCurso, $codigoProfesorTitular, $codigoProfesorAdjunto)
$DigitalHouse->asignarProfesores("20001", 43 , 24);
$DigitalHouse->asignarProfesores("20002", 40 , 20);

//ALTA ALUMNOS
$DigitalHouse->altaAlumno("Rodrigo","Martinez", "221");
$DigitalHouse->altaAlumno("Alexis","Vazquez", "222");
$DigitalHouse->altaAlumno("Marcela","Araujo", "223");

//INSCRIPCION DE ALUMNOS A FULL STACK
//public function inscribirAlumno($codigoAlumno, $codigoCurso)
$DigitalHouse->inscribirAlumno("221","20001");
$DigitalHouse->inscribirAlumno("222","20001");

//INSCRIPCION DE ALUMNOS A ANDROID
//public function inscribirAlumno($codigoAlumno, $codigoCurso)
$DigitalHouse->inscribirAlumno("221","20002");
$DigitalHouse->inscribirAlumno("223","20002");

var_dump($DigitalHouse);
var_dump($DigitalHouse->getCursos());

 ?>
