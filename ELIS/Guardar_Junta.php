<?php 
    
    include ("Conexion.php");

    $nombre = $_POST['nombre'];
    $imagen = addcslashes(file_get_contents($_FILES['Imagen']['tmp_name']), 'imagen');


    $query = "INSERT INTO imagenes( JUNTA, IMAGEN) VALUES ('$nombre','$imagen')";
    

    $resultado = mysqli_query($CONEXION, $query); 
    //$CONEXION-> query($query);

    if ($resultado){
        echo "Si se inserto";

    }else {

            echo " No se inserto";
        }

    

?>
