<?php
/////////////////////Registrar Usuario
include("./ConexionDBTest.php");
$Id_usuario = $_POST['Id_usuario'];
$user_name = $_POST['user_name'];
$user_pass = $_POST['user_pass'];
$user_email = $_POST['user_email'];
$Id_empresa = $_POST['Id_empresa'];
//$Nom_empresa = $_POST['nom_empresa'];


//Consulta SQL
$sqlUser3= "INSERT INTO usuarios (id_usuario, id_empresa,nombre,clave,correo) VALUES ('$Id_usuario','$Id_empresa','$user_name','$user_pass','$user_email')";

//ejecutar pg_query
$result= pg_query($sqlUser3) or die ("Error Agregar".pg_last_error());

//Consulta SQL
//$sqlUser6= "INSERT INTO $Nom_empresa.usuarios (user_name,user_password) VALUES ('$user_name','$user_pass')";

//ejecutar pg_query
//$result6= pg_query($sqlUser6) or die ("Error AgregarCopia".pg_last_error());
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Regresar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container"> 
  <h2 align="center">Resultado</h2><br/>
  </div>
<br/>
<div class="container">
    <form class="form-inline" action="RegistrarEmpresa.php" method="post" name="frm">
        <h1>REGISTRO EXITOSO</h1>
        <a href="Login.php">Regresar</a><br/>
    </form>
    </div>
</body>
</html>