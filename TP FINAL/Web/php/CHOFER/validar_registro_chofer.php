<?PHP
	session_start() ;
	
	$fecha_hora =$_POST ["fecha_hora_viaje"];
	$km_recorridos =$_POST ["km_recorridos_viaje"];
	$id_usuario = $_SESSION["id_usuario"];

		include ('../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
	
	$consulta1= mysql_query(" SELECT MAX( id_viaje ) viaje
                              FROM viaje 
                              WHERE id_usuario = '".$id_usuario."' ");
                              

							
							$fila1 = mysql_fetch_assoc($consulta1)or die ;
							
							$id_viaje = $fila1["viaje"];
							
	

	
	$update_viaje_fecha = mysql_query("UPDATE viaje
								       SET fecha_fin = '".$fecha_hora."'
									   where id_viaje = '".$id_viaje."'");
									   
	
	
	
							
		
	
	if($update_viaje_fecha == true)
			  header("location:./".$chofer_home."");
	
?>