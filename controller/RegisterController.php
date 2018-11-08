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
    // $this->secCont = new SecuredController();
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
        $_SESSION["User"] = $usuario;
        $_SESSION["Permisos"] = $usuario[0]["rol"];
        header("Location: ".URL_ASIGNATURAS);
      } else {
        $this->view->mostrarRegistro("Passwor incorrecto");
      }
    }
  }
  // function EditarDatos() {
  //   if ($this->secCont->logeado()) {
  //     // $id_usuario = $param[0];
  //     // $usuario = $this->model->GetUsuario($usuario);
  //     $this->view->modificarDatos();
  //   }
  // }

  // function EditarUsuario($usuario) { //EditarUsuario($param)
  //   if ($this->secCont->logeado()) {
  //     $usuario = $this->model->GetUsuario($usuario);
  //     $this->view->modificarDatos('Modifique sus datos');
  //   }
  // }
  // function modificarDatos($usuario) {
  //   if ($this->secCont->logeado()) {
  //     if (isset($usuario) && $usuario == true) {
  //       // $this->view->modificarDatos('Modifique sus datos');
  //       // $this->model->GetUsuario($usuario)
  //       if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
  //         $id_usuario = $_POST["id_usuario"];
  //         $nombre = $_POST["nombre"];
  //         $usuario = $_POST["usuario"];
  //         $email = $_POST["email"];
  //         $this->model->modificaUsuario($id_usuario, $nombre, $usuario, $email);
  //         $this->view->modificarDatos('Usuario modificado con exito');
  //       } else {
  //         header(LOGIN);
  //         // $this->view->modificarDatos('El ususario no fue modificado');
  //       }
  //     }
  //   } else {
  //     $this->view->modificarDatos('');
  //   }
  // }
}

 ?>
