 <html>
 <?php include ("usuarios_datos.php"); ?>
	<?PHP
				include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			$consulta_id= mysql_query(" SELECT MAX( id_usuario ) ID
                                        FROM usuario ") or die ("no query");
                             
			
			$fila1 = mysql_fetch_assoc($consulta_id);
			
			$id_usuario= $fila1["ID"];
			
			$id_usuario +=10;
	?>
 	DATOS DEL USUARIO A AGREGAR:
 	<form class='contacto' method="post" action="<?php echo  $validar_usuario ?>">
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
					 <select name="id_lic">    
					<?php								
				$consulta_lic= mysql_query ("SELECT id_licencia
												FROM licencia");
				
				?>
				<?php
				while ( $row = mysql_fetch_array($consulta_lic) )
				{
					
				?>				
				  <option value="<?php echo $row["id_licencia"] ?>" >
				  <?php echo $row["id_licencia"]; ?>
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
				  <option value="<?php echo $row2["descripcion"] ?>" >
				  <?php echo $row2["descripcion"]; ?>
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

 	</form>
	

 </html>