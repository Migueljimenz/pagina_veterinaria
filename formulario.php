<?php
$conexion = mysqli_connect("localhost", "root", "", "veterinaria") or
  die("Problemas con la conexión");

mysqli_query($conexion, "INSERT INTO info(doc_ident,primerNom,segundoNom,primerApe,segundoApe,telefono,email,tipo_consulta,mensaje) values ($_REQUEST[doc_ident],'$_REQUEST[primerNom]','$_REQUEST[segundoNom]','$_REQUEST[primerApe]','$_REQUEST[segundoApe]',$_REQUEST[telefono],'$_REQUEST[email]','$_REQUEST[tipo_consulta]','$_REQUEST[mensaje]')") or die("Problemas en el select" . mysqli_error($conexion));

mysqli_close($conexion);
echo "<script type='text/javascript'>
alert('mensaje enviado correctamente');
window.location.href = 'index.php'; //con esto redireccionamos a la pagina index.php
</script>"

?>

