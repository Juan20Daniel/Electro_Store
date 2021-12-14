<?php
    $id=$_GET['id'];
    $ruta=$_GET['ruta'];
    $connection = require('../connect/connection.php');
    $sql = "UPDATE imgusers SET urlImg='picture' WHERE idImgUser = '$id'";
    $resultado = mysqli_query($con, $sql);
    if($resultado){
        unlink($_SERVER['DOCUMENT_ROOT'] . '/sitio_web/img/'.$ruta); ?>
        <script>
            window.location = "../updateUsers.php";
        </script> <?php
    }
?>    