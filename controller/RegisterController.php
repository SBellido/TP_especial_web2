<?php

require_once  "./view/RegisterView.php";
require_once  "./model/DocentesModel.php";
require_once  "SecuredController.php";


class RegisterController extends SecuredController
{
  private $view;
  private $model;
  private $titulo;
  private $imagen;
  private $logo;

  function __construct() {
    parent::__construct();
    $this->view = new RegisterView($this->baseURL);
    $this->model = new DocentesModel();
    $this->titulo = "Registro de usuarios";
    $this->imagen = "images/ideas.jpg";
    $this->logo = "images/logo_sb.png";
  }

  function Registro() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET' ) {
      //GET formulario de registro
      $this->view->mostrarRegistro($this->titulo, $this->imagen, $this->logo);
    } else {
      //POST formulario. datos: nombre, user, email, password
      $nombre = $_POST["nombre"];
      $usuario = $_POST["usuario"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $repassword = $_POST["password_confirmation"];
      $rol = 'docente';
      if ($password == $repassword) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $this->model->InsertarDocente($nombre, $usuario, $email, $password, $rol);
        session_start();
        $_SESSION["Usuario"] = $usuario;
        $_SESSION["Permisos"] = $usuario[0]["rol"];
        header("Location: ".URL_ASIGNATURAS);
      } else {
        $this->view->mostrarRegistro("Passwor incorrecto");
      }
    }
  }

  function ActualizarPerfil($id_docente) {
    if ($_SERVER['REQUEST_METHOD'] == 'GET' ) {
      //GET formulario de registro
      $usuario = $this->getUsuario();
      $docente = $this->model->GetDocenteId($id_docente);
      $id_docente = $docente[0]["id_docente"];
      $nombre = $docente[0]["nombre"];
      $user = $docente[0]["usuario"];
      $email = $docente[0]["email"];
      $this->view->mostrarEditarPerfil($this->titulo, $this->imagen, $this->logo, $usuario, $docente, $id_docente, $nombre, $user, $email);
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
      $nombre = $_POST["nombre"];
      $usuario = $_POST["usuario"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $id_docente = $id_docente[0];
      $repassword = $_POST["password_confirmation"];
      if ($password == $repassword) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $respuesta = $this->model->ActualizarPerfil($nombre, $usuario, $email, $password, $id_docente);
    // $this->model->ActualizarPerfil($nombre, $usuario, $email, $password, $id_docente);
      } else {
        $this->view->mostrarEditarPerfil($this->titulo, $this->imagen, $this->logo, $usuario, $docente, $id_docente, $nombre, $user, $email);
      }
    }
  }
}
