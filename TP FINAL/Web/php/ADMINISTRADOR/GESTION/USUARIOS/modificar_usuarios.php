<html>
	SELECCIONAR USUARIO A MODIFICAR
	<br>
	Colocar tipo y numero de documento del usuario a modificar: 
		<br>
		<form class='contacto' method="post" action="usuario_a_modificar.php">
	
		<div id="contacto">
				</br>
				<div><label>INGRESAR TIPO DE DOCUMENTO:
					</br>
					 <select name="tipo_usuario_modificar"> 
					 <option value="DNI" selected="selected">dni</option>
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



