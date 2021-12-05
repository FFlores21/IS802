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
    $conn = mysqli_connect("localhost", "root", "", "db_elis(2.0)");
        $nombres=$apellidos=$email=$cuenta=$genero=$contrasena="";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombres = $_POST['Nombres'];
            $apellidos = $_POST ['Apellidos'];    
            $email = $_POST ['Email'];
            $cuenta = $_POST ['Cuenta'];
            $genero = $_POST ['Genero'];
            $contrasena = ($_POST['contrasena']);
            $pass_cifrado=password_hash($contrasena,PASSWORD_DEFAULT, array("cost"=>12));

            //Recolección de datos necesarios para la validación del registro de usuarios;
            $sql3 = "SELECT COUNT(*) cantidad FROM correos WHERE CORREO = '$email'";
            $sql4 = "SELECT COUNT(*) cantidad2 FROM usuarios WHERE CORREO = '$email'";

            //Data recolectada
            $dataa = $conn->query($sql3);
            $data2 = $conn->query($sql4);
            while($row = $dataa->fetch_object()) {
               $cantidad= $row->cantidad;
            }
            while($row2 = $data2->fetch_object()) {
                $cantidad2= $row2->cantidad2;
             }
    
             if($cantidad==0){
                //usuario no admitido en ELIS
                echo "Los datos de correo electrónico no son válidos para estas elecciones";
            }if($cantidad==1 && $cantidad2==0){
                    try{
                        $base= new PDO('mysql:host=localhost; dbname=db_elis(2.0)', 'root', '');
                        $base->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $base->exec("SET CHARACTER SET utf8");
                
                        $sql = "INSERT INTO usuarios(NOMBRES, APELLIDOS, CORREO, NUMERO_CUENTA, SEXO, CONTRASENA, TIPO_ROL)
                        VALUES (:Nombres, :Apellidos, :Email, :Cuenta, :Genero, :contrasena, 1)";
                        $resultado =  $base->prepare($sql);
                        $resultado -> execute(array(":Nombres"=>$nombres, ":Apellidos"=>$apellidos, ":Email"=>$email, ":Cuenta"=>$cuenta, ":Genero"=>$genero, ":contrasena"=>$pass_cifrado));
                        //echo "Registro Insertado";
                    }catch(Exception $e){
                        /*if($_POST["usu_password"]==$_POST["usu_confirm"]){
                            # son iguales
                        }else{
                            # no son iguales
                        }*/
                        //echo "Linea del error: " . $e->getLine();
                    }finally{
                        $base=null;
                    }

        }if($cantidad==1 && $cantidad2==1)
        echo "El usuario con estas credenciales ya existe";
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
