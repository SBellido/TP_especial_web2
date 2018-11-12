<?php

  require_once  "./view/AlumnosView.php";
  require_once  "./model/AlumnosModel.php";
  require_once  "./model/AsignaturasModel.php";
  require_once  "./model/ImagenModel.php";
  require_once "SecuredController.php";

  class AlumnosController extends SecuredController {
    private $view;
    private $model;
    private $titulo;
    private $imagen;
    private $modelAsignatura;
    private $imagenModel;

    function __construct() {
      parent::__construct();
      $this->view = new AlumnosView($this->baseURL);
      $this->model = new AlumnosModel();
      $this->modelAsignatura = new AsignaturasModel();
      $this->imagenModel = new ImagenModel();
      $this->titulo = "Lista de Alumnos";
      $this->imagen = "images/alumno.jpg";
    }

    function MostrarAlumnos() {
      $alumnos = $this->model->GetAlumnos();
      $usuario=$this->getUsuario();
      $asignatura = $this->modelAsignatura->GetAsignaturas();
      $this->view->MostrarAlumnos($this->titulo,$this->imagen,$alumnos,$usuario,$asignatura);
    }

    function AgregarAlumno() {
      if (isset($_SESSION['Permisos']) && $_SESSION['Permisos'] != "invitado") {
        $nombre = $_POST["nombreForm"];
        $email = $_POST["emailForm"];
        $nota = $_POST["notaForm"];
        $id_asignatura = $_POST["id_asignaturaForm"];
        if(isset($_POST["aprobarForm"])){
          $aprobado = 1;
        }else{
          $aprobado = 0;
        }
      }
      $this->model->AgregarAlumno($nombre,$email,$nota,$id_asignatura,$aprobado);
      header("Location: ".URL_ALUMNOS);
      die();
    }

    function EliminarAlumno($params) {
      $permiso=$this->verificaPermisos();
      if ($permiso) {
        $this->model->EliminarAlumno($params[0]);
        header("Location: ".URL_ALUMNOS);
        die();
      }else{
        header("Location: ".URL_LOGIN);
        die();
      }
    }

    function AprobarAlumno($params) {
      $this->model->AprobarAlumno($params[0]);
      header("Location: ".URL_ALUMNOS);
      die();
    }

    function MostrarDetalleAlumno($params) {
      $id_alumno = $params[0];
      $titulo = "Información detallada del alumno";
      $usuario=$this->getUsuario();
      $alumno = $this->model->GetAlumno($id_alumno);
      $this->view->MostrarDetalleAlumno($alumno,$titulo,$usuario);
    }

    function MostrarAlumnosFiltro() {
      $titulo = "Alumnos de una asignatura ";
      $id_asignatura = $_GET["filtroForm"];
      $asignatura = $this->modelAsignatura->GetAsignaturas();
      $usuario = $this->getUsuario();
      $alumnos = $this->model->GetAlumnosFiltro($id_asignatura);
      $this->view->MostrarAlumnosFiltro($alumnos,$titulo,$usuario,$asignatura);
    }

    function EditarAlumno($params) {
      if (isset($_SESSION['Permisos']) && $_SESSION['Permisos'] != "invitado") {
        $id_alumno = $params[0];
        $titulo = "Editor de datos del Alumno";
        $usuario=$this->getUsuario();
        $alumno = $this->model->GetAlumno($id_alumno);
        $this->view->MostrarEditarAlumno($alumno,$titulo,$usuario);
      }
    }
    function GuardarEditarAlumno() {
      $nombre = $_POST["nombreForm"];
      $email = $_POST["emailForm"];
      $nota = $_POST["notaForm"];
      $id_alumno = $_POST["id_alumnoForm"];
      $imagen = $_POST["fotoForm"];
      $imagen = base64_encode($imagen);
      $this->model->GuardarEditarAlumno($nombre,$email,$nota,$id_alumno);
      $this->imagenModel->GuardarImagen($id_alumno,$imagen,$descripcion);
      header("Location: ".URL_ALUMNOS);
    }

    function AlumnosPorAsignaturas() {
      $titulo = "Alumnos ordenados por ID Asignatura";
      $usuario = $this->getUsuario();
      $asignaturas = $this->modelAsignatura->GetAsignaturas_idAsignatura();
      $alumnos = $this->model->GetAlumnos_idAsignatura($asignaturas);
      $this->view->MostrarAlumnosPorAsignatura($alumnos,$titulo,$usuario,$asignaturas);
    }

    function base64_encode_image ($filename=string,$filetype=string) {
      $permiso=$this->verificaPermisos();
      if ($permiso) {
        if ($filename) {
          $imgbinary = fread(fopen($filename, "r"), filesize($filename));
          return 'data:image/' . $filetype . ';base64,' . base64_encode($imgbinary);
          die();
        }
      }else{
        header("Location: ".URL_LOGIN);
        die();
      }
    }
  }

?>
