<?php
    try {
        include 'controllers/SED.php';
        $base = new PDO("mysql:host=localhost; dbname=sitio_web", "root", "");
        $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM users WHERE email= :email";
        $resultado = $base->prepare($sql);
        $correo = htmlentities(addslashes($_POST['email']));
        $passw = htmlentities(addslashes($_POST['pass']));
        $resultado -> bindValue(":email", $correo);
        $resultado -> bindValue(":pass", $passw);
        $resultado -> execute(array(":email"=>$correo));
        $num_registro = $resultado -> rowCount();
        if($num_registro == 0) { ?> 
            <script>
                alert("<?php echo "El usuario con el correo ". $correo . " no existe"; ?>");
                window.location = "login.php";
            </script><?php
        }
        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
            $desencriptar = SED::decryption($registro['password']);
            if($passw == $desencriptar) {
                session_start();
                $_SESSION["usuario"] = $registro['tipo'];
                $_SESSION["id_user"] = $registro['idUser'];
                $token = SED::encryption($registro['idUser']);
                setcookie("token", $token, time()+86400);
                if($registro['tipo'] == "cliente") {
                   header("location:cliente.php?token=$token");
                }else if($registro['tipo'] == "empleado") {
                    header("location:empleado.php?token=$token");
                }else if($registro["tipo"] == "admin") {
                    header("location:admin.php?token=$token");
                }
            }else{ ?>
                <script>
                    alert("<?php echo "La contraseña no es correcta"; ?>");
                    window.location = "login.php";
                </script><?php
            }
        }
    }catch(Exception $e) {
        die("Error: " . $e->getMessage());
    }
?>