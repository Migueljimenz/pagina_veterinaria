
let eliminarForm = document.getElementById("formulario");
eliminarForm.addEventListener("reset", () => {
  let documento = document.getElementById("documento").value;
  let primerNom = document.getElementById("nombre1").value;
  let segundoNom = document.getElementById("nombre2").value;
  let apellido1 = document.getElementById("apellido1").value;
  let apellido2 = document.getElementById("apellido2").value;
  let email = document.getElementById("email1").value;
  let mensaje = document.getElementById("mensaje").value;


  let informacion = [
    documento,
    primerNom,
    segundoNom,
    apellido1,
    apellido2,
    email,
    mensaje,
  ];
  let filtro = informacion.filter((datos) => {
    return datos.length > 0;
  });
  if (filtro.length === 0) {
    alert("no hay informacion para eliminar");
  }
});

let imagen = document.getElementById("thumbnail-1");

$(document).ready(function () {
  let img0 = "imagenes/bienestar-fisico.jpeg";
  let img1 = "imagenes/bienestar-fisico2.jpg";
  let img2 = "imagenes/bienestar-fisico-3.jpg";

  let img = [img0, img1, img2]; //array de imagenes
  let i = 0; //contador de imagenes

  setInterval(function () {
    if (i == img.length) {
      i = 0; //si el contador llega al final, vuelve al principio
    }
    imagen.src = img[i]; //cambia la imagen
    i++; //incrementa el contador
  }, 4000); //cada 4 segundos
});

let imagen2 = document.getElementById("thumbnail-2");

$(document).ready(function () {
  let imag0 = "imagenes/bienestar-mental.jpg";
  let imag1 = "imagenes/bienestar-mental-2.png";
  let imag2 = "imagenes/bienestar-mental-3.jpg";

  let imagenes = [imag0, imag1, imag2];
  let img = 0;

  setInterval(function () {
    if (img == imagenes.length) {
      img = 0;
    }
    imagen2.src = imagenes[img];
    img += 1;
  }, 4000);
});

let imagen3 = document.getElementById("thumbnail-3");

$(document).ready(function () {
  let Img1 = "imagenes/medicina-individualizada.jpg";
  let Img2 = "imagenes/medicina-individualizada-2.jpg";
  let Img3 = "imagenes/medicina-individualizada-4.jpeg";

  let imagenes = [Img1, Img2, Img3];
  let img = 0;

  setInterval(function () {
    if (img == imagenes.length) {
      img = 0;
    }
    imagen3.src = imagenes[img];
    img += 1;
  }, 4000);
});
