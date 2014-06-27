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
				</ul>
			</nav>
				<section id='algo'>
                  <?
 include("ConexionBD.php"); 
 $consulta= "select Id_Tienda,Nombre_Tienda from Tienda order by Nombre_Tienda asc";
 $result= mysql_query($consulta);
?>
                <?
 include("ConexionBD.php"); 
 $consulta1= "select Ref_Producto,Nombre_Producto from producto order by Nombre_Producto asc";
 $result1= mysql_query($consulta1);
?>
					<form method='post' action='ValidarRegistrarInventario.php'>
						<table width="100%" cellspacing="10">
							<caption>Registro de Producto</caption>
							<tr>
								<td>
									Producto <select name="identificacion1">
                        <option value=""> seleccionar </option>
                        <?
                          while ($fila=mysql_fetch_row($result1)){
	                      echo"<option value='".$fila['0']."'>".$fila['1']."</option>";
	                      }
                         ?>
								</td>
								<td>
									Tienda <select name="identificacion2">
                        <option value=""> seleccionar </option>
                        <?
                          while ($fila=mysql_fetch_row($result)){
	                      echo"<option value='".$fila['0']."'>".$fila['1']."</option>";
	                      }
                         ?>
								</td>
							</tr>
							<tr>
								<td>
									<label for='exi'>Cantidad : </label>
								</td>
								<td>
									<input type='number' id='exi' name='exis' min='0' max='99999' required>
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