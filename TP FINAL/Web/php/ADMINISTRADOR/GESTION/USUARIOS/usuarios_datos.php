
<html>
<meta charset="UTF-8">
	<head>
		<LINK REL="Stylesheet" HREF="../../../../css/login.css" TYPE="text/css">
	</head>
	
<body>
		  <?php include ("../../../rutas.php"); ?>
<div id='divHeader'>
			<h1> Sistema de Gestión Usuarios</h1>
		</div>
	<nav id='divNav' >
		
       <ul>
           		

		  
           <a href="./<?php echo  $agregar_usuario ?>">AGREGAR NUEVO USUARIO</a>
		   <br>
		   <a href="./<?php echo  $modificar_usuario?>">MODIFICAR USUARIO EXISTENTE</a>
		   <br>
		   <a href="./<?php echo $eliminar_usuario?>">ELIMINAR UN USUARIO </a>
		   <br>
		    <a href="./<?php echo $permisos_datos?>">ADMINISTRAR PERMISOS </a>
		   <br>

       </ul>
 
	</nav>
	<div id="divContenedor">


		</div>
</body>

</html>