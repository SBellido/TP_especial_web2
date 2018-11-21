document.addEventListener("DOMContentLoaded", function(e) {
  getComentarios();
  let btn = document.querySelector('#tpForm');
  btn.addEventListener('click', postearComentario);
});

function getComentarios() {
  setInterval(function(){
  fetch("api/comentarios")
  .then(response => response.json())
  .then(json => {
      mostrarComentarios(json);
    });
  }, 2000);
}

function mostrarComentarios(comentarios) {
  let contenedor = document.querySelector("#container-comentarios");
  contenedor.innerHTML = '';
  for (let comentario of comentarios) {
    contenedor.innerHTML += "<p>"+comentario.comentario + "</p>";
  }
}

function postearComentario() {
    let objetoComentario = {
    "comentario": {
      "id_asignatura": document.querySelector('#id_asignatura').value,
      "id_docente": document.querySelector('#id').value,
      "comentario": document.querySelector('#texto').value,
      "valoracion": document.querySelector('#valoracion').value,
    }
  };
   fetch("api/comentariosPOST", {
     "method": 'POST',
     "headers": {
       'Content-Type': 'application/json'
     },
     "body": JSON.stringify(objetoComentario)
   })

}
