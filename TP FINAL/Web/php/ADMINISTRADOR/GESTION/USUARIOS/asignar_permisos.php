 <html>
 <?php include ("permisos_datos.php"); ?>
	<?PHP
		session_start();
		
				include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
	?>
	<form class='contacto' method="post" action="<?php echo  $validar_asignar_permiso ?>">
 		<div id="contacto">
	
			<div><label>SELECCIONE ROL
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
				</select>
 					</label>
 				</div>	
				
			<div><label>SELECCIONE PERMISO
					</br>
					 <select name="permiso">    
					<?php								
				$consulta_perm= mysql_query ("SELECT descripcion
												FROM permiso");
				
				?>
				<?php
				while ( $row3 = mysql_fetch_array($consulta_perm) )
				{
					
				?>				
				  <option value="<?php echo $row3["descripcion"] ?>" >
				  <?php echo $row3["descripcion"]; ?>
				  </option>
			    <?php
				}
				?>
				</select>
 					</label>
 				</div>
				
		
 				<input type="submit" value="Asignar">
				<input type='button' onclick='history.back()' name='volver atrás' value='Volver'>
 	</form>	
</html>	