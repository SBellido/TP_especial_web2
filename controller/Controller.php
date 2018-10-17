<?php

class Controller{
protected $baseURL;

  function __construct(){
    $this->baseURL = 'http://'.$_SERVER['SERVER_NAME'].':'.
    $_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/';
  }
}
 ?>
