<?php
/* Smarty version 3.1.33, created on 2018-09-26 23:14:51
  from 'C:\xampp\htdocs\TP_especial\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5babf6cbe08d77_04675884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b19064d1cb99aecbdda3c33629b4f4c6b185e75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_especial\\templates\\home.tpl',
      1 => 1537996487,
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
function content_5babf6cbe08d77_04675884 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>

    <div class="container">
      <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
      <ul class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Asignaturas']->value, 'asignatura');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['asignatura']->value) {
?>
          <?php if ($_smarty_tpl->tpl_vars['asignatura']->value['terminada'] == 1) {?>
            <li class="list-group-item"><s><p><b>NOMBRE:</b><?php echo $_smarty_tpl->tpl_vars['asignatura']->value['nombre'];?>
<p><b>DESCRIPCIÓN:</b><?php echo $_smarty_tpl->tpl_vars['asignatura']->value['descripcion'];?>
<p><b>DOCENTE:</b> <?php echo $_smarty_tpl->tpl_vars['asignatura']->value['docente'];?>
</s><a href="borrar/<?php echo $_smarty_tpl->tpl_vars['asignatura']->value['id_asignatura'];?>
"><br>BORRAR</a></li>
          <?php } else { ?>
            <li class="list-group-item"><p><b>NOMBRE:</b> <?php echo $_smarty_tpl->tpl_vars['asignatura']->value['nombre'];?>
<p><b>DESCRIPCIÓN:</b> <?php echo $_smarty_tpl->tpl_vars['asignatura']->value['descripcion'];?>
<p><b>DOCENTE:</b> <?php echo $_smarty_tpl->tpl_vars['asignatura']->value['docente'];?>
<br><a href="borrar/<?php echo $_smarty_tpl->tpl_vars['asignatura']->value['id_asignatura'];?>
">BORRAR</a> | <a href="terminada/<?php echo $_smarty_tpl->tpl_vars['asignatura']->value['id_asignatura'];?>
">TERMINAR</a></li>
          <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>


    <div class="container"><br>
      <h2>AGREGAR ASIGNATURA</h2>

      <form method="post" action="agregar">
        <div class="form-group">
          <label for="tituloForm">Nombre de la Asignatura</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripción</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm">
        </div>
        <div class="form-group">
          <label for="docenteForm">Docente</label>
          <input type="text" class="form-control" id="docenteForm" name="docenteForm">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="terminadaForm" name="terminadaForm">
          <label class="form-check-label" for="terminadaForm">Terminar</label>
        </div>
        <button type="submit" class="btn btn-primary">Crear Asignatura</button>
      </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
