<?php

class LoginView extends View
{
  function __construct($baseURL) {
    parent::__construct($baseURL);
  }

  function mostrarLogin($TextUser,$TextInvited = '') {
    $this->smarty->assign('UserText',$TextUser);
    $this->smarty->assign('InvitedText',$TextInvited);
    $this->smarty->display('templates/login.tpl');
  }

  function mostrarLoginError($TextError,$TextInvited) {
    $this->smarty->assign('ErrorUsuario',$TextError);
    $this->smarty->assign('InvitedText',$TextInvited);
    $this->smarty->display('templates/loginError.tpl');
  }
}

 ?>
