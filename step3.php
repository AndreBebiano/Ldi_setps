<?php
class Pessoa {
    private string $idade;

    public function __construct(int $idade) {
        $this->setIdade($idade);
    }
    public function setIdade(int $idade): void {
        $this->idade = $idade . " (" . $this->numeroPorExtenso($idade) . ")";
    }
    public function getIdade(): string {
        return $this->idade;
    }
    private function numeroPorExtenso(int $num): string {
        $unidades = [
            "", "um", "dois", "três", "quatro", "cinco",
            "seis", "sete", "oito", "nove"
        ];

        $especiais = [
            10 => "dez", 11 => "onze", 12 => "doze", 13 => "treze",
            14 => "catorze", 15 => "quinze", 16 => "dezasseis",
            17 => "dezassete", 18 => "dezoito", 19 => "dezanove"
        ];

        $dezenas = [
            "", "", "vinte", "trinta", "quarenta",
            "cinquenta", "sessenta", "setenta",
            "oitenta", "noventa"
        ];

        if ($num < 10) {
            return $unidades[$num];
        }

        if ($num >= 10 && $num <= 19) {
            return $especiais[$num];
        }

        $dezena = intdiv($num, 10);
        $unidade = $num % 10;

        if ($unidade == 0) {
            return $dezenas[$dezena];
        }

        return $dezenas[$dezena] . " e " . $unidades[$unidade];
    }
}
$pessoa = new Pessoa(21);
echo "Idade: " . $pessoa->getIdade();
