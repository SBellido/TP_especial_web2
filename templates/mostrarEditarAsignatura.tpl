{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>
    <div class="container">
      <h6>Usuario conectado "{$Docente}"</h6>
      <h1>{$Titulo}</h1>
      <form method="post" action="guardarEditarAsignatura">
        {foreach from=$Asignatura item= asignatura}
          <input type="hidden" class="form-control" id="id_asignaturaForm" name="id_asignaturaForm" value="{$asignatura['id_asignatura']}">
          <div class="form-group">
            <label for="nombreForm">Nombre de la asignatura</label>
            <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="{$asignatura['nombre']}">
          </div>
          <div class="form-group">
            <label for="descripcionForm">Descripcion</label>
            <input type="text" class="form-control" id="descripcionForm" name="descripcionForm" value="{$asignatura['descripcion']}">
          </div>
        {/foreach}
        <button type="submit" class="btn boton">Guardar cambios</button>
      </form>
    </div>
  {include file = "footer.tpl"}
  </body>
</html>
