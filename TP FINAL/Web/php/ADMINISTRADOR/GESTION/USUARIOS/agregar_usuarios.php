 <html>
<meta charset="UTF-8">
	<?PHP
				$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
	            mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			$consulta_id= mysql_query(" SELECT MAX( id_usuario ) ID
                                        FROM usuario ") or die ("no query");
                             
			
			$fila1 = mysql_fetch_assoc($consulta_id);
			
			$id_usuario= $fila1["ID"];
			
			$id_usuario +=10;
	?>
 	DATOS DEL USUARIO A AGREGAR:
 	<form class='contacto' method="post" action="validar_datos_usuarios.php">
 		<div id="contacto">
 				</br>
 				<div><label>ID
					</br>
					<input type="text" name="id_usuario"  value="<?php echo $id_usuario?>"readonly = "readonly">
 				</label>
 				</div>	
 				</br>
				
 				<div><label>USUARIO
 					</br>
 					<input type="text" name="usuario">
 				</label>
 				</div>
 				</br>
				
 				<div><label>NOMBRE
 					</br>
 					<input type="text" name="nombre">
 				</label>
 				</div>
 				</br>
				
 				<div><label>CONTRASEÑA
 					</br>
 					<input type="text" name="pass">
 				</label>
 				</div>
 				</br>
				
 				<div><label>FECHA DE NACIMIENTO
 					</br>
 					<input type="text" name="fecha_nacimiento">
 				</label>
 				</div>
 				</br>
				
 				<div><label>TIPO DE DOCUMENTO
 					</br>
					 <select name="id_tipo_documento"> 
					 <option value="nada" selected="selected"></option>
					 <option value="DNI">dni</option>
                     <option value="Libreta Enrolamiento">Libreta de enrolamiento</option>
                     <option value="Libreta Civica">Libreta civica</option>
                     </select>
 				</label>
 				</div>
 				</br>
				
 				<div><label>NUMERO DE DOCUMENTO
 					</br>
 					<input type="text" name="num_doc">
 				</label>
 				</div>
 				</br>
				

				<div><label>TIPO DE LICENCIA
 					 </br>
					 <select name="licencia">
					<?php								
				$consulta_licencia = mysql_query ("SELECT id_licencia ID
												FROM licencia");
				
				?>
				<?php
				while ( $row2 = mysql_fetch_array($consulta_licencia) )
				{
					
				?>				
				  <option value=" <?php echo $row2['ID'] ?> " >
				  <?php echo $row2['ID']; ?>
				  </option>
			    <?php
				}
				?>
                     </select>
 				</label>
 				</div>
				
 				</br>
				
				<div><label>ROL
					</br>
					 <select name="rol">    

					<?php								
				$consulta_rol= mysql_query ("SELECT descripcion
												FROM rol");
				
				?>
				<?php
				while ( $row2 = mysql_fetch_array($consulta_rol) )
				{
					
				?>				
				  <option value=" <?php echo $row2['descripcion'] ?> " >
				  <?php echo $row2['descripcion']; ?>
				  </option>
			    <?php
				}
				?>
 					</label>
 				</div>
				
				</div>
 				
				<br>
 		
		</br>
 		</br>
		
 				<input type="submit" value="Agregar">
				<input type="reset" value="Borrar Todo">
				<input type='button' onclick='history.back()' name='volver atrás' value='Volver'></form>
 	</form>
	

 </html>