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

          <h3 class="titulos" style="text-align:center;color:#333 ;margin:0% auto; padding: 3% auto;"> ¡Realiza tu elección! </h3>

        </div>
        <br><br><br>
<!--=============================================================Columnas========================================================================-->
<div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12">
                <div id="enc">

                    <div id="enc1">
                        <h1 style=" text-align:left;  margin-left:29px; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size: 28px;"> ¡Elección de la junta directiva de tu carrera! </h1>
                        <span style="color: red; font-weight: 14px; margin-left: 25px;">*Requerido</span>
                    </div>
        
                    <div id="enc5">
                        <h3 class="encs">Juntas a elegir<span style="color: red; font-weight: 20px; margin-left: 5px;">*</span></h3>
                        <div id="radioCandidatos">
                            <label class="lab"><input name="candidato" value="1" type="radio"> Xiomara Castro</label><br>
                            <label class="lab"><input name="candidato" value="2" type="radio"> Yani Rosenthal</label><br>
                            <label class="lab"><input name="candidato" value="3" type="radio"> Salvador Nasrralla</label><br>
                            <label class="lab"><input name="candidato" value="4" type="radio"> Nasry Asfura</label><br>
                        </div>
                    </div><br><br>
                    
                    <div style="position: relative; bottom: 40px; margin-left: 60px">
                        <span id="msgLLenado" style="color: red; font-weight: 14px; margin: 5px;">   </span>
                    </div>
                    
                    <input id="env" class="boton" type="button"  value="Enviar" onclick="verificarRadios();">
                    <input id="cerr" class="boton" type="button" value="Cerrar" onClick="history.go(-1)";>

                    
                </div>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="enviarEncuesta" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id="modalDECuerpo">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="poll" class="svg-inline--fa fa-poll fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" id="svg-confirmación"><path id="datos-confirmación" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM160 368c0 8.84-7.16 16-16 16h-32c-8.84 0-16-7.16-16-16V240c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v128zm96 0c0 8.84-7.16 16-16 16h-32c-8.84 0-16-7.16-16-16V144c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v224zm96 0c0 8.84-7.16 16-16 16h-32c-8.84 0-16-7.16-16-16v-64c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v64z"></path></svg>
                
                <div><span id="texto-confirmación3">Encuesta enviada con éxito</span></div>

                <button type="button" class="btn btn-secondary" id="button-confirmación-datos" style="background-color: rgb(114, 187, 194);" data-bs-dismiss="modal" onclick="LimpiarInputsEncuesta();">Ok</button>

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
    <script src="../js/controladorEncuesta.js"></script>
    <script src="../controlador.js"></script>
</body>

</html>