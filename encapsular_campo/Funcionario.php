<?php

declare(strict_types=1);

namespace Alura\EncapsularCampo;

class Funcionario
{
    private $nome;
    private $salario;

    public function __construct(string $nome, float $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario(float $salario)
    {
        $this->salario = $salario;
    }

    public function aumentaSalario(float $aumento)
    {
        $novoSalario = $this->salario + $aumento;
        $this->setSalario($novoSalario);
    }
}
