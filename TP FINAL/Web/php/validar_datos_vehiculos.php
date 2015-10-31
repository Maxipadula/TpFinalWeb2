<html> 
 	<?PHP 
 	session_start() ; 
 	 
	$id_vehi =$_POST ["id_ve"]; 	 
 	$model =$_POST ["modelo"]; 
 	$marc =$_POST ["marca"]; 
 	$cap_carga =$_POST ["capacidad_carga"]; 
 	 
	 
 	$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta"); 
 		mysql_select_db ("tpFinal",$conexion) or die ("no db"); 
 	 
 	$consulta2= mysql_query(" SELECT id_modelo MODELO
                               FROM modelo 
                               WHERE descripcion = '".$model."' ") or die ("no q3"); 
 	 
 	$fila2 = mysql_fetch_assoc($consulta2); 
	
 	$id_mode = $fila2["MODELO"]; 
 	 
 	 
 	//echo $id_mode; PARA VER QUE TRAEN
 							 
 	$consulta1= mysql_query(" SELECT id_marca marca
                               FROM marca
                               WHERE marca.descripcion = '".$marc."' ") or die ("no q2"); 
 	 
 	$fila1 = mysql_fetch_assoc($consulta1); 
 							 
 	$id_mar = $fila1["marca"]; 
 		 					   
      
 	//echo $id_mar; PARA VER QUE TRAEN 
       
  
 	$insert_vehiculo = mysql_query("insert into vehiculo (id_vehiculo, id_modelo, id_marca , capacidad_carga) 
 									values ('".$id_vehi."','".$id_mode."','".$id_mar."','".$cap_carga."')  
 										    ;")or die (mysql_error()); 
 											 
	echo "<p>Los datos han sido guardados con exito.</p>    
  
 		<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>"; 
 							 
  
 	?> 
 	 
 </html> 