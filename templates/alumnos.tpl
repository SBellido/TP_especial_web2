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
        <h4>Listar alumnos de una asignatura</h4>
        <form action="mostrarAlumnosFiltro" method="GET">
          <select name="filtroForm">
            {foreach from=$Asignatura item= asignatura}
              <option value="{$asignatura['id_asignatura']}">{$asignatura['nombre']}</option>
            {/foreach}
          </select>
          <button class="boton btn" type="submit" >FILTRAR</button>
        </form>
    </div>
  </div>
  </section>
  <section class="container">
    <div class="col">
      <form  action="alumnosPorAsignaturas" method="post">
        <button class="btn boton" type="submit" name="button">ORDENAR ID</button>
      </form><br><br>
    </div>
  </section>

    <section class="container">
      <table class="table">
        <thead class="thead-light">
          <tr>
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
              <th>{$alumno['nombre']}</th>
              <td>{$alumno['email']}</td>
              <td>{$alumno['nota']}</td>
              {if $Usuario->permisos =="admin"}
                <td><a class="btn boton" href="eliminarAlumno/{$alumno['id_alumno']}">ELIMINAR</a></td>
                <td><a class="btn boton" href="editarAlumno/{$alumno['id_alumno']}">EDITAR</a></td>
              {/if}
              <td><a class="btn boton" href="mostrarDetalleAlumno/{$alumno['id_alumno']}">DETALLE</a></td>
              {if $alumno['aprobado'] == 1}
                <td><b><i>Aprobado</i></b></td>
                {else}
                <td><b><i>Regular</i></b></td>
              {/if}
              {if $alumno['aprobado'] == 0 && $Usuario->permisos != "invitado"}
                <td><a class="btn boton" href="aprobar/{$alumno['id_alumno']}">APROBAR</a></td>
              {/if}

            </tr>
          {/foreach}
        </tbody>
      </table>
    </section><br><hr><br>

    {if $Usuario->permisos!="invitado"}
      <section class="container">
        <h2>AGREGAR ALUMNO</h2><br>
        <div class="row">
          <div class="col">
        <form method="post" action="agregarAlumno">
          <div class="form-group">
            <label>Nombre del Alumno</label>
            <input type="text" class="form-control" name="nombreForm">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="emailForm">
          </div>
          <div class="form-group">
            <label>Nota</label>
            <input type="text" class="form-control" name="notaForm">
          </div>
          <select name="id_asignaturaForm">
            {foreach from=$Asignatura item= asignatura}
              <option value="{$asignatura['id_asignatura']}">{$asignatura['nombre']}</option>
            {/foreach}
          </select>

          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="aprobarForm">
            <label class="form-check-label">Aprobar</label>
          </div><br>
            <button type="submit" class="boton btn btn-info btn-block">CREAR PERFIL</button>
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
