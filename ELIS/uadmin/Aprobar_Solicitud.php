<?php
        $id=4;
        $estado=1;

        $conexion=mysqli_connect('localhost', 'root', '');
        if(mysqli_connect_errno()){
            echo "Fallo al conectar con la BBDD";
            exit();
        }
        mysqli_select_db($conexion, 'db_elis(2.0)') or die ("no se encuentra db");
        mysqli_set_charset($conexion, "utf8");

        $sql = "UPDATE solicitudes SET ESTATUS='$estado' WHERE ID_SOLICITUD='$id' ";
        $resultado=mysqli_query($conexion, $sql);
        header("Location:Inicio_Administrador.php");

?>