<?php

  require_once  "Model.php";

  class DocentesModel extends Model {
      function __construct() {
        parent::__construct();
      }

    function GetDocentes() {
      $sentencia = $this->db->prepare( "SELECT * FROM docente");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
    function GetAdmin() {
      $sentencia = $this->db->prepare( "SELECT * FROM docente WHERE rol=?");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function GetDocente($user) {
      $sentencia = $this->db->prepare("SELECT * FROM docente WHERE usuario=?");
      $sentencia->execute([$user]);
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function InsertarDocente($nombre, $usuario, $email, $password, $rol) {
      $sentencia = $this->db->prepare("INSERT INTO docente (`nombre`, `usuario`, `email`, `password`, `rol`) VALUES (?,?,?,?,?)");
      $sentencia->execute([$nombre, $usuario, $email, $password, $rol]);
    }

    function EliminarDocente($id_docente) {
      $sentencia = $this->db->prepare("DELETE FROM docente WHERE id_docente=?");
      $sentencia->execute([$id_docente]); //atento con la D
    }

  }

?>
