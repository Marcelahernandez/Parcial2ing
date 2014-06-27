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
					<h2><a href="../arte/salir.php">( Salir )</a></h2>
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
							<li><a href='AgregarProveedor.php'>Modificar Proveedor</a></li>
                            <li><a href='ConsultarProveedor.php'>Consultar Proveedor</a></li>
						</ul>
					</li>
					<li><a href='#'>Facturacion</a>
						<ul>
							<li><a href='Factura.php'>Hacer Factura</a></li>
							<li><a href='VerFactura.php'>Ver Factura</a></li>
						</ul>
					</li>
				</ul>
			</nav>
            <section id='algo'>
           
						<table width="100%" cellspacing="10">
                        
                        <?
                     require("ConexionBD.php"); 
                     $consulta= "select Ref_Producto,Nombre_Producto from producto order by Ref_Producto asc";
                     $result= mysql_query($consulta);
                     ?>
                    <?
                     require("ConexionBD.php"); 
                     $consulta2= "select CC_Usuario,Nombre_Usuario from usuario order by CC_Usuario asc";
                     $result2= mysql_query($consulta2);
                     ?>                 
						
							<table width="900" cellspacing="10">
								<caption>Escoga la Compra que desea Modificar</caption>
                                </table>
                                <ul>
<?php
require("ConexionBD.php");
$ID_Compra = $_GET["id"];
$ssql = "select * from producto where Ref_Producto=".$ID_Producto;
$cliente_editar = mysql_query($ssql);
$fila = mysql_fetch_object($cliente_editar);

?>
<form action="update_producto_id2.php" method="post">
<input type="hidden" name="Ref_Producto" value="<?php echo $ID_Producto;?>">
	<table width="900" cellspacing="10">
								<caption></caption>
									
										
									</tr>
									
									<tr>
										<td>
											<label for='nomb'>Nombre: </label>
										</td>
										<td>
											<input type="text"  id="nomb" name="nombre"   value="<?php echo $fila->nombre;?>" required>
                            
                                            
                                             
										</td>
										
									<tr>
										<td>
											<label for='exi'>Existencia: </label>
										</td>
										<td>
											<input type='text' id='exi'  name="exis" placeholder='Ingrese Valor' value="<?php echo $fila->exis;?>" maxlength="15" size="30" required>
										</td>
									</tr>
                                    <tr>
										<td>
											<label for='pre'>Precio: </label>
										</td>
										<td>
											<input type='text' id='pre'  name="prec" placeholder='Ingrese Valor' value="<?php echo $fila->prec;?>" maxlength="15" size="30" required>
										</td>
									</tr>
									<td><input type='submit' value='enviar' id='btnSubmit'></td>
								</table>

</form>

<br>
<br>
<a href="ActualizacionCompras.php"><h4 align="center">Cancelar y seleccionar otra Pieza</h4></a>
</body>
</html>
<?php
mysql_close($conectado);
?>
 </ul>
						
			</section>
		  </section>
		</body>
</html>
