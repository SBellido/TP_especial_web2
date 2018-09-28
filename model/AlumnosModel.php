<?php
/**
 *
 */
class AlumnosModel {
  private $db;

  function __construct() {
    $this->db = $this->Connect();
  }

  function Connect() {
  return new PDO('mysql:host=localhost;'
    .'dbname=cursada;charset=utf8'
    , 'root', '');
  }

  function GetAlumnos(){
      $sentencia = $this->db->prepare( "select * from alumnos");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertAlumno($nombre,$email,$nota,$aprobado){
    $sentencia = $this->db->prepare("INSERT INTO alumnos(id_asignatura,nombre, email, nota, aprobado) VALUES(17,?,?,?,?)");
    $sentencia->execute(array($nombre,$email,$nota,$aprobado));
  }//INSERT INTO `alumnos`( `id_asignatura`, `nombre`, `email`, `nota`, `aprobado`) VALUES (17,"carlos","nfnf@ds.com",4,1)

  function EliminarAlumno($idAlumno){
    $sentencia = $this->db->prepare("delete from alumnos where id_alumno=?");
    $sentencia->execute([$idAlumno]); //atento con la A
  }

  function AprobarAlumno($idAlumno){
    $sentencia = $this->db->prepare("update alumnos set aprobado=1 where id_alumno=?");
    $sentencia->execute(array($idAlumno));
  }
}


 ?>
