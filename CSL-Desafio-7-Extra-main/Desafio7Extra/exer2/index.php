<?php require_once 'pedidoRestaurante.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido de Restaurante</title>
</head>
<body>
    <h1>Pedido de Restaurante</h1>
    <form method="post">
        <label for="valorTotal">Valor Total do Pedido:</label>
        <input type="number" id="valorTotal" name="valorTotal" step="0.01" required>
        <br><br>
        <label for="numeroPessoas">Número de Pessoas:</label>
        <input type="number" id="numeroPessoas" name="numeroPessoas" required>
        <br><br>
        <input type="submit" value="Calcular Conta">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorTotal = $_POST["valorTotal"];
        $numeroPessoas = $_POST["numeroPessoas"];

        $pedido = new pedidoRestaurante($valorTotal, $numeroPessoas);
        echo nl2br($pedido->exibirConta());
    }
    ?>
</body>
</html>