<?PHP
	session_start() ;
	
	$fecha_hora =$_POST ["fecha_hora_vc"];
	$lugar =$_POST ["lugar_vc"];
	$costo =$_POST ["costo_vc"];
	$cantidad =$_POST ["cantidad_vc"];

	

	
	$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
	
	$consulta1 = mysql_query("SELECT * 
	                        FROM usuario
	                        WHERE pass ='".$clave."' AND  usuario='".$user."'") or die ("no q");
	
							
	
	}
?>