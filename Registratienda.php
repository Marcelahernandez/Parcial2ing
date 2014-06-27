<?php 
    require("ConexionBD.php"); 
	$Id_Tienda=$_POST["iden"];
	$Nombre_Tienda=$_POST["nombre"];
    $Direccion_Tienda=$_POST["dire"];
	$Telefono_Tienda=$_POST["apel"];
	
	$existe="select Id_Tienda from tienda where Id_Tienda=$Id_Tienda";
	$busca=mysql_db_query("2Proyecto",$existe,$conectado);
	$resultado=mysql_num_rows($busca);
	
	if($resultado==0)
	{
	$insertar_registro2="insert into tienda values('$Id_Tienda','$Nombre_Tienda','$Direccion_Tienda','$Telefono_Tienda');";
    $respuesta2=mysql_query($insertar_registro2,$conectado); 
	if($respuesta2)
	{
	echo"<script>alert('Se a Registrado satisfactoriamente.');window.location.href=\"AgregarTienda.php\"</script>"; 
	}
	 
	}
	else if($resultado==1)
	{
		echo"<script>alert('Esta tienda ya esta registrada.');window.location.href=\"AgregarTienda.php\"</script>"; 
	}
	
	
	
 ?> 