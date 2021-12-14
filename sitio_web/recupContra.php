<?php 
  session_start();
  if(isset($_SESSION["usuario"])){
    header("location:index.php");
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
          <form action="./controllers/recupContra.php" method="POST" class="sign-in-form">
            <h2 class="title">Recuperar contraseña</h2>
            <div>
                <p>La contraseña se le emviara a su correo electrónico, 
                después de verificar que el correo ingresado, existe en el sitio web.</p>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope-square"></i>
              <input type="email" name="email_recup" placeholder="Verificación de correo electrónico" required>
            </div>
            <div class="btn-login">
              <input type="submit" name="enviar" value="Verificar" class="btn solid">
              <a href="login.php" class="btn solid boton">INICIAR SESIÓN</a>
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
            <h3>Electrónicos de calidad</h3><br>
            <p>
              Clientes 100% satisfechos con cada compra en
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