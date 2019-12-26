<?php declare(strict_types=1);

/**
 * Principio do menor conhecimento ou Lei Demeter violado;
 * $maria nao deveria ter que acessar departamento pra depois
 * acessar o gerente pra entao retornar o nome dele
 */

namespace Alura\OcultarDelegado;

require 'Departamento.php';
require 'Gerente.php';
require 'Pessoa.php';

$maria = new Pessoa(new Departamento(new Gerente('José')));

echo $maria->getNomeDoGerente();
