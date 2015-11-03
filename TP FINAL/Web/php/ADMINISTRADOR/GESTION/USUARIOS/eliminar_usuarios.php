<html>
<?php include ('../../../rutas.php'); ?>
	SELECCIONAR EL USUARIO QUE QUIERAS ELIMINAR
	
	<form class='contacto' method="post" action="<?php echo $validar_eliminacion_usuario ?>">
	
		<div id="contacto">
				</br>
				<div><label>INGRESAR TIPO DE DOCUMENTO:
					</br>
					<input type="text" name="tipo_usuario_eliminar">
					</label>
				</div>
				</br>
				<div><label>INGRESAR NUMERO DE DOCUMENTO:
					</br>
					<input type="text" name="numero_usuario_eliminar">
					</label>
				</div>
				</br>
				<input type="submit" value="Eliminar">
				
		</div>
</html>