<?php
/* Smarty version 3.1.33, created on 2018-10-13 16:49:46
  from 'C:\xampp\htdocs\BackUp\TP_especial\templates\asignaturas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc2060a9eabc9_12520827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9953539e794b3d07590a70afd44d94b4573f3608' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BackUp\\TP_especial\\templates\\asignaturas.tpl',
      1 => 1539442183,
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
function content_5bc2060a9eabc9_12520827 (Smarty_Internal_Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Asignaturas']->value, 'asignatura');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['asignatura']->value) {
?>
            <li class="list-group-item">
              <p><b>ASIGNATURA: </b><?php echo $_smarty_tpl->tpl_vars['asignatura']->value['nombre'];?>
</p>
              <?php if ($_smarty_tpl->tpl_vars['Usuario']->value !== 'invitado') {?>
                <p><b>NÚMERO IDENTIFICATORIO: </b><?php echo $_smarty_tpl->tpl_vars['asignatura']->value['id_asignatura'];?>
</p>
              <?php }?>
              <p><b>DESCRIPCIÓN: </b><?php echo $_smarty_tpl->tpl_vars['asignatura']->value['descripcion'];?>
</p>
              <p><b>DOCENTE: </b><?php echo $_smarty_tpl->tpl_vars['asignatura']->value['docente'];?>
</p>
              <?php if ($_smarty_tpl->tpl_vars['Usuario']->value !== 'invitado') {?>
                <a class="btn boton" href="borrar/<?php echo $_smarty_tpl->tpl_vars['asignatura']->value['id_asignatura'];?>
">BORRAR</a>
                <a class="btn boton" href="editar/<?php echo $_smarty_tpl->tpl_vars['asignatura']->value['id_asignatura'];?>
">EDITAR</a>
              <?php }?>
            </li>
            <br>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <br>
      <?php if ($_smarty_tpl->tpl_vars['Usuario']->value !== "invitado") {?>
        <section class="container"><br>
          <h2>AGREGAR ASIGNATURA</h2>
          <form method="post" action="agregarAsignatura">
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
            <button type="submit" class="btn boton">Crear Asignatura</button>
          </form>
        </section>
      </section>
      <?php }?>
      <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>
</html>
<?php }
}
