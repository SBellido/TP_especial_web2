<?php require_once "View.php";

  class DocentesView extends View
  {
    function __construct($baseURL){
      parent::__construct($baseURL);
    }

    function MostrarDocentes($titulo,$docentes,$userConnect){
      $this->smarty->assign('Titulo',$titulo );
      $this->smarty->assign('Docentes',$docentes);
      $this->smarty->assign('Usuario',$userConnect);
      $this->smarty->display('templates/docentes.tpl');
    }

    function EliminarDocente($permiso) {
      $this->smarty->assign('Admin',$permiso );
      $this->smarty->display('templates/docentes.tpl');
    }

  }

?>
