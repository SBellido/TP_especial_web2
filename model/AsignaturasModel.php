<?php
require_once  "Model.php";

class AsignaturasModel extends Model {
    function __construct() {
      parent::__construct();
    }

  function GetAsignaturas() {
    $sentencia = $this->db->prepare("SELECT a.*, d.nombre as nombre_docente
                                     FROM asignatura a INNER JOIN docente d ON(a.id_docente = d.id_docente)");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  // function GetAsignaturas() {
  //   $sentencia = $this->db->prepare("SELECT * FROM asignatura INNER JOIN docente ON asignatura.id_docente = docente.id_docente");
  //   $sentencia->execute();
  //   return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  // }

  function GetAsignatura($id_asignatura) {
    $sentencia = $this->db->prepare("SELECT * FROM asignatura WHERE id_asignatura = ?");
    $sentencia->execute([$id_asignatura]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function AgregarAsignatura($nombre,$descripcion,$docente){
    $sentencia = $this->db->prepare("INSERT INTO asignatura(nombre_asignatura, descripcion, id_docente) VALUES(?,?,?)");
    $sentencia->execute([$nombre,$descripcion,$docente]);
  }

  function EliminarAsignatura($idAsignatura){
    $sentencia = $this->db->prepare("DELETE FROM asignatura WHERE id_asignatura=?");
    $sentencia->execute([$idAsignatura]);
  }

  function GuardarEditarAsignatura($nombre,$descripcion,$docente,$id_asignatura){
    $sentencia = $this->db->prepare( "UPDATE asignatura SET nombre_asignatura=?, descripcion=?, id_docente=? WHERE id_asignatura=?");
    $sentencia->execute([$nombre,$descripcion,$docente,$id_asignatura]);
  }

  function GetAsignaturas_idAsignatura(){
    $sentencia = $this->db->prepare("SELECT * FROM asignatura ORDER BY id_asignatura");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

}


 ?>
