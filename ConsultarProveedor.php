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
						<table width="500" cellspacing='0' border='1'>
							<caption>Productos Registrados</caption>
                            <thead> 
								<th>Identidficacion</th> 
								<th>Nombre </th> 
								<th>Apellido</th> 
								<th>Direccion</th> 
								<th>Telefono</th> 
                            </thead> 
								<?php 
                                require("ConexionBD.php"); 
                                $consultar_registros="SELECT * FROM proveedor;"; 
                                $registros=mysql_db_query("2Proyecto",$consultar_registros,$conectado); 
                                $totalregistros=mysql_num_rows ($registros);
                                for ($contador=0; $contador<$totalregistros; $contador++) 
                                    { 
										$Id_Proveedor=mysql_result ($registros, $contador, "Id_Proveedor"); 
										$Nombre_Proveedor=mysql_result ($registros, $contador, "Nombre_Proveedor"); 
										$Apellido_Proveedor=mysql_result ($registros, $contador, "Apellido_Proveedor"); 
										$Direccion_Proveedor=mysql_result ($registros, $contador, "Direccion_Proveedor"); 
										$Telefono_Proveedor=mysql_result ($registros, $contador, "Telefono_Proveedor");
										
										   echo ("<tr><td>".$Id_Proveedor."</td>"); 
										   echo ("<td>".$Nombre_Proveedor."</td>"); 
										   echo ("<td>".$Apellido_Proveedor."</td>"); 
										   echo ("<td>".$Direccion_Proveedor."</td>"); 
										   echo ("<td>".$Telefono_Proveedor."</td>");
                                        
                                    } 
                                 ?> 
                        </table>
					</center>
                </section>
			</article>
	</body>
</html>