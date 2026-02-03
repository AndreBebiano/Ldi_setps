<?php
class Pessoa {
    private string $nome;
    private int $idade;

    public function __construct(string $nome, int $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome(): string {
        return strtoupper($this->nome);
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function aniversario(): void {
        $this->idade++;
    }
}

$pessoa = new Pessoa("Bebiano", 17);
$pessoa->aniversario();

echo "Nome: " . $pessoa->getNome() . "<br>";
echo "Idade: " . $pessoa->getIdade();
?>
<form action="step3.php">
    <button type="submit">Step3</button>
</form>