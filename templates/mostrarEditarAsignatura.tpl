{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>
    <section class="container">
      <div class="row">
        <div class="col">
          <h6>Usuario conectado "{$Usuario->nombre}"</h6>
          <h1>{$Titulo}</h1>
          <form method="POST" action="editarAsignatura/{$Asignatura[0]['id_asignatura']}" enctype="multipart/form-data">
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
            <div class="custom-file">
              <input multiple type="file" class="custom-file-input" id="imgForm" name="imgForm">
              <label class="custom-file-label" for="imgForm">Seleccionar Archivo</label>
            </div><br>
            <div class="form-group">
              <label for="descImgForm">Descripcion de la imagen</label>
              <input type="text" class="form-control" id="descImgForm" name="descImgForm">
            </div>
            <button type="submit" class="btn boton">Guardar cambios</button>
          </form>
        </div>
        <div class="col">

        </div>
      </div>
    </section>
  {include file = "footer.tpl"}
