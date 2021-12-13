<?php 
            
        
        $mensaje = $_POST['mensaje'];
        $correo_remitente = $_POST['correo_remitente'];
        

    
    $conexion=mysqli_connect('localhost', 'root', '');
    if(mysqli_connect_errno()){
          echo "Fallo al conectar con la BBDD";
        exit();
    }
    mysqli_select_db($conexion, 'db_elis(2.0)') or die ("no se encuentra db");
    mysqli_set_charset($conexion, "utf8");  




    $sql = "INSERT INTO solicitudes (MENSAJE, CORREO_REMITENTE) VALUES ('$mensaje','$correo_remitente')";
    $resultado=mysqli_query($conexion, $sql);
    


    
    header("Location:Inicio_Usuario.php");

    

?>