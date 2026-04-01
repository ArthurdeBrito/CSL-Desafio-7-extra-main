<?php require_once 'monitorEnergia.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitor de Energia</title>
</head>
<body>
    <h1>Monitor de Energia</h1>
    <form method="post">
        <label for="leituraAnterior">Leitura Anterior (kWh):</label>
        <input type="number" id="leituraAnterior" name="leituraAnterior" step="0.01" required>
        <br><br>
        <label for="leituraAtual">Leitura Atual (kWh):</label>
        <input type="number" id="leituraAtual" name="leituraAtual" step="0.01" required>
        <br><br>
        <label for="corBandeira">Cor da Bandeira:</label>
        <select id="corBandeira" name="corBandeira" required>
            <option value="Verde">Verde</option>
            <option value="Amarela">Amarela</option>
            <option value="Vermelha">Vermelha</option>
        </select>
        <br><br>
        <input type="submit" value="Calcular Fatura">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $leituraAnterior = $_POST["leituraAnterior"];
        $leituraAtual = $_POST["leituraAtual"];
        $corBandeira = $_POST["corBandeira"];

        $monitorEnergia = new monitorEnergia($leituraAnterior, $leituraAtual, $corBandeira);
        echo nl2br($monitorEnergia->exibirFatura());
    }
    ?>
</body>
</html>