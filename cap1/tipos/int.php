<div class="titulo">Tipo Inteiro</div>

<?php

echo 11;
echo "<br>";
//o var_dump serve para mostrar detalhes como tipo de variaveis, caracteristicas, o que usa...
var_dump(11);
echo "<br>";

//VARIAVEL GLOBAL QUE MOSTRA QUAL O TIPO INTEIRO MÁXIMO SUPORTADO 
echo PHP_INT_MAX, "<br>";
echo PHP_INT_MIN, "<br>";
//tem como reprentar os numeros de base octal representado com o 0 na frente na base decimal
echo 015, "<br>";
echo 0b1110011, "<br>"; //representação na base binaria com (0b) na frente
echo 0x15f83718a133e, "<br>"; //representação na base hexadecimal começa com 0x na frente 