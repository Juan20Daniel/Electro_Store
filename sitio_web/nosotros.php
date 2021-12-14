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
                <li class="link-bread"><p class="a-bread link_breadcrumbs_active">Nosotros</p></li>
            </ul>
        </div>
    </section>
    <div class="cont-nosotros">
        <div class="info-noso">  
            <h1 class="title-noso">Electrónicos EL TOPO</h1>
            <p class="info-p">Profesionistas en electrónicos desde el año 2009 en los mejores productos</p>
            <button onclick="home()" class="btn-noso">Ver productos</button>
        </div>
        <div class="valores">
            <div class="mision">
                <h1 class="title-card-noso">Misión</h1>
                <hr />
                <p>
                    Electrónicos EL TOPO, es una empresa que se encarga de realizar ventas de los mejores productos pertenesientes a electrónicos.
                </p>
            </div>
            <div class="vision">
                <h1 class="title-card-noso">Visión</h1>
                <hr />
                <p>Ofrecer a todos nuestros clientes la oportunidad de tener un buen producto electrónico
                   para el uso doméstico.
                </p>
                <p class="vin">!Y tumbarle la chamba a electra.</p>
            </div>
            <div class="espectativas">
                <h1 class="title-card-noso">Expectativas</h1>
                <hr />
                <ul class="expact-ul">
                    <li>Transparencia</li>
                    <li>Atención al cliente</li>
                    <li>Accesibilidad</li>
                    <li>Fidelización</li>
                    <li>Sencillez</li>
                </ul>
            </div>
        </div>
        <div class="contactos">
           <div class="datos-ti">
                <h1 class="title-card-noso">Para cualquier duda o sugerencia!</h1>
                <hr />
           </div>
            <div class="contactos-datos">
                <div class="datos-contactos">
                    <p class="title-direc">Contactos</p>
                    <ul class="contactos-ul">
                        <li><span class="active-ul-direc">23-314-234-5533</span></li>
                        <li>23-314-114-9933</li>
                        <li>23-314-254-1223</li>
                        <li>23-314-224-5633</li>
                        <li>23-314-104-9083</li>
                    </ul>
                </div>
                <div class="direccion">
                    <p class="title-direc">Dirección</p>
                    <p>
                        Entre: Av Paseo de las Garzas y Blvd. Miguel de la Madrid.
                        En frente del Centro Federal de Electricidad,
                        camino las palmas. 
                    </p>
                    <ul class="ul-direcc">
                        <li>Nun. postal: 2356</li>
                        <li>Nun. exterior: 2356</li>
                    </ul>
                </div> 
                <div class="direccion">
                    <p class="title-direc">Localidad</p>
                    <iframe class="localidad" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d942.5193058936158!2d-104.3327826708307!3d19.104267866435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8424d67d8c9b2139%3A0x84c8e7dbf9d9022e!2sPlaya%20Azul%20Salagua%2C%2028218%20Manzanillo%2C%20Col.!5e0!3m2!1ses-419!2smx!4v1612601100501!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div> 
            </div>
        </div>
    </div>
    <footer class="footer nosot">
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