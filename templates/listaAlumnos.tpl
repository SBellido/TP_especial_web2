{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>
    <section class="container">
      <h4>Usuario conectado: "{$Usuario}"</h4>
      <h1>{$Titulo}</h1>
        <ul class="list-group">
          {foreach from=$Alumnos item= alumno}
            <li class="list-group-item">
              <p><b>ALUMNO: </b>{$alumno['nombre']}</p>
              {foreach from=$ID_Asignatura item = asignatura}
                <p><b>ID ASIGNATURA: </b>{$asignatura}</p>
              {/foreach}
              <p><b>CONDICIÓN: <i>Aprobado</i></b></p>
            </li>
          <br>
          {/foreach}
        </ul>
        <div class="container">
          <a class="btn boton" href="asignaturas">VOLVER</a>
        </div>
      </section>
    {include file = "footer.tpl"}
  </body>
</html>
