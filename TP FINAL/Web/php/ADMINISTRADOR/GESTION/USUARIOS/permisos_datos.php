<html>
	<body>
	 <?php include ("usuarios_datos.php"); ?>
		<?php include("../../../rutas.php"); ?>

			
			
		
		   
	</body>

	<nav id='divNav' >
		
       <ul>
           		

		    <h2> ADMINISTRAR PERMISOS</h2>
			
           <a href="./<?php echo $agregar_permiso ?> ">AGREGAR</a>
		   <br>
		   <a href="./<?php echo $asignar_permiso ?>">ASIGNAR PERMISOS</a>
		   <br>
		   <a href="./<?php echo $eliminar_permiso ?>">ELIMINAR</a>
		   <br>
		   <br>

       </ul>
 
	</nav>
	<div id="divContenedor">


		</div>

</html>