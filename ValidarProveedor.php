<?php 
    require("ConexionBD.php"); 
	$Id_Proveedor=$_POST["iden"];
	$Nombre_Proveedor=$_POST["nombre"];
    $Apellido_Proveedor=$_POST["apel"];
	$Direccion_Proveedor=$_POST["dire"];
	$Telefono_Proveedor=$_POST["tele"];
	
	$existe="select Id_Proveedor from proveedor where Id_Proveedor=$Id_Proveedor";
	$busca=mysql_db_query("2Proyecto",$existe,$conectado);
	$resultado=mysql_num_rows($busca);
	
	if($resultado==0)
	{
	$insertar_registro2="insert into proveedor values('$Id_Proveedor','$Nombre_Proveedor','$Apellido_Proveedor','$Direccion_Proveedor','$Telefono_Proveedor');";
    $respuesta2=mysql_query($insertar_registro2,$conectado); 
	if($respuesta2)
	{
	echo"<script>alert('Se a Registrado satisfactoriamente.');window.location.href=\"AgregarProveedor.php\"</script>"; 
	}
	 
	}
	else if($resultado==1)
	{
		echo"<script>alert('Este Producto ya esta registrado.');window.location.href=\"AgregarProveedor.php\"</script>"; 
	}
 ?> 