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
					<form method='post' action='ValidarProducto.php'>
						<table width="100%" cellspacing="10">
							<caption>Registro de Producto</caption>
							<tr>
								<td>
									<label for='ref'>Referencia : </label>
								</td>
								<td>
									<input type="text" id='ref' name='refe' placeholder='Ingrese Referencia' size="20" maxlength="15" required>
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
									<label for='exi'>Existencia : </label>
								</td>
								<td>
									<input type='number' id='exi' name='exis' min='0' max='99999' required>
								</td>
								<td>
									<label for='pre'>Precio : </label>
								</td>
								<td>
									<input type='number' id='pre' name='prec' min='0' max='9999999' required>
								</td>
							</tr>
							<tr>
								<td>
									<input type='submit' value='Guardar Datos' name="enviar" id='btnSubmit'>
								</td>
							</tr>
						</table>
					</form>
				</section>
			</article>
	</body>
</html>