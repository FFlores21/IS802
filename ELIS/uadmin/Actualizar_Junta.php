<?php 
    
        $id=$_POST['Id'];
        $nombre = $_POST['Nombre'];
        $propuesta = $_POST ['Propuesta'];    
        $presidente = $_POST ['Presidente'];
        $vice_presidente = $_POST ['VicePresidente'];
        $tesorero = $_POST ['Tesorero'];
        $fiscal = ($_POST['Fiscal']);
        $vocal1 = ($_POST['Vocal1']);
        $vocal2 = ($_POST['Vocal2']);
        $vocal3 = ($_POST['Vocal3']);

        /////////////////////////////Logo//////////////////////////////////

        $nombre_logo=$_FILES['Logo']['name'];
        $tipo_logo=$_FILES['Logo']['type'];
        $tamanio_logo=$_FILES['Logo']['size'];

        $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/ELIS/img/';

        $logo_objetivo= fopen($carpeta_destino . $nombre_logo, "r");
        $logo = fread($logo_objetivo, $tamanio_logo );
        $logo = addslashes($logo);
        fclose($logo_objetivo);
        
        //////////////////////////////Foto////////////////////////////////
        
        $nombre_foto_junta=$_FILES['Foto_Junta']['name'];
        $tipo_foto_junta=$_FILES['Foto_Junta']['type'];
        $tamanio_foto_junta=$_FILES['Foto_Junta']['size'];

        $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/ELIS/img/';

        $foto_junta_objetivo= fopen($carpeta_destino . $nombre_foto_junta, "r");
        $foto_junta = fread($foto_junta_objetivo, $tamanio_foto_junta );
        $foto_junta = addslashes($foto_junta);
        fclose($foto_junta_objetivo);

        /////////////////////////////////////////////////////////////////

        //$logo = addslashes(file_get_contents($_FILES['Logo']['tmp_name']));

        //$foto_junta = addslashes(file_get_contents($_FILES['Foto_Junta']['tmp_name']));    
        
        /*  */

        $conexion=mysqli_connect('localhost', 'root', '');
        if(mysqli_connect_errno()){
            echo "Fallo al conectar con la BBDD";
            exit();
        }
        mysqli_select_db($conexion, 'db_elis(2.0)') or die ("no se encuentra db");
        mysqli_set_charset($conexion, "utf8");

        $sql = "UPDATE juntas SET ID_JUNTAS='$id', NOMBRE_JUNTA='$nombre', PROPUESTA='$propuesta', PRESIDENTE='$presidente', VPRESIDENTE='$vice_presidente', TESORERO='$tesorero', FISCAL='$fiscal', VOCAL1='$vocal1', VOCAL2='$vocal2', VOCAL3='$vocal3', LOGO='$logo', FOTO_JUNTA='$foto_junta' WHERE ID_JUNTAS='$id' ";
        $resultado=mysqli_query($conexion, $sql);
        header("Location:Gestionar_Juntas.php");

        /*  
        try{
            $base= new PDO('mysql:host=localhost; dbname=db_elis(2.0)', 'root', '');
            $base->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("SET CHARACTER SET utf8");

            $sql = "UPDATE juntas SET ID_JUNTAS=:Id, NOMBRE_JUNTA=:Nombre, PROPUESTA=:Propuesta, PRESIDENTE=:Presidente, VPRESIDENTE=:VicePresidente, TESORERO=:Tesorero, FISCAL=:Fiscal, VOCAL1=:Vocal1, VOCAL2=:Vocal2, VOCAL3=:Vocal3 ,LOGO=:Logo,FOTO_JUNTA=:Foto_Junta WHERE ID_JUNTAS=:Id ";
            
            $resultado =  $base->prepare($sql);
            $resultado -> execute(array(":Id"=>$id, ":Nombre"=>$nombre, ":Propuesta"=>$propuesta, ":Presidente"=>$presidente, ":VicePresidente"=>$vice_presidente, ":Tesorero"=>$tesorero, ":Fiscal"=>$fiscal, ":Vocal1"=>$vocal1, ":Vocal2"=>$vocal2, ":Vocal3"=>$vocal3, ":Logo"=>$logo, ":Foto_Junta"=>$foto_junta));
            echo "Registro Actualizado";
        }catch(Exception $e){
        
            echo "Linea del error: " . $e->getLine();
        }finally{
            $base=null;
        }
        */

    
    
  
?>


