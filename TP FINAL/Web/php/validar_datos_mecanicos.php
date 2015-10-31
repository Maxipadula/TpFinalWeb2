<html> 
 	<?PHP 
 	session_start() ; 
 	 
	$id_mecanic =$_POST ["id_me"]; 	 
 	$nombree =$_POST ["nombre"]; 

 	 
	 
 	$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta"); 
 		mysql_select_db ("tpFinal",$conexion) or die ("no db"); 
 	 
	$insert_mecanico = mysql_query("insert into mecanico (id_mecanico, nombre) 
 									values ('".$id_mecanic."','".$nombree."')  
 										    ;")or die (mysql_error());
 	 
 	/*$fila2 = mysql_fetch_assoc($consulta2); 
	
 	$id_mode = $fila2["MODELO"]; 
 	 
 	 
 	//echo $id_mode; PARA VER QUE TRAEN
 							 
 	 
 	$fila1 = mysql_fetch_assoc($consulta1); 
 							 
 	$id_mar = $fila1["marca"]; 
 		 					   
      
 	//echo $id_mar; PARA VER QUE TRAEN 
       */
 											 
	echo "<p>Los datos han sido guardados con exito.</p>    
  
 		<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>"; 
 							 
  
 	?> 
 	 
 </html> 