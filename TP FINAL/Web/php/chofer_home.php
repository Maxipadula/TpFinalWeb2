<html>
	<head>
	</head>
	
	<body>
		
		<?PHP
	        session_start();
	
							
	        if ( isset ($_SESSION["id_usuario"])){
		
	          $nombre = $_SESSION["nombre"];
	   
	          echo "HOLA CHOFER ".$nombre."";
	        }
	        else{
		     session_destroy();
    
              header("location:login.php");
	        }
        ?> 
	
	<nav>
		
       <ul>
           <li><a href="./chofer_datos_viaje.php">DATOS DE VIAJE</a></li>
           <li><a href="./registrar_vc.php">REGISTRAR VALE DE COMBUSTIBLE</a></li>
           <li><a href="./login.php">SALIR</a></li>  

       </ul>
 
	</nav>
				
				
		
	</body>
</html>