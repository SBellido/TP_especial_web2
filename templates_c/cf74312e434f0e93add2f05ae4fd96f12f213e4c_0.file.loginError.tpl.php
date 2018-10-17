<?php
/* Smarty version 3.1.33, created on 2018-10-13 15:38:43
  from 'C:\xampp\htdocs\BackUp\TP_especial\templates\loginError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc1f56371c9c5_76400521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf74312e434f0e93add2f05ae4fd96f12f213e4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BackUp\\TP_especial\\templates\\loginError.tpl',
      1 => 1539437920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navLogin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc1f56371c9c5_76400521 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navLogin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <section class="container">
  <h1><?php echo $_smarty_tpl->tpl_vars['ErrorUsuario']->value;?>
</h1>
  <br>
    <form action="home" method="post">
      <div class="form-group">
        <label for="usuario">Usuario</label>
        <input type="input" class="form-control" id="usuarioId" name="usuario" placeholder="Nombre de usuario" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" class="form-control" id="passwordId" name ="password" placeholder="Contraseña válida" required>
      </div>
      <button id="botonID" type="submit" class="boton btn">Ingresar</button>
    </form>
  </section>
  <br>
  <hr>
  <section class="container">
    <h1><?php echo $_smarty_tpl->tpl_vars['InvitedText']->value;?>
</h1>
    <br>
    <form action="invitado" method="get">
        <button type="submit" class="boton btn">Invitado</button>
    </form>
  </section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
