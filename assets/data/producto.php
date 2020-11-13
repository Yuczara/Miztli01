<?php
include('connect_db.php');

$obj=new Conexion;

$res = $obj->buscarProducto();
echo '<table>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio Venta</th>
                <th>Precio compra</th>
                <th>Stock</th>
                <th>url imagen</th>
                </tr>';

foreach($res as $filas){ 
echo'<tr>';
echo '<td>' .$filas['id_products'].'</td>' ;
echo '<td>'  .$filas['name'].'</td>';
echo '<td>' .$filas['description'].'</td>';
echo '<td>' .$filas['price_venta'].'</td>';
echo '<td>'  .$filas['price_compra'].'</td>';
echo '<td>' .$filas['stock'].'</td>';
echo '<td>'  .$filas['url_img'].'</td>';
echo '</tr>';
}
echo'</table>';

json_encode($res,JSON_FORCE_OBJECT);
//print_r($res);

/*$tem = array();
$tem = $res;
print("Id producto ".$tem[1]['id_products'].'<br>');
print("Nombre ".$tem[1]['name'].'<br>');
print("Precio venta ".$tem[1]['price_venta'].'<br>');
print("URL img ".$tem[1]['url_img'].'<br>');*/

?>