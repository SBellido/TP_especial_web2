<?php
require_once "./view/AsignaturasView.php";
require_once "./model/AsignaturasModel.php";
require_once "SecuredController.php";

require_once "./model/DocentesModel.php";


class AsignaturasController extends SecuredController{
  private $view;
  private $model;
  private $titulo;
  private $imagen;

  private $modelDocentes;
  private $usuario;

  function __construct(){
    parent:: __construct();
    $this->view = new AsignaturasView($this->baseURL);
    $this->model = new AsignaturasModel();
    $this->modelDocentes = new DocentesModel();
    $this->titulo = "Asignaturas del Instituto";
    $this->imagen = "images/ideas.jpg";
  }

  function MostrarAsignaturas(){
    $asignaturas = $this->model->GetAsignaturas();
    $docente = $this->modelDocentes->GetDocentes();
    // $permiso = $this->verificaPermisos();
    $usuario=$this->getUsuario();
    // $usuarioConnect = $this->modelDocentes->GetDocente($usuario);
    // $id_docente = $this->
    $this->view->MostrarAsignaturas($this->titulo,$this->imagen,$asignaturas,$docente,$usuario);
  }

  function AgregarAsignatura(){
    $permiso=$this->verificaPermisos();
    if ($permiso) {
    $nombre = $_POST["nombreForm"];
    $descripcion = $_POST["descripcionForm"];
    $docente = $_POST["docenteForm"];
    $cupo =$_POST["cupoForm"];
    if(isset($_POST["cupoForm"])){
          $cupo = 1;
        }else{
          $cupo = 0;
        }
    $this->model->AgregarAsignatura($nombre,$descripcion,$docente,$cupo);
    header("Location: ".URL_ASIGNATURAS);
    die();
    }else{
      header("Location: ".URL_LOGIN);
      die();
    }
  }

  function EliminarAsignatura($params){
    $this->model->EliminarAsignatura($params[0]);
    header("Location: ".URL_ASIGNATURAS);
    die();
  }

  function EditarAsignatura($params){
    $id_asignatura = $params[0];
    $titulo = "Editor de la Asignatura";
    $asignatura = $this->model->GetAsignatura($id_asignatura);
    $docente = $this->modelDocentes->GetDocentes();
    $usuario=$this->getUsuario();
    $this->view->MostrarEditarAsignatura($asignatura,$titulo,$usuario,$docente);
  }

  function GuardarEditarAsignatura(){
    $nombre = $_POST["nombreForm"];
    $descripcion = $_POST["descripcionForm"];
    $docente = $_POST["docenteForm"];
    $id_asignatura = $_POST["id_asignaturaForm"];
    $cupo = $_POST["cupoForm"];
    // if (isset($_POST["cupoForm"])) {
    //   $_POST["cupoForm"] = 1;
    // } else {
    //   $_POST["cupoForm"] = 0;
    // }
    // print_r($cupo);
    // die;
    $this->model->GuardarEditarAsignatura($nombre,$descripcion,$docente,$cupo,$id_asignatura);
    header("Location: ".URL_ASIGNATURAS);
  }

  function CerrarCupo($params) {
        $this->model->CerrarCupo($params[0]);
        header("Location: ".URL_ASIGNATURAS);
        die();
      }
  function DetalleAsignatura($params){
    $id_asignatura = $params[0];
    $asignatura = $this->model->GetAsignatura($id_asignatura);
    $usuario = $this->getUsuario();
    $this->view->MostrarDetalleAsignatura($this->titulo,$usuario,$asignatura);
    // buscar en el view donde usabas alumnoss
  }

  function MostrarAsignaturaFiltro() {
    $titulo = "Asignaturas a cargo de un docente";
    $id_docente = $_GET["filtroForm"];
    $docente = $this->modelDocentes->GetDocentes();
    $usuario = $this->getUsuario();
    $asignaturas = $this->model->GetAsignaturasFiltro($id_docente);
    // $this->view->MostrarAsignaturasFiltro($titulo,$usuario,$asignaturas);
    $this->view->MostrarAsignaturas($titulo,$this->imagen,$asignaturas,$docente,$usuario);
  }


}
?>
