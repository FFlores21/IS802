<?php 
    
    //include 'Conexion.php';

    
    /*if(isset($_POST['register'])){
        $nombres = $_POST['Nombres'];
        $apellidos = $_POST ['Apellidos'];    
        $email = $_POST ['Email'];
        $cuenta = $_POST ['Cuenta'];
        $genero = $_POST ['Genero'];
        $password = $_POST ['password'];
        $sql = "INSERT INTO usuarios(NOMBRES, APELLIDOS, CORREO, NUMERO_CUENTA, SEXO, CONTRASEÑA, TIPO_ROL)
        VALUES ('".$nombres."','".$apellidos."','".$email."','".$cuenta."','".$genero."', ".$password."', 1)";
        $resultado =  mysqli_query($conexion, $sql);
    }*/

    /*if(isset($_POST['register'])){
        $nombres = $_POST['Nombres'];
        $apellidos = $_POST ['Apellidos'];    
        $email = $_POST ['Email'];
        $cuenta = $_POST ['Cuenta'];
        $genero = $_POST ['Genero'];
        $contrasena = SHA1($_POST['contrasena']);
        $sql = "INSERT INTO usuarios(NOMBRES, APELLIDOS, CORREO, NUMERO_CUENTA, SEXO, CONTRASEÑA, TIPO_ROL)
        VALUES ('".$nombres."','".$apellidos."','".$email."','".$cuenta."','".$genero."', ".$contrasena."', 1)";
        $resultado =  mysqli_query($conexion, $sql);
    }*/
        $nombres=$apellidos=$email=$cuenta=$genero=$contrasena="";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombres = $_POST['Nombres'];
            $apellidos = $_POST ['Apellidos'];    
            $email = $_POST ['Email'];
            $cuenta = $_POST ['Cuenta'];
            $genero = $_POST ['Genero'];
            $contrasena = ($_POST['contrasena']);
            $pass_cifrado=password_hash($contrasena,PASSWORD_DEFAULT, array("cost"=>12));
       try{
            $base= new PDO('mysql:host=localhost; dbname=db_elis(2.0)', 'root', '');
            $base->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("SET CHARACTER SET utf8");
    
            $sql = "INSERT INTO usuarios(NOMBRES, APELLIDOS, CORREO, NUMERO_CUENTA, SEXO, CONTRASENA, TIPO_ROL)
            VALUES (:Nombres, :Apellidos, :Email, :Cuenta, :Genero, :contrasena, 2)";
            $resultado =  $base->prepare($sql);
            $resultado -> execute(array(":Nombres"=>$nombres, ":Apellidos"=>$apellidos, ":Email"=>$email, ":Cuenta"=>$cuenta, ":Genero"=>$genero, ":contrasena"=>$pass_cifrado));
            //echo "Registro Insertado";
            }catch(Exception $e){
            /*if($_POST["usu_password"]==$_POST["usu_confirm"]){
                # son iguales
            }else{
                # no son iguales
            }*/
           // echo "Linea del error: " . $e->getLine();
        }finally{
           $base=null;
        }
         
          }
          
          
          function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }

      
    
    //$sql = "INSERT INTO usuarios( NOMBRES, APELLIDOS, CORREO, NUMERO_CUENTA, SEXO, CONTRASEÑA, TIPO_ROL) VALUES (\'$nombres\',\'$apellidos\',\'$email\',$cuenta,\'$genero\',\'$password\',1)";


    // $CONEXION-> query($sql);

    /*if ($resultado){
        echo "Si se inserto";

    }else {

            echo " No se inserto $nombres,$apellidos, $email, $cuenta, $genero, $contrasena";
        }


        INSERT INTO usuarios( NOMBRES, APELLIDOS, CORREO, NUMERO_CUENTA, SEXO, CONTRASEÑA, TIPO_ROL) VALUES ('$nombres','$apellidos','$email','2014','1','123','2') */

?>
