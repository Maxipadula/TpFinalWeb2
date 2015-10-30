<html> 
 	<?PHP 
 	session_start() ; 
 	 
 	$id_us =$_POST ["id_usuario"]; 
 	$usua =$_POST ["usuario"]; 
 	$nombree =$_POST ["nombre"]; 
 	$passw =$_POST ["pass"]; 
 	$fecha_na =$_POST ["fecha_nacimiento"]; 
 	$tipo_d =$_POST ["id_tipo_documento"]; 
 	$numero_doc =$_POST ["num_doc"]; 
 	$id_lic =$_POST ["licencia"]; 
 	$rol =$_POST ["rol"]; 
 	 
	 
 	$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta"); 
 		mysql_select_db ("tpFinal",$conexion) or die ("no db"); 
 	 
 	$consulta2= mysql_query(" SELECT id_tipo_doc tipo 
                               FROM tipo_doc 
                               WHERE descripcion = '".$tipo_d."' ") or die ("no q3"); 
 	 
 	$fila2 = mysql_fetch_assoc($consulta2); 
 	$id_tipo_d = $fila2["tipo"]; 
 	 
 	 
 			echo $id_tipo_d; 
 							 
 	 
  
 							 
 	$consulta1= mysql_query(" SELECT codigo_rol ID 
                               FROM rol  
                               WHERE rol.descripcion = '".$rol."' ") or die ("no q2"); 
 	 
 	$fila1 = mysql_fetch_assoc($consulta1); 
 							 
 							$cod_rol = $fila1["ID"]; 
 		 					   
      
 			echo $cod_rol;	 
       
  
 	$insert_usuario = mysql_query("insert into usuario (id_usuario, usuario, nombre, pass, fecha_nacimiento, id_tipo_doc, num_doc, id_licencia, codigo_rol) 
 									values ('".$id_us."','".$usua."','".$nombree."','".$passw."', '".$fecha_na."', '".$id_tipo_d."', '".$numero_doc."', '".$id_lic."', '".$cod_rol."')  
 										    ;")or die (mysql_error()); 
 											 
 											 
 	/*$_GRABAR_SQL =mysql_query( "INSERT INTO usuario (id_usuario,usuario,nombre,pass,fecha_nacimiento,id_tipo_doc,num_doc,id_licencia) 
 					VALUES ('$id_us','$usua','$nombree','$passw','$fecha_na','$id_tipo_d','$numero_doc','$id_lic','$cod_rol')") or die ("error query");    
 	 
 	$resultado=mysql_query($_GRABAR_SQL); 
 	 
 	echo $resultado; 
 	echo $_GRABAR_SQL;*/ 
 	 
  
 				  
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
  
 		<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>"; 
 							 
  
 	?> 
 	 
 </html> 
