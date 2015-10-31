 <html>

	<?PHP
				$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
	            mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			$consulta_id= mysql_query(" SELECT MAX( id_mecanico ) IDM
                                        FROM mecanico ") or die ("no query");
                             
			
			$fila1 = mysql_fetch_assoc($consulta_id);
			
			$id_mecanico= $fila1["IDM"];
			
			$id_mecanico +=1;
	?>
 	FORMULARIO PARA TABLA MECANICO:
 	<form class='contacto' method="post" action="validar_datos_mecanicos.php">
 		<div id="contacto">
 				</br>
 				<div><label>ID
					</br>
					<input type="text" name="id_me"  value="<?php echo $id_mecanico?>"readonly = "readonly">
 				</label>
 				</div>	
 				</br>
				
 				<div><label>NOMBRE Y APELLIDO
 					</br>
 					<input type="text" name="nombre">
 				</label>
 				</div>
 				</br>
							
				<input type="submit" value="Agregar">
				<br>
 		</div>
 	</form>
	
	<input type="submit" value="Atras" onclick = "location='mecanicos_datos.php'"/>
 
 </html>