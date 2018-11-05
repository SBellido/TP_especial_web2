{include file = "header.tpl"}
{include file = "navLogin.tpl"}
<body>

  <section class="container">
    <h2>{$Titulo}</h2><br>
    <div class="row">
      <div class="col">
        <form action="home" method="post" class=".col-12 .col-md-8">
          <div class="form-group">
            <label>Usuario</label>
            <input type="input" class="form-control" id="usuarioId" name="usuario" placeholder="Nombre de usuario" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" id="email_Id" name="email" placeholder="email de usuario" required>
          </div>
          <div class="form-group">
            <label>Contraseña</label>
            <input type="password" class="form-control" id="passwordId" name ="password" placeholder="Contraseña válida" required>
          </div><br>
          <button id="botonID" type="submit" class="boton btn">Ingresar</button>
        </form><br><br>
        <form action="invitado" method="get">
          <button type="submit" class="boton btn">Invitado</button>
        </form><br><br>
        <form action="registro" method="get">
          <button type="submit" class="boton btn">Registrarse</button>
        </form><br><br>
      </div>
      <div class="col">
        <img src="{$Imagen}" alt="personaje poniendo un foco en una cabeza">
      </div>
    </div>
  </section>


    <section class="container">
      <div class="row centered-form">
        <div class="col-xs-12 col-sm-6 col-md-4 col-sm-offset-2 col-md-offset-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2>{$Titulo}</h2><br>
    			 	</div>
    			 			<div class="panel-body">
    			    		<form role="form" action="registro" method="POST">
    			    			<div class="row">
    			    				<div class="col-xs-6 col-sm-6 col-md-6">
    			    					<div class="form-group">
                          <label for="exampleInputName">Nombre</label>
    			                <input type="text" name="nombre" id="first_name" class="form-control input-sm" placeholder="First Name" required>
    			    					</div>
    			    				</div>
    			    				<div class="col-xs-6 col-sm-6 col-md-6">
    			    					<div class="form-group">
                          <label for="exampleInputUser">Usuario</label>
                          <input type="text" name="usuario" id="user" class="form-control input-sm" placeholder="User" required>
    			    					</div>
    			    				</div>
    			    			</div>

    			    			<div class="form-group">
                      <label for="exampleInputEmail">E-mail</label>
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

    			    			<button type="submit" class="btn btn-info btn-block">Registrame</button>
    			    		</form>
    			    	</div>
    	    		</div>
        		</div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <img src="{$Imagen}" alt="personaje poniendo un foco en una cabeza">
              </div>
            </div>
        	</div>
        </section>


    {include file = "footer.tpl"}
  </body>
</html>
