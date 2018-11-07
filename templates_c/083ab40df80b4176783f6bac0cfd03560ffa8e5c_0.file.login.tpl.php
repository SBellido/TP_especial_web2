<?php
/* Smarty version 3.1.33, created on 2018-11-06 21:59:51
  from 'C:\xampp\htdocs\TP_especial_web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be200c7e067d6_11519086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '083ab40df80b4176783f6bac0cfd03560ffa8e5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_especial_web2\\templates\\login.tpl',
      1 => 1541537970,
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
function content_5be200c7e067d6_11519086 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navLogin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="container">
  <h2><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h2><br>
  <div class="row">
    <div class="col">
      <form action="home" method="post" class=".col-12 .col-md-8">
        <div class="form-group">
          <label>Usuario</label>
          <input type="input" class="form-control" id="usuarioId" name="usuario" placeholder="Nombre de usuario" required>
        </div>
        <div class="form-group">
          <label>Contraseña</label>
          <input type="password" class="form-control" id="passwordId" name ="password" placeholder="Contraseña válida" required>
        </div><br>
        <button id="botonID" type="submit" class="boton btn btn-info btn-block">Ingresar</button>
      </form><br><br>
      <form action="invitado" method="get">
        <button type="submit" class="boton btn btn-info btn-block">Invitado</button>
      </form><br><br>
      <form action="registro" method="get">
        <button type="submit" class="boton btn btn-info btn-block">Registrarse</button>
      </form><br><br>
    </div>
    <div class="col">
      <img src="<?php echo $_smarty_tpl->tpl_vars['Imagen']->value;?>
" alt="personaje poniendo un foco en una cabeza">
    </div>
  </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
