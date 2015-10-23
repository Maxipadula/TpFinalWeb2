<?PHP
	session_start() ;
	
	$user =$_POST ["usuario"];
	$clave =$_POST ["clave"];
	
	$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
	
	$consulta = mysql_query("SELECT * 
	                        FROM usuario
	                        WHERE pass ='".$clave."' and  usuario='".$user."'");

	$filasafectadas = mysql_num_rows($consulta);
	
	if ( $filasafectadas != 0){
	
	    if ( $filasafectadas == 1){
	

	        $fila = mysql_fetch_assoc($consulta);

           	    
            
	        if ($fila["codigo_rol"] == 1){
				 
				 $_SESSION["nombre"] = $fila['nombre'] ;
	             header("location:./chofer.php");
				 
				 
	        	    
	        
			}else if ($fila["codigo_rol"] == 2){
				     
			     $_SESSION["nombre"] = $fila['nombre'] ;
                 header ("location:./administrador.php");
	        
            
			
			}else if($fila["codigo_rol"] == 3){
				
				 $_SESSION["nombre"] = $fila['nombre'] ;
				 
                 header("location:./supervisor.php");
			 
			
			}else header("location:error.php");
			 
	    }else header("location:error.php");
	
	}else header("location:error.php");
	

	
?>