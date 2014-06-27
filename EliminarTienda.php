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
            <?
			 include("ConexionBD.php"); 
			 $consulta= "select Id_Tienda,Nombre_Tienda from tienda order by Nombre_Tienda asc";
			 $result= mysql_query($consulta);
			?>
				<section id='algo'>
					<form method='post' action='ValidarEliminarTienda.php'>
						<table width="500px" cellspacing="10">
							<caption>Eliminar Productos</caption>
							<tr>
								<td>Seleccione el producto a eliminar :</td>
								<td>
									<select name="identificacion">
									<option value="">Seleccionar... </option>
									<?
									  while ($fila=mysql_fetch_row($result)){
									  echo"<option value='".$fila['0']."'>".$fila['1']."</option>";
									  }
									 ?>
									 </select>
								</td>
							</tr>
							<tr>
								<td><input type="submit" name="enviar" value="Eliminar registro" id='btnSubmit'></td>
								<!--<td><input type="reset" name="limpiar" value="Reestablecer" id='btnSubmit'></td>-->
							</tr>
                        </table>
					</form>
                </section>
			</article>
	</body>
</html>
                        
                        