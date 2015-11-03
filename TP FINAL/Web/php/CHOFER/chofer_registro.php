<html>
	<head>
	</head>
	
	<body>
		<?php
			 session_start();
			 
			 $permiso ="chofer_registro";
			 $id = $_SESSION["id_usuario"];
			 
			 	include ('../rutas.php');
	
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
			mysql_select_db ("tpFinal",$conexion) or die ("no db");
			 
			 permisos($permiso,$id);
			 
			 function permisos ($permiso,$id){
				
				$consulta2 = mysql_query("	SELECT p.descripcion permiso
						                    FROM usuario u join 
							                     rol r on u.codigo_rol = r.codigo_rol join
								                 permiso p on r.codigo_rol = p.codigo_rol
	                                        WHERE u.id_usuario= '".$id."' and p.descripcion = '".$permiso."'");
							
							$fila2 = mysql_fetch_assoc($consulta2);
	
		
		
							if($fila2["permiso"] != $permiso)
								die("NO TIENES PERMISO");
		
		
			
	        }
		?>
			<h2> REGISTRO DE VIAJE</h2>
			
			<form class='contacto' method="post" action="<?php echo $chofer_validar_registro_viaje?>">
			<div id="contacto">
				
				</br>
				<div><label>FECHA Y HORA DE LLEGADA
					<input type="datetime" name="fecha_hora_vc">
					</label>
				</div>
				
				</br>
				

		<input type="submit" value="Registrar">
		<input type="reset" value="Borrar Todo">
		<input type='button' onclick='history.back()' name='volver atrás' value='Volver'></form>
		
		
	</body>
</html>