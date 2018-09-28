{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>

    <div class="container">
      <h1>{$Titulo}</h1>
      <ul class="list-group">
        {foreach from=$Asignaturas item= asignatura}
          {if $asignatura['terminada'] == 1}
            <li class="list-group-item"><s><p><b>NOMBRE:</b>{$asignatura['nombre']}<p><b>DESCRIPCIÓN:</b>{$asignatura['descripcion']}<p><b>DOCENTE:</b> {$asignatura['docente']}</s><a href="borrar/{$asignatura['id_asignatura']}"><br>BORRAR</a></li>
          {else}
            <li class="list-group-item"><p><b>NOMBRE:</b> {$asignatura['nombre']}<p><b>DESCRIPCIÓN:</b> {$asignatura['descripcion']}<p><b>DOCENTE:</b> {$asignatura['docente']}<br><a href="borrar/{$asignatura['id_asignatura']}">BORRAR</a> | <a href="terminada/{$asignatura['id_asignatura']}">TERMINAR</a></li>
          {/if}
        {/foreach}
      </ul>
    </div>


    <div class="container"><br>
      <h2>AGREGAR ASIGNATURA</h2>

      <form method="post" action="agregar">
        <div class="form-group">
          <label for="tituloForm">Nombre de la Asignatura</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripción</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm">
        </div>
        <div class="form-group">
          <label for="docenteForm">Docente</label>
          <input type="text" class="form-control" id="docenteForm" name="docenteForm">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="terminadaForm" name="terminadaForm">
          <label class="form-check-label" for="terminadaForm">Terminar</label>
        </div>
        <button type="submit" class="btn btn-primary">Crear Asignatura</button>
      </form>
    </div>
{include file = "footer.tpl"}
</body>
</html>
