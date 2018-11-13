{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>
    <section class="container">
      <h6>Usuario conectado: "{$Usuario->nombre}"</h6>
      <h1>{$Titulo}</h1>
      <article class="tabla">
        <ul class="list-group">
          {foreach from=$Docentes item= docente}
              <li class="list-group-item">
                <p><b>DOCENTE: </b>{$docente['nombre']}</p>
                <p><b>NOMBRE DE USUARIO: </b>{$docente['usuario']}</p>
                <p><b>EMAIL: </b>{$docente['email']}</p>
                <p><b>Cargo: </b>{$docente['rol']}</p>
                {if $Usuario->permisos == "admin" && $docente['rol'] == "admin"}
                <a class="btn boton"href="eliminarDocente/{$docente['id_docente']}">
                  ELIMINAR PERFIL
                </a>

                {/if}
                {if $Usuario->permisos == "admin" && $docente['rol'] == "docente"}
                <a class="btn boton"href="eliminarDocente/{$docente['id_docente']}">
                  ELIMINAR PERFIL
                </a>
                <a class="btn boton"href="nombrarAdmin/{$docente['id_docente']}">
                  HACER ADMIN
                </a>
                {/if}
              </li>
          {/foreach}
        </ul>
      </article>
    </section>
    <br>

    {include file = "footer.tpl"}
  </body>
</html>
    <!-- <section class="container"><br>
      <h2>REGISTRAR USUARIO</h2>
      <form method="post" action="agregarDocente" >
        <div class="form-group">
          <label for="nombreForm">Nombre y Apellido</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm">
        </div>
        <div class="form-group">
          <label for="usuarioForm">Nombre de Usuario</label>
          <input type="text" class="form-control" id="usuarioForm" name="usuarioForm">
        </div>
        <div class="form-group">
          <label for="emailForm">Email</label>
          <input type="email" class="form-control" id="emailForm" name="emailForm">
        </div>
        <div class="form-group">
          <label for="cargoForm">Cargo asignado</label>
          <input type="text" class="form-control" id="cargoForm" name="cargoForm">
        </div>
        <div class="form-group">
          <label for="passwordForm">Password</label>
          <input type="text" class="form-control" id="passwordForm" name="passwordForm">
        </div>
        <button type="submit" class="btn boton">CREAR PERFIL</button>
      </form>
    </section> -->
