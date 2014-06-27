<?php include("seguridad.php"); ?>
<html>
	<head>
		<?php include 'Extra/referencias.php' ?>
	<script>
		function validar()
		{
		<?php
		require("ConexionBD.php");
		$Ref=$_POST["referencia"];
		$cant=$_POST["cantidad"];
		
		$consulta="select * from Producto where $Ref=Ref_Producto";
		$buscar=mysql_db_query("2Proyecto",$consulta,$conectado);
		$resultado=mysql_num_rows($buscar);
		if($resultado==1)
		{
			$consulta2="select Existencia_Producto from Producto where $Ref=Ref_Producto";
			$buscar2=mysql_db_query("2Proyecto",$consulta2,$conectado);
			$resultado2=mysql_fetch_row($buscar2);
			if($resultado2[0]<$cant)
			{
				echo "<script>alert('No hay sufuciente cantidad de este producto');</script>";
			}
			else
			{
			$consulta3="select Nombre_Producto from producto where $Ref=Ref_Producto";
			$buscar3=mysql_db_query("2Proyecto",$consulta3,$conectado);
			$nombre=mysql_result($buscar3,0,0);
			$consulta4="select Precio_Producto from producto where $Ref=Ref_Producto";
			$buscar4=mysql_db_query("2Proyecto",$consulta4,$conectado);
			$precio=mysql_fetch_row($buscar4);
			
			$inserta="insert into producto_factura values ('$Ref','$NoFact','$cant');";
			$respuesta2=mysql_query($inserta,$conectado); 
			}
			$total=$cant*$precio[0];
			date_default_timezone_set('UTC-5');
			$fecha=date("Y-m-d H:i:s");   
			$resultado = Array("$Ref","$nombre","$cant","$precio[0]","$total");
			$inserta= mysql_query("INSERT INTO facturafa VALUES (NULL,'".$fecha."','".$Ref."','".$nombre."','".$cant."','".$total."','".$total."')");
			$valido=1;
		}
		else if($resultado==0)
		{
			$valido=0;
			echo "<script>alert('Este Producto no esta Registrado');window.location.href=\"ConsultarProducto.php\</script>";
		}
		
	?>
	</script>
	
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
					<h2> <?php echo $_SESSION["usuarioactual"] ?> </h2>
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
					<form method='post'>
					<table>
						<caption>Facturacion</caption>
						<tr>
							<td>
								<label for='refe'>Referencia : </label>
							</td>
							<td>
							<input type='text' id='refe' name='referencia' size="20" maxlength='15' placeholder='Ingrese Referencia' required>
							</td>
							<td>
								<label for='can'>Cantidad : </label>							
							</td>
							<td>
								<input type='number' id='can' name='cantidad' min='0' max='999' required>
							</td>
							<td>
								<input type='Submit' value='Agregar Producto' id='btnSubmit' name='btnAgregar' onclick="enable()">
							</td>
						</tr>
					</table>
					<table cellspacing="0" cellpadding='10' id='factura' border='1'>  
							<thead>
								<th>Referencia</th>
								<th>Descripcion</th>
								<th>Cantidad</th>
								<th>Precio Unidad</th>
								<th>Total</th>
							</thead>
							<tbody>
								<?php
									if($valido==1)
									{
										echo "<tr>";
										foreach($resultado as $valor)
										{
											echo "<td>".$valor."</td>";
										}
										echo "</tr>";
									}
									else
									{
										echo "Producto no registrado";
									}
								
								?>

								<tr>
									<td colspan="3"></td>
									<td>Total</td>
									<td><?php echo $vtotal=$vtotal+$total; ?></td>
								</tr>									
							</tbody>
							
						</table>
					</form>
					<div id='zona'>
						<input type='Submit' value='Generar Factura' id='btnSubmit' onclick="location.href='verDatos.php'" target="_blank">
						<input type='Submit' value='Nueva Factura' id='btnSubmit' onclick="location.href='Factura.php'"  >
					</div>
				</section>
			</article>
	</body>
</html>
