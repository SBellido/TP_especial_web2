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
    // $usuarioConnect = $this->model->GetAdmin($usuario);
    // $usuarioConnect = $this->model->GetDocente($usuario);
    $this->view->MostrarDocentes($this->titulo,$docentes,$usuario);
  }
  // $alumnos = $this->model->GetAlumnos();
  // $usuario=$this->getUsuario();
  // $asignatura = $this->modelAsignatura->GetAsignaturas();
  // $this->view->MostrarAlumnos($this->titulo,$this->imagen,$alumnos,$usuario,$asignatura);
  // function GetRol() {
  //
  // }

  function EliminarDocente($params) {
    $permiso=$this->verificaPermisos();
    if ($permiso) {
      $usuario=$this->getUsuario();
      $docentes = $this->model->GetDocentes();
      $this->model->EliminarDocente($params[0]);
      $this->view->MostrarDocentes($this->titulo,$docentes,$usuario);
      header("Location: ".URL_DOCENTES);
      die();
    }else{
      header("Location: ".URL_LOGIN);
      die();
    }
  }

  function darAdmin($params) {
    $permiso=$this->verificaPermisos();
    if ($permiso) {
      $usuario=$this->getUsuario();
      $id_docente = $params[0];
      $rol = "admin";
      $this->model->nombrarAdmin($rol,$id_docente);
      $this->view->EliminarDocente($usuario);
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
