<?php


require 'config.php';

$lista =[];
$sql = $pdo -> query("SELECT * FROM usuario");
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>
<link rel="stylesheet" type="text/css" href="style.css">

<h1>Listagem de Usuários</h1>

<div class="link-container">
    <a href="cadastrar.php" class="add-link">Cadastrar Usuário</a>
</div>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <?php foreach($lista as $usuario):  ?>
        <tr>
            <td><?= $usuario['id']; ?></td>
            <td><?= $usuario['nome']; ?></td>
            <td><?= $usuario['email']; ?></td>
            <td>
                <a href="editar.php?id=<?= $usuario['id']; ?>" class="edit-link">Editar</a>
                <a href="excluir.php?id=<?= $usuario['id']; ?>" class="delete-link">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?> 
</table>
