<?php

  require_once  "Model.php";

  class DocentesModel extends Model {
      function __construct() {
        parent::__construct();
      }

    function GetDocentes() {
      $sentencia = $this->db->prepare( "SELECT * FROM docente");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function GetDocenteId($id_docente) {
      $sentencia = $this->db->prepare("SELECT * FROM docente WHERE id_docente=?");
      $sentencia->execute($id_docente);
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function GetDocente($usuario) {
      $sentencia = $this->db->prepare("SELECT * FROM docente WHERE usuario=?");
      $sentencia->execute([$usuario]);
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function GetRol($id_docente) {
      $sentencia = $this->db->prepare( "SELECT rol FROM docente WHERE id_docente=?");
      $sentencia->execute([$id_docente]);
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function InsertarDocente($nombre, $usuario, $email, $password, $rol) {
      $sentencia = $this->db->prepare("INSERT INTO docente (nombre, usuario, email, password, rol)
                                        VALUES (?,?,?,?,?)");
      $sentencia->execute([$nombre, $usuario, $email, $password, $rol]);
    }

    function EliminarDocente($id_docente) {
      try{
//REVISAR
        $sentencia = $this->db->prepare("DELETE FROM docente WHERE id_docente=?");
        $sentencia->execute([$id_docente]);

      } catch (PDOException $e) {
        echo "Error: " . $e->getMessage() . "<br />\n";
      }
    }

    function CambiarRol($rol,$id_docente) {
      $sentencia = $this->db->prepare("UPDATE docente
                                       SET rol=? WHERE id_docente=?");
      $sentencia->execute([$rol,$id_docente]);
    }

    function ActualizarPerfil($nombre, $usuario, $email, $password, $id_docente) {
      $sentencia = $this->db->prepare("UPDATE docente
                                       SET nombre=?,usuario=?,email=?,password=?
                                       WHERE id_docente=?");
      $sentencia->execute([$nombre, $usuario, $email, $password, $id_docente]);
      return $id_docente;
    }

    // function GetNombreDocente($id_asignatura) {
    //   $sentencia = $this->db->prepare("SELECT nombre FROM docente d
    //                                    INNER JOIN asignatura a
    //                                    ON(d.id_asignatura=a.id_asignatura)
    //                                    WHERE d.id_asignatura = ?");
    //   $sentencia->execute([$id_asignatura]);
    //   return $id_asignatura;
    // }

   // function GetNombreDocente($id_asignatura) {
   //   $sentencia = $this->db->prepare("SELECT nombre
   //                                    FROM docente d INNER JOIN asignatura a
   //                                    ON(d.id_asignatura = a.id_asignatura)
   //                                    WHERE d.id_asignatura=?");
   //   $sentencia->execute([$id_asignatura]);
   //   return $sentencia->fetchAll(PDO::FETCH_ASSOC);
   // }
}
