<?php
/* Smarty version 3.1.33, created on 2018-10-17 05:39:36
  from 'C:\xampp\htdocs\TP_especial\templates\asignaturas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc6aef87114a4_47382437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c6d0e55977b08fad42fa9348a61afac0a553b27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_especial\\templates\\asignaturas.tpl',
      1 => 1539747256,
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
function content_5bc6aef87114a4_47382437 (Smarty_Internal_Template $_smarty_tpl) {
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
              <p><b>DESCRIPCIÓN: </b><?php echo $_smarty_tpl->tpl_vars['asignatura']->value['descripcion'];?>
</p>
              <p><b>DOCENTE: </b><?php echo $_smarty_tpl->tpl_vars['asignatura']->value['docente'];?>
</p>
              <?php if ($_smarty_tpl->tpl_vars['Usuario']->value !== 'invitado') {?>
                <p><b>ID ASIGNATURA: </b><?php echo $_smarty_tpl->tpl_vars['asignatura']->value['id_asignatura'];?>
 (este número es único e irrepetible)</p>
                <a class="btn boton" href="eliminarAsignatura/<?php echo $_smarty_tpl->tpl_vars['asignatura']->value['id_asignatura'];?>
">BORRAR</a>
                <a class="btn boton" href="editarAsignatura/<?php echo $_smarty_tpl->tpl_vars['asignatura']->value['id_asignatura'];?>
">EDITAR</a>
                <a class="btn boton" href="listarAlumnos/<?php echo $_smarty_tpl->tpl_vars['asignatura']->value['id_asignatura'];?>
">LISTA DE ALUMNOS</a>
              <?php }?>
            </li><br>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </section><hr><br>
      <?php if ($_smarty_tpl->tpl_vars['Usuario']->value !== "invitado") {?>
        <section class="container">
          <h2>AGREGAR ASIGNATURA</h2>
          <form method="post" action="agregarAsignatura">
            <div class="form-group">
              <label for="nombreForm">Asignatura</label>
              <input type="text" class="form-control" id="nombreForm" placeholder="Nombre de la asignatura" name="nombreForm">
            </div>
            <div class="form-group">
              <label for="descripcionForm">Descripción</label>
              <input type="text" class="form-control" id="descripcionForm" placeholder="Máximo 400 caracteres" name="descripcionForm">
            </div>
            <div class="form-group">
              <label for="docenteForm">Docente</label>
              <input type="text" class="form-control" id="docenteForm" placeholder="Nombre del docente a cargo" name="docenteForm">
            </div>
            <button type="submit" class="btn boton">Crear Asignatura</button>
          </form>
        </section><br>
      <?php }?>
      <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>
</html>
<?php }
}
