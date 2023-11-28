<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you have a PDO connection in your config.php file
    require 'config.php';

    // Retrieve user data from the form
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Insert user data into the database
    $query = $pdo->prepare('INSERT INTO users (name, email) VALUES (?, ?)');
    $query->execute([$nome, $email]);

    // Redirect to the user listing page after saving
    header('Location: lista.php');
    exit();
}

?>
<link rel="stylesheet" type="text/css" href="style.css">
<!-- HTML Aqui -->
<h1>Cadastrar Usuário</h1>
<form method="POST" action="cadastrar_action.php">
    <label>
        Nome: <input type="text" name="nome" required />
    </label>
    <label>
        Email: <input type="email" name="email" required />
    </label>
    <input type="submit" value="Salvar" />
</form>
 