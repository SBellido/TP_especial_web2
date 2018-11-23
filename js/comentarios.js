document.addEventListener("DOMContentLoaded", function(e) {
  // let btnOrdenar = document.querySelector('#orden');
  // btnOrdenar.addEventListener('click', getComentariosOrdenados);
  let btn = document.querySelector('#tpForm');
  if (btn) {
    btn.addEventListener('click', postearComentario);
  }
 // compila y prepara el template
  getComentarios();
});

let baseUrl = "http://localhost/TP_especial_web2/api/comentarios";

// function getComentariosOrdenados() {
//   if(valoracion) {
//
//     // ComentariosValoracion($id_asignatura,$orden);
//     console.log(valoracion);
//   }
// }

let id_asignatura = document.querySelector('#id_asignatura').value;
let params = {
  "id_asignatura": id_asignatura
};
let searchParams = new URLSearchParams(params);

function getComentarios() {
  // let valoracion = document.querySelector('#valoracion').value;
  setInterval(function(){
    let ordenar = document.getElementById('orden').value;
    if (ordenar) {
      if (ordenar == 1) {
        var seleccion = "asc";
      }
      if (ordenar == 0) {
        var seleccion = "desc";
      }
      let request = "ordenar=" + seleccion;
      let url = `${baseUrl}?${searchParams}&${request}`;
      fetch(url)
      .then(response => response.json())
      .then(comentarioJSON => {
        mostrarComentarios(comentarioJSON);
      });

    } else {
    let url = `${baseUrl}?${searchParams}`;
    fetch(url)
    .then(response => response.json())
    .then(comentarioJSON => {
        mostrarComentarios(comentarioJSON);
      });
  }

}, 3000);
}


function mostrarComentarios(comentarios) {
  let usuario = document.querySelector('#permisos').value;
  let templateComentario;
  console.log(usuario);
  fetch('js/templates/comentarios.handlebars')
  .then(response => response.text())
  .then(template => {
    templateComentario = Handlebars.compile(template);
    let titulo = 'Valoración de este TP';
  let dato = { // como el assign de smarty
    texto: comentarios,
    // permisos: usuario
    permiso: usuario
  }
  let html = templateComentario(dato);
  let contenedor = document.querySelector("#container-comentarios");
  contenedor.innerHTML = html;
  document.querySelectorAll(".borrar").forEach(function(boton) {
    boton.addEventListener('click', e => borrarComentario(boton.dataset.identificador));
  })
  });

}

function borrarComentario(id_comentario) {
  let url = `${baseUrl}/${id_comentario}`;
  fetch(url, {
    "method": 'DELETE',
    "headers": {
      'Content-Type': 'application/json'
    },
  })
}
function postearComentario(e) {
    e.preventDefault();
    let objetoComentario = {
    "comentario": {
      "id_asignatura": document.querySelector('#id_asignatura').value,
      "id_docente": document.querySelector('#id').value,
      "comentario": document.querySelector('#texto').value,
      "valoracion": document.querySelector('#valoracion').value,
    }
  };
   fetch("api/comentarios", {
     "method": 'POST',
     "headers": {
       'Content-Type': 'application/json'
     },
     "body": JSON.stringify(objetoComentario)
   })
}
