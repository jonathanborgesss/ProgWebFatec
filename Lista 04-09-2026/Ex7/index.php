<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="valor">Valor do produto: </label>
            <input type="number" id="valor" name="valor" min="0.01" step="0.01" required>
        </div>
        <div>
            <label for="parcelas">Quantidade de parcelas: </label>
            <input type="number" id="parcelas" name="parcelas" min="1" required>
        </div>
        <button type="submit">Planejar parcelas</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = (float) $_POST["valor"];
        $parcelas = (int) $_POST["parcelas"];
        $valorParcela = $valor / $parcelas;
    ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Número da parcela</th>
                    <th>Valor da parcela</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= $parcelas; $i++) {
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>R$ " . number_format($valorParcela, 2, ",", ".") . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    <?php
    }
    ?>
</body>
</html>
