<?php
        $id=1;
        $estado=0;

        $conexion=mysqli_connect('localhost', 'root', '');
        if(mysqli_connect_errno()){
            echo "Fallo al conectar con la BBDD";
            exit();
        }
        mysqli_select_db($conexion, 'db_elis(2.0)') or die ("no se encuentra db");
        mysqli_set_charset($conexion, "utf8");

        $sql = "UPDATE elecciones SET ESTADO='$estado' WHERE ID_ELECCION='$id' ";
        $resultado=mysqli_query($conexion, $sql);
        header("Location:Gestionar_Elecciones.php");

?>