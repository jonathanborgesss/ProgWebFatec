<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="litros">Litros disponíveis: </label>
            <input type="number" id="litros" name="litros" min="0" step="0.1" required>
        </div>
        <div>
            <label for="consumo">Consumo médio por viagem: </label>
            <input type="number" id="consumo" name="consumo" min="0.1" step="0.1" required>
        </div>
        <button type="submit">Calcular viagens</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $litros = (float) $_POST["litros"];
        $consumo = (float) $_POST["consumo"];
        $viagens = 0;

        while ($litros >= $consumo) {
            $viagens++;
            $litros = $litros - $consumo;
            echo "<p>Viagem $viagens realizada. Combustível restante: " . number_format($litros, 1, ",", ".") . " litros.</p>";
        }

        echo "<p>Total de viagens realizadas: $viagens.</p>";
    }
    ?>
</body>
</html>
