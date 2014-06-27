 <?php
	@session_start();
	if($_SESSION["numero"]==1)
	{
		echo "<nav>
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
							<li><a href='ConsultarFactura.php'>Ver Factura</a></li>
						</ul>
					</li>
					<li><a href='#'>Tiendas</a>
						<ul>
							<li><a href='AgregarTienda.php'>Agregar Tienda</a></li>
							<li><a href='EliminarTienda.php'>Eliminar Tienda</a></li>
							<li><a href='VerTienda.php'>Ver Tienda</a></li>
						</ul>
					</li>
				</ul>
			</nav>";

		
	}else if($_SESSION["numero"]==2)
	{
	echo "<nav>
				<ul class='Navegacion'>
					<li><a href='#'>Productos</a>
						<ul>
							<li><a href='ModificarProducto.php'>Modificar Productos</a></li>
                            <li><a href='ConsultarProducto.php'>Consultar Productos</a></li>
						</ul>
					</li>
					<li><a href='#'>Facturacion</a>
						<ul>
							<li><a href='Factura.php'>Hacer Factura</a></li>
							<li><a href='ConsultarFactura.php'>Ver Factura</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		";
	
	}else if($_SESSION["numero"]==3)
	{
	echo "<nav>
				<ul class='Navegacion'>
					<li><a href='#'>Facturacion</a>
						<ul>
							<li><a href='Factura.php'>Hacer Factura</a></li>
							<li><a href='ConsultarFactura.php'>Ver Factura</a></li>
						</ul>
					</li>
				</ul>
			</nav>";
	}
?> 

			