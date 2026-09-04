<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
</head>
<body>
    <form method="post">
        <label for="quantidade">Quantidade de participantes: </label>
        <input type="number" id="quantidade" name="quantidade" min="1" required>
        <button type="submit">Gerar crachás</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $quantidade = (int) $_POST["quantidade"];

        for ($i = 1; $i <= $quantidade; $i++) {
            echo "<p>Crachá $i gerado.</p>";
        }
    }
    ?>
</body>
</html>
