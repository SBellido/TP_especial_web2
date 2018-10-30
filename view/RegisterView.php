<?php
class RegisterView extends View
{


  function __construct($baseURL) {
    parent::__construct($baseURL);
  }

  function mostrarRegistro($titulo, $imagen = '') {
    $this->smarty->assign('Titulo',$titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->smarty->assign('Imagen',$imagen); // El 'Titulo' del assign puede ser cualquier valor
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
