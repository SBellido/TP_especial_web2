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
            <p><b>ID ASIGNATURA: </b>{$alumno['id_asignatura']}</p>
            <p><b>CONDICIÓN: <i><span>Regular</span></i></b></p>
          </li><br>
        {/foreach}
      </ul><br>
    </section>
    {if $Usuario!=="invitado"}
    <section class="container">
      <h4>Filtrar alumnos por asignatura</h4>
      <form action="mostrarAlumnosFiltro" method="post">
        <select name="filtroForm">
          {foreach from=$Asignatura item= asignatura}
            <option value="{$asignatura['id_asignatura']}">ID: {$asignatura['id_asignatura']} | {$asignatura['nombre']}</option>
          {/foreach}
        </select>
        <button class="boton btn">FILTRAR</button>
        <a class="btn boton" href="alumnos">VOLVER</a>
      </form>
      <br>
    {/if}
    </section>
  {include file = "footer.tpl"}
  </body>
</html>
