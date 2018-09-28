<?php
class ConfigApp
{
  public static $ACTION = 'action';
  public static $PARAMS = 'params';
  public static $ACTIONS = [
    ''=> 'AsignaturasController#Home',
    'home'=>'AsignaturasController#Home',
    'borrar'=>'AsignaturasController#BorrarAsignatura',
    'agregar'=>'AsignaturasController#InsertAsignatura',
    'terminada'=>'AsignaturasController#TerminarAsignatura',

    'alumnos'=>'AlumnosController#TraerLista',
    'eliminar'=>'AlumnosController#EliminarAlumno',
    'enlistar'=>'AlumnosController#InsertAlumno',
    'aprobar'=>'AlumnosController#AprobarAlumno',
  ];
}
?>
