{include file = "header.tpl"}
{include file = "nav.tpl"}
<body>
  <section class="container">
    <h4>Usuario conectado: "{$Usuario}"</h4>
    <h1>{$Titulo}</h1>
    <ul class="list-group">
      {foreach from=$Alumno item= alumno}
        <li class="list-group-item">
          <p><b>ALUMNO: </b>{$alumno['nombre']}</p>
          <p><b>EMAIL: </b>{$alumno['email']}</p>
          <p><b>NOTA: </b>{$alumno['nota']}</p>
          <p><b>ID ASIGNATURA: </b>{$alumno['id_asignatura']}</p>
          <p><b>CONDICIÓN: <i>Aprobado</i></b></p>
          <a class="btn boton" href="alumnos">VOLVER</a>
        </li><br>
      {/foreach}
    </ul><br>
  </section>
  <br>
  {include file = "footer.tpl"}
  </body>
</html>
