<html>
<?php

	session_start();
	
	$permiso = $_POST["permiso"];
	$rol = $_POST["rol"];
	
		
						
	
	include ('../../../rutas.php');
	echo $rol;
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
	
	$consultar_rol = mysql_query("SELECT *
								  FROM rol
								  WHERE descripcion = '".$rol."'")or die (mysql_error());
								  
	$fila = mysql_fetch_assoc($consultar_rol) or die ("cuac");
	
	$id_rol = $fila["codigo_rol"];
	

	$consultar_permiso= mysql_query("SELECT id_permiso ID
								  FROM permiso
								  WHERE descripcion='".$permiso."'")or die (mysql_error());
								  
	$fila2=mysql_fetch_assoc($consultar_permiso)or die ("cuac2");
	
	$id_permiso = $fila2["ID"];
	
	
/*$asignar_permiso =mysql_query("insert into dar_permiso(id_permiso,codigo_rol)
														values('".$id_permiso."',1);") or die (mysql_error());*/
	
				
	/*header("location: ".$permisos_datos."");*/
?>

</html>