<?php
class Pessoa {
    public int $idade;

    public function __construct(int $idade) {
        $this->idade = $idade;
    }

    public function aniversario(): void {
        $this->idade++;
    }
}

$pessoa = new Pessoa(17);
$pessoa->aniversario();

echo "Nova idade: " . $pessoa->idade;
?>

<form action="step2.php">
    <button type="submit">Step 2</button>
</form>
