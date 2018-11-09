<nav id="mainNav" class="navbar navbar-expand-lg navbar-light ">
  <div class="container navbar-brand js-scroll-trigger" href="#page-top">
    <a id="logoSB" class="navbar-brand js-scroll-trigger" href="asignaturas">
  <img id="logo_esquina" src="images/logo_sb.png" alt="logo"></a></img>
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
      <li class="nav-item">
        <a id="TextoBotonera" class="nav-link" href="api/comentarios">COMENTARIOS</a>
      </li>
    </ul>
  </div><br>
  <!-- <div class="container">
    <h6>Usuario conectado: "{$Usuario->nombre}"</h6>
  </div> -->
  {if $Usuario->permisos!=="invitado"}
  <div class="">
    <form class="" action="logout" method="post">
        <button  class="boton btn" type="submit" name="button">CERRAR SESIÓN</button>
    </form>
  </div>
  {/if}
  {if $Usuario->permisos==="invitado"}
  <div >
    <form class="" action="login" method="post">
        <button  class="boton btn" type="submit" name="button">INICIAR SESIÓN</button>
    </form>
  </div>
  {/if}<br>
</nav><br>
