{include file = "header.tpl"}
{include file = "nav.tpl"}
<body>
  <section class="container">
    <h4>Usuario conectado: "{$Usuario}"</h4>
    <h1>{$Titulo}</h1>
    <br>
    <a class="btn boton" href="alumnos">VOLVER</a><br><hr><br>
    </section>
      <section class="container">
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">ID ASIGNATURA</th>
              <th scope="col">ALUMNO</th>
              <th scope="col">EMAIL</th>
              <th scope="col">NOTA</th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            {foreach from=$Alumnos item= alumnos}
            <tr>
              <td scope="col">{$alumnos['id_asignatura']}</td>
              <th>{$alumnos['nombre']}</th>
              <td>{$alumnos['email']}</td>
              <td>{$alumnos['nota']}</td>
              {if $Usuario!=="invitado"}
              <td><a class="btn boton" href="eliminarAlumno/{$alumno['id_alumno']}">ELIMINAR</a></td>
              <td><a class="btn boton" href="editarAlumno/{$alumno['id_alumno']}">EDITAR</a></td>
              {/if}
              {if $alumnos['aprobado'] == 0 && $Usuario !== "invitado"}
              <td><a class="btn boton" href="aprobar/{$alumno['id_alumno']}">APROBAR</a></td>
              {/if}
              {if $alumnos['aprobado'] == 1}
              <td><b><i>Aprobado</i></b></td>
              {/if}
            </tr>
            {/foreach}
          </tbody>
        </table>
      </section><br><hr><br>
      <section class="container">
        {if $Usuario!=="invitado"}

        <h4>Filtrar alumnos por asignatura</h4>
        <form action="mostrarAlumnosFiltro" method="post">
          <select name="filtroForm">
            {foreach from=$Asignatura item= asignatura}
            <option value="{$asignatura['id_asignatura']}">ID: {$asignatura['id_asignatura']} | {$asignatura['nombre']}</option>
            {/foreach}
          </select>
          <button class="boton btn">FILTRAR</button>
        </form>
        <br>
        {/if}
      </section>
    </section>
  {include file = "footer.tpl"}
  </body>
</html>
