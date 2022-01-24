<?php

session_id('1htascjngmcbjhv4mdbcd4k04k');

require_once("config.php");

session_regenerate_id();

echo session_id();
echo "<br>";
var_dump($_SESSION);
