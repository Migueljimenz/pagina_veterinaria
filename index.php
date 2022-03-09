<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dog Happy Vet</title>

  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,200&family=Roboto+Slab:wght@300&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="style/style.css" />
</head>

<body>

  <main class="container-fluid">
    <nav class="navbar navbar-default" role="navigation">

      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <img class="logo" alt="Dog Happy Vet" src="imagenes/logo vet.png" />
          </a>
        </div>
      </div>

      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse navbar-ex1-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav" id="info-nav">
          <li class="active" id="item1"><a href="index.html">Inicio<span class="sr-only">(current)</span></a></li>
          <li class="dropdown" id="item1">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false">Servicios<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Cuidado</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Alimentacion</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Vacunacion</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Desparasitacion</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Otros</a></li>
              <li role="separator" class="divider"></li>
            </ul>
          </li>
          <li id="item1"><a href="#">Quienes Somos</a></li>
          <li id="item1">
            <a data-toggle="modal" href='#modal-id'>Contactenos</a>
            <div class="modal fade" id="modal-id">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Informacion</h4>
                  </div>
                  <div class="modal-body">
                    <form action="formulario.php" method="post" id="formulario">
                      <div class="form-group">
                        <label>Documento de Identidad :</label>
                        <input type="number" class="form-control"  id ="documento" name="doc_ident" placeholder="Documento de Identidad" required>
                          <br>
                        <label>Primer Nombre :</label>
                        <input type="text" class="form-control" id="nombre1" name="primerNom" placeholder="primer nombre"  pattern="[a-zA-Z ]{2,25}" title="solo se permiten letras" required>
                        <br>
                      
                        <label>Segundo Nombre :</label>
                        <input type="text" class="form-control" id="nombre2" name="segundoNom" placeholder="segundo nombre"
                        pattern="[a-zA-Z ]{2,20}"
                        title="solo se permiten letras"">
                        <br>
                        <label>Primer Apellido :</label>
                        <input type="text" class="form-control" id="apellido1" name="primerApe" placeholder="primer apellido"  pattern="[a-zA-Z ]{2,250}"
                        title="solo se permiten letras" required>
                        <br>
                        <label>Segundo Apellido :</label>
                        <input type="text" class="form-control" id="apellido2" name="segundoApe" placeholder="segundo apellido"  pattern="[a-zA-Z ]{2,250}"
                        title="solo se permiten letras" required>
                        <br>
                        <label>Telefono :</label>
                        <input type="number" class="form-control" id="telefono" name="telefono" placeholder="telefono" pattern="[0-9]{10}" title="solo se permiten numeros" required>
                        <br>
                        <label>Email :</label>
                        <input type="email" class="form-control" id="email1" name="email" placeholder="digite su email" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
                        <br>
                        <label>Tipo de Solicitud :</label>
                        <select name="tipo_consulta" id="input" class="form-control" required="required">
                          <option selected="selected">Seleccione una opcion :</option>
                          <option value="Solicitud">Solicitud</option>
                          <option value="Reclamo">Reclamo</option>
                          <option value="Consulta">Consulta</option>
                        </select>
                        <br>
                        <label>Mensaje :</label>
                        <textarea class="form-control" rows="3" name="mensaje" placeholder="digite su mensaje" style="resize: none"
                          id="mensaje" required></textarea>
                      </div>
                      <input type="submit" class="btn btn-primary"  value="enviar" id="enviar" />
                      <input type="reset" class="btn btn-danger" value="Eliminar formulario" id="eliminar" />
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <div>
      <div class="row">
        <div id="imagen-inicio" class="carousel slide col-md-6" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#imagen-inicio" data-slide-to="0" class=""></li>
            <li data-target="#imagen-inicio" data-slide-to="1" class=""></li>
          </ol>
          <div class="carousel-inner">
            <div class="item">
              <img src="imagenes/medicine-g8b952085d_640.jpg" alt="imagen" id="img-slider">
            </div>
            <div class="item active">
              <img src="imagenes/dog-g9c8df73ef_640.jpg" alt="imagen" id="img-slider">
            </div>
          </div>
          <a class="left carousel-control" href="#imagen-inicio" data-slide="prev"><span
              class="glyphicon glyphicon-chevron-left"></span></a>
          <a class="right carousel-control" href="#imagen-inicio" data-slide="next"><span
              class="glyphicon glyphicon-chevron-right"></span></a>
        </div>

        <div class="col-md-6" id="message-welcome">
          <h1 class="text-center" id="title">Bienvenido a Dog Happy Vet</h1>
          <p class="text-center">
            Dog Happy Vet es una veterinaria que ofrece servicios de salud a sus mascotas, con una amplia experiencia en
            el sector.
          </p>
          <p class="text-center">
            Nuestra veterinaria cuenta con un equipo de profesionales altamente calificados, que brindan un servicio
            integral, con una atencion personalizada y de calidad.
          </p>
        </div>
        <div class="container" id="img-service">
          <div class="img-responsive col-md-3" id="img-1">
            <h3 id="text-service">Odontologia</h3>
            <a href="#">
              <img src="imagenes/imagen-3.1-odontologia.jpg" alt="Imagen" class="img-responsive" alt="imagen"
                id="imagen-inicio">
            </a>
          </div>
          <div class="img-responsive col-md-3" id="img-1">
            <h3 id="text-service">Peluqueria</h3>
            <a href="#">
              <img src="imagenes/peluqueria-canina.jpg" alt="Imagen" class="img-responsive" alt="imagen"
                id="imagen-inicio">
            </a>
          </div>
          <div class="img-responsive col-md-3" id="img-1">
            <h3 id="text-service">Salud y bienestar</h3>
            <a href="#">
              <img src="imagenes/salud y bienestar.jpg" alt="Imagen" class="img-responsive" alt="imagen"
                id="imagen-inicio">
            </a>
          </div>
          <div class="img-responsive col-md-3" id="img-1">
            <h3 id="text-service">Alimentacion</h3>
            <a href="#">
              <img src="imagenes/alimentacio y desarrollo.jpg" alt="Imagen" class="img-responsive" alt="imagen"
                id="imagen-inicio">
            </a>
          </div>
        </div>
        <div class="thumbnail-container">
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="imagenes/bienestar-fisico.jpeg" alt="bienestar fisico" id="thumbnail-1">
              <div class="caption">
                <h3 class="text-center">Bienestar Fisico</h3>
                <p>Para que tu mascota y tú disfrutéis al máximo de vuestra relación, necesita estar saludable y en
                  plena
                  forma. Nosotros estamos comprometidos en el mantenimiento y recuperación del estado de salud y calidad
                  de
                  vida que se merece.</p>
                <p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="thumbnail">
              <img src="imagenes/bienestar-mental.jpg" alt="Bienestar mental" id="thumbnail-2">
              <div class="caption">
                <h3 class="text-center">Bienestar Mental</h3>
                <p>La relación con tu mascota es única y especial. Nosotros te ayudamos a mantenerla y fortalecerla. Al
                  entender las expresiones de tu mascota y aprender que le motiva, podras conectar con ella a un nuevo
                  nivel
                  y construir una relación de confianza.</p>
                <p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail ">
              <img src="imagenes/medicina-individualizada.jpg" alt="atencion medica" id="thumbnail-3">
              <div class="caption">
                <h3 class="text-center">Medicina Individualizada</h3>
                <p>Tu mascota es única para ti, y también lo es para nosotros. Personalizamos nuestros planes de salud
                  según
                  sus necesidades. Los cuidados preventivos y la detección precoz es la mejor manera de evitar y
                  detectar
                  las enfermedades.</p>
                <p>
              </div>
            </div>
          </div>
        </div>

        <div class="well col-md-5" id="map-iframe">
          <h2 id="title-iframe">Encuentranos</h2>
          <p id="description-iframe">Estamos Ubicados en algun lugar del mapa, suerte al momento de encontrarnos</p>
          <p>
            <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
              src="https://maps.google.com/maps?width=300px&amp;height=400px&amp;hl=es&amp;q=barranquilla+(Mi%20nombre%20de%20egocios)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                href="https://www.gps.ie/">sport gps tracker</a></iframe>
        </div>
        <div class="well col-md-5" id="list-redes">
          <h2 id="title-redes">Redes Sociales</h2>
          <p id="info-redes">Siguenos en nuestras redes sociales para estar al tanto de nuestras novedades y
            promociones.</p>
          <div class=" list-redes text-center">
            <a href="https://twitter.com/?lang=es" target="_blank">
              <img src="imagenes/logo-twitter.png" alt="Twitter" id="logo-img-2">
            </a>
            <a href="https://www.facebook.com/" target="_blank">
              <img src="imagenes/logo-facebook.png" alt="Facebook" id="logo-img-1">
            </a>
            <a href="https://www.instagram.com/" target="_black">
              <img src="imagenes/logo-instagram.png" alt="Instagram" id="logo-img-3">
            </a>
          </div>
        </div>
  </main>

  <div class="panel panel-default" id="footer">
    <div class="panel-body">
      <div class="logo-vet col-md-3">
        <a href="index.html">
          <img src="imagenes/logo vet.png" alt="logo-vet" id="logo-vet">
        </a>
      </div>
      <div class="col-md-6" id="info-vet">
        <h3 class="text-center" id="title-footer">Pide tu Cita</h3>
        <p>
          <img src="imagenes/698telephone_100777.png" alt="celular" id="telephone-icon">
          <span id="phone-number">+57 300 890 000</span>
        </p>
        <p>
          <img src="imagenes/698telephone_100777.png" alt="celular" id="telephone-icon">
          <span id="phone-number">+57 302 134 567</span>
        </p>
      </div>
      <div class="informacion">
        <h3>direccion</h3>
        <p>Calle 1 # 1-1</p>
        <p>Barranquilla, Colombia</p>
        <a href="">
          <img src="imagenes/4202011emailgmaillogomailsocialsocialmedia-115677_115624.png" alt="email"
            id="telephone-icon">
          <span id="email">doghappyvet@correo.com</span>
        </a>
      </div>
    </div>
  </div>



  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Bootstrap JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="code/code.js"></script>
  
</body>

</html>