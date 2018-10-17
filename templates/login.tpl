{include file = "header.tpl"}
{include file = "navLogin.tpl"}
  <section class="container">
  <h1>{$UserText}</h1>
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
    <h1>{$InvitedText}</h1>
    <br>
    <form action="invitado" method="get">
        <button type="submit" class="boton btn">Invitado</button>
    </form>
  </section>
{include file = "footer.tpl"}
