<?php
require_once "Classes.php";
$pessoa = new PessoaCompleta("Bebiano", 17);
echo "Nome: " . $pessoa->getNome() . "<br>";
echo "Idade: " . $pessoa->getIdade();
