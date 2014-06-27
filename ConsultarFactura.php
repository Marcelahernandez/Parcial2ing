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
							<caption>Facturas Registradas</caption>
                                <thead> 
									<th>No. Factura</th> 
									<th>Fecha </th> 
									<th>Referencia Producto</th> 
									<th>Nombre Producto</th> 
									<th>Cantidad</th>
									<th>Costo</th>
									<th>Total</th>
                                </thead> 
								<?php 
                                require("ConexionBD.php"); 
                                $consultar_registros="SELECT * FROM facturafa;"; 
                                $registros=mysql_db_query("2proyecto",$consultar_registros,$conectado); 
                                $totalregistros=mysql_num_rows ($registros); 
                                for ($contador=0; $contador<$totalregistros; $contador++) 
                                    { 
										$No_Facturafa=mysql_result ($registros, $contador, "No_Facturafa"); 
										$fecha=mysql_result ($registros, $contador, "fecha"); 
										$Ref_Producto=mysql_result ($registros, $contador, "Ref_Producto"); 
										$Producto=mysql_result ($registros, $contador, "Producto"); 
										$Cantidad=mysql_result ($registros, $contador, "Cantidad"); 
										$costo=mysql_result ($registros, $contador, "costo"); 
										$total=mysql_result ($registros, $contador, "total"); 
                                    
										echo ("<tr><td>".$No_Facturafa."</td>"); 
										echo ("<td>".$fecha."</td>"); 
										echo ("<td>".$Ref_Producto."</td>"); 
										echo ("<td>".$Producto."</td>"); 
										echo ("<td>".$Cantidad."</td>");
										echo ("<td>".$costo."</td>");
										echo ("<td>".$total."</td>");
                                        
                                      } 
                                 ?> 
                        </table> 
					</center>
                </section>
			</article>
	</body>
</html>