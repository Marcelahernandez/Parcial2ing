<?php 
 if($_POST['enviar']) 
 { 
 require("ConexionBD.php");
 $Id_Proveedor=$_POST['identificacion']; 
 $eliminar_registro="DELETE FROM proveedor where Id_Proveedor='".$Id_Proveedor."';"; 
 echo $eliminar_registro; 
 $respuesta=mysql_query($eliminar_registro,$conectado); 
 if($respuesta) 
 echo "<script>alert('satisfactoriamente.');window.location.href=\"EliminarProveedor.php\"</script>";  
 else 
 echo "<script>alert('No se a podido realizar la eliminacion 2.');window.location.href=\"EliminarProveedor.php\"</script>"; 
 }else {
	echo("Datos erroneos");
	} 
?> 