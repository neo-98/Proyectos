<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("./ConexionDBTest.php");
error_reporting(E_ALL ^ E_NOTICE);

if (file_exists("credencial.txt")){
$file = fopen("credencial.txt", "r");
    $cont=0;
$tenant;
    while(!feof($file)):
        if ($cont=3){
        $tenant=fgets($file);
        }
    echo fgets($file). "<br />";
    $cont++;    
    endwhile;
   //header("Location: RealizarLogeo.php?usuario=$usuario&contrasena=$contrasena");
   echo "El archivo existe";   
}

$nom_user = $_POST['user_final'];
$password = $_POST['pass_final'];
$sql20= "SELECT * FROM $tenant.usuarios WHERE user_name= '$nom_user' AND user_password= '$password'";
   //ejecutar pg_query
$result20= pg_query($sql20) or die ("Error Logeo".pg_last_error());

    echo "<ul>";
    while ($row = pg_fetch_array($result20,null, PGSQL_ASSOC)){
    echo "<li><strong>".$row["user_name"].",".$row["user_password"]."</li>";
    }
    echo "</ul>";
    
    $sql10= "SELECT * FROM $tenant.contratos";
   //ejecutar pg_query
   $result10= pg_query($sql10) or die ("Error Logeo".pg_last_error());
   ///////////////////////////////////// IMPRIMIR 
   
  