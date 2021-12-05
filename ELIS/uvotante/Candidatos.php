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


      $consulta = "SELECT * FROM juntas WHERE ID_JUNTAS=1";
      $resultado=mysqli_query($conexion, $consulta);
      while ($fila=mysqli_fetch_array($resultado)) {
          $nombre1= $fila["NOMBRE_JUNTA"];
          $propuesta1 = $fila["PROPUESTA"];
          $presidente1 = $fila["PRESIDENTE"];
          $vice1 =$fila["VPRESIDENTE"];
          $tesorero1 =$fila["TESORERO"];
          $fiscal1 =$fila["FISCAL"];
          $vocal11 =$fila["VOCAL1"];
          $vocal12 =$fila["VOCAL2"];
          $vocal13 =$fila["VOCAL3"];}
          $consulta2 = "SELECT * FROM juntas WHERE ID_JUNTAS=1";
          $sth = $conexion->query($consulta2);
          $resultado2=mysqli_fetch_array($sth);

      $consulta = "SELECT * FROM juntas WHERE ID_JUNTAS=2";
      $resultado=mysqli_query($conexion, $consulta);
      while ($fila=mysqli_fetch_array($resultado)) {
          $nombre2= $fila["NOMBRE_JUNTA"];
          $propuesta2 = $fila["PROPUESTA"]; 
          $presidente2 = $fila["PRESIDENTE"];
          $vice2 =$fila["VPRESIDENTE"];
          $tesorero2 =$fila["TESORERO"];
          $fiscal2 =$fila["FISCAL"];
          $vocal21 =$fila["VOCAL1"];
          $vocal22 =$fila["VOCAL2"];
          $vocal23 =$fila["VOCAL3"];}
          $consulta2 = "SELECT * FROM juntas WHERE ID_JUNTAS=2";
          $sth = $conexion->query($consulta2);
          $resultado3=mysqli_fetch_array($sth);
  
          $consulta = "SELECT * FROM juntas WHERE ID_JUNTAS=5";
      $resultado=mysqli_query($conexion, $consulta);
      while ($fila=mysqli_fetch_array($resultado)) {
          $nombre3= $fila["NOMBRE_JUNTA"];
          $propuesta3 = $fila["PROPUESTA"];
          $presidente3 = $fila["PRESIDENTE"];
          $vice3 =$fila["VPRESIDENTE"];
          $tesorero3 =$fila["TESORERO"];
          $fiscal3 =$fila["FISCAL"];
          $vocal31 =$fila["VOCAL1"];
          $vocal32 =$fila["VOCAL2"];
          $vocal33 =$fila["VOCAL3"]; }
          $consulta2 = "SELECT * FROM juntas WHERE ID_JUNTAS=5";
          $sth = $conexion->query($consulta2);
          $resultado4=mysqli_fetch_array($sth);
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

<!--============================================================Barra Superior=================================================================-->


<body style="background-color:#f2f2f2 ">



        
    <header  style="background-color: rgba(24, 154, 198, 0.99); height: 100px;">

      <a href="Inicio_Usuario.php"><img src="../img/img1.jpg" style="height: 100%"></a>

      <!-- Botones (Anclas) de sing in, sing up y estadisticas-->

      <a href="javascript:history.back()" style="padding-left: 55%; color:white; font-size:larger;">Volver atrás</a>

      <a href="Stats.php" style="padding-left: 5%; color: white;font-size: larger;">Statistics</a>
      <a href="../cierre.php" style="padding-left: 5%; color: white;font-size: larger;">Cerrar Sesión</a>
      
    </header>

    <main>
  
<!--=============================================================Cuerpo========================================================================-->

      <div class="contenido_login" style="background-image: url(../img/back.jpg);">

        
        <div>

          <h3 class="titulos" style="text-align:center;color:#333 ;margin:0% auto; padding: 3% auto;"> CANDIDATOS </h3>

        </div>
        <br><br><br>
