
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consultas</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/styleConsulta.css">

  </head>
  <body>
    <h1 class="text-center">Consultar informacion</h1>

    
    <form action="consulta.php" method="post" role="form">
     
      <div class="form-group">
        <input type="text" class="form-control"  name="buscador" placeholder="ingrese numero de cedula">
      </div>
      <button type="submit" class="btn btn-primary" name ="buscar" id="botonBuscar">Buscar</button>
    </form>
<br><br>
    <?php

$conn = new  mysqli("localhost", "root", "", "veterinaria") or
  die("Problemas con la conexión");

if (isset($_REQUEST['buscar'])) {
  $buscador = $_REQUEST['buscador'];

  $consulta = $conn->query("SELECT * FROM info WHERE doc_ident LIKE '$buscador'");

  while ($registro = $consulta->fetch_array()) {
    echo "informacion de usuario";
    echo "<table border = '1'>";
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

    // echo "<tr>";
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
  }
} else {
  echo "No se encontraron resultados";
}

    ?>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
