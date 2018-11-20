<?php

define('URL_DETALLEASIG', 'http://'.$_SERVER['SERVER_NAME']  .':'. $_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']).'/detalleAsignatura');

  class ConfigApi {
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [

      'comentarios#GET'=> 'ComentariosController#GetComentarios',
      'asignaturas#GET'=> 'AsignaturasApiController#MostrarAsignaturas',
      'comentariosPOST#POST'=> 'ComentariosController#PostComentario',


  ];

}
