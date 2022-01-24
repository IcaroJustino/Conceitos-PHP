<?php

$nome = "glaucio";

function teste()
{
    global $nome;
    echo $nome;
}

function teste2()
{
    $nome = "joão";
    echo $nome;
}

teste();
teste2();
