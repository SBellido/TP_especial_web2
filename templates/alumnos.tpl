{include file = "header.tpl"}
{include file = "nav.tpl"}
<body>
  <section class="container">
    <h4>Usuario conectado: "{$Usuario}"</h4>
    <h1>{$Titulo}</h1>
      <ul class="list-group">
        {foreach from=$Alumnos item= alumno}
          {if $alumno['aprobado'] == 1}

            <li class="list-group-item">
              <p><b>ALUMNO: </b>{$alumno['nombre']}</p>
              <p><b>ID ASIGNATURA: </b>{$alumno['id_asignatura']}</p>
              <p><b>CONDICIÓN: <i>Aprobado</i></b></p>
              <a class="btn boton" href="detalleAlumno/{$alumno['id_alumno']}">DETALLE</a>
              {if $Usuario!==invitado}
                <a class="btn boton" href="eliminarAlumno/{$alumno['id_alumno']}">ELIMINAR</a>
                <a class="btn boton" href="editarAlumno/{$alumno['id_alumno']}">EDITAR</a>
              {/if}
            </li>

          {else}
            <li class="list-group-item">
              <p><b>ALUMNO: </b>{$alumno['nombre']}</p>
              <p><b>ID ASIGNATURA: </b>{$alumno['id_asignatura']}</p>
              <p><b>CONDICIÓN: <i><span>Regular</span></i></b></p>
              <a class="btn boton" href="detalleAlumno/{$alumno['id_alumno']}">DETALLES</a>

          {if $Usuario!=="invitado"}
            <a class="btn boton" href="eliminarAlumno/{$alumno['id_alumno']}">ELIMINAR</a>
            <a class="btn boton" href="editarAlumno/{$alumno['id_alumno']}">EDITAR</a>
            <a class="btn boton" href="aprobar/{$alumno['id_alumno']}">APROBAR</a>
          {/if}

        {/if}
      {/foreach}
      </li>
    </ul><br><hr>
    {if $Usuario!=="invitado"}

    <article>
      <h4>Filtrar alumnos por asignatura</h4>
      <form class="" action="filtro" method="post">
        <select class="" name="filtroForm">
          {foreach from=$Asignatura item= asignatura}
            <option value="{$asignatura['id_asignatura']}">ID: {$asignatura['id_asignatura']} | {$asignatura['nombre']}</option>
          {/foreach}
        </select>
        <button class="boton btn" type="submit" name="button">FILTRAR</button>
      </form>
    </article><br><hr>

    <article class="container">
      <h4>Ver alumnos por asignatura</h4>
      <form  action="alumnosPorAsignaturas" method="post">
        <button class="btn boton" type="submit" name="button">Listar</button>
        </form>

    </article><br><hr>

    <article class="container"><br>
      <h2>AGREGAR ALUMNO</h2>
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
        </div>
        <button type="submit" class="btn boton">Crear Perfil de Alumno</button>
      </form>
    </article>

    {/if}
  </section>
  <br>
  {include file = "footer.tpl"}
  </body>
</html>
