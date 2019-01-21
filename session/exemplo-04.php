<?php

session_id('7mq7did0pfi8g4fo7sk8t78405');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>