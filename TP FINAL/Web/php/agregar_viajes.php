 <html>

	<?PHP
				$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
	            mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			$consulta_id= mysql_query(" SELECT MAX( id_viaje ) ID
                                        FROM viaje ") or die ("no query");
                             
			
			$fila1 = mysql_fetch_assoc($consulta_id);
			
			$id_viaje= $fila1["ID"];
			
			$id_viaje +=1;
	?>
 	FORMULARIO PARA TABLA VIAJES:
	
 	<form class='contacto' method="post" action="validar_datos_viajes.php">
 		<div id="contacto">
 				</br>
 				<div><label>ID
					</br>
					<input type="text" name="id_viajes"  value="<?php echo $id_viaje?>"readonly = "readonly">
 				</label>
 				</div>	
 				</br>
			<?php	
 				$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
				mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
				$consulta  = mysql_query ("SELECT id_usuario, nombre
										  FROM usuario") or die ("no q");
			
				if ($row = mysql_fetch_array($consulta)){
				echo "<table border = '1'> \n";
				echo "<tr><td>id_usuario</td><td>Nombre y Apellido</td></tr> \n";
				do{
					echo "<tr><td>".$row["id_usuario"]."</td><td>".$row["nombre"]."</td></tr> \n";     
				} while ($row = mysql_fetch_array ($consulta));
				echo "</table> \n";
				} else {
				echo "no se encontraron ningun registro";
				} 
			?>
				<br>
 				<div><label>ID USUARIO
 					</br>
 					<input type="text" name="id_usuario">
 				</label>
 				</div>
 				</br>
				
				<?php	
 				$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
				mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
				$consulta  = mysql_query ("SELECT id_transporte, patente
											FROM transporte") or die ("no q");
			
				if ($row = mysql_fetch_array($consulta)){
				echo "<table border = '1'> \n";
				echo "<tr><td>id_transporte</td><td>patente</td></tr> \n";
				do{
					echo "<tr><td>".$row["id_transporte"]."</td><td>".$row["patente"]."</td></tr> \n"; 
					
				} while ($row = mysql_fetch_array ($consulta));
				echo "</table> \n";
				} else {
				echo "no se encontraron ningun registro";
				} 
			?>
				
				<br>
 				<div><label>ID TRANSPORTE
 					</br>
 					<input type="text" name="id_transpo">
 				</label>
 				</div>
 				</br>
				
 				<div><label>ORIGEN
 					</br>
 					<input type="text" name="origen">
 				</label>
 				</div>
 				</br>
				
				<div><label>DESTINO
 				</br>
 				<input type="text" name="destino">
 				</label>
 				</div>
 				</br>
				
				<div><label>CLIENTE
 				</br>
 				<input type="text" name="cliente">
 				</label>
 				</div>
 				</br>
				
				 <div><label>FECHA DE INICIO
 				</br>
 				<input type="text" name="fecha_inicio">
 				</label>
 				</div>
 				</br>
				
				 <div><label>CARGA
 				</br>
 				<input type="text" name="carga">
 				</label>
 				</div>
 				</br>
				
 				<input type="submit" value="Agregar">
				<br>
 		</div>
 	</form>
	
	<input type="submit" value="Atras" onclick = "location='viajes_datos.php'"/>
 
 </html>