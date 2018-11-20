<?php
require_once  "Model.php";

class AsignaturasModel extends Model {
    function __construct() {
      parent::__construct();
    }

  function GetAsignaturas() {
    $sentencia = $this->db->prepare("SELECT a.*, d.nombre as nombre_docente
                                     FROM asignatura a INNER JOIN docente d
                                     ON(a.id_docente = d.id_docente)");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetAsignatura($id_asignatura) {
    $sentencia = $this->db->prepare("SELECT * FROM asignatura
                                     WHERE id_asignatura=?");
    $sentencia->execute([$id_asignatura]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function AgregarAsignatura($nombre,$descripcion,$docente,$cupo) {
    $sentencia = $this->db->prepare("INSERT INTO asignatura(nombre, descripcion, id_docente, cupo)
                                     VALUES(?,?,?,?)");
    $sentencia->execute([$nombre,$descripcion,$docente,$cupo]);
    $ultimoId =  $this->db->lastInsertId();
    return $this->GetAsignatura($ultimoId);

  }

  function EliminarAsignatura($idAsignatura){
    $sentencia = $this->db->prepare("DELETE FROM asignatura
                                     WHERE id_asignatura=?");
    $sentencia->execute([$idAsignatura]);
  }

  function GuardarEditarAsignatura($nombre,$descripcion,$docente,$cupo,$id_asignatura) {
    $sentencia = $this->db->prepare( "UPDATE asignatura
                                      SET nombre=?, descripcion=?, id_docente=?, cupo=?
                                      WHERE id_asignatura=?");
      $sentencia->execute([$nombre,$descripcion,$docente,$cupo,$id_asignatura]);
    }
  // function GuardarEditarAsignatura($nombre,$descripcion,$docente,$cupo,$id_asignatura){
  //   $sentencia = $this->db->prepare( "UPDATE asignatura
  //                                     SET nombre=?, descripcion=?, id_docente=?, cupo=?
  //                                     WHERE id_asignatura=?");
  //   $sentencia->execute([$nombre,$descripcion,$docente,$id_asignatura,$cupo]);
  // }

  function GetAsignaturas_idAsignatura() {
    $sentencia = $this->db->prepare("SELECT * FROM asignatura
                                     ORDER BY id_asignatura");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetAsignaturasFiltro($id_docente) {
    $sentencia = $this->db->prepare("SELECT a.*, d.nombre as nombre_docente
                                     FROM asignatura a INNER JOIN docente d
                                     ON(a.id_docente = d.id_docente)
                                     WHERE a.id_docente=?");
    $sentencia->execute([$id_docente]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function CerrarCupo($id_asignatura) {
    $sentencia = $this->db->prepare("UPDATE asignatura
                                    SET cupo=1
                                    WHERE id_asignatura=?");
    $sentencia->execute([$id_asignatura]);
  }

  function GetNombreDocente($id_asignatura) {
    $sentencia = $this->db->prepare("SELECT a.*, d.nombre as nombre_docente
                                     FROM asignatura a INNER JOIN docente d
                                     ON(a.id_docente=d.id_docente)
                                     WHERE a.id_asignatura=?");
    $sentencia->execute([$id_asignatura]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  // function GetNombreDocente($id_asignatura) {
  //   $sentencia = $this->db->prepare("SELECT d.nombre as nombre_docente
  //                                    FROM asignatura a
  //                                    WHERE id_asignatura=?");
  //   $sentencia->execute([$id_asignatura]);
  //   return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  // }

}
