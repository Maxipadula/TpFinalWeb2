 <html>

	<?PHP
				$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
	            mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			$consulta_id= mysql_query(" SELECT MAX( id_usuario ) ID
                                        FROM usuario ") or die ("no query");
                             
			
			$fila1 = mysql_fetch_assoc($consulta_id);
			
			$id_usuario= $fila1["ID"];
			
			$id_usuario +=10;
	?>
 	FORMULARIO PARA TABLA USUARIOS:
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
				
 				<div><label>PASS
 					</br>
 					<input type="text" name="pass">
 				</label>
 				</div>
 				</br>
				
 				<div><label>FECHA NACIMIENTO
 					</br>
 					<input type="text" name="fecha_nacimiento">
 				</label>
 				</div>
 				</br>
				
 				<div><label>TIPO DOCUMENTO
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
				
 				<div><label>NUMERO DOCUMENTO
 					</br>
 					<input type="text" name="num_doc">
 				</label>
 				</div>
 				</br>
				
				<div><label>LICENCIA
				<div><label>TIPO DE LICENCIA
 					 </br>
					 <select name="licencia">
					 <option value="nada" selected="selected"></option>
					 <option value="NO">NO</option>
					 <option value="A.1">A.1</option>
                     <option value="B.1">B.1</option>
                     <option value="B.2">B.2</option>
					 <option value="C">C</option>
					 <option value="D.1">D.1</option>
					 <option value="D.2">D.2</option>
				     <option value="E.1">E.1</option>
				     <option value="E.2">E.2</option>
				     <option value="F">F</option>	
                     </select>
 				</label>
 				</div>
				</div>
 				</br>
				
				<div><label>CODGIO ROL
				<div><label>ROL
					</br>
 					</br>
					 <select name="rol">    
					 <option value="nada" selected="selected"></option>
					 <option value="chofer">Chofer</option>
                     <option value="administrador">Administrador</option>
                     <option value="supervisor">Supervisor</option>
                     </select>
 					</label>
 				</div>
				</div>
 				<br>
 				
 				<input type="submit" value="Agregar">
				<br>
 		</div>
 	</form>
	
	<input type="submit" value="Atras" onclick = "location='usuarios_datos.php'"/>
 
 </html>