{include file = "header.tpl"}
{include file = "nav.tpl"}
<body>
  <section class="container">
    <div class="row">
      <div class="col">
        <h6>Usuario conectado: "{$Usuario->nombre}"</h6>

        <h1>{$Titulo}</h1>
      </div>
      <div class="col">
      </div>
    </div>
  </section><br>
  <section class="container">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">DOCENTE</th>
          <th scope="col">NOMBRE DE USUARIO</th>
          <th scope="col">EMAIL</th>
          <th scope="col">ROL</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      {foreach from=$Docentes item= docente}
      <tbody>
        <tr>
          <td><b>{$docente['nombre']}</b></td>
          <td>{$docente['usuario']}</td>
          <td>{$docente['email']}</td>
          <td>{$docente['rol']}</td>
          {if $Usuario->permisos == "admin"}
          <td><a class="btn boton"href="eliminarDocente/{$docente['id_docente']}">
            ELIMINAR PERFIL
          </a></td>
          {/if}
          {if $docente['rol'] == "docente" && $Usuario->permisos == "admin"}
            <td><a class="btn boton"href="cambiarRol/{$docente['id_docente']}">
              HACER ADMIN
            </a></td>
          {/if}
          {if $docente['rol'] == "admin" && $Usuario->permisos == "admin"}
          <td>  <a class="btn boton"href="cambiarRol/{$docente['id_docente']}">
            HACER DOCENTE
            </a></td>
          {/if}
        </tr>
      {/foreach}
      </tbody>
    </table>
  </section>
    {include file = "footer.tpl"}
  </body>
</html>
