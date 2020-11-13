			<?php

				require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO login VALUES('$id_product','$name','$price','$description')");
	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>id_product</td>";
						echo "<td>name</td>";
						echo "<td>price</td>";
						echo "<td>description</td>";

					echo "</tr>";
