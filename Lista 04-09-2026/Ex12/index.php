<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 12</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="servidor">Valor do servidor: </label>
            <input type="number" id="servidor" name="servidor" min="0.01" step="0.01" required>
        </div>
        <div>
            <label for="economia">Valor economizado por mês: </label>
            <input type="number" id="economia" name="economia" min="0.01" step="0.01" required>
        </div>
        <button type="submit">Simular economia</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorServidor = (float) $_POST["servidor"];
        $economiaMensal = (float) $_POST["economia"];
        $saldo = 0;
        $mes = 0;

        while ($saldo < $valorServidor) {
            $mes++;
            $saldo = $saldo + $economiaMensal;
            echo "<p>Mês $mes: R$ " . number_format($saldo, 2, ",", ".") . ".</p>";
        }

        echo "<p>Serão necessários $mes meses para comprar o servidor.</p>";
    }
    ?>
</body>
</html>
