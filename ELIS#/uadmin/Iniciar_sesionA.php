<?php
    try{
        $login=htmlentities(addslashes($_POST["emailSA"]));
        $password=htmlentities(addslashes($_POST["contrasenaSA"]));
        $contador=0;

        $base= new PDO("mysql:host=localhost; dbname=db_elis(2.0)","root","");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql="SELECT * FROM usuarios where CORREO= :emailSA && TIPO_ROL= 2;";
        $resultado=$base->prepare($sql);
        $resultado->execute(array(":emailSA"=>$login));

            while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                //echo "Usuario: " . $registro['CORREO'] . "Contraseña: " . $registro['CONTRASENA'] . "<br>";
                if(password_verify($password, $registro['CONTRASENA'])){
                    $contador++;
                }
            }

            if($contador>0){
                //echo "Usuario registrado";
                session_start();
                $_SESSION["admin"]=$_POST["emailSA"];
                header("location:Inicio_Administrador.php");
                //die();
            }else{
                header("location:Sign_InA.php");
                //echo "Usuario no registrado";
            }

            $resultado ->closeCursor();
    }catch(Exception $e){
        die("Error: " . $e->getMessage());
        echo "Error de autenticación";
    }


?>


