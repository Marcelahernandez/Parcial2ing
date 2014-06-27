<?php 
    require("ConexionBD.php"); 
	$Ref_Producto=$_POST["iden"];
	$Nombre_Producto=$_POST["nombre"];
    $Precio_Producto=$_POST["dire"];
	$Existencia_Producto=$_POST["tele"];
	
	$existe="select Id_Tienda from tienda where Id_Tienda=$Ref_Producto";
	$busca=mysql_db_query("2Proyecto",$existe,$conectado);
	$resultado=mysql_num_rows($busca);
	
	if($resultado==0)
	{
	$insertar_registro2="insert into tienda values('$Ref_Producto','$Nombre_Producto','$Precio_Producto','$Existencia_Producto');";
    $respuesta2=mysql_query($insertar_registro2,$conectado); 
	if($respuesta2)
	{
	echo"<script>alert('Se a Registrado satisfactoriamente.');window.location.href=\"AgregarProducto.php\"</script>"; 
	}
	 
	}
	else if($resultado==1)
	{
		echo"<script>alert('Ya existe un tienda bajo esta identificacion.');window.location.href=\"AgregarProducto.php\"</script>"; 
	}
	
	
	
 ?> 