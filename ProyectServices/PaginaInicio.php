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
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container"> 
  <h2 align="center">Iniciar sesion</h2><br/>
  <h5>Ingrese los datos correspondientes:</h5>
  </div>
<br/>
<div class="container">
    <form class="form-inline" action="RegistrarInicio.php" method="post" name="frm">
        <output>USUARIO:</output><br/>
        <input type="text" name="user_final"/>
        <output>CONTRASEÑA:</output><br/>
        <input type="password" name="pass_final"/>
        <br/><br/>
<br/>        <input type="submit" value="Enviar"/><br/><br/>
<a href="Empresa.php">Registrar Empresa</a><br/><br/>
<a href="Usuario.php">Registrar Usuario</a>
    </form>
    </div>
</body>
</html>
