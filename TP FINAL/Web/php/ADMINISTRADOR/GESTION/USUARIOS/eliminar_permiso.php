<html>
<?php include ("permisos_datos.php"); ?>
	SELECCIONAR PERMISO A ELIMINAR
	
	<?php
		
		include ('../../../rutas.php');
	
		$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
		mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
		
	?>