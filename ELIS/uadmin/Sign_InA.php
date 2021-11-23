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

      <a href="../index.php"><img src="../img/img1.jpg" style="height: 100%"></a>

      <!-- Botones (Anclas) de sing in, sing up y estadisticas-->

      <a href="Inscribir_Usuario.php" style="padding-left: 55%; color:white; font-size:larger;">Sing Up</a>

      <a href="Stats.php" style="padding-left: 5%; color: white;font-size: larger;">Statistics</a>

      
    </header>

    <main>
  
<!--=============================================================Cuerpo========================================================================-->

      <div class="contenido_login" style="background-image: url(../img/back.jpg);">

        
        <div>

          <h3 class="titulos" style="text-align:center;color:#333 ;margin:0% auto"> ELISE TE PERMITE ELEGIR TU CANDIDATO, MAS FACIL QUE NUNCA, BIENVENIDO ADMINISTRADOR</h3>

        </div>


<!--=============================================================Formulario========================================================================-->

        <div class="formulario">
            <form action="Iniciar_sesionA.php" method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label" >Mail</label>
                  <input type="email" name="emailSA" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
<!--                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>          -->
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="contrasenaSA" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
<!--                  <input type="checkbox" class="form-check-input" id="exampleCheck1">                                 -->
<!--                  <label class="form-check-label" for="exampleCheck1">Check me out</label>                            -->
                </div>
                <button type="submit" name="entrarA" class="btn btn-primary">Sing In</button>
            </form>
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

      </div>
    </main>

    
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>