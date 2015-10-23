<html>
	<head>
	</head>
	
	<body style="background: black">
		<IMG SRC="nada.jpg">
		<LINK REL="Stylesheet" HREF="login.css" TYPE="text/css">
		<H1>
		<IMG style="float: left" SRC="mapaa.jpg">  <!--el float es para que la imagen este a la izquierda del formulario-->
		</H1>
		<H4>
		<form class='contacto' method="post" action="Validar.php">
			<div id="contacto">
				<div><label>ROL
					<select name="OS">
					   <option value=""></option> 
					   <option value="1">Chofer</option> 
					   <option value="2">Administrador</option> 
					   <option value="3">Supervisor</option>
				
					</select>
					</label>
				</div>
				</br>
				
				<div><label>LOGIN
					<input type="text" name="usuario">
					</label>
				</div>
				
				</br>
				
				<div><label>PASSWORD
					<input type="password" name="clave">
					</label>
				</div>
				</br>
				
				<input type="submit">
				</h4>
			</div>
		</form>
		<H2>
		<IMG style="float: right" SRC="Rutas.jpg">  <!--el float es para que la imagen este a la derecha del formulario-->
		</H2>
	</body>
</html>
			