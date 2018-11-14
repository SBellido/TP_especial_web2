{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>
    <section class="container">
      <div class="row">
        <div class="col">
          <h6>Usuario conectado: "{$Usuario->nombre}"</h6>

          <h1>{$Titulo}</h1>
        </div>
        <div class="col"><br><br>
          <h4>Listar asignatura de docente</h4>
          <form action="mostrarAsignaturaFiltro" method="GET">
            <select class="" name="filtroForm">
              {foreach from=$Docentes item= docente}
                <option value="{$docente['id_docente']}">{$docente['nombre']}</option>
              {/foreach}
            </select>
            <button class="boton btn" type="submit">FILTRAR</button>
          </form>
        </div>
      </div>
    </section><br>
    <section class="container">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">ASIGNATURA</th>
            <th scope="col">DOCENTE</th>
            <th scope="col">DESCRIPCIÓN</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        {foreach from=$Asignaturas item= asignatura}
          <tbody>
            <tr>
              <td><b>{$asignatura['nombre']}</b></td>
              <td>{$asignatura['nombre_docente']}</td>
              <td>{$asignatura['descripcion']}</td>

              <td><a class="btn boton" href="detalleAsignatura/{$asignatura['id_asignatura']}">DETALLE</a></td>

              {if $Usuario->permisos =="admin"}
                <td><a class="btn boton" href="eliminarAsignatura/{$asignatura['id_asignatura']}">BORRAR</a></td>
                <td><a class="btn boton" href="editarAsignatura/{$asignatura['id_asignatura']}">EDITAR</a></td>
                {if $asignatura['cupo'] == 0 && $Usuario->permisos != "invitado"}
                  <td><a class="btn boton" href="cerrar/{$asignatura['id_asignatura']}">CERRAR CUPOS</a></td>
                {/if}
                {if $asignatura['cupo'] == 1}
                  <td><b><i>Completa</i></b></td>
                {else}
                  <td><b><i>Bancantes</i></b></td>
                {/if}
              {/if}
              </tr><tr>
              <td></td>
            </tr>
          {/foreach}
        </tbody>
      </table>
    </section><br><hr>
      {if $Usuario->permisos =="admin"}
    <section class="container"><br>
      <h2>AGREGAR ASIGNATURA</h2><br>

      <div class="row">
        <div class="col">
          <form method="post" action="agregarAsignatura">
            <div class="form-group">
              <label for="nombreForm">Asignatura</label>
              <input type="text" class="form-control" id="nombreForm" placeholder="Nombre de la asignatura" name="nombreForm">
            </div>
            <div class="form-group">
              <label for="descripcionForm">Descripción</label>
              <input type="text" class="form-control" id="descripcionForm" placeholder="Máximo 400 caracteres" name="descripcionForm">
            </div>
            <label for="descripcionForm">Docente</label><br>
            <select name="docenteForm">
              {foreach from=$Docentes item=docente}
                <option value="{$docente['id_docente']}">{$docente['nombre']}</option>
              {/foreach}
            </select>


            <div class="row">
              <div class="col">
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" name="cupoForm">
                  <label class="form-check-label">Cupo completo</label>
                </div><br>
              </div>
              <div class="col">
                <button type="submit" class="boton btn btn-info btn-block">CREAR ASIGNATURA</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col">
          <img src="{$Imagen}" alt="">
        </div>
      </section><br>
      {/if}

    {include file = "footer.tpl"}
  </body>
</html>
