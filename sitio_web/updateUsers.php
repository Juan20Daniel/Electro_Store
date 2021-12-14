<?php 
    include 'loginToken.php';
    if(!isset($_SESSION["usuario"])){
        header("location:login.php");
    }else{
        $id_user = $_SESSION["id_user"];
        $conecion = require("./connect/connection.php");
        $sql = "SELECT nameUser, email, idImgUser, urlImg FROM users INNER JOIN imgusers ON users.idUser = imgusers.idUser2 WHERE idUser = '$id_user'";;
        $sql_datos = "SELECT * FROM users WHERE idUser = '$id_user'";
        $resultado = mysqli_query($con, $sql);
        $resultado_datos = mysqli_query($con, $sql_datos);
    }
?>
<!DOCTYPE html>
<html leng="es">
    <head>
        <meta charset="UTF-8">
        <title>Electrónicos</title>
        <link  rel="icon"   href="img/favicon.ico" type="image/ico" />
        <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/principal.css">
        <link rel="stylesheet" href="css/blog.css">
        <link rel="stylesheet" href="css/admin.css">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    </head>
    <body>
        <header>
            <div class="header-content">
                <div onclick="home()" class="logo">
                    <h1>Electrónicos EL TOPO</h1>
                </div>
                <div class="menu" id="show-menu">
                    <nav>
                        <ul>
                            <li><i class="fas fa-home"><a href="index.php">Inicio</a></i></li> 
                            <?php 
                                if(!isset($_SESSION["usuario"])){?>
                                    <li><i class="far fa-user"><a href="login.php">Iniciar sesión</a></i></li>
                                    <li><i class="far fa-file-alt"><a href="SignIn.php">Crear cuenta</a></i></li><?php
                                }
                            ?>
                            <li><i class="fas fa-users"><a href="nosotros.php">Nosotros</a></i></li> 
                            <li><i class="fas fa-question"><a href="service.php">Servicios</a></i></li><?php
                            if(isset($_SESSION["usuario"])){?>
                                <li><i class="fas fa-door-closed"><a href="./controllers/cierre.php">Cerrar sesión</a></i></li><?php
                            }?>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="icon-menu">
                <i class="fas fa-bars"></i>
            </div>
        </header>
        <div id="ctn-icon-search">
            <i class="fas fa-search" id="icon-search"></i>
        </div>
        <div id="ctn-bars-search">
            <input type="text" id="inputSearch">
            <button class="btn-buscar-text" onclick="irAlTexto()">Buscar</button>
            <ul class="menu-nav">
                <li class="menu-list"><a class="menu-link" href="tele.php">Televisores</a></li>
                <li class="menu-list"><p class="menu-link">|</p></li>
                <li class="menu-list"><a class="menu-link" href="laptop.php">Laptops</a></li>
                <li class="menu-list"><p class="menu-link">|</p></li>
                <li class="menu-list"><a class="menu-link" href="phone.php">Teléfonos</a></li>
                <li class="menu-list"><p class="menu-link">|</p></li>
                <li class="menu-list"><a class="menu-link" href="relojs.php">Relojes</a></li>
                <li class="menu-list"><p class="menu-link">|</p></li>
                <li class="menu-list"><a class="menu-link" href="audif.php">Audífonos</a></li>
            </ul>
        </div>
        <ul id="box-search">
            <li><a href="tele.php"><i class="fas fa-search"></i>Televisores</a></li>
            <li><a href="laptop.php"><i class="fas fa-search"></i>Laptops gamers</a></li>
            <li><a href="phone.php"><i class="fas fa-search"></i>Teléfonos</a></li>
            <li><a href="relojs.php"><i class="fas fa-search"></i>Relojes</a></li>
            <li><a href="audif.php"><i class="fas fa-search"></i>Audífonos</a></li>
            <li><a href="productos.php"><i class="fas fa-search"></i>Smart TV 4K Crystal TU8500</a></li>
            <li><a href="productLap.php"><i class="fas fa-search"></i>ACER PREDATOR 21X</a></li>
            <li><a href="productPhon.php"><i class="fas fa-search"></i>Asus ROG Phone II</a></li>
            <li><a href="productRel.php"><i class="fas fa-search"></i>Chronométre Optimum de F.P. Journe</a></li>
            <li><a href="productAudi.php"><i class="fas fa-search"></i>Sony WH-1000XM3</a></li>
        </ul>
        <div id="cover-ctn-search"></div>
        <div class="cont-admin">
            <div class="nemu-admin">
                <div class="img-datos-perfil">
                <?php while($fila = mysqli_fetch_assoc($resultado)){ 
                    if($fila['urlImg'] == "picture"){ ?>
                        <img class="img-perfil" src="img/imagen-perfil-sin-foto.png" />
                    <?php
                    }else{ ?>
                    <img class="img-perfil" src="img/<?php echo $fila['urlImg']; ?>" />
                        <a href="./controllers/delete_img_perfil.php?id=<?php echo $fila['idImgUser'];?>&ruta=<?php echo $fila['urlImg']; ?>"><i class="fas fa-trash-alt"></i></a>
                    <?php } ?>
                </div>
                <div <?php if($_SESSION["usuario"] == "admin"){?>
                    ondblclick="menuAdmin()"<?php
                    }else if($_SESSION["usuario"] == "empleado"){?>
                    ondblclick="menuEmple()"<?php
                    }else{ ?>
                    ondblclick="menucliente()"
                    <?php } ?>
                    class="datos-admin datos-hover-admin">
                    <i class="fas fa-bars"></i>
                    <a class="info-buton-admin">Menú principal</a>
                </div>
                <div class="datos-admin">
                    <i class="fas fa-user"></i>
                    <textarea id="resultado" disabled><?php echo $fila['nameUser']; ?></textarea>
                </div>
                <div class="datos-admin">
                    <i class="fas fa-users-cog"></i>
                    <?php if($_SESSION["usuario"] == "admin"){ ?>
                    <p class="info-admin">Administrador</p><?php 
                    }else if($_SESSION["usuario"] == "empleado"){ ?>
                    <p class="info-admin">Empleado</p><?php 
                    }else{?>
                         <p class="info-admin">Cliente</p><?php
                    } ?>
                </div>
                <div class="datos-admin">
                    <i class="fas fa-envelope"></i>
                    <textarea id="resultEmail" disabled><?php echo $fila['email']; ?></textarea>
                </div> <?php } ?>
            </div>
            <div class="container-update">
                <div class="title-update">
                    <p class="title-update-text">Mi Perfil</p>
                </div>
                <form action="./controllers/update.php" onsubmit="return confirmation()" method="POST" enctype="multipart/form-data" class="form-update">
                    <?php while($fila_datos = mysqli_fetch_assoc($resultado_datos)){ ?>
                    <div class="cont-inputs-update">
                        <div class="form-update-imputs">
                            <div class="input-update-control">
                                <labal class="update-input-text">Nombre<label>
                                <input class="input-update-text" id="newName" onkeyup="verNombre()" value="<?php echo $fila_datos["nameUser"]; ?>" type="text" name="up_nombre">
                            </div>
                            <div class="input-update-control">
                                <labal class="update-input-text">Dirección<label>
                                <input class="input-update-text" value="<?php echo $fila_datos["direccion"]; ?>" type="text" name="up_direcc">
                            </div>
                        </div>
                        <div class="form-update-imputs">
                            <div class="input-update-control">
                                <labal class="update-input-text">Email<label>
                                <input class="input-update-text" onkeyup="verEmail()" id="email" value="<?php echo $fila_datos["email"]; ?>" type="text" name="up_email">
                            </div> 
                            <div class="input-update-control">
                                <labal class="update-input-text">Contraseña<label>
                                <div class="contrasena">
                                    <input class="input-update-contra" id="password" value="<?php $desencriptar = SED::decryption($fila_datos["password"]); echo $desencriptar; ?>" type="password" name="up-contra">
                                    <div onmousedown="mostrarContrasena()" class="contra-buton"><i id="close" class="fas fa-unlock-alt"></i><i id="open" class="fas fa-lock"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="input-update-control">
                                 <labal class="update-input-text">Añadir foto de perfil<label>
                                <input class="input-update-text" type="file" name="foto_perfil" >
                            </div> 
                    </div><?php } $con->close(); ?>
                    <div class="btn-update">
                        <input type="submit" value="Guardar" class="btn-update-datos">
                    </div>
                </form>
            </div>
        </div>
        <footer class="footer">
            <a href="https://www.facebook.com" class="items">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.twitter.com" class="items">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.youtube.com" class="items">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.instagram.com" class="items">
                <i class="fab fa-youtube"></i>
            </a>
        </footer>
        <script src="js/script.js"></script>
        <script type="text/javascript" src="js/redirec.js"></script>
        <script src="js/buscar_texto.js"></script>
        <script type="text/javascript">
            function verNombre(){
                var newNombre = document.getElementById("newName").value;
                return resultado.value = newNombre;
            }
            function verEmail(){
                var newEmail = document.getElementById('email').value;
                return resultEmail.value = newEmail;
            }
            function  confirmation(){
                if(confirm("Deseas guardar los datos modificados")){
                    return true;
                }
                return false;
            }
            function mostrarContrasena(){
                var tipo = document.getElementById("password");
                if(tipo.type == "password"){
                    tipo.type = "text";
                    document.getElementById('open').style.display = 'none';
                    document.getElementById('close').style.display = 'block';
                }else{
                    tipo.type = "password";
                    document.getElementById('open').style.display = 'block';
                    document.getElementById('close').style.display = 'none';
                }
            }
        </script>
    </body>
</html>