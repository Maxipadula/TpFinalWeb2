<html>

<?PHP
	 session_start();
	 
	 
	  if ( isset ($_SESSION["nombre"])){
		
	   $nombre = $_SESSION["nombre"];
	   
	   }
	   else{
		     session_destroy();
    
           header("location:login.php");
	   }
?>

<html>
	<head>
	</head>
	
	<body style="background: black">
		<IMG SRC="nada.jpg">
		<LINK REL="Stylesheet" HREF="login.css" TYPE="text/css">
		<H1>
		<IMG style="float: left" SRC="mapaa.jpg">  <!--el float es para que la imagen este a la izquierda del formulario-->
		</H1>
		<H4>
		<form class='contacto' method="post" action="validar.php">
			<div><label>ROL
						</br>
						<select name="ROL">
						   <option value=""></option> 
						   <option value="1" name="chofer">Chofer</option> 
						   <option value="2" name="administrador">Administrador</option> 
						   <option value="3" name="supervisor">Supervisor</option>
						</select>
					</label>
				</div>
				</br>
				<input type="submit" value="Ingresar">
				
				<p>
				
				<div><label>OTROS
						</br>
						<select name="OTROS">
						   <option value=""></option> 
						   <option value="1" name="vehiculo">Vehiculo</option> 
						   <option value="2" name="mecanico">Mecanico</option> 
						   <option value="3" name="viajes">Viajes</option>
						   <option value="3" name="reparaciones">Reparaciones</option>
						</select>
					</label>
				</div>
				</br>
			
				<input type="submit" value="Ingresar">
				</h4>
		</form>
		<H2>
		<IMG style="float: right" SRC="Rutas.jpg">  <!--el float es para que la imagen este a la derecha del formulario-->
		</H2>
	</body>
</html>
</html>