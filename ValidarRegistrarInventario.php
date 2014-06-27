<?php 
    require("ConexionBD.php"); 
	$Ref_Producto=$_POST["identificacion1"];
	$Nombre_Producto=$_POST["identificacion2"];
    $Existencia_Producto=$_POST["exis"];
	
	$existe="select Tienda_Id_Tienda from producto_tienda where Tienda_Id_Tienda=$Ref_Producto";
	$busca=mysql_db_query("2Proyecto",$existe,$conectado);
	$resultado=mysql_num_rows($busca);
	
	if($resultado==0)
	{
	$insertar_registro2="insert into producto_tienda values('$Ref_Producto','$Nombre_Producto','$Existencia_Producto');";
    $respuesta2=mysql_query($insertar_registro2,$conectado); 
	if($respuesta2)
	{
	echo"<script>alert('Se a Registrado satisfactoriamente.');window.location.href=\"AgregarProducto.php\"</script>"; 
	}
	 
	}
	else if($resultado==1)
	{
		echo"<script>alert('Este Producto ya esta registrado.');window.location.href=\"AgregarProducto.php\"</script>"; 
	}
	
	
	
 ?> 