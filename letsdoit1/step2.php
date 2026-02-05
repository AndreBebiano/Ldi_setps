<?php
require_once "Classes.php";
$pessoa = new PessoaComNome("Bebiano", 17);
$pessoa->aniversario();
echo "Nome: " . $pessoa->getNome() . "<br>";
echo "Idade: " . $pessoa->getIdade();
?>
<form action="step3.php">
    <button type="submit">Step 3</button>
</form>
