<?php

  require_once  "./view/AdminView.php";
  require_once  "./model/AdminModel.php";
  require_once  "./model/AdminModel.php";
  require_once "SecuredController.php";

  class AdminController extends SecuredController {
    private $view;
    private $model;
    private $titulo;

    function __construct() {
      parent::__construct();
      $this->view = new AdminView($this->baseURL);
      $this->model = new AdminModel();
      $this->titulo = "Lista de Administradores";

    }
  }

?>
