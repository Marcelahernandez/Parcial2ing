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
				<table width="100%" cellspacing="10">
				<caption>Escoga El Proveedor que desea Actualizar</caption>
				</table>
				<ul>
					<?php
					 include("ConexionBD.php");
					 $ssql = "select Id_Proveedor, Nombre_Proveedor from proveedor";
					 $rs_clientes=mysql_query($ssql);
					 while($fila = mysql_fetch_array($rs_clientes)){
					 echo'[<a href="update_proveedor_id.php?id=' . $fila["Id_Proveedor"]. '">Editar </a>] ';
					 echo $fila["Nombre_Proveedor"] . "</br>";
					}
					mysql_close($conectado);	
					?>
				</section>
			</article>
	</body>
</html>