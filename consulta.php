<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Consultas</title>

  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="style/styleConsulta.css" rel="stylesheet">

</head>

<body>
  <h1 class="text-center">Consultar informacion</h1>


  <form action="consulta.php" method="post" role="form">

    <div class="form-group">
      <input type="text" class="form-control" name="buscador" placeholder="ingrese numero de cedula" required pattern="[0-9]{8,10}">
    </div>
    <div class="botones">
      <button type="submit" class="btn btn-success" id="inicio"><a href="index.php">Inicio</a></button>
      <button type="submit" class="btn btn-primary" name="buscar" id="botonBuscar">Buscar</button>
      <button type="submit" class="btn btn-danger" name="eliminar" id="eliminar">Eliminar</button>
    </div>
    <hr>


  </form>
  <br><br>
  <?php

  $conn = new  mysqli("localhost", "root", "", "veterinaria") or
    die("Problemas con la conexión");

  // codigo para eliminar los datos de una tabla

  if (isset($_REQUEST['eliminar'])) { // si se presiona el boton eliminar
    $cedula = $_REQUEST['buscador']; // guardamos el valor de la cedula en la variable cedula
    $sql = "DELETE FROM info WHERE doc_ident = '$cedula'";
    $result = $conn->query($sql);
    if ($result) { // Si se ha eliminado correctamente
      echo "<script>alert('Cliente eliminado');</script>";
    } else {
      echo "<script>alert('Cliente no eliminado');</script>";
    }
  };


  // consulta para mostrar los datos de una tabla 
  if (isset($_POST['buscar'])) {
    $buscador = $_REQUEST['buscador'];

    $consulta = $conn->query("SELECT * FROM info WHERE doc_ident LIKE '$buscador'");

    while ($registro = $consulta->fetch_array()) {
      echo "<h2 class='text-center'>informacion de usuario</h2>";
      echo "<br>";
      echo "<table border = '1' id='tablaConsulta'>";
      echo "<tbody>";
      echo "<tr>";
      echo "<td>";
      echo "<label>";
      echo "documento de identidad :";
      echo "</label>";
      echo "<td>" . $registro['doc_ident'] . "</td>";
      echo "</td>";
      echo "</tr>";

      echo "<tr>";
      echo "<td>";
      echo "<label>";
      echo "Primer Nombre :";
      echo "</label>";
      echo "<td>" . $registro['primerNom'] . "</td>";
      echo "</td>";
      echo "</tr>";

      echo "<tr>";
      echo "<td>";
      echo "<label>";
      echo "Segundo Nombre :";
      echo "</label>";
      echo "<td>" . $registro['segundoNom'] . "</td>";
      echo "</td>";
      echo "</tr>";

      echo "<tr>";
      echo "<td>";
      echo "<label>";
      echo "Primer Apellido :";
      echo "</label>";
      echo "<td>" . $registro['primerApe'] . "</td>";
      echo "</td>";
      echo "</tr>";

      echo "<tr>";
      echo "<td>";
      echo "<label>";
      echo "Segundo Apellido :";
      echo "</label>";
      echo "<td>" . $registro['segundoApe'] . "</td>";
      echo "</td>";
      echo "</tr>";

      echo "<tr>";
      echo "<td>";
      echo "<label>";
      echo "Telefono :";
      echo "</label>";
      echo "<td>" . $registro['telefono'] . "</td>";
      echo "</td>";
      echo "</tr>";

      echo "<tr>";
      echo "<td>";
      echo "<label>";
      echo "Correo :";
      echo "</label>";
      echo "<td>" . $registro['email'] . "</td>";
      echo "</td>";
      echo "</tr>";

      echo "<tr>";
      echo "<td>";
      echo "<label>";
      echo "Tipo Consulta :";
      echo "</label>";
      echo "<td>" . $registro['tipo_consulta'] . "</td>";
      echo "</td>";
      echo "</tr>";

      echo "<tr>";
      echo "<td>";
      echo "<label>";
      echo "Mensaje:";
      echo "</label>";
      echo "<td>" . $registro['mensaje'] . "</td>";
      echo "</td>";
      echo "</tr>";
      echo "</tr>";
      echo "</tbody>";
      echo "</table>";
      echo "<br>";
     echo "<div class='botonesTabla'>";
     echo "<button type='submit' class='btn' id='nuevaconsulta'> ";
     echo "<a href='consulta.php'>Realizar nueva consulta</a>";
     echo "<script type='text/javascript'>";
     echo "alert('Consulta realizada con exito');";
     echo "</script>";
     echo "</button>";
     echo "  <button type='submit' class='btn' name='modificar' id='modificar'><a href='update.php'>
     Modificar
     </a></button>";
     echo "</div>";

      mysqli_close($conexion);
    };
  }
  if (isset($_REQUEST['buscar']) != $consulta->fetch_array()) {
    echo "<script type='text/javascript'>";
    echo "alert('No se encontro el usuario');";
    echo "</script>";
  };
  ?>

</body>

</html>