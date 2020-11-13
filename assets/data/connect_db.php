
<?php
		
	/*	CONEXION DEL HOST
	$mysqli = new MySQLi("sql304.tonohost.com", "ottos_26480476","littlemonster1021", "ottos_26480476_miztli");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else
			//echo "Conexión exitossa!";
			//	$link =mysqli_connect("localhost","root","");
		//	if($link){
		//		mysqli_select_db($link,"academ");
		//	}*/ 

		class Conexion{
			var $conn;
		
			function conectar(){
				$conn = null;
			 try{
				$conn = new PDO('mysql:host=localhost;dbname=miztli', 
									'root',
									 '');
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				//echo 'Se estableció la conexión <br> <br>';
				
		   }catch(PDOException $e){
				die(print_r('Error conectando a la base de datos:' . $e->getMessage()));
		
			   
		   }
		   return $conn;
				}
				
		
				function buscarUsuario($user, $pass){
					$con = $this->conectar(); //mandar llamar al metodo de conectar

					$consulta = 'SELECT * 
											FROM login 
											WHERE email=:usuario 
											AND pasadmin=:pass';

					$stmt = $con->prepare($consulta);                
					$stmt->execute(array(':usuario'=>$user,':pass'=>$pass,':rol'=>$rol));
					$registro = $stmt->fetchAll(PDO::FETCH_ASSOC);
					$numRegistros = count($registro);
					if($rol==1 && $numRegistros==1){
						$numRegistros= $numRegistros+1;	

					}
					return $numRegistros+1;	
					
		
				}
				
				function agregarContacto($nombre, $correo, $asunto, $mensaje){
					$con = $this->conectar();
				
					$stmt= $con->prepare('INSERT INTO comentario(nombre, correo, asunto, mensaje)
										  VALUES(:nom, :correo, :asunto, :mensaje)');
					$rows = $stmt->execute(array(':nom'=>$nombre,
												 ':correo'=>$correo,
												 ':asunto'=>$asunto,
												 ':mensaje'=>$mensaje));
				
					return $rows;
				}
		
				function buscarProducto(){
					$con = $this->conectar();
				
					$stmt= $con->prepare('SELECT * FROM products');
					$rows = $stmt->execute();
					$registros= $stmt->fetchAll(PDO::FETCH_ASSOC);
						   
					return $registros;
				
			}
		}
			?>
