<?php
require "config.php";

$usuario = [];
$id = filter_input(INPUT_GET, 'id');
if ($id) {
    $sql = $pdo->prepare("SELECT * FROM usuario WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $usuario = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header("Location: index.php");
        exit;
    }
}
?>
<link rel="stylesheet" type="text/css" href="style.css">
<h1>Editar Usuário</h1>
<form method="POST" action="editar_action.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label>
        Nome: <input type="text" name="nome" value="<?php echo isset($usuario['nome']) ? $usuario['nome'] : ''; ?>">
    </label>
    <label>
        E-mail: <input type="text" name="email" value="<?php echo isset($usuario['email']) ? $usuario['email'] : ''; ?>">
    </label>
    <input type="submit" value="Atualizar"/>
</form>
 