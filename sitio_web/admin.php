<?php 
    include 'loginToken.php';
    if(!isset($_SESSION["usuario"])){
        header("location:login.php");
    }else if($_SESSION["usuario"] !== "admin"){
        header("location:index.php");
    }else{
        $id_user = $_SESSION["id_user"];
        $conecion = require("./connect/connection.php");
        $sql = "SELECT nameUser, email, urlImg FROM users INNER JOIN imgusers ON users.idUser = imgusers.idUser2 WHERE idUser = '$id_user'";
        $resultado = mysqli_query($con, $sql);
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
                <?php while($fila = mysqli_fetch_assoc($resultado)){ 
                    if($fila['urlImg'] == "picture") {?>
                        <img class="img-perfil" src="img/imagen-perfil-sin-foto.png" /><?php 
                    }else{?>
                    <img class="img-perfil" src="./img/<?php echo $fila['urlImg'] ?>" /><?php } ?>
                </div>
                <div class="datos-admin">
                    <i class="fas fa-user"></i>
                    <p class="info-admin"><?php $rest = substr($fila["nameUser"], 0, 13); 
                    if(strlen($fila['nameUser']) <= 13) {
                        echo $fila['nameUser'];
                    }else{
                        echo $rest."...";
                    }
                    ?></p>
                </div>
                <div class="datos-admin">
                    <i class="fas fa-users-cog"></i>
                    <p class="info-admin">Administrador</p>
                </div>
                <div class="datos-admin">
                    <i class="fas fa-envelope"></i>
                    <p class="info-admin"><?php $rest = substr($fila["email"], 0, 13); 
                    if(strlen($fila['email']) <= 13){ 
                        echo $fila['email'];   
                    }else{
                        echo $rest."...";
                    } ?></p>
                </div> <?php } $con->close(); ?>
            </div>
            <div class="contenido-admin">
                <div onclick="updateUser()" class="add-product">
                    <h1 class="title-card-admin">Editar perfil</h1>
                    <hr />
                    <p class="text-info-admin">Haga clic aquí para añadir, registrar o dar de 
                        alta cualquier producto para mostrar en el sitio en el sitio web.</p>
                </div>
                <div onclick="verEmpleados()" class="admin-emple">
                    <h1 class="title-card-admin">Ver trabajadores</h1>
                    <hr />
                    <p class="text-info-admin">Haga clic aquí para ver a todos los empleados 
                        registrados en el sitio web.</p>
                </div>
                <div onclick="verClienter()" class="whatch-pro">
                    <h1 class="title-card-admin">Ver clientes</h1>
                    <hr />
                    <p class="text-info-admin">Haga clic aquí para ver todos los productos con sus detalles,
                        que se han registrados en el sitio web.</p>
                </div>
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
    </body>
</html>