<?php
/* Smarty version 3.1.33, created on 2018-10-12 16:59:37
  from 'C:\xampp\htdocs\BackUp\TP_especial\templates\docentes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc0b6d94191f8_82925651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdec70f13f4f84873b375fa00841573b98c7e135' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BackUp\\TP_especial\\templates\\docentes.tpl',
      1 => 1539205018,
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
function content_5bc0b6d94191f8_82925651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>
    <section class="container">
      <h4>Usuario conectado: "<?php echo $_smarty_tpl->tpl_vars['Usuario']->value;?>
"</h4>
      <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
      <article class="tabla">
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
      </article>    
    </section>
    <br>
    <?php if ($_smarty_tpl->tpl_vars['Usuario']->value !== 'invitado') {?>
    <section class="container"><br>
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
    </section>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </body>
</html>
<?php }
}
