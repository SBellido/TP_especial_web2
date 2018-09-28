{include file = "header.tpl"}
{include file = "nav.tpl"}
<div class="container">
  <h1>{$Titulo}</h1>
  <ul class="list-group">
    {foreach from=$Alumnos item= alumno}
      {if $alumno['aprobado'] == 1}
        <li class="list-group-item"><s><p><b>NOMBRE:</b>{$alumno['nombre']}<p><b>EMAIL:</b>{$alumno['email']}<p><b>NOTA:</b> {$alumno['nota']}</s><a href="eliminar/{$alumno['id_alumno']}"><br>ELIMINAR</a></li>
          {else}
        <li class="list-group-item"><p><b>NOMBRE:</b> {$alumno['nombre']}<p><b>EMAIL:</b> {$alumno['email']}<p><b>NOTA:</b> {$alumno['nota']}<br><a href="eliminar/{$alumno['id_alumno']}">ELIMINAR</a> | <a href="aprobar/{$alumno['id_alumno']}">APROBAR</a></li>
      {/if}
    {/foreach}
  </ul>
</div>


<div class="container"><br>
  <h2>AGREGAR ALUMNO</h2>

  <form method="post" action="enlistar" >
    <div class="form-group">
      <label for="tituloForm">Nombre del Alumno</label>
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
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="aprobarForm" name="aprobarForm">
      <label class="form-check-label" for="aprobarForm">Aprobar</label>
    </div>
    <button type="submit" class="btn btn-primary">Crear Perfil de Alumno</button>
  </form>
</div>
{include file = "footer.tpl"}
