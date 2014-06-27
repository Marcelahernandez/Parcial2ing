<?php
	
	$link=mysql_connect("localhost","root",123456);
	mysql_select_db("2Proyecto",$link);
		
	$myusuario=mysql_query("select Id_Login from login where Id_Login='".htmlentities($_POST["id"])."'",$link);
	$nmyusuario=mysql_num_rows($myusuario);
	
	$myclave=mysql_query("select Id_Login,Clave_Login from login where Clave_Login='".md5(htmlentities($_POST["clave"]))."' and Id_Login='".htmlentities($_POST["id"])."'",$link);
	$nmyclave=mysql_num_rows($myclave);
	
	$mycargo=mysql_query("select Cargo_Login from login where Id_Login='".htmlentities($_POST["id"])."'",$link);
	$fila=mysql_fetch_row($mycargo);
		
	$sql=mysql_query("select Nombre_Login from login where Clave_Login='".md5(htmlentities($_POST["clave"]))."' and Id_Login='".htmlentities($_POST["id"])."'",$link);
	$name=mysql_result($sql,0,0);

	//$nocargo= mysql_fetch_row($mycargo);
	
	//echo $name;
	//$mycon=mysql_query($sql,$link);
	
	//echo $nocargo;
		
	if($nmyusuario==1)
	{
		if($nmyclave==1)
		{
			session_start();
			$_SESSION["autentica"]="SIP";
			$_SESSION["usuarioactual"]=$name;
			$_SESSION["numero"]=$fila[0];
			if($fila[0]==1)
			{
				
				echo "<script language='javascript'>window.location='LoginAdmin.php'</script>"; 
				
			}
			else if($fila[0]==2)
				{
				
					echo "<script language='javascript'>window.location='LoginPrincipal.php'</script>"; 
					
				}else if($fila[0]==3)
					{
						
						echo "<script language='javascript'>window.location='LoginAuxiliar.php'</script>"; 
					}
		}
		else
		{
			echo"<script>alert('La contrase\u00f1a del usuario no es correcta.');window.location.href=\"Index.php\"</script>";
		}
	}else
	{
		echo"<script>alert('El usuario no existe.');window.location.href=\"Index.php\"</script>";
	}
	
	mysql_close($link);
?>