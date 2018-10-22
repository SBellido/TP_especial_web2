<?php
/* Smarty version 3.1.33, created on 2018-10-22 20:49:44
  from 'C:\xampp\htdocs\TP_especial_web2\templates\alumnoDetalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bce1bc8d5a8f4_74360675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce27a48076652e911f55381bc086daeee28be741' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_especial_web2\\templates\\alumnoDetalle.tpl',
      1 => 1539729865,
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
function content_5bce1bc8d5a8f4_74360675 (Smarty_Internal_Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Alumno']->value, 'alumno');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['alumno']->value) {
?>
        <li class="list-group-item">
          <p><b>ALUMNO: </b><?php echo $_smarty_tpl->tpl_vars['alumno']->value['nombre'];?>
</p>
          <p><b>EMAIL: </b><?php echo $_smarty_tpl->tpl_vars['alumno']->value['email'];?>
</p>
          <p><b>NOTA: </b><?php echo $_smarty_tpl->tpl_vars['alumno']->value['nota'];?>
</p>
          <p><b>ID ASIGNATURA: </b><?php echo $_smarty_tpl->tpl_vars['alumno']->value['id_asignatura'];?>
</p>
          <p><b>CONDICIÓN: <i>Aprobado</i></b></p>
          <a class="btn boton" href="alumnos">VOLVER</a>
        </li><br>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul><br>
  </section>
  <br>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </body>
</html>
<?php }
}
