<?php
class AsignaturasView extends View
{
  function __construct($baseURL, $user =''){
    parent::__construct($baseURL);
  }
  function MostrarAsignaturas($titulo,$imagen,$asignaturas,$docente,$user) {
    $this->smarty->assign('Titulo',$titulo);
    $this->smarty->assign('Imagen',$imagen);
    $this->smarty->assign('Asignaturas',$asignaturas);
    $this->smarty->assign('Docente',$docente);
    $this->smarty->assign('Usuario',$user);
    $this->smarty->display('templates/asignaturas.tpl');
  }

  function MostrarEditarAsignatura($asignatura,$titulo,$user){
    $this->smarty->assign('Asignatura',$asignatura);
    $this->smarty->assign('Titulo',$titulo);
    $this->smarty->assign('Docente',$user);
    $this->smarty->display('templates/mostrarEditarAsignatura.tpl');
  }

  function MostrarAlumnosAsignatura($alumnos,$titulo,$user,$id_asignatura){
      $this->smarty->assign('Titulo',$titulo);
      $this->smarty->assign('Docente',$user);
      $this->smarty->assign('Alumnos',$alumnos);
      $this->smarty->assign('ID_Asignatura',$id_asignatura);
      $this->smarty->display('templates/listaAlumnos.tpl');
  }


}

 ?>
