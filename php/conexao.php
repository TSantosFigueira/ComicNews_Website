<?php

define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DBName", "comicsnews");

$link = mysqli_connect(HOST, USER, PASS) or die("Erro no banco de dados. Por favor, contate o administrador.");
mysqli_select_db($link, DBName) or die("Banco de dados não reconhecido. Por favor, contate o administrador.");

?>