<?php
/* Smarty version 3.1.33, created on 2018-11-09 15:59:51
  from 'C:\xampp\htdocs\TP_especial_web2\templates\asignaturas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be5a0e76a9db6_77440371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3763d8af4b4148533a4973c61fa8879e8fcfeb2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_especial_web2\\templates\\asignaturas.tpl',
      1 => 1541775334,
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
function content_5be5a0e76a9db6_77440371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>
    <section class="container">
      <div class="row">
        <div class="col">
          <h6>Usuario conectado: "<?php echo $_smarty_tpl->tpl_vars['Usuario']->value->nombre;?>
"</h6>

          <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
        </div>
        <div class="col"><br><br>
          <h4>Listar alumnos de una asignatura</h4>
          <form action="mostrarAlumnosFiltro" method="GET">
            <select class="" name="filtroForm">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Asignaturas']->value, 'asignatura');
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
            <button class="boton btn" type="submit">FILTRAR</button>
          </form>
        </div>
      </div>
    </section><br>
    <section class="container">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">ASIGNATURA</th>
            <th scope="col">DOCENTE</th>
            <th scope="col">DESCRIPCIÓN</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Asignaturas']->value, 'asignatura');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['asignatura']->value) {
?>
          <tbody>
            <tr>
              <td><b><?php echo $_smarty_tpl->tpl_vars['asignatura']->value['nombre'];?>
</b></td>
              <td><?php echo $_smarty_tpl->tpl_vars['asignatura']->value['nombre_docente'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['asignatura']->value['descripcion'];?>
</td>
              <?php if ($_smarty_tpl->tpl_vars['Permisos']->value == "admin") {?>
                <td><a class="btn boton" href="eliminarAsignatura/<?php echo $_smarty_tpl->tpl_vars['asignatura']->value['id_asignatura'];?>
">BORRAR</a></td>
                <td><a class="btn boton" href="editarAsignatura/<?php echo $_smarty_tpl->tpl_vars['asignatura']->value['id_asignatura'];?>
">EDITAR</a></td>
              <?php }?>
              <td><a class="btn boton" href="listarAlumnos/<?php echo $_smarty_tpl->tpl_vars['asignatura']->value['id_asignatura'];?>
">LISTA DE ALUMNOS</a></td>
            </tr><tr>
              <td></td>
            </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table>
    </section><br><hr>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Docente']->value, 'docentes');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['docentes']->value) {
?>
    <?php if ($_smarty_tpl->tpl_vars['docentes']->value['rol'] === "admin") {?>
    <section class="container"><br>
      <h2>AGREGAR ASIGNATURA</h2><br>

      <div class="row">
        <div class="col">
          <form method="post" action="agregarAsignatura">
            <div class="form-group">
              <label for="nombreForm">Asignatura</label>
              <input type="text" class="form-control" id="nombreForm" placeholder="Nombre de la asignatura" name="nombreForm">
            </div>
            <div class="form-group">
              <label for="descripcionForm">Descripción</label>
              <input type="text" class="form-control" id="descripcionForm" placeholder="Máximo 400 caracteres" name="descripcionForm">
            </div>
            <label for="descripcionForm">Docente</label><br>
            <select name="docenteForm">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Docente']->value, 'docente');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['docente']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['docente']->value['id_docente'];?>
"><?php echo $_smarty_tpl->tpl_vars['docente']->value['nombre'];?>
</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <br><br>
            <button type="submit" class="boton btn btn-info btn-block">CREAR ASIGNATURA</button>
          </form>
        </div>
        <div class="col">
          <img src="<?php echo $_smarty_tpl->tpl_vars['Imagen']->value;?>
" alt="">
        </div>
      </section><br>
      <?php }?>


  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </body>
</html>
<?php }
}
