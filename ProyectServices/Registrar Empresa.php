<?php

///Registrar Empresa

include("./ConexionDBTest.php");
$IdEmpresa = $_POST['Id'];
$nombre = $_POST['Nombre'];
$Direccion = $_POST['Direccion'];

//echo $IdEmpresa."<br/>";
//echo $nombre."<br/>";
//echo $Direccion;


//Consulta SQL
$sql= "INSERT INTO empresas (id_empresa, nombre, direccion) VALUES ('$IdEmpresa','$nombre','$Direccion')";

//ejecutar pg_query
$result= pg_query($sql) or die ("Error Agregar".pg_last_error());

//Consulta SQLCU
$sqlUser= "CREATE USER $nombre PASSWORD '123456'";

//ejecutar pg_query
$resultUser= pg_query($sqlUser) or die ("Error Agregar".pg_last_error());

//Consulta SQL2
$sql2= "CREATE SCHEMA $nombre AUTHORIZATION $nombre";

//ejecutar pg_query
$result2= pg_query($sql2) or die ("Error Agregar2".pg_last_error());

//Consulta SQL3
$sql3= "CREATE TABLE $nombre.usuarios("
        . "user_id SERIAL PRIMARY KEY,"
        . "user_name VARCHAR(80)NOT NULL,"
        . "user_password VARCHAR(80)NOT NULL"
       . ")";

//ejecutar pg_query
$result3= pg_query($sql3) or die ("Error Agregar3".pg_last_error());

//Consulta SQL3
$sql4= "CREATE TABLE $nombre.contratos("
        . "id_doc SERIAL PRIMARY KEY,"
        . "nombre VARCHAR(80)NOT NULL,"
        . "lugar VARCHAR(80)NOT NULL,"
        . "fecha_firma DATE NOT NULL,"
        . "fecha_inicio DATE NOT NULL,"
        . "plazo VARCHAR(20)NOT NULL,"
        . "fecha_final DATE NOT NULL,"
        . "arc BOOLEAN NOT NULL,"
        . "sis VARCHAR(150)NOT NULL"
        . ")";

//ejecutar pg_query
$result4= pg_query($sql4) or die ("Error Agregar4".pg_last_error());

echo "Registro exitoso";

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