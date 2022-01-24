<?php

use PHP_CodeSniffer\Config;

require_once("config.php");
//sempre que for utilizar uma sessão precisa utilizar session start
//ideal para servidores compartilhados
echo $_SESSION["nome"];

session_destroy();   //ele apaga toda variavel de sessão e remove o usuario da pagina
