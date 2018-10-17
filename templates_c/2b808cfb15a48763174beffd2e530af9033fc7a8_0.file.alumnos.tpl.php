<?php
/* Smarty version 3.1.33, created on 2018-10-13 18:23:12
  from 'C:\xampp\htdocs\BackUp\TP_especial\templates\alumnos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc21bf0b7bb78_98927158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b808cfb15a48763174beffd2e530af9033fc7a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BackUp\\TP_especial\\templates\\alumnos.tpl',
      1 => 1539447790,
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
function content_5bc21bf0b7bb78_98927158 (Smarty_Internal_Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Alumnos']->value, 'alumno');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['alumno']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['alumno']->value['aprobado'] == 1) {?>
              <li class="list-group-item">
                <p><b>NOMBRE: </b><?php echo $_smarty_tpl->tpl_vars['alumno']->value['nombre'];?>
</p>
                <p><b>EMAIL: </b><?php echo $_smarty_tpl->tpl_vars['alumno']->value['email'];?>
</p>
                <p><b>NOTA: </b><?php echo $_smarty_tpl->tpl_vars['alumno']->value['nota'];?>
</p>
                <p><b>CONDICIÓN: <i>Aprobado</i></b></p>
                <?php if ($_smarty_tpl->tpl_vars['Usuario']->value !== 'invitado') {?>
                  <a class="btn boton" href="eliminar/<?php echo $_smarty_tpl->tpl_vars['alumno']->value['id_alumno'];?>
">ELIMINAR</a>
                  <a class="btn boton" href="editar/<?php echo $_smarty_tpl->tpl_vars['alumno']->value['id_alumno'];?>
">EDITAR</a>
                <?php }?>
              </li><br>
            <?php } else { ?>
              <li class="list-group-item">
                <p><b>NOMBRE: </b><?php echo $_smarty_tpl->tpl_vars['alumno']->value['nombre'];?>
</p>
                <p><b>EMAIL: </b><?php echo $_smarty_tpl->tpl_vars['alumno']->value['email'];?>
</p>
                <p><b>NOTA: </b><?php echo $_smarty_tpl->tpl_vars['alumno']->value['nota'];?>
</p>
                <p><b>CONDICIÓN: <i><span>Regular</span></i></b></p>
              <?php if ($_smarty_tpl->tpl_vars['Usuario']->value !== "invitado") {?>
                <a class="btn boton"href="eliminar/<?php echo $_smarty_tpl->tpl_vars['alumno']->value['id_alumno'];?>
">ELIMINAR</a>
                <a class="btn boton" href="editar/<?php echo $_smarty_tpl->tpl_vars['alumno']->value['id_alumno'];?>
">EDITAR</a>
                <a class="btn boton"href="aprobar/<?php echo $_smarty_tpl->tpl_vars['alumno']->value['id_alumno'];?>
">APROBAR</a>
              <?php }?>
              <br>
            </li>
          <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul><br>
      <?php if ($_smarty_tpl->tpl_vars['Usuario']->value !== "invitado") {?>
      <article class="container">
        <h4>Filtrar alumnos por asignatura</h4>
        <form class="" action="filtro" method="post">
          <select class="" name="filtroForm">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Asignatura']->value, 'asignatura');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['asignatura']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['asignatura']->value['id_asignatura'];?>
"><?php echo $_smarty_tpl->tpl_vars['asignatura']->value['nombre'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
          <button class="boton btn" type="submit" name="button">FILTRAR</button>
        </form>
      </article>
      <article class="container"><br>
        <h2>AGREGAR ALUMNO</h2>
        <form method="post" action="agregarAlumno" >
          <div class="form-group">
            <label for="nombreForm">Nombre del Alumno</label>
            <input type="text" class="form-control" id="nombreForm" name="nombreForm">
          </div>
          <div class="form-group">
            <label for="emailForm">Email</label>
            <input type="email" class="form-control" id="emailForm" name="emailForm">
          </div>
          <div class="form-group">
            <label for="notaForm">Nota</label>
            <input type="text" class="form-control" id="notaForm" name="notaForm">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="aprobarForm" name="aprobarForm">
            <label class="form-check-label" for="aprobarForm">Aprobar</label>
          </div>
          <button type="submit" class="btn boton">Crear Perfil de Alumno</button>
        </form>
      </article>
  </section>
  <br>



  <?php }?>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </body>
</html>
<?php }
}
