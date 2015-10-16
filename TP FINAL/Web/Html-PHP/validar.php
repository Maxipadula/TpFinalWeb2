<?PHP
	session_start();
	
	$user =$_POST ["usuario"];
	$clave =$_POST ["clave"];
	
	$conexion = mysql_connect("localhost", "root","") or die("no db");
	mysql_select_db ("tpFinal");
	
	$consulta = mysql_query("SELECT * 
	                        FROM usuario
	                        WHERE usuario='".$user."' AND contraseña='".$clave."' ");

	$filasafectadas = mysql_num_rows($consulta);
	
	if ( $filasafectadas != 0){
	
	    if ( $filasafectadas == 1){
	

	        $fila = mysql_fetch_assoc($consulta);

            $_SESSION["Nombre"] = $fila['Nombre'];	    
            
	        if ($fila["Rol"] == 'Jedi'){
	             header("location:./Jedi.php");
	        	    
	         }else if ($fila["Rol"] == 'Padawan'){
                        header ("location:padawan.php");
	        
             }else 
                header("location:ladooscuro.php");
	        
	    }else header("location:ladooscuro.php");
	
	}else header("location:ladooscuro.php");
	

	
?>