<html>

<?PHP
	 session_start();
	 
	 
	  if ( isset ($_SESSION["nombre"])){
		
	   $nombre = $_SESSION["nombre"];
	   
	   echo "HOLA SUPERVISOR ".$nombre."";
	   }
	   else{
		     session_destroy();
    
           header("location:login.php");
	   }
?>
</html>