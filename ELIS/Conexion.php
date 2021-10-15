<?php 

$SERVER ='localhost';
$USER ='root';
$PASS ='';
$DB ='db_elis(1.0)';


$conexion = mysqli_connect ($SERVER,$USER,$PASS,$DB);

if ($conexion){

    echo "Conexion Exitosa";
}

?>
