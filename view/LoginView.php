<?php

class LoginView extends View
{
  function __construct($baseURL) {
    parent::__construct($baseURL, $usuario = '');
  }

  function mostrarLogin($titulo, $imagen, $logo = '') {
    $this->smarty->assign('Titulo',$titulo);
    $this->smarty->assign('Imagen',$imagen);
    $this->smarty->assign('Logo',$logo);
    $this->smarty->display('templates/login.tpl');
  }

  // function mostrarLoginError($TextError) {
  //   $this->smarty->assign('ErrorUsuario',$TextError);
  //   $this->smarty->display('templates/loginError.tpl');
  // }
}

 ?>
