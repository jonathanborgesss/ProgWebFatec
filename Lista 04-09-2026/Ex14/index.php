<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 14</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="inicial">Temperatura inicial: </label>
            <input type="number" id="inicial" name="inicial" step="0.1" required>
        </div>
        <div>
            <label for="maxima">Temperatura máxima segura: </label>
            <input type="number" id="maxima" name="maxima" step="0.1" required>
        </div>
        <button type="submit">Monitorar temperatura</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperatura = (float) $_POST["inicial"];
        $temperaturaMaxima = (float) $_POST["maxima"];
        $ciclo = 0;

        if ($temperatura > $temperaturaMaxima) {
            echo "<p>A temperatura inicial já ultrapassou o limite máximo seguro.</p>";
        } else {
            while ($temperatura <= $temperaturaMaxima) {
                echo "<p>Ciclo $ciclo: " . number_format($temperatura, 1, ",", ".") . "°C.</p>";
                $temperatura++;
                $ciclo++;
            }
        }
    }
    ?>
</body>
</html>
