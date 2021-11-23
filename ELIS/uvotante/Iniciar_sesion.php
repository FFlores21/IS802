<?php
    try{
        $login=htmlentities(addslashes($_POST["emailS"]));
        $password=htmlentities(addslashes($_POST["contrasenaS"]));
        $contador=0;

        $base= new PDO("mysql:host=localhost; dbname=db_elis(2.0)","root","");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql="SELECT * FROM usuarios where CORREO= :emailS && TIPO_ROL= 1;";
        $resultado=$base->prepare($sql);
        $resultado->execute(array(":emailS"=>$login));

            while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                //echo "Usuario: " . $registro['CORREO'] . "Contraseña: " . $registro['CONTRASENA'] . "<br>";
                if(password_verify($password, $registro['CONTRASENA'])){
                    $contador++;
                }
            }

            if($contador>0){
                //echo "Usuario registrado";
                session_start();
                $_SESSION["usuario"]=$_POST["emailS"];
                header("location:Inicio_Usuario.php");
                //die();
            }else{
                header("location:Sing_In.php");
                //echo "Usuario no registrado";
            }

            $resultado ->closeCursor();
    }catch(Exception $e){
        die("Error: " . $e->getMessage());
        echo "Error de autenticación";
    }


?>


