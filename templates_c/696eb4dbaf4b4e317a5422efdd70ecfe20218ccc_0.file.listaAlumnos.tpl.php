<?php
/* Smarty version 3.1.33, created on 2018-10-18 01:34:12
  from 'C:\xampp\htdocs\TP_especial_web2\templates\listaAlumnos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc7c6f4e64db2_20400655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '696eb4dbaf4b4e317a5422efdd70ecfe20218ccc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_especial_web2\\templates\\listaAlumnos.tpl',
      1 => 1539819239,
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
function content_5bc7c6f4e64db2_20400655 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>
    <section class="container">
      <h4>Usuario conectado: "<?php echo $_smarty_tpl->tpl_vars['Usuario']->value;?>
"</h4>
      <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1><br>
        <a class="btn boton" href="asignaturas">VOLVER</a><hr><br>
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
    </section>



    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </body>
</html>
<?php }
}
