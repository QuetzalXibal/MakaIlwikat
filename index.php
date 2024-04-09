<?php
include 'global/config.php';
include 'global/conexion.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-with, initial-scale=1">
    <title>MakaIlwikat</title>
    <link href="css/Menu.css" rel="stylesheet" type="text/css" />
    <link href="css/Galletas.css" rel="stylesheet" type="text/css" />
    <script src="JavaScrips/jquery-3.2.1.js" type="text/javascript"></script>
    <script src="JavaScrips/Compras.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- para el icono de la pagina-->
    <link rel="shortcut icon" type="image/x-icon" href="Imagenes/cookie.png" />
    <!--Fondo-->
    <style>
        body {
            background: #d1a582;
        }
    </style>

</head>
<body  contextmenu="#ffffff" >
    <!--Menu
    <section class="title">
        <h1>Maka Ilwikat</h1>
    </section>-->
    <!--boton en forma de logotipo-->
    <div class="boton" style="background: white">
        <a href="index.php"> <p style="text-align: center; ">  <img class="avatar3" src="Imagenes/MakaIlwikat.png" width="300"   alt="" /></p></a>
    </div>
    <nav class="navegacion">
        <ul class="menu">

            <li class="first-item">
                <a href="index.html">
                    <img src="Imagenes/Logo4.0.png" alt="" class="imagen">
                    <span class="text-item">¿QUIENES SOMOS?</span>
                    <span class="down-item"></span>
                </a>
            </li>

            <li>
                <a href="Desarrolladores.jsp">
                    <img src="Imagenes/Desarrollador.jpg" alt="" class="imagen">
                    <span class="text-item">Servicios</span>
                    <span class="down-item"></span>
                </a>
            </li>

            <li>
                <a href="Servicios.jsp">
                    <img src="Imagenes/Servicios.jpg" alt="" class="imagen">
                    <span class="text-item">Contáctanos</span>
                    <span class="down-item"></span>
                </a>
            </li>
  
            <li>
                <a href="Foro.jsp">
                    <img src="Imagenes/Foro.png" alt="" class="imagen">
                    <span class="text-item">Favoritos</span>
                    <span class="down-item"></span>
                </a>
            </li>
            <li>
                <a href="Login.jsp">
                    <img src="Imagenes/Perfil.png" alt="" class="imagen">
                    <span class="text-item">Carrito</span>
                    <span class="down-item"></span>
                </a>
            </li>
        </ul>
    </nav>
    <!--Carrito-->
    <div class="container">
        <br>
        <div class="alert alert-success">

            pantalla de mensaje...

            <a href="#" class="badge badge-success">Ver carrito</a>

        </div>
    </div>
    <!--GALLETAS-->
    <div class="wrap">
   
        <h1 style="color:#ffffff";>Galletas saludables</h1>
        <div class="store-wrapper">
            <div class="category_list">
                <a href="#" class="category_item" category="all">All</a>
                <a href="#" class="category_item" category="Chapulin">Chapulines</a>
                <a href="#" class="category_item" category="Maguey">Gusano de maguey</a>
                <a href="#" class="category_item" category="Escamoles">Escamoles</a>
                <a href="#" class="category_item" category="chicharras">chicharras</a>

            </div>
            <section class="products-list">
                <div style="background: #fff" class="blanco product-item" category="Chapulin">
                    <img src="Imagenes/Galleta arandano.jpg" alt="Titulo" title="Titulo producto" class="card-img-top">
                    <div class="card-body">
                        <span>Arandano con Chapulin</span>
                        <h5 class="card-title">$5.00</h5>
                        <p class="card-text">Galleta sabor arandano</p>
                        <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
                    </div>
                    <a href="#">Galleta sabor arandano</a>
                </div>
                <div style="background: #fff" class="blanco product-item" category="Chapulin">
                    <img src="Imagenes/Galleta manzana.jpg" alt="Titulo" title="Titulo producto" class="card-img-top">
                    <div class="card-body">
                        <span>Manzana con Chapulin</span>
                        <h5 class="card-title">$5.00</h5>
                        <p class="card-text">Galleta sabor arandano</p>
                        <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
                    </div>
                    <a href="#">Galleta sabor manzana</a>
                </div>
                <div style="background: #fff" class="blanco product-item" category="Chapulin">
                    <img src="Imagenes/Galletas.jpg" alt="Titulo" title="Titulo producto" class="card-img-top">
                    <div class="card-body">
                        <span>Arandano con Chapulin</span>
                        <h5 class="card-title">$30.00</h5>
                        <p class="card-text">Galleta sabor arandano</p>
                        <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
                    </div>
                    <a href="#">8 Galletas sabor manzana</a>
                </div>
                <div style="background: #fff" class="blanco product-item" category="Chapulin">
                    <img src="Imagenes/Galletas.jpg" alt="Titulo" title="Titulo producto" class="card-img-top">
                    <div class="card-body">
                        <span>Manzana con Chapulin</span>
                        <h5 class="card-title">$30.00</h5>
                        <p class="card-text">Galleta sabor arandano</p>
                        <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
                    </div>
                    <a href="#">8 Galletas sabor arandano</a>
                </div>
                <div style="background: #fff" class="blanco product-item" category="Chapulin">
                    <img src="Imagenes/Galletas.jpg" alt="Titulo" title="Titulo producto" class="card-img-top">
                    <div class="card-body">
                        <span>Arandano con Chapulin</span>
                        <h5 class="card-title">$60.00</h5>
                        <p class="card-text">Galleta sabor arandano</p>
                        <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
                    </div>
                    <a href="#">16 Galletas sabor manzana</a>
                </div>
                <div style="background: #fff" class="blanco product-item" category="Chapulin">
                    <img src="Imagenes/Galletas.jpg" alt="Titulo" title="Titulo producto" class="card-img-top">
                    <div class="card-body">
                        <span>Manzana con Chapulin</span>
                        <h5 class="card-title">$60.00</h5>
                        <p class="card-text">Galleta sabor arandano</p>
                        <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
                    </div>
                    <a href="#">16 Galletas sabor arandano</a>
                </div>
                <div style="background: #fff" class="blanco product-item" category="Chapulin">
                    <img src="Imagenes/Galletas.jpg" alt="Titulo" title="Titulo producto" class="card-img-top">
                    <div class="card-body">
                        <span>Arandano con Chapulin</span>
                        <h5 class="card-title">$120.00</h5>
                        <p class="card-text">Galleta sabor arandano</p>
                        <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
                    </div>
                    <a href="#">32 Galletas sabor manzana</a>
                </div>
                <div style="background: #fff" class="blanco product-item" category="Chapulin">
                    <img src="Imagenes/Galletas.jpg" alt="Titulo" title="Titulo producto" class="card-img-top">
                    <div class="card-body">
                        <span>Manzana con Chapulin</span>
                        <h5 class="card-title">$120.00</h5>
                        <p class="card-text">Galleta sabor arandano</p>
                        <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
                    </div>
                    <a href="#">32 Galletas sabor arandano</a>
                </div>
            </section>
        </div>
    </div>
</body>
</html>