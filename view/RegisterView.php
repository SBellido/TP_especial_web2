<?php
class RegisterView extends View
{


  function __construct($baseURL, $user ='') {
    parent::__construct($baseURL);
  }

  function mostrarRegistro($titulo, $imagen, $logo = '') {
    $this->smarty->assign('Titulo',$titulo);
    $this->smarty->assign('Imagen',$imagen);
    $this->smarty->assign('Logo',$logo);
    $this->smarty->display('templates/registro.tpl');
  }

  // function modificarDatos($message = '', $usuario = '') {
  //   $this->Smarty->assign('Titulo',"Modificación Datos de Usuarios");
  //   $this->Smarty->assign('Message',$message);
  //   // $this->Smarty->assign('nombre'($usuario['nombre']));
  //   // $this->Smarty->assign('usuario'($usuario['usuario']));
  //   // $this->Smarty->assign('e-mail'($usuario['e-mail']));
  //   $this->Smarty->display('templates/modificarUsuario.tpl');
  // }

  // function usuarioModificado($message='') {
  //   $this->Smarty->assign('Titulo',"Modificación Datos de Usuarios");
  //   $this->Smarty->assign('Message',$message);
  //   $this->Smarty->display('templates/modificarUsuario.tpl');
  // }
}

 ?>
