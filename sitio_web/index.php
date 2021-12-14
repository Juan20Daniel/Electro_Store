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
                                <li>
                                    <i class="far fa-user">
                                        <form action="login.php" method="POST">
                                            <input type="hidden" name="count" value="2">
                                            <input type="submit" value="Iniciar sesión">
                                        </form>
                                    </i>
                                </li>
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
        <input type="text" id="inputSearch" required>
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
    </ul>
    <div id="cover-ctn-search"></div>
    <div class="main ind" id="move-content">
        <div class="cards">
            <div class="card">
                <div class="card-title">
                    <h1>Televisores</h1>
                    <hr>
                </div>
                <div class="card-img">
                    <img class="imgTele" src="./img/1564156413_810258_1564156464_noticia_normal.jpg" alt="img">
                </div>
                <a href="tele.php" class="card-butom">
                    <div class="icono">
                        <i class="fas fa-tv"></i>
                    </div>
                    <p class="text-icon">VER TELEVISORES</p>
                </a>
            </div>
            <div class="card">
                <div class="card-title">
                    <h1>Laptops gamers</h1>
                    <hr>
                </div>
                <div class="card-img">
                    <img class="imgTele" src="./img/samsung-galaxy-tab-s7-2018757.jpg" alt="img">
                </div>
                <a href="laptop.php" class="card-butom">
                    <div class="icono">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <p class="text-icon">VER LAPTOPS</p>
                </a>
            </div>
            <div class="card">
                <div class="card-title">
                    <h1>Teléfonos</h1>
                    <hr>
                </div>
                <div class="card-img">
                    <img class="imgTele" src="./img/los-mejores-celulares-del-momento.jpg" alt="img">
                </div>
                <a href="phone.php" class="card-butom">
                    <div class="icono">
                        <i class="fas fa-phone-square-alt"></i>
                    </div>
                    <p class="text-icon">VER TELÉFONOS</p>
                </a>
            </div>
            <div class="card">
                <div class="card-title">
                    <h1>Relojes</h1>
                    <hr>
                </div>
                <div class="card-img">
                    <img class="imgTele" src="./img/apertura-relojes-materiales-k6qB--620x349@abc.jpg" alt="img">
                </div>
                <a href="relojs.php" class="card-butom">
                    <div class="icono">
                        <i class="far fa-clock"></i>
                    </div>
                    <p class="text-icon">VER RELOJES</p>
                </a>
            </div>
            <div class="card">
                <div class="card-title">
                    <h1>Audífonos</h1>
                    <hr>
                </div>
                <div class="card-img">
                    <img class="imgTele" src="./img/Captura2.PNG" alt="img">
                </div>
                <a href="audif.php" class="card-butom">
                    <div class="icono">
                        <i class="fas fa-headphones-alt"></i>
                    </div>
                    <p class="text-icon">VER AUDÍFONOS</p>
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