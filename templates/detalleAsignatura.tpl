{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>
    <section class="container">
      <div class="row">
        <div class="col">
          <h6>Usuario conectado: "{$Usuario->nombre}"</h6>
          {foreach from=$Asignatura item=indice}
            <h3>Asignatura: {$indice['nombre']}</h3>
          {/foreach}
          {foreach from=$Docentes item=indice}
            <h5>Docente a cargo: {$indice['nombre_docente']}</h5><hr>
          {/foreach}
          <h5>Descripción</h5>
          <p>{$indice['descripcion']}</p>
          <br>
        </div>
      </div>
      {if $Usuario->permisos =="admin"}
      <td><a class="btn boton" href="eliminarAsignatura/{$indice['id_asignatura']}">ELIMINAR</a></td>
      <td><a class="btn boton" href="editarAsignatura/{$indice['id_asignatura']}">EDITAR</a></td>
      {/if}
    </section><br><hr>
    <section class="container">
      <div class="row">
        <div class="col">
          <h3>Galería de imágenes</h3>
          {foreach from=$Imagen item=img}
            <img src="{$img['imagen']}" alt="{$img['descripcion']}" value="{$img['id_imagen']}">
            {if $Usuario->permisos == "admin"}
              <br><a class="btn boton" href="borrarImagen/{$img['id_imagen']}" name="id_img">ELIMINAR</a>
            {/if}
          {/foreach}
        </div>
      </div><hr><br>
    </section>

    <section class="container">
      <div class="row">
        <div class="col" id="container-comentarios">
          <h3>Trabajos Prácticos</h3>
        </div>
        <div class="col">
          <h3>Crear Trabajo Práctico</h3>
          {foreach from=$Asignatura item=indice}

          <form class="" action="" method="POST">
            <input type="hidden" name="id_asignatura" id="id_asignatura" value="{$indice['id_asignatura']}">
            <input type="hidden" name="id" id="id" value="{$Usuario->id}">
            <label for="">Redactar Trabajo Práctico a continuación</label>
            <textarea name="txtTpForm" rows="8" cols="80" id="texto"></textarea>
            <div class="input-group mb-3">
              <select class="custom-select" id="valoracion" name="valorTpForm">
                <option selected>Elija una valoración...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <!-- <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect02">Valoración</label>
              </div> -->
            </div>
            <button type="submit" class="boton btn btn-info btn-block" id="tpForm">CARGAR TRABAJO PRACTICO</button>
            <!-- <br><a class="btn boton" href="api/comentarios/{$indice['id_asignatura']}">ENVIAR TP</a> -->
          </form>
          {/foreach}
        </div>
      </div>

    </section><br>
    <script src="js/comentarios.js" type="text/javascript"></script>
    <script src="js/handlebars-v4.0.12.js" type="text/javascript"></script>
    {include file = "footer.tpl"}
  </body>
</html>
