{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>
    <section class="container">
            <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
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
    			                <input type="text" name="nombre" id="first_name" class="form-control input-sm" placeholder="First Name">
    			    					</div>
    			    				</div>
    			    				<div class="col-xs-6 col-sm-6 col-md-6">
    			    					<div class="form-group">
                          <label for="exampleInputUser">Usuario</label>
                          <input type="text" name="usuario" id="user" class="form-control input-sm" placeholder="User">
    			    					</div>
    			    				</div>
    			    			</div>

    			    			<div class="form-group">
                      <label for="exampleInputEmail">E-mail</label>
    			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
    			    			</div>

    			    			<div class="row">
    			    				<div class="col-xs-6 col-sm-6 col-md-6">
    			    					<div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
    			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
    			    					</div>
    			    				</div>
    			    				<div class="col-xs-6 col-sm-6 col-md-6">
    			    					<div class="form-group">
                          <label for="exampleInputPassword1">RePassword</label>
    			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
    			    					</div>
    			    				</div>
    			    			</div>

    			    			<button type="submit" class="btn btn-info btn-block">Registrame</button>
    			    		</form>
                  <img src="{$Imagen}" alt="personaje poniendo un foco en una cabeza">
    			    	</div>
    	    		</div>
        		</div>
        	</div>
        </section>


    {include file = "footer.tpl"}
  </body>
</html>
