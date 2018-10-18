<?php
require_once  "./view/AlumnosView.php";
require_once  "./model/AlumnosModel.php";
require_once  "./model/AsignaturasModel.php";

require_once "SecuredController.php";

class AlumnosController extends SecuredController
{
  private $view;
  private $model;
  private $titulo;
  private $modelAsignatura;

  function __construct()
  {
    parent::__construct();
    $this->view = new AlumnosView($this->baseURL);
    $this->model = new AlumnosModel();
    $this->modelAsignatura = new AsignaturasModel();
    $this->titulo = "Lista de Alumnos";
  }

  function MostrarAlumnos(){
    $alumnos = $this->model->GetAlumnos();
    $user=$this->getUser();
    $asignatura = $this->modelAsignatura->GetAsignaturas();
    $this->view->MostrarAlumnos($this->titulo,$alumnos,$user,$asignatura);
  }

  function AgregarAlumno(){
    $nombre = $_POST["nombreForm"];
    $email = $_POST["emailForm"];
    $nota = $_POST["notaForm"];
    $id_asignatura = $_POST["id_asignaturaForm"];
    if(isset($_POST["aprobadoForm"])){
      $aprobado = 1;
    }else{
      $aprobado = 0;
      }
    $this->model->AgregarAlumno($nombre,$email,$nota,$id_asignatura,$aprobado);
    header("Location: ".URL_ALUMNOS);
    die();
  }

  function EliminarAlumno($params){
    $this->model->EliminarAlumno($params[0]);
    header("Location: ".URL_ALUMNOS);
    die();
  }

  function AprobarAlumno($params){
    $this->model->AprobarAlumno($params[0]);
    header("Location: ".URL_ALUMNOS);
    die();
  }

  function MostrarDetalleAlumno($params){
    $id_alumno = $params[0];
    $titulo = "Información detallada del alumno";
    $user=$this->getUser();
    $alumno = $this->model->GetAlumno($id_alumno);
    $this->view->MostrarDetalleAlumno($alumno,$titulo,$user);
  }

  function MostrarAlumnosFiltro(){
    $titulo = "Alumnos de la asignatura ";
    $id_asignatura = $_POST["filtroForm"];
    $asignatura = $this->modelAsignatura->GetAsignaturas($id_asignatura);
    $user = $this->getUser();
    $alumnos = $this->model->GetAlumnosFiltro($id_asignatura);
    $this->view->MostrarAlumnosFiltro($alumnos,$titulo,$user,$asignatura);
  }

  function EditarAlumno($params){
    $id_alumno = $params[0];
    $titulo = "Editor de datos del Alumno";
    $user=$this->getUser();
    $alumno = $this->model->GetAlumno($id_alumno);
    $this->view->MostrarEditarAlumno($alumno,$titulo,$user);
  }

  function GuardarEditarAlumno(){
    $nombre = $_POST["nombreForm"];
    $email = $_POST["emailForm"];
    $nota = $_POST["notaForm"];
    $id_alumno = $_POST["id_alumnoForm"];
    $this->model->GuardarEditarAlumno($nombre,$email,$nota,$id_alumno);
    header("Location: ".URL_ALUMNOS);
  }

  function AlumnosPorAsignaturas(){
    $titulo = "Alumnos ordenados por ID Asignatura";
    $user = $this->getUser();
    $asignaturas = $this->modelAsignatura->GetAsignaturas_idAsignatura();
    $alumnos = $this->model->GetAlumnos_idAsignatura($asignaturas);
    $this->view->MostrarAlumnosPorAsignatura($alumnos,$titulo,$user,$asignaturas);
  }
}

 ?>
