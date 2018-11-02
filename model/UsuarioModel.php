<?php
include_once "Model.php";

class UsuarioModel extends Model {

  function __construct() {
    parent::__construct();
  }

  function GetUsuarios() {
    $sentencia = $this->db->prepare( "SELECT * FROM `usuario`");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetUsuario($usuario) {
    $sentencia = $this->db->prepare( "SELECT * FROM `usuario` WHERE usuario=?");
    $sentencia->execute(array($usuario));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarDocente($nombre, $usuario, $email, $password) {
    $sentencia = $this->db->prepare("INSERT INTO docente (`nombre`, `usuario`, `email`, `password`) VALUES (?,?,?,?)");
    $sentencia->execute(array($nombre, $usuario, $email, $password));
  }

  function modificaUsuario($id_usuario, $nombre, $usuario, $email) { //UPDATE `usuarios` SET `id_usuario`=[value-1],`nombre`=[value-2],`usuario`=[value-3],`e-mail`=[value-4],`password`=[value-5],`esadmin`=[value-6] WHERE 1
    $sentencia = $this->db->prepare("UPDATE `usuario` SET `id_usuario`, `nombre`, `usuario`, `e-mail`) VALUES (?,?,?,?) WHERE id_usuario=?") ;
    $sentencia->execute(array($id_usuario, $nombre, $usuario, $email));
  }
}

?>
