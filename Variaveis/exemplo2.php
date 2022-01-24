<?php

$nomeUser = "pedro";
$sobrenome = "RANGEL";
$nomeCompleto = $nomeUser . " " .  $sobrenome;
echo $nomeCompleto;
exit;
echo "<br/>";

unset($nomeUser);
if (isset($nomeUser)) {
    echo $nomeUser;
}
// teste comentario de uma linha
/* teste comentario de bloco*/
// usa . para concatenar valores pois a conversão de dados é automatica
