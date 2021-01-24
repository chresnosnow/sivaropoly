<?php
echo 'Estado de la Conexión:  ';
$enlace =  mysql_connect('localhost', 'root', '', 'jugadores');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysql_close($enlace);
?>