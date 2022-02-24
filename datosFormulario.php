<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informacion</title>
</head>
<body>
<?php
$conn = new mysqli('localhost', 'root', '', 'veterinaria');

mysqli_query($conn, "INSERT INTO  informacion (primerNom,segundoNom,email,telefono,mensaje) values 
('$_REQUEST[primerNom]','$_REQUEST[segundoNom]','$_REQUEST[email]',$_REQUEST[telefono],'$_REQUEST[mensaje]')");



echo "El alumno fue dado de alta.";


?>
</body>
</html>