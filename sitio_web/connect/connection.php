<?php 
    $HOST_DB="localhost";
    $NAME_DB="sitio_web";
    $USER_DB="root";
    $PASS_DB="";
    $con = new mysqli($HOST_DB,$USER_DB,$PASS_DB,$NAME_DB);
    if(mysqli_connect_errno()){
        echo "Connextion unSuccessFull";
        exit();
    }
    $con -> set_charset("utf8"); 
?>