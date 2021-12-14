<?php 
    include 'SED.php';
    $recupContra = $_POST['email_recup'];
    $conection = require('../connect/connection.php');
    $sql = "SELECT email FROM users WHERE email = '$recupContra'";
    $resultado = mysqli_query($con, $sql);
    $num_verify = mysqli_num_rows($resultado);
    if($num_verify == 1) { 
        $sql_recup = "SELECT password FROM users WHERE email = '$recupContra'"; 
        $result_recup = mysqli_query($con, $sql_recup); 
        while($fila = mysqli_fetch_assoc($result_recup)){ 
            $desencriptar = SED::decryption($fila['password']);
        }
        $to = $recupContra;
        $subject = "Recuperación de contraseña";
        $message = "Contraseña: ".$desencriptar;
        $headers = "Form: electronicostopo@gmail.com" ."\r\n".
                "Reply-to: electronicostopo@gmail.com". "\r\n".
                "x-Mailer: PHP/" .phpversion();
        mail($to, $subject, $message, $headers); ?>
        <script>
            alert("La contraseña se envío al correo: <?php echo $recupContra ?>");
            window.location = "../login.php";
        </script><?php
    }else{ ?>
        <script>
            alert("El correo <?php echo $recupContra ?>  no existe");
            window.location = "../recupContra.php";
        </script><?php
    }
?>