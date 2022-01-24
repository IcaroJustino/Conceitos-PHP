<?php

define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'teste'
]);
//para ser case insensensitive coloque , true apos o array
//(boa pratica, geralmente não muito usada para que toda constante seja sempre em letra maiuscula)

print_r(BANCO_DE_DADOS);
