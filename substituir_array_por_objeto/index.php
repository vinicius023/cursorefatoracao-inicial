<?php declare(strict_types=1);

namespace Alura\SubstituirArrayPorObjeto;

require 'Usuario.php';

use PDO;

$usuario = new Usuario('Giovanni', 'Tempobono', 'Alura', 'Instrutor');

$pdo = new PDO('sqlite:bancodedados.db');

$inserir_usuario = $pdo->prepare(
    'INSERT INTO usuarios (nome, sobrenome, empresa, cargo) VALUES (:nome,:sobrenome,:empresa,:cargo)'
);

$inserir_usuario->bindValue(':nome', $usuario->getNome());
$inserir_usuario->bindValue(':sobrenome', $usuario->getSobrenome());
$inserir_usuario->bindValue(':empresa', $usuario->getEmpresa());
$inserir_usuario->bindValue(':cargo', $usuario->getCargo());

$inserir_usuario->execute();

$buscar_usuarios = $pdo->prepare('SELECT * FROM usuarios');

if ($buscar_usuarios->execute()) {
    $usuarios = $buscar_usuarios->fetchAll();
    foreach ($usuarios as $user) {
        echo '<br>';
        echo "<p>Nome: {$user['nome']}</p>";
        echo "<p>Sobrenome: {$user['sobrenome']}</p>";
        echo "<p>Empresa: {$user['empresa']}</p>";
        echo "<p>Cargo: {$user['cargo']}</p>";
        echo '<br>';
    }
}
