<?php

  define('ACTION', 0);
  define('PARAMS', 1);

  include_once './view/View.php';
  include_once './config/ConfigApp.php';
  include_once 'controller/AsignaturasController.php';
  include_once 'controller/AlumnosController.php';
  include_once 'controller/DocentesController.php';
  include_once 'controller/LoginController.php';
  include_once 'controller/SecuredController.php';
  include_once 'controller/RegisterController.php';

  function parseURL($url) {
    $urlExploded = explode('/', $url);
    $arrayReturn[ConfigApp::$ACTION] = $urlExploded[ACTION];
    $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[PARAMS]) ? array_slice($urlExploded,1) : null;
    return $arrayReturn;
  }
  if(isset($_GET['action'])){
    $urlData = parseURL($_GET['action']);
    $action = $urlData[ConfigApp::$ACTION]; //home
    if(array_key_exists($action,ConfigApp::$ACTIONS)){
        $params = $urlData[ConfigApp::$PARAMS];
        $action = explode('#',ConfigApp::$ACTIONS[$action]); //Array[0] -> TareasController [1] -> index
        $controller =  new $action[0]();
        $metodo = $action[1];
        if(isset($params) &&  $params != null){
             $controller->$metodo($params);
        }
        else{
            $controller->$metodo();
       }
    }
  }

?>
