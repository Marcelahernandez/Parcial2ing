<!DOCTYPE html>
<?php
include("ConexionBD.php");
?>
<html>
	<head>
		<?php include 'Extra/referencias.php' ?>
	</head>
	<body>
		<header>
			<div id='saludo'>
				<div id='nombre'>
					<a href='Index.php'>NVCH S.A</a>
				</div>
				<div id='inicio'>
					<form method='POST' action='control.php'>
						<label for='code'>Usuario : <input type='text' id='code' name='id' placeholder='Ingrese Identificacion' size="20" autocomplete="off" required></label>
						<label for='psw'>Contraseña :<input type='password' id='psw' name='clave' placeholder='Ingrese Contraseña' required> </label> 
						<input type='submit' value='Iniciar Sesion' id='btnSubmit'>
					</form>
				</div>
			</div>	
		</header>
		<div id='ima'>
		</div>
	</body>
</html>