<?php 
/*
$SERVER ='localhost';
$USER ='root';
$PASS ='';
$DB ='db_elis(2.0)';
*/

$conexion = mysqli_connect ("localhost","root","","db_elis(2.0)");

if ($conexion){

    echo "Conexion Exitosa";
}

?>
