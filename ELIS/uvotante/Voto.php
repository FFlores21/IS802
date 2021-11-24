<?php
  try{
      $login=htmlentities(addslashes($_POST["Comprueba_correo"]));
      $password=htmlentities(addslashes($_POST["Comprueba_pass"]));
      $contador=0;
      $base= new PDO("mysql:host=localhost; dbname=db_elis(2.0)","root","");
      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql="SELECT * FROM usuarios where CORREO= :emailS && TIPO_ROL= 1;";
      $resultado=$base->prepare($sql);
      $resultado->execute(array(":emailS"=>$login));
          while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
              
              if(password_verify($password, $registro['CONTRASENA'])){
                  $contador++;
              }
          }       
  }catch(Exception $e){
      die("Error: " . $e->getMessage());
      echo "Error de autenticación";
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

  $verifica_correo = $_POST['Comprueba_correo'];

  $consulta = "SELECT ESTATUS_VOTO FROM usuarios WHERE CORREO='$verifica_correo'";
  $resultado=mysqli_query($conexion, $consulta);
  while ($fila=mysqli_fetch_array($resultado)) {
      $estatus= $fila["ESTATUS_VOTO"]; }

?>
<?php

$pagina = <<<ELI
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

<!--============================================================Barra Superior=================================================================-->


<body style="background-color:#f2f2f2 ">


     

        
    <header  style="background-color: rgba(24, 154, 198, 0.99); height: 100px;">

      <a href="Inicio_Usuario.php"><img src="../img/img1.jpg" style="height: 100%"></a>

      <!-- Botones (Anclas) de sing in, sing up y estadisticas-->
      
    </header>

    <main>
  
<!--=============================================================Cuerpo========================================================================-->

      <div class="contenido_login" style="background-image: url(../img/back.jpg);">

        
        <div>

          <h3 class="titulos" style="text-align:center;color:#333 ;margin:0% auto; padding: 3% auto;"> ¡Realiza tu elección! </h3>

        </div>
        <br><br><br>
<!--=============================================================Columnas========================================================================-->
<div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12">
            <form id="enc" action ="Guardar_Boleta.php" method="post">

                    <div id="enc1">
                        <h1 style=" text-align:left;  margin-left:29px; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size: 28px;"> ¡Elección de la junta directiva de tu carrera! </h1>
                        <span style="color: red; font-weight: 14px; margin-left: 25px;">*Requerido</span>
                    </div>
        
                    <div id="enc5">
                        <h3 class="encs">Juntas a elegir<span style="color: red; font-weight: 20px; margin-left: 5px;">*</span></h3>
                        <div id="radioCandidatos">
                            <label class="lab"><input name="candidato" value="$nombre1" type="radio">$nombre1</label><br>
                            <label class="lab"><input name="candidato" value="$nombre2" type="radio">$nombre2</label><br>
                            <label class="lab"><input name="candidato" value="$nombre3" type="radio">$nombre3</label><br>
                        </div>
                        <select id="disabledSelect" REQUIRED name="Verificacion_correo" class="form-select">
                          <option>$verifica_correo</option>
                        </select>
                        </div><br><br>

                        <div style="position: relative; bottom: 40px; margin-left: 60px">
                            <span id="msgLLenado" style="color: red; font-weight: 14px; margin: 5px;">   </span>
                        </div>

                        <button id="env" type="submit" name="register" class="btn btn-primary">Enviar</button>
                        <input id="cerr" class="boton" type="button" value="Cerrar" onClick="history.go(-1)";>

                    
                </form>
            </div>
        </div>
    </div>

    
    
<!--============================================================Footer(Publicidad)==============================================================================-->
        <footer style="background-color: transparent"> 

            <div class="container-fluid">

                <div class="row">
                
                  <div class="col-xl-4">
                    <img src="../img/img6.jpg"  class="rounded float-start" style="height: 300px">
                  </div>
                  <div class="col-xl-4">
                    <div class="rounded mx-auto d-block">
                    </div>
                  </div>
                  <div class="col-xl-4">
                    <img src="../img/img2.jpg" class="rounded float-end" style="height: 300px">
                  </div>
                </div>
              </div>
            
        
        </footer>

      
    </main>

    
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="../js/controladorEncuesta.js"></script>
    <script src="../controlador.js"></script>
</body>

</html>

ELI;

    
if ($estatus==0) {
  if ($contador>0) {
    echo $pagina;
  }
}else {
  header("location:Inicio_Usuario.php");
}


?>