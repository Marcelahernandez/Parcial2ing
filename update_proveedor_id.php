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
							<?
								require("ConexionBD.php"); 
								$consulta= "select Id_Proveedor,Nombre_Proveedor from proveedor order by Id_Proveedor asc";
								$result= mysql_query($consulta);
							?>
							<?
								require("ConexionBD.php"); 
								$consulta2= "select CC_Usuario,Nombre_Usuario from usuario order by CC_Usuario asc";
								$result2= mysql_query($consulta2);
							?>                 
							<table width="900" cellspacing="10">
									<caption> Actualizacion de Productos</caption>
									</table>
									<ul>
							<?php
							require("ConexionBD.php");
							$Id_Proveedor = $_GET["id"];
							$ssql = "select * from proveedor where Id_Proveedor=".$Id_Proveedor;
							$cliente_editar = mysql_query($ssql);
							$fila = mysql_fetch_object($cliente_editar);

							?>
							<form action="update_proveedor_id2.php" method="post">
							<input type="hidden" name="Id_Proveedor" value="<?php echo $Id_Proveedor;?>">
								<table width="900" cellspacing="10">
									<caption></caption>
										<tr>
											<td>
												<label for='nomb'>Nombre: </label>
											</td>
											<td>
												<input type="text"  id="nomb" name="nombre"   value="<?php echo $fila->nombre;?>" required>
											</td>
										</tr>
										<tr>
											<td>
												<label for='ape'>Apellido :</label>
											</td>
											<td>
												<input type='text' id='ape' name='apellido' value='<?php echo $fila->apellido;?>' required>
											</td>
										</tr>
										<tr>
											<td>
												<label for='dir'>Direccion :</label>
											</td>
											<td>
												<input type='text' id='dir' name='direccion' value='<?php echo $fila->direccion;?>' required>
											</td>
										</tr>
										<tr>
											<td>
												<label for='tel'>Telefono :</label>
											</td>
											<td>
												<input type='text' id='tel' name='telefono' value='<?php echo $fila->telefono;?>' required>
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
			</article>
		</body>
</html>
