<?php
require_once "./view/AsignaturasView.php";
require_once "./model/AsignaturasModel.php";
require_once "SecuredController.php";
require_once "./model/AlumnosModel.php";
require_once "./model/DocentesModel.php";


class AsignaturasController extends SecuredController{
  private $view;
  private $model;
  private $titulo;
  private $imagen;
  private $modelAlumnos;
  private $modelDocentes;
  private $user;

  function __construct(){
    parent:: __construct();
    $this->view = new AsignaturasView($this->baseURL);
    $this->model = new AsignaturasModel();
    $this->modelAlumnos = new AlumnosModel();
    $this->modelDocentes = new DocentesModel();

    $this->titulo = "Asignaturas del Instituto";
    $this->imagen = "images/ideas.jpg";
  }

  function MostrarAsignaturas(){
    $asignaturas = $this->model->GetAsignaturas();
    $docente = $this->modelDocentes->GetDocentes();
    $user=$this->getUser();
    $this->view->MostrarAsignaturas($this->titulo,$this->imagen,$asignaturas,$docente,$user);
  }

  function AgregarAsignatura(){
    $nombre = $_POST["nombreForm"];
    $descripcion = $_POST["descripcionForm"];
    $docente = $_POST["docenteForm"];
    $this->model->AgregarAsignatura($nombre,$descripcion,$docente);
    header("Location: ".URL_ASIGNATURAS);
    die();
  }

  function EliminarAsignatura($params){
    $this->model->EliminarAsignatura($params[0]);
    header("Location: ".URL_ASIGNATURAS);
    die();
  }

  function EditarAsignatura($params){
    $id_asignatura = $params[0];
    $titulo = "Editor de la Asignatura";
    $docente = $this->modelDocentes->GetDocentes();
    $user=$this->getUser();
    $asignatura = $this->model->GetAsignatura($id_asignatura);
    $this->view->MostrarEditarAsignatura($asignatura,$titulo,$user,$docente);
  }

  function GuardarEditarAsignatura(){
    $nombre = $_POST["nombreForm"];
    $descripcion = $_POST["descripcionForm"];
    $docente = $_POST["docenteForm"];

    $id_asignatura = $_POST["id_asignaturaForm"];
    $this->model->GuardarEditarAsignatura($nombre,$descripcion,$docente,$id_asignatura);
    header("Location: ".URL_ASIGNATURAS);
  }

  function ListarAlumnos($params){
    $id_asignatura = $params[0];
    $titulo = "Alumnos de la asignatura con ID ";
    $user = $this->getUser();
    $alumnos = $this->modelAlumnos->GetAlumnosFiltro($id_asignatura);
    $this->view->MostrarAlumnosAsignatura($alumnos,$titulo,$user,$id_asignatura);
  }



}

 ?>
