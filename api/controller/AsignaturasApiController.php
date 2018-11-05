<?php
require_once 'Api.php';
require_once '../../model/AsignaturasModel.php';


class AsignaturasApiController extends Api {
  protected $model;

  function __construct() {
    parent::__construct();
      $this->model = new AsignaturasModel();

    }

    function MostrarAsignaturas(){
      $asignaturas = $this->model->GetAsignaturas();
      if(isset($data)) {
        return $this->json_response($data, 200);
      // }else{
      //   return $this->json_response(null, 400);
      }
    }

}


 ?>
