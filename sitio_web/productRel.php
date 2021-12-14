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
                            if(isset($_SESSION['usuario'])){
                                if($_SESSION['usuario'] == "admin"){ ?>
                                    <li><i class="far fa-user"><a href="admin.php">Mi cuenta</a></i></li><?php
                                }else if($_SESSION['usuario'] == "empleado"){?>
                                    <li><i class="far fa-user"><a href="empleado.php">Mi cuenta</a></i></li><?php
                                }else if($_SESSION['usuario'] == "cliente") {?>
                                     <li><i class="far fa-user"><a href="cliente.php">Mi cuenta</a></i></li><?php
                                }
                            }else{?>
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
    <section class="cont-carrucel">
        <div class="breadcrumbs">
            <ul class="bread-links">
                <li class="link-bread"><a class="a-bread a-hover" href="index.php"><i class="fas fa-home"></i></a></li>
                <li class="link-bread"><a class="a-bread a-hover" href="tele.php">Relojs</a></li>
                <li class="link-bread"><p class="a-bread link_breadcrumbs_active">Chronométre Optimum de F.P. Journe</p></li>
            </ul>
        </div>
    </section>
    <div class="container-productos product">
        <div class="cont-productTele">
            <div class="cont-inform">
                <div class="cont-producto">
                    <div class="img-producto">
                        <img class="imagen-produc"  src="./img/apertura-relojes-materiales-k6qB--620x349@abc.jpg" alt="img">
                    </div>
                    <div class="img-producto">
                        <img class="imagen-produc"  src="./img/98A227_Back_1024x1024.jpg" alt="img">
                    </div>
                </div>
                <div class="cont-caracteris">
                    <h1 class="title-info">Chronométre Optimum de F.P. Journe</h1>
                    <hr>
                    <p class="info pro">
                        FP Journe Chronographe Monopoussoir Rattrapante, caja de platino 950 con acabado mate 
                        y brazalete de platino 950 integrado, esta es la versión más nueva de este reloj donde 
                        no hay inserciones de goma en la caja o brazalete.
                    </p>
                    <div class="produc-info">
                        <h1>Características</h1>
                        <ul class="list-carac">
                            <li><p class="info-text">Resistente al agua: 164 ft/50 m.</p></li>
                         </ul>
                         <ul class="list-carac">
                             <li><p class="info-text">Diámetro de la Esfera: 1.92 inch/49 mm</p></li>
                         </ul>
                         <ul class="list-carac">
                             <li><p class="info-text"><a href="https://www.amazon.com.mx/onn-100021258-Class-2160p-Renewed/dp/B08R6JMBKK/ref=asc_df_B08R6JMBKK/?tag=gledskshopmx-20&linkCode=df0&hvadid=451079473657&hvpos=&hvnetw=g&hvrand=6299569830018704813&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1031272&hvtargid=pla-1120179164078&psc=1">Costo $ 11,199 pesos</a></p></li>
                         </ul>
                         <ul class="list-carac">
                             <li><p class="info-text">Banda de goma: alemán</p></li>
                         </ul>
                         <ul class="list-carac">
                             <li><p class="info-text">VPeso del reloj: 56 g/1,97 oz</p></li>
                         </ul>
                         <ul class="list-carac">
                             <li><p class="info-text">Modelo de Batería: CR2032 sustituible</p></li>
                         </ul>
                         <ul class="list-carac">
                             <li><p class="info-text">Taiwán IC movimiento</p></li>
                         </ul>
                         <ul class="list-carac">
                             <li><p class="info-text">Locked metal cubierta posterior</p></li>
                         </ul>
                    </div>
                </div>
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