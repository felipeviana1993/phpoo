<?php

require_once "Pessoa.php";

$pessoa1 = new Pessoa("Felipe", 23);
$pessoa2 = new Pessoa("Rogeria", 26);

echo $pessoa1->correr(50);

require_once "Produto.php";
require_once "Tenis.php";

$produto1 = new Tenis();