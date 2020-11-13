 <?php 

    if(isset($_POST['submit'])){ 
          
        foreach($_POST['quantity'] as $key => $val) { 
            if($val==0) { 
                unset($_SESSION['cart'][$key]); 
            }else{ 
                $_SESSION['cart'][$key]['quantity']=$val; 
            } 
        } 
          
    } 
  
?> 
  
<h1>View cart</h1> 
<a href="index.php?page=products">Go back to the products page.</a> 
<form method="post" action="index.php?page=cart"> 
      
    <table> 
          
        <tr> 
            <th>Name</th> 
            <th>Quantity</th> 
            <th>Price</th> 
            <th>Items Price</th> 
        </tr> 
          
        <?php 
          
            $sql_s="SELECT * FROM products WHERE id_product IN ("; 
                      
                    foreach($_SESSION['cart'] as $id => $value) { 
                        $sql_s.=$id.","; 
                    } 
                      
                    $sql=substr($sql_s, 0, -1).") ORDER BY name ASC;"; 
                    $query=mysqli_query($union, $sql); 
                    $totalprice=0; 
                    $resultado=0;
                    $final=0;
                    $descuento1=.05;
                    $descuento2=.10;
                    $descuento3=.20;
                    $iva=.16;
                    while($row=mysqli_fetch_array($query)){ 
                        $subtotal=$_SESSION['cart'][$row['id_product']]['quantity']*$row['price']; 
                        $totalprice+=$subtotal; 
                    ?> 
                        <tr> 
                            <td><?php echo $row['name'] ?></td> 
                            <td><input type="text" name="quantity[<?php echo $row['id_product'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id_product']]['quantity'] ?>" /></td> 
                            <td><?php echo $row['price'] ?>$</td> 
                            <td><?php echo $_SESSION['cart'][$row['id_product']]['quantity']*$row['price'] ?>$</td> 
                        </tr> 
                    <?php 
                          
                    } 
        ?> 
                    <tr> 
                        <td colspan="4">Subtotal: <?php echo $totalprice ?></td> 
                    </tr> 


    </table> 
    <br /> 
    <button type="submit" name="submit">Actualiza carrito</button> 
</form> 
<br /> 
<p>Para eliminar un artículo, establezca su cantidad en 0. </p>

<br>
<br>
Su descuento se ha realizado
<br>

     
                    <?php $resultado1=$totalprice*$descuento1 ?>
                    <?php $final1=$totalprice-$resultado1 ?>
                    

                    <?php $resultado2=$totalprice*$descuento2 ?>
                    <?php $final2=$totalprice-$resultado2 ?>
                    

                    <?php $resultado3=$totalprice*$descuento3 ?>
                    <?php $final3=$totalprice-$resultado3 ?>



                    <?php $resul1=$final1*$iva ?>
                    <?php $fin1=$final1+$resul1 ?>
                    

                    <?php $resul2=$final2*$iva ?>
                    <?php $fin2=$final2+$resul2 ?>
                    

                    <?php $resul3=$final3*$iva ?>
                    <?php $fin3=$final3+$resul3 ?>



                    
<?php
$des1=500;
$des2=1000;
$des3=1500;
if ($totalprice<=$des1) {
                         echo "El precio a con descuento es:", $final1; 
                    }elseif ($totalprice<=$des2) {
                        echo "El precio con envio es:", $final2;
                    }else
                         echo "El total a pagar es de:", $final3;

?>

<br>
<br>



<?php
$des1=500;
$des2=1000;
$des3=1500;
if ($totalprice<=$des1) {
                         echo "El precio a pagar con el IVA es:", $fin1; 
                    }elseif ($totalprice<=$des2) {
                        echo "El precio a pagar con el IVA es:", $fin2;
                    }else
                         echo "El precio a pagar con el IVA es:", $fin3;

?>

