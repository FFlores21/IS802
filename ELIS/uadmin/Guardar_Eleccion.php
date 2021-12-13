<?php 
        $periodo = $_POST['Periodo_Academico'];
        $anio = $_POST['Anio'];
        $centro = $_POST['Centro_Estudio'];
        $directiva1 = $_POST['Junta_Directiva1'];
        $directiva2 = $_POST['Junta_Directiva2'];
        $directiva3 = $_POST['Junta_Directiva3'];
        
        
        

    
    $conexion=mysqli_connect('localhost', 'root', '');
    if(mysqli_connect_errno()){
          echo "Fallo al conectar con la BBDD";
        exit();
    }
    mysqli_select_db($conexion, 'db_elis(2.0)') or die ("no se encuentra db");
    mysqli_set_charset($conexion, "utf8");  




    $sql = "INSERT INTO elecciones(CENTRO_ESTUDIO, ANIO, JUNTA_PARTICIPANTE_1, JUNTA_PARTICIPANTE_2, JUNTA_PARTICIPANTE_3, PERIODO_ACADEMICO) VALUES ('$centro','$anio','$directiva1','$directiva2','$directiva3','$periodo')";
    $resultado=mysqli_query($conexion, $sql);
    
    //$sql = "UPDATE usuarios SET ESTATUS_VOTO=1 WHERE CORREO='$verificacion_correo'";
    //$resultado=mysqli_query($conexion, $sql);

    
    header("Location:Gestionar_Elecciones.php");

    

?>