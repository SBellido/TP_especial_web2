<?php

  require('libs/Smarty.class.php');

  class View {
    protected $smarty;

    function __construct($baseURL, $usuario = ''){
      $this->smarty = new Smarty();
      $this->smarty->assign('baseURL',$baseURL);
      // $this->smarty->assign('Admin', $admin);
      // $this->smarty->assign('Docentes',$user);
    }

  }

?>
