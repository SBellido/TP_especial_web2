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

    function GetDocente($user) {
      $sentencia = $this->db->prepare("SELECT * FROM docente WHERE usuario=?");
      $sentencia->execute([$user]);
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function InsertarDocente($nombre, $usuario, $email, $password) {
      $sentencia = $this->db->prepare("INSERT INTO docente (`nombre`, `usuario`, `email`, `password`) VALUES (?,?,?,?)");
      $sentencia->execute(array($nombre, $usuario, $email, $password));
    }

    function InsertDocente($nombre, $usuario, $email, $cargo, $password) {
      $sentencia = $this->db->prepare("INSERT INTO docente(nombre, usuario, email, cargo, pass) VALUES(?,?,?,?,?)");
      $sentencia->execute(array($nombre, $usuario, $email, $cargo, $password));
    }

    function EliminarDocente($id_docente) {
      $sentencia = $this->db->prepare("DELETE FROM docente WHERE id_docente=?");
      $sentencia->execute(array($id_docente)); //atento con la D
    }

  }

?>
