<?php
  require_once  "Model.php";

  class AlumnosModel extends Model {
    function __construct() {
      parent::__construct();
    }

    function GetAlumnos(){
      $sentencia = $this->db->prepare("SELECT * FROM alumno");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function GetAlumno($id_alumno){
      $sentencia = $this->db->prepare("SELECT * FROM alumno WHERE id_alumno=?");
      $sentencia->execute([$id_alumno]);
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function GetAlumno_idAsignatura($id_asignatura){
      $sentencia = $this->db->prepare("SELECT * FROM alumno WHERE id_asignatura=?");
      $sentencia->execute([$id_asignatura]);
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function GetAlumnos_idAsignatura(){
      $sentencia = $this->db->prepare("SELECT * FROM alumno ORDER BY id_asignatura");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function GuardarEditarAlumno($nombre,$email,$nota,$id_alumno){
      $sentencia = $this->db->prepare( "UPDATE alumno SET nombre=?, email=?, nota=? WHERE id_alumno=?");
      $sentencia->execute([$nombre,$email,$nota,$id_alumno]);
    }

    function AgregarAlumno($nombre,$email,$nota,$id_asignatura,$aprobado){
      $sentencia = $this->db->prepare("INSERT INTO alumno(nombre, email, nota, id_asignatura, aprobado) VALUES(?,?,?,?,?)");
      $sentencia->execute([$nombre,$email,$nota,$id_asignatura,$aprobado]);
    }

    function EliminarAlumno($id_alumno){
      $sentencia = $this->db->prepare("DELETE FROM alumno WHERE id_alumno=?");
      $sentencia->execute([$id_alumno]);
    }

    function AprobarAlumno($id_alumno){
      $sentencia = $this->db->prepare("UPDATE alumno SET aprobado=1 WHERE id_alumno=?");
      $sentencia->execute(array($id_alumno));
    }

    function GetAlumnosFiltro($id_asignatura){
      $sentencia = $this->db->prepare("SELECT * FROM alumno WHERE id_asignatura=?");
      $sentencia->execute(array($id_asignatura));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

  }
?>
