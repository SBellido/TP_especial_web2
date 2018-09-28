<?php
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
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function BorrarAlumno($params){
      $this->model->BorrarAlumno($params[0]);
      header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }
  function AprobarAlumno($params){
    $this->model->AprobarAlumno($params[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function EditarAlumno($id_alumno){
  $alumno = $this->model->GetAlumno($id_alumno);
  $this->view->MostrarAlumno($alumno);
  }
}

 ?>
