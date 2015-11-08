
<html>
<meta charset="UTF-8">
	<head>
		<LINK REL="Stylesheet" HREF="../../../../css/login.css" TYPE="text/css">
	</head>
	
<body>
		<?php include ("../../../rutas.php"); ?>
		
		<div id='divHeader'>
			<h1> Sistema de Gestión de Usuarios</h1>
		</div>
		
	<nav id='divNav' >
		
       <ul>
           		

		  
           <li><a href="./<?php echo  $agregar_usuario ?>">AGREGAR NUEVO USUARIO</a></li>
		  
		   <li><a href="./<?php echo  $modificar_usuario?>">MODIFICAR USUARIO EXISTENTE</a></li>
		 
		  <li> <a href="./<?php echo $eliminar_usuario?>">ELIMINAR UN USUARIO </a></li>
		
		   <li> <a href="./<?php echo $permisos_datos?>">ADMINISTRAR PERMISOS </a></li>
		   
		   <li><a href="../../<?php echo $registrar_datos?>">SALIR</a></li>
		

       </ul>
 
	</nav>

</body>

</html>