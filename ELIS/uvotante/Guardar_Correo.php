<?php 

    
        $correo = $_POST['correo'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $carrera = $_POST['carrera'];

    
    $conexion=mysqli_connect('localhost', 'root', '');
    if(mysqli_connect_errno()){
          echo "Fallo al conectar con la BBDD";
        exit();
    }
    mysqli_select_db($conexion, 'db_elis(2.0)') or die ("no se encuentra db");
    mysqli_set_charset($conexion, "utf8");  




    $sql = "INSERT INTO correos (CORREO, NOMBRES, APELLIDOS, CARRERA) VALUES ('$correo','$nombres','$apellidos','$carrera')";
    $resultado=mysqli_query($conexion, $sql);
    
    
    header("Location:Inscribir_Correo.php");

    

?>