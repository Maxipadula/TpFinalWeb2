

<html>
<meta charset="UTF-8">
	<head>
		<LINK REL="Stylesheet" HREF="../../../css/login.css" TYPE="text/css">
	</head>
	
<body>
		  <?php include ("../../rutas.php"); ?>
<div id='divHeader'>
			<h1> Sistema de Gestión Recursos</h1>
		</div>
	<nav id='divNav' >
		
       <ul>
           		

		  
       		<?php include ("../../rutas.php");?>
		  
           <a href="./<?php echo $usuarios_datos ?>">USUARIOS</a>
		   <br>
           <a href="./<?php echo $vehiculos_datos ?>">VEHICULOS</a>
		   <br>
           <a href="./<?php echo $transportes_datos ?>">TRANSPORTES</a>
		   <br>
           <a href="./<?php echo $mecanicos_datos ?>">MECANICOS</a>
		   <br>

       </ul>
 
	</nav>
	<div id="divContenedor">


		</div>
</body>

</html>