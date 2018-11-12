<?php
  require_once  "Model.php";

  class ImagenModel extends Model {
    function __construct() {
      parent::__construct();
    }

    function GuardarImagen($id_alumno,$imagen,$descripcion) {
      $sentencia = $this->db->prepare("INSERT INTO imagen(id_alumno, imagen, descripcion) VALUES(?,?,?)");
      $sentencia->execute([$id_alumno,$imagen,$descripcion]);
    }
  }
  ?>
