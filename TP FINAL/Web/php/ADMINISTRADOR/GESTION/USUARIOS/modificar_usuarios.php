<html>
 <?php include ("usuarios_datos.php"); ?>
 <?php 	include ('../../../rutas.php');?>
	SELECCIONAR USUARIO A MODIFICAR
	<br>
	Colocar tipo y numero de documento del usuario a modificar: 
		<br>
		<form class='contacto' method="post" action="<?php echo $usuario_a_modificar ?>">
	
		<div id="contacto">
				</br>
				<div><label>INGRESAR TIPO DE DOCUMENTO:
					</br>
					 <select name="tipo_usuario_modificar"> 
					 <option value="nada" selected="selected"></option>
					 <option value="DNI">dni</option>
                     <option value="Libreta Enrolamiento">Libreta de enrolamiento</option>
                     <option value="Libreta Civica">Libreta civica</option>
                     </select>

					</label>
				</div>
				</br>
				<div><label>INGRESAR NUMERO DE DOCUMENTO:
					</br>
					<input type="text" name="numero_usuario_modificar">
					</label>
				</div>
				</br>
				<input type="submit" value="Seguir">
				<input type='button' onclick='history.back()' name='volver atrás' value='Volver'></form>
				
		</div>
	
	</form>
</html>



