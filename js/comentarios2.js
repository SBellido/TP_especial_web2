// 'use strict'

// document.querySelector('#btn_comentario').addEventListener(event => {
//   event.preventDefault();
//   getComentarios();
// });
document.addEventListener("DOMContentLoaded", function(event) {
  getComentarios();
});
function cargarComentarios() {
  fetch("api/comentarios")
  .then(response => response.json())
  .then(comentariosJSON => {
    document.querySelector('#container-comentarios').innerHTML = "";
    for(const comentario of comentariosJSON) {
      document.querySelector('#container-comentarios').append(crearComentario(comentario));
    }
  })
  .catch(function() {
    document.querySelector('#container-comentarios').append('<p>Esta asignatura no tiene Trabajos Prácticos asignados</p>');
  });
}
// template compilado
let templateComentarios;

// llamado ajax para traer el template de comentarios (en Smarty seria el .tpl)
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

function crearComentario(comentario){
   var element = '<td id="comentario' + comentario.id_comentario + '"class="list-group-item">'
   if(comentario.completado == 1)
     element += '<s>' + comentario.titulo + '</s>';
   else
     element += comentario.titulo;
   element += '<a href="borrarComentario/' + comentario.id_comentario + '"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
   element += '<a href="finalizarComentario/' + comentario.id_comentario + '"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>'
   element += '</td';
   return element;
 }
