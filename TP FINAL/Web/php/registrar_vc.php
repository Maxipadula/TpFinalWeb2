<html>
	<head>
	</head>
	
	<body>
		<?php
			 session_start();
			 
			 $permiso ="registrar_vc";
			 $id = $_SESSION["id_usuario"];
			 
			 $conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
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
			<h2> VALE DE COMBUSTIBLE </h2>
			
			<form class='contacto' method="post" action="validar_vc.php">
			<div id="contacto">
				
				</br>
				<div><label>FECHA Y HORA
					<input type="datetime" name="fecha_hora_vc">
					</label>
				</div>
				
				</br>
				
				<div><label>LUGAR
					<input type="text" name="lugar_vc">
					</label>
				</div>
				</br>
				
				</br>
				
				<div><label>COSTO
					<input type="text" name="costo_vc">
					</label>
				</div>
				</br>
				
				</br>
				
				<div><label>CANTIDAD
					<input type="text" name="cantidad_vc">
					</label>
				</div>
				</br>
			  <p>
                <button id="botonesform" type="submit">ACEPTAR</button>
				<button id="botonesform2" type="reset">BORRAR TODO</button>
				<input type="button" onclick="history.back()" name="volver atrás" value="CANCELAR">
                </p>
		
	</body>
</html>