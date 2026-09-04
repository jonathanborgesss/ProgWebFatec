<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="nome">Nome do colaborador: </label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div>
            <label for="nota">Nota de desempenho: </label>
            <input type="number" id="nota" name="nota" min="0" max="10" step="0.1" required>
        </div>
        <button type="submit">Avaliar desempenho</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST["nome"]);
        $nota = (float) $_POST["nota"];

        if ($nota >= 8) {
            echo "<p>$nome: excelente desempenho.</p>";
        } elseif ($nota >= 6) {
            echo "<p>$nome: desempenho satisfatório.</p>";
        } else {
            echo "<p>$nome: necessita treinamento.</p>";
        }
    }
    ?>
</body>
</html>
