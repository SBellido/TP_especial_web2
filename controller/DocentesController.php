<?php

require_once "./view/DocentesView.php";
require_once "./model/DocentesModel.php";
require_once "./view/HomeView.php";
require_once "SecuredController.php";

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
  }

  function MostrarDocentes() {
    $docentes = $this->model->GetDocentes();
    $user=$this->getUser();
    $this->view->MostrarDocentes($this->titulo,$docentes,$user);
  }

  function InsertDocente() {
    $nombre = $_POST["nombreForm"];
    $usuario = $_POST["usuarioForm"];
    $email = $_POST["emailForm"];
    $cargo = $_POST["cargoForm"];
    $password = $_POST["passwordForm"];
    $this->model->InsertDocente($nombre,$usuario,$email,$cargo,$password);
    header("Location: ".URL_DOCENTES);
    die();
  }

  function EliminarDocente($params) {
    $this->model->EliminarDocente($params[0]);
    header("Location: ".URL_DOCENTES);
    die();
  }

  function EditarDocente($id_docente) {
    $docente = $this->model->GetDocente($id_docente);
    $this->view->MostrarDocente($docente);
  }
}

 ?>
