<html>
	<body>

			<h2> GESTION DE TRANSPORTES </h2>
			<?php include ("../../../rutas.php"); ?>
		  
           <a href="./<?php echo $agregar_transportes ?>">AGREGAR UN NUEVO TRANSPORTE </a>
		   <br>
		   <a href="./<?php echo $modificar_transportes ?>">MODIFICAR DATOS DE UN TRANSPORTE EXISTENTE</a>
		   <br> 
		   <a href="./<?php echo $eliminar_transportes  ?>">ELIMINAR REGISTRO DE UN TRANSPORTE</a>
		   <br>
		   <input type='button' onclick='history.back()' name='volver atrás' value='Volver'></form>
	</body>



</html>