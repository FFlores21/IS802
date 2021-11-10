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


  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
    <symbol id="solicitud" viewBox="0 0 16 16">
      <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
      <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
    </symbol>
  </svg>
        
    <header  style="background-color: rgba(24, 154, 198, 0.99); height: 100px;">

      <a href="Inicio_Usuario.php"><img src="../img/img1.jpg" style="height: 100%"></a>

      <!-- Botones (Anclas) de sing in, sing up y estadisticas-->

      <a class="boton" style="padding-left: 35%; color:white; font-size:larger;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        <svg class="bi me-2" width="30" height="30"><use xlink:href="#solicitud"/></svg>Solicitud
      </a>

      <a href="Candidatos.php" style="padding-left: 5%; color: white;font-size: larger;">Candidatos</a>

      <a href="Stats.php" style="padding-left: 5%; color: white;font-size: larger;">Statistics</a>

      <a href="../cierre.php" style="padding-left: 5%; color: white;font-size: larger;">Cerrar Sesión</a>
    </header>

    <main>

<!--=============================================================Caruzel========================================================================-->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-indicators">
           <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
           <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
           <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
         </div>
         <div class="carousel-inner">
           <div class="carousel-item active">
             <img src="../img/Ejemplo1.jpeg" class="d-block w-100" >
             <div class="carousel-caption d-none d-md-block">
               <h5>Trump</h5>
               <p>Some representative placeholder content for the first slide.</p>
             </div>
           </div>
           <div class="carousel-item">
             <img src="../img/Ejemplo3.jpeg" class="d-block w-100" >
             <div class="carousel-caption d-none d-md-block">
               <h5>Bukele</h5>
               <p>Some representative placeholder content for the second slide.</p>
             </div>
           </div>
           <div class="carousel-item">
             <img src="../img/Ejemplo2.jpeg" class="d-block w-100" >
             <div class="carousel-caption d-none d-md-block">
               <h5>Viden</h5>
               <p>Some representative placeholder content for the third slide.</p>
             </div>
           </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Next</span>
         </button>
      </div>

    
    

<!--=============================================================Cuerpo========================================================================-->

      <div class="contenido">

        <!-- Propuestas, Imagenes, Barra Inferior-->

        <div>
          <h3 class="titulos" style="text-align:center;color:#333 ;margin:1% auto"> ELISE TE PERMITE ELEGIR TU CANDIDATO, MAS FACIL QUE NUNCA</h3>
          <div class="container-fluid">

            <div class="row">
            
              <div class="col-xl-4">
                <img src="../img/img5.jpg"  class="rounded float-start" style="height: 300px">
              </div>
              <div class="col-xl-4">
                <div class="rounded mx-auto d-block">
                  <div><!-- Propuesta Minuatura #1--> 
                    <div style="background-image: url(../img/Ejemplo1.jpeg); background-size: cover; background-repeat: no-repeat; height: 150px"></div>
                    <a href="Candidatos.php" style="color: black;">”Aseguramos la construcción de Hopitales”</a>  
                  </div>

                  <div><!-- Propuesta Miniatura #2 -->
                    <div style="background-image: url(../img/Ejemplo3.jpeg); background-size: cover; background-repeat: no-repeat; height: 150px"></div>
                    <a href="Candidatos.php" style="color: black;">“Juntos venceremos el Covid”</a>
                  </div>

                  <div><!-- Propuesta Miniatura #3-->
                    <div style="background-image: url(../img/Ejemplo2.jpeg); background-size: cover; background-repeat: no-repeat; height: 150px"></div>
                    <a href="Candidatos.php" style="color: black;">“La educacion es lo más importante”</a>
                  </div>
                </div>
              </div>
              <div class="col-xl-4">
                <div class="list-group">
                  <a href="#" style="background-color: rgba(24, 154, 198, 0.99);" class="list-group-item list-group-item-action active">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">Mensajes</h5>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">Solicitud Aceptada</h5>
                      <small>3 days ago</small>
                    </div>
                    <p class="mb-1">Estimado aspirante se le informa que su solicitud cumple con todos los requitos y por lo tanto fue aceptado como candidato</p>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">Solicitud Rechazada</h5>
                    </div>
                    <p class="mb-1">Estimado aspirante se le informa que su solicitud no cumple con todos los requitos requeridos y por lo tanto fue rechazado como candidato</p>
                  </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </main>



<!--============================================================Modal==============================================================================-->
 
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content  modal_solicitud">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Solicitar Postulacion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nombre Junta</label>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label for="formFileMultiple" class="form-label">Requisitos</label>
          <input class="form-control" type="file" id="formFileMultiple" multiple>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>

<!--============================================================Footer(Publicidad)==============================================================================-->
    <footer style="background-color: rgba(24, 154, 198, 0.64);"> 
        <h5 style="text-align: center; color: white;">Vota por tu candidato</h5>
        <h3 style="text-align: center; color: white;">Elis se caracteriza por su organización, por lo que tu particpación es importante,<br>¡selecciona tu candidato y aporta al desarrollo del presente proceso!</h3>
        <div style="background-image: url(../img/img3.jpg); background-size: cover; background-repeat: no-repeat; background-position: top center; height: 250px; width: 33%; margin-left: 33%"></div>
    </footer>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
