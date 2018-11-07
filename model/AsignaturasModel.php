<?php
require_once  "Model.php";

class AsignaturasModel extends Model {
    function __construct() {
      parent::__construct();
    }

  function GetAsignaturas() {
    $sentencia = $this->db->prepare("SELECT * FROM asignatura");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetAsignatura($id_asignatura) {
    $sentencia = $this->db->prepare("SELECT * FROM asignatura WHERE id_asignatura = ?");
    $sentencia->execute([$id_asignatura]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function AgregarAsignatura($nombre,$descripcion,$docente){
    $sentencia = $this->db->prepare("INSERT INTO asignatura(nombre, descripcion, id_docente) VALUES(?,?,?)");
    $sentencia->execute([$nombre,$descripcion,$docente]);
  }

  function EliminarAsignatura($idAsignatura){
    $sentencia = $this->db->prepare("DELETE FROM asignatura WHERE id_asignatura=?");
    $sentencia->execute([$idAsignatura]);
  }

  function GuardarEditarAsignatura($nombre,$descripcion,$docente,$id_asignatura){
    $sentencia = $this->db->prepare("UPDATE asignatura SET nombre=?, descripcion=?, id_docente=? WHERE id_asignatura=?");
    $sentencia->execute([$nombre,$descripcion,$docente]);
  }

  function GetAsignaturas_idAsignatura(){
    $sentencia = $this->db->prepare("SELECT * FROM asignatura ORDER BY id_asignatura");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
}


 ?>
