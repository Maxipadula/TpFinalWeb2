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
           <li><a href="./registrar_vc.php">REGISTRAR VALE DE COMBUSTIBLE</a></li>
           <li><a href="./chofer_registro.php">CREAR REGISTRO DE VIAJE</a></li>
           <li><a href="./home.php">SALIR</a></li>  

       </ul>
 
	</nav>
				
				
		
	</body>
</html>