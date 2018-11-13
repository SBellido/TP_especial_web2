<?php

  // define('URL_HOME', 'http://'.$_SERVER['SERVER_NAME']  .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/home');
  define('URL_LOGIN', 'http://'.$_SERVER['SERVER_NAME']  .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/login');
  define('URL_LOGOUT', 'http://'.$_SERVER['SERVER_NAME']  .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/logout');
  define('URL_LOGINERROR', 'http://'.$_SERVER['SERVER_NAME']  .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/login');
  define('URL_ASIGNATURAS', 'http://'.$_SERVER['SERVER_NAME']  .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/asignaturas');
  define('URL_ALUMNOS', 'http://'.$_SERVER['SERVER_NAME']  .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/alumnos');
  define('URL_DOCENTES', 'http://'.$_SERVER['SERVER_NAME']  .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/docentes');

  class ConfigApp {
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [

      ''=> 'LoginController#login',
      'login'=> 'LoginController#login',
      'logout'=> 'LoginController#logout',
      'home'=> 'LoginController#verificarUsuario',
      'invitado'=> 'LoginController#invitado',

      'asignaturas'=>'AsignaturasController#MostrarAsignaturas',
      'eliminarAsignatura'=>'AsignaturasController#EliminarAsignatura',
      'agregarAsignatura'=>'AsignaturasController#AgregarAsignatura',
      'editarAsignatura'=>'AsignaturasController#EditarAsignatura',
      'guardarEditarAsignatura'=>'AsignaturasController#GuardarEditarAsignatura',

      'docentes'=>'DocentesController#MostrarDocentes',
      'agregarDocente'=>'DocentesController#InsertDocente',
      'eliminarDocente'=>'DocentesController#EliminarDocente',
      'nombrarAdmin'=>'DocentesController#NombrarAdmin',

      'detalleAsignatura'=>'AsignaturasController#DetalleAsignatura',

      'mostrarAlumnosFiltro'=>'AlumnosController#MostrarAlumnosFiltro',
      'alumnos'=>'AlumnosController#MostrarAlumnos',
      'eliminarAlumno'=>'AlumnosController#EliminarAlumno',
      'agregarAlumno'=>'AlumnosController#AgregarAlumno',
      'aprobar'=>'AlumnosController#AprobarAlumno',
      'editarAlumno'=>'AlumnosController#EditarAlumno',
      'guardarEditarAlumno'=>'AlumnosController#GuardarEditarAlumno',
      'mostrarDetalleAlumno'=>'AlumnosController#MostrarDetalleAlumno',
      'alumnosPorAsignaturas'=>'AlumnosController#AlumnosPorAsignaturas',

      'registro'=>'RegisterController#Registro',
  ];
}

?>
