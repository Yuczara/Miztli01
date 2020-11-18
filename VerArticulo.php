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
    <title>Articulo1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

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
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Cerrar sesion</a>
                </li>
            </ul>
            <div>
                <a href="mycart.php" class="btn btn-outline-success">carrito (0)</a> 
            </div>
        </div>
    </nav>


<div class="card-deck">
    <div>
        <?php
            echo '<img src="'.$tem[0]['url_img'].'" class="rounded float-left" alt="articulo1" style="padding: 3rem;">';     
        ?>
    </div>

    <div>
    <?php
         echo '<h1 style="padding-top: 3rem;">'.$tem[0]['name'].'</h1>'; 
    
         echo '<h3>'.$tem[0]['description'].'</h3>'; 
         echo '<h3 style="color: red; ">'.$tem[0]['price_venta'].',00 MXN.</h3>'; 
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
            <form action="manage_cart.php" method="POST">
            <button type="submit" name="Add_To_Cart" class="btn1 mt-3 mb-5">Añadir al carrito</button>
            <?php
            echo '<input type="hidden" name="Item_Name" value="'.$tem[0]['name'].'">';
            echo '<input type="hidden" name="price" value="'.$tem[0]['price_venta'].'">';
            ?>
            
        </form>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>