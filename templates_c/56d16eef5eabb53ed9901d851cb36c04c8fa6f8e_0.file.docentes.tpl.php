<?php
/* Smarty version 3.1.33, created on 2018-10-10 20:16:15
  from 'C:\xampp\htdocs\BackUp\TP_especial-BkUp\templates\docentes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbe41ef3527f9_91416152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56d16eef5eabb53ed9901d851cb36c04c8fa6f8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BackUp\\TP_especial-BkUp\\templates\\docentes.tpl',
      1 => 1539194273,
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
function content_5bbe41ef3527f9_91416152 (Smarty_Internal_Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Docentes']->value, 'docente');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['docente']->value) {
?>
            <li class="list-group-item">
              <p><b>DOCENTE: </b><?php echo $_smarty_tpl->tpl_vars['docente']->value['nombre'];?>
</p>
              <p><b>CARGO: </b><?php echo $_smarty_tpl->tpl_vars['docente']->value['cargo'];?>
</p>
              <p><b>EMAIL: </b><?php echo $_smarty_tpl->tpl_vars['docente']->value['email'];?>
</p>
              <?php if ($_smarty_tpl->tpl_vars['Usuario']->value !== 'invitado') {?>
              <a href="eliminarDocente/<?php echo $_smarty_tpl->tpl_vars['docente']->value['id_docente'];?>
">
                <br>ELIMINAR
              </a>
              <?php }?>
            </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
    <br>
    <?php if ($_smarty_tpl->tpl_vars['Usuario']->value !== 'invitado') {?>
    <div class="container"><br>
      <h2>AGREGAR DOCENTE</h2>
      <form method="post" action="agregarDocente" >
        <div class="form-group">
          <label for="nombreForm">Nombre y Apellido</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm">
        </div>
        <div class="form-group">
          <label for="usuarioForm">Nombre de Usuario</label>
          <input type="text" class="form-control" id="usuarioForm" name="usuarioForm">
        </div>
        <div class="form-group">
          <label for="emailForm">Email</label>
          <input type="email" class="form-control" id="emailForm" name="emailForm">
        </div>
        <div class="form-group">
          <label for="cargoForm">Cargo</label>
          <input type="text" class="form-control" id="cargoForm" name="cargoForm">
        </div>
        <div class="form-group">
          <label for="passwordForm">Password</label>
          <input type="text" class="form-control" id="passwordForm" name="passwordForm">
        </div>

        <button type="submit" class="btn boton">Crear Perfil de un Docente</button>
      </form>
    </div>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </body>
</html>
<?php }
}
