<?php
require_once 'Api.php';
require_once './../model/AsignaturasModel.php';


class AsignaturasApiController extends Api {
  protected $model;

  function __construct() {
    parent::__construct();
      $this->model = new AsignaturasModel();

    }

    function MostrarAsignaturas(){
      //$asignaturas = $this->model->GetAsignaturas($_GET['orden']);
      $asignaturas = $this->model->GetAsignaturas();
      //usort Ordena un arracy asociativo por el valor de un elemento
      usort($asignaturas, function ($item1, $item2) {
        if ($item1['nombre'] == $item2['nombre']) return 0;
        if($_GET['orden'] == 'desc')
          return $item1['nombre'] < $item2['nombre'] ? -1 : 1;
          return $item1['nombre'] > $item2['nombre'] ? -1 : 1;
      });
      if(isset($asignaturas)) {
       return $this->json_response($asignaturas, 200);
      }else{
        return $this->json_response(null, 400);
      }
    }

}


 ?>
