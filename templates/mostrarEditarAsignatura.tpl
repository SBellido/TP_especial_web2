{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>
    <div class="container">
      <h6>Usuario conectado "{$Usuario->nombre}"</h6>
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
        <label>Seleccione un docente</label><br>
        <select name="docenteForm">
          {foreach from=$Docentes item=docente}
            <option value="{$docente['id_docente']}">{$docente['nombre']}</option>
          {/foreach}
        </select><br><br>
          {foreach from=$Asignatura item= asignatura}
            {if $asignatura['cupo'] == 1}
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" name="cupoForm">
                <label class="form-check-label">Abrir cupo</label>
              </div>
            {/if}
          {/foreach}
        <button type="submit" class="btn boton">Guardar cambios</button>
      </form>
    </div>
  {include file = "footer.tpl"}
  </body>
</html>
