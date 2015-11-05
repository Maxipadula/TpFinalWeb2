
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
           <a href="./<?php echo $agregar_vehiculos ?>">AGREGAR</a>
		   <br>
		  <!--- <a href="./modificar_vehiculos.php">MODIFICAR</a>
		   <br> --->
		   <a href="./<?php echo $eliminar_vehiculos ?>">ELIMINAR</a>
		   <br>
		   <input type='button' onclick='history.back()' name='volver atrás' value='Volver'></form>
		   <br>

       </ul>
 
	</nav>
	<div id="divContenedor">


		</div>
</body>

</html>