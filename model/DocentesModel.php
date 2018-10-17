<?php
require_once  "Model.php";

class DocentesModel extends Model {
    function __construct() {
      parent::__construct();
    }

  function GetDocentes(){
    $sentencia = $this->db->prepare( "SELECT * FROM docentes");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetUser($user){
    $sentencia = $this->db->prepare("SELECT * FROM docentes WHERE usuario=?");
    $sentencia->execute(array($user));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertDocente($nombre, $usuario, $email, $cargo, $password){
    $sentencia = $this->db->prepare("INSERT INTO docentes(nombre, usuario, email, cargo, pass) VALUES(?,?,?,?,?)");
    $sentencia->execute(array($nombre, $usuario, $email, $cargo, $password));
  }

  function EliminarDocente($idDocente){
    $sentencia = $this->db->prepare("DELETE FROM docentes WHERE id_docente=?");
    $sentencia->execute(array($idDocente)); //atento con la D
  }

}


 ?>
