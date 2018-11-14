<?php
  require_once  "Model.php";

  class ImagenModel extends Model {
    function __construct() {
      parent::__construct();
    }

    function GuardarImagen($id_docente,$imagen,$descripcion) {
      $sentencia = $this->db->prepare("INSERT INTO imagen (id_docente, imagen, descripcion) VALUES(?,?,?)");
      $sentencia->execute([$id_docente,$imagen,$descripcion]);
    }
  }
  ?>
