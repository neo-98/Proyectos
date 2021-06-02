<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registrar Contrato</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container"> 
  <h2 align="center">Crear nuevo contarto</h2><br/>
  <h5>Ingrese los datos correspondientes:</h5>
  </div>
<br/>
<div class="container">
    <form class="form-inline" action="RegistrarContrato.php" method="post" name="frm2">
        <output>ID del Contrato:</output><br/>
        <input type="number" name="Doc_contrato"/>
                <output>Nombre del Contrato:</output><br/>
                <input type="text" name="Nom_contrato"/>
                <output>Lugar del Contrato:</output><br/>
                <input type="text" name="lugar_contrato"/>
                <output>Fecha_firma del Contrato:</output><br/>
                <input type="date" name="fecha_firma"/>
                <output>Lugar del Contrato:</output><br/>
                <input type="date" name="fecha_inicio"/>
                <output>Plazo del Contrato:</output><br/>
                <input type="text" name="plazo_contrato"/>
                <output>Fecha_final del Contrato:</output><br/>
                <input type="text" name="fecha_final"/>
                <output>arc del Contrato:</output><br/>
                <input type="text" name="arc_contrato"/>
                <output>sis del Contrato:</output><br/>
                <input type="text" name="sis_contrato"/>
        <br/><br/>
<br/>        <input type="submit" value="Enviar"/><br/> <br/> 
<a href="Login.php">Cerrar Sesion</a>
    </form>
    </div>
</body>
</html>

