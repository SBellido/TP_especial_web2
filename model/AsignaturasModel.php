<?php
/**
 *
 */
class AsignaturasModel {
  private $db;

  function __construct() {
   $this->db = $this->Connect();
  }

function Connect() {
return new PDO('mysql:host=localhost;'
  .'dbname=cursada;charset=utf8'
  , 'root', '');
}

function GetAsignaturas(){
    $sentencia = $this->db->prepare( "select * from asignatura");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}

function InsertAsignatura($nombre,$descripcion,$docente,$terminada){
  $sentencia = $this->db->prepare("INSERT INTO asignatura(nombre, descripcion, docente, terminada) VALUES(?,?,?,?)");
  $sentencia->execute(array($nombre,$descripcion,$docente,$terminada));
}

function BorrarAsignatura($idAsignatura){
  $sentencia = $this->db->prepare("delete from asignatura where id_asignatura=?");
  $sentencia->execute(array($idAsignatura)); //atento con la A
}
function TerminarAsignatura($idAsignatura){
  $sentencia = $this->db->prepare("update asignatura set terminada=1 where id_asignatura=?");
  $sentencia->execute(array($idAsignatura));
}


}


 ?>
