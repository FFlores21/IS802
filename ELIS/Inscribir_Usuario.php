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

        
    <header  style="background-color: rgba(24, 154, 198, 0.99); height: 100px;">

      <img src="img/img1.jpg" style="height: 100%">

      <!-- Botones (Anclas) de sing in, sing up y estadisticas-->

      <a href="Sing In.html" style="padding-left: 75%; color:white; font-size:larger;">Sing In</a>

      <a href="Landing.html" style="padding-left: 5%; color: white;font-size: larger;">Statistics</a>

      
    </header>

    <main>
  
<!--=============================================================Cuerpo========================================================================-->

      <div class="contenido_login" style="background-image: url(img/back.jpg);">

        
        <div>

          <h3 class="titulos" style="text-align:center;color:#333 ;margin:0% auto; padding: 3% auto;"> DATOS</h3>

        </div>


<!--=============================================================Formulario========================================================================-->

        <div class="formulario">
            <form action="Guardar_Usuario.php" method="POST">
                <div class="mb-3">
                  <label for="exampleInputPassword1"  class="form-label">Nombres</label>
                  <input type="text" REQUIRED name="Nombres" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1"  class="form-label">Apellidos</label>
                    <input type="text" REQUIRED name="Apellidos" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1"  class="form-label">Cuenta</label>
                    <input type="text" REQUIRED name="Cuenta" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">                  
                    <label for="disabledSelect" class="form-label">Genero</label>
                    <select id="disabledSelect" REQUIRED name="Genero" class="form-select">
                        <option>Select List</option>
                        <option>Masculino</option>
                        <option>Femenino</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo Institucional</label>
                    <input type="email" REQUIRED name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                  <input type="password" REQUIRED name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Confirmar Contraseña</label>
                  <input type="password" REQUIRED name="password2" class="form-control" id="exampleInputPassword1">
                </div>  
    
                <button type="submit" class="btn btn-primary">Sing Up</button>
            </form>
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

      </div>
    </main>

    
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>