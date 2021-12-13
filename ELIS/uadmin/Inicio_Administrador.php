<?php
      session_start();

      if(!isset($_SESSION["admin"])){
        header("Location:Sign_InA.php");
      }
?>
<?php

    
$correo_session=$_SESSION["admin"];
              
$conexion=mysqli_connect('localhost', 'root', '');
if(mysqli_connect_errno()){
    echo "Fallo al conectar con la BBDD";
    exit();
}
mysqli_select_db($conexion, 'db_elis(2.0)') or die ("no se encuentra db");
mysqli_set_charset($conexion, "utf8");

$consulta = "SELECT NOMBRE_JUNTA, PROPUESTA FROM juntas WHERE ID_JUNTAS=1";
$resultado=mysqli_query($conexion, $consulta);
while ($fila=mysqli_fetch_array($resultado)) {
    $nombre1= $fila["NOMBRE_JUNTA"]; 
    $propuesta1= $fila["PROPUESTA"];}
$consulta = "SELECT NOMBRE_JUNTA, PROPUESTA FROM juntas WHERE ID_JUNTAS=2";
$resultado=mysqli_query($conexion, $consulta);
while ($fila=mysqli_fetch_array($resultado)) {
    $nombre2= $fila["NOMBRE_JUNTA"];
    $propuesta2= $fila["PROPUESTA"];}
$consulta = "SELECT NOMBRE_JUNTA, PROPUESTA FROM juntas WHERE ID_JUNTAS=5";
$resultado=mysqli_query($conexion, $consulta);
while ($fila=mysqli_fetch_array($resultado)) {
    $nombre3= $fila["NOMBRE_JUNTA"]; 
    $propuesta3= $fila["PROPUESTA"];}



    $solicitud_usuario="";
    $id_solicitud=4;
    
    $consulta = "SELECT MENSAJE, ESTATUS FROM solicitudes WHERE ID_SOLICITUD ='$id_solicitud'";
    $resultado=mysqli_query($conexion, $consulta);
    while ($fila=mysqli_fetch_array($resultado)) {
        $solicitud_usuario= $fila["MENSAJE"]; 
        $estatus_solicitud= $fila["ESTATUS"];}

    
    
    
    


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



        
    <header  style="background-color: rgba(24, 154, 198, 0.99); height: 100px;" class="barr">

      <img src="../img/img1.jpg" style="height: 100%">

      <!-- Botones (Anclas) de sing in, sing up y estadisticas-->


      <a href="Gestionar_Elecciones.php" style="padding-left: 3%; color: white;font-size: larger;">Gestionar Elecciones</a>

      <a href="Gestionar_Juntas.php" style="padding-left: 3%; color: white;font-size: larger;">Gestionar Juntas</a>

      <a href="Inscribir_Junta.php" style="padding-left: 3%; color: white;font-size: larger;">Inscribir Junta</a>

      <a href="Inscribir_Administrador.php" style="padding-left: 3%; color: white;font-size: larger;">Inscribir Administrador</a>

      <a href="../uvotante/Stats.php" style="padding-left: 3%; color: white;font-size: larger;">Statistics</a>

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
             <img src="../img/img_junta1.jpg" class="d-block w-100" >
             <div class="carousel-caption d-none d-md-block">
               <h5><?php echo $nombre1;?></h5>
               <p><?php echo $propuesta1;?></p>
             </div>
           </div>
           <div class="carousel-item">
             <img src="../img/img_junta2.jpg" class="d-block w-100" >
             <div class="carousel-caption d-none d-md-block">
               <h5><?php echo $nombre2;?></h5>
               <p><?php echo $propuesta2;?></p>
             </div>
           </div>
           <div class="carousel-item">
             <img src="../img/img_junta3.jpg" class="d-block w-100" >
             <div class="carousel-caption d-none d-md-block">
               <h5><?php echo $nombre3;?></h5>
               <p><?php echo $propuesta3;?></p>
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
                    <div style="background-image: url(../img/img_junta1.jpg); background-size: cover; background-repeat: no-repeat; height: 150px"></div>
                    <a href="Candidatos.php" style="color: black;">”<?php echo $propuesta1;?>”</a>  
                  </div>

                  <div><!-- Propuesta Miniatura #2 -->
                    <div style="background-image: url(../img/img_junta2.jpg); background-size: cover; background-repeat: no-repeat; height: 150px"></div>
                    <a href="Candidatos.php" style="color: black;">“<?php echo $propuesta2;?>”</a>
                  </div>

                  <div><!-- Propuesta Miniatura #3-->
                    <div style="background-image: url(../img/img_junta3.jpg); background-size: cover; background-repeat: no-repeat; height: 150px"></div>
                    <a href="Candidatos.php" style="color: black;">“<?php echo $propuesta3;?>”</a>
                  </div>
                </div>
              </div>
              <div class="col-xl-4">
                <div class="list-group">
                  <a href="#" style="background-color: rgba(24, 154, 198, 0.99);" class="list-group-item list-group-item-action active">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">Solicitudes</h5>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">Solicitud de Inscripción</h5>
                    </div>
                    <p class="mb-1"><?php echo $solicitud_usuario;?></p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal5">Aprobar</button>

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

         <!-- Modal 5 -->
         <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aprobar Solicitud</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

              <div style="Background-color:rgba(196, 196, 196, 1);padding:10px">
                  <form action="Aprobar_Solicitud.php" method="post">
                  
                    <button type="submit" name="register" class="btn btn-primary">Si</button>

                  </form>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>

                </div>

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
