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
			<nav>
		
       
			<a href="./consulta_datos.php">CONSULTA</a>
            <a href="./registrar_datos.php">REGISTROS</a>
            <a href="./logn.php">SALIR</a>

	</nav>
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