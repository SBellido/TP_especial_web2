<?php

class AlumnosView extends View
{
  function __construct($baseURL){
    parent::__construct($baseURL);
  }
  function MostrarAlumnos($titulo,$imagen,$alumnos,$user,$asignatura){
    $this->smarty->assign('Asignatura',$asignatura);
    $this->smarty->assign('Titulo',$titulo);
    $this->smarty->assign('Imagen',$imagen);
    $this->smarty->assign('Usuario',$user);
    $this->smarty->assign('Alumnos',$alumnos);
    $this->smarty->display('templates/alumnos.tpl');
  }

  function MostrarEditarAlumno($alumno,$titulo,$user){
    $this->smarty->assign('Alumno',$alumno);
    $this->smarty->assign('Titulo',$titulo);
    $this->smarty->assign('Usuario',$user);
    $this->smarty->display('templates/mostrarEditarAlumno.tpl');
  }

  function MostrarAlumnosFiltro($alumnos,$titulo,$user,$asignatura){
    $this->smarty->assign('Alumnos',$alumnos);
    $this->smarty->assign('Asignatura',$asignatura);
    $this->smarty->assign('Titulo',$titulo);
    $this->smarty->assign('Usuario',$user);
    //$this->smarty->assign('filtro',$filtrado);
    $this->smarty->display('templates/alumnosFiltrados.tpl');
  }

  function MostrarDetalleAlumno($alumno,$titulo,$user){
    $this->smarty->assign('Alumno',$alumno);
    $this->smarty->assign('Titulo',$titulo);
    $this->smarty->assign('Usuario',$user);
    $this->smarty->display('templates/alumnoDetalle.tpl');
  }

  function MostrarAlumnosPorAsignatura($alumnos,$titulo,$user,$asignaturas){
    $this->smarty->assign('Titulo',$titulo);
    $this->smarty->assign('Usuario',$user);
    $this->smarty->assign('Alumnos',$alumnos);
    $this->smarty->assign('Asignaturas',$asignaturas);
    $this->smarty->display('templates/AlumnosPorAsignaturas.tpl');


  }

}

 ?>
