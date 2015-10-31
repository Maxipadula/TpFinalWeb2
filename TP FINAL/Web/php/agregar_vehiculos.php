 <html>

	<?PHP
				$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
	            mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			$consulta_id= mysql_query(" SELECT MAX( id_vehiculo ) ID
                                        FROM vehiculo ") or die ("no query");
                             
			
			$fila1 = mysql_fetch_assoc($consulta_id);
			
			$id_vehiculo= $fila1["ID"];
			
			$id_vehiculo +=1;
	?>
 	FORMULARIO PARA TABLA VEHICULO:
 	<form class='contacto' method="post" action="validar_datos_vehiculos.php">
 		<div id="contacto">
 				</br>
 				<div><label>ID
 					</br>
					<input type="text" name="id_ve"  value="<?php echo $id_vehiculo?>"readonly = "readonly">
 					</label>
 				</div>
 				</br>
				
 				<div><label>MODELO
 				</br>
				<select name="modelo"> 
					 <option value="nada" selected="selected"></option>
					 <option value="HD 78">HD 78</option>
                     <option value="HD 65">HD 65</option>
                     <option value="Oln 2.5 CS">Oln 2.5 CS</option>
					 <option value="Maxity">Maxity</option>
                </select>	
 				</label>
 				</div>
				<br>
				
				<div><label>MARCA
 				</br>
			    <select name="marca"> 
				     <option value="nada" selected="selected"></option>
					 <option value="Hyundai">Hyundai</option>
                     <option value="Foton">Foton</option>
                     <option value="Renult">Renult</option>
				</select>
 				</label>
 				</div>
				<br>
				
				<div><label>CAPACIDAD CARGA
					</br>
 					<input type="text" name="capacidad_carga">
 					</label>
 				</div>
				<br>
				
 				<input type="submit" value="Agregar">
				<br>
 		</div>
 	</form>
 	
	<input type="submit" value="Atras" onclick = "location='vehiculos_datos.php'"/>
 
 </html>