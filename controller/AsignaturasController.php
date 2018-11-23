<?php
  require_once "./view/AsignaturasView.php";
  require_once "./model/AsignaturasModel.php";
  require_once "./model/ImagenModel.php";
  require_once "SecuredController.php";
  require_once "./model/DocentesModel.php";

  class AsignaturasController extends SecuredController {
    private $view;
    private $model;
    private $titulo;
    private $imagen;
    private $modelDocentes;
    private $modelImagen;

    function __construct() {
      parent:: __construct();
      $this->view = new AsignaturasView($this->baseURL);
      $this->model = new AsignaturasModel();
      $this->modelDocentes = new DocentesModel();
      $this->modelImagen = new ImagenModel();
      $this->titulo = "Asignaturas del Instituto";
      $this->imagen = "images/ideas.jpg";
    }

    function MostrarAsignaturas() {
      $asignaturas = $this->model->GetAsignaturas();
      $docente = $this->modelDocentes->GetDocentes();
      $usuario=$this->getUsuario();
      $this->view->MostrarAsignaturas($this->titulo,$this->imagen,$asignaturas,$docente,$usuario);
    }

    function AgregarAsignatura() {
      $permiso=$this->verificaPermisos();
      if ($permiso) {
      $nombre = $_POST['nombreForm'];
      $descripcion = $_POST['descripcionForm'];
      $docente = $_POST['docenteForm'];
      $cupo = 0;
      if(isset($_POST['cupoForm'])) {
        $cupo = 1;
      }
      $imgDescripcion = $_POST["descImgForm"];
      $rutaTempImagenes = $_FILES['imgForm']['tmp_name'];
      $ultimoId = $this->model->AgregarAsignatura($nombre,$descripcion,$docente,$cupo);
      $this->modelImagen->GuardarImagen($ultimoId[0]['id_asignatura'],$rutaTempImagenes[0],$imgDescripcion);
      header("Location: ".URL_DETALLEASIG."/". $ultimoId[0]['id_asignatura']);
      die();
      } else {
        header("Location: ".URL_LOGIN);
        die();
      }
    }

    function EliminarAsignatura($params) {
      $permiso=$this->verificaPermisos();
      if ($permiso) {
        $this->modelImagen->BorrarImagenes($params[0]);
        $this->model->EliminarAsignatura($params[0]);
        header("Location: ".URL_ASIGNATURAS);
        die();
      } else {
        header("Location: ".URL_LOGIN);
        die();
      }
    }

    function EditarAsignatura($params) {
      if ($_SERVER['REQUEST_METHOD'] === 'GET' ) {
        $id_asignatura = $params[0];
        $titulo = "Editor de la Asignatura";
        $asignatura = $this->model->GetAsignatura($id_asignatura);
        $docente = $this->modelDocentes->GetDocentes();
        $usuario=$this->getUsuario();
        $this->view->MostrarEditarAsignatura($asignatura,$titulo,$usuario,$docente);
      }
      if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
        $nombre = $_POST["nombreForm"];
        $descripcion = $_POST["descripcionForm"];
        $docente = $_POST["docenteForm"];
        $id_asignatura = $_POST["id_asignaturaForm"];
        $cupo = $_POST["cupoForm"];
        $this->model->GuardarEditarAsignatura($nombre,$descripcion,$docente,$cupo,$id_asignatura);
        $imgDescripcion = $_POST["descImgForm"];
        $rutaTempImagenes = $_FILES['imgForm']['tmp_name'];
        if (isset($rutaTempImagenes) && ($rutaTempImagenes != '')) {
          $this->modelImagen->GuardarImagen($id_asignatura,$rutaTempImagenes,$imgDescripcion);
        }
        header("Location: ".URL_DETALLEASIG."/".$id_asignatura);
      }
    }

    function CerrarCupo($params) {
      $permiso=$this->verificaPermisos();
      if ($permiso) {
        $this->model->CerrarCupo($params[0]);
        header("Location: ".URL_ASIGNATURAS);
        die();
      } else {
        header("Location: ".URL_LOGIN);
        die();
      }
    }

    function DetalleAsignatura($params) {
      $id_asignatura = $params[0];
      $asignatura = $this->model->GetAsignatura($id_asignatura);
      $docente = $this->model->GetNombreDocente($id_asignatura);
      $usuario = $this->getUsuario();
      $imagen = $this->modelImagen->GetImagen($id_asignatura);
      $this->view->MostrarDetalleAsignatura($this->titulo,$usuario,$asignatura,$imagen,$docente);
    }

    function MostrarAsignaturaFiltro() {
      $titulo = "Asignaturas de un docente";
      $id_docente = $_GET["filtroForm"];
      $docente = $this->modelDocentes->GetDocentes();
      $usuario = $this->getUsuario();
      $asignaturas = $this->model->GetAsignaturasFiltro($id_docente);
      $this->view->MostrarAsignaturas($titulo,$this->imagen,$asignaturas,$docente,$usuario);
    }

    function BorrarImagen($id_imagen) {
      $permiso=$this->verificaPermisos();
      if ($permiso) {
        $id_asignatura = $this->modelImagen->GetImagenIdAsig($id_imagen);
        $id_asignatura = $id_asignatura['id_asignatura'];
        $asignatura = $this->model->GetAsignatura($id_asignatura);
        $usuario = $this->getUsuario();
        $this->modelImagen->BorrarImagen($id_imagen[0]);
        header("Location: ".URL_DETALLEASIG."/".$id_asignatura);
      } else {
        header("Location: ".URL_LOGIN);
        die();
      }
    }
  }
?>
