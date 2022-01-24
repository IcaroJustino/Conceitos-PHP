<?php

//switch cases

$diaDaSemana = date("1");
//echo $diaDaSemana;
// switch eu sei quais são as opções que poderão aparecer
switch ($diaDaSemana) {
    case '1':
        echo "segunda";
        break;
    case '2':
        echo "terça";
        break;
    case '3':
        echo "quarta";
        break;
    case '4':
        echo "quinta";
        break;
    case '5':
        echo "sexta";
        break;
    case '6':
        echo "sabado";
        break;
    case '0':
        echo "domingo";
        break;
    default:
        echo "data invalida";
        break;
}
