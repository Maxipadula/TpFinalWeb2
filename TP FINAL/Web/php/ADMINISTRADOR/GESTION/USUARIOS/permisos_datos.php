
<html>
<meta charset="UTF-8">
	<head>
		<LINK REL="Stylesheet" HREF="../../../../css/login.css" TYPE="text/css">
	</head>
	
<body>
<?php include ("../../../rutas.php"); ?>
<div id='divHeader'>
			   <h1> ADMINISTRAR PERMISOS</h1>
		</div>
	<nav id='divNav' >
		
       <ul>
           		

		 
			
           <li><a href="./<?php echo $agregar_permiso ?> ">AGREGAR</a></li>
		
		   <li><a href="./<?php echo $asignar_permiso ?>">ASIGNAR PERMISOS</a></li>
	
		   <li><a href="./<?php echo $eliminar_permiso ?>">ELIMINAR</a></li>
			
			 <li><a href="./<?php echo $agregar_usuario?>">SALIR</a></li>
		

       </ul>
 
	</nav>
	<div id="divContenedor">


		</div>

</html>