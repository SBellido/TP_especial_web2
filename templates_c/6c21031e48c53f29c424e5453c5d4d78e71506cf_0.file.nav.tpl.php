<?php
/* Smarty version 3.1.33, created on 2018-11-19 00:44:04
  from 'C:\xampp\htdocs\TP_especial_web2\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf1f9448ae163_03052340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c21031e48c53f29c424e5453c5d4d78e71506cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_especial_web2\\templates\\nav.tpl',
      1 => 1542584642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf1f9448ae163_03052340 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
  <section class="container">
    <nav id="mainNav" class="navbar navbar-expand-lg navbar-light ">
      <div class="container navbar-brand js-scroll-trigger" href="#page-top">
        <a id="logoSB" class="navbar-brand js-scroll-trigger" href="asignaturas">
          <img id="logo_esquina" src="images/logoSB.png" alt="logo"></a></img>
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
              <a id="TextoBotonera" class="nav-link disabled" href="docentes">DOCENTES</a>
            </li>
          </ul>
          <?php if ($_smarty_tpl->tpl_vars['Usuario']->value->permisos !== "invitado") {?>
          <div>
            <form class="cerrarSesion" action="logout" method="post">
              <button  class="boton btn" type="submit" name="button">CERRAR SESIÓN</button>
            </form>
          </div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['Usuario']->value->permisos == "invitado") {?>
          <div>
            <form  class="cerrarSesion" action="login" method="post">
              <button  class="boton btn" type="submit" name="button">INICIAR SESIÓN</button>
            </form>
          </div>
          <?php }?><br>
        </div><br>


      </nav><br>

    </section>

</header>
<br>
<?php }
}
