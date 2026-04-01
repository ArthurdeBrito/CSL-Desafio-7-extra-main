<?php require_once 'clubeFidelidade.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clube de Fidelidade</title>
</head>
<body>
     <h1>Clube de Fidelidade</h1>
    <form method="post">
        <label for="nome">Nome do Cliente:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        <label for="valor">Valor da Compra (R$):</label>
        <input type="number" id="valor" name="valor" step="0.01" required>
        <br><br>
        <input type="submit" value="Calcular Pontos e Verificar Resgate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $valor = $_POST["valor"];

        $clubeFidelidade = new ClubeFidelidade($nome, 0, $valor);
        $pontosAcumulados = $clubeFidelidade->converterParaPontos();
        echo "Pontos Acumulados: $pontosAcumulados\n";

        // Exemplo de custo do brinde
        $custoBrinde = 50; // Custo do brinde em pontos
        echo nl2br($clubeFidelidade->verificarResgate($custoBrinde) . "\n");

        if ($clubeFidelidade->verificarResgate($custoBrinde) === "Parabéns, $nome! Você pode resgatar o brinde.") {
            echo nl2br($clubeFidelidade->aplicarResgate($custoBrinde) . "\n");
        }

        echo nl2br($clubeFidelidade->extrato());
    }
    ?>
</body>
</html>