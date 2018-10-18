{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>
    <section class="container">
      <h4>Usuario conectado: "{$Usuario}"</h4>
      <h1>{$Titulo}</h1><br>
        <a class="btn boton" href="alumnos">VOLVER</a><hr><br>
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">ID ASIGNATURA</th>
            <th scope="col">ALUMNO</th>
            <th scope="col">EMAIL</th>
            <th scope="col">NOTA</th>
            <th scope="col">CONDICIÓN</th>
          </tr>
        </thead>
        {foreach from=$Alumnos item= alumnos}
          <tbody>
            <tr>
              <td><b>{$alumnos['id_asignatura']}</b></td>
              <th>{$alumnos['nombre']}</th>
              <td>{$alumnos['email']}</td>
              <td>{$alumnos['nota']}</td>
              {if $alumnos['aprobado'] == 1}
                <td><b><i>Aprobado</i></b></td>
              {else}
                <td><b><i>Regular</i></b></td>
              {/if}
            </tr>
          </tbody>
        {/foreach}
      </table>

    </section><br>
    {include file = "footer.tpl"}
  </body>
</html>
