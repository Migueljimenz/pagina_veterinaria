let formulario = document.getElementById("formulario");

formulario.addEventListener("submit", () => {
  let nombre1 = document.getElementById("nombre1").value;
  let nombre2 = document.getElementById("nombre2").value;
  let email = document.getElementById("email1").value;
  let telefono = document.getElementById("telefono").value;
  let mensaje = document.getElementById("mensaje").value;
  let expresionNombre = /^[a-zA-Z]*$/;
  let expresion2 = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/; // Expresion regular para validar el email
  let expresion3 = /^[0-9]{10}$/; // Expresion regular para validar el telefono

  if (
    nombre1 === "" ||
    nombre2 == null ||
    email === "" ||
    telefono === "" ||
    mensaje === ""
  ) {
    alert("todos los campos son obligatorios");
    return false;
  } else if (!expresionNombre.test(nombre1 || nombre2)) {
    alert("El nombre no es valido");
    return false;
  } else if (!expresion2.test(email)) {
    alert("correo invalido");
    return false;
  } else if (!expresion3.test(telefono)) {
    alert("numero de celular no valido");
    return false;
  } else {
    alert("mensaje enviado con exito");
    function eliminar() {
      formulario.reset();
    }
    eliminar();
    return false;
  }
});

let eliminarForm = document.getElementById("formulario");

eliminarForm.addEventListener("reset", () => {
  let primerNom = document.getElementById("nombre1").value;
  let segundoNom = document.getElementById("nombre2").value;
  let email2 = document.getElementById("email1").value;
  let telefono2 = document.getElementById("telefono").value;
  let mensaje2 = document.getElementById("mensaje").value;

  let informacion = [primerNom,segundoNom, email2, telefono2, mensaje2];
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