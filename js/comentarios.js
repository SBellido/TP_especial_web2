document.addEventListener("DOMContentLoaded", function(e) {
  getComentarios();
  let btn = document.querySelector('#tpForm');
  btn.addEventListener('click', postearComentario);
});

function getComentarios() {
  let id_asignatura = document.querySelector('#id_asignatura').value;
  setInterval(function(){
  let baseUrl = "http://localhost/TP_especial_web2/api/comentarios"
  let params = {
    "id_asignatura": id_asignatura
  };
  let searchParams = new URLSearchParams(params);
  let url = `${baseUrl}?${searchParams}`;
  fetch(url)
  .then(response => response.json())
  .then(comentarioJSON => {
      mostrarComentarios(comentarioJSON);
    });
  }, 2000);
}
//
// function getComentarios() {
//   setInterval(function(){
//   fetch("api/comentarios")
//   .then(response => response.json())
//   .then(comentarioJSON => {
//       mostrarComentarios(comentarioJSON);
//     });
//   }, 2000);
// }

function mostrarComentarios(comentarios) {
  let contenedor = document.querySelector("#container-comentarios");
  contenedor.innerHTML = '';
  for (let comentario of comentarios) {
    contenedor.innerHTML += "<p>"+comentario.comentario + "</p>";
  }
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
   // .then(r=> r.json()).then(texto => console.log(texto))

}
