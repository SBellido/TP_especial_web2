<?php
/* Smarty version 3.1.33, created on 2018-10-17 03:58:30
  from 'C:\xampp\htdocs\TP_especial\templates\AlumnosPorAsignaturas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc69746669cf4_22393047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dd53fa860e01e9df13d862a1035e6636bdd1160' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_especial\\templates\\AlumnosPorAsignaturas.tpl',
      1 => 1539741417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc69746669cf4_22393047 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>
    <section class="container">
      <h4>Usuario conectado: "<?php echo $_smarty_tpl->tpl_vars['Usuario']->value;?>
"</h4>
      <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
        <ul class="list-group">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Asignaturas']->value, 'asignaturas');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['asignaturas']->value) {
?>
            <p><?php echo $_smarty_tpl->tpl_vars['asignaturas']->value['nombre'];?>
<b> | ID ASIGNATURA: </b><?php echo $_smarty_tpl->tpl_vars['asignaturas']->value['id_asignatura'];?>
</p>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Alumnos']->value, 'alumnos');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['alumnos']->value) {
?>
            <li class="list-group-item">
              <p><b>ALUMNO: </b><?php echo $_smarty_tpl->tpl_vars['alumnos']->value['nombre'];?>
</p>
              <p><b>ID ASIGNATURA: </b><?php echo $_smarty_tpl->tpl_vars['alumnos']->value['id_asignatura'];?>
</p>
              <p><b>CONDICIÓN: <i>Aprobado</i></b></p>
            </li><br>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <div class="container">
          <a class="btn boton" href="alumnos">VOLVER</a>
        </div>
      </section>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </body>
</html>
<?php }
}
