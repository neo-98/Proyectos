<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registrar Empresa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container"> 
  <h2 align="center">Crear nuevo Usuario</h2><br/>
  <h5>Ingrese los datos correspondientes:</h5>
  </div>
<br/>
<div class="container">
    <form class="form-inline" action="Registrar Usuario.php" method="post" name="frm2">
        <output>ID del Usuario:</output><br/>
        <input type="number" name="Id_usuario"/>
        <output>ID de la empresa:</output><br/>
        <input type="number" name="Id_empresa"/>
        <output>Nombre de Usuario:</output><br/>
        <input type="text" name="user_name"/>
        <output>Contraseña:</output><br/>
        <input type="text" name="user_pass"/>
        <output>Correo:</output><br/>
        <input type="text" name="user_email"/>
        <!--        <output>Nombre de la empresa:</output><br/>
        //<input type="text" name="nom_empresa"/>-->
        <br/><br/>
<br/>        <input type="submit" value="Enviar"/><br/>  <br/>  
<a href="Login.php">Regresar</a>
    </form>
    </div>
</body>
</html>