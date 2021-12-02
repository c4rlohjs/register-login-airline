<?php

    require 'database.php';

    session_start();

    if (!isset($_SESSION['user_id'])) {
        header('Location: /php-login/login.php');
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/profilephp.css" class="css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="div-nav">
        <nav>
            <ul class="conect-list">
                <li class="items-nav"><a href="" class="link-nav">Vuelos</a></li>
                <li class="items-nav"><a href="#ofertas-div" class="link-nav">Ofertas</a></li>
                <li class="items-nav"><a href="#footer-link" class="link-nav">Conacto</a></li>
                <li class="items-nav"><a href="logout.php" class="link-nav">Salir</a></li>
            </ul>
        </nav>
    </div>

    <div class="carrusel-edit">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <video src="./media/Tropical.mp4" autoplay loop muted></video>
              </div>
              <div class="carousel-item">
                <video src="./media/forest.mp4" autoplay loop muted></video>
              </div>
              <div class="carousel-item">
                <video src="./media/agua.mp4" autoplay loop muted></video>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>

    <div class="ofertas-div" id="ofertas-div">
        <div class="vuelo1">
            <img src="./img/ARRAIAL.jpeg" alt="" class="view-img">
            <h1 class="lugar">ARRAIAL DO CABO</h1>
            <p class="precio">2X $675.000 CLP 
                <br>Salida desde Santiago
            </p>
            <p class="desc">Salidas Julio 2022 <br>
                02 Pasajes aéreos ida y vuelta<br>
                05 Noches de estadía<br>
                6 días y 5 noches<br>
                Wifi<br>
                Desayuno y aire acondicionado<br>
                Tasas + Impuestos aéreos<br>
            </p>
            <a class="wsp" target="__BLANK" href="https://api.whatsapp.com/send?phone=+56912345678&text=Hola, Nececito mas informacion sobre los viajes!">Envíanos un mensaje de WhatsApp</a>
        </div>

        <div class="vuelo1">
            <img src="./img/RIODEJA.jpeg" alt="" class="view-img">
            <h1 class="lugar">RIO DE JANEIRO</h1>
            <p class="precio">2X $690.000 CLP
                <br> Salida desde Santiago
            </p>
            <p class="desc">Salidas Julio 2022 <br>
                02 Pasajes aéreos ida y vuelta <br>
                05 Noches en Ibis Style Rio de Janeiro <br>
                06 días y 5 noches <br>
                Wifi <br>
                Desayuno y gimnasio <br>
                Tasas + Impuestos aéreos <br>
            </p>
            <a class="wsp" target="__BLANK" href="https://api.whatsapp.com/send?phone=+56912345678&text=Hola, Nececito mas informacion sobre los viajes!">Envíanos un mensaje de WhatsApp</a>
        </div>

        <div class="vuelo1">
            <img src="./img/montevideo.jpg" alt="" class="view-img">
            <h1 class="lugar">MONTEVIDEO</h1>
            <p class="precio">2X $460.000 CLP
                <br> Salida desde Santiago
            </p>
            <p class="desc">Salidas Abril 2022 <br>
                02 Pasajes aéreos ida y vuelta<br>
                05 días y 04 noches<br>
                03 Noches en Hotel California<br>
                Wifi<br>
                Aire Acondicionado<br>
                Tasas + Impuestos aéreos<br>
            </p>
            <a class="wsp" target="__BLANK" href="https://api.whatsapp.com/send?phone=+56912345678&text=Hola, Nececito mas informacion sobre los viajes!">Envíanos un mensaje de WhatsApp</a>
        </div>

        <div class="vuelo1">
            <img src="./img/cartagena.jpg" alt="" class="view-img">
            <h1 class="lugar">CARTAGENA DE INDIA</h1>
            <p class="precio">2X 1.490.000 CLP
                <br> Salida desde Santiago
            </p>
            <p class="desc">Salidas Marzo 2022 <br>
                02 Pasajes aéreos ida y vuelta<br>
                06 Noches en Hostal Cartagena Plaza<br>
                07 días y 6 noches<br>
                Todas las comidas<br>
                Wifi, piscina, aire acondicionado<br>
                Tasas + Impuestos aéreos<br>
            </p>
            <a class="wsp" target="__BLANK" href="https://api.whatsapp.com/send?phone=+56912345678&text=Hola, Nececito mas informacion sobre los viajes!">Envíanos un mensaje de WhatsApp</a>
        </div>
        
    </div>

    <div class="div-footer" id="footer-link">
        <footer class="footer-wing">
            
               Santiago <br>
               Lunes a Viernes 09:00 a 18:00 horas, Sábados: 10:00 a 14:00 horas<br>
               Nuestra Empresa<br>
               Teléfono: 22 1234 567<br>
               contacto@flyingwing.cl<br>
               +56 9 1234 5678 (Central)<br>
               Solo asistencia remota era<br>
           
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>