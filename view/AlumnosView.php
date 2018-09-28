<?php

/**
 *
 */
class AlumnosView extends View
{
  function Mostrar($Titulo, $Alumnos){
    $this->smarty->assign('Titulo',$Titulo );
    $this->smarty->assign('Alumnos',$Alumnos);
    $this->smarty->display('templates/alumnos.tpl');
  }
}

 ?>
