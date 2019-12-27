<?php declare(strict_types=1);

namespace Alura\SubstituirArrayPorObjeto;

class Usuario
{
    private $nome = 'Giovanni';
    private $sobrenome = 'Tempobono';
    private $empresa = 'Alura';
    private $cargo = 'Instrutor';

    public function __construct(string $nome, string $sobrenome, string $empresa, string $cargo) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->empresa = $empresa;
        $this->cargo = $cargo;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function getEmpresa(): string
    {
        return $this->empresa;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }
}
