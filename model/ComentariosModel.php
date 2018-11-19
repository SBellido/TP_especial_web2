<?php

  require_once  "Model.php";

  class ComentariosModel extends Model {
    function __construct() {
      parent::__construct();
    }

    function GetComentarios() {
      $sentencia = $this->db->prepare("SELECT * FROM comentario");
      $sentencia->execute();
      // return $sentencia->fetchAll(PDO::FETCH_ASSOC);
      $comentarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);
      // foreach ($comenrtarios as $key => $comentario) {
      //   $comentarios[$key]['valoracion'] = $comentarios[$key]['valoracion'] == "0" ? false : true;
      return $comentarios;
      // }
    }

    function GetComentariosAsignatura($id_asignatura) {
      $sentencia = $this->db->prepare("SELECT * FROM comentario WHERE id_asignatura=?");
      $sentencia->execute($id_asignatura);
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function PostComentario($id_asignatura,$id_docente,$comentario,$valoracion){
      $sentencia = $this->db->prepare("INSERT INTO comentario (id_asignatura, id_docente, comentario, valoracion) VALUES (?,?,?,?)");
      $sentencia->execute([$id_asignatura,$id_docente,$comentario,$valoracion]);
    }

  }
