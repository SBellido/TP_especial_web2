<?php
require_once 'Api.php';
require_once "./../model/ComentariosModel.php";
// require_once "./../view/ComentariosView.php";
require_once "./../model/AsignaturasModel.php";


class ComentariosController extends Api {
  protected $model;
  protected $view;
  protected $modelAsignatura;

  function __construct() {
    parent::__construct();
    $this->model = new ComentariosModel();
    // $this->view = new ComentariosView();
    $this->modelAsignatura = new AsignaturasModel();
  }

  function GetComentarios($params = []) {
    // $params[0] = $id_asignatura;
    $comentarios = $this->model->GetComentarios(); // GetComentariosAsignatura($id_asignatura);
    if(isset($_GET['order']) && $_GET['order'] == 'desc') {
      $comentarios = $this->OrdenarComentarios($comentarios);
    }
    return $this->json_response($comentarios, 200);
  }

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
}
?>
