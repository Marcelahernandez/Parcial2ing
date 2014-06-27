<?php include("seguridad.php"); ?>
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
				
				<div id='mensaje'>
					<hgroup>
					<h1>Bienvenido!</h1>
					<h2><?php echo $_SESSION["usuarioactual"] ?> </h2>
					<h2><a href="salir.php">( Salir )</a></h2>
					</hgroup>
				</div>
				
			</div>	
		</header>
		<div id='ima'>
		</div>
			<article id='contenedor'>
			<?php include 'Extra/Menus.php'; ?>
				<section id='algo'>
					<form method='post' action='ValidarTienda.php'>
						<table width="100%" cellspacing="10">
							<caption>Agregar Tienda</caption>
							<tr>
								<td>
									<label for='ide'>Identificacion de la Tienda : </label>
								</td>
								<td>
									<input type="text" id='ide' name='iden' placeholder='Ingrese Identificacion' size="20" maxlength="15" required>
								</td>
								<td>
									<label for='nomb'>Nombre : </label>
								</td>
								<td>
									<input type="text" id='nomb' name='nombre' placeholder='Ingrese Nombre' size="20" maxlength="15" required>
								</td>
							</tr>
							<tr>
								<td>
									<label for='dir'>Direccion : </label>
								</td>
								<td>
									<input type='text' id='dir' name='dire' placeholder='Ingrese Direccion' size="20" maxlength="15" required>
								</td>
                                <td>
									<label for='tel'>Telefono : </label>
								</td>
								<td>
									<input type='text' id='tel' name='tele' placeholder='Ingrese Telefono' size="20" maxlength="15" required>
								</td>
							</tr>
							<tr>
								<td>
									<input type='submit' value='Guardar Datos' id='btnSubmit'>
								</td>
							</tr>
						</table>
					</form>
				</section>
			</article>
	</body>
</html>