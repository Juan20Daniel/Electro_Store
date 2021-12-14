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
                        <li><i class="fas fa-users"><a href="nosotros.php">Nosotros</a></i></li><?php
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
            <li class="menu-list"><a class="menu-link" href="laptop.php">Laptops</a></li>
            <li class="menu-list"><a class="menu-link" href="phone.php">Teléfonos</a></li>
            <li class="menu-list"><a class="menu-link" href="relojs.php">Relojes</a></li>
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
                <li class="link-bread"><p class="a-bread link_breadcrumbs_active">Servicios</p></li>
            </ul>
        </div>
    </section>
    <div class="cont-service">
        <div class="cont-car-ser">
            <div class="service">
                <div class="cont-service-title">
                    <div class="title-service">
                        <i class="fas fa-truck-moving"></i>
                        <h1>Transporte</h1>
                    </div>
                </div>
                <p class="service-info">
                    Es el servicio de transporte más utilizado 
                    en comercio internacional. Es la 
                    vía utilizada en el 80% de transportes de 
                    mercancías internacionales.
                </p>
                <div class="const-service-buton">
                    <a class="service-a" href="https://xarxaeuropea.com/los-4-servicios-de-transporte-imprescindibles-en-tu-proveedor/">VER MÁS</a>
                </div>
            </div>
            <div class="service">
                <div class="cont-service-title">
                    <div class="title-service">
                        <i class="fas fa-biking"></i>
                        <h1>Entregas a domicilio</h1>
                    </div>
                </div>
                <p class="service-info">
                    Ofrecer un buen servicio de paquetería, 
                    con entregas puntuales y en correcto estado 
                    hasta la puerta de tu casa.
                 </p>
                 <div class="const-service-buton">
                    <a class="service-a" href="https://www.gureakmarketing.com/es/blog/27-marketing-relacional/70-servicios-empresas-paqueteria-mensajeria">VER MÁS</a>
                </div>
            </div>
            <div class="service">
                <div class="cont-service-title">
                    <div class="title-service">
                        <i class="fas fa-bolt"></i>
                        <h1>Electricista</h1>
                    </div>
                </div>
                <p class="service-info">
                    Instalan y mantienen servicios eléctricos, 
                    tales como la iluminación, la electricidad 
                    y la calefacción. 
                 </p>
                 <div class="const-service-buton">
                    <a class="service-a" href="https://www.educaweb.mx/profesion/electricista-79/#:~:text=Los%20electricistas%20instalan%20y%20mantienen,instalaciones%20dom%C3%A9sticas%20y%20en%20empresas.">VER MÁS</a>
                </div>
            </div> 
            <div class="service">
                <div class="cont-service-title">
                    <div class="title-service">
                        <i class="fas fa-hands-helping"></i>
                        <h1>Prestamos</h1>
                    </div>
                </div>
                <p class="service-info">
                    Cambio de cheques, depósitos, emisión de tarjetas 
                    de crédito, débito y prepago, emisión de chequeras, 
                    créditos hipotecarios y préstamos para autos. 
                </p>
                <div class="const-service-buton">
                    <a class="service-a" href="#">VER MÁS</a>
                </div>
            </div>
            <div class="service">
                <div class="cont-service-title">
                    <div class="title-service">
                        <i class="fas fa-box-open"></i>
                        <h1>Renta de producto</h1>
                    </div>
                </div>
                <p class="service-info">
                    Puede alquilar una variedad de dispositivos, 
                    como teléfonos celulares, enrutadores, cargadores 
                    portátiles para computadoras y mucho más.
                 </p>
                 <div class="const-service-buton">
                    <a class="service-a" href="https://www.ana.co.jp/es/mx/plan-book/additional-services/technology-rental/">VER MÁS</a>
                </div>
            </div>
            <div class="service">
                <div class="cont-service-title">
                    <div class="title-service">
                        <i class="fab fa-teamspeak"></i>
                        <h1>Atención a cliente</h1>
                    </div>
                </div>
                <p class="service-info">
                    Se empeña en cumplir con la satisfacción y la ayuda 
                    necesaria a cualquier cliente que lo requiera.  
                </p>
                <div class="const-service-buton">
                    <a class="service-a" href="#">VER MÁS</a>
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