<?php 

    
        $voto_junta = $_POST['candidato'];
        $verificacion_correo = $_POST['Verificacion_correo'];
        

    
    $conexion=mysqli_connect('localhost', 'root', '');
    if(mysqli_connect_errno()){
          echo "Fallo al conectar con la BBDD";
        exit();
    }
    mysqli_select_db($conexion, 'db_elis(2.0)') or die ("no se encuentra db");
    mysqli_set_charset($conexion, "utf8");  




    $sql = "INSERT INTO boletas(VOTO_JUNTA, ID_USUARIO) VALUES ('$voto_junta','$verificacion_correo')";
    $resultado=mysqli_query($conexion, $sql);
    
    $sql = "UPDATE usuarios SET ESTATUS_VOTO=1 WHERE CORREO='$verificacion_correo'";
    $resultado=mysqli_query($conexion, $sql);

    
    header("Location:Inicio_Usuario.php");

    

?>
