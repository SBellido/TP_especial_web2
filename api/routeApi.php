<?php
define('RESOURCE', 0);
define('PARAMS', 1);

  require_once 'config/ConfigApi.php';
  require_once 'controller/AsignaturasApiController.php';

  function parseURL($url)
  {
    $urlExploded = explode('/', trim($url,'/'));
    $arrayReturn[ConfigApi::$RESOURCE] = $urlExploded[RESOURCE].'#'.$_SERVER['REQUEST_METHOD'];
    $arrayReturn[ConfigApi::$PARAMS] = isset($urlExploded[PARAMS]) ? array_slice($urlExploded,1) : null;
    return $arrayReturn;
  }

  if(isset($_GET['resource'])){
    $urlData = parseURL($_GET['resource']);
    $resource = $urlData[ConfigApi::$RESOURCE]; //home
    if(array_key_exists($resource,ConfigApi::$RESOURCES)){
        $params = $urlData[ConfigApi::$PARAMS];
        $resource = explode('#',ConfigApi::$RESOURCES[$resource]); //Array[0] -> TareasController [1] -> index
        $controller =  new $resource[0]();
        $metodo = $resource[1];
        if(isset($params) &&  $params != null){
             $controller->$metodo($params);
        }
        else{
            $controller->$metodo();
       }
    }
  }

?>
