{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>
    <div class="container">
      <h1>{$Titulo}</h1>
      <h2>Bienvenido "{$Usuario}" vos podés editar todas las listas</h2>
      {$Message}
      <button type="button" class="btn btn-primary">Primary</button>
      <button type="button" class="btn btn-secondary">Secondary</button>
      <button type="button" class="btn btn-success">Success</button>
      <button type="button" class="btn btn-danger">Danger</button>
      <button type="button" class="btn btn-warning">Warning</button>
      <button type="button" class="btn btn-info">Info</button>
      <button type="button" class="btn btn-light">Light</button>
      <button type="button" class="btn btn-dark">Dark</button>
      <button type="button" class="btn btn-link">Link</button>
    </div>
{include file = "footer.tpl"}
