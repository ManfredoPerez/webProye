<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="vistas/css/style.css">

  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<img class="wave1" src="vistas/img/plantilla/wave.png">

<div class="container1">
  
  <div class="img1">

    <img src="vistas/img/plantilla/medicine.svg">

  </div> 

  <div class="login-content1">

    <form method="post">

      <img src="vistas/img/plantilla/avatar.svg">

      <h2 class="title1">Bienvenidos</h2>

              <div class="input-div1 one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Usuario</h5>
                    <input type="text" class="input" name="ingUsuario" required>
                   
                 </div>
              </div>


              <div class="input-div1 pass">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>Contraseña</h5>
                    <input type="password" class="input" name="ingPassword" required>
                    
                 </div>
              </div>
            
              <input type="submit" class="btn1" value="Ingresar">
      <?php

        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
        
      ?>

    </form>

  </div>

</div>

<script type="text/javascript" src="vistas/js/main.js"></script>
</body>
</html>
