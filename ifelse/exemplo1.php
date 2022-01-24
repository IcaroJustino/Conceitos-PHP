<?php

$idade = 12;
$idadecrianca = 12;
$idademaior = 18;
$idademelhor = 65;

if ($idade < $idadecrianca) {
    echo "criança";
} elseif ($idade < $idademaior) {
    echo "adolecente";
} elseif ($idade < $idademelhor) {
    echo "adulto";
} else {
    echo "idoso";
}

echo "<br>";

echo ($idade < $idademaior) ? "menor de idade" : "maior de idade";

// variavel ternaria (um if rapido com a saida de apenas duas possibilidades)
