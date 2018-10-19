<?php
class AsignaturasView extends View
{
  function __construct($baseURL){
    parent::__construct($baseURL);
  }
  function Mostrar($titulo,$imagen,$asignaturas,$user) {
    $this->smarty->assign('Titulo',$titulo);
    $this->smarty->assign('Imagen',$imagen);

    $this->smarty->assign('Asignaturas',$asignaturas);
    $this->smarty->assign('Usuario',$user);
    $this->smarty->display('templates/asignaturas.tpl');
  }

  function MostrarEditarAsignatura($asignatura,$titulo,$user){
    $this->smarty->assign('Asignatura',$asignatura);
    $this->smarty->assign('Titulo',$titulo);
    $this->smarty->assign('Usuario',$user);
    $this->smarty->display('templates/mostrarEditarAsignatura.tpl');
  }

  function MostrarAlumnosAsignatura($alumnos,$titulo,$user,$id_asignatura){
      $this->smarty->assign('Titulo',$titulo);
      $this->smarty->assign('Usuario',$user);
      $this->smarty->assign('Alumnos',$alumnos);
      $this->smarty->assign('ID_Asignatura',$id_asignatura);
      $this->smarty->display('templates/listaAlumnos.tpl');
  }


}

 ?>
