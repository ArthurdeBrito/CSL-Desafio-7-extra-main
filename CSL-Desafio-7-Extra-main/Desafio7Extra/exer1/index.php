<?php require_once 'locadoraVeiculo.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora de Veículos</title>
</head>

<body>
    <h1>Locadora de Veículos</h1>
    <form method="post">
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" required>
        <br><br>
        <label for="valorDiaria">Valor da Diária:</label>
        <input type="number" id="valorDiaria" name="valorDiaria" step="0.01" required>
        <br><br>
        <label for="kmInicial">Km Inicial:</label>
        <input type="number" id="kmInicial" name="kmInicial" required>
        <br><br>
        <label for="kmFinal">Km Final:</label>
        <input type="number" id="kmFinal" name="kmFinal" required>
        <br><br>
        <input type="submit" value="Calcular Fatura">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $modelo = $_POST["modelo"];
        $valorDiaria = $_POST["valorDiaria"];
        $kmInicial = $_POST["kmInicial"];
        $kmFinal = $_POST["kmFinal"];

        $locadora = new locadoraVeiculo($modelo, $valorDiaria, $kmInicial, $kmFinal);
        echo nl2br($locadora->gerarFatura());
    }


    ?>