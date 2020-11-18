<?php
	session_start();
	require("includes/connection.php");
	if(isset($_GET['page'])){
		
		$pages=array("products", "cart");
		
		if(in_array($_GET['page'], $pages)) {
			
			$_page=$_GET['page'];
			
		}else{
			
			$_page="products";
			
		}
		
	}else{
		
		$_page="products";
		
	}

?>

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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/style.css" />

     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dama</title>
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=VgMjKhi9cwRwad1gWWK8pV7CYyaAfqUWd-JWUiQpe0d4M5LetsgJP-oqGVUmc3zFHachet76jh1IeCs10Wy5HztRKIfyHVFKHJ7B5Dc5vaE9EbPn4ncuME2W_wyYazONcpMJ0A8XLr8haFRsDs81NjTNkL4pN_3_LQDCPNiQE0IFubSVQhetoiQIOWlRbIt4aZEJooitlgjCwFbXpJhsxoD8JEtA0WlYLdideOzJVXsGI35ot3S0Y1iW7wi3u__nFROt_722Flziz8CTdpecH8mFb7HxlYrnMe4NZBOh3Z1SiD65mrxaV_HC7SlPLMYiX-x8pBmxz8BlnRqn0H6GmQ" charset="UTF-8"></script><script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
	
	<title>Carrito de Compras</title>

	

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">MIZTLY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../index2.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Carrito/products.php">Carrito</a>
				</li>
				<li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Cerrar sesion</a>
                </li>
            </ul>
        </div>
    </nav>
	
	<div id="container">

		<div id="main">
			
			<?php require($_page.".php"); ?>

		</div><!--end of main-->
		
		<div id="sidebar">
			<h1>Carrito</h1>
			<?php
			
				if(isset($_SESSION['cart'])){


					$sql_s="SELECT * FROM products WHERE id_product>=1 and id_product<=25;";
					
					foreach($_SESSION['cart'] as $id => $value) {
						$sql_s.=$id.",";
					}
					
					$sql=substr($sql_s, 0, -1).") ORDER BY name ASC;";
					$query=mysqli_query($union, $sql);
					
					while($row=mysqli_fetch_array($query)){	
					?>
                        <p><?php echo $row['name'] ?> x <?php echo $_SESSION['cart'][$row['id_product']]['quantity'] ?></p>
			
					<?php
						
					}
				?>
					<hr />
					<a href="index.php?page=cart">Ve al carrito/a>
					
				<?php
					
				}else{
					
					echo "<p>Tu carrito está vacío. Por favor añada algunos productos.</p>";
					
				}
			
			?>
			
		</div><!--end of sidebar-->

	</div><!--end container-->

</body>
</html>
