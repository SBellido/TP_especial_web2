<?php
/* Smarty version 3.1.33, created on 2018-10-14 16:05:54
  from 'C:\xampp\htdocs\TP_especial\templates\mostrarEditarAsignatura.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc34d4293c162_86421033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd1e8d5df753e7205ff67810c4635f8a46a6a379' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_especial\\templates\\mostrarEditarAsignatura.tpl',
      1 => 1539516337,
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
function content_5bc34d4293c162_86421033 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>
    <div class="container">
      <h4>Usuario conectado "<?php echo $_smarty_tpl->tpl_vars['Usuario']->value;?>
"</h4>
      <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
      <form method="post" action="guardarEditarAsignatura">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Asignatura']->value, 'asignatura');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['asignatura']->value) {
?>
          <input type="hidden" class="form-control" id="id_asignaturaForm" name="id_asignaturaForm" value="<?php echo $_smarty_tpl->tpl_vars['asignatura']->value['id_asignatura'];?>
">
          <div class="form-group">
            <label for="nombreForm">Nombre de la asignatura</label>
            <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="<?php echo $_smarty_tpl->tpl_vars['asignatura']->value['nombre'];?>
">
          </div>
          <div class="form-group">
            <label for="descripcionForm">Descripcion</label>
            <input type="text" class="form-control" id="descripcionForm" name="descripcionForm" value="<?php echo $_smarty_tpl->tpl_vars['asignatura']->value['descripcion'];?>
">
          </div>
          <div class="form-group">
            <label for="docenteForm">Nombre de la asignatura</label>
            <input type="text" class="form-control" id="docenteForm" name="docenteForm" value="<?php echo $_smarty_tpl->tpl_vars['asignatura']->value['docente'];?>
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
