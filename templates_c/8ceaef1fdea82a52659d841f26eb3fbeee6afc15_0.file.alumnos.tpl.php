<?php
/* Smarty version 3.1.33, created on 2018-10-24 20:20:21
  from 'C:\xampp\htdocs\TP_especial_web2\templates\alumnos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd0b7e581f740_18056950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ceaef1fdea82a52659d841f26eb3fbeee6afc15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_especial_web2\\templates\\alumnos.tpl',
      1 => 1540386845,
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
function content_5bd0b7e581f740_18056950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
  <section class="container">
    <h6>Usuario conectado: "<?php echo $_smarty_tpl->tpl_vars['Usuario']->value;?>
"</h6>
    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1><br>
    <div class="row">
      <div class="col">
        <form  action="alumnosPorAsignaturas" method="post">
          <button class="btn boton" type="submit" name="button">ORDENAR ID</button>
        </form><br><hr><br>
      </div>
      <div class="col">
        <h4>Filtrar alumnos por asignatura</h4>
        <form action="mostrarAlumnosFiltro" method="post">
          <select name="filtroForm">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Asignatura']->value, 'asignatura');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['asignatura']->value) {
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['asignatura']->value['id_asignatura'];?>
">ID: <?php echo $_smarty_tpl->tpl_vars['asignatura']->value['id_asignatura'];?>
 | <?php echo $_smarty_tpl->tpl_vars['asignatura']->value['nombre'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
          <button class="boton btn" type="submit" name="button">FILTRAR</button>
        </form>
      </div>
    </section>

    <section class="container">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">ALUMNO</th>
            <th scope="col">EMAIL</th>
            <th scope="col">NOTA</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col">CONDICIÓN</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Alumnos']->value, 'alumnos');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['alumnos']->value) {
?>
            <tr>
              <th><?php echo $_smarty_tpl->tpl_vars['alumnos']->value['nombre'];?>
</th>
              <td><?php echo $_smarty_tpl->tpl_vars['alumnos']->value['email'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['alumnos']->value['nota'];?>
</td>
              <?php if ($_smarty_tpl->tpl_vars['Usuario']->value !== "invitado") {?>
                <td><a class="btn boton" href="eliminarAlumno/<?php echo $_smarty_tpl->tpl_vars['alumnos']->value['id_alumno'];?>
">ELIMINAR</a></td>
                <td><a class="btn boton" href="editarAlumno/<?php echo $_smarty_tpl->tpl_vars['alumnos']->value['id_alumno'];?>
">EDITAR</a></td>
                <td><a class="btn boton" href="mostrarDetalleAlumno/<?php echo $_smarty_tpl->tpl_vars['alumnos']->value['id_alumno'];?>
">DETALLE</a></td>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['alumnos']->value['aprobado'] == 1) {?>
                <td><b><i>Aprobado</i></b></td>
                <?php } else { ?>
                <td><b><i>Regular</i></b></td>
              <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['alumnos']->value['aprobado'] != 1 && $_smarty_tpl->tpl_vars['Usuario']->value !== "invitado") {?>
                  <td><a class="btn boton" href="aprobar/<?php echo $_smarty_tpl->tpl_vars['alumnos']->value['id_alumno'];?>
">APROBAR</a></td>
                <?php }?>
            </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table>
    </section><br><hr><br>

    <?php if ($_smarty_tpl->tpl_vars['Usuario']->value !== "invitado") {?>
    <section class="container">
      <h2>AGREGAR ALUMNO</h2><br>
      <div class="row">
        <div class="col">
      <form method="post" action="agregarAlumno">
        <div class="form-group">
          <label>Nombre del Alumno</label>
          <input type="text" class="form-control" name="nombreForm">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="emailForm">
        </div>
        <div class="form-group">
          <label>Nota</label>
          <input type="text" class="form-control" name="notaForm">
        </div>
        <div class="form-group">
          <label>ID Asignatura</label>
          <input type="text" class="form-control" name="id_asignaturaForm">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" name="aprobarForm">
          <label class="form-check-label">Aprobar</label>
        </div><br>
          <button type="submit" class="btn boton">CREAR PERFIL</button>
      </form>
      </div>
      <div class="col">
        <img src="<?php echo $_smarty_tpl->tpl_vars['Imagen']->value;?>
" alt="">
      </div>
    </div>

    </section>
    <?php }?>
    <br>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </body>
</html>
<?php }
}
