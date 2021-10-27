<?php 
    
   

    $Nombre = $_POST['nombre'];
    $Propuesta = $_POST['propuesta'];
    $Imagen = addcslashes(file_get_contents($_FILES['Imagen']['tmp_name']), 'imagen');

    try{
        $base= new PDO('mysql:host=localhost; dbname=db_elis_2_1', 'root', '');
        $base->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");
        $Id_usuario=001;

       /*$sql = "INSERT INTO juntas(NOMBRE_JUNTA, PROPUESTA, LOGO, ID_USUARIO) VALUES (:nombre, :propuesta, :imagen,:id_u)";
        $resultado =  $base->prepare($sql);
        $resultado -> execute(array(":nombre"=>$Nombre, ":propuesta"=>$Propuesta,":imagen"=>$Imagen, ":id_u"=>$Id_usuario));*/

        $sql = "INSERT INTO juntas(NOMBRE_JUNTA, PROPUESTA, LOGO) VALUES (:nombre, :propuesta, :imagen)";
        $resultado =  $base->prepare($sql);
        $resultado -> execute(array(":nombre"=>$Nombre, ":propuesta"=>$Propuesta,":imagen"=>$Imagen));
        echo "Registro Insertado";
    }catch(Exception $e){
       
        echo "Linea del error: " . $e;
        echo "Linea del error: " . $e->getLine();
    }finally{
        $base=null;
    }
   

?>
