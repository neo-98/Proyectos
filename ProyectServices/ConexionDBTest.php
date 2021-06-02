<?php

//cadena de conexion con postgresql
$conexion = "host='localhost' dbname= 'db_gestion' port='5432' user='user_java' password='0000'";

//funcion pg_conect
$con = pg_connect($conexion) or die ("Error en la conexion".pg_last_error());
echo "Conexion Exitosa <hr />";