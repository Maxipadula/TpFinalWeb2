 <html>
<meta charset="UTF-8">
	<?PHP
		session_start();
		
				include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			$consulta_id= mysql_query(" SELECT MAX( id_permiso) ID
                                        FROM permiso ") or die ("no query");
                             
			
			$fila1 = mysql_fetch_assoc($consulta_id);
			
			$id_permiso= $fila1["ID"];
			
			$id_permiso +=1;
	?>
	<form class='contacto' method="post" action="<?php echo  $validar_agregar_permiso ?>">
 		<div id="contacto">
	<div><label>ID DEL PERMISO:
					</br>
					<input type="text" name="id_permiso"  value="<?php echo $id_permiso?>"readonly = "readonly">
 				</label>
 				</div>	
 				</br>
	<div><label>NOMBRE DEL PERMISO QUE DESEA AGREGAR:
			</br>
 					<input type="text" name="permiso">
 				</label>
 				</div>
 				</br>
		
 				<input type="submit" value="Agregar">
				<input type='button' onclick='history.back()' name='volver atrás' value='Volver'></form>
 	</form>
</html>