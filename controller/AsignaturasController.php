<?php
require_once  "./view/AsignaturasView.php";
require_once  "./model/AsignaturasModel.php";

class AsignaturasController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new AsignaturasView();
    $this->model = new AsignaturasModel();
    $this->Titulo = "Detalles de la asignatura";
  }

  function Home(){
    $Asignaturas = $this->model->GetAsignaturas();
    $this->view->Mostrar($this->Titulo, $Asignaturas);
  }

  function InsertAsignatura(){
    $nombre = $_POST["nombreForm"];
    $descripcion = $_POST["descripcionForm"];
    $docente = $_POST["docenteForm"];
    if(isset($_POST["terminadaForm"])){
      $terminada = 1;
    }else{
      $terminada = 0;
    }
    $this->model->InsertAsignatura($nombre,$descripcion,$docente,$terminada);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function BorrarAsignatura($params){
    $this->model->BorrarAsignatura($params[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }
  function TerminarAsignatura($params){
    $this->model->TerminarAsignatura($params[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function EditarAsignatura($id_asignatura){
    $asignatura = $this->model->GetAsignatura($id_asignatura);
    $this->view->MostrarAsignatura($asignatura);
  }
}

 ?>
