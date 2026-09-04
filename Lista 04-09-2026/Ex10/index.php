<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
</head>
<body>
    <form method="post">
        <label for="numero">Número inteiro: </label>
        <input type="number" id="numero" name="numero" step="1" required>
        <button type="submit">Gerar tabuada</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = (int) $_POST["numero"];

        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<p>$numero x $i = $resultado</p>";
        }
    }
    ?>
</body>
</html>
