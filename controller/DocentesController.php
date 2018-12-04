<?php

require_once "./view/DocentesView.php";
require_once "./model/DocentesModel.php";
require_once "SecuredController.php";


class DocentesController extends SecuredController {
  private $view;
  private $model;
  private $titulo;

  function __construct() {
    parent::__construct();
    $this->view = new DocentesView($this->baseURL);
    $this->model = new DocentesModel();
    $this->titulo = "Listado de Docentes";
    $this->usuario = $this->getUsuario();
  }

  function MostrarDocentes() {
    $docentes = $this->model->GetDocentes();
    $this->view->MostrarDocentes($this->titulo,$docentes,$this->usuario);
  }

  // function GetAdmin() {
  //   $rol = 'admin';
  //   $admin = $this->model->GetAdmin($rol);
  //   if (count($admin) > 1) {
  //     return true;
  //   }
  // }

  function EliminarDocente($params) {
    $permiso = $this->verificaPermisos();
    if ($permiso) {
      // try {
        $this->model->EliminarDocente($params[0]);
        header("Location: ".URL_DOCENTES);
      // } catch (Exception $e) {
      //   echo 'Excepción capturada: ',  $e->getMessage();
      // } finally {
      //   echo $e . "<h3>El docnete tiene una asignatura a su cargo y no puede ser eliminado, borre primero la asignatura.</h3>";
      //   // header("Location: ".URL_DOCENTES);
      // }

    }else{
      header("Location: ".URL_LOGIN);
      die();
    }
  }

  function CambiarRol($params) {
    $permiso = $this->verificaPermisos();
    // $admin = $this->GetAdmin();
    if ($permiso) {
      $id_docente = $params[0];
      $rolActual = $this->model->GetRol($id_docente);
      if($params[0] == $_SESSION['Id']) {
          header("Location: ".URL_DOCENTES);
          die();
        }
      if($rolActual[0]['rol'] == "admin") {
         $rol = "docente";
       }elseif ($rolActual[0]['rol'] == "docente") {
         $rol = "admin";
       }
      $this->model->CambiarRol($rol,$id_docente);
      header("Location: ".URL_DOCENTES);
    }else{
      header("Location: ".URL_LOGIN);
      die();
    }
  }

  function EditarDocente($id_docente) {
    $docente = $this->model->GetDocente($id_docente);
    $this->view->MostrarDocente($docente);
  }

}
