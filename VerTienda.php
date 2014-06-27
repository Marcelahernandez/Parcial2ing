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
					<center>
						<table width="800px" border="1" cellspacing='0'>
							<caption>Tiendas Registradas</caption>
                                <thead> 
									<th>Referencia</th> 
									<th>Nombre </th> 
									<th>Precio</th> 
									<th>Existencia </th> 
                                </thead> 
								<?php 
                                require("ConexionBD.php"); 
                                $consultar_registros="SELECT * FROM tienda;"; 
                                $registros=mysql_db_query("2proyecto",$consultar_registros,$conectado); 
                                $totalregistros=mysql_num_rows ($registros); 
                                for ($contador=0; $contador<$totalregistros; $contador++) 
                                    { 
										$Id_Tienda=mysql_result ($registros, $contador, "Id_Tienda"); 
										$Nombre_Tienda=mysql_result ($registros, $contador, "Nombre_Tienda"); 
										$Direccion_Tienda=mysql_result ($registros, $contador, "Direccion_Tienda"); 
										$Telefono_Tienda=mysql_result ($registros, $contador, "Telefono_Tienda"); 
									
										   echo ("<tr><td>".$Id_Tienda."</td>"); 
										   echo ("<td>".$Nombre_Tienda."</td>"); 
										   echo ("<td>".$Direccion_Tienda."</td>"); 
										   echo ("<td>".$Telefono_Tienda."</td>"); 
											
                                     } 
                                 ?> 
                        </table> 
					</center>
                </section>
			</article>
	</body>
</html>