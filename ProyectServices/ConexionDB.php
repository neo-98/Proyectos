<?php
//cadena de conexion con postgresql
$conexion = "host='localhost' dbname= 'db_gestion' port='5432' user='user_java' password='0000'";

//funcion pg_conect
$con = pg_connect($conexion) or die ("Error en la conexion".pg_last_error());
echo "Conexion Exitosa <hr />";

//Consulta SQL
$sql= "SELECT nombre, direccion FROM empresas";

//ejecutar pg_query
$result= pg_query($sql) or die ("Error Busqueda".pg_last_error());

//Obtener numero de registros en bd
$res= pg_num_rows($result);

//Recorrer e imprimir informacion 
echo "<ul>";
while ($row = pg_fetch_array($result,null, PGSQL_ASSOC)){
    echo "<li><strong>".$row["nombre"].",".$row["direccion"]."</li>";
}
echo "</ul>";
echo "<hr />".$res."resultado";