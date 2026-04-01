<?php require_once 'sistemaLogin.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
</head>
<body>
    <h1>Sistema de Login</h1>
    <form method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br><br>
        <input type="submit" value="Login">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        $sistemaLogin = new sistemaLogin($usuario, $senha);
        echo nl2br($sistemaLogin->exibirStatus($usuario, $senha));
    }
    ?>