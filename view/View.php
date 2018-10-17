<?php
require('libs/Smarty.class.php');

class View {
  protected $smarty;

  function __construct($baseURL){
    $this->smarty = new Smarty();
    $this->smarty->assign('baseURL',$baseURL);
  }
}



 ?>
