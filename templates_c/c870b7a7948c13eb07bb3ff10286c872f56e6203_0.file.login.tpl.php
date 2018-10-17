<?php
/* Smarty version 3.1.33, created on 2018-10-10 20:13:44
  from 'C:\xampp\htdocs\BackUp\TP_especial-BkUp\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbe4158632556_00585988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c870b7a7948c13eb07bb3ff10286c872f56e6203' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BackUp\\TP_especial-BkUp\\templates\\login.tpl',
      1 => 1539190976,
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
function content_5bbe4158632556_00585988 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navLogin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container bodyLogin">
  <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
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
      <button id="botonID" type="submit" class=" boton btn">Ingresar</button>
    </form>
</div>
<br>
<hr>
<div class="container">
  <h1><?php echo $_smarty_tpl->tpl_vars['Message']->value;?>
</h1>
  <br>
  <form action="invitado" method="get">
      <button type="submit" class="boton btn">Invitado</button>
  </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
