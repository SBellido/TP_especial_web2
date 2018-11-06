{include file = "header.tpl"}
{include file = "navLogin.tpl"}
<body>

  <section class="container">
    <h2>{$Titulo}</h2><br>
    <div class="row">
      <div class="col">
        <form role="form" action="registro" method="POST" class=".col-12 .col-md-8">
          <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre" id="first_name" class="form-control input-sm" placeholder="First Name" required>
          </div>
          <div class="form-group">
            <label>Nombre de Usuario</label>
            <input type="text" name="usuario" id="user" class="form-control input-sm" placeholder="User" required>
          </div>
          <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" required>
          </div>
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required>
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
              <label for="exampleInputPassword1">RePassword</label>
              <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" required>
            </div>
          </div>
        </div>
          <button type="submit" class="boton btn btn-info btn-block">Registrame</button>
        </form><br><br>
      </div>
      <div class="col">
        <img src="{$Imagen}" alt="personaje poniendo un foco en una cabeza">
      </div>
    </div>
  </section>



    {include file = "footer.tpl"}
  </body>
</html>
