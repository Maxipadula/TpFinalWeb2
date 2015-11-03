<html>
	<head>
	</head>
	
	<body>
		
		<?PHP
	        session_start();
			
			include ("../rutas.php");
	
							
	        if ( isset ($_SESSION["id_usuario"])){
		
	          $nombre = $_SESSION["nombre"];
	   
	          echo "HOLA CHOFER ".$nombre."";
	        }
	        else{
		     session_destroy();
    
              header("location:".$login."");
	        }
        ?> 
	
	<nav>
		
       <ul>
           <li><a href="./<?php echo $registrar_vc?>">REGISTRAR VALE DE COMBUSTIBLE</a></li>
           <li><a href="./<?php echo $chofer_registro_viaje?>">CREAR REGISTRO DE VIAJE</a></li>
           <li><a href="../<?php echo $login?>">SALIR</a></li>  

       </ul>
 
	</nav>
				
				
		
	</body>
</html>