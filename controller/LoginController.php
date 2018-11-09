<?php

  require_once  "./view/LoginView.php";
  require_once  "./model/DocentesModel.php";
  require_once "Controller.php";

  class LoginController extends Controller {
    private $view;
    private $model;
    private $titulo;
    private $imagen;
    private $logo;

    function __construct() {
      parent::__construct();
      $this->view = new LoginView($this->baseURL);
      $this->model = new DocentesModel();
      $this->titulo = "Ingresá tu usuario y contraseña o como invitado";
      $this->imagen = "images/ideasProntas.jpg";
      $this->logo = "images/logo_sb.png";
    }

    function login(){
      $this->view->mostrarLogin($this->titulo,$this->imagen,$this->logo);
    }

    function logout(){
      session_start();
      session_destroy();
      header("Location: ".URL_LOGIN);
    }

    function verificarUsuario() {
      $usuario = $_POST["usuario"];
      $password = $_POST["password"];
      $dbUser = $this->model->GetDocente($usuario);

      if(isset($dbUser) && !empty($dbUser)){
        if (password_verify($password, $dbUser[0]["password"])){
          session_start();
          $_SESSION["Nombre"] = $dbUser[0]["nombre"];//Guardar una variable en la sesión
          $_SESSION["Permisos"] = $dbUser[0]["rol"];
          $_SESSION["Id"] = $dbUser[0]["id_docente"];
          $_SESSION["Usuario"] = $dbUser[0]["usuario"];
          header("Location: ".URL_ASIGNATURAS);
          die();
        }
          //CONSULTAR
          //isset($_SESSION["nombre"]);//Consultar si existe la sessión
          //unset($_SESSION["nombre"]);//Borrar un valor en la sesión
      }else{
        $this->view->mostrarLogin("Contraseña o usuario incorrectos", $this->imagen, $this->logo);
        die();
      }
    }

     //$2y$10$Ge8XxCSxsIZdAqqZPrIzGOgoN4Hd6nQUNPbzQe7lSecL.TDRws9Ji
  //$hash = password_hash($password, PASSWORD_DEFAULT);
  //Credenciales invalidas
    function invitado(){
        $usuario = "invitado";
        session_start();
        $_SESSION["Usuario"] = $usuario;
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
