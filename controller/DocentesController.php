<?php

require_once "./view/DocentesView.php";
require_once "./model/DocentesModel.php";
require_once "SecuredController.php";
// require_once "./view/HomeView.php";

class DocentesController extends SecuredController
{
  private $view;
  private $model;
  private $titulo;


  function __construct() {
    parent::__construct();
    $this->view = new DocentesView($this->baseURL);
    $this->model = new DocentesModel();
    $this->titulo = "Listado de Docentes con usuario registrado";
    $this->usuario = $this->getUsuario();
  }

  function MostrarDocentes() {
    $docentes = $this->model->GetDocentes();
    $usuario=$this->getUsuario();
    $this->view->MostrarDocentes($this->titulo,$docentes,$usuario);
  }

  function EliminarDocente($params) {
    $permiso = $this->verificaPermisos();
    if ($permiso) {
      $this->model->EliminarDocente($params[0]);
      // print_r($params[0]);
      //header("Location: ".URL_DOCENTES);
      //die();
    }else{
      header("Location: ".URL_LOGIN);
      die();
    }
  }

  function CambiarRol($params) {
    $permiso = $this->verificaPermisos();
    if ($permiso) {
      $usuario = $this->getUsuario();
      $id_docente = $params[0];
      $rolActual = $this->model->GetRol($id_docente);
      if($rolActual[0]['rol'] == "admin") {
         $rol = "docente";
       }elseif ($rolActual[0]['rol'] == "docente") {
         $rol = "admin";
       }
      $this->model->CambiarRol($rol,$id_docente);
      header("Location: ".URL_DOCENTES);
    }else{
      header("Location: ".URL_LOGIN);
      die();
    }
  }


  // function EditarDocente($id_docente) {
  //   $docente = $this->model->GetDocente($id_docente);
  //   $this->view->MostrarDocente($docente);
  // }


  //
  // function InsertDocente() {
  //   $nombre = $_POST["nombreForm"];
  //   $usuario = $_POST["usuarioForm"];
  //   $email = $_POST["emailForm"];
  //   $cargo = $_POST["cargoForm"];
  //   $password = $_POST["passwordForm"];
  //   $this->model->InsertDocente($nombre,$usuario,$email,$cargo,$password);
  //   header("Location: ".URL_DOCENTES);
  //   die();
  // }

}


 ?>
