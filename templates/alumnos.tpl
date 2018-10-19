{include file = "header.tpl"}
{include file = "nav.tpl"}
<body>
  <section class="container">
    <h4>Usuario conectado: "{$Usuario}"</h4>
    <h1>{$Titulo}</h1><br>
    <div class="row">
      <div class="col">
        <form  action="alumnosPorAsignaturas" method="post">
          <button class="btn boton" type="submit" name="button">ORDENAR ID</button>
        </form><br><hr><br>
      </div>
      <div class="col">
        <h4>Filtrar alumnos por asignatura</h4>
        <form action="mostrarAlumnosFiltro" method="post">
          <select class="" name="filtroForm">
            {foreach from=$Asignatura item= asignatura}
            <option value="{$asignatura['id_asignatura']}">ID: {$asignatura['id_asignatura']} | {$asignatura['nombre']}</option>
            {/foreach}
          </select>
          <button class="boton btn" type="submit" name="button">FILTRAR</button>
        </form>
      </div>
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
                <td><a class="btn boton" href="eliminarAlumno/{$alumnos['id_alumno']}">ELIMINAR</a></td>
                <td><a class="btn boton" href="editarAlumno/{$alumnos['id_alumno']}">EDITAR</a></td>
              {/if}
              {if $alumnos['aprobado'] != 1 && $Usuario !== "invitado"}
                <td><a class="btn boton" href="aprobar/{$alumnos['id_alumno']}">APROBAR</a></td>
              {/if}
              {if $alumnos['aprobado'] == 1}
                <td><b><i>Aprobado</i></b></td>
              {/if}
            </tr>
          {/foreach}
        </tbody>
      </table>
    </section><br><hr><br>

    {if $Usuario !== "invitado"}
    <section class="container">
      <h2>AGREGAR ALUMNO</h2><br>
      <div class="row">
        <div class="col">
      <form method="post" action="agregarAlumno">
        <div class="form-group">
          <label for="nombreForm">Nombre del Alumno</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm">
        </div>
        <div class="form-group">
          <label for="emailForm">Email</label>
          <input type="email" class="form-control" id="emailForm" name="emailForm">
        </div>
        <div class="form-group">
          <label for="notaForm">Nota</label>
          <input type="text" class="form-control" id="notaForm" name="notaForm">
        </div>
        <div class="form-group">
          <label for="id_asignaturaForm">ID Asignatura</label>
          <input type="text" class="form-control" id="id_asignaturaForm" name="id_asignaturaForm">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="aprobarForm" name="aprobarForm">
          <label class="form-check-label" for="aprobarForm">Aprobar</label>
        </div><br>
          <button type="submit" class="btn boton">CREAR PERFIL</button>
      </form>
      </div>
      <div class="col">
        <img src="{$Imagen}" alt="">
      </div>
    </div>

    </section>
    {/if}
    <br>
  {include file = "footer.tpl"}
  </body>
</html>
