<?php  
  session_start();
  if(isset($_SESSION["usuario"])){
    header("location:index.php");
  }
  if(isset($_COOKIE['token'])){
    if(!isset($_SESSION["usuario"])){
      setcookie("token",$_COOKIE['token'], time()-86400);
    }
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <link  rel="icon"   href="img/favicon.ico" type="image/ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/login.css" />
    <title>Electrónicos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="logeo.php" method="POST" class="sign-in-form">
            <h2 class="title">Iniciar sesión</h2>
            <div class="input-field">
              <i class="fas fa-envelope-square"></i>
              <input type="email" name="email" placeholder="Correo electrónico" required>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="pass" placeholder="Contraseña" required>
            </div>
            <div class="btn-login">
              <input type="submit" name="enviar" value="INICIAR SESIÓN" class="btn solid">
              <a href="SignIn.php" class="btn solid boton">CREAR CUENTA</a>
            </div>
            <div class="btn-recuperar-contra">
              <a href="recupContra.php" class="recuperar_contra">Recuperar mi contraseña</a>
            </div>
            <p class="social-text">Todas tus redes sosiales para visitar</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
          </form>
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Hasta 60% de descuento</h3><br>
            <p>
              Compra solo los mejores electrónicos en!
            </p>
            <h3>Electrónicos EL TOPO</h3><br>
            <button onclick="home()" class="btn transparent" id="sign-up-btn">Ver</button>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/redirec.js"></script>
  </body>
</html>