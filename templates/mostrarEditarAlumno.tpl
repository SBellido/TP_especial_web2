{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>
    <div class="container">
      <h6>Usuario conectado: "{$Usuario}"</h6>
      <h1>{$Titulo}</h1>
      <form method="post" action="guardarEditarAlumno">
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
        <button type="submit" class="btn boton">Guardar cambios</button>
      </form>
    </div>
  {include file = "footer.tpl"}
  </body>
</html>
