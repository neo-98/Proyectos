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
  <h2 align="center">Contratos:</h2><br/>
  </div>
<br/>
<div class="container">
    <form class="form-inline" action="RealizarLogeo.php" method="post" name="frm2">
        <?php

include("./ConexionDBTest.php");
error_reporting(E_ALL ^ E_NOTICE);
//$nom_user="";
//$password="";


//header("Location: SegundoLogin.php?valor2=$valor2");

if (!file_exists("credencial.txt")){
    $nom_user = $_POST['user'];
    $password = $_POST['pass'];
}else {
$usuario = $_GET['usuario'];
$contrasena = $_GET['contrasena'];
}



//$nomEmpresa = $_POST['nomEmpresa'];

//echo $IdEmpresa."<br/>";
//echo $nombre."<br/>";
//echo $Direccion;
if (!file_exists("credencial.txt")){
if((!$nom_user) || (!$password) /*|| (!$nomEmpresa)*/){
    echo "Por favor, todos campos deben tener informacion! <br /><br />";

}else{
   $sql= "SELECT * FROM usuarios WHERE nombre= '$nom_user' AND clave= '$password'";
   //ejecutar pg_query
   $result= pg_query($sql) or die ("Error Logeo".pg_last_error());
   //////////////////////////
      
   $sql8= "SELECT id_empresa FROM usuarios WHERE nombre= '$nom_user' AND clave= '$password'";
   //ejecutar pg_query
   $result8= pg_query($sql8) or die ("Error Busqueda".pg_last_error());
   $row2 = pg_fetch_array($result,null, PGSQL_ASSOC);
   $valor=$row2["id_empresa"];
   //echo $valor;
   
   ////////////////////////////
   $sql7= "SELECT nombre FROM empresas WHERE id_empresa='$valor'";
   //ejecutar pg_query
   $result7= pg_query($sql7) or die ("Error Logeo".pg_last_error());
      $row3 = pg_fetch_array($result7,null, PGSQL_ASSOC);
   $valor2=$row3["nombre"];
   echo "Nombre de la Empresa"."---->".$valor2;
   
    $file = fopen("credencial.txt", "w");

    fwrite($file, $nom_user . PHP_EOL);

    fwrite($file, $password . PHP_EOL);
    
        fwrite($file, $valor2 . PHP_EOL);
    echo "paso por crear";
    fclose($file);
   echo "El archivo no existe";
   
   ////////////////////////////
   $sql10= "SELECT * FROM $valor2.contratos";
   //ejecutar pg_query
   $result10= pg_query($sql10) or die ("Error Logeo".pg_last_error());
   ///////////////////////////////////// IMPRIMIR 
   
    echo "<ul>";
    while ($row = pg_fetch_array($result,null, PGSQL_ASSOC)){
    echo "<li><strong>".$row["nombre"].",".$row["correo"]."</li>";
    }
    echo "</ul>";
    
    
   /*          echo "<ul>";
    while ($row = pg_fetch_array($result10,null, PGSQL_ASSOC)){
    echo "<li><strong>".$row["lugar"]."</li>";
    }
    echo "</ul>";*/
    
    $sqlfinal= "SELECT * FROM usuarios";
   //ejecutar pg_query
   $resultfinal= pg_query($sqlfinal) or die ("Error ".pg_last_error());
    
    while($row4 = pg_fetch_array($result10,null, PGSQL_ASSOC)){
    echo'
        <tr>
            <td>'.$row4["id_doc"].'</td>
            <td>'.$row4["nombre"].'</td>
            <td>'.$row4["lugar"].'</td>
            <td>'.$row4["fecha_firma"].'</td>
            <td>'.$row4["fecha_inicio"].'</td>
            <td>'.$row4["plazo"].'</td>
            <td>'.$row4["fecha_final"].'</td>
        </tr>';

    }
}
}else{
   $sql= "SELECT * FROM usuarios WHERE nombre= '$usuario' AND clave= '$contrasena'";
   //ejecutar pg_query
   $result= pg_query($sql) or die ("Error Logeo".pg_last_error());
   //////////////////////////
      
   $sql8= "SELECT id_empresa FROM usuarios WHERE nombre= '$usuario' AND clave= '$contrasena'";
   //ejecutar pg_query
   $result8= pg_query($sql8) or die ("Error Busqueda".pg_last_error());
   $row2 = pg_fetch_array($result,null, PGSQL_ASSOC);
   $valor=$row2["id_empresa"];
   echo $valor;
   
   ////////////////////////////
   $sql7= "SELECT nombre FROM empresas WHERE id_empresa='$valor'";
   //ejecutar pg_query
   $result7= pg_query($sql7) or die ("Error Logeo".pg_last_error());
      $row3 = pg_fetch_array($result7,null, PGSQL_ASSOC);
   $valor2=$row3["nombre"];
   echo "Nombre de la Empresa"."---->".$valor2;
   
    $file = fopen("credencial.txt", "w");

    fwrite($file, $nom_user . PHP_EOL);

    fwrite($file, $password . PHP_EOL);
    
        fwrite($file, $valor2 . PHP_EOL);
    echo "paso por crear";
    fclose($file);
   echo "El archivo no existe";
   
   ////////////////////////////
   $sql10= "SELECT * FROM $valor2.contratos";
   //ejecutar pg_query
   $result10= pg_query($sql10) or die ("Error Logeo".pg_last_error());
   ///////////////////////////////////// IMPRIMIR 
   
    echo "<ul>";
    while ($row = pg_fetch_array($result,null, PGSQL_ASSOC)){
    echo "<li><strong>".$row["nombre"].",".$row["correo"]."</li>";
    }
    echo "</ul>";
    
    
   /*          echo "<ul>";
    while ($row = pg_fetch_array($result10,null, PGSQL_ASSOC)){
    echo "<li><strong>".$row["lugar"]."</li>";
    }
    echo "</ul>";*/
     $sqlfinal= "SELECT * FROM usuarios";
   //ejecutar pg_query
   $resultfinal= pg_query($sqlfinal) or die ("Error ".pg_last_error());
    
    while($row4 = pg_fetch_array($result10,null, PGSQL_ASSOC)){
    echo'
        <tr>
            <td>'.$row4["id_doc"].'</td>
            <td>'.$row4["nombre"].'</td>
            <td>'.$row4["lugar"].'</td>
            <td>'.$row4["fecha_firma"].'</td>
            <td>'.$row4["fecha_inicio"].'</td>
            <td>'.$row4["plazo"].'</td>
            <td>'.$row4["fecha_final"].'</td>
        </tr>';

    }
}
?>
        <br/><br/><br/><br/><a href="Contrato.php">Registrar Contrato</a><br/><br/>
    </form>
    </div>
  </body>
</html>






