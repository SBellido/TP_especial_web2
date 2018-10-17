<?php

class HomeView extends View
{
  function __construct($baseURL){
    parent::__construct($baseURL);
  }
  function MostrarHome($message){
    $this->smarty->assign('Message',$message );
    $this->smarty->display('templates/home.tpl');
  }
}

 ?>
