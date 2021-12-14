<?php
    include 'loginToken.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Electrónicos</title>
    <link  rel="icon"   href="img/favicon.ico" type="image/ico" />
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/blog.css">
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
                            if(isset($_SESSION["usuario"])){
                                if($_SESSION["usuario"] == "admin"){ ?>
                                    <li><i class="far fa-user"><a href="admin.php">Mi cuenta</a></i></li><?php
                                }else if($_SESSION["usuario"] == "empleado"){?>
                                    <li><i class="far fa-user"><a href="empleado.php">Mi cuenta</a></i></li><?php
                                }else if($_SESSION["usuario"] == "cliente") {?>
                                     <li><i class="far fa-user"><a href="cliente.php">Mi cuenta</a></i></li><?php
                                }
                            }else{?>
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
    <section class="cont-carrucel">
        <div class="breadcrumbs">
            <ul class="bread-links">
                <li class="link-bread"><a class="a-bread a-hover" href="index.php"><i class="fas fa-home"></i></a></li>
                <li class="link-bread"><p class="a-bread link_breadcrumbs_active">Todas las laptops</p></li>
            </ul>
        </div>
        <div class="slider">
            <ul>
                <li><img src="./img/0-2.jpg" alt="imgs"></li>
                <li><img src="./img/asus-republic-of-gamers-peru-1024x580.jpg" alt="imgs"></li>
                <li><img src="./img/ROG-Mothership-un-2-en-1-Potencia-de-PC-en-un-portátil-tecnolocura-6.jpg" alt="imgs"></li>
                <li><img src="./img/ASUS-ROG-Mothership.jpg" alt="imgs"></li>
            </ul>
        </div>
    </section>
    <div class="main" id="move-content">
        <div class="cards">
            <div class="card-produc">
                <div class="card-title">
                    <h1>Sharp LV-70X500E</h1>
                    <hr>
                </div>
                <div class="card-img">
                    <img class="imgTele" src="./img/Portátil-Gaming-ASUS-1000x600.jpg" alt="img">
                </div>
                <div class="info">
                    <p class="caracteristicas">Pantalla de 70 pulgadas</p>
                    <p class="caracteristicas">Resolución 7680 x 4320 píxeles</p>
                    <p class="caracteristicas">Costo $ 11,199 pesos</p>
                </div>
                <a href="productLap.php" class="card-butom">
                    <div class="icono">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <p class="text-icon">VER MÁS INFORMACIÓN</p>
                </a>
            </div>
            <div class="card-produc">
                <div class="card-title">
                    <h1>ACER PREDATOR 21X</h1>
                    <hr>
                </div>
                <div class="card-img">
                    <img class="imgTele" src="./img/Captura5.PNG" alt="img">
                </div>
                <div class="info">
                    <p class="caracteristicas">Pantalla con 7680 píxeles</p>
                    <p class="caracteristicas">Resolución 7680 x 4320 píxeles</p>
                    <p class="caracteristicas">Costo $ 599,999 pesoss</p>
                </div>
                <a href="productLap.php" class="card-butom">
                    <div class="icono">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <p class="text-icon">VER MÁS INFORMACIÓN</p>
                </a>
            </div>
            <div class="card-produc">
                <div class="card-title">
                    <h1>ASUS ROG G752VS-XB78K OC Edition</h1>
                    <hr>
                </div>
                <div class="card-img">
                    <img class="imgTele" src="./img/maxresdefault (1).jpg" alt="img">
                </div>
                <div class="info">
                    <p class="caracteristicas">Pantalla de 1000 pulgadas</p>
                    <p class="caracteristicas">Resolución 76800 x 43020 píxeles</p>
                    <p class="caracteristicas">Costo $ 20,199 pesos</p>
                </div>
                <a href="productLap.php" class="card-butom">
                    <div class="icono">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <p class="text-icon">VER MÁS INFORMACIÓN</p>
                </a>
            </div>
            <div class="card-produc">
                <div class="card-title">
                    <h1>MuyComputer ASUS Rog Strix G531GT-BQ012</h1>
                    <hr>
                </div>
                <div class="card-img">
                    <img class="imgTele" src="./img/maxresdefault (1).jpg" alt="img">
                </div>
                <div class="info">
                    <p class="caracteristicas">Pantalla de 105 pulgadas </p>
                    <p class="caracteristicas">Resolución 76800 x 43020 píxeles</p>
                    <p class="caracteristicas">Costo $ 50,199 pesos</p>
                </div>
                <a href="productLap.php" class="card-butom">
                    <div class="icono">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <p class="text-icon">VER MÁS INFORMACIÓN</p>
                </a>
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