<?php

  require_once  "Model.php";

  class ComentariosModel extends Model {
    function __construct() {
      parent::__construct();
    }

    function GetComentarios() {
      $sentencia = $this->db->prepare("SELECT * FROM comentario");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
  }


?>
