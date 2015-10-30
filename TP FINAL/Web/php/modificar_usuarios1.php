<html>
	MODIFICAR USUARIO PARTE 2
	<?php 
		session_start() ;
	
		$tipo_usuario_mod =$_POST ["tipo_usuario_modificar"];
		$num_usuario_mod =$_POST ["numero_usuario_modificar"];
		
		
		$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
	    mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
	$consulta =("SELECT U.id_usuario 
	                      FROM usuario U inner join
							    tipo_doc TD on U.id_tipo_doc = TD.id_tipo_doc
						  WHERE TD.id_tipo_doc ='".$tipo_usuario_mod."' AND  num_doc='".$num_usuario_mod."'") or die ("no q");
		
	$resultado = mysql_query($consulta);
	$filasafect = mysql_num_rows($resultado); /*CANTIDAD DE FILAS AFECTADAS*/
	
	$fila1 = mysql_fetch_assoc($resultado); /*DEVUELVE UN ARRAY DONDE CADA POSICION SE CORRESPONDE CON LOS ATRIBUTOS DE LA BD*/
	
	$usuario_a_modificar = $fila1["id_usuario"];
	
	header('Location: modificar_usuarios2.php');
	?>
	
	
</html>