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
    <title>Document</title>
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=jPACed7t18qUEh2b8s3_m7pkjFq_RPZPmMNQplbrCFTFB7LKtQrSlYkb0AA3cew3oEhAGJUa4S0fq94C9QJeE5gNrWMiPQTxA2ugvBA9jYvf0xDAoqOUeLR2ZHrY9YE_MxdFjWKAVCzhjZHxmmXN-_OwbnUcfiwv_5lfa2SY81Sipm1cdMkSKBm4oDrstbuc3opmpI6io8-WcU9cYProLVXC6mox9HHxaFYeBVT0g5PAj_3t4Hkpu_nA56_x7EOdr77IwGgycBcXG3OFl9gdQEz2JwJCBo1o_SPf2ZDiFxZk2z1aiDNSsKp6lAz2KB12PL1AU9h6EV741Aw1L3wRUA"
        charset="UTF-8"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <style>
        body {
            background: #CADEE7;
        }
        
        .btn1:hover {
            border: none;
            background-color: black;
            color: white;
        }
        
        .btn1 {
            background: white;
            border: 1px solid;
            color: black;
            outline: none;
            height: 50px;
            width: 100%;
            border-radius: 4px;
            font-weight: bold;
        }
    </style>
</head>

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
                    <a class="nav-link" href="Carrito/index.php">Carrito</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="Contacto.html">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Cerrar sesion</a>
                </li>
            </ul>
        </div>
    </nav>
</body>

<div class="card-deck">
<div><a href="detalle5.html">
        <?php
            echo '<img src="'.$tem[4]['url_img'].'" class="rounded float-left" alt="articulo1" style="padding: 3rem;">';     
        ?>
    </div>
</a>
    <div>
    <?php
         echo '<h1 style="padding-top: 3rem;">'.$tem[4]['name'].'</h1>'; 
    
         echo '<h3>'.$tem[4]['description'].'</h3>'; 
         echo '<h3 style="color: red; ">'.$tem[4]['price_venta'].',00 MXN.</h3>'; 
         echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Ullam at eaque aspernatur, temporibus harum sequi omnis dolores rem dolore nostrum,<br> illum voluptas sapiente cupiditate ea expedita molestias quia cumque dignissimos!</p>'; 
        ?>
        <br>
        <div>


            <h3>Tallas</h3>

            <div class="btn-group mb-3 text-right" role="group">

                <div class=" input-group-prepend ">
                    <button class="btn btn-outline-secondary " type="xs " id="button-addon1 ">XS</button>
                </div>

                <div class="input-group-prepend ">
                    <button class="btn btn-outline-secondary " type="sh " id="button-addon1 ">SH</button>
                </div>

                <div class="input-group-prepend ">
                    <button class="btn btn-outline-secondary " type="m " id="button-addon1 ">M</button>
                </div>

                <div class="input-group-prepend ">
                    <button class="btn btn-outline-secondary " type="l " id="button-addon1 ">L</button>
                </div>

                <div class="input-group-prepend ">
                    <button class="btn btn-outline-secondary " type="xl " id="button-addon1 ">XL</button>
                </div>

            </div>

            <br>
            <h3>Piezas</h3>
            <input type="number" id="quantity_5f187892d9557" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" inputmode="numeric">

            <br><br>
            <button type="button" class="btn1 mt-3 mb-5"><a style="decoration:none" href="Carrito/index.php">Añadir al carrito</a></button>
        </div>
    </div>

</html>