<html>
 <?php include ("usuarios_datos.php"); ?>
	<h2>MODIFICAR USUARIOS</H2>
		Que dato desea modificar? <br>

	<form class='contacto' method="post" action="<?php echo $modificar_usuarios3?>">

	<br>
	<input type="checkbox" name="datos[]" value="usuario">Usuario
	<br>
	<input type="checkbox" name="datos[]" value="nombre">Nombre
	<br>
	<input type="checkbox" name="datos[]" value="password">Password
	<br>
	<input type="checkbox" name="datos[]" value="fecha">Fecha de nacimiento
	<br>
	<input type="checkbox" name="datos[]" value="licencia">Tipo de Licencia
	<br>
	<input type="checkbox" name="datos[]" value="rol">rol
	<br>
	<input type="submit" value="Modificar">
	<input type="button" onclick="history.back()" name="volver atrás" value="Volver">
	
	</form>	
</html>