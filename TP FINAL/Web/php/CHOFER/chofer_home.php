<html>
	<head>
	</head>
	
	<body>
		
		<?PHP
	        session_start();
			
			include ("../rutas.php");
	
							
	        if ( isset ($_SESSION["nombre"])){
		
	          $nombre = $_SESSION["nombre"];
	   
	          echo "HOLA CHOFER ".$nombre."";
	        }
	        else{
		     session_destroy();
    
              header("location:".$login."");
	        }
        ?> 
	
	<?php include ("menu_chofer.php");?>
				
				
		
	</body>
</html>