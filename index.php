<?php
class Pessoa {
    public function __construct(int $idade) {
        $this->idade = $idade;
    }
    public function aniversario() {
        $this->idade++;
    }
}
$pessoa = new Pessoa(17);
$pessoa->aniversario();
echo "Nova idade: " . $pessoa->idade;public int $idade;
    
?>

<form action="step2.php">
    <button type="submit">Setp2</button>
</form>
