<?php

  class ConfigApi {
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [

      'comentarios#GET'=> 'ComentariosController#GetComentarios',
      'asignaturas#GET'=> 'AsignaturasApiController#MostrarAsignaturas',
      'ordenarcomentarios#GET'=> 'ComentariosController#OrdenarComentarios',
      // 'comentarios#GET'=> 'ComentariosApiController#getComentarios'

  ];
}

?>
