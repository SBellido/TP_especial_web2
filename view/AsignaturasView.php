<?php

/**
 *
 */
class AsignaturasView extends View
{
  function Mostrar($Titulo, $Asignaturas){
    $this->smarty->assign('Titulo',$Titulo );
    $this->smarty->assign('Asignaturas',$Asignaturas);
    $this->smarty->display('templates/home.tpl');

  }
}

 ?>
