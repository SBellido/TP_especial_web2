<?php
require_once 'Api.php';
require_once "./../model/ComentariosModel.php";
// require_once "./../view/ComentariosView.php";
require_once "./../model/AsignaturasModel.php";
// require_once "./../view/AsignaturasView.php";


class ComentariosController extends Api {
  protected $model;
  protected $modelAsignatura;

  function __construct() {
    parent::__construct();
    $this->model = new ComentariosModel();
    $this->modelAsignatura = new AsignaturasModel();

  }
  // function GetComentariosAsignatura($params = []) {
  //   $orden = $_GET['ordenar'];
  //   $id_asignatura = $_GET['id_asignatura'];
  //   $comentarios = $this->model->GetComentariosAsignatura($id_asignatura);
  //   return $this->json_response($comentarios, 200);
  // }

  // function GetComentariosAsignatura() {
  //   $orden = $_GET['ordenar'];
  //   $id_asignatura = $_GET['id_asignatura'];
  //   echo $id_asignatura;
  //   if($orden) {
  //     $ordenComentario = $this->model->ComentariosValoracion($id_asignatura,$orden);
  //     return $this->json_response($comentarios, 200);
  //   } else {
  //     $comentarios = $this->model->GetComentariosAsignatura($id_asignatura);
  //     return $this->json_response($comentarios, 200);
  //   }
  //
  // }

  function GetComentariosAsignatura() {
    $id_asignatura = $_GET['id_asignatura'];

    if (isset($_GET['ordenar'])) {
      $orden = $_GET['ordenar'];
      echo $orden;
      $comentarios = $this->model->ComentariosValoracion($id_asignatura,$orden);

      return $this->json_response($comentarios, 200);
    } else {
      $comentarios = $this->model->GetComentariosAsignatura($id_asignatura);
      return $this->json_response($comentarios, 200);
    }
  }

  // function ComentariosValoracion() {
  //   $id_asignatura = $_GET['id_asignatura'];
  //   $orden = $_GET['getOrden'];
  //   if($_GET['getOrden'] == 'desc') {
  //     $orden = 'desc';
  //   }else{
  //     $orden = 'asc';
  //   }
    // $asignaturas = $this->model->GetAsignaturas($_GET['orden']);
    //usort Ordena un arracy asociativo por el valor de un elemento
    // usort($comentarios, function ($item1, $item2) {
    // if ($item1['valoracion'] == $item2['valoracion']) return 0;
    // if($_GET['orden'] == 'desc')
    // return $item1['valoracion'] > $item2['valoracion'] ? -1 : 1;
    // return $item1['valoracion'] > $item2['valoracion'] ? -1 : 1;
    // });
    // return $comentarios;

  // }

  function PostComentario() {
    $objetoComentario = file_get_contents('php://input');
    $objetoComentario = json_decode($objetoComentario);
    $id_asignatura = $objetoComentario->comentario->id_asignatura;
    $id_docente = $objetoComentario->comentario->id_docente;
    $comentario = $objetoComentario->comentario->comentario;
    $valoracion = $objetoComentario->comentario->valoracion;
    $this->model->PostComentario($id_asignatura,$id_docente,$comentario,$valoracion);

  }

  function BorrarComentario($id_comentario) {
    $comentarioBorrado = $this->model->BorrarComentario($id_comentario);
    return $this->json_response("Comentario borrado", 200);
  }
}


// if(isset($_GET['order']) && $_GET['order'] == 'desc') {
//   $comentarios = $this->OrdenarComentarios($comentarios);
// }

// function GetComentarios($params = []) {
//   $dato = file_get_contents('php://input');
//   $dato = json_decode($dato);
//   $id_asignatura = $_GET['id_asignatura'];
//   $comentarios = $this->model->GetComentariosAsignatura($id_asignatura);
//   if(isset($_GET['order']) && $_GET['order'] == 'desc') {
//     $comentarios = $this->OrdenarComentarios($comentarios);
//   }
//   return $this->json_response($comentarios, 200);
// }


// function GetComentarios($params = []) {
//   $comentarios = $this->model->GetComentarios();
//   if(isset($_GET['order']) && $_GET['order'] == 'desc') {
//     $comentarios = $this->OrdenarComentarios($comentarios);
//   }
//   return $this->json_response($comentarios, 200);
// }
