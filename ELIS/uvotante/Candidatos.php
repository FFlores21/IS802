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

<?php
      session_start();

      if(!isset($_SESSION["usuario"])){
        header("Location:Sing_In.php");
      }
?>

        
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
                <div style="background-image: url(../img/Ejemplo2.jpeg); background-size: cover; background-repeat: no-repeat; height: 350px; margin: 20px;"></div>
                <p style="text-align: center; font-size: 30px"> COESYS:</p>
                </br>
                <p style="text-align: center"> “La educacion es lo más importante” </br>
                  “Se regalara Pizza el ultimo jueves de cada mes”</p>
              </br>
                <button style="margin-left: 40%;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                  Detalles
                </button>
              </div>              
            </div>

            <div class="col-xl-4">

              <div class="rounded mx-auto d-block" style="height: 800px; width: 90%;background-color:  rgba(222, 232, 230, 0.8)">
                <div style="background-image: url(../img/Ejemplo1.jpeg); background-size: cover; background-repeat: no-repeat; height: 350px; margin: 0px 20px"></div>
                <p style="text-align: center; font-size: 30px"> SYSTEAM:</p>
                </br>
                <p style="text-align: center"> “Juntos venceremos el Covid”</br>
                  *Se realizarán jornadas deporte al final de cada período académico.</p>
              </br>
                <button style="margin-left: 40%;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                  Detalles
                </button>
              </div>              
            </div>

            <div class="col-xl-4">

              <div class="rounded float-end" style="height: 800px; width: 90%; background-color:  rgba(222, 232, 230, 0.8)">
                <div style="background-image: url(../img/Ejemplo3.jpeg); background-size: cover; background-repeat: no-repeat; height: 350px; margin: 0px 20px">Imagen Fondo</div>
                <p style="text-align: center; font-size: 30px"> AJAX IS:</p>
                </br>
                <p style="text-align: center"> ”Aseguramos la construcción de Hopital Universitario"</br>
                  *Se regalaran cupones de Bigos por Indice en el PAC</br>
                  *Se realizarán jornadas deporte al final de cada período académico.</p>
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
                <h5 class="modal-title" id="exampleModalLabel"> Junta Directiva COESYS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div style="background-image: url(../img/win95.png); background-size: cover; background-repeat: no-repeat; height: 300px; margin: 10px 50PX"></div>
                <p style="text-align: center"> INTEGRANTES: </br> 
                                            Jose Zelaya-(Presidente)</br>
                                            Fausto Flores-(Vice-Presidente)</br>
                                            Erick Montoya-(Tesorero)</br>
                                            Esdras Escoto-(Fiscal)</br>
                                            Eduardo Coello-(Vocal 1)</br>
                                            Bryan Ramos-(Vocal 2)</br>
                                            Oscar Blanco-(Vocal 3)</br></br></br>
                                            PROPUESTAS:</br>
                                            *Se realizarán jornadas deporte al final de cada período académico.</br>
                                            *Se regalara Pizza el ultimo jueves de cada mes.</br></p>
                </br>
                <p style="text-align: center"> “Juntos venceremos el Covid”</br>
                  *Se realizarán jornadas deporte al final de cada período académico.</p>
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
                <h5 class="modal-title" id="exampleModalLabel"> Junta Directiva SYSTEAM</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div style="background-image: url(../img/atomo.png); background-size: cover; background-repeat: no-repeat; height: 300px; margin: 10px 50PX"></div>
                <p style="text-align: center"> INTEGRANTES: </br> 
                                            Jose Zelaya-(Presidente)</br>
                                            Fausto Flores-(Vice-Presidente)</br>
                                            Erick Montoya-(Tesorero)</br>
                                            Esdras Escoto-(Fiscal)</br>
                                            Eduardo Coello-(Vocal 1)</br>
                                            Bryan Ramos-(Vocal 2)</br>
                                            Oscar Blanco-(Vocal 3)</br></br></br>
                                            PROPUESTAS:</br>
                                            *Se realizarán jornadas deporte al final de cada período académico.</br>
                                            *Se regalara Pizza el ultimo jueves de cada mes.</br></p>
                </br>
                <p style="text-align: center"> “Juntos venceremos el Covid”</br>
                  *Se realizarán jornadas deporte al final de cada período académico.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>


        <!-- Modal 3 -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Junta Directiva AJAX IS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div style="background-image: url(../img/laptop.png); background-size: cover; background-repeat: no-repeat; height: 300px; margin: 10px 50PX"></div>
                <p style="text-align: center"> INTEGRANTES: </br> 
                                            Jose Zelaya-(Presidente)</br>
                                            Fausto Flores-(Vice-Presidente)</br>
                                            Erick Montoya-(Tesorero)</br>
                                            Esdras Escoto-(Fiscal)</br>
                                            Eduardo Coello-(Vocal 1)</br>
                                            Bryan Ramos-(Vocal 2)</br>
                                            Oscar Blanco-(Vocal 3)</br></br></br>
                                            PROPUESTAS:</br>
                                            *Se realizarán jornadas deporte al final de cada período académico.</br>
                                            *Se regalara Pizza el ultimo jueves de cada mes.</br></p>
                </br>
                <p style="text-align: center"> “Juntos venceremos el Covid”</br>
                  *Se realizarán jornadas deporte al final de cada período académico.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
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