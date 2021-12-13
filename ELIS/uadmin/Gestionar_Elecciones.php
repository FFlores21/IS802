<?php 
      session_start();

      if(!isset($_SESSION["admin"])){
        header("Location:Sign_InA.php");
      }
?>
<?php

///////////////////////////////VARIABLES///////////////////////////////////////
  
  
  $id_junta1="";
  $nombre_junta1="";
  $idjunta_2="";
  $nombre_junta2="";
  $id_junta3="";
  $nombre_junta3="";
  
  //////////////////////////////CONEXION////////////////////////////////////
  $conexion=mysqli_connect('localhost', 'root', '');
  if(mysqli_connect_errno()){
      echo "Fallo al conectar con la BBDD";
      exit();
  }
  mysqli_select_db($conexion, 'db_elis(2.0)') or die ("no se encuentra db");
  mysqli_set_charset($conexion, "utf8");

/////////////////////////////CONSULTAS A TABLA ELECIONES//////////////////////////////////////


///////////////////////////CONSULTAS A TABLA JUNTAS////////////////////////////////////// 

  $consulta = "SELECT ID_JUNTAS, NOMBRE_JUNTA FROM juntas WHERE ID_JUNTAS=1";
  $resultado=mysqli_query($conexion, $consulta);
  while ($fila=mysqli_fetch_array($resultado)) {
      $id_junta1= $fila["ID_JUNTAS"];
      $nombre_junta1= $fila["NOMBRE_JUNTA"]; }

  $consulta = "SELECT ID_JUNTAS, NOMBRE_JUNTA FROM juntas WHERE ID_JUNTAS=2";
  $resultado=mysqli_query($conexion, $consulta);
  while ($fila=mysqli_fetch_array($resultado)) {
      $id_junta2= $fila["ID_JUNTAS"];
      $nombre_junta2= $fila["NOMBRE_JUNTA"]; }
  
  $consulta = "SELECT ID_JUNTAS, NOMBRE_JUNTA FROM juntas WHERE ID_JUNTAS=5";
  $resultado=mysqli_query($conexion, $consulta);
  while ($fila=mysqli_fetch_array($resultado)) {
      $id_junta3= $fila["ID_JUNTAS"];
      $nombre_junta3= $fila["NOMBRE_JUNTA"]; }
    
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


        
    <header  style="background-color: rgba(24, 154, 198, 0.99); height: 100px" class="barr"> 

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

          <h3 class="titulos" style="text-align:center;color:#333 ;margin:0% auto; padding: 3% auto;"> ELECCIONES </h3>

        </div>
        <br><br><br>
<!--=============================================================Columnas========================================================================-->
        

              <div  style="height: 400px; width: 78%;background-color:  rgba(222, 232, 230, 0.8);margin-left: auto; margin-right: auto">

                <div style="height: 150px; margin: 0px 20px; width:90%;margin-left: auto; margin-right: auto">

                  <table>
                      <thead></thead>
                      <tbody>
                        <tr style="padding:50px">
                          <td style="height: 100px; width:100px"><t3> Elecciones 2021</t3></td>
                          <td style="height: 100px; width:100px"><button type="button" style="width: 100%; background-color: rgba(196, 196, 196, 1); color: black;border-color: rgba(196, 196, 196, 1); border-radius: 3px " class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">Iniciar</button></td>
                          <td style="height: 100px; width:100px"><button type="button" style="width: 100%; background-color: rgba(196, 196, 196, 1); color: black;border-color: rgba(196, 196, 196, 1); border-radius: 3px " class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">Finalizar</button></td>
                        </tr>
                      </tbody>
                  </table>
              
                </div>
                
                <button style="margin-left: 35%;width:30%" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                  Agregar
                </button>
              </div>              
          

      </div>


         <!-- Modal 2 -->
         <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">CREAR ELECCION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

              <div style="Background-color:rgba(196, 196, 196, 1);padding:10px">
                  <form action="Guardar_Eleccion.php" method="post">

                    <label for="exampleInputPassword1"  class="form-label">PERIODO</label>
                    <input type="text" REQUIRED name="Periodo_Academico" placeholder= "PERIODO ACADÉMICO" class="form-control" id="exampleInputPassword1">
                    <label for="exampleInputPassword1"  class="form-label">AÑO</label>
                    <input type="text" REQUIRED name="Anio" placeholder= "AÑO" class="form-control" id="exampleInputPassword1">
                    <label for="exampleInputPassword1"  class="form-label">CENTRO</label>
                    <input type="text" REQUIRED name="Centro_Estudio" placeholder= "CENTRO DE ESTUDIO" class="form-control" id="exampleInputPassword1">

                    <label for="disabledSelect" class="form-label">Junta Directiva#1</label>
                    <select id="disabledSelect" REQUIRED name="Junta_Directiva1" class="form-select">
                        <option><?php echo $nombre_junta1;?></option>
                        <option><?php echo $nombre_junta2;?></option>
                        <option><?php echo $nombre_junta3;?></option>
                    </select>

                    <label for="disabledSelect" class="form-label">Junta Directiva#2</label>
                    <select id="disabledSelect" REQUIRED name="Junta_Directiva2" class="form-select">
                        <option><?php echo $nombre_junta1;?></option>
                        <option><?php echo $nombre_junta2;?></option>
                        <option><?php echo $nombre_junta3;?></option>
                    </select>

                    <label for="disabledSelect" class="form-label">Junta Directiva#3</label>
                    <select id="disabledSelect" REQUIRED name="Junta_Directiva3" class="form-select">
                        <option><?php echo $nombre_junta1;?></option>
                        <option><?php echo $nombre_junta2;?></option>
                        <option><?php echo $nombre_junta3;?></option>
                    </select>
                  
                    <button type="submit" name="register" class="btn btn-primary">Crear Eleccion</button>

                  </form>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>

              </div>
            </div>
          </div>
        </div>

         <!-- Modal 3 -->
         <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Iniciar Eleccion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

              <div style="Background-color:rgba(196, 196, 196, 1);padding:10px">
                  <form action="Iniciar_Eleccion.php" method="post">
                  
                    <button type="submit" name="register" class="btn btn-primary">Si</button>

                  </form>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>

                </div>

              </div>
            </div>
          </div>
        </div>

         <!-- Modal 4 -->
         <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Finalizar Eleccion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

              <div style="Background-color:rgba(196, 196, 196, 1);padding:10px">
                  <form action="Finalizar_Eleccion.php" method="post">
                  

                  </form>
                <div class="modal-footer">
                  <button type="submit" name="register" class="btn btn-primary">Si</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>

                </div>

              </div>
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
    <script src="../controlador.js"></script>
</body>

</html>