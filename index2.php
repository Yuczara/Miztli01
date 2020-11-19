<?php
include('assets/data/connect_db.php');

$obj=new Conexion;

$res = $obj->buscarProducto();

$tem = array();
$tem = $res;

/*print("Id producto ".$tem[1]['id_products'].'<br>');
print("Nombre ".$tem[1]['name'].'<br>');
print("Precio venta ".$tem[1]['price_venta'].'<br>');
print($tem[1]['url_img']);*/

?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dama</title>
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=VgMjKhi9cwRwad1gWWK8pV7CYyaAfqUWd-JWUiQpe0d4M5LetsgJP-oqGVUmc3zFHachet76jh1IeCs10Wy5HztRKIfyHVFKHJ7B5Dc5vaE9EbPn4ncuME2W_wyYazONcpMJ0A8XLr8haFRsDs81NjTNkL4pN_3_LQDCPNiQE0IFubSVQhetoiQIOWlRbIt4aZEJooitlgjCwFbXpJhsxoD8JEtA0WlYLdideOzJVXsGI35ot3S0Y1iW7wi3u__nFROt_722Flziz8CTdpecH8mFb7HxlYrnMe4NZBOh3Z1SiD65mrxaV_HC7SlPLMYiX-x8pBmxz8BlnRqn0H6GmQ" charset="UTF-8"></script><script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </head>
<style>
    body {
        background-color:#b2d7e5;
    }
</style>

<body>
   <!-- Barra de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">MIZTLY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index2.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Carrito/products.php">Carrito</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Cerrar sesion</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- carrusel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/imagenes/dama1.jpg" class="d-block w-100" alt="anuncio1">
            </div>
            <div class="carousel-item">
                <img src="assets/imagenes/dama4.jpg" class="d-block w-100" alt="anuncio2">
            </div>
            <div class="carousel-item">
                <img src="assets/imagenes/dama3.jpg" class="d-block w-100" alt="anuncio3">
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
    <br><br>
    <!--Targetas de articulos-->
    <div class="card-deck">
        <div class="card" style="width: 18rem; margin-left: 3rem; margin-bottom: 2rem;">
        <?php
            echo '<img src="'.$tem[0]['url_img'].'" class="card-img-top" alt="Articulo1">';
            echo '<div class="text-center">';
            echo '<h5 class="card-title">'.$tem[0]['name'].'</h5>';
            echo '<p class="card-text ">'.$tem[0]['description'].'</p>';
            echo '<p class="card-text ">'.$tem[0]['price_venta'].',00 MXN</p>';
             ?> 
                <a href="VerArticulo.php" class="btn btn-primary">Ver Articulo</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;margin-bottom: 2rem;">
        <?php
            echo '<img src="'.$tem[1]['url_img'].'" class="card-img-top" alt="Articulo1">';
            echo '<div class="text-center">';
            echo '<h5 class="card-title">'.$tem[1]['name'].'</h5>';
            echo '<p class="card-text ">'.$tem[1]['description'].'</p>';
            echo '<p class="card-text ">'.$tem[1]['price_venta'].',00 MXN</p>';
             ?> 
                <a href="VerArticulo2.php" class="btn btn-primary">Ver Articulo</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;margin-bottom: 2rem;">
        <?php
            echo '<img src="'.$tem[2]['url_img'].'" class="card-img-top" alt="Articulo1">';
            echo '<div class="text-center">';
            echo '<h5 class="card-title">'.$tem[2]['name'].'</h5>';
            echo '<p class="card-text ">'.$tem[2]['description'].'</p>';
            echo '<p class="card-text ">'.$tem[2]['price_venta'].',00 MXN</p>';
             ?> 
                <a href="VerArticulo3.php" class="btn btn-primary">Ver Articulo</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;margin-right: 2rem;margin-bottom: 2rem;">
        <?php
            echo '<img src="'.$tem[3]['url_img'].'" class="card-img-top" alt="Articulo1">';
            echo '<div class="text-center">';
            echo '<h5 class="card-title">'.$tem[3]['name'].'</h5>';
            echo '<p class="card-text ">'.$tem[3]['description'].'</p>';
            echo '<p class="card-text ">'.$tem[3]['price_venta'].',00 MXN</p>';
             ?> 
                <a href="VerArticulo4.php" class="btn btn-primary">Ver Articulo</a>
            </div>
        </div>
    </div>

    <div class="card-deck">
        <div class="card" style="width: 18rem; margin-left: 3rem;margin-bottom: 2rem;">
            <?php
            echo '<img src="'.$tem[4]['url_img'].'" class="card-img-top" alt="Articulo1">';
            echo '<div class="text-center">';
            echo '<h5 class="card-title">'.$tem[4]['name'].'</h5>';
            echo '<p class="card-text ">'.$tem[4]['description'].'</p>';
            echo '<p class="card-text ">'.$tem[4]['price_venta'].',00 MXN</p>';
             ?> 
                <a href="VerArticulo5.php " class="btn btn-primary ">Ver Articulo</a>
            </div>
        </div>
        <div class="card " style="width: 18rem;margin-bottom: 2rem; ">
        <?php
            echo '<img src="'.$tem[5]['url_img'].'" class="card-img-top" alt="Articulo1">';
            echo '<div class="text-center">';
            echo '<h5 class="card-title">'.$tem[5]['name'].'</h5>';
            echo '<p class="card-text ">'.$tem[5]['description'].'</p>';
            echo '<p class="card-text ">'.$tem[5]['price_venta'].',00 MXN</p>';
             ?> 
                <a href="VerArticulo6.php " class="btn btn-primary ">Ver Articulo</a>
            </div>
        </div>
        <div class="card " style="width: 18rem;margin-bottom: 2rem; ">
        <?php
            echo '<img src="'.$tem[6]['url_img'].'" class="card-img-top" alt="Articulo1">';
            echo '<div class="text-center">';
            echo '<h5 class="card-title">'.$tem[6]['name'].'</h5>';
            echo '<p class="card-text ">'.$tem[6]['description'].'</p>';
            echo '<p class="card-text ">'.$tem[6]['price_venta'].',00 MXN</p>';
             ?> 
                <a href="VerArticulo7.php " class="btn btn-primary ">Ver Articulo</a>
            </div>
        </div>
        <div class="card " style="width: 18rem;margin-right: 2rem;margin-bottom: 2rem; ">
        <?php
            echo '<img src="'.$tem[7]['url_img'].'" class="card-img-top" alt="Articulo1">';
            echo '<div class="text-center">';
            echo '<h5 class="card-title">'.$tem[7]['name'].'</h5>';
            echo '<p class="card-text ">'.$tem[7]['description'].'</p>';
            echo '<p class="card-text ">'.$tem[7]['price_venta'].',00 MXN</p>';
             ?> 
                <a href="VerArticulo8.php " class="btn btn-primary ">Ver Articulo</a>
            </div>
        </div>
    </div>
    <!--Registrate-->
    <div class="jumbotron  margin-left:3rem">
        <h1 class="display-4 ">!Unete!</h1>
        <p class="lead ">Registrate como cliente para tener grandes descuentos en ropa de toda categoría.</p>
        <hr class="my-4 ">
        <p>Obten cupones gratis y recibe notificaciones de nuestros nuevos articulos.</p>
        <a class="btn btn-primary btn-lg " href="index.php " role="button ">Registrarse ahora</a>
    </div>
</body>

</html>