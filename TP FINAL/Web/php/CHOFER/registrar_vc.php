<html>
	<head>
	</head>
	
	<body>
		<?php
			 session_start();
			 
			 $permiso =$_SESSION["permiso"];
			 $id = $_SESSION["id_usuario"];
			 
				include ('../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
			 

		?>
			<h2> VALE DE COMBUSTIBLE </h2>
			
			<form class='contacto' method="post" action="<?php echo $validar_vc?>">
			<div id="contacto">
				
				</br>
				<div><label>FECHA Y HORA
					<input type="text" name="fecha_hora_vc">
					</label>
				</div>
				
				</br>
				
				<div><label>LUGAR
					<input type="text" name="lugar_vc">
					</label>
				</div>
				</br>
				
				</br>
				
				<div><label>COSTO
					<input type="text" name="costo_vc">
					</label>
				</div>
				</br>
				
				</br>
				
				<div><label>CANTIDAD
					<input type="text" name="cantidad_vc">
					</label>
				</div>
				</br>
		
			<input type="submit" value="Registrar">
			<input type="reset" value="Borrar Todo">
			<input type='button' onclick='history.back()' name='volver atrás' value='Volver'></form>
	</body>
</html>