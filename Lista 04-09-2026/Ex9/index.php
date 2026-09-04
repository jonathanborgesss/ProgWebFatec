<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 9</title>
</head>
<body>
    <form method="post">
        <label for="quantidade">Quantidade de produtos fabricados: </label>
        <input type="number" id="quantidade" name="quantidade" min="1" required>
        <button type="submit">Registrar produtos</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $quantidade = (int) $_POST["quantidade"];

        for ($i = 1; $i <= $quantidade; $i++) {
            if ($i % 5 == 0) {
                echo "<p><strong>Produto #$i registrado.</strong></p>";
            } else {
                echo "<p>Produto #$i registrado.</p>";
            }
        }
    }
    ?>
</body>
</html>
