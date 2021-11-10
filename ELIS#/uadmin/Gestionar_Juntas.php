<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELISE</title>
</head>
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/img1.jpg">
    <link rel="stylesheet" href="css/ELIS.css">  <!-- Este es el documento que contiene  configuraciones segun la casse-->

<!--============================================================Barra Superior=================================================================-->


<body style="background-color:#f2f2f2 ">

<?php/* 
      session_start();

      if(!isset($_SESSION["administrador"])){
        header("Location:Sing_In.php");
      }*/
?>

        
    <header  style="background-color: rgba(24, 154, 198, 0.99); height: 100px;">

      <a href="Inicio_Usuario.php"><img src="img/img1.jpg" style="height: 100%"></a>

      <!-- Botones (Anclas) de sing in, sing up y estadisticas-->

      <a href="javascript:history.back()" style="padding-left: 55%; color:white; font-size:larger;">Volver atrás</a>

      <a href="Stats.php" style="padding-left: 5%; color: white;font-size: larger;">Statistics</a>
      <a href="../cierre.php" style="padding-left: 5%; color: white;font-size: larger;">Cerrar Sesión</a>
      
    </header>

    <main>
  
<!--=============================================================Cuerpo========================================================================-->

      <div class="contenido_login" style="background-image: url(img/back.jpg);">

        
        <div>

          <h3 class="titulos" style="text-align:center;color:#333 ;margin:0% auto; padding: 3% auto;"> JUNTAS </h3>

        </div>
        <br><br><br>
<!--=============================================================Columnas========================================================================-->
        

              <div  style="height: 400px; width: 78%;background-color:  rgba(222, 232, 230, 0.8);margin-left: auto; margin-right: auto">

                <div style="height: 150px; margin: 0px 20px; width:90%;margin-left: auto; margin-right: auto">

                  <table>
                      <thead></thead>
                      <tbody>
                        <tr style="padding:50px">

                          <td style="margin: 100px; width:33%"><t3>Nombre de la Junta</t3></td>
                          <td style="margin: 100px; width:33%"><button style="margin-left: 35%;width:30%;background-color: rgba(196, 196, 196, 1); color: black;border-color: rgba(196, 196, 196, 1); border-radius: 3px " type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Editar</button></td>
                          
                        </tr>
                      </tbody>
                  </table>

              
                </div>
      
              </div>              
          

      </div>


         <!-- Modal 2 -->
         <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> EDITAR JUNTA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                
            <div style="Background-color:rgba(196, 196, 196, 1);padding:10px">
              <form action="Actualizar_Junta.php" method="post" enctype ="multipart/form-data">
                <div class="mb-3">
                  <label for="exampleInputPassword1"  class="form-label">Nombre Junta</label>
                  <input type="text" REQUIRED name="Nombre" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1"  class="form-label">Propuesta</label>
                    <input type="text" REQUIRED name="Propuesta" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1"  class="form-label">Presidente</label>
                  <input type="text" REQUIRED name="Presidente" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1"  class="form-label">VicePresidente</label>
                  <input type="text" REQUIRED name="VicePresidente" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1"  class="form-label">Tesorero</label>
                  <input type="text" REQUIRED name="Tesorero" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1"  class="form-label">Fiscal</label>
                  <input type="text" REQUIRED name="Fiscal" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1"  class="form-label">Vocal 1 </label>
                  <input type="text" REQUIRED name="Vocal1" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1"  class="form-label">Vocal 2</label>
                  <input type="text" REQUIRED name="Vocal2" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1"  class="form-label">Vocal 3</label>
                  <input type="text" REQUIRED name="Vocal3" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Logo</label>
                    <input type="file" REQUIRED name ="Logo" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Foto Junta</label>
                    <input type="file" REQUIRED name ="Foto_Junta" class="form-control" id="exampleInputPassword1">
                </div>

    
                <button type="submit" name="register" class="btn btn-primary">Editar Junta</button>
              </form>
            </div>
<!--========================================================================================================================-->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
              </div>
            </div>
          </div>
        </div>


        
<!--============================================================Footer(Publicidad)==============================================================================-->
        <footer style="background-color: transparent"> 

            <div class="container-fluid">

                <div class="row">
                
                  <div class="col-xl-4">
                    <img src="img/img6.jpg"  class="rounded float-start" style="height: 300px">
                  </div>
                  <div class="col-xl-4">
                    <div class="rounded mx-auto d-block">
                    </div>
                  </div>
                  <div class="col-xl-4">
                    <img src="img/img2.jpg" class="rounded float-end" style="height: 300px">
                  </div>
                </div>
              </div>
            
        
        </footer>

      
    </main>

    
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="../controlador.js"></script>
</body>

</html>














<tr style="padding:50px">
                          <td style="margin: 100px; width:33%"><t3>Nombre de Eleccion</t3></td>
                          <td style="margin: 100px; width:33%"><button type="submit" style="width: 100%; background-color: rgba(196, 196, 196, 1); color: black;border-color: rgba(196, 196, 196, 1); border-radius: 3px ">Iniciar</button></td>
                        </tr>
                        <!--Junta #2-->
                        <tr style="padding:50px">
                          <td style="margin: 100px; width:33%"><t3>Nombre de Eleccion</t3></td>
                          <td style="margin: 100px; width:33%"><button type="submit" style="width: 100%; background-color: rgba(196, 196, 196, 1); color: black;border-color: rgba(196, 196, 196, 1); border-radius: 3px ">Editar</button></td>
                        </tr>
