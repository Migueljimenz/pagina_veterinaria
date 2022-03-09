<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Actualizar informacion</title>

  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style/styleConsulta.css">
</head>

<body>

  <h1 class="text-center">Modificar Informacion</h1>

  <form action="update.php" method="post" role="form">

    <div class="form-group">
      <input type="text" class="form-control" name="buscador" placeholder="ingrese numero de cedula" required pattern="[0-9]{8,10}">
    </div>
    <button type="submit" class="btn btn-primary" name="buscar" id="botonBuscar">Buscar</button>
  </form>

  <br><br>

  <?php

  $server = "localhost";
  $user = "root";
  $passwords = "";
  $database = "veterinaria";

  $conn = mysqli_connect($server, $user, $passwords, $database) or
    die("Problemas con la conexión");

  $documento = $_REQUEST['doc_ident'];
  $primerNom = $_REQUEST['primerNom'];
  $segundoNom = $_REQUEST['segundoNom'];
  $primerApe = $_REQUEST['primerApe'];
  $segundoApe = $_REQUEST['segundoApe'];
  $telefono = $_REQUEST['telefono'];
  $email = $_REQUEST['email'];
  $tipo_consulta = $_REQUEST['tipo_consulta'];
  $mensaje = $_REQUEST['mensaje'];

  //codigo para buscar los datos de una tabla

  if (isset($_REQUEST['buscar'])) {
    $buscador = $_REQUEST['buscador'];

    $consulta = $conn->query("SELECT * FROM info WHERE doc_ident LIKE '$buscador'");

    while ($registro = $consulta->fetch_array()) {
      echo "<form action='update.php' method='post'>";
      echo "<label>Documento de Identidad : </label>";
      echo "<input type='text' class='form-control' value='" . $registro['doc_ident'] . "' name='doc_ident'  required>";
      echo "<br>";
      echo "<label>Primer nombre :</label>";
      echo "<input type='text' class='form-control'   value='" . $registro['primerNom'] . "' name='primerNom' pattern='[a-zA-Z ]{2,25}' title='solo se permiten letras' required>";
      echo "<br>";
      echo "<label>Segundo Nombre : </label>";
      echo "<input type='text' class='form-control'  value='" . $registro['segundoNom'] . "' name='segundoNom' pattern='[a-zA-Z ]{2,25}' title='solo se permiten letras'>";
      echo "<br>";
      echo "<label>Primer Apellido : </label>";
      echo "<input type='text' class='form-control' id='documento'  value='" . $registro['primerApe'] . "' name='primerApe' pattern='[a-zA-Z ]{2,25}' title='solo se permiten letras' required>";
      echo "<br>";
      echo "<label>Segundo Apellido : </label>";
      echo "<input type='text' class='form-control' value='" . $registro['segundoApe'] . "' name='segundoApe' pattern='[a-zA-Z ]{2,25}' title='solo se permiten letras' required>";
      echo "<br>";
      echo "<label>Telefono : </label>";
      echo "<input type='number' class='form-control'  value='" . $registro['telefono'] . "' name='telefono' pattern='[0-9]{10}' title='solo se permiten numeros' required>";
      echo "<br>";
      echo "<label>Email : </label>";
      echo "<input type='email' class='form-control' value='" . $registro['email'] . "' name='email' pattern='^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$' required>";
      echo "<br>";
      echo "<label>Tipo de solicitud : </label>";
      echo " <select name='tipo_consulta' id='input' class='form-control' required>
    <option selected='selected'>Seleccione una opcion :</option>
    <option value='Solicitud'>Solicitud</option>
    <option value='Reclamo'>Reclamo</option>
    <option value='Consulta'>Consulta</option>
  </select>";
      echo "<br>";
      echo "<label>Mensaje : </label>";
      echo "<textarea class='form-control' rows='3' name='mensaje' style='resize: none' id='mensaje' required>" . $registro['mensaje'] . "</textarea>";
      echo "<br></br>";
      echo "<button type='submit' class='btn btn-danger' name='actualizar'>Actualizar</button>";
    }
  }if(isset($_REQUEST['buscar']) && $consulta->num_rows == 0){
    echo "<script>alert('No se encontro el registro');</script>";
  }

  
  // codigo para actualizar los datos de una tabla
 /*  $result = mysqli_query($conn, "UPDATE info SET primerNom = '$primerNom', segundoNom = '$segundoNom', primerApe = '$primerApe', segundoApe = '$segundoApe', telefono = '$telefono', email = '$email', tipo_consulta = '$tipo_consulta', mensaje = '$mensaje' WHERE doc_ident = '$documento'") or die("Problemas al actualizar la informacion"); */
  

    if (isset($_REQUEST['actualizar'])) {
      $documento = $_REQUEST['doc_ident'];
      $primerNom = $_REQUEST['primerNom'];
      $segundoNom = $_REQUEST['segundoNom'];
      $primerApe = $_REQUEST['primerApe'];
      $segundoApe = $_REQUEST['segundoApe'];
      $telefono = $_REQUEST['telefono'];
      $email = $_REQUEST['email'];
      $tipo_consulta = $_REQUEST['tipo_consulta'];
      $mensaje = $_REQUEST['mensaje'];
  
      $result = mysqli_query($conn, "UPDATE info SET primerNom = '$primerNom', segundoNom = '$segundoNom', primerApe = '$primerApe', segundoApe = '$segundoApe', telefono = '$telefono', email = '$email', tipo_consulta = '$tipo_consulta', mensaje = '$mensaje' WHERE doc_ident = '$documento'") or die("Problemas al actualizar la informacion");
  
      echo "<script>alert('Registro actualizado');</script>";
      echo "<script>window.location='consulta.php';</script>";
    }
 $conn->close(); 
  ?>
</body>

</html>