<html>
	<H2>QUE DESEA AGREGAR:</H2>
		1-Usuario
		<br>
		2-Vehiculo
		<br>
		3-Mecanicos
		<br>
		4-Viajes
		<br>
		5-Reparacion
		<br>
		6-Permisos
		
		<div id="contacto">
				
				<div><label>
					</br>
					<input type="text" name="opcion" size=1>
					</label>
				</div>
	
	
	<?PHP
		
		$opc = opcion;
		
		switch ($opc){
			
			case 1: function insertar_usuario();
			break;
			
			
		}

	

	?>
	
	
	FORMULARIO PARA TABLA USUARIOS
	<form class='contacto' method="post" action="validar_datos_usuarios.php">
		<div id="contacto">
				</br>
				<div><label>ID
					</br>
					<input type="text" name="id_usuario">
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
					<input type="text" name="id_tipo_doc">
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
					</br>
					<input type="text" name="id_licencia">
					</label>
				</div>
				
				</br>
				<div><label>CODGIO ROL
					</br>
					<input type="text" name="codigo_rol">
					</label>
				</div>
				
				<br>
				
				
				<input type="submit" value="Agregar">
	
			</div>
	</form>
	<input type="submit" value="Atras" onclick = "location='usuarios_datos.php'"/>
	
</html>