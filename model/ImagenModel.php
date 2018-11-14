<?php
  require_once  "Model.php";

  class ImagenModel extends Model {
    function __construct() {
      parent::__construct();
    }

    // function GetImagen($id_imagen){
    //
    // }

    function GuardarImagen($imagen,$descripcion) {
      $path = $this->subirImagen($imagen);
      $lastId =  $this->db->lastInsertId();
      $sentencia = $this->db->prepare("INSERT INTO imagen (id_asignatura, imagen, descripcion) VALUES(?,?,?)");
      $sentencia->execute([$lastId,$path,$descripcion]);
    }

   private function subirImagen($imagen){
      $destino_final = 'images/' . uniqid() . '.jpg';
      echo "destino_final: ".$destino_final;
      move_uploaded_file($imagen, $destino_final);
      return $destino_final;
  }

  function InsertarTarea($titulo,$descripcion,$completada,$tempPath){
    $path = $this->subirImagen($tempPath);
    $sentencia = $this->db->prepare("INSERT INTO tarea(titulo, descripcion, completada) VALUES(?,?,?)");
    $sentencia->execute(array($titulo,$descripcion,$completada));
    $lastId =  $this->db->lastInsertId();
    return $this->GetTarea($lastId);
  }

  }
