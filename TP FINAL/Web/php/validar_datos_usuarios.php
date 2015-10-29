<html>
	<?PHP
	session_start() ;
	
	$id_us =$_POST ["id_usuario"];
	$usua =$_POST ["usuario"];
	$nombree =$_POST ["nombre"];
	$passw =$_POST ["pass"];
	$fecha_na =$_POST ["fecha_nacimiento"];
	$id_tipo_d =$_POST ["id_tipo_doc"];
	$numero_doc =$_POST ["num_doc"];
	$id_lic =$_POST ["id_licencia"];
	$cod_rol =$_POST ["codigo_rol"];
	
	/*echo $id_us;
	echo $usua;
	echo $nombree;
	echo $passw;
	echo $fecha_na;
	echo $id_tipo_d;
	echo $numero_doc;
	echo $id_lic;
	echo $cod_rol;*/
	
	$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
		mysql_select_db ("tpFinal",$conexion) or die ("no db");

	$_GRABAR_SQL = "INSERT INTO usuario (id_usuario,usuario,nombre,pass,fecha_nacimiento,id_tipo_doc,num_doc,id_licencia,codigo_rol)
					VALUES ('$id_us','$usua','$nombree','$passw','$fecha_na','$id_tipo_d','$numero_doc','$id_lic','$cod_rol');";   
	
	$resultado=mysql_query($_GRABAR_SQL);
	
	echo $resultado;
	echo $_GRABAR_SQL;
	
	mysql_close($conexion);
				 
	/*mysql_query("SELECT * 
	             FROM usuario") or die ("no q");*/
	
	
	
	/*include("cierra_conexion.php");*/ 


	/*$result = mysql_query("SELECT id_usuario,usuario,nombre,pass,fecha_nacimiento,id_tipo_doc,num_doc,id_licencia,codigo_rol,
						   FROM usuario", $conexion); 
		echo "<table border = '1'> \n"; 
		echo "<tr><td>id_usuario</td><td>usuario</td></tr>nombre</td></tr>pass</td></tr>fecha_nacimiento</td></tr>id_tipo_doc</td></tr>num_doc</td></tr>id_licencia</td></tr>codigo_rol</td></tr> \n"; 
		
		while ($row = mysql_fetch_row($result)){ 
		echo "<tr><td>$row[0]</td><td>$row[1]</td></tr> \n"; 
		} 
		echo "</table> \n";*/
		
	echo "<p>Los datos han sido guardados con exito.</p>   

		<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>"
							

	?>
	
</html>