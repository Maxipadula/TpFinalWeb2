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
		<LINK REL="Stylesheet" HREF="../css/login.css" TYPE="text/css">
	</head>
	
	<body>
		<div id='divHeader'>
			<h1> Sistema de Gestión Logistica</h1>
		</div>

			<nav id='divNav'>
		
       				<a href="./consulta_datos.php"> CONSULTA &nbsp;&nbsp;</a>
       			    <a href="./registrar_datos.php"> REGISTROS &nbsp;&nbsp;</a>
            		<a href="./logn.php"> SALIR &nbsp;&nbsp;</a>
			</nav>

		<div id="divContenedor">

			<form class='contacto' method="post" action="validar.php">
				
				</br>
	
				<input type="submit" value="Ingresar" class= "boton">

			</form>

		</div>

	</body>
</html>
