<html>
<meta charset="UTF-8">
<?PHP
	 session_start();
	 
	  include ('../rutas.php');
	  
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
		

       			    <a href="./<?php echo $registrar_datos_sup ?>"> REGISTROS &nbsp;&nbsp;</a>
            		<a href="./<?php echo $login?>"> SALIR &nbsp;&nbsp;</a>
			</nav>

		<div id="divContenedor">


		</div>

	</body>
</html>
