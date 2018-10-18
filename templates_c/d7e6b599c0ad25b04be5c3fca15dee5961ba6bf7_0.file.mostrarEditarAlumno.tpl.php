<?php
/* Smarty version 3.1.33, created on 2018-10-18 05:44:26
  from 'C:\xampp\htdocs\TP_especial_web2\templates\mostrarEditarAlumno.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc8019ade4257_03940433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7e6b599c0ad25b04be5c3fca15dee5961ba6bf7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_especial_web2\\templates\\mostrarEditarAlumno.tpl',
      1 => 1539524366,
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
function content_5bc8019ade4257_03940433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>
    <div class="container">
      <h4>Usuario conectado "<?php echo $_smarty_tpl->tpl_vars['Usuario']->value;?>
"</h4>
      <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
      <form method="post" action="guardarEditarAlumno">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Alumno']->value, 'alumno');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['alumno']->value) {
?>
          <input type="hidden" class="form-control" id="id_alumnoForm" name="id_alumnoForm" value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value['id_alumno'];?>
">
          <div class="form-group">
            <label for="nombreForm">Nombre y Apellido</label>
            <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value['nombre'];?>
">
          </div>
          <div class="form-group">
            <label for="emailForm">Email</label>
            <input type="email" class="form-control" id="emailForm" name="emailForm" value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value['email'];?>
">
          </div>
          <div class="form-group">
            <label for="notaForm">Nota</label>
            <input type="nota" class="form-control" id="notaForm" name="notaForm" value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value['nota'];?>
">
          </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <button type="submit" class="btn boton">Guardar cambios</button>
      </form>
    </div>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </body>
</html>
<?php }
}
