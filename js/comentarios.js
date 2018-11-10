document.addEventListener("DOMContentLoaded", function(e) {
  getComentarios();
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
