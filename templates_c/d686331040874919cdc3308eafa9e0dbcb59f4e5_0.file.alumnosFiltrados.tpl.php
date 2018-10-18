<?php
/* Smarty version 3.1.33, created on 2018-10-18 02:42:50
  from 'C:\xampp\htdocs\TP_especial_web2\templates\alumnosFiltrados.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc7d70a7b01a5_07007514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd686331040874919cdc3308eafa9e0dbcb59f4e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_especial_web2\\templates\\alumnosFiltrados.tpl',
      1 => 1539823366,
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
function content_5bc7d70a7b01a5_07007514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
  <section class="container">
    <h4>Usuario conectado: "<?php echo $_smarty_tpl->tpl_vars['Usuario']->value;?>
"</h4>
    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
    <br>
    <a class="btn boton" href="alumnos">VOLVER</a><br><hr><br>
    </section>
      <section class="container">
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">ID ASIGNATURA</th>
              <th scope="col">ALUMNO</th>
              <th scope="col">EMAIL</th>
              <th scope="col">NOTA</th>
              <th scope="col"></th>
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
              <td scope="col"><?php echo $_smarty_tpl->tpl_vars['alumnos']->value['id_asignatura'];?>
</td>
              <th><?php echo $_smarty_tpl->tpl_vars['alumnos']->value['nombre'];?>
</th>
              <td><?php echo $_smarty_tpl->tpl_vars['alumnos']->value['email'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['alumnos']->value['nota'];?>
</td>
              <?php if ($_smarty_tpl->tpl_vars['Usuario']->value !== "invitado") {?>
              <td><a class="btn boton" href="eliminarAlumno/<?php echo $_smarty_tpl->tpl_vars['alumno']->value['id_alumno'];?>
">ELIMINAR</a></td>
              <td><a class="btn boton" href="editarAlumno/<?php echo $_smarty_tpl->tpl_vars['alumno']->value['id_alumno'];?>
">EDITAR</a></td>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['alumnos']->value['aprobado'] == 0 && $_smarty_tpl->tpl_vars['Usuario']->value !== "invitado") {?>
              <td><a class="btn boton" href="aprobar/<?php echo $_smarty_tpl->tpl_vars['alumno']->value['id_alumno'];?>
">APROBAR</a></td>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['alumnos']->value['aprobado'] == 1) {?>
              <td><b><i>Aprobado</i></b></td>
              <?php }?>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
      </section><br><hr><br>
      <section class="container">
        <?php if ($_smarty_tpl->tpl_vars['Usuario']->value !== "invitado") {?>

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
          <button class="boton btn">FILTRAR</button>
        </form>
        <br>
        <?php }?>
      </section>
    </section>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </body>
</html>
<?php }
}
