<?php
/* Smarty version 3.1.33, created on 2018-10-10 20:16:14
  from 'C:\xampp\htdocs\BackUp\TP_especial-BkUp\templates\alumnos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbe41ee47b2a2_68543641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e6a05e662400c458dd1782f18b5b4b00be61de9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BackUp\\TP_especial-BkUp\\templates\\alumnos.tpl',
      1 => 1539136128,
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
function content_5bbe41ee47b2a2_68543641 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>

<div class="container">
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
          <s><p><b>NOMBRE: </b><?php echo $_smarty_tpl->tpl_vars['alumno']->value['nombre'];?>

             <p><b>EMAIL: </b><?php echo $_smarty_tpl->tpl_vars['alumno']->value['email'];?>

             <p><b>NOTA: </b> <?php echo $_smarty_tpl->tpl_vars['alumno']->value['nota'];?>

          </s>
            <a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['alumno']->value['id_alumno'];?>
"><br>ELIMINAR</a></li>
        <?php } else { ?>
        <li class="list-group-item">
          <p><b>NOMBRE: </b><?php echo $_smarty_tpl->tpl_vars['alumno']->value['nombre'];?>

          <p><b>EMAIL: </b> <?php echo $_smarty_tpl->tpl_vars['alumno']->value['email'];?>

          <p><b>NOTA: </b> <?php echo $_smarty_tpl->tpl_vars['alumno']->value['nota'];?>
<br>
          <?php if ($_smarty_tpl->tpl_vars['Usuario']->value !== "invitado") {?>
            <a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['alumno']->value['id_alumno'];?>
">
              ELIMINAR</a> | <a href="aprobar/<?php echo $_smarty_tpl->tpl_vars['alumno']->value['id_alumno'];?>
">
              APROBAR</a></li>
          <?php }?>
      <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>
<br>
<?php if ($_smarty_tpl->tpl_vars['Usuario']->value !== "invitado") {?>
<div class="container"><br>
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
</div>
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
