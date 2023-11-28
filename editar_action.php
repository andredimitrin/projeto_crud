<?php

require "config.php";

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($id && $nome && $email) {
    // Verificar se o usuário existe antes de tentar atualizar
    $verifica_usuario = $pdo->prepare("SELECT * FROM usuario WHERE id = :id");
    $verifica_usuario->bindValue(':id', $id);
    $verifica_usuario->execute();

    if ($verifica_usuario->rowCount() > 0) {
        // O usuário existe, então podemos proceder com a atualização
        $sql = $pdo->prepare("UPDATE usuario SET nome = :nome, email = :email WHERE id = :id");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':id', $id);
        $sql->execute();

        header("Location: index.php");
        exit;
    } else {
        // Usuário não encontrado, redireciona de volta para a página de edição
        header("Location: editar.php?id={$id}");
        exit;
    }
} else {
    // Informações de entrada incompletas, redireciona de volta para a página de edição
    header("Location: editar.php?id={$id}");
    exit;
}
