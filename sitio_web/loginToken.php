<?php 
  include 'controllers/SED.php';
  $conection = require("connect/connection.php");
  if(isset($_COOKIE['token'])){
    $desencript = SED::decryption($_COOKIE['token']);
    $sql = "SELECT * FROM users WHERE idUser='$desencript'";
    $resultado = mysqli_query($con, $sql);
    session_start();
    while($fila = mysqli_fetch_assoc($resultado)){
        $_SESSION['usuario'] = $fila['tipo'];
        $_SESSION["id_user"] = $fila['idUser'];
    }
  }
?>