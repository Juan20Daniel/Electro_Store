<?php
    session_start();
    include 'SED.php';
    $id_user_up = $_SESSION['id_user'];
    $nombre = $_POST['up_nombre'];
    $direcc = $_POST['up_direcc'];
    $email_up = $_POST['up_email']; 
    $upContr = $_POST['up-contra'];
    $encriptar = SED::encryption($upContr);
    $nombre_foto = $_FILES['foto_perfil']['name'];
    $tipo_foto = $_FILES['foto_perfil']['type'];
    $tamano = $_FILES['foto_perfil']['size'];
    $conexion = require("../connect/connection.php");
    if(!$nombre_foto == "") {
        $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/sitio_web/img/';
        move_uploaded_file($_FILES['foto_perfil']['tmp_name'], $carpeta_destino.$nombre_foto);
        $sqlFoto = "UPDATE imgusers SET urlImg='$nombre_foto' WHERE idUser2 = '$id_user_up'";
        $resulFoto = mysqli_query($con, $sqlFoto);
    }
    $sql = "UPDATE users SET nameUser = '$nombre', direccion = '$direcc', email = '$email_up', password = '$encriptar' WHERE idUser = '$id_user_up'";
    $resultado = mysqli_query($con, $sql);
    if($tamano >= 1000000) { ?>
        <script>
            alert("La imagen es muy pesada, seleccione otra de tamaño maximo de 1 MB");
            window.location = "../updateUsers.php";
        </script><?php
    }else{
        header("location:../updateUsers.php");
    }
?>