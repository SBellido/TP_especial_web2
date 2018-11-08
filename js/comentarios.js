'use strict'

// template compilado
let templateTareas;

// llamado ajax para traer el template de tareas (en Smarty seria el .tpl)
fetch('js/templates/comentarios.handlebars')
.then(response => response.text())
.then(template => {
    // compilo el template
    templateComentarios = Handlebars.compile(template);
    getComentarios();
});

function getComentarios() {
    fetch('api/comentarios')
}

function renderComentarios(comentarios) {
    // creamos el contexto (assign de smarty)
    let context = {
        tasks: comentarios
    };
    let html = templateComentarios(context);
    document.querySelector("#container-comentarios").innerHTML = html;
}
