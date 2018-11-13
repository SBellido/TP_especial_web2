<?php require_once "View.php";

  class DocentesView extends View
  {
    function __construct($baseURL) {
      parent::__construct($baseURL);
    }

    function MostrarDocentes($titulo,$docentes,$usuario) {
      $this->smarty->assign('Titulo',$titulo );
      $this->smarty->assign('Docentes',$docentes);
      $this->smarty->assign('Usuario',$usuario);
      $this->smarty->display('templates/docentes.tpl');
    }

  
  }

?>
