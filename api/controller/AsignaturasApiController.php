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
      $asignatura = $this->model->GetAsignaturas();
      if(isset($asignatura)) {
       return $this->json_response($asignatura, 200);
      }else{
        return $this->json_response(null, 400);
      }
    }

}


 ?>
