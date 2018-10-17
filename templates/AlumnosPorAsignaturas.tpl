{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>
    <section class="container">
      <h4>Usuario conectado: "{$Usuario}"</h4>
      <h1>{$Titulo}</h1>
        <ul class="list-group">
          {foreach from=$Asignaturas item= asignaturas}
            <p>{$asignaturas['nombre']}<b> | ID ASIGNATURA: </b>{$asignaturas['id_asignatura']}</p>
          {/foreach}
          {foreach from=$Alumnos item= alumnos}
            <li class="list-group-item">
              <p><b>ALUMNO: </b>{$alumnos['nombre']}</p>
              <p><b>ID ASIGNATURA: </b>{$alumnos['id_asignatura']}</p>
              <p><b>CONDICIÓN: <i>Aprobado</i></b></p>
            </li><br>
          {/foreach}
        </ul>
        <div class="container">
          <a class="btn boton" href="alumnos">VOLVER</a>
        </div>
      </section>
    {include file = "footer.tpl"}
  </body>
</html>
