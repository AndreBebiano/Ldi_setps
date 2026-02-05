<?php
require_once "Classes.php";
$pessoa = new PessoaSimples(17);
$pessoa->aniversario();
echo "Nova idade: " . $pessoa->idade;
?>

<form action="step2.php">
    <button type="submit">Step 2</button>
</form>
