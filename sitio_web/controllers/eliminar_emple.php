<?php 
    $id_usuario = $_POST['id_usuario'];
    $tipoVista = $_POST['tipo_view'];
    $select_rol = $_POST['select-rol'];
    if($select_rol == "") {
        if($tipoVista == 'viewEmple') { ?>
            <script>
            alert("El campo Privilegio no puede estar vacío");
                window.location = "../verEmpleados.php";
            </script><?php
        }else{ ?>
            <script>
                alert("El campo Privilegio no puede estar vacío");
                window.location = "../verClientes.php";
            </script><?php
        }
    }else{
        $coonect = require('../connect/connection.php');
        $sql = "UPDATE users SET tipo = '$select_rol' WHERE idUser ='$id_usuario'";
        $resultado = mysqli_query($con, $sql);
        if($resultado){
            if($tipoVista == 'viewEmple') { ?>
                <script>
                    window.location = "../verEmpleados.php";
                </script><?php
            }else{ ?>
                <script>
                    window.location = "../verClientes.php";
                </script><?php
            }
        }
    }
?>