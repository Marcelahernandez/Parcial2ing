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
						<table  cellspacing="10">
							<caption>Ver Facturas</caption>
							<tr>
								<td>
									<label for='ref'>Numero Factura: </label>
								</td>
								<td>
									<input type="text" id='ref' name='refe' placeholder='Ingrese Referencia' size="20" maxlength="15" required>
								</td>
								<td>
									<input type='submit' value='Buscar' name="enviar" id='btnSubmit'>
								</td>
							</tr>
						</table>
					</form>
				</section>
			</article>
	</body>
</html>