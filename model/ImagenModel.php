<?php
  require_once  "Model.php";

  class ImagenModel extends Model {
    function __construct() {
      parent::__construct();
    }

    // function GetImagen($id_imagen){
    //
    // }

  function GuardarImagen($id_asignatura,$imagen,$descripcion) {
    $path = $this->subirImagen($imagen);
    $sentencia = $this->db->prepare("INSERT INTO imagen (id_asignatura, imagen, descripcion) VALUES(?,?,?)");
    $sentencia->execute([$id_asignatura,$path,$descripcion]);
  }

   private function subirImagen($imagen){
     $destino_final = 'images/' . uniqid() . '.jpg';
     echo "destino_final: ".$destino_final;
     move_uploaded_file($imagen, $destino_final);
     return $destino_final;

  }

  function GetImagen($id_asignatura) {
    $sentencia = $this->db->prepare("SELECT * FROM imagen WHERE id_asignatura=?");
    $sentencia->execute([$id_asignatura]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

}
