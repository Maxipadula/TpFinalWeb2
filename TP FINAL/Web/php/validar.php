<?PHP
	session_start() ;
	
	$user =$_POST ["usuario"];
	$clave =$_POST ["clave"];
	

	
	$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
	
	$consulta1 = mysql_query("SELECT * 
	                        FROM usuario
	                        WHERE pass ='".$clave."' AND  usuario='".$user."'") or die ("no q");
	
	$filasafectadas1 = mysql_num_rows($consulta1);
	
	if ( $filasafectadas1 != 0){
	
	    if ( $filasafectadas1 == 1){
	

	        $fila1 = mysql_fetch_assoc($consulta1);

           	    
	        if ($fila1["codigo_rol"] == 1){
				 
				 $permiso="chofer_home";
				 permisos($clave,$user,$permiso);
				
				 $_SESSION["nombre"] = $fila1['nombre'] ;
				 
	             header("location:./chofer_home.php");
				 
				 
			}else if ($fila1["codigo_rol"] == 2){
				  
				 $permiso=administrador_home;
				 permisos();
			     $_SESSION["nombre"] = $fila1['nombre'] ;
				
				 
                 header ("location:./administrador_home.php");
	        
            
			
			}else if($fila1["codigo_rol"] == 3){
				 
				 $permiso=supervisor_home;
				 permisos();
				 $_SESSION["nombre"] = $fila1['nombre'] ;
				 
				 
                 header("location:./supervisor_home.php");
			 
			
			}else header("location:error.php");
			 
	    }else header("location:error.php");
	
	}else header("location:error.php");
	

	
	function permisos ($clave, $user, $permiso){
		
		$consulta2 = mysql_query("	SELECT r.descripcion descripcion, p.descripcion permiso, u.id_usuario ID
						FROM usuario u join 
							     rol r on u.codigo_rol = r.codigo_rol join
								 permiso p on r.codigo_rol = p.codigo_rol
	                        WHERE pass ='".$clave."' and  usuario= '".$user."' and p.descripcion = '".$permiso."'")	;
		$fila2 = mysql_fetch_assoc($consulta2);
	
		
		
		if($fila2["permiso"] != $permiso)
			 die("NO TIENES PERMISO");
		
		 $_SESSION["permiso"] = $fila2['permiso'] ;
		 $_SESSION["id_usuario"] = $fila2['ID'] ;
	
			
	}
?>