<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 8</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="salario">Salário atual: </label>
            <input type="number" id="salario" name="salario" min="0.01" step="0.01" required>
        </div>
        <div>
            <label for="anos">Quantidade de anos simulados: </label>
            <input type="number" id="anos" name="anos" min="1" required>
        </div>
        <button type="submit">Simular crescimento</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $salario = (float) $_POST["salario"];
        $anos = (int) $_POST["anos"];
    ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Ano</th>
                    <th>Salário</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= $anos; $i++) {
                    $salario = $salario * 1.05;
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>R$ " . number_format($salario, 2, ",", ".") . "</td>";
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
