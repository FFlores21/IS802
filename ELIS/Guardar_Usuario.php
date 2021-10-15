<?php 
    
    include ("Conexion.php");

    $nombres = $_POST['Nombres'];
    $apellidos = $_POST ['Apellidos'];    
    $email = $_POST ['Email'];
    $cuenta = $_POST ['Cuenta'];
    $genero = $_POST ['Genero'];
    $password = $_POST ['password'];
    

    $sql = " INSERT INTO usuarios( NOMBRES, APELLIDOS, CORREO, NUMERO_CUENTA, SEXO, CONTRASEÑA, TIPO_ROL) VALUES ('$nombres','$apellidos','$email', $cuenta ,'$genero','$password', 1)";
    //$sql = "INSERT INTO usuarios( NOMBRES, APELLIDOS, CORREO, NUMERO_CUENTA, SEXO, CONTRASEÑA, TIPO_ROL) VALUES (\'$nombres\',\'$apellidos\',\'$email\',$cuenta,\'$genero\',\'$password\',1)";

    $resultado =  mysqli_query($conexion, $sql);
    // $CONEXION-> query($sql);

    if ($resultado){
        echo "Si se inserto";

    }else {

            echo " No se inserto $nombres,$apellidos, $email, $cuenta, $genero, $password";
        }


        /*INSERT INTO usuarios( NOMBRES, APELLIDOS, CORREO, NUMERO_CUENTA, SEXO, CONTRASEÑA, TIPO_ROL) VALUES ('$nombres','$apellidos','$email','2014','1','123','2') */

?>
 

 


