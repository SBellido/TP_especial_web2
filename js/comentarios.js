document.addEventListener("DOMContentLoaded", function(e) {
  getComentarios();
  let btn = document.querySelector('#tpForm');
  btn.addEventListener('click', postearComentario);
});

function getComentarios() {
  fetch("api/comentarios")
  .then(response => response.json())
  .then(json => {
      mostrarComentarios(json);
    });
}

function mostrarComentarios(comentarios) {
  let contenedor = document.querySelector("#container-comentarios");
  for (let comentario of comentarios) {
    contenedor.innerHTML += "<p>"+comentario.comentario + "</p>";
  }
}

function postearComentario() {
  // let id_asignatura = document.querySelector('#id_asignatura').value;
  // let id_docente = document.querySelector('#id').value;
  // let texto = document.querySelector('#texto').value;
  // let valoracion = document.querySelector('#valoracion').value;

  let objetoComentario = {
    "comentario": {
      "id_asignatura": document.querySelector('#id_asignatura').value,
      "id_docente": document.querySelector('#id').value,
      "comentario": document.querySelector('#texto').value,
      "valoracion": document.querySelector('#valoracion').value,
    }
  };
   fetch("api/tpForm", {
     "method": POST,
     "headers": {
       'Content-Type': 'application/json'
     },
     "body": JSON.stringify(objetoComentario)
   })
   
}
