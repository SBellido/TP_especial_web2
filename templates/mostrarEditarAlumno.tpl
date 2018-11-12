{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>
    <div class="container">
      <h6>Usuario conectado: "{$Usuario->nombre}"</h6>
      <h1>{$Titulo}</h1>
      <form method="POST" action="guardarEditarAlumno" enctype="multipart/form-data">
        {foreach from=$Alumno item=alumno}
          <input type="hidden" class="form-control" id="id_alumnoForm" name="id_alumnoForm" value="{$alumno['id_alumno']}">
          <div class="form-group">
            <label for="nombreForm">Nombre y Apellido</label>
            <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="{$alumno['nombre']}">
          </div>
          <div class="form-group">
            <label for="emailForm">Email</label>
            <input type="email" class="form-control" id="emailForm" name="emailForm" value="{$alumno['email']}">
          </div>
          <div class="form-group">
            <label for="notaForm">Nota</label>
            <input type="nota" class="form-control" id="notaForm" name="notaForm" value="{$alumno['nota']}">
          </div>
        {/foreach}
        <div>
          <img src="" alt="">
          {if $Usuario->permisos == "admin"}
          <label for="fotoForm">Ingrese foto</label>
          <input type="file" class="form-control" id="fotoForm" name="fotoForm" value="upload">
          <label for="descForm">descripcion</label>
          <input type="text" class="form-control" id="descForm" name="descForm" value="" maxlength="50">
          {/if}
        </div><br>
        <button type="submit" class="btn boton">Guardar cambios</button>
      </form>
    </div>
  {include file = "footer.tpl"}
  </body>
</html>
