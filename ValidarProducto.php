<?php 
    require("ConexionBD.php"); 
	$Ref_Producto=$_POST["refe"];
	$Nombre_Producto=$_POST["nombre"];
    $Precio_Producto=$_POST["prec"];
	$Existencia_Producto=$_POST["exis"];
	
	$existe="select Ref_Producto from producto where Ref_Producto=$Ref_Producto";
	$busca=mysql_db_query("2Proyecto",$existe,$conectado);
	$resultado=mysql_num_rows($busca);
	
	if($resultado==0)
	{
	$insertar_registro2="insert into producto values('$Ref_Producto','$Nombre_Producto','$Precio_Producto','$Existencia_Producto');";
    $respuesta2=mysql_query($insertar_registro2,$conectado); 
	if($respuesta2)
	{
	echo"<script>alert('Se a Registrado satisfactoriamente.');window.location.href=\"AgregarProducto.php\"</script>"; 
	}
	 
	}
	else if($resultado==1)
	{
		echo"<script>alert('Ya existe un producto bajo esta referencia.');window.location.href=\"AgregarProducto.php\"</script>"; 
	}
	
	
	
 ?> 