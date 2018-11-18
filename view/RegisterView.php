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
  function mostrarEditarPerfil($titulo, $imagen, $logo, $usuario, $docente, $id_docente, $nombre, $user, $email) {
    $this->smarty->assign('Titulo',$titulo);
    $this->smarty->assign('Imagen',$imagen);
    $this->smarty->assign('Logo',$logo);
    $this->smarty->assign('Usuario',$usuario);

    $this->smarty->assign('Docente',$docente);
    $this->smarty->assign('id_docente',$id_docente);
    $this->smarty->assign('Nombre',$nombre);
    $this->smarty->assign('User',$user);
    $this->smarty->assign('Email',$email);
    $this->smarty->display('templates/editarDocente.tpl');
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
