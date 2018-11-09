'use strict'

// template compilado
let templateComentarios;

// llamado ajax para traer el template de tareas (en Smarty seria el .tpl)
fetch('templates/comentarios.handlebars')
.then(response => response.text())
.then(template => {
    // compilo el template
    templateComentarios = Handlebars.compile(template);
    getComentarios();
});

function getComentarios() {
    fetch('api/comentarios')
}

function getComentariosOrdenados() {
    fetch('api/ordenarComentarios')
}

function renderComentarios(comentarios) {
    // creamos el contexto (assign de smarty)
    let context = {
        comentario: comentarios
    };
    let html = templateComentarios(context);
    document.querySelector("#container-comentarios").innerHTML = html;
}
