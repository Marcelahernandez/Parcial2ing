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
					<?php
					require("ConexionBD.php");
					$ssql = "UPDATE proveedor set ";
					$ssql .="Nombre_Proveedor='" . $_POST["nombre"] . "', ";
					$ssql .="Apellido_Proveedor='" . $_POST["apellido"] . "', ";
					$ssql .="Direccion_Proveedor='" . $_POST["direccion"] . "' ";
					$ssql .="Telefono_Proveedor='" . $_POST["telefono"] . "' ";
					$ssql .="where Id_Proveedor=". $_POST["Id_Proveedor"];

					if(mysql_query($ssql)){
						echo "Proveedor actualizado con exito";
						}
						else
						{
							echo "Error";
						}
					?>
					<a href="ModificarProveedor.php"><h4 align="center">volver a seleccionar una Proveedor a modificar</h4>
				</section>  
			</article>
	</body>
</html>			