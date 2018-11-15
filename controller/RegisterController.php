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

}
