<?PHP
	session_start() ;
	
	$fecha_hora =$_POST ["fecha_hora_vc"];
	$lugar =$_POST ["lugar_vc"];
	$costo =$_POST ["costo_vc"];
	$cantidad =$_POST ["cantidad_vc"];
	$id_usuario = $_SESSION["id_usuario"];

	$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
	
	$consulta1= mysql_query(" SELECT MAX( id_viaje ) viaje
                              FROM viaje 
                              WHERE id_usuario = '".$id_usuario."' ");
                              

							
							$fila1 = mysql_fetch_assoc($consulta1);
							
							$id_viaje = $fila1["viaje"];
							
	
	$consulta2 = mysql_query("SELECT *
                              FROM vale_combustible vca
                              WHERE vca.id_vc = ( 
                              SELECT MAX( id_vc )  FROM vale_combustible vc)")or die;
						
							$fila2 = mysql_fetch_assoc($consulta2) or die;
	$id_vc = $fila2["id_vc"];
	$id_vc++;
	
	$insert_id_vc = mysql_query("insert into vale_combustible(id_vc,id_viaje,  fecha_hora, lugar, costo, cantidad)
									values ('".$id_vc."','".$id_viaje."','".$fecha_hora."','".$lugar."', '".$costo."', '".$cantidad."') 
										    ;") or die ("no q1");
	
	$filasafectadas1 = mysql_num_rows($insert_id_vc);
	
	if($insert_id_vc == true)
			  header("location:./chofer_home.php");
	
	
?>