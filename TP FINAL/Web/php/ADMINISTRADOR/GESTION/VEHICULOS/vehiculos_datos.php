
<html>
<meta charset="UTF-8">
	<head>
		<LINK REL="Stylesheet" HREF="../../../../css/login.css" TYPE="text/css">
	</head>
	
<body>
		  <?php include ("../../../rutas.php"); ?>
<div id='divHeader'>
			<h1> Sistema de Gestión Vehiculos</h1>
		</div>
	<nav id='divNav' >
		
       <ul>
           		

		  
          <?php include ("../../../rutas.php"); ?>
           <li><a href="./<?php echo $agregar_vehiculos ?>">AGREGAR</a></li>
	
		  <!--- <a href="./modificar_vehiculos.php">MODIFICAR</a>
		   <br> --->
		  <li> <a href="./<?php echo $eliminar_vehiculos ?>">ELIMINAR</a></li>
		  
		  <li><a href="../../<?php echo $registrar_datos?>">SALIR</a></li>


		

       </ul>
 
	</nav>
	<div id="divContenedor">


		</div>
</body>

</html>