<?php require_once 'desempenhoVendas.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desempenho de Vendas</title>
</head>
<body>
    <h1>Desempenho de Vendas</h1>
    <form method="post">
        <label for="vendas">Valor Total das Vendas (R$):</label>
        <input type="number" id="vendas" name="vendas" step="0.01" required>
        <br><br>
        <input type="submit" value="Avaliar Desempenho">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $vendas = $_POST["vendas"];

        $desempenhoVendas = new DesempenhoVendas($vendas, 0, 0);
        echo nl2br($desempenhoVendas->verificarMeta(10000)); // Supondo uma meta de R$ 10.000
    }
    ?>
</body>
</html>