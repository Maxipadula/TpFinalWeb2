<html>
	<body>

			<h2>GESTION DE USUARIOS</h2>
			
		  <?php include ("../../../rutas.php"); ?>
		  
           <a href="./<?php echo  $agregar_usuario ?>">AGREGAR NUEVO USUARIO</a>
		   <br>
		   <a href="./<?php echo  $modificar_usuario?>">MODIFICAR USUARIO EXISTENTE</a>
		   <br>
		   <a href="./<?php echo $eliminar_usuario?>">ELIMINAR UN USUARIO </a>
		   <br>
		    <a href="./<?php echo $permisos_datos?>">ADMINISTRAR PERMISOS </a>
		   <br>
		   <input type='button' onclick='history.back()' name='volver atrás' value='Volver'></form>
	</body>



</html>