<?php

  require('libs/Smarty.class.php');

  class View {
    protected $smarty;

    function __construct($baseURL, $user = ''){
      $this->smarty = new Smarty();
      $this->smarty->assign('baseURL',$baseURL);
      $this->smarty->assign('Docentes',$user);
    }

  }

?>
