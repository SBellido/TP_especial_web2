<?php
class AsignaturasView extends View
{
  function __construct($baseURL, $usuario =''){
    parent::__construct($baseURL);
  }

  function MostrarAsignaturas($titulo,$imagen,$asignaturas,$docente,$usuario) {
    $this->smarty->assign('Titulo',$titulo);
    $this->smarty->assign('Imagen',$imagen);
    $this->smarty->assign('Asignaturas',$asignaturas);
    $this->smarty->assign('Docentes',$docente);
    $this->smarty->assign('Usuario',$usuario);
    // $this->smarty->assign('Permisos',$permiso);
    // $this->smarty->assign('UserConnect',$userConnect );
    $this->smarty->display('templates/asignaturas.tpl');
  }

  function MostrarEditarAsignatura($asignatura,$titulo,$usuario,$docente){
    $this->smarty->assign('Asignatura',$asignatura);
    $this->smarty->assign('Titulo',$titulo);
    $this->smarty->assign('Docentes',$docente);
    $this->smarty->assign('Usuario',$usuario);
    $this->smarty->display('templates/mostrarEditarAsignatura.tpl');
  }

  function MostrarDetalleAsignatura($titulo,$usuario,$asignatura,$imagen) {
    $this->smarty->assign('Titulo',$titulo);
    $this->smarty->assign('Usuario',$usuario);
    $this->smarty->assign('Asignatura',$asignatura);
    $this->smarty->assign('Imagen',$imagen);
    $this->smarty->display('templates/detalleAsignatura.tpl');
  }

  function MostrarAsignaturasFiltro($titulo,$imagen,$asignaturas,$docente,$usuario){
    $this->smarty->assign('Titulo',$titulo);
    $this->smarty->assign('Imagen',$imagen);
    $this->smarty->assign('Asignaturas',$asignaturas);
    $this->smarty->assign('Docentes',$docente);
    $this->smarty->assign('Usuario',$usuario);
    $this->smarty->display('templates/docentesFiltrados.tpl');
  }


}
