<?php 
  session_start();
  if(isset($_SESSION['usuario'])){
    header("location:index.php");
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Electrónicos</title>
    <meta charset="UTF-8" />
    <link  rel="icon"   href="img/favicon.ico" type="image/ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/login.css" />
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="./controllers/addUser.php" method="POST" class="sign-in-form">
            <h2 class="title">Crear cuenta</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="allname" id="nombre" placeholder="Nombre"  required>
            </div> <div class="input-field">
              <i class="fas fa-street-view"></i>
              <input type="text" name="direc" id="direct" placeholder="Dirección" required>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope-square"></i>
              <input type="email" name="email" id="email_user" placeholder="Correo electrónico" required>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="pass" id="password" placeholder="Contraseña" required>
            </div>
            <div class="btn-login">
              <input type="button" onclick="redirection()" id="button_ir" class="btn solid boton" value="INICIAR SESIÓN">
              <input type="submit" value="CREAR CUENTA" class="btn solid left-botom">
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
                <i class="fab fa-google"></i>
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
            <h3>Electrónicos EL TOPO</h3><br>
            <p>
              Te ofrece las mejores ofertas en electrónios.
            </p>
            <h3>¡Garantia hasta de 1 año sin intereses!</h3><br>
            <button onclick="redirection_home()" class="btn transparent" value="ver" id="button_ir">Ver</button>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/redirec.js"></script>
    <script>
      function redirection(){
        var name = document.getElementById('nombre').value;
        var direct = document.getElementById('direct').value;
        var email = document.getElementById('email_user').value;
        var pass = document.getElementById('password').value;
        if(name == "" && direct == "" && email == "" && pass == ""){
            window.location = "login.php";
        }else{
          var mensaje;
          var opcion = confirm("No se creará la cuenta si sale del registro");
          if (opcion == true) {
              window.location = "login.php";
          } 
          document.getElementById("ejemplo").innerHTML = mensaje;
        }
      }
      function redirection_home(){
        var name = document.getElementById('nombre').value;
        var direct = document.getElementById('direct').value;
        var email = document.getElementById('email_user').value;
        var pass = document.getElementById('password').value;
        if(name == "" && direct == "" && email == "" && pass == ""){
            window.location = "index.php";
        }else{
          var mensaje;
          var opcion = confirm("No se creará la cuenta si sale del registro");
          if (opcion == true) {
              window.location = "index.php";
          } 
          document.getElementById("ejemplo").innerHTML = mensaje;
        }
      }
    </script>
  </body>
</html>
