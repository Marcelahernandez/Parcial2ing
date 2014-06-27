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
					<h2>Administrador : <?php echo $_SESSION["usuarioactual"] ?> </h2>
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
						<table width="100%" cellspacing="10">
                        <caption></caption>
                        </table>
						<?php
						require("ConexionBD.php");
						$ssql = "UPDATE producto set ";
						$ssql .="Nombre_Producto='" . $_POST["nombre"] . "', ";
						$ssql .="Precio_Producto='" . $_POST["prec"] . "', ";
						$ssql .="Existencia_Producto='" . $_POST["exis"] . "' ";
						$ssql .="where Ref_Producto=". $_POST["Ref_Producto"];

						if(mysql_query($ssql)){
							echo "Producto actualizada con exito";
							}
							else{
								
								echo "Error";
								}
								
						?>
						<a href="ModificarProducto.php"><h4 align="center">volver a seleccionar una Producto a modificar</h4>
                                