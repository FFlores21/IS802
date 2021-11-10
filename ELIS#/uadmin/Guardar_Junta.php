<?php 
    
    
        $nombre = $_POST['Nombre'];
        $propuesta = $_POST ['Propuesta'];    
        $presidente = $_POST ['Presidente'];
        $vice_presidente = $_POST ['VicePresidente'];
        $tesorero = $_POST ['Tesorero'];
        $fiscal = ($_POST['Fiscal']);
        $vocal1 = ($_POST['Vocal1']);
        $vocal2 = ($_POST['Vocal2']);
        $vocal3 = ($_POST['Vocal3']);
        $foto_junta = addcslashes(file_get_contents($_FILES['Foto_Junta']['tmp_name']), 'foto');
        $logo = addcslashes(file_get_contents($_FILES['Logo']['tmp_name']), 'logo');

        

        
    try{
        $base= new PDO('mysql:host=localhost; dbname=db_elis(3.0)', 'root', '');
        $base->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");

        $sql = "INSERT INTO juntas(NOMBRE_JUNTA, PROPUESTA, PRESIDENTE, VPRESIDENTE, TESORERO, FISCAL, VOCAL1, VOCAL2, VOCAL3 ,FOTO_JUNTA,LOGO)
        VALUES (:Nombre, :Propuesta, :Presidente, :VicePresidente, :Tesorero, :Fiscal, :Vocal1, :Vocal2, :Vocal3 , :Foto_Junta, :Logo)";
        $resultado =  $base->prepare($sql);
        $resultado -> execute(array(":Nombre"=>$nombre, ":Propuesta"=>$propuesta, ":Presidente"=>$presidente, ":VicePresidente"=>$vice_presidente, ":Tesorero"=>$tesorero, ":Fiscal"=>$fiscal, ":Vocal1"=>$vocal1, ":Vocal2"=>$vocal2, ":Vocal3"=>$vocal3, ":Foto_Junta"=>$foto_junta, ":Logo"=>$logo));
        echo "Registro Insertado";
    }catch(Exception $e){
      
        echo "Linea del error: " . $e->getLine();
    }finally{
        $base=null;
    }

?>


