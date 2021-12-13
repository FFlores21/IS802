<?php
    session_start();

    if(!isset($_SESSION["usuario"])){
      header("Location:Sing_In.php");
    }
?>

<?php
                
   
    $conexion=mysqli_connect('localhost', 'root', '');
    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la BBDD";
        exit();
    }
    mysqli_select_db($conexion, 'db_elis(2.0)') or die ("no se encuentra db");
    mysqli_set_charset($conexion, "utf8");

    $consulta = "SELECT NOMBRE_JUNTA FROM juntas WHERE ID_JUNTAS=1";
    $resultado=mysqli_query($conexion, $consulta);
    while ($fila=mysqli_fetch_array($resultado)) {
        $nombre1= $fila["NOMBRE_JUNTA"]; }
    $consulta = "SELECT NOMBRE_JUNTA FROM juntas WHERE ID_JUNTAS=2";
    $resultado=mysqli_query($conexion, $consulta);
    while ($fila=mysqli_fetch_array($resultado)) {
        $nombre2= $fila["NOMBRE_JUNTA"]; }
    $consulta = "SELECT NOMBRE_JUNTA FROM juntas WHERE ID_JUNTAS=5";
    $resultado=mysqli_query($conexion, $consulta);
    while ($fila=mysqli_fetch_array($resultado)) {
        $nombre3= $fila["NOMBRE_JUNTA"]; }
      

    $sql1 = "SELECT COUNT(*) conteo1 FROM boletas WHERE VOTO_JUNTA = '$nombre1'";
    $sql2 = "SELECT COUNT(*) conteo2 FROM boletas WHERE VOTO_JUNTA = '$nombre2'";
    $sql3 = "SELECT COUNT(*) conteo3 FROM boletas WHERE VOTO_JUNTA = '$nombre3'";

    //Data recolectada
    $data1 = $conexion->query($sql1);
    $data2 = $conexion->query($sql2);
    $data3 = $conexion->query($sql3);
    while($row = $data1->fetch_object()) {
       $conteo1= $row->conteo1;
    }
    while($row2 = $data2->fetch_object()) {
        $conteo2= $row2->conteo2;
     }
    while($row3 = $data3->fetch_object()) {
       $conteo3= $row3->conteo3;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELISE</title>
</head>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/img1.jpg">
    <link rel="stylesheet" href="../css/ELIS.css">  <!-- Este es el documento que contiene  configuraciones segun la casse-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
<!--============================================================Barra Superior=================================================================-->


<body style="background-color:#f2f2f2 ">



        
    <header  style="background-color: rgba(24, 154, 198, 0.99); height: 100px " class="barr">

      <a href="Inicio_Usuario.php"><img src="../img/img1.jpg" style="height: 100%"></a>

      <!-- Botones (Anclas) de sing in, sing up y estadisticas-->

      <a href="Candidatos.php" style="padding-left: 65%; color:white; font-size:larger;">Candidatos</a>

      <a href="../cierre.php" style="padding-left: 5%; color: white;font-size: larger;">Cerrar Sesión</a>
    </header>

    <main>

<!--=============================================================Cuerpo========================================================================-->

<div class="contenido_login" style="background-image: url(../img/back.jpg);">

        
    <div class="container-fluid h-100" style="position:fixed">
        <div class="row h-100">
            <div class="col-8">
                <strong><h1 id="ten" style="font-size: 38px; margin-left: 130px; margin-bottom: 30px;">Proyección procesos de votación</h1></strong>
                <div id="tend">
                    <canvas id="grafica"></canvas>
                    
                    
                </div>
            </div>
            <div class="col-4">
                <a href="javascript:history.back()" style="text-decoration: none;"><input class="boton" id="deta1" type="button" value="Atrás"></a> 

            </div>
        </div>
    </div>
    

        
        <script src="../js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="../js/jquery-3.6.0.min.js"></script>
        <script>
            var junta1 ='<?php echo $nombre1;?>';
            var junta2 ='<?php echo $nombre2;?>';
            var junta3 ='<?php echo $nombre3;?>';
            var conteo_junta1 ='<?php echo $conteo1;?>';
            var conteo_junta2 ='<?php echo $conteo2;?>';
            var conteo_junta3 ='<?php echo $conteo3;?>';
        </script>
        <script src="../js/Stats.js"></script>
</body>

</html>




