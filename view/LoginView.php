<?php

class LoginView extends View
{
  function __construct($baseURL) {
    parent::__construct($baseURL);
  }

  function mostrarLogin($titulo, $imagen = '') {
    $this->smarty->assign('Titulo',$titulo);
    $this->smarty->assign('Imagen',$imagen);
    $this->smarty->display('templates/login.tpl');
  }

  // function mostrarLoginError($TextError) {
  //   $this->smarty->assign('ErrorUsuario',$TextError);
  //   $this->smarty->display('templates/loginError.tpl');
  // }
}

 ?>
