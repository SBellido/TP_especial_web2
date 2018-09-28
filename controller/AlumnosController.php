<?php
define('alumnos', 'http://'.$_SERVER['SERVER_NAME']  .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/alumnos');
require_once  "./view/AlumnosView.php";
require_once  "./model/AlumnosModel.php";

class AlumnosController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new AlumnosView();
    $this->model = new AlumnosModel();
    $this->Titulo = "Listado de Alumnos";
  }

  function TraerLista(){
      $Alumnos = $this->model->GetAlumnos();
      $this->view->Mostrar($this->Titulo, $Alumnos);
  }

  function InsertAlumno(){
    $nombre = $_POST["nombreForm"];
    $email = $_POST["emailForm"];
    $nota = $_POST["notaForm"];
    if(isset($_POST["aprobadoForm"])){
      $aprobado = 1;
    }else{
      $aprobado = 0;
      }
    $this->model->InsertAlumno($nombre,$email,$nota,$aprobado);
    header("Location: ".alumnos);
  }

  function EliminarAlumno($params){
      $this->model->EliminarAlumno($params[0]);
      header("Location: ".alumnos);
  }
  function AprobarAlumno($params){

    $this->model->AprobarAlumno($params[0]);
    header("Location: ".alumnos);
  }

  // function EditarAlumno($id_alumno){
  // $alumno = $this->model->GetAlumno($id_alumno);
  // $this->view->MostrarAlumno($alumno);
  // }
}

 ?>
