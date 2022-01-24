<?php

//sempre tente colocar variaveis auto explicativas
$nome = "Hcode";
$site = 'www.hcode.com';
$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
//////////////////////////////////////////////////

//variaveis compostas
$frutas = array("abacaxi","laranja","manga");

//echo $frutas[2];

$nascimento = new DateTime();
//var_dump($nascimento);

//////////////////////////////////////////////////


//tipos especificos

$arquivo = fopen("exemplo3.php", "r");
//var_dump($arquivo);

$nulo = null;
$vazio = "";
var_dump($nulo);
var_dump($vazio);
