<?php

declare(strict_types=1);

namespace Alura\IncorporarClasse;

require 'Contato.php';
require 'Usuario.php';
require 'Telefone.php';

$contato = new Contato(
    'Rua Vergueiro 3185',
    '04101-300'
);

$telefone = new Telefone(
    '11',
    '5571-2751',
    'Comercial'
);

$usuario = new Usuario('Giovanni', 'Tempobono', $contato, $telefone);

echo $usuario->getNome();
echo '<br>';
echo $usuario->getEnderecoECep();
echo '<br>';
echo $usuario->getTelefoneDdd();
