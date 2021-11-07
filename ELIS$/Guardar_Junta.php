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
        // $logo = ($_POST['Logo']);
        //$foto_junta= ($_POST['Foto-Junta']);

        
    try{
        $base= new PDO('mysql:host=localhost; dbname=db_elis(2.0)', 'root', '');
        $base->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");

        $sql = "INSERT INTO juntas(NOMBRE_JUNTA, PROPUESTA, PRESIDENTE, VPRESIDENTE, TESORERO, FISCAL, VOCAL1, VOCAL2, VOCAL3 ,LOGO,FOTO_JUNTA)
        VALUES (:Nombre, :Propuesta, :Presidente, :VicePresidente, :Tesorero, :Fiscal, :Vocal1, :Vocal2, :Vocal3 , :Logo, :Foto-Junta)";
        $resultado =  $base->prepare($sql);
        $resultado -> execute(array(":Nombre"=>$nombre, ":Propuesta"=>$propuesta, ":Presidente"=>$presidente, ":VicePresidente"=>$vice_presidente, ":Tesorero"=>$tesorero, ":Fiscal"=>$fiscal, ":Vocal1"=>$vocal1, ":Vocal2"=>$vocal2, ":Vocal3"=>$vocal3, ":Logo"=>$logo, ":Foto-Junta"=>$foto_junta));
        echo "Registro Insertado";
    }catch(Exception $e){
      
        echo "Linea del error: " . $e->getLine();
    }finally{
        $base=null;
    }
    
    
?>
