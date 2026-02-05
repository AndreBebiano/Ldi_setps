<?php
class Carro {
    private string $marca;
    private int $velocidade;

    public function __construct(string $marca) {
        $this->marca = $marca;
        $this->velocidade = 0;
    }

    public function acelerar(): void {
        $this->velocidade += 10;
    }

    public function travar(): void {
        if ($this->velocidade >= 10) {
            $this->velocidade -= 10;
        }
    }

    public function getInfo(): string {
        return "Carro: {$this->marca} | Velocidade: {$this->velocidade} km/h";
    }
}


$carro = new Carro("BMW");
$carro->acelerar();
$carro->acelerar();
$carro->travar();

echo $carro->getInfo();
