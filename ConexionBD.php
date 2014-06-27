<?php 
 $conectado = mysql_connect ("localhost","root","123456"); 
 if (!$conectado) 
 {  echo ("NO SE PUDO CONECTAR AL SERVIDOR MySQL.<br>"); 
 } 
 if (!mysql_select_db ("2proyecto", $conectado)) 
 { 
 echo "Error al intentar conectar con la base de datos proyecto.<br>"; 
 exit(); 
 } 
?>