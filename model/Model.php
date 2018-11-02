<?php
  class Model {
    protected $db;
    function __construct() {
      $this->db = $this->Connect();
    }

    function Connect() {
      return new PDO('mysql:host=localhost;'
      .'dbname=db_instituto;charset=utf8'
      , 'root', '');
    }

    function crearBBDD($db_name,$script){
      try{
        $connection = new PDO('mysql:host='.'localhost', 'root','');
        $connection->exec('CREATE DATABASE IF NOT EXISTS '.$db_name);
        $connection = new PDO('mysql:host='.'localhost'
        .'; dbname='.$db_name. ';charset=utf8', 'root','');
        $queries=file_get_contents($script);
        $connection->exec($queries);
      }catch(Exception $e){
        echo $e;
      }
    }
  }
 ?>
