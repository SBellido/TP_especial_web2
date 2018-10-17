{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>
    <section class="container">
      <h4>Usuario conectado: "{$Usuario}"</h4>
      <h1>{$Titulo}</h1>
        <ul class="list-group">
          {foreach from=$Asignaturas item= asignatura}
            <li class="list-group-item">
              <p><b>ASIGNATURA: </b>{$asignatura['nombre']}</p>
              <p><b>DESCRIPCIÓN: </b>{$asignatura['descripcion']}</p>
              <p><b>DOCENTE: </b>{$asignatura['docente']}</p>
              {if $Usuario!==invitado}
                <p><b>ID ASIGNATURA: </b>{$asignatura['id_asignatura']} (este número es único e irrepetible)</p>
                <a class="btn boton" href="eliminarAsignatura/{$asignatura['id_asignatura']}">BORRAR</a>
                <a class="btn boton" href="editarAsignatura/{$asignatura['id_asignatura']}">EDITAR</a>
                <a class="btn boton" href="listarAlumnos/{$asignatura['id_asignatura']}">LISTA DE ALUMNOS</a>
              {/if}
            </li><br>
          {/foreach}
        </ul>
      </section><hr><br>
      {if $Usuario!=="invitado"}
        <section class="container">
          <h2>AGREGAR ASIGNATURA</h2>
          <form method="post" action="agregarAsignatura">
            <div class="form-group">
              <label for="nombreForm">Asignatura</label>
              <input type="text" class="form-control" id="nombreForm" placeholder="Nombre de la asignatura" name="nombreForm">
            </div>
            <div class="form-group">
              <label for="descripcionForm">Descripción</label>
              <input type="text" class="form-control" id="descripcionForm" placeholder="Máximo 400 caracteres" name="descripcionForm">
            </div>
            <div class="form-group">
              <label for="docenteForm">Docente</label>
              <input type="text" class="form-control" id="docenteForm" placeholder="Nombre del docente a cargo" name="docenteForm">
            </div>
            <button type="submit" class="btn boton">Crear Asignatura</button>
          </form>
        </section><br>
      {/if}
      {include file = "footer.tpl"}
    </body>
</html>
