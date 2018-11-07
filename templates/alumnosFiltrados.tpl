{include file = "header.tpl"}
{include file = "nav.tpl"}
<body>

  <section class="container">
    <div class="row">
      <div class="col">
        <h6>Usuario conectado: "{$Usuario}"</h6>
        <h1>{$Titulo}</h1><br>
      </div>
      <div class="col"><br>
        <h4>Listar alumnos de una asignatura</h4>
        <form action="mostrarAlumnosFiltro" method="GET">
          <select class="" name="filtroForm">
            {foreach from=$Asignatura item= asignatura}
              <option value="{$asignatura['id_asignatura']}">{$asignatura['nombre']}</option>
            {/foreach}
          </select>
          <button class="boton btn" type="submit" >FILTRAR</button>
        </form><br>
      </div>
    </div>
  </section>
  <section class="container">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">ASIGNATURA</th>
          <th scope="col">ALUMNO</th>
          <th scope="col">EMAIL</th>
          <th scope="col">NOTA</th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        {foreach from=$Alumnos item= alumno}
          <tr>
            <td scope="col">{$alumno['nombre_asignatura']}</td>
            <th>{$alumno['nombre']}</th>
            <td>{$alumno['email']}</td>
            <td>{$alumno['nota']}</td>
            {if $Usuario!=="invitado"}
              <td><a class="btn boton" href="eliminarAlumno/{$alumno['id_alumno']}">ELIMINAR</a></td>
              <td><a class="btn boton" href="editarAlumno/{$alumno['id_alumno']}">EDITAR</a></td>
              <td><a class="btn boton" href="mostrarDetalleAlumno/{$alumno['id_alumno']}">DETALLE</a></td>
            {/if}
            {if $alumno['aprobado'] == 0 && $Usuario !== "invitado"}
              <td><a class="btn boton" href="aprobar/{$alumno['id_alumno']}">APROBAR</a></td>
            {/if}
            {if $alumno['aprobado'] == 1}
              <td><b><i>Aprobado</i></b></td>
              {else}
              <td><b><i>Regular</i></b></td>
            {/if}
          </tr>
        {/foreach}
        </tbody>
      </table>
    </section><br><br>
  </section>
  {include file = "footer.tpl"}
  </body>
</html>
