<?php

session_start();

$nome = $_POST["nome"];

$_SESSION["nome"] = $nome;

header("Location: exer05.php");

?>