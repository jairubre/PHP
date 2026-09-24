<?php
$var1=100;
$var2=100;
$var3=&$var2; // &hace que apunte  a la direccion de memoria

echo "$var1,$var2,$var3 <br>";

$var2=200;

echo "$var1,$var2,$var3"; // Como esta compiada la direccion de memoria tmb cambia el valor de var3 porque guarda la memoria y no el contenido



?>