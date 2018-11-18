{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>
    <section class="container">
      <div class="row">
        <div class="col">
          <h6>Usuario conectado: "{$Usuario->nombre}"</h6>
          {foreach from=$Asignatura item=indice}
          <h3>Asignatura: {$indice['nombre']}</h3>
        </div>
      </div>
    </section><br>
    <section class="container">
      <div class="row">
        <div class="col">
          <h5>Descripción</h5><hr>
          <p>{$indice['descripcion']}</p>
          <br>
        </div>
        <div class="col">
          <div id="container-comentarios">
          </div>
          <div class="col">
            {foreach from=$Imagen item=img}
              <img src="{$img['imagen']}" alt="{$img['descripcion']}" value="{$img['id_imagen']}">
              {if $Usuario->permisos == "admin"}
                <a class="btn boton" href="borrarImagen/{$img['id_imagen']}" name="id_img" >Borrar Imagen</a>
              {/if}
            {/foreach}
          </div>
        </div>
      </div>
    </section>
    {/foreach}
    <script src="js/comentarios.js" type="text/javascript"></script>
    <script src="js/handlebars-v4.0.12.js" type="text/javascript"></script>
    {include file = "footer.tpl"}
  </body>
</html>
