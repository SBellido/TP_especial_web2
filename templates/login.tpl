{include file = "header.tpl"}
{include file = "navLogin.tpl"}

<section class="container">
  <h2>{$Titulo}</h2><br>
  <div class="row">
    <div class="col">
      <form action="home" method="post">
        <div class="form-group">
          <label for="usuario">Usuario</label>
          <input type="input" class="form-control" id="usuarioId" name="usuario" placeholder="Nombre de usuario" required>
        </div>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" class="form-control" id="passwordId" name ="password" placeholder="Contraseña válida" required>
        </div><br>
        <button id="botonID" type="submit" class="boton btn">Ingresar</button>
      </form><br><br>
      <form action="invitado" method="get">
        <button type="submit" class="boton btn">Invitado</button>
      </form><br><br>
    </div>
    <div class="col">
      <img src="images/ideasProntas.jpg" alt="personaje poniendo un foco en una cabeza">
    </div>
  </div>
</section>
{include file = "footer.tpl"}
