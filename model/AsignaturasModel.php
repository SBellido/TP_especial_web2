<?php
require_once  "Model.php";

class AsignaturasModel extends Model {
    function __construct() {
      parent::__construct();
    }

  function GetAsignaturas(){
    $sentencia = $this->db->prepare("SELECT * FROM asignaturas");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetAsignatura($id_asignatura){
    $sentencia = $this->db->prepare("SELECT * FROM asignaturas WHERE id_asignatura = ?");
    $sentencia->execute(array($id_asignatura));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertAsignatura($nombre,$descripcion,$docente){
    $sentencia = $this->db->prepare("INSERT INTO asignaturas(nombre, descripcion, docente) VALUES(?,?,?)");
    $sentencia->execute(array($nombre,$descripcion,$docente));
  }

  function BorrarAsignatura($idAsignatura){
    $sentencia = $this->db->prepare("DELETE FROM asignaturas WHERE id_asignatura=?");
    $sentencia->execute(array($idAsignatura));
  }
  function GuardarEditarAsignatura($nombre,$descripcion,$docente,$id_asignatura){
    $sentencia = $this->db->prepare( "UPDATE asignaturas SET nombre=?, descripcion=?, docente=? WHERE id_asignatura=?");
    $sentencia->execute(array($nombre,$descripcion,$docente,$id_asignatura));
  }

  function GetAsignaturas_idAsignatura(){
    $sentencia = $this->db->prepare("SELECT * FROM asignaturas ORDER BY id_asignatura");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
}


 ?>
