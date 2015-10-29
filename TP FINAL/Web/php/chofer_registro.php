<html>
	<head>
	</head>
	
	<body>
		<?php
			 session_start();
			 
			 $permiso ="chofer_registro";
			 $id = $_SESSION["id_usuario"];
			 
			 $conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
	         mysql_select_db ("tpFinal",$conexion) or die ("no db");
			 
			 permisos($permiso,$id);
			 
			 function permisos ($permiso,$id){
				
				$consulta2 = mysql_query("	SELECT p.descripcion permiso
						                    FROM cliente c join 
							                     rol r on c.codigo_rol = r.codigo_rol join
								                 permiso p on r.codigo_rol = p.codigo_rol
	                                        WHERE c.id_cliente= '".$id."' and p.descripcion = '".$permiso."'");
							
							$fila2 = mysql_fetch_assoc($consulta2);
	
		
		
							if($fila2["permiso"] != $permiso)
								die("NO TIENES PERMISO");
		
		
			
	        }
		?>
			<h2> REGISTRAR DATOS DE RECIBO</h2>
			
			<form class='contacto' method="post" action="validar_registro_chofer.php">
			<div id="contacto">
				
				</br>
				<div><label>FECHA Y HORA DE LLEGADA
					<input type="datetime" name="fecha_hora_viaje">
					</label>
				</div>
				
				</br>
				
				<div><label>KM RECORRIDOS
					<input type="text" name="km_recorridos_viaje">
					</label>
				</div>
				</br>
				
				  <p>
         
				 <button id="botonesform" type="submit">ACEPTAR</button>
				<button id="botonesform2" type="reset">BORRAR TODO</button>
				<input type="button" onclick="history.back()" name="volver atrás" value="CANCELAR">
                </p>
			</form>
		
		
	</body>
</html>