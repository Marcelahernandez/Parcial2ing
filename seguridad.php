<?php
	@session_start();
	if($_SESSION["autentica"]!=SIP)
	{
		//echo "<script //language='javascript'>window.location='Index.php'</script>";
		header("Location: Index.php");

		exit();
	}
?>