<?php

	if(isset($_GET['action']) && $_GET['action']=="add"){
		
		$id=intval($_GET['id']);
		
		if(isset($_SESSION['cart'][$id])){
			
			$_SESSION['cart'][$id]['quantity']++;
			
		}else{
			
					$server="sql304.tonohost.com";
					$user="ottos_26480476";
					$password="littlemonster1021";
					$db="ottos_26480476_miztli";
					$union=mysqli_connect($server, $user, $password, $db);

					
			$sql_s="SELECT * FROM products WHERE id_product={$id}";


			$query_s=mysqli_query($union, $sql_s);
			if(mysqli_num_rows($query_s)!=0){

				$row_s=mysqli_fetch_array($query_s);
				
				$_SESSION['cart'][$row_s['id_product']]=array(
						"quantity" => 1,
						"price" => $row_s['price']
					);
				
				
			}else{
				
				$message="This product id it's invalid!";
				
			}
			
		}
		
	}

?>
	<h1>Product List</h1>
	<?php
		if(isset($message)){
			echo "<h2>$message</h2>";
		}
	?>[]
			<table>
			    <tr>
			        <th>Name</th>
			        <th>Description</th>
			        <th>Price</th>
			        <th>Action</th>
			    </tr>
			    
				<?php
					$server="sql304.tonohost.com";
					$user="ottos_26480476";
					$password="littlemonster1021";
					$db="ottos_26480476_miztli";
					$union=mysqli_connect($server, $user, $password, $db);

				
					$sql="SELECT * FROM products ORDER BY name ASC";
					$query=mysqli_query($union, $sql);
					while ($row=mysqli_fetch_array($query)) {
						
				?>
						<tr>
						    <td><?php echo $row['name'] ?></td>
						    <td><?php echo $row['description'] ?></td>
						    <td><?php echo $row['price'] ?>$</td>
						    <td><a href="index.php?page=products&action=add&id=<?php echo $row['id_product'] ?>">Add to cart</a></td>
						</tr>
				<?php
						
					}
				
				?>
			    
			</table>