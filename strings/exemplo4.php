<?php

$frase = "a repetição é a mãe da retenção";
$palavra = "mãe";

$q = strpos($frase, $palavra);  //encontrar uma palavra especifica em uma string
var_dump($q);
echo "<br/>";
$texto = substr($frase, 0, $q);  // passar por uma string de um ponto ate outro especifico

var_dump($texto);
echo "<br/>";
$text2 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($text2);
