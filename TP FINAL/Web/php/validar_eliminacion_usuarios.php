<html>
	<?PHP
	session_start() ;
	
	$tipo_usu_eliminar =$_POST ["tipo_usuario_eliminar"];
	$num_usu_eliminar =$_POST ["numero_usuario_eliminar"];
	
	
	$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
		mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
	$consulta =("SELECT U.id_usuario 
	                      FROM usuario U inner join
							    tipo_doc TD on U.id_tipo_doc = TD.id_tipo_doc
						  WHERE TD.id_tipo_doc ='".$tipo_usu_eliminar."' AND  num_doc='".$num_usu_eliminar."'") or die ("no q");
	
	$resultado = mysql_query($consulta);
	$filasafect = mysql_num_rows($resultado); /*CANTIDAD DE FILAS AFECTADAS*/
	
	$fila1 = mysql_fetch_assoc($resultado); /*DEVUELVE UN ARRAY DONDE CADA POSICION SE CORRESPONDE CON LOS ATRIBUTOS DE LA BD*/
	
	$usuario_eliminar = $fila1["id_usuario"];
	
	mysql_query("DELETE FROM usuario WHERE id_usuario = '$usuario_eliminar'")
    or die(mysql_error()); 
	
	?>
	
</html>