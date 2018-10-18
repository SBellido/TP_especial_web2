<?php
/* Smarty version 3.1.33, created on 2018-10-18 05:23:47
  from 'C:\xampp\htdocs\TP_especial_web2\templates\AlumnosPorAsignaturas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc7fcc34bcc83_84335296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98d97d0d10c49d5d15e7224c91de1e5f48b65800' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_especial_web2\\templates\\AlumnosPorAsignaturas.tpl',
      1 => 1539832750,
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
function content_5bc7fcc34bcc83_84335296 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>
    <section class="container">
      <h4>Usuario conectado: "<?php echo $_smarty_tpl->tpl_vars['Usuario']->value;?>
"</h4>
      <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1><br>
        <a class="btn boton" href="alumnos">VOLVER</a><hr><br>
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">ID ASIGNATURA</th>
            <th scope="col">ALUMNO</th>
            <th scope="col">EMAIL</th>
            <th scope="col">NOTA</th>
            <th scope="col">CONDICIÓN</th>
          </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Alumnos']->value, 'alumnos');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['alumnos']->value) {
?>
        <tbody>
          <tr>
            <td><b><?php echo $_smarty_tpl->tpl_vars['alumnos']->value['id_asignatura'];?>
</b></td>
            <th><?php echo $_smarty_tpl->tpl_vars['alumnos']->value['nombre'];?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['alumnos']->value['email'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['alumnos']->value['nota'];?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['alumnos']->value['aprobado'] == 1) {?>
              <td><b><i>Aprobado</i></b></td>
            <?php } else { ?>
              <td><b><i>Regular</i></b></td>
            <?php }?>
          </tr>
        </tbody>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
  </section><br>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </body>
</html>
<?php }
}
