<?php 
    include 'loginToken.php';
    if(!isset($_SESSION['usuario'])){
        header("location:login.php");
    }else if($_SESSION['usuario'] !== "admin" && $_SESSION['usuario'] !== "empleado"){
        header("location:index.php");
    }else{
        $id_user = $_SESSION['id_user'];
        $conecion = require("./connect/connection.php");
        $sql = "SELECT nameUser, email, urlImg FROM users INNER JOIN imgusers ON users.idUser = imgusers.idUser2 WHERE idUser = '$id_user'";
        $sql_cliente = "SELECT idUser, nameUser, direccion, email, tipo, urlImg FROM users INNER JOIN imgusers ON users.idUser = imgusers.idUser2 WHERE tipo = 'cliente'";
        $resultado = mysqli_query($con, $sql);
        $resultato_cliente = mysqli_query($con, $sql_cliente);
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
                                if(!isset($_SESSION['usuario'])){?>
                                    <li><i class="far fa-user"><a href="login.php">Iniciar sesión</a></i></li>
                                    <li><i class="far fa-file-alt"><a href="SignIn.php">Crear cuenta</a></i></li><?php
                                }
                            ?>
                            <li><i class="fas fa-users"><a href="nosotros.php">Nosotros</a></i></li> 
                            <li><i class="fas fa-question"><a href="service.php">Servicios</a></i></li><?php
                            if(isset($_SESSION['usuario'])){?>
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
                <?php while($fila = mysqli_fetch_assoc($resultado)) { 
                    if($fila['urlImg'] == "picture"){ ?>
                        <img class="img-perfil" src="img/imagen-perfil-sin-foto.png" /><?php
                    }else{ ?>
                        <img class="img-perfil" src="./img/<?php echo $fila['urlImg']; ?>" /><?php
                    } ?>
                </div>
                <div ondblclick="menuAdmin()" class="datos-admin datos-hover-admin">
                    <i class="fas fa-bars"></i>
                    <a class="info-buton-admin" href="#">Menú principal</a>
                </div>
                <div class="datos-admin">
                    <i class="fas fa-user"></i>
                    <p class="info-admin"><?php $rest = substr($fila['nameUser'], 0, 13); 
                    if(strlen($fila['nameUser']) <= 12) {
                        echo $fila['nameUser'];
                    }else{
                        echo $rest."...";
                    } ?></p>
                </div>
                <div class="datos-admin">
                    <i class="fas fa-users-cog"></i>
                    <p class="info-admin">Administrador</p>
                </div>
                <div class="datos-admin">
                    <i class="fas fa-envelope"></i>
                    <p class="info-admin"><?php $rest = substr($fila['email'], 0, 13); 
                    if(strlen($fila['email']) <= 13){
                        echo $fila['email'];
                    }else{
                        echo $rest."...";
                    } ?></p>
                </div><?php } $con->close();?>
            </div>
            <div class="empleados-admin">
                <div class="admin-emples-title">
                    <div class="datos-empleado-title">
                        <p>Lista de los Clientes Registrados</p>
                    </div>
                </div>
                <?php while($fila_emple = mysqli_fetch_assoc($resultato_cliente)) { ?>
                <div class="admin-emples"><?php
                    if($fila_emple['urlImg'] !== 'picture'){ ?>
                        <img src="img/<?php echo $fila_emple['urlImg']; ?>"><?php
                    }else{?>
                        <img class="img-perfil-none" src="img/imagen-perfil-sin-foto.png" /><?php
                    }?>
                    <div class="datos-empleado">
                        <h1><?php echo $fila_emple['nameUser']; ?></h1><br/>
                        <p><?php echo $fila_emple['direccion']; ?></p>
                        <p><?php echo $fila_emple['email']; ?></p><br>
                        <form method="POST" action="./controllers/eliminar_emple.php" onsubmit="return confirmation()">
                            <input type="hidden" name="tipo_view" value="viewClient" />
                            <input type="hidden" name="id_usuario" value="<?php echo $fila_emple['idUser']; ?>">
                            <select class="select-rol" name="select-rol"><?php
                                if($_SESSION['usuario'] == 'admin'){ ?>
                                    <option value="" selected>Cliente</option>
                                    <option value="admin">Administrador</option>
                                    <option value="empleado">Empleado</option>
                                <?php }else{ ?>
                                    <option value="" selected>Cliente</option>
                                    <option value="empleado">Empleado</option>
                                <?php } ?>
                            </select>
                            <input type="submit" class="btn-despedir-emple" value="Aceptar">
                        </form>
                    </div>
                </div>
                <?php } ?>
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
        <script>
            function confirmation() {
                if(confirm("Modificar privilegio"))
                {
                    return true;
                }
                return false;
            }
        </script>
    </body>
</html>