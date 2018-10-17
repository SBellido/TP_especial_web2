<?php
/* Smarty version 3.1.33, created on 2018-10-17 05:08:34
  from 'C:\xampp\htdocs\TP_especial\templates\alumnosFiltrados.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc6a7b2425339_31652677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd96c596d8eafeaf4bdd3aaaea82ef69a565b240' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_especial\\templates\\alumnosFiltrados.tpl',
      1 => 1539745710,
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
function content_5bc6a7b2425339_31652677 (Smarty_Internal_Template $_smarty_tpl) {
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
          <li class="list-group-item">
            <p><b>ALUMNO: </b><?php echo $_smarty_tpl->tpl_vars['alumno']->value['nombre'];?>
</p>
            <p><b>ID ASIGNATURA: </b><?php echo $_smarty_tpl->tpl_vars['alumno']->value['id_asignatura'];?>
</p>
            <p><b>CONDICIÓN: <i><span>Regular</span></i></b></p>
          </li><br>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul><br>
    </section>
    <?php if ($_smarty_tpl->tpl_vars['Usuario']->value !== "invitado") {?>
    <section class="container">
      <h4>Filtrar alumnos por asignatura</h4>
      <form action="filtro" method="post">
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
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </body>
</html>
<?php }
}
