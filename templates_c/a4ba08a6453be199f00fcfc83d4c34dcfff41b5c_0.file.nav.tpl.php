<?php
/* Smarty version 3.1.33, created on 2018-10-17 00:28:49
  from 'C:\xampp\htdocs\TP_especial\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc666216e2be7_69680443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4ba08a6453be199f00fcfc83d4c34dcfff41b5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_especial\\templates\\nav.tpl',
      1 => 1539728925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc666216e2be7_69680443 (Smarty_Internal_Template $_smarty_tpl) {
?><nav id="mainNav" class="navbar navbar-expand-lg navbar-light ">
  <div class="navbar-brand js-scroll-trigger" href="#page-top">
    <a id="logoSB" class="navbar-brand js-scroll-trigger" href="asignaturas">
  <img id="logo_esquina" src="images/logo_sb.png" alt="logo">  </a><br></img>
  </div>
<!--  <a id="navbar_title" class="navbar-brand" href="#">comunicación visual</a> -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span id="icon_navbar" class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse navText" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a id="TextoBotonera" class="nav-link" href="asignaturas">ASIGNATURAS</a>
    </li>
    <li class="nav-item">
      <a id="TextoBotonera" class="nav-link disabled" href="alumnos">ALUMNOS</a>
    </li>
    <li class="nav-item">
      <a id="TextoBotonera" class="nav-link disabled" href="docentes">DOCENTES</a>
    </li>
  </ul>
</div>
<?php if ($_smarty_tpl->tpl_vars['Usuario']->value !== "invitado") {?>
<div class="">
  <form class="" action="logout" method="post">
      <button  class="boton btn" type="submit" name="button">CERRAR SESIÓN</button>
  </form>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['Usuario']->value === "invitado") {?>
<div class="">
  <form class="" action="login" method="post">
      <button  class="boton btn" type="submit" name="button">INICIAR SESIÓN</button>
  </form>
</div>
<?php }?>

</nav>
<br>
<?php }
}
