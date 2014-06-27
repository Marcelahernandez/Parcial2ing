<?php 
 if($_POST['enviar']) 
 { 
 require("ConexionBD.php");
 $Ref_Producto=$_POST['identificacion']; 
 $eliminar_registro="DELETE FROM tienda where Ref_Producto='".$Ref_Producto."';"; 
 echo $eliminar_registro; 
 $respuesta=mysql_query($eliminar_registro,$conectado); 
 if($respuesta) 
 echo "<script>alert('satisfactoriamente.');window.location.href=\"EliminarTienda.php\"</script>";  
 else 
 echo "<script>alert('No se a podido realizar la eliminacion 2.');window.location.href=\"EliminarTienda.php\"</script>"; 
 }else {
	echo("Datos erroneos");
	} 
?> 

