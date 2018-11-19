{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>
    <section class="container">
      <div class="row">
        <div class="col">
          <h6>Usuario conectado: "{$Usuario->nombre}"</h6>
          {foreach from=$Asignatura item=indice}
          <h3>{$indice['nombre']}</h3>
        </div>
      </div>
    </section><br>
    <section class="container">
      <div class="row">
        <div class="col">
          <h5>Descripción</h5><hr>
          <p>{$indice['descripcion']}</p>
          <br>
          {if $Usuario->permisos =="admin"}
            <td><a class="btn boton" href="eliminarAsignatura/{$indice['id_asignatura']}">ELIMINAR</a></td>
            <td><a class="btn boton" href="editarAsignatura/{$indice['id_asignatura']}">EDITAR</a></td>
          {/if}
          {/foreach}
        </div><br><hr>
        <div class="col">
          <!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{$img['imagen']}" alt="{$img['descripcion']}" value="{$img['id_imagen']}">
              </div>
              <div class="carousel-item">
                <img src="{$img['imagen']}" alt="{$img['descripcion']}" value="{$img['id_imagen']}">
              </div>
              <div class="carousel-item">
                <img src="{$img['imagen']}" alt="{$img['descripcion']}" value="{$img['id_imagen']}">
              </div>
            </div>
          </div> -->
          {foreach from=$Imagen item=img}
            <img src="{$img['imagen']}" alt="{$img['descripcion']}" value="{$img['id_imagen']}">
            {if $Usuario->permisos == "admin"}
              <br><a class="btn boton" href="borrarImagen/{$img['id_imagen']}" name="id_img">ELIMINAR</a>
            {/if}
          {/foreach}
        </div>
      </div><hr>
    </section>
    <section class="container">
      <div class="row">
        <div class="col" id="container-comentarios">
          <h3>Trabajos Prácticos</h3>
        </div>
        <div class="col">
          <h3>Generar Trabajo Práctico</h3>
          {foreach from=$Asignatura item=indice}
          <form class="" action="api/tpForm" method="POST">
            <input type="hidden" name="id_asignatura" value="{$indice['id_asignatura']}">
            <label for="">Ingresar TP</label>
            <textarea name="txtTpForm" rows="8" cols="80"></textarea>
            <div class="input-group mb-3">
              <select class="custom-select" id="inputGroupSelect02" name="valorTpForm">
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
            <button type="submit" class="boton btn btn-info btn-block">CREAR TRABAJO PRACTICO</button>
            <!-- <br><a class="btn boton" href="api/comentarios/{$indice['id_asignatura']}">ENVIAR TP</a> -->
          </form>
          {/foreach}
        </div>
      </div>

    </section>
    <script src="js/comentarios.js" type="text/javascript"></script>
    <script src="js/handlebars-v4.0.12.js" type="text/javascript"></script>
    {include file = "footer.tpl"}
  </body>
</html>
