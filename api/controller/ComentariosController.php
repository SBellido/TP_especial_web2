<?php
require_once 'Api.php';
require_once "./../model/ComentariosModel.php";
// require_once "./../view/ComentariosView.php";
require_once "./../model/AsignaturasModel.php";
// require_once "./../view/AsignaturasView.php";


class ComentariosController extends Api {
  protected $model;
  protected $view;
  protected $modelAsignatura;
  // protected $viewAsignaturas;
  private $titulo;

  function __construct() {
    parent::__construct();
    $this->model = new ComentariosModel();
    $this->modelAsignatura = new AsignaturasModel();
    // $this->view = new ComentariosView();
    // $this->$viewAsignaturas = new AsignaturasView();

  }

  function GetComentariosAsignatura($params = []) {
    $id_asignatura = $_GET['id_asignatura'];
    $comentarios = $this->model->GetComentariosAsignatura($id_asignatura);
    return $this->json_response($comentarios, 200);
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

  function OrdenarComentarios($comentarios) {
    // $asignaturas = $this->model->GetAsignaturas($_GET['orden']);
    //usort Ordena un arracy asociativo por el valor de un elemento
    usort($comentarios, function ($item1, $item2) {
    if ($item1['valoracion'] == $item2['valoracion']) return 0;
    // if($_GET['valor'] == 'desc')
    return $item1['valoracion'] > $item2['valoracion'] ? -1 : 1;
      // return $item1['valoracion'] > $item2['valoracion'] ? -1 : 1;
    });
    return $comentarios;

  }

  function PostComentario() {
    $objetoComentario = file_get_contents('php://input');
    $objetoComentario = json_decode($objetoComentario);
    $id_asignatura = $objetoComentario->comentario->id_asignatura;
    $id_docente = $objetoComentario->comentario->id_docente;
    $comentario = $objetoComentario->comentario->comentario;
    $valoracion = $objetoComentario->comentario->valoracion;
    $this->model->PostComentario($id_asignatura,$id_docente,$comentario,$valoracion);

  }
}
