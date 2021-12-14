<?php 
    $connection = require('../connect/connection.php');
    include 'SED.php';
    $name = $_POST['allname'];
    $direction = $_POST['direc'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $encriptar = SED::encryption($password);
    $sqlVerificar = "SELECT idUser FROM users WHERE email = '$email'";
    $resVerificar = mysqli_query($con, $sqlVerificar);
    $num_registro =  mysqli_num_rows($resVerificar);
    if($num_registro == 1) { ?>
       <script>
            alert("<?php echo "El usuario con el correo " . $email . " ya existe, utilice otro" ?>");
            window.location = "../SignIn.php";
       </script><?php
       $con->close();
    }else{
        $sql = "INSERT INTO users VALUES (null,'$name', '$direction', '$email','$encriptar','cliente')";
        if (mysqli_query($con, $sql)) {
            session_start();
            $_SESSION["usuario"] = "cliente";
            $sql = "SELECT idUser FROM users WHERE email = '$email'";
            $resultado = mysqli_query($con, $sql);
            while($fila = mysqli_fetch_assoc($resultado)) {
                $_SESSION['id_user'] = $fila['idUser'];
            }
            header("location:../index.php");
            $con->close();
        }else{
            echo "no insertado";
        }
    }
?>