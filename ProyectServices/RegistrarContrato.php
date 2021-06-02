<?php
error_reporting(E_ALL ^ E_NOTICE);
/////////////////////Registrar Usuario
include("./ConexionDBTest.php");

$Doc_contrato = $_POST['Doc_contrato'];
$Nom_contrato = $_POST['Nom_contrato'];
$lugar_contrato = $_POST['lugar_contrato'];
$fecha_firma = $_POST['fecha_firma'];
$fecha_inicio = $_POST['fecha_inicio'];
$plazo_contrato = $_POST['plazo_contrato'];
$fecha_final = $_POST['fecha_final'];
$arc_contrato = $_POST['arc_contrato'];
$sis_contrato = $_POST['sis_contrato'];


//Consulta SQL
$sqlContrato= "INSERT INTO $valor2.contratos (id_usuario, id_empresa,nombre,clave,correo) VALUES ('$Id_usuario','$Id_empresa','$user_name','$user_pass','$user_email')";

//ejecutar pg_query
$resultContrato= pg_query($sqlContrato) or die ("Error Agregar Contrato".pg_last_error());

//Consulta SQL
//$sqlUser6= "INSERT INTO $Nom_empresa.usuarios (user_name,user_password) VALUES ('$user_name','$user_pass')";

//ejecutar pg_query
//$result6= pg_query($sqlUser6) or die ("Error AgregarCopia".pg_last_error());
?>
<!--<!DOCTYPE html>
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
</html>-->