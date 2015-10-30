
	MODIFICAR USUARIO PARTE 3
	<?php 
	
		session_start() ;
		
		$modificar =$_POST ["usuario_a_modificar"];
		$codigo =$_POST ["codigo_modificar"];
		
		$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
	    mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
		switch ($codigo){
			case 1: 
				echo "USUARIO";
				echo "<h4>Colocar el nuevo usuario:</h4> ";
				echo "<input type='text' name='usuario_nuevo'>";
						  


				//$usuario =("UPDATE usuario
					//	    SET usuario = usuario_nuevo
						//	where id_usuario = '".$modificar."')" or die ("no q");
				
				mysql_query("UPDATE usuario SET usuario = usuario_nuevo WHERE id_usuario = '$modificar'")
				or die(mysql_error());
				
		}
				//$resultado = mysql_query($usuario);
				
				//echo " <a href='./modificar_usuarios0.php'>Modificar</a>";
				
			
			/*break;
			
			case 2: 

			break;
			
			case 3: 

			break;
			
			case 4: 

			break;
			
			case 5: 
	
			break;*/
			
		
	
	?>

