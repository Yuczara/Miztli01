<?php
include('../data/connect_db.php');
include('../data/cabecera.html');
$obj=new Conexion;

$res = $obj->buscarProducto();

$tem = array();
$tem = $res;

/*print("Id producto ".$tem[1]['id_products'].'<br>');
print("Nombre ".$tem[1]['name'].'<br>');
print("Precio venta ".$tem[1]['price_venta'].'<br>');
print($tem[1]['url_img']);*/

?>
<?php
include 'Configuracion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>PHP Shopping Cart Tutorial</title>
    <meta charset="utf-8">
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=VgMjKhi9cwRwad1gWWK8pV7CYyaAfqUWd-JWUiQpe0d4M5LetsgJP-oqGVUmc3zFHachet76jh1IeCs10Wy5HztRKIfyHVFKHJ7B5Dc5vaE9EbPn4ncuME2W_wyYazONcpMJ0A8XLr8haFRsDs81NjTNkL4pN_3_LQDCPNiQE0IFubSVQhetoiQIOWlRbIt4aZEJooitlgjCwFbXpJhsxoD8JEtA0WlYLdideOzJVXsGI35ot3S0Y1iW7wi3u__nFROt_722Flziz8CTdpecH8mFb7HxlYrnMe4NZBOh3Z1SiD65mrxaV_HC7SlPLMYiX-x8pBmxz8BlnRqn0H6GmQ" charset="UTF-8"></script><script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
    .container{padding: 20px;}
    .cart-link{width: 100%;text-align: right;display: block;font-size: 22px;}
    body {
        background-color:#b2d7e5;
    }

    </style>
</head>
</head>
<body>

<!-- carrusel-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../imagenes/dama1.jpg" class="d-block w-100" alt="anuncio1">
            </div>
            <div class="carousel-item">
                <img src="../imagenes/dama4.jpg" class="d-block w-100" alt="anuncio2">
            </div>
            <div class="carousel-item">
                <img src="../imagenes/dama3.jpg" class="d-block w-100" alt="anuncio3">
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

<div class="card-deck">
        <?php
        //get rows query
        $query = $db->query("SELECT * FROM products ORDER BY id_products DESC LIMIT 100");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="item col-lg-3">     
               <div class="card" style="width: 30rem; margin-left: 4rem; margin-bottom: 2rem;">
            <?php
                echo '<img src="../'. $row['url_img'].'" class="card-img-top" alt="Articulo1">';
                echo '<div class="text-center">';
                echo '<h5 class="card-title">'. $row['name'].'</h5>';
                echo '<p class="card-text ">'. $row['description'].'</p>';
                echo '<p class="card-text ">'. $row['price_venta'].',00 MXN</p>';
                 ?> 
                <a class="btn btn-success mb-4" href="../<?php echo $row["link"]; ?>">Ver Articulo</a>                  
             </div>
            </div>
      </div>
        <?php } }else{ ?>
        <p>Producto(s) no existe.....</p>
        <?php } ?>
    </div>
        </div>
 <div class="panel-footer">BaulPHP</div>
        </div>
</body>
</html>