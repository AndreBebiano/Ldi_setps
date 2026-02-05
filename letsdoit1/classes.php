<?php
class PessoaSimples {
    public int $idade;

    public function __construct(int $idade) {
        $this->idade = $idade;
    }

    public function aniversario(): void {
        $this->idade++;
    }
}
class PessoaComNome {
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
class PessoaCompleta {
    private string $nome;
    private int $idade;

    public function __construct(string $nome, int $idade) {
        $this->nome = $nome;
        $this->setIdade($idade);
    }

    public function getNome(): string {
        return strtoupper($this->nome);
    }

    public function setIdade(int $idade): void {
        $this->idade = $idade;
    }

    public function getIdade(): string {
        return $this->idade . " (" . $this->numeroPorExtenso($this->idade) . ")";
    }

    public function aniversario(): void {
        $this->idade++;
    }

    private function numeroPorExtenso(int $num): string {
        $unidades = ["", "um", "dois", "três", "quatro", "cinco", "seis", "sete", "oito", "nove"];
        $especiais = [
            10 => "dez", 11 => "onze", 12 => "doze", 13 => "treze",
            14 => "catorze", 15 => "quinze", 16 => "dezasseis",
            17 => "dezassete", 18 => "dezoito", 19 => "dezanove"
        ];
        $dezenas = ["", "", "vinte", "trinta", "quarenta", "cinquenta", "sessenta", "setenta", "oitenta", "noventa"];

        if ($num < 10) return $unidades[$num];
        if ($num <= 19) return $especiais[$num];

        $dezena = intdiv($num, 10);
        $unidade = $num % 10;

        if ($unidade === 0) return $dezenas[$dezena];

        return $dezenas[$dezena] . " e " . $unidades[$unidade];
    }
}