<!--=============================================================Columnas========================================================================-->
        <div class="container-fluid">
        
          <div class="row">
          
            <div class="col-xl-4" >

              <div class="rounded float-start" style="height: 800px; width: 90%;background-color:  rgba(222, 232, 230, 0.8)">
              <div class="img"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $resultado2['FOTO_JUNTA'] ).'"/>';?></div>
                <p style="text-align: center; font-size: 30px"> <?php echo $nombre1?>:</p>
                </br>
                <p style="text-align: center"> <?php echo $propuesta1;?></p>
              </br>
                <button style="margin-left: 40%;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                  Detalles
                </button>
              </div>              
            </div>

            <div class="col-xl-4">

              <div class="rounded mx-auto d-block" style="height: 800px; width: 90%;background-color:  rgba(222, 232, 230, 0.8)">
              <div class="img"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $resultado3['FOTO_JUNTA'] ).'"/>';?></div>
                <p style="text-align: center; font-size: 30px"> <?php echo $nombre2;?>:</p>
                </br>
                <p style="text-align: center"> <?php echo $propuesta2;?>
                <br>
                <br>
                <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                  Detalles
                </button>
              </div>              
            </div>

            <div class="col-xl-4">

              <div class="rounded float-end" style="height: 800px; width: 90%; background-color:  rgba(222, 232, 230, 0.8)">
              <div class="img"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $resultado4['FOTO_JUNTA'] ).'"/>';?></div>
                <p style="text-align: center; font-size: 30px"> <?php echo $nombre3;?>:</p>
                </br>
                <p style="text-align: center"> <?php echo $propuesta3;?> </p>
              </br>
                <button style="margin-left: 40%;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                  Detalles
                </button>
              </div>              
            </div>

            
          </div>
        </div>


      </div>

        

        <!-- Modal 1 -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Junta Directiva <?php echo $nombre1;?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="img"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $resultado2['LOGO'] ).'"/>';?></div>
                <p style="text-align: center"> INTEGRANTES: </br> 
                                            <?php echo $presidente1; ?>-(Presidente)</br>
                                            <?php echo $vice1; ?>-(Vice-Presidente)</br>
                                            <?php echo $tesorero1; ?>-(Tesorero)</br>
                                            <?php echo $fiscal1; ?>-(Fiscal)</br>
                                            <?php echo $vocal11; ?>-(Vocal 1)</br>
                                            <?php echo $vocal12; ?>-(Vocal 2)</br>
                                            <?php echo $vocal13; ?>-(Vocal 3)</br></br></br>
                                            PROPUESTAS:</br>
                                            <?php echo $propuesta1; ?></br></p>
                </br>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
              </div>
            </div>
          </div>
        </div>


         <!-- Modal 2 -->
         <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Junta Directiva <?php echo $nombre2;?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <div class="img"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $resultado3['LOGO'] ).'"/>';?></div>
                <p style="text-align: center"> INTEGRANTES: </br> 
                                            <?php echo $presidente2;?>-(Presidente)</br>
                                            <?php echo $vice2;?>-(Vice-Presidente)</br>
                                            <?php echo $tesorero2;?>-(Tesorero)</br>
                                            <?php echo $fiscal2;?>-(Fiscal)</br>
                                            <?php echo $vocal21;?>-(Vocal 1)</br>
                                            <?php echo $vocal22;?>-(Vocal 2)</br>
                                            <?php echo $vocal23;?>-(Vocal 3)</br></br></br>
                                            PROPUESTAS:</br>
                                            <?php echo $propuesta2;?></br></p>
                </br>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>


        <!-- Modal 3 -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Junta Directiva <?php echo $nombre3;?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <div class="img"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $resultado4['LOGO'] ).'"/>';?></div>
                <p style="text-align: center"> INTEGRANTES: </br> 
                                            <?php echo $presidente3;?>-(Presidente)</br>
                                            <?php echo $vice3;?>-(Vice-Presidente)</br>
                                            <?php echo $tesorero3;?>-(Tesorero)</br>
                                            <?php echo $fiscal3;?>-(Fiscal)</br>
                                            <?php echo $vocal31;?>-(Vocal 1)</br>
                                            <?php echo $vocal32;?>-(Vocal 2)</br>
                                            <?php echo $vocal33;?>-(Vocal 3)</br></br></br>
                                            PROPUESTAS:</br>
                                            <?php echo $propuesta3;?></br></p>
                </br>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

<!--============================================================Footer(Publicidad)==============================================================================-->
      <br><br><br><br><br><br><br>  
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
    <script src="../controlador.js"></script>
</body>

</html>