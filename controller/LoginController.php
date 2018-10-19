<?php

require_once  "./view/LoginView.php";
require_once  "./model/DocentesModel.php";
require_once "Controller.php";

class LoginController extends Controller {
  private $view;
  private $model;
  private $titulo;
  private $imagen;

  function __construct() {
    parent::__construct();
    $this->view = new LoginView($this->baseURL);
    $this->model = new DocentesModel();
    $this->titulo = "Ingresá tu usuario y contraseña o como invitado";
    $this->imagen = "images/ideasProntas.jpg";
  }

  function login(){
    $this->view->mostrarLogin($this->titulo,$this->imagen);
  }

  function logout(){
    session_start();
    session_destroy();
    header("Location: ".URL_LOGIN);
  }

  function verificarUsuario() {
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $dbUser = $this->model->GetUser($usuario);

    if(isset($dbUser) && !empty($dbUser) && !empty($usuario||$password)){
      if (password_verify($password, $dbUser[0]["pass"])){
        session_start();
        $_SESSION["User"] = $usuario;//Guardar una variable en la sesión
        header("Location: ".URL_ASIGNATURAS);
        die();
      }
        //CONSULTAR
        //isset($_SESSION["nombre"]);//Consultar si existe la sessión
        //unset($_SESSION["nombre"]);//Borrar un valor en la sesión
    }else{
      $this->view->mostrarLogin("Contraseña o usuario incorrectos");
      die();
    }
  }

   //$2y$10$Ge8XxCSxsIZdAqqZPrIzGOgoN4Hd6nQUNPbzQe7lSecL.TDRws9Ji
//$hash = password_hash($password, PASSWORD_DEFAULT);
//Credenciales invalidas
  function invitado(){
      $usuario = "invitado";
      session_start();
      $_SESSION["User"] = $usuario;
      header("Location: ".URL_ASIGNATURAS);
      die();
  }

  // function InsertUsuario() {
  //   $usuario = $_POST["usuarioForm"];
  //   $password = $_POST["passwordForm"];
  //   $this->model->InsertUsuario($usuario,$password);
  //   header("Location: ".URL_LOGIN);
  //   die();
  // }

}

 ?>
