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
			<nav>
				<ul class='Navegacion'>
					<li><a href='#'>Productos</a>
						<ul>
							<li><a href='AgregarProducto.php'>Agregar Productos</a></li>
							<li><a href='EliminarProducto.php'>Eliminar Productos</a></li>
							<li><a href='ModificarProducto.php'>Modificar Productos</a></li>
                            <li><a href='ConsultarProducto.php'>Consultar Productos</a></li>
						</ul>
					</li>
					<li><a href='#'>Proveedores</a>
						<ul>
							<li><a href='AgregarProveedor.php'>Agregar Proveedor</a></li>
							<li><a href='EliminarProveedor.php'>Eliminar Proveedor</a></li>
							<li><a href='ModificarProveedor.php'>Modificar Proveedor</a></li>
                            <li><a href='ConsultarProveedor.php'>Consultar Proveedor</a></li>
						</ul>
					</li>
					<li><a href='#'>Facturacion</a>
						<ul>
							<li><a href='Factura.php'>Hacer Factura</a></li>
							<li><a href='VerFactura.php'>Ver Factura</a></li>
						</ul>
					</li>
                    <li><a href='#'>Tiendas</a>
						<ul>
							<li><a href='AgregarTienda.php'>Agregar Tienda</a></li>
							<li><a href='EliminarTienda.php'>Eliminar Tienda</a></li>
							<li><a href='VerTienda.php'>Ver Tienda</a></li>
						</ul>
					</li>
                    <li><a href='#'>Inventario</a>
						<ul>
							<li><a href='ConsultarInventario.php'>Consultar inventario</a></li>
							<li><a href='RegistrarInventario.php'>Registrar inventario</a></li>
						</ul>
					</li>

					</li>
				</ul>
			</nav>
				<section id='algo'>
                
						<table width="100%" cellspacing="10">
                        <caption>Inventario</caption>
                                <tr><th colspan="5"> </th> </tr>
                                <tr> 
                                <th>Tienda</th> 
                                <th>Producto </th> 
                                <th>Cantidad</th> 
                                
                               
                                </tr> 
								<?php 
                                require("ConexionBD.php"); 
                                $consultar_registros="SELECT * FROM producto_tienda;"; 
                                $registros=mysql_db_query("2proyecto",$consultar_registros,$conectado); 
                                $totalregistros=mysql_num_rows ($registros); 
                                /* Se obtienen los datos almacenados en el elemento del cursor al que apunta la variable 
                                de control del bucle. */ 
                                for ($contador=0; $contador<$totalregistros; $contador++) 
                                    { 
                                      $Ref_Producto=mysql_result ($registros, $contador, "Tienda_Id_Tienda"); 
                                       $Nombre_Producto=mysql_result ($registros, $contador, "Producto_Ref_Producto"); 
                                       $Precio_Producto=mysql_result ($registros, $contador, "Cantidad"); 
 
									   echo ("<tr><td>".$Ref_Producto."</td>"); 
                                       echo ("<td>".$Nombre_Producto."</td>"); 
                                       echo ("<td>".$Precio_Producto."</td>"); 
                                       
                                        
                                      } 
                                 ?> 
                                </table>
							    </table>
                
                </section>
			</article>
	</body>
</html>