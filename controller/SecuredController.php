<?php

 require_once 'Controller.php';

  class SecuredController extends Controller {

    function __construct() {
      parent::__construct();
      session_start();
      if(isset($_SESSION['User'])){
        // si el último instante de actividad fue hace más de 4000 minutos
        if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 2000)) {
          $this->logout(); // destruye la sesión, y vuelve al login
        }
        $_SESSION['LAST_ACTIVITY'] = time(); // actualiza el último instante de actividad
      // }else{
      //   header("Location: ".URL_LOGIN);
      //   $this->view->mostrarLogin("Contraseña o usuario incorrecta");
      //   die();
      }
    }

    function logout() {
      session_start();
      session_destroy();
      header("Location: ".URL_LOGIN);
    }

    function getUsuario() {
      if(isset($_SESSION['Usuario'])){
        $usuario = new stdClass();
        $usuario->nombre = $_SESSION['Usuario'];
        $usuario->permisos = $_SESSION['Permisos'];
        return  $usuario;
      }else{
        header("Location: ".URL_LOGIN);
        die();
      }
    }

    function verificaPermisos() {
      if (isset($_SESSION['Usuario']) && $_SESSION['Permisos'] == 'admin') {
        return true;
      }else{
        return false;
      }
    }

  }
