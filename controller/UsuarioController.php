<?php
require_once  "./view/LoginView.php";
require_once  "./model/DocentesModel.php";
require_once "Controller.php";
// require_once  "./view/UsuarioView.php";
// require_once  "./model/UsuarioModel.php";
// require_once "SecuredController.php";

//   function __construct() {
//     parent::__construct();
//     $this->view = new LoginView($this->baseURL);
//     $this->model = new DocentesModel();
//     $this->titulo = "Ingresá tu usuario y contraseña o como invitado";
//     $this->imagen = "images/ideasProntas.jpg";
//   }

class UsuarioController extends controller
{
  private $view;
  private $model;
  private $Titulo;
  private $imagen;

  function __construct()
  {
    parent::__construct();
    $this->view = new UsuarioView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Registro";
  }

  function MostrarUsuario(){
      $Usuarios = $this->model->GetUsuario();
      $this->view->Mostrar($this->Titulo, $Usuarios);
  }

  function AgregarUsuario(){
    // chequear si el usuario ya existe
    if ((isset($_POST["email"]))&&($_POST["pass"] == $_POST["passcheq"])&&($_POST["pass"]!="")) {
      $email = $_POST["email"];
      $pass = $_POST["pass"];
      $hash = password_hash("$pass", PASSWORD_DEFAULT);
      $this->model->InsertarUsuario($email,$hash);
      header(LOGEARSE);
    } else {
      header(REGISTRARSE);
      die();
    }
  }


}

 ?>
