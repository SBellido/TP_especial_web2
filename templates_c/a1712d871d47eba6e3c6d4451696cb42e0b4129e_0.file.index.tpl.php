<?php
/* Smarty version 3.1.33, created on 2018-10-09 00:30:25
  from 'C:\xampp\htdocs\TP_especial\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbbda81405232_51976761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1712d871d47eba6e3c6d4451696cb42e0b4129e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_especial\\templates\\index.tpl',
      1 => 1539037820,
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
function content_5bbbda81405232_51976761 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <form action="verificarUsuario" method="post">
        <div class="form-group">
          <label for="usuario">Usuario</label>
          <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nombre de usuario" required>
        </div>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" class="form-control" id="password" name ="password" placeholder="contraseña válida" required>
        </div>
<?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
  <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
<?php }?>
<button type="submit" class="btn btn-default">Login</button>
</form>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
