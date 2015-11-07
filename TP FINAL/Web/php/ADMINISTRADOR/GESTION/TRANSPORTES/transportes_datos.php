<html>	
<body>
<meta charset="UTF-8">
	<head>
		<LINK REL="Stylesheet" HREF="../../../../css/login.css" TYPE="text/css">
	</head>
<?php include ("../../../rutas.php"); ?>
<div id='divHeader'>
			<h1> Sistema de Gestión Transporte</h1>
		</div>
	<nav id='divNav' >
				 
       </ul>
	      <ul>
           <li><a href="./<?php echo $agregar_transportes ?>">AGREGAR UN NUEVO TRANSPORTE </a></li>
           <li><a href="./<?php echo $modificar_transportes ?>">MODIFICAR DATOS DE UN TRANSPORTE EXISTENTE</a></li>
		   <li><a href="./<?php echo $eliminar_transportes  ?>">ELIMINAR REGISTRO DE UN TRANSPORTE</a></li>
           <li><a href="../<?php echo $regiistrar_datos?>">SALIR</a></li>  

       </ul>
 
	</nav>
	<div id="divContenedor">


		</div>
</body>

</html>